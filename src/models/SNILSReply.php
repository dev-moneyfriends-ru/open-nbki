<?php

namespace mfteam\nbch\models;

/**
 * СНИЛС
 */
class SNILSReply extends BaseItem
{
    /**
     * СНИЛС
     * @var string $snils
     */
    public $snils = '';
    
    /**
     * @return string
     */
    public function getSnils(): string
    {
        return $this->snils;
    }
    
    /**
     * @param string $snils
     */
    public function setSnils(string $snils): void
    {
        $this->snils = $snils;
    }
}