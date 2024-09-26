<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL40AvgPaymentType
 *
 * Блок 40. Сведения квалифицированного бюро о среднемесячных платежах по договору займа (кредита)
 * XSD Type: FL_40_AvgPayment_Type
 */
class FL40AvgPaymentType
{
    /**
     * 40.1. Величина среднемесячного платежа
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 40.2. Дата расчета величины среднемесячного платежа
     *
     * @var string $calcDate
     */
    private $calcDate = null;

    /**
     * 40.3. Валюта среднемесячного платежа
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 40.4. УИд сделки
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * 40.5. Регистрационный номер бюро
     *
     * @var string $bureauRegNum
     */
    private $bureauRegNum = null;

    /**
     * 40.6. Признак прекращения получения информации из бюро = 0
     *
     * @var string $stopReceiveExist0
     */
    private $stopReceiveExist0 = null;

    /**
     * 40.6. Признак прекращения получения информации из бюро = 1
     *
     * @var string $stopReceiveExist1
     */
    private $stopReceiveExist1 = null;

    /**
     * Gets as sum
     *
     * 40.1. Величина среднемесячного платежа
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
     * 40.1. Величина среднемесячного платежа
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
     * 40.2. Дата расчета величины среднемесячного платежа
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
     * 40.2. Дата расчета величины среднемесячного платежа
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
     * Gets as currency
     *
     * 40.3. Валюта среднемесячного платежа
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * 40.3. Валюта среднемесячного платежа
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as uid
     *
     * 40.4. УИд сделки
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * 40.4. УИд сделки
     *
     * @param string $uid
     * @return self
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Gets as bureauRegNum
     *
     * 40.5. Регистрационный номер бюро
     *
     * @return string
     */
    public function getBureauRegNum()
    {
        return $this->bureauRegNum;
    }

    /**
     * Sets a new bureauRegNum
     *
     * 40.5. Регистрационный номер бюро
     *
     * @param string $bureauRegNum
     * @return self
     */
    public function setBureauRegNum($bureauRegNum)
    {
        $this->bureauRegNum = $bureauRegNum;
        return $this;
    }

    /**
     * Gets as stopReceiveExist0
     *
     * 40.6. Признак прекращения получения информации из бюро = 0
     *
     * @return string
     */
    public function getStopReceiveExist0()
    {
        return $this->stopReceiveExist0;
    }

    /**
     * Sets a new stopReceiveExist0
     *
     * 40.6. Признак прекращения получения информации из бюро = 0
     *
     * @param string $stopReceiveExist0
     * @return self
     */
    public function setStopReceiveExist0($stopReceiveExist0)
    {
        $this->stopReceiveExist0 = $stopReceiveExist0;
        return $this;
    }

    /**
     * Gets as stopReceiveExist1
     *
     * 40.6. Признак прекращения получения информации из бюро = 1
     *
     * @return string
     */
    public function getStopReceiveExist1()
    {
        return $this->stopReceiveExist1;
    }

    /**
     * Sets a new stopReceiveExist1
     *
     * 40.6. Признак прекращения получения информации из бюро = 1
     *
     * @param string $stopReceiveExist1
     * @return self
     */
    public function setStopReceiveExist1($stopReceiveExist1)
    {
        $this->stopReceiveExist1 = $stopReceiveExist1;
        return $this;
    }
}

