<?php

namespace mfteam\nbch\models;

/**
 * Сведения о приобретателе прав – юридическом лице
 */
class AcquirerLegalRUTDF extends BaseItem
{
    /**
     * @var string $rightOfClaimCode
     */
    public $rightOfClaimCode = '';
    
    /**
     * @var int $rightOfClaimRus
     */
    public $rightOfClaimRus = null;
    
    /**
     * @var string $rightOfClaimFullName
     */
    public $rightOfClaimFullName = '';
    
    /**
     * @var string $rightOfClaimName
     */
    public $rightOfClaimName = '';
    
    /**
     * @var string $rightOfClaimOtherName
     */
    public $rightOfClaimOtherName = '';
    
    /**
     * @var string $rightOfClaimLEI
     */
    public $rightOfClaimLEI = '';
    
    /**
     * @var string $rightOfClaimRegNum
     */
    public $rightOfClaimRegNum = '';
    
    /**
     * @var int $rightOfClaimTaxCode
     */
    public $rightOfClaimTaxCode = null;
    
    /**
     * @var string $rightOfClaimTaxNum
     */
    public $rightOfClaimTaxNum = '';
    
    /**
     * @var string$rightOfClaimDt
     */
    public $rightOfClaimDt = '';
}