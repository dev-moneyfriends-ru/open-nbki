<?php

namespace mfteam\nbch\components\file;

use yii\base\Component;
use yii\base\Exception;
use yii\helpers\FileHelper;

/**
 * Хранит файлы в папке runtime
 */
class RuntimeFileManager extends Component implements FileManagerInterface
{
    /**
     * @var string Путь к директории в которой будут храниться файлы
     */
    public $rootPath = '@runtime/nbch';
    
    /**
     * @param string $type
     * @param string $entity
     * @param $entityId
     * @return NbchFile|null
     */
    public function getFile(string $type, string $entity, $entityId): ?NbchFile
    {
        $path = $this->rootPath . '/' . $entity . '/' . $entityId . '/' . $type;
        $files = FileHelper::findFiles(\Yii::getAlias($path));
        if (empty($files)) {
            return null;
        }
        $files = array_combine($files, array_map('filectime', $files));
        arsort($files);
        $filePath = key($files);
        $file = $this->createNbchFileByPath($filePath);
        return $file->setFileName(basename($filePath))
            ->setType($type)
            ->setEntity($entity)
            ->setEntityId($entityId);
    }
    
    /**
     * @param string $path
     * @return NbchFile
     */
    private function createNbchFileByPath(string $path): NbchFile
    {
        $model = new NbchFile();
        $model->setStoragePath($path);
        $model->setContent(file_get_contents($path));
        return $model;
    }
    
    /**
     * @param string $name
     * @param string $type
     * @param string $entity
     * @param $entityId
     * @return bool
     */
    public function fileExist(string $name, string $type, string $entity, string $entityId): bool
    {
        $path = $this->rootPath . '/' . $entity . '/' . $entityId . '/' . $type . '/' . $name;
        $realPath = \Yii::getAlias($path);
        return is_file($realPath);
    }
    
    /**
     * @param NbchFile $file
     * @return bool
     * @throws Exception
     */
    public function save(NbchFile $file): bool
    {
        $path = implode('/', [
            $this->rootPath,
            $file->type,
            $file->entity,
            $file->entityId,
        ]);
        $path = \Yii::getAlias($path);
        $filePath = $path . '/' . $file->fileName;
        if(!FileHelper::createDirectory($path)){
            throw new Exception('Create path error');
        }
        if(!file_exists($filePath)){
            touch($filePath);
        }
        if(!file_put_contents($filePath, $file->content)){
            return false;
        }
        return true;
    }
    
}