<?php

namespace mfteam\nbch\components\tutdf;

use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\components\NbchEsignClientInterface;
use mfteam\nbch\Env;
use mfteam\nbch\models\tutdf\NbchTutdfRequest;
use Yii;
use yii\base\BaseObject;
use yii\base\ErrorException;
use yii\base\Exception;
use yii\base\InvalidConfigException;
use yii\di\NotInstantiableException;
use yii\helpers\FileHelper;
use yii\helpers\VarDumper;
use ZipArchive;

/**
 * Создание подписанного архива p7z для отправки в НБКИ
 */
class CreateZipArchiveComponent extends BaseObject
{
    /**
     * @var NbchTutdfRequest
     */
    private $_request;
    /**
     * @var NbchEsignClientInterface
     */
    private $_client;
    
    /**
     * @var string
     */
    private $_tmpPath;
    
    /**
     * @var string
     */
    private $_tmpSigFile;
    /**
     * @var NbchFile|null
     */
    private $_file;
    
    /**
     * @var string
     */
    private $_zipFile;
    
    public function __construct(NbchTutdfRequest $request, $config = [])
    {
        $this->_request = $request;
        parent::__construct($config);
    }
    
    /**
     * @return void
     * @throws Exception
     * @throws InvalidConfigException
     * @throws ErrorException
     * @throws NotInstantiableException
     */
    public function execute(): void
    {
        try {
            $this->beforeSend();
            $this->signFile();
            $this->createZip();
            $this->signZip();
        } finally {
            $tmpPath = Yii::getAlias('@runtime/nbch/tutdf/' . $this->_request->id);
            FileHelper::removeDirectory($tmpPath);
        }
    }
    
    /**
     * @return void
     * @throws Exception
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    private function beforeSend(): void
    {
        $this->_file = $this->_request->tutdfFile;
        if ($this->_file === null) {
            throw new Exception('TUTDF file not found');
        }
        
        $this->_client = Env::ensure()->module->esignClient;
        $this->_tmpPath = Yii::getAlias('@runtime/nbch/tutdf/' . $this->_request->id);
        FileHelper::createDirectory($this->_tmpPath);
    }
    
    /**
     * @return void
     * @throws Exception
     */
    private function signFile(): void
    {
        $file = $this->_file;
        $this->_client->setSrcContent($file->getContent());
        if (!$this->_client->signTutdf()) {
            throw new Exception(VarDumper::dumpAsString($this->_client->getResponseResult()));
        }
        $tmpSigFile = $this->_tmpPath . DIRECTORY_SEPARATOR  . $file->fileName . '.sig';
        if (!file_put_contents($tmpSigFile, base64_decode($this->_client->getResponseResult()))) {
            throw new Exception('Save file ' . $tmpSigFile . ' error');
        }
        $this->_tmpSigFile = $tmpSigFile;
    
        $fileManager = Env::ensure()->module->file;
    
        $file = new NbchFile();
        $file->setContent(base64_decode($this->_client->getResponseResult()))
            ->setFileName($this->_file->fileName . '.sig')
            ->setEntityId($this->_request->id)
            ->setEntity(NbchTutdfRequest::ENTITY)
            ->setType(NbchTutdfRequest::FILE_TUTDF_SIG);
    
        if(!$fileManager->save($file)){
            throw new Exception('Save sig error');
        }
        
        $this->_request->state = NbchTutdfRequest::STATE_SIGNED_TUTDF;
        $this->_request->save();
    }
    
    /**
     * @return void
     * @throws Exception
     */
    private function createZip(): void
    {
        $this->_request->state = NbchTutdfRequest::STATE_EXECUTE_CREATE_ZIP;
        $this->_request->save();
        
        $zip = new ZipArchive();
        $fileName = $this->_file->fileName;
        $zipFile = $this->_tmpPath . DIRECTORY_SEPARATOR  . $fileName . '.zip';
        
        if (file_exists($zipFile)) {
            unlink($zipFile);
        }
        
        if (!$zip->open($zipFile, ZipArchive::CREATE)) {
            throw new Exception('Create zip error ' . $zipFile);
        }
        
        $zip->addFromString($fileName, $this->_file->content);
        $zip->addFile($this->_tmpSigFile, $fileName . '.sig');
        $zip->close();
        
        $this->_zipFile = $zipFile;
    
        $this->_request->state = NbchTutdfRequest::STATE_CREATED_ZIP;
        $this->_request->save();
    }
    
    /**
     * @return void
     * @throws Exception
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    private function signZip(): void
    {
        $this->_request->state = NbchTutdfRequest::STATE_EXECUTE_SIGN_ZIP;
        $this->_request->save();
        
        $client = $this->_client;
        $client->setSrcContent(file_get_contents($this->_zipFile));
        
        if (!$client->signTutdfZip()) {
            throw new Exception(VarDumper::dumpAsString($client->getResponseResult()));
        }
        $content = base64_decode($client->getResponseResult());
        
        $fileManager = Env::ensure()->module->file;
        
        $file = new NbchFile();
        $file->setContent($content)
            ->setFileName($this->_file->fileName . '.zip.p7m')
            ->setEntityId($this->_request->id)
            ->setEntity(NbchTutdfRequest::ENTITY)
            ->setType(NbchTutdfRequest::FILE_TUTDF_ZIP);
        
        if(!$fileManager->save($file)){
            throw new Exception('Save signed zip error');
        }
    
        $this->_request->state = NbchTutdfRequest::STATE_SIGNED_ZIP;
        $this->_request->save();
    }
}