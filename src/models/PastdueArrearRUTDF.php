<?php

namespace mfteam\nbch\models;

/**
 * Сведения о просроченной задолженности
 */
class PastdueArrearRUTDF extends BaseItem
{
    /**
     * @var \DateTime $pastDueDt
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
     * @var \DateTime $calcDate
     */
    public $calcDate = null;
    
    /**
     * @var \DateTime $principalMissedDate
     */
    public $principalMissedDate = null;
    
    /**
     * @var \DateTime $intMissedDate
     */
    public $intMissedDate = null;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum = null;
    
}