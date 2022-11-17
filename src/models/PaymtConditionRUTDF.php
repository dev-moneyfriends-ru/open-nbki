<?php

namespace mfteam\nbch\models;

/**
 * Сведения об условиях платежей
 */
class PaymtConditionRUTDF extends BaseItem
{
    /**
     * @var string $principalTermsAmt
     */
    public $principalTermsAmt;
    
    /**
     * @var string $principalTermsAmtDt
     */
    public $principalTermsAmtDt;
    
    /**
     * @var string $interestTermsAmt
     */
    public $interestTermsAmt;
    
    /**
     * @var string $interestTermsAmtDt
     */
    public $interestTermsAmtDt;
    
    /**
     * @var string $termsFrequency
     */
    public $termsFrequency;
    
    /**
     * @var string $minPaymt
     */
    public $minPaymt;
    
    /**
     * @var string $graceStartDt
     */
    public $graceStartDt;
    
    /**
     * @var string $graceEndDt
     */
    public $graceEndDt;
    
    /**
     * @var string $interestPaymentDueDate
     */
    public $interestPaymentDueDate;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum;
    
}