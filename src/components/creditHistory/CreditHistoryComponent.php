<?php

namespace mfteam\nbch\components\creditHistory;

use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\Env;
use mfteam\nbch\models\AddressReq;
use mfteam\nbch\models\BaseItem;
use mfteam\nbch\models\BusinessReq;
use mfteam\nbch\models\IdReq;
use mfteam\nbch\models\InquiryReq;
use mfteam\nbch\models\NbchChRequest;
use mfteam\nbch\models\NbchConsent;
use mfteam\nbch\models\PersonReq;
use mfteam\nbch\models\RefReq;
use yii\base\Component;
use yii\base\Exception;
use yii\base\InvalidConfigException;
use yii\di\NotInstantiableException;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use yii\httpclient\Response;

/**
 * @property-write BusinessReq $asBusiness
 * @property-write InquiryReq $inquiry
 * @property NbchChRequest $model
 * @property-read NbchRequest $request
 * @property-write PersonReq $asCustomer
 */
class CreditHistoryComponent extends Component
{
    /**
     * Адрес для запросов кредитной истории
     * @var string
     */
    public $apiUrl = 'http://icrs.demo.nbki.ru/products/B2BRequestServlet';
    
    /**
     * Имя пользователя для запросов
     * @var string
     */
    public $userName;
    
    /**
     * Пароль для запросов
     * @var string
     */
    public $password;
    
    /**
     * @var NbchChRequest
     */
    protected $_model;
    
    /**
     * @var NbchRequest
     */
    private $_request;
    
    /**
     * @param NbchConsent $consent
     * @return NbchChRequest
     * @throws Exception
     */
    public function createRequest(NbchConsent $consent)
    {
        $model = new NbchChRequest([
            'consentId' => $consent->id,
        ]);
        if (!$model->save()) {
            throw new Exception(VarDumper::dumpAsString($model->errors));
        }
        $this->_model = $model;
        return $this->_model;
    }
    
    /**
     * @return NbchChRequest
     */
    public function getModel(): NbchChRequest
    {
        return $this->_model;
    }
    
    /**
     * @param NbchChRequest $request
     * @return CreditHistoryComponent
     */
    public function setModel(NbchChRequest $request): CreditHistoryComponent
    {
        $this->_model = $request;
        return $this;
    }
    
    /**
     * Создать запрос по ЮЛ
     * @param BusinessReq $businessReq
     * @return CreditHistoryComponent
     */
    public function setAsBusiness(BusinessReq $businessReq): CreditHistoryComponent
    {
        $this->_request = new NbchRequest();
        $this->_request->addData(
            [
                new RefReq(
                    [
                        'product' => RefReq::PRODUCT_BHST,
                        'userReference' => RefReq::PRODUCT_BHST . time(),
                    ]
                ),
                $businessReq,
                'version' => NbchRequest::VERSION,
            ]
        );
        
        return $this;
    }
    
    /**
     * Создать запрос по ФЛ
     * @param PersonReq $personReq
     * @return CreditHistoryComponent
     */
    public function setAsCustomer(PersonReq $personReq): CreditHistoryComponent
    {
        $this->_request = new NbchRequest();
        $this->_request->addData(
            [
                new RefReq(
                    [
                        'product' => RefReq::PRODUCT_CHST,
                        'userReference' => RefReq::PRODUCT_CHST . time(),
                    ]
                ),
                $personReq,
                'version' => NbchRequest::VERSION,
            ]
        );
        return $this;
    }
    
    /**
     * @param InquiryReq $inquiry
     * @return $this
     */
    public function setInquiry(InquiryReq $inquiry): CreditHistoryComponent
    {
        $this->_request->addData([$inquiry]);
        return $this;
    }
    
    /**
     * @param AddressReq $address
     * @return $this
     */
    public function addAddress(AddressReq $address): CreditHistoryComponent
    {
        $this->_request->addData([$address]);
        return $this;
    }
    
    /**
     * @param IdReq $identification
     * @return $this
     */
    public function addIdentification(IdReq $identification): CreditHistoryComponent
    {
        $this->_request->addData([$identification]);
        return $this;
    }
    
    public function send()
    {
        try {
            $this->beforeSend();
            
            $response = $this->_request->send();
            $this->updateModel($response);
            $this->saveFiles($response);
            
            $this->_model->status = NbchChRequest::STATE_FINISH;
            if (!$this->_model->save()) {
                throw new Exception(VarDumper::dumpAsString($this->_model->errors));
            }
            
            return $response;
        } catch (\Exception $e) {
            $this->saveError($e->getMessage());
            throw $e;
        }
    }
    
    /**
     * @return void
     * @throws Exception
     */
    private function validate()
    {
        $errors = [];
        foreach ($this->_request->data as $item) {
            if ($item instanceof BaseItem && !$item->validate()) {
                $errors[] = $item->errors;
            }
        }
        if (!empty($errors)) {
            throw new Exception(VarDumper::dumpAsString($errors));
        }
    }
    
    private function saveError(string $message)
    {
        if ($this->_model === null) {
            return;
        }
        $this->_model->requestData = base64_encode($this->_request->content);
        $this->_model->status = NbchChRequest::STATE_ERROR;
        $this->_model->errorText = $message;
        $this->_model->save(false);
    }
    
    /**
     * @param Response $response
     * @return void
     * @throws Exception
     */
    private function updateModel(Response $response)
    {
        if ($this->_model === null) {
            return;
        }
        $this->_model->requestData = base64_encode($this->_request->content);
        $this->_model->responseData = base64_encode($response->content);
        
        if (ArrayHelper::getValue($response->data, 'preply.err') !== null){
            $this->_model->status = NbchChRequest::STATE_ERROR;
            $this->_model->errorText = \Yii::t('app', 'Code {0}: {1}',[
                ArrayHelper::getValue($response->data, 'preply.err.ctErr.Code'),
                ArrayHelper::getValue($response->data, 'preply.err.ctErr.Text'),
            ]);
        }else{
            $this->_model->status = NbchChRequest::STATE_PREPARING;
        }
       
        if (!$this->_model->save()) {
            throw new Exception(VarDumper::dumpAsString($this->_model->errors));
        }
        $this->_model->save();
    }
    
    /**
     * @return void
     * @throws Exception
     */
    private function beforeSend()
    {
        if ($this->_model !== null) {
            $this->_model->status = NbchChRequest::STATE_EXECUTE;
            if (!$this->_model->save()) {
                throw new Exception(VarDumper::dumpAsString($this->_model->errors));
            }
        }
        $this->validate();
    }
    
    /**
     * @param Response $response
     * @return void
     * @throws Exception
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    private function saveFiles(Response $response)
    {
        if ($this->_model === null) {
            return;
        }
        
        $this->saveXmlResult($response->content);
    }
    
    /**
     * @param string $content
     * @return void
     * @throws Exception
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    private function saveXmlResult(string $content)
    {
        $tempPath = tempnam('/tmp', 'nbki_request');
        file_put_contents($tempPath, $content);
        $file = new NbchFile();
        $file->setStoragePath($tempPath)
            ->setFileName('nbki_request_'. $this->_model->id . '_' . time())
            ->setContent($content)
            ->setEntity($this->_model->formName())
            ->setEntityId($this->_model->id)
            ->setType(NbchChRequest::FILE_TYPE_XML);
        
        Env::ensure()->module->file->save($file);
    }
    
    /**
     * @return NbchRequest
     */
    public function getRequest(): NbchRequest
    {
        return $this->_request;
    }
}