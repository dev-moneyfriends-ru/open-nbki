<?php

namespace mfteam\nbch\components\creditHistory;

use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\Env;
use mfteam\nbch\helpers\XmlToArrayParser;
use mfteam\nbch\models\AddressReq;
use mfteam\nbch\models\BaseItem;
use mfteam\nbch\models\BusinessReq;
use mfteam\nbch\models\IdReq;
use mfteam\nbch\models\InquiryReq;
use mfteam\nbch\models\NbchChRequest;
use mfteam\nbch\models\NbchConsent;
use mfteam\nbch\models\PersonReq;
use mfteam\nbch\models\PreplyReport;
use mfteam\nbch\models\RefReq;
use mfteam\nbch\models\RegnumReq;
use mfteam\nbch\models\SNILSReq;
use yii\base\Component;
use yii\base\Controller;
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
     * @var bool
     */
    public $test = false;
    
    /**
     * @var NbchChRequest
     */
    private $model;
    
    /**
     * @var NbchRequest
     */
    private $request;
    
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
        $this->model = $model;
        return $this->model;
    }
    
    /**
     * @return NbchChRequest
     */
    public function getModel(): NbchChRequest
    {
        return $this->model;
    }
    
    /**
     * @param NbchChRequest $request
     * @return CreditHistoryComponent
     */
    public function setModel(NbchChRequest $request): CreditHistoryComponent
    {
        $this->model = $request;
        return $this;
    }
    
    /**
     * Создать запрос по ЮЛ
     * @param BusinessReq $businessReq
     * @return CreditHistoryComponent
     */
    public function setAsBusiness(BusinessReq $businessReq): CreditHistoryComponent
    {
        $this->request = new NbchRequest();
        $this->request->addData(
            [
                new RefReq(
                    [
                        'product' => RefReq::PRODUCT_BHIP,
                    ]
                ),
                $businessReq,
                'version' => NbchRequest::VERSION,
                'IOType' => 'B2B',
                'OutputFormat' => 'XML',
                'lang' => 'ru',
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
        $this->request = new NbchRequest();
        $this->request->addData(
            [
                new RefReq(
                    [
                        'product' => RefReq::PRODUCT_CHIP,
                    ]
                ),
                $personReq,
                'version' => NbchRequest::VERSION,
                'IOType' => 'B2B',
                'OutputFormat' => 'XML',
                'lang' => 'ru',
            ]
        );
        return $this;
    }
    
    /**
     * @param InquiryReq $inquiry
     * @return $this
     */
    public function addInquiry(InquiryReq $inquiry): CreditHistoryComponent
    {
        $this->request->addData([$inquiry]);
        return $this;
    }
    
    /**
     * @param IdReq $identification
     * @return $this
     */
    public function addIdentification(IdReq $identification): CreditHistoryComponent
    {
        $this->request->addData([$identification]);
        return $this;
    }
    
    /**
     * @param RegnumReq $regnumReq
     * @return $this
     */
    public function addRegnumReq(RegnumReq $regnumReq): CreditHistoryComponent
    {
        $this->request->addData([$regnumReq]);
        return $this;
    }
    
    /**
     * @param SNILSReq $snilsReq
     * @return $this
     */
    public function addSNILSReq(SNILSReq $snilsReq): CreditHistoryComponent
    {
        $this->request->addData([$snilsReq]);
        return $this;
    }
    
    /**
     * @return Response
     * @throws Exception
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     * @throws \yii\httpclient\Exception
     */
    public function send()
    {
        try {
            $this->beforeSend();
            
            $response = $this->request->send();
            $this->updateModel($response);
            
            $parser = new XmlToArrayParser();
            $data = $parser->parseXml($response->content);
            
            if (ArrayHelper::getValue($data, 'preply.err') !== null) {
                \Yii::error(ArrayHelper::getValue($data, 'preply.err'));
                $this->model->status = NbchChRequest::STATE_ERROR;
                $this->model->errorText = \Yii::t('app', 'Code {0}: {1}', [
                    ArrayHelper::getValue($data, 'preply.err.ctErr.Code'),
                    ArrayHelper::getValue($data, 'preply.err.ctErr.Text'),
                ]);
            } else {
                $this->model->status = NbchChRequest::STATE_FINISH;
            }
            
            $this->saveFiles($response);
            
            if (!$this->model->save()) {
                throw new Exception(VarDumper::dumpAsString($this->model->errors));
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
        foreach ($this->request->data as $item) {
            if ($item instanceof BaseItem && !$item->validate()) {
                $errors[] = $item->errors;
            }
        }
        if (!empty($errors)) {
            throw new Exception(VarDumper::dumpAsString($errors));
        }
    }
    
    /**
     * @param string $message
     * @return void
     */
    private function saveError(string $message)
    {
        if ($this->model === null) {
            return;
        }
        $this->model->requestData = base64_encode($this->request->content);
        $this->model->status = NbchChRequest::STATE_ERROR;
        $this->model->errorText = $message;
        $this->model->save(false);
    }
    
    /**
     * @param Response $response
     * @return void
     * @throws Exception
     */
    private function updateModel(Response $response)
    {
        if ($this->model === null) {
            return;
        }
        
        $this->model->requestData = base64_encode($this->request->content);
        $this->model->responseData = base64_encode($response->content);
        $this->model->status = NbchChRequest::STATE_PREPARING;
        
        if (!$this->model->save()) {
            throw new Exception(VarDumper::dumpAsString($this->model->errors));
        }
    }
    
    /**
     * @return void
     * @throws Exception
     */
    private function beforeSend()
    {
        if ($this->model !== null) {
            $this->model->status = NbchChRequest::STATE_EXECUTE;
            if (!$this->model->save()) {
                throw new Exception(VarDumper::dumpAsString($this->model->errors));
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
        if ($this->model === null) {
            return;
        }
        $this->saveXmlResult($response->content);
        $this->saveHtmlResult();
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
        $tempPath = tempnam(sys_get_temp_dir(), 'nbki_request');
        file_put_contents($tempPath, $content);
        $file = new NbchFile();
        $file->setStoragePath($tempPath)
            ->setFileName('nbki_request_' . $this->model->id . '_' . time() . '.xml')
            ->setContent($content)
            ->setEntity($this->model->formName())
            ->setEntityId($this->model->id)
            ->setType(NbchChRequest::FILE_TYPE_XML);
        
        Env::ensure()->module->file->save($file);
    }
    
    /**
     * @return NbchRequest
     */
    public function getRequest(): NbchRequest
    {
        return $this->request;
    }
    
    /**
     * Возвращает объект с содержимым данных КИ
     * @param NbchChRequest $request
     * @return PreplyReport
     */
    public function createPreplyReport(NbchChRequest $request)
    {
        $model = new PreplyReport();
        if (empty($request->responseData)) {
            return $model;
        }
        $responseData = base64_decode($request->responseData);
        $parser = new XmlToArrayParser();
        $data = $parser->parseXml($responseData);
        $model->report = ArrayHelper::getValue($data, 'preply.report');
        return $model;
    }
    
    /**
     * @return false|string
     */
    public function getBusinessView()
    {
        return '@vendor/mf-team/yii2-mf-nbch/src/components/creditHistory/views/business.php';
    }
    
    /**
     * @return false|string
     */
    public function getPersonView()
    {
        return '@vendor/mf-team/yii2-mf-nbch/src/components/creditHistory/views/person.php';
    }
    
    /**
     * @return false|string
     */
    public function getLayout()
    {
        return '@vendor/mf-team/yii2-mf-nbch/src/components/creditHistory/views/layout.php';
    }
    
    /**
     * Сохраняем отчет в HTML
     * @return void
     * @throws Exception
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function saveHtmlResult()
    {
        if (empty($this->model) || $this->model->status !== NbchChRequest::STATE_FINISH) {
            return;
        }
        $preplyReport = $this->createPreplyReport($this->model);
        $view = $this->model->consent->isBusiness() ? $this->getBusinessView() : $this->getPersonView();
        
        $controller = \Yii::createObject(Controller::class);
        $controller->layout = $this->getLayout();
        $content = $controller->render($view, ['preplyReport' => $preplyReport]);
        
        $tempPath = tempnam(sys_get_temp_dir(), 'nbki_request');
        file_put_contents($tempPath, $content);
        $file = new NbchFile();
        $file->setStoragePath($tempPath)
            ->setFileName('nbki_request_' . $this->model->id . '_' . time() . '.html')
            ->setContent($content)
            ->setEntity($this->model->formName())
            ->setEntityId($this->model->id)
            ->setType(NbchChRequest::FILE_TYPE_HTML);
        
        Env::ensure()->module->file->save($file);
    }
}