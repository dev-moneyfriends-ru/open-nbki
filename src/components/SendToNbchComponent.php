<?php

namespace mfteam\nbch\components;

use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\Env;
use mfteam\nbch\models\rutdf\BaseSendNbchRequestInterface;
use mfteam\nbch\models\rutdf\NbchRutdfRequest;
use yii\base\BaseObject;
use yii\base\Exception;

/**
 * Отправка в НБКИ
 */
class SendToNbchComponent extends BaseObject
{
    /**
     * @var BaseSendNbchRequestInterface
     */
    private $request;
    /**
     * @var NbchFile|null
     */
    private $file;
    
    /**
     * @var string
     */
    private $reportEmail;
    
    public function __construct(BaseSendNbchRequestInterface $request, $config = [])
    {
        $this->request = $request;
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
        
        if ($module->rutdf->test) {
            $this->afterExecute();
            return;
        }
        
        $mailer = $module->mailer;
        
        $message = $mailer->compose()
            ->attachContent($this->file->content, [
                'fileName' => $this->file->fileName,
            ])
            ->setTo($this->reportEmail)
            ->setSubject($module->partnerName)
            ->setHtmlBody($module->partnerName);
        if (!$message->send()) {
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
        $this->file = $this->request->getZipFile();
        if ($this->file === null) {
            throw new Exception('File not found');
        }
        $this->request->setStateSending();
        $this->request->save();
        
        $module = Env::ensure()->module;
        if ($this->request instanceof NbchRutdfRequest) {
            $this->reportEmail = $module->rutdf->reportEmail;
        }
    }
    
    /**
     * @return void
     */
    private function afterExecute()
    {
        $this->request->setStateSent();
        $this->request->save();
    }
}