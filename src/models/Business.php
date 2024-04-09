<?php

namespace mfteam\nbch\models;


/**
 *
 */
abstract class Business extends BaseItem
{
    /**
     * @var int $numberOfEmployees
     */
    public $numberOfEmployees;
    /**
     * @var int $numberOfDirectors
     */
    public $numberOfDirectors;
    
    /**
     * @var string $revenueRangeCode
     */
    public $revenueRangeCode;
    
    /**
     * @var string $revenueRangeCodeText
     */
    public $revenueRangeCodeText;
    
    /**
     * @var string $businessStatus
     */
    public $businessStatus;
    
    /**
     * @var string $businessStatusText
     */
    public $businessStatusText;
    
    /**
     * @var string $dateOfStatus
     */
    public $dateOfStatus;
    
    /**
     * @var string $trademark
     */
    public $trademark;
    
    /**
     * @var string $businessNameRF
     */
    public $businessNameRF;
    
    /**
     * @var string $otherName
     */
    public $otherName;
    
    /**
     * @var string $oksm
     */
    public $oksm;
    
    /**
     * @return string
     */
    public function getOksm(): string
    {
        return $this->oksm;
    }
    
    /**
     * @param string $oksm
     */
    public function setOksm(string $oksm): void
    {
        $this->oksm = $oksm;
    }
}