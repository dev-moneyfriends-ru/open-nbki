<?php

namespace mfteam\nbch\components;

use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\components\file\NbchFileInterface;
use mfteam\nbch\Env;
use mfteam\nbch\models\rutdf\BaseSendNbchRequestInterface;
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
     * @var BaseSendNbchRequestInterface
     */
    private $request;
    /**
     * @var NbchEsignClientInterface
     */
    private $client;
    
    /**
     * @var string
     */
    private $tmpPath;
    
    /**
     * @var string
     */
    private $tmpSigFile;
    /**
     * @var NbchFileInterface|null
     */
    private $file;
    
    /**
     * @var string
     */
    private $zipFile;

    /**
     * @var array|string|string[]
     */
    private $baseFileName;
    
    public function __construct(BaseSendNbchRequestInterface $request, $config = [])
    {
        $this->request = $request;
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
            $tmpPath = $this->request->getTmpPath();
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
        $this->file = $this->request->getFile();
        if ($this->file === null) {
            throw new Exception('File not found');
        }
        
        $this->client = Env::ensure()->module->esignClient;
        $this->tmpPath = $this->request->getTmpPath();
        FileHelper::createDirectory($this->tmpPath);
        $this->baseFileName = str_replace('.xml', '', $this->file->getFileName());
    }
    
    /**
     * @return void
     * @throws Exception
     */
    private function signFile(): void
    {
        $file = $this->file;
        $this->client->setSrcContent($file->getContent());
        $this->client->srcFile = base64_decode($this->client->srcFile);
        if (!$this->client->signNbchFile()) {
            throw new Exception(VarDumper::dumpAsString($this->client->getResponseResult()));
        }
        $tmpSigFile = $this->tmpPath . DIRECTORY_SEPARATOR . $file->fileName . '.sig';
        if (!file_put_contents($tmpSigFile, base64_decode($this->client->getResponseResult()))) {
            throw new Exception('Save file ' . $tmpSigFile . ' error');
        }
        $this->tmpSigFile = $tmpSigFile;
        
        $fileManager = Env::ensure()->module->file;
        
        $file = new NbchFile();
        $file->setContent(base64_decode($this->client->getResponseResult()))
            ->setStoragePath($tmpSigFile)
            ->setFileName($this->file->fileName . '.sig')
            ->setEntityId($this->request->id)
            ->setEntity($this->request->getEntity())
            ->setType($this->request->getSigFileType());
        
        if (!$fileManager->save($file)) {
            throw new Exception('Save sig error');
        }
        
        $this->request->setStateSigned();
        $this->request->save();
    }
    
    /**
     * @return void
     * @throws Exception
     */
    private function createZip(): void
    {
        $this->request->setStateExecuteCreateZip();
        $this->request->save();
        
        $zip = new ZipArchive();
        $fileName = $this->baseFileName;
        $zipFile = $this->tmpPath . DIRECTORY_SEPARATOR . $fileName . '.zip';
        
        if (file_exists($zipFile)) {
            unlink($zipFile);
        }
        
        if (!$zip->open($zipFile, ZipArchive::CREATE)) {
            throw new Exception('Create zip error ' . $zipFile);
        }
        
        $zip->addFromString($this->file->getFileName(), $this->file->content);
        $zip->addFile($this->tmpSigFile, $this->file->getFileName() . '.sig');
        $zip->close();
        
        $this->zipFile = $zipFile;
        
        $this->request->setStateCreatedZip();
        $this->request->save();
    }
    
    /**
     * @return void
     * @throws Exception
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    private function signZip(): void
    {
        $this->request->setStateExecuteSignZip();
        $this->request->save();
        
        $client = $this->client;
        $client->setSrcContent(file_get_contents($this->zipFile));
        
        if (!$client->signNbchZip()) {
            throw new Exception(VarDumper::dumpAsString($client->getResponseResult()));
        }
        $content = base64_decode($client->getResponseResult());
        
        $fileManager = Env::ensure()->module->file;
    
        $tmpFile = $this->tmpPath . DIRECTORY_SEPARATOR . $this->baseFileName . '.zip.p7m';
        if (!file_put_contents($tmpFile, base64_decode($this->client->getResponseResult()))) {
            throw new Exception('Save file ' . $tmpFile . ' error');
        }
        
        $file = new NbchFile();
        $file->setContent($content)
            ->setStoragePath($tmpFile)
            ->setFileName($this->baseFileName . '.zip.p7m')
            ->setEntityId($this->request->id)
            ->setEntity($this->request->getEntity())
            ->setType($this->request->getFileZipType());
        
        if (!$fileManager->save($file)) {
            throw new Exception('Save signed zip error');
        }
        
        $this->request->setStateSignedZip();
        $this->request->save();
    }
}
