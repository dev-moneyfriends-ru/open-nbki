<?php

namespace mfteam\nbch\models;

/**
 * Сведения о срочной задолженности
 */
class DueArrearRUTDF extends BaseItem
{
    /**
     * @var \DateTime $startDt
     */
    public $startDt = null;
    
    /**
     * @var int $lastPaymentDueCode
     */
    public $lastPaymentDueCode = null;
    
    /**
     * @var string $amtOutstanding
     */
    public $amtOutstanding = null;
    
    /**
     * @var string $principalOutstanding
     */
    public $principalOutstanding = null;
    
    /**
     * @var string $intOutstanding
     */
    public $intOutstanding = null;
    
    /**
     * @var string $otherAmtOutstanding
     */
    public $otherAmtOutstanding = null;
    
    /**
     * @var \DateTime $calcDate
     */
    public $calcDate = null;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum = null;
    
}