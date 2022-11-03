<?php

namespace mfteam\nbch\components;

use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\Env;
use mfteam\nbch\models\BaseSendNbchRequestInterface;
use Yii;
use yii\base\BaseObject;
use yii\base\Exception;
use yii\base\InvalidConfigException;
use yii\di\NotInstantiableException;
use yii\helpers\FileHelper;
use yii\helpers\VarDumper;
use ZipArchive;

/**
 * Распаковка и сохранение архива с квитанцией
 */
class UnzipConfirmComponent extends BaseObject
{
    /**
     * @var BaseSendNbchRequestInterface
     */
    private $request;
    /**
     * @var string
     */
    private $tmpPath;
    
    public function __construct(BaseSendNbchRequestInterface $request, $config = [])
    {
        parent::__construct($config);
        $this->request = $request;
    }
    
    /**
     * @throws Exception
     */
    public function execute()
    {
        $this->beforeExecute();
        
        $content = $this->getContent();
        $this->createTmpPath();
        $zipContent = $this->decryptArchive($content);
        $this->extractArchive($zipContent);
        $this->loadFiles();
        
        if ($this->request->rejectFile === null) {
            $this->request->setStateComplete();
        } else {
            $this->request->setStateNbchError();
        }
        
        if (!$this->request->save()) {
            throw new Exception(VarDumper::dumpAsString($this->request->errors));
        }
        return true;
    }
    
    /**
     * @throws Exception
     */
    private function beforeExecute()
    {
        if ($this->request->getNbchConfirmZipP7mFile() === null) {
            throw new Exception('Квитанция не найдена');
        }
    }
    
    /**
     * @param string $content
     * @return false|string
     * @throws Exception
     */
    private function decryptArchive(string $content)
    {
        $client = Env::ensure()->module->esignClient;
        $client->setSrcContent($content);
        for ($i = 0; $i < 10; $i++) {
            if (!$client->nbchDecryptArchive()) {
                sleep(5);
            } else {
                return base64_decode($client->getResponseResult());
            }
        }
        throw new Exception('Не удалось расшифровать архив');
    }
    
    /**
     * @param string $zipContent
     * @return void
     * @throws Exception
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    private function extractArchive(string $zipContent)
    {
        
        $zipFile = $this->tmpPath . $this->request->getFile()->fileName . '.zip';
        file_put_contents($zipFile, $zipContent);
        $zipArchive = new ZipArchive();
        if (!$zipArchive->open($zipFile)) {
            throw new Exception('Архив не найден');
        }
        if (!$zipArchive->extractTo($this->tmpPath)) {
            throw new Exception('Не удалось распаковать архив');
        }
        unlink($zipFile);
        
    }
    
    /**
     * @throws Exception
     */
    private function createTmpPath()
    {
        $this->tmpPath = Yii::getAlias(
            '@runtime/nbch/confirm/' . $this->request->getFile()->fileName . DIRECTORY_SEPARATOR
        );
        FileHelper::createDirectory($this->tmpPath);
    }
    
    /**
     * @return string
     * @throws Exception
     */
    private function getContent()
    {
        $nbkiConfirmZipP7mFile = $this->request->getNbchConfirmZipP7mFile();
        if ($nbkiConfirmZipP7mFile === null) {
            throw new Exception();
        }
        $content = $nbkiConfirmZipP7mFile->getContent();
        if ($content === false) {
            throw new Exception('Не удалось получить содержимое квитанции');
        }
        return $content;
    }
    
    /**
     * @return void
     * @throws \yii\base\ErrorException
     */
    private function loadFiles()
    {
        $files = FileHelper::findFiles($this->tmpPath);
        foreach ($files as $fileName) {
            if ($this->isRejectFile($fileName)) {
                $this->uploadRejectFile($fileName);
            }
            if ($this->isTicketFile($fileName)) {
                $this->uploadTicketFile($fileName);
            }
            if ($this->isTicketSigFile($fileName)) {
                $this->uploadTicketSigFile($fileName);
            }
        }
        FileHelper::removeDirectory($this->tmpPath);
    }
    
    private function isRejectFile($fileName)
    {
        return strpos($fileName, '_reject');
    }
    
    private function uploadRejectFile($fileName)
    {
        $this->uploadFile($this->_model->tutdfFile->name . '_reject', $fileName, $this->request->getFileRejectType());
    }
    
    private function uploadFile($name, $path, $type)
    {
        $file = new NbchFile();
        $file->setFileName($name)
            ->setStoragePath($path)
            ->setType($type)
            ->setEntity($this->request->getEntity())
            ->setEntityId($this->request->id)
            ->setContent(file_get_contents($path));
        
        $fileManager = Env::ensure()->module->file;
        $fileManager->save($file);
        
        if ($fileManager->save($file) === false) {
            unlink($path);
            throw new Exception('Не удалось сохранить файл.');
        }
        unlink($path);
    }
    
    private function isTicketFile($fileName)
    {
        return strpos($fileName, '_ticket') && strpos($fileName, '_ticket.sig') === false;
    }
    
    private function uploadTicketFile($fileName)
    {
        $this->uploadFile($this->_model->tutdfFile->name . '_ticket', $fileName, $this->request->getFileTicketType());
    }
    
    private function isTicketSigFile($fileName)
    {
        return strpos($fileName, '_ticket.sig');
    }
    
    private function uploadTicketSigFile($fileName)
    {
        $this->uploadFile(
            $this->_model->tutdfFile->name . '_ticket.sig',
            $fileName,
            $this->request->getFileTicketSigType()
        );
    }
}