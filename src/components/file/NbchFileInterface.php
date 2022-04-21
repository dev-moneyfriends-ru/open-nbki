<?php

namespace mfteam\nbch\components\file;

/**
 * Файлы НБКИ
 */
interface NbchFileInterface
{
    
    public function getStoragePath():? string;
    
    public function getContent():?string;
}