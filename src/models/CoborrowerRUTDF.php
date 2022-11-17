<?php

namespace mfteam\nbch\models;

/**
 * Сведения о солидарных должниках
 */
class CoborrowerRUTDF extends BaseItem
{
    /**
     * @var int
     */
    public $hasSolidary;
    
    /**
     * @var int $solidaryNum
     */
    public $solidaryNum;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum;
    
}