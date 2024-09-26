<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL34CustomerRequestType
 *
 * Блок 34. Сведения о запросе информации пользователем
 * XSD Type: UL_34_CustomerRequest_Type
 */
class UL34CustomerRequestType
{
    /**
     * 34.1. Код запрошенных сведений
     *
     * @var string[] $infoCode
     */
    private $infoCode = [
        
    ];

    /**
     * 34.2. Дата предоставления сведений
     *
     * @var string $resultDate
     */
    private $resultDate = null;

    /**
     * 34.3. Дата запроса
     *
     * @var string $date
     */
    private $date = null;

    /**
     * 34.4. Код цели запроса
     *
     * @var string[] $requestReason
     */
    private $requestReason = [
        
    ];

    /**
     * 34.5. Иная цель запроса
     *
     * @var string[] $otherReason
     */
    private $otherReason = [
        
    ];

    /**
     * 34.6. Сумма обязательства, в связи с которым сделан запрос
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * 34.7. Валюта обязательства, в связи с которым сделан запрос
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * Adds as infoCode
     *
     * 34.1. Код запрошенных сведений
     *
     * @return self
     * @param string $infoCode
     */
    public function addToInfoCode($infoCode)
    {
        $this->infoCode[] = $infoCode;
        return $this;
    }

    /**
     * isset infoCode
     *
     * 34.1. Код запрошенных сведений
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfoCode($index)
    {
        return isset($this->infoCode[$index]);
    }

    /**
     * unset infoCode
     *
     * 34.1. Код запрошенных сведений
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfoCode($index)
    {
        unset($this->infoCode[$index]);
    }

    /**
     * Gets as infoCode
     *
     * 34.1. Код запрошенных сведений
     *
     * @return string[]
     */
    public function getInfoCode()
    {
        return $this->infoCode;
    }

    /**
     * Sets a new infoCode
     *
     * 34.1. Код запрошенных сведений
     *
     * @param string $infoCode
     * @return self
     */
    public function setInfoCode(array $infoCode)
    {
        $this->infoCode = $infoCode;
        return $this;
    }

    /**
     * Gets as resultDate
     *
     * 34.2. Дата предоставления сведений
     *
     * @return string
     */
    public function getResultDate()
    {
        return $this->resultDate;
    }

    /**
     * Sets a new resultDate
     *
     * 34.2. Дата предоставления сведений
     *
     * @param string $resultDate
     * @return self
     */
    public function setResultDate($resultDate)
    {
        $this->resultDate = $resultDate;
        return $this;
    }

    /**
     * Gets as date
     *
     * 34.3. Дата запроса
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * 34.3. Дата запроса
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Adds as requestReason
     *
     * 34.4. Код цели запроса
     *
     * @return self
     * @param string $requestReason
     */
    public function addToRequestReason($requestReason)
    {
        $this->requestReason[] = $requestReason;
        return $this;
    }

    /**
     * isset requestReason
     *
     * 34.4. Код цели запроса
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestReason($index)
    {
        return isset($this->requestReason[$index]);
    }

    /**
     * unset requestReason
     *
     * 34.4. Код цели запроса
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestReason($index)
    {
        unset($this->requestReason[$index]);
    }

    /**
     * Gets as requestReason
     *
     * 34.4. Код цели запроса
     *
     * @return string[]
     */
    public function getRequestReason()
    {
        return $this->requestReason;
    }

    /**
     * Sets a new requestReason
     *
     * 34.4. Код цели запроса
     *
     * @param string $requestReason
     * @return self
     */
    public function setRequestReason(array $requestReason)
    {
        $this->requestReason = $requestReason;
        return $this;
    }

    /**
     * Adds as otherReason
     *
     * 34.5. Иная цель запроса
     *
     * @return self
     * @param string $otherReason
     */
    public function addToOtherReason($otherReason)
    {
        $this->otherReason[] = $otherReason;
        return $this;
    }

    /**
     * isset otherReason
     *
     * 34.5. Иная цель запроса
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherReason($index)
    {
        return isset($this->otherReason[$index]);
    }

    /**
     * unset otherReason
     *
     * 34.5. Иная цель запроса
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherReason($index)
    {
        unset($this->otherReason[$index]);
    }

    /**
     * Gets as otherReason
     *
     * 34.5. Иная цель запроса
     *
     * @return string[]
     */
    public function getOtherReason()
    {
        return $this->otherReason;
    }

    /**
     * Sets a new otherReason
     *
     * 34.5. Иная цель запроса
     *
     * @param string $otherReason
     * @return self
     */
    public function setOtherReason(array $otherReason = null)
    {
        $this->otherReason = $otherReason;
        return $this;
    }

    /**
     * Gets as amount
     *
     * 34.6. Сумма обязательства, в связи с которым сделан запрос
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * 34.6. Сумма обязательства, в связи с которым сделан запрос
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as currency
     *
     * 34.7. Валюта обязательства, в связи с которым сделан запрос
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
     * 34.7. Валюта обязательства, в связи с которым сделан запрос
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }
}

