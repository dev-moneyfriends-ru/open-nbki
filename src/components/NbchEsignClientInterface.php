<?php

namespace mfteam\nbch\components;

use yii\base\Exception;

interface NbchEsignClientInterface
{
    /**
     * Устанавливаем контент файла
     * @param string $content
     * @return $this
     */
    public function setSrcContent(string $content);
    
    /**
     * @return bool
     * @throws Exception
     */
    public function nbchUnzip();
    
    /**
     * @return bool
     * @throws Exception
     */
    public function signNbchFile(): bool;
    
    /**
     * @return bool
     * @throws Exception
     */
    public function signNbchZip(): bool;
    
    /**
     * @return array|string
     */
    public function getResponseResult();
    
    /**
     * @return bool
     * @throws Exception
     */
    public function nbchDecryptArchive(): bool;
}