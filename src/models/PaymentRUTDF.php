<?php

namespace mfteam\nbch\models;

/**
 * Сведения о внесении платежей
 */
class PaymentRUTDF extends Payment
{
    /**
     * @var string $totalAmt
     */
    public $totalAmt;
    
    /**
     * @var string $principalTotalAmt
     */
    public $principalTotalAmt;
    
    /**
     * @var string $intTotalAmt
     */
    public $intTotalAmt;
    
    /**
     * @var string $otherTotalAmt
     */
    public $otherTotalAmt;
    
    /**
     * @var string $termsDueCode
     */
    public $termsDueCode;
    
    /**
     * @var int $daysPastDue
     */
    public $daysPastDue;
    
}