<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL29MonthlyPaymentType
 *
 * Блок 29. Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета
 * XSD Type: FL_29_MonthlyPayment_Type
 */
class FL29MonthlyPaymentType
{
    /**
     * 29.1. Величина среднемесячного платежа
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 29.2. Дата расчета величины среднемесячного платежа
     *
     * @var string $calcDate
     */
    private $calcDate = null;

    /**
     * 29.3. Сумма всех оставшихся платежей по обязательству
     *
     * @var float $sumTotal
     */
    private $sumTotal = null;

    /**
     * Gets as sum
     *
     * 29.1. Величина среднемесячного платежа
     *
     * @return string
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Sets a new sum
     *
     * 29.1. Величина среднемесячного платежа
     *
     * @param string $sum
     * @return self
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * 29.2. Дата расчета величины среднемесячного платежа
     *
     * @return string
     */
    public function getCalcDate()
    {
        return $this->calcDate;
    }

    /**
     * Sets a new calcDate
     *
     * 29.2. Дата расчета величины среднемесячного платежа
     *
     * @param string $calcDate
     * @return self
     */
    public function setCalcDate($calcDate)
    {
        $this->calcDate = $calcDate;
        return $this;
    }

    /**
     * Gets as sumTotal
     *
     * 29.3. Сумма всех оставшихся платежей по обязательству
     *
     * @return float
     */
    public function getSumTotal()
    {
        return $this->sumTotal;
    }

    /**
     * Sets a new sumTotal
     *
     * 29.3. Сумма всех оставшихся платежей по обязательству
     *
     * @param float $sumTotal
     * @return self
     */
    public function setSumTotal($sumTotal)
    {
        $this->sumTotal = $sumTotal;
        return $this;
    }
}

