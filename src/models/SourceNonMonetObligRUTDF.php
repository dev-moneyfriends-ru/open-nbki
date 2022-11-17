<?php

namespace mfteam\nbch\models;

/**
 * Сведения о неденежном обязательстве источника
 */
class SourceNonMonetObligRUTDF extends BaseItem
{
    /**
     * @var string $srcNonMonetOblig
     */
    public $srcNonMonetOblig = null;
    
    /**
     * @var string $srcNonMonetObligCode
     */
    public $srcNonMonetObligCode = null;
    
    /**
     * @var string $srcNonMonetObligObject
     */
    public $srcNonMonetObligObject = null;
    
    /**
     * @var \DateTime $srcNonMonetObligDt
     */
    public $srcNonMonetObligDt = null;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum = null;
    
}