<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL43CollectionType
 *
 * Блок 43. Сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
 * XSD Type: FL_43_Collection_Type
 */
class FL43CollectionType
{
    /**
     * 43.1. Код взыскиваемого долга
     *
     * @var string $code
     */
    private $code = null;

    /**
     * 43.2. Наименование суда
     *
     * @var string $courtName
     */
    private $courtName = null;

    /**
     * 43.3. Номер судебного акта
     *
     * @var string $actNum
     */
    private $actNum = null;

    /**
     * 43.4. Дата принятия судебного акта
     *
     * @var \DateTime $actDate
     */
    private $actDate = null;

    /**
     * 43.5. Резолютивная часть судебного акта
     *
     * @var string $actResolution
     */
    private $actResolution = null;

    /**
     * 43.6. Номер исполнительного документа
     *
     * @var string $execDocNum
     */
    private $execDocNum = null;

    /**
     * 43.7. Дата прекращения взыскания
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * 43.8. Сумма единовременного взыскания
     *
     * @var float $onceSum
     */
    private $onceSum = null;

    /**
     * 43.11. Сумма периодического взыскания
     *
     * @var float $periodSum
     */
    private $periodSum = null;

    /**
     * 43.9. Взысканная сумма
     *
     * @var float $totalSum
     */
    private $totalSum = null;

    /**
     * 43.10. Дата расчета
     *
     * @var \DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * 43.12. Код частоты платежей
     *
     * @var int $freqCode
     */
    private $freqCode = null;

    /**
     * 43.13. Валюта взыскания
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * Gets as code
     *
     * 43.1. Код взыскиваемого долга
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 43.1. Код взыскиваемого долга
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as courtName
     *
     * 43.2. Наименование суда
     *
     * @return string
     */
    public function getCourtName()
    {
        return $this->courtName;
    }

    /**
     * Sets a new courtName
     *
     * 43.2. Наименование суда
     *
     * @param string $courtName
     * @return self
     */
    public function setCourtName($courtName)
    {
        $this->courtName = $courtName;
        return $this;
    }

    /**
     * Gets as actNum
     *
     * 43.3. Номер судебного акта
     *
     * @return string
     */
    public function getActNum()
    {
        return $this->actNum;
    }

    /**
     * Sets a new actNum
     *
     * 43.3. Номер судебного акта
     *
     * @param string $actNum
     * @return self
     */
    public function setActNum($actNum)
    {
        $this->actNum = $actNum;
        return $this;
    }

    /**
     * Gets as actDate
     *
     * 43.4. Дата принятия судебного акта
     *
     * @return \DateTime
     */
    public function getActDate()
    {
        return $this->actDate;
    }

    /**
     * Sets a new actDate
     *
     * 43.4. Дата принятия судебного акта
     *
     * @param \DateTime $actDate
     * @return self
     */
    public function setActDate(\DateTime $actDate)
    {
        $this->actDate = $actDate;
        return $this;
    }

    /**
     * Gets as actResolution
     *
     * 43.5. Резолютивная часть судебного акта
     *
     * @return string
     */
    public function getActResolution()
    {
        return $this->actResolution;
    }

    /**
     * Sets a new actResolution
     *
     * 43.5. Резолютивная часть судебного акта
     *
     * @param string $actResolution
     * @return self
     */
    public function setActResolution($actResolution)
    {
        $this->actResolution = $actResolution;
        return $this;
    }

    /**
     * Gets as execDocNum
     *
     * 43.6. Номер исполнительного документа
     *
     * @return string
     */
    public function getExecDocNum()
    {
        return $this->execDocNum;
    }

    /**
     * Sets a new execDocNum
     *
     * 43.6. Номер исполнительного документа
     *
     * @param string $execDocNum
     * @return self
     */
    public function setExecDocNum($execDocNum)
    {
        $this->execDocNum = $execDocNum;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * 43.7. Дата прекращения взыскания
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * 43.7. Дата прекращения взыскания
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(?\DateTime $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as onceSum
     *
     * 43.8. Сумма единовременного взыскания
     *
     * @return float
     */
    public function getOnceSum()
    {
        return $this->onceSum;
    }

    /**
     * Sets a new onceSum
     *
     * 43.8. Сумма единовременного взыскания
     *
     * @param float $onceSum
     * @return self
     */
    public function setOnceSum($onceSum)
    {
        $this->onceSum = $onceSum;
        return $this;
    }

    /**
     * Gets as periodSum
     *
     * 43.11. Сумма периодического взыскания
     *
     * @return float
     */
    public function getPeriodSum()
    {
        return $this->periodSum;
    }

    /**
     * Sets a new periodSum
     *
     * 43.11. Сумма периодического взыскания
     *
     * @param float $periodSum
     * @return self
     */
    public function setPeriodSum($periodSum)
    {
        $this->periodSum = $periodSum;
        return $this;
    }

    /**
     * Gets as totalSum
     *
     * 43.9. Взысканная сумма
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
     * 43.9. Взысканная сумма
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
     * Gets as calcDate
     *
     * 43.10. Дата расчета
     *
     * @return \DateTime
     */
    public function getCalcDate()
    {
        return $this->calcDate;
    }

    /**
     * Sets a new calcDate
     *
     * 43.10. Дата расчета
     *
     * @param \DateTime $calcDate
     * @return self
     */
    public function setCalcDate(\DateTime $calcDate)
    {
        $this->calcDate = $calcDate;
        return $this;
    }

    /**
     * Gets as freqCode
     *
     * 43.12. Код частоты платежей
     *
     * @return int
     */
    public function getFreqCode()
    {
        return $this->freqCode;
    }

    /**
     * Sets a new freqCode
     *
     * 43.12. Код частоты платежей
     *
     * @param int $freqCode
     * @return self
     */
    public function setFreqCode($freqCode)
    {
        $this->freqCode = $freqCode;
        return $this;
    }

    /**
     * Gets as currency
     *
     * 43.13. Валюта взыскания
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
     * 43.13. Валюта взыскания
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

