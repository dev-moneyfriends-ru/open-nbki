<?php

namespace mfteam\nbch\models;

/**
 * Сведения об изменении договора
 * @deprecated
 * @see AmendmentRUTDF
 */
class Amendment extends BaseItem
{
    /**
     * @var int $acctSerialNum
     */
    public $acctSerialNum = null;
    
    /**
     * @var int $creditLimit
     */
    public $creditLimit = null;
    
    /**
     * @var int $termsAmt
     */
    public $termsAmt = null;
    
    /**
     * @var string $currencyCode
     */
    public $currencyCode = null;
    
    /**
     * @var string $closedDt
     */
    public $closedDt = null;
    
    /**
     * @var string $paymentDueDate
     */
    public $paymentDueDate = null;
    
    /**
     * @var string $interestPaymentDueDate
     */
    public $interestPaymentDueDate = null;
    
    /**
     * @var string $creditTotalAmt
     */
    public $creditTotalAmt = null;
    
    /**
     * @var string $amendType
     */
    public $amendType = null;
    
    /**
     * @var string $graceEndDt
     */
    public $graceEndDt = null;
    
    /**
     * @var string $reportingDt
     */
    public $reportingDt = null;
    
    /**
     * @var int $gracePeriodReason
     */
    public $gracePeriodReason = null;
    
    /**
     * @var string $gracePeriodDeclinedDt
     */
    public $gracePeriodDeclinedDt = null;
    
    /**
     * @var string $graceStartDt
     */
    public $graceStartDt = null;
    
    /**
     * @var string $creditTotalMonetaryAmt
     */
    public $creditTotalMonetaryAmt = null;
    
    /**
     * @var string
     */
    public $amendDate;
    
    /**
     * @var int
     */
    public $type;
    
    /**
     * @var int
     */
    public $specType;
    
    /**
     * @var mixed
     */
    public $otherDesc;
    /**
     * @var string
     */
    public $startDt;
    /**
     * @var string
     */
    public $planEndDt;
    /**
     * @var string
     */
    public $factEndDt;
    /**
     * @var string
     */
    public $curRate;
    /**
     * @var mixed
     */
    public $endReason;
}