<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL23ContractChangesType
 *
 * Блок 23. Сведения об изменении договора
 * XSD Type: FL_23_ContractChanges_Type
 */
class FL23ContractChangesType
{
    /**
     * 23.1. Признак изменения договора = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 23.1. Признак изменения договора = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 23.2. Дата изменения договора
     *
     * @var string $changeDate
     */
    private $changeDate = null;

    /**
     * 23.3. Код вида изменения договора
     *
     * @var int $code
     */
    private $code = null;

    /**
     * 23.4. Код специального изменения договора
     *
     * @var int $specialCode
     */
    private $specialCode = null;

    /**
     * 23.5. Описание иного изменения договора
     *
     * @var string $otherDesc
     */
    private $otherDesc = null;

    /**
     * 23.6. Дата вступления изменения договора в силу
     *
     * @var string $startDate
     */
    private $startDate = null;

    /**
     * 23.7. Дата планового прекращения действия изменения договора
     *
     * @var string $endDate
     */
    private $endDate = null;

    /**
     * 23.8. Дата фактического прекращения действия изменения договора
     *
     * @var \DateTime $actualEndDate
     */
    private $actualEndDate = null;

    /**
     * 23.9. Код причины прекращения действия изменения договора
     *
     * @var int $endCode
     */
    private $endCode = null;

    /**
     * 23.10. Курс конверсии валюты долга
     *
     * @var float $currencyRate
     */
    private $currencyRate = null;

    /**
     * Gets as exist0
     *
     * 23.1. Признак изменения договора = 0
     *
     * @return string
     */
    public function getExist0()
    {
        return $this->exist0;
    }

    /**
     * Sets a new exist0
     *
     * 23.1. Признак изменения договора = 0
     *
     * @param string $exist0
     * @return self
     */
    public function setExist0($exist0)
    {
        $this->exist0 = $exist0;
        return $this;
    }

    /**
     * Gets as exist1
     *
     * 23.1. Признак изменения договора = 1
     *
     * @return string
     */
    public function getExist1()
    {
        return $this->exist1;
    }

    /**
     * Sets a new exist1
     *
     * 23.1. Признак изменения договора = 1
     *
     * @param string $exist1
     * @return self
     */
    public function setExist1($exist1)
    {
        $this->exist1 = $exist1;
        return $this;
    }

    /**
     * Gets as changeDate
     *
     * 23.2. Дата изменения договора
     *
     * @return string
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * 23.2. Дата изменения договора
     *
     * @param string $changeDate
     * @return self
     */
    public function setChangeDate($changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    /**
     * Gets as code
     *
     * 23.3. Код вида изменения договора
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 23.3. Код вида изменения договора
     *
     * @param int $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as specialCode
     *
     * 23.4. Код специального изменения договора
     *
     * @return int
     */
    public function getSpecialCode()
    {
        return $this->specialCode;
    }

    /**
     * Sets a new specialCode
     *
     * 23.4. Код специального изменения договора
     *
     * @param int $specialCode
     * @return self
     */
    public function setSpecialCode($specialCode)
    {
        $this->specialCode = $specialCode;
        return $this;
    }

    /**
     * Gets as otherDesc
     *
     * 23.5. Описание иного изменения договора
     *
     * @return string
     */
    public function getOtherDesc()
    {
        return $this->otherDesc;
    }

    /**
     * Sets a new otherDesc
     *
     * 23.5. Описание иного изменения договора
     *
     * @param string $otherDesc
     * @return self
     */
    public function setOtherDesc($otherDesc)
    {
        $this->otherDesc = $otherDesc;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * 23.6. Дата вступления изменения договора в силу
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * 23.6. Дата вступления изменения договора в силу
     *
     * @param string $startDate
     * @return self
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * 23.7. Дата планового прекращения действия изменения договора
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * 23.7. Дата планового прекращения действия изменения договора
     *
     * @param string $endDate
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as actualEndDate
     *
     * 23.8. Дата фактического прекращения действия изменения договора
     *
     * @return \DateTime
     */
    public function getActualEndDate()
    {
        return $this->actualEndDate;
    }

    /**
     * Sets a new actualEndDate
     *
     * 23.8. Дата фактического прекращения действия изменения договора
     *
     * @param \DateTime $actualEndDate
     * @return self
     */
    public function setActualEndDate(?\DateTime $actualEndDate = null)
    {
        $this->actualEndDate = $actualEndDate;
        return $this;
    }

    /**
     * Gets as endCode
     *
     * 23.9. Код причины прекращения действия изменения договора
     *
     * @return int
     */
    public function getEndCode()
    {
        return $this->endCode;
    }

    /**
     * Sets a new endCode
     *
     * 23.9. Код причины прекращения действия изменения договора
     *
     * @param int $endCode
     * @return self
     */
    public function setEndCode($endCode)
    {
        $this->endCode = $endCode;
        return $this;
    }

    /**
     * Gets as currencyRate
     *
     * 23.10. Курс конверсии валюты долга
     *
     * @return float
     */
    public function getCurrencyRate()
    {
        return $this->currencyRate;
    }

    /**
     * Sets a new currencyRate
     *
     * 23.10. Курс конверсии валюты долга
     *
     * @param float $currencyRate
     * @return self
     */
    public function setCurrencyRate($currencyRate)
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }
}

