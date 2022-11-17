<?php

namespace mfteam\nbch\models;

/**
 * Сведения о погашении требований кредитора по обязательству за счет обеспечения
 */
class CollatRepayRUTDF extends BaseItem
{
    /**
     * @var string $collatRepayCode
     */
    public $collatRepayCode = null;
    
    /**
     * @var \DateTime $collatRepayDt
     */
    public $collatRepayDt = null;
    
    /**
     * @var string $collatRepayAmt
     */
    public $collatRepayAmt = null;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum = null;
}