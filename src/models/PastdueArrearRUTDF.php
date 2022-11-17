<?php

namespace mfteam\nbch\models;

/**
 * Сведения о просроченной задолженности
 */
class PastdueArrearRUTDF extends BaseItem
{
    /**
     * @var string $pastDueDt
     */
    public $pastDueDt = null;
    
    /**
     * @var int $lastPaymentDueCode
     */
    public $lastPaymentDueCode = null;
    
    /**
     * @var string $amtPastDue
     */
    public $amtPastDue = null;
    
    /**
     * @var string $principalAmtPastDue
     */
    public $principalAmtPastDue = null;
    
    /**
     * @var string $intAmtPastDue
     */
    public $intAmtPastDue = null;
    
    /**
     * @var string $otherAmtPastDue
     */
    public $otherAmtPastDue = null;
    
    /**
     * @var string $calcDate
     */
    public $calcDate = null;
    
    /**
     * @var string $principalMissedDate
     */
    public $principalMissedDate = null;
    
    /**
     * @var string $intMissedDate
     */
    public $intMissedDate = null;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum = null;
    
}