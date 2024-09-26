<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL17181920GroupType;

/**
 * Class representing UL20PaymentAType
 */
class UL20PaymentAType
{
    /**
     * 20.2. Сумма последнего внесенного платежа
     *
     * @var float $paymentSum
     */
    private $paymentSum = null;

    /**
     * 20.3. Сумма последнего внесенного платежа по основному долгу
     *
     * @var float $paymentMainSum
     */
    private $paymentMainSum = null;

    /**
     * 20.4. Сумма последнего внесенного платежа по процентам
     *
     * @var float $paymentPercentSum
     */
    private $paymentPercentSum = null;

    /**
     * 20.5. Сумма последнего внесенного платежа по иным требованиям
     *
     * @var float $paymentOtherSum
     */
    private $paymentOtherSum = null;

    /**
     * 20.6. Сумма всех внесенных платежей по обязательству
     *
     * @var float $totalSum
     */
    private $totalSum = null;

    /**
     * 20.7. Сумма внесенных платежей по основному долгу
     *
     * @var float $totalMainSum
     */
    private $totalMainSum = null;

    /**
     * 20.8. Сумма внесенных платежей по процентам
     *
     * @var float $totalPercentSum
     */
    private $totalPercentSum = null;

    /**
     * 20.9. Сумма внесенных платежей по иным требованиям
     *
     * @var float $totalOtherSum
     */
    private $totalOtherSum = null;

    /**
     * 20.1. Дата последнего внесенного платежа
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * 20.10. Код соблюдения размера платежей
     *
     * @var string $sizeCode
     */
    private $sizeCode = null;

    /**
     * 20.11. Код соблюдения срока внесения платежей
     *
     * @var string $scheduleCode
     */
    private $scheduleCode = null;

    /**
     * Gets as paymentSum
     *
     * 20.2. Сумма последнего внесенного платежа
     *
     * @return float
     */
    public function getPaymentSum()
    {
        return $this->paymentSum;
    }

    /**
     * Sets a new paymentSum
     *
     * 20.2. Сумма последнего внесенного платежа
     *
     * @param float $paymentSum
     * @return self
     */
    public function setPaymentSum($paymentSum)
    {
        $this->paymentSum = $paymentSum;
        return $this;
    }

    /**
     * Gets as paymentMainSum
     *
     * 20.3. Сумма последнего внесенного платежа по основному долгу
     *
     * @return float
     */
    public function getPaymentMainSum()
    {
        return $this->paymentMainSum;
    }

    /**
     * Sets a new paymentMainSum
     *
     * 20.3. Сумма последнего внесенного платежа по основному долгу
     *
     * @param float $paymentMainSum
     * @return self
     */
    public function setPaymentMainSum($paymentMainSum)
    {
        $this->paymentMainSum = $paymentMainSum;
        return $this;
    }

    /**
     * Gets as paymentPercentSum
     *
     * 20.4. Сумма последнего внесенного платежа по процентам
     *
     * @return float
     */
    public function getPaymentPercentSum()
    {
        return $this->paymentPercentSum;
    }

    /**
     * Sets a new paymentPercentSum
     *
     * 20.4. Сумма последнего внесенного платежа по процентам
     *
     * @param float $paymentPercentSum
     * @return self
     */
    public function setPaymentPercentSum($paymentPercentSum)
    {
        $this->paymentPercentSum = $paymentPercentSum;
        return $this;
    }

    /**
     * Gets as paymentOtherSum
     *
     * 20.5. Сумма последнего внесенного платежа по иным требованиям
     *
     * @return float
     */
    public function getPaymentOtherSum()
    {
        return $this->paymentOtherSum;
    }

    /**
     * Sets a new paymentOtherSum
     *
     * 20.5. Сумма последнего внесенного платежа по иным требованиям
     *
     * @param float $paymentOtherSum
     * @return self
     */
    public function setPaymentOtherSum($paymentOtherSum)
    {
        $this->paymentOtherSum = $paymentOtherSum;
        return $this;
    }

    /**
     * Gets as totalSum
     *
     * 20.6. Сумма всех внесенных платежей по обязательству
     *
     * @return float
     */
    public function getTotalSum()
    {
        return $this->totalSum;
    }

    /**
     * Sets a new totalSum
     *
     * 20.6. Сумма всех внесенных платежей по обязательству
     *
     * @param float $totalSum
     * @return self
     */
    public function setTotalSum($totalSum)
    {
        $this->totalSum = $totalSum;
        return $this;
    }

    /**
     * Gets as totalMainSum
     *
     * 20.7. Сумма внесенных платежей по основному долгу
     *
     * @return float
     */
    public function getTotalMainSum()
    {
        return $this->totalMainSum;
    }

    /**
     * Sets a new totalMainSum
     *
     * 20.7. Сумма внесенных платежей по основному долгу
     *
     * @param float $totalMainSum
     * @return self
     */
    public function setTotalMainSum($totalMainSum)
    {
        $this->totalMainSum = $totalMainSum;
        return $this;
    }

    /**
     * Gets as totalPercentSum
     *
     * 20.8. Сумма внесенных платежей по процентам
     *
     * @return float
     */
    public function getTotalPercentSum()
    {
        return $this->totalPercentSum;
    }

    /**
     * Sets a new totalPercentSum
     *
     * 20.8. Сумма внесенных платежей по процентам
     *
     * @param float $totalPercentSum
     * @return self
     */
    public function setTotalPercentSum($totalPercentSum)
    {
        $this->totalPercentSum = $totalPercentSum;
        return $this;
    }

    /**
     * Gets as totalOtherSum
     *
     * 20.9. Сумма внесенных платежей по иным требованиям
     *
     * @return float
     */
    public function getTotalOtherSum()
    {
        return $this->totalOtherSum;
    }

    /**
     * Sets a new totalOtherSum
     *
     * 20.9. Сумма внесенных платежей по иным требованиям
     *
     * @param float $totalOtherSum
     * @return self
     */
    public function setTotalOtherSum($totalOtherSum)
    {
        $this->totalOtherSum = $totalOtherSum;
        return $this;
    }

    /**
     * Gets as date
     *
     * 20.1. Дата последнего внесенного платежа
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * 20.1. Дата последнего внесенного платежа
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as sizeCode
     *
     * 20.10. Код соблюдения размера платежей
     *
     * @return string
     */
    public function getSizeCode()
    {
        return $this->sizeCode;
    }

    /**
     * Sets a new sizeCode
     *
     * 20.10. Код соблюдения размера платежей
     *
     * @param string $sizeCode
     * @return self
     */
    public function setSizeCode($sizeCode)
    {
        $this->sizeCode = $sizeCode;
        return $this;
    }

    /**
     * Gets as scheduleCode
     *
     * 20.11. Код соблюдения срока внесения платежей
     *
     * @return string
     */
    public function getScheduleCode()
    {
        return $this->scheduleCode;
    }

    /**
     * Sets a new scheduleCode
     *
     * 20.11. Код соблюдения срока внесения платежей
     *
     * @param string $scheduleCode
     * @return self
     */
    public function setScheduleCode($scheduleCode)
    {
        $this->scheduleCode = $scheduleCode;
        return $this;
    }
}

