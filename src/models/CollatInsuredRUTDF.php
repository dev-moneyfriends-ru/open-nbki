<?php

namespace mfteam\nbch\models;

/**
 * Сведения о страховании предмета залога
 */
class CollatInsuredRUTDF extends BaseItem
{
    /**
     * @var int $insurLimit
     */
    public $insurLimit = null;
    
    /**
     * @var string $currencyCode
     */
    public $currencyCode = null;
    
    /**
     * @var int $hasFranchise
     */
    public $hasFranchise = null;
    
    /**
     * @var string $insurStartDt
     */
    public $insurStartDt = null;
    
    /**
     * @var string $insurEndDt
     */
    public $insurEndDt = null;
    
    /**
     * @var string $insurFactEndDt
     */
    public $insurFactEndDt = null;
    
    /**
     * @var string $insurEndReason
     */
    public $insurEndReason = null;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum = null;
    
}