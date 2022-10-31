<?php

namespace mfteam\nbch\components\file;

/**
 * Файлы НБКИ
 */
interface NbchFileInterface
{
    
    public function getStoragePath():? string;
    
    public function getContent():?string;
    
    /**
     * @return string
     */
    public function getFileName(): string;
    
    /**
     * @return mixed
     */
    public function getId();
}