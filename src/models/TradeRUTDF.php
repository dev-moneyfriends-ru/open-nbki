<?php

namespace mfteam\nbch\models;

/**
 * Общие сведения о сделке
 */
class TradeRUTDF extends Trade
{
    /**
     * Признак потребительского кредита (займа)
     * @var int
     */
    public $isConsumerLoan;
    
    /**
     * Признак использования платежной карты
     * @var int
     */
    public $hasCard;
    
    /**
     * Признак возникновения обязательства в результате новации
     * @var int
     */
    public $isNovation;
    
    /**
     * Признак денежного обязательства источника
     * @var int
     */
    public $isMoneySource;
    
    /**
     * Признак денежного обязательства субъекта
     * @var int
     */
    public $isMoneyBorrower;
    
    /**
     * Дата прекращения обязательства субъекта по условиям сделки
     * @var string
     */
    public $closeDt;
}