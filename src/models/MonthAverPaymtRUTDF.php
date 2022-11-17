<?php

namespace mfteam\nbch\models;

/**
 * Сведения о среднемесячных платежах по данному обязательству
 */
class MonthAverPaymtRUTDF extends BaseItem
{
    /**
     * @var int $averPaymtAmt
     */
    public $averPaymtAmt = null;
    
    /**
     * @var \DateTime $calcDate
     */
    public $calcDate = null;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum = null;
    
}