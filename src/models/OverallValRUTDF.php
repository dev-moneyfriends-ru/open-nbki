<?php

namespace mfteam\nbch\models;

/**
 * Полная стоимость потребительского кредита (займа)
 */
class OverallValRUTDF extends BaseItem
{
    /**
     * @var string $creditTotalAmt
     */
    public $creditTotalAmt;
    
    /**
     * @var string $creditTotalMonetaryAmt
     */
    public $creditTotalMonetaryAmt;
    
    /**
     * @var \DateTime $creditTotalAmtDate
     */
    public $creditTotalAmtDate;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum;
}