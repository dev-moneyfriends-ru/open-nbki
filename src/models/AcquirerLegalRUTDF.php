<?php

namespace mfteam\nbch\models;

/**
 * Сведения о приобретателе прав – юридическом лице
 */
class AcquirerLegalRUTDF extends BaseItem
{
    /**
     * @var string
     */
    public $rightOfClaimCode;
    
    /**
     * @var int
     */
    public $rightOfClaimRus;
    
    /**
     * @var string
     */
    public $rightOfClaimFullName;
    
    /**
     * @var string
     */
    public $rightOfClaimName;
    
    /**
     * @var string
     */
    public $rightOfClaimOtherName;
    
    /**
     * @var string
     */
    public $rightOfClaimLEI;
    
    /**
     * @var string
     */
    public $rightOfClaimRegNum;
    
    /**
     * @var int
     */
    public $rightOfClaimTaxCode;
    
    /**
     * @var string
     */
    public $rightOfClaimTaxNum;
    
    /**
     * @var string
     */
    public $rightOfClaimDt;
    
    /**
     * @var string
     */
    public $acctSerialNum;
}