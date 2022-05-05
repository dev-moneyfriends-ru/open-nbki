<?php

namespace mfteam\nbch\components\tutdf;

use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\Env;
use mfteam\nbch\models\tutdf\NbchTutdfRequest;
use yii\base\BaseObject;
use yii\base\Exception;

/**
 * Отправка в НБКИ
 */
class SendToNbchComponent extends BaseObject
{
    /**
     * @var NbchTutdfRequest
     */
    private $_request;
    /**
     * @var NbchFile|null
     */
    private $_file;
    
    public function __construct(NbchTutdfRequest $request, $config = [])
    {
        $this->_request = $request;
        parent::__construct($config);
    }
    
    /**
     * @return void
     * @throws Exception
     * @throws \yii\base\InvalidConfigException
     * @throws \yii\di\NotInstantiableException
     */
    public function execute()
    {
        $this->beforeExecute();
        
        $module = Env::ensure()->module;
        $mailer = $module->mailer;
        
        $message = $mailer->compose()
            ->attachContent($this->_file->content, [
                'fileName' => $this->_file->fileName
            ])
            ->setTo($module->tutdf->reportEmail)
            ->setSubject($module->partnerName)
            ->setHtmlBody($module->partnerName);
        if(!$message->send()){
            throw new Exception('Send error');
        }
        
        $this->afterExecute();
    }
    
    /**
     * @return void
     * @throws Exception
     */
    private function beforeExecute()
    {
        $this->_file = $this->_request->tutdfZipFile;
        if($this->_file === null){
            throw new Exception('File not found');
        }
        $this->_request->state = NbchTutdfRequest::STATE_SENDING;
        $this->_request->save();
    }
    
    /**
     * @return void
     */
    private function afterExecute()
    {
        $this->_request->state = NbchTutdfRequest::STATE_SENT;
        $this->_request->save();
    }
}