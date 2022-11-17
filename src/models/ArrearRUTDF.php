<?php

namespace mfteam\nbch\models;

/**
 * Сведения о задолженности
 */
class ArrearRUTDF extends BaseItem
{
    /**
     * @var string $startAmtOutstanding
     */
    public $startAmtOutstanding;
    
    /**
     * @var int $lastPaymentDueCode
     */
    public $lastPaymentDueCode;
    
    /**
     * @var string $amtOutstanding
     */
    public $amtOutstanding;
    
    /**
     * @var string $principalOutstanding
     */
    public $principalOutstanding;
    
    /**
     * @var string $intOutstanding
     */
    public $intOutstanding;
    
    /**
     * @var string $otherAmtOutstanding
     */
    public $otherAmtOutstanding;
    
    /**
     * @var \DateTime $calcDate
     */
    public $calcDate;
    
    /**
     * @var int $unconfirmGrace
     */
    public $unconfirmGrace;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum;
}