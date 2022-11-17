<?php

namespace mfteam\nbch\models;

/**
 * Сведения о прекращении передачи информации по обязательству
 */
class SubmitHoldRUTDF extends BaseItem
{
    /**
     * @var string $holdCode
     */
    public $holdCode = null;
    
    /**
     * @var \DateTime $holdDt
     */
    public $holdDt = null;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum = null;
}