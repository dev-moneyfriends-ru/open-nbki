<?php

namespace mfteam\nbch\models;

/**
 * Сумма и валюта обязательства
 */
class AccountAmtRUTDF extends BaseItem
{
    /**
     * @var string
     */
    public $creditLimit;
    
    /**
     * @var string
     */
    public $currencyCode;
    
    /**
     * @var string
     */
    public $ensuredAmt;
    
    /**
     * @var string
     */
    public $acctSerialNum;
}