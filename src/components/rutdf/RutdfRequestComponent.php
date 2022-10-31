<?php

namespace mfteam\nbch\components\rutdf;

use mfteam\nbch\components\CreateZipArchiveComponent;
use mfteam\nbch\components\SendToNbchComponent;
use mfteam\nbch\exceptions\CreateNbchRutdfRequestException;
use mfteam\nbch\models\NbchControl;
use mfteam\nbch\models\rutdf\NbchRutdfRequest;
use mfteam\nbch\models\tutdf\NbchTutdfRequest;
use Yii;
use yii\base\Exception;
use yii\base\InvalidConfigException;
use yii\helpers\VarDumper;

/**
 * Компонент для отправки данных в НБКИ в формате RUTDF с помощью EMAIL
 */
class RutdfRequestComponent extends \yii\base\Component
{
    /**
     * Имя пользователя для передачи данных
     * @var string
     */
    public $userName;
    
    /**
     * Пароль для передачи данных
     * @var string
     */
    public $password;
    
    /**
     * ИНН источника.
     * @var string
     */
    public $sourceInn = "";
    
    /**
     * ОГРН источника.
     * @var string
     */
    public $sourceOgrn = "";
    
    /**
     * Адрес куда слать отчеты
     * @var string
     */
    public $reportEmail = 'RUTDF@nbki.ru';
    
    /**
     * @var NbchRutdfRequest
     */
    protected $request;
    
    /**
     * Создание нового отчета RUTDF
     * @param string $offerUuid
     * @param string $event
     * @return NbchRutdfRequest
     * @throws CreateNbchRutdfRequestException
     */
    public function createRequest(string $offerUuid, string $event)
    {
        $model = new NbchRutdfRequest([
            'offerUuid' => $offerUuid,
            'event' => $event,
            'state' => NbchRutdfRequest::STATE_NEW,
        ]);
        if (!$model->save()) {
            throw new CreateNbchRutdfRequestException('Create error' . VarDumper::dumpAsString($model->errors));
        }
        return $model;
    }
    
    /**
     * Отправка отчета RUTDF
     * @param NbchRutdfRequest $request
     * @return bool
     */
    public function send(NbchRutdfRequest $request)
    {
        $this->request = $request;
        try {
            $this->beforeSend();
            
            $createdZipComponent = new CreateZipArchiveComponent($request);
            $createdZipComponent->execute();
            
            $sendComponent = new SendToNbchComponent($request);
            $sendComponent->execute();
            
        } catch (\Throwable $e) {
            $this->saveError($e);
            return false;
        }
        return true;
    }
    
    /**
     * Возвращает последний созданный отчет
     * @param $offerUuid
     * @return NbchRutdfRequest|null
     */
    public function findLastRequest($offerUuid)
    {
        return NbchRutdfRequest::find()->where(['offerUuid' => $offerUuid])->orderBy(['createdAt' => SORT_DESC])->one();
    }
    
    /**
     * Возвращает отчет по его ID
     * @param int $id
     * @return NbchRutdfRequest|null
     */
    public function findById(int $id)
    {
        return NbchRutdfRequest::findOne($id);
    }
    
    /**
     * @param \Throwable $e
     * @return void
     */
    private function saveError(\Throwable $e)
    {
        Yii::error($e);
        
        $request = $this->request;
        $request->state = NbchRutdfRequest::STATE_ERROR;
        $request->errorMessage = $e->getMessage();
        $request->save(false);
    }
    
    /**
     * @return void
     * @throws Exception
     * @throws InvalidConfigException
     */
    private function beforeSend()
    {
        if (!$this->request->canSend()) {
            throw new Exception('Wrong request status');
        }
        if ($this->request->ru === null) {
            throw new Exception('TUTDF file not found');
        }
        
        $request = $this->request;
        $request->state = NbchRutdfRequest::STATE_EXECUTE_SIGN_RUTDF;
        $request->checkAt = null;
        $request->checkBy = null;
        
        if (!$request->save()) {
            throw new Exception('Save request error');
        }
        
        $control = NbchControl::findByOffer($request->offerUuid);
        $control->clear();
        $control->setPlannedMessage(0, 24 * 3600);
        
        if (!$control->save()) {
            throw new Exception('Save control error');
        }
    }
}