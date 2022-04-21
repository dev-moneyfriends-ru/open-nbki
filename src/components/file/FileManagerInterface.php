<?php

namespace mfteam\nbch\components\file;

use yii\base\Exception;

/**
 * Организует доступ к файлам модуля
 */
interface FileManagerInterface
{
    /**
     * @param string $type
     * @param string $entity
     * @param $entityId
     * @return NbchFile|null
     */
    public function getFile(string $type, string $entity, $entityId): ?NbchFile;
    
    /**
     * @param string $name
     * @param string $type
     * @param string $entity
     * @param null $entityId
     * @return bool
     */
    public function fileExist(string $name, string $type, string $entity, string $entityId): bool;
    
    /**
     * @param NbchFile $file
     * @return bool
     * @throws Exception
     */
    public function save(NbchFile $file): bool;
}