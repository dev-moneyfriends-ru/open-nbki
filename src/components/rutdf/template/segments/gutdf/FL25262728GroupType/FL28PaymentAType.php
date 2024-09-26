<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType;

/**
 * Class representing FL28PaymentAType
 */
class FL28PaymentAType
{
    /**
     * 28.2. Сумма последнего внесенного платежа
     *
     * @var float $paymentSum
     */
    private $paymentSum = null;

    /**
     * 28.3. Сумма последнего внесенного платежа по основному долгу
     *
     * @var float $paymentMainSum
     */
    private $paymentMainSum = null;

    /**
     * 28.4. Сумма последнего внесенного платежа по процентам
     *
     * @var float $paymentPercentSum
     */
    private $paymentPercentSum = null;

    /**
     * 28.5. Сумма последнего внесенного платежа по иным требованиям
     *
     * @var float $paymentOtherSum
     */
    private $paymentOtherSum = null;

    /**
     * 28.6. Сумма всех внесенных платежей по обязательству
     *
     * @var float $totalSum
     */
    private $totalSum = null;

    /**
     * 28.7. Сумма внесенных платежей по основному долгу
     *
     * @var float $totalMainSum
     */
    private $totalMainSum = null;

    /**
     * 28.8. Сумма внесенных платежей по процентам
     *
     * @var float $totalPercentSum
     */
    private $totalPercentSum = null;

    /**
     * 28.9. Сумма внесенных платежей по иным требованиям
     *
     * @var float $totalOtherSum
     */
    private $totalOtherSum = null;

    /**
     * 28.1. Дата последнего внесенного платежа
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * 28.10. Код соблюдения размера платежей
     *
     * @var string $sizeCode
     */
    private $sizeCode = null;

    /**
     * 28.11. Код соблюдения срока внесения платежей
     *
     * @var string $scheduleCode
     */
    private $scheduleCode = null;

    /**
     * 28.14. Сумма последнего внесенного платежа (части платежа) с просрочкой более 30 календарных дней
     *
     * @var float $lastMissPaySum
     */
    private $lastMissPaySum = null;

    /**
     * 28.15. Сумма внесенных платежей за 24 календарных месяца, за исключением платежей с просрочкой более 30 календарных дней
     *
     * @var float $paySum24
     */
    private $paySum24 = null;

    /**
     * Gets as paymentSum
     *
     * 28.2. Сумма последнего внесенного платежа
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
     * 28.2. Сумма последнего внесенного платежа
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
     * 28.3. Сумма последнего внесенного платежа по основному долгу
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
     * 28.3. Сумма последнего внесенного платежа по основному долгу
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
     * 28.4. Сумма последнего внесенного платежа по процентам
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
     * 28.4. Сумма последнего внесенного платежа по процентам
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
     * 28.5. Сумма последнего внесенного платежа по иным требованиям
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
     * 28.5. Сумма последнего внесенного платежа по иным требованиям
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
     * 28.6. Сумма всех внесенных платежей по обязательству
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
     * 28.6. Сумма всех внесенных платежей по обязательству
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
     * 28.7. Сумма внесенных платежей по основному долгу
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
     * 28.7. Сумма внесенных платежей по основному долгу
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
     * 28.8. Сумма внесенных платежей по процентам
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
     * 28.8. Сумма внесенных платежей по процентам
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
     * 28.9. Сумма внесенных платежей по иным требованиям
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
     * 28.9. Сумма внесенных платежей по иным требованиям
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
     * 28.1. Дата последнего внесенного платежа
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
     * 28.1. Дата последнего внесенного платежа
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
     * 28.10. Код соблюдения размера платежей
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
     * 28.10. Код соблюдения размера платежей
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
     * 28.11. Код соблюдения срока внесения платежей
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
     * 28.11. Код соблюдения срока внесения платежей
     *
     * @param string $scheduleCode
     * @return self
     */
    public function setScheduleCode($scheduleCode)
    {
        $this->scheduleCode = $scheduleCode;
        return $this;
    }

    /**
     * Gets as lastMissPaySum
     *
     * 28.14. Сумма последнего внесенного платежа (части платежа) с просрочкой более 30 календарных дней
     *
     * @return float
     */
    public function getLastMissPaySum()
    {
        return $this->lastMissPaySum;
    }

    /**
     * Sets a new lastMissPaySum
     *
     * 28.14. Сумма последнего внесенного платежа (части платежа) с просрочкой более 30 календарных дней
     *
     * @param float $lastMissPaySum
     * @return self
     */
    public function setLastMissPaySum($lastMissPaySum)
    {
        $this->lastMissPaySum = $lastMissPaySum;
        return $this;
    }

    /**
     * Gets as paySum24
     *
     * 28.15. Сумма внесенных платежей за 24 календарных месяца, за исключением платежей с просрочкой более 30 календарных дней
     *
     * @return float
     */
    public function getPaySum24()
    {
        return $this->paySum24;
    }

    /**
     * Sets a new paySum24
     *
     * 28.15. Сумма внесенных платежей за 24 календарных месяца, за исключением платежей с просрочкой более 30 календарных дней
     *
     * @param float $paySum24
     * @return self
     */
    public function setPaySum24($paySum24)
    {
        $this->paySum24 = $paySum24;
        return $this;
    }
}

