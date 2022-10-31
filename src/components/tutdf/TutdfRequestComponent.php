<?php

namespace mfteam\nbch\components\tutdf;

use mfteam\nbch\components\CreateZipArchiveComponent;
use mfteam\nbch\components\SendToNbchComponent;
use mfteam\nbch\models\NbchControl;
use mfteam\nbch\models\tutdf\NbchTutdfRequest;
use Yii;
use yii\base\Component;
use yii\base\Exception;
use yii\base\InvalidConfigException;

/**
 * Компонент для отправки данных в НБКИ в формате TUTDF с помощью EMAIL
 * @deprecated
 */
class TutdfRequestComponent extends Component
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
    
    public $reportEmail = 'CreditHistory@nbki.ru';
    
    private $_request;
    
    /**
     * @param NbchTutdfRequest $request
     * @return bool
     */
    public function send(NbchTutdfRequest $request)
    {
        $this->_request = $request;
        try{
            $this->beforeSend();
            
            $createdZipComponent = new CreateZipArchiveComponent($request);
            $createdZipComponent->execute();
            
            $sendComponent = new SendToNbchComponent($request);
            $sendComponent->execute();
            
        }catch (\Throwable $e){
            $this->saveError($e);
            return false;
        }
        return true;
    }
    
    /**
     * @param \Throwable $e
     * @return void
     */
    private function saveError(\Throwable $e)
    {
        Yii::error($e);
        
        $request = $this->_request;
        $request->state = NbchTutdfRequest::STATE_ERROR;
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
        if(!$this->_request->canSend()){
            throw new Exception('Wrong request status');
        }
        if($this->_request->tutdfFile === null){
            throw new Exception('TUTDF file not found');
        }
        
        $request = $this->_request;
        $request->state = NbchTutdfRequest::STATE_EXECUTE_SIGN_TUTDF;
        $request->checkAt = null;
        $request->checkBy = null;
        
        if(!$request->save()){
            throw new Exception('Save request error');
        }
        
        $control = NbchControl::findByOffer($request->offerUuid);
        $control->clear();
        $control->setPlannedMessage(0, 24  * 3600);
    
        if(!$control->save()){
            throw new Exception('Save control error');
        }
    }
    
}