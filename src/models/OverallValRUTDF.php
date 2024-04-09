<?php

namespace mfteam\nbch\models;

/**
 * Полная стоимость потребительского кредита (займа)
 */
class OverallValRUTDF extends BaseItem
{
    
    /**
     * Полная стоимость кредита (займа) в процентах годовых
     * @var float $creditTotalAmt
     */
    public $creditTotalAmt;
    
    /**
     * Полная стоимость кредита (займа) в денежном выражении
     * @var float $creditTotalMonetaryAmt
     */
    public $creditTotalMonetaryAmt;
    
    /**
     * Дата расчета полной стоимости кредита (займа).
     * Если даты расчета полной стоимости потребительского кредита (займа) в процентах годовых и в денежном выражении не совпадают, то указывается наиболее поздняя из них.
     * @var string $creditTotalAmtDate
     */
    public $creditTotalAmtDate;
}