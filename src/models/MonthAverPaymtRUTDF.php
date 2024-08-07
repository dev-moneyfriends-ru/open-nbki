<?php

namespace mfteam\nbch\models;

/**
 * Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета
 */
class MonthAverPaymtRUTDF extends BaseItem
{
    /**
     * Величина среднемесячного платежа.
     * При прекращении обязательства (независимо от основания), указывается значение 0
     * @var float $averPaymtAmt
     */
    public $averPaymtAmt;
    
    /**
     * Дата расчета величины среднемесячного платежа.
     * Дата, по состоянию на которую источник выполнил расчет.
     * @var string $calcDate
     */
    public $calcDate = '';
}