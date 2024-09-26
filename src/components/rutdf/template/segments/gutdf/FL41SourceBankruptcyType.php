<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL41SourceBankruptcyType
 *
 * Блок 41. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
 * XSD Type: FL_41_SourceBankruptcy_Type
 */
class FL41SourceBankruptcyType
{
    /**
     * 41.1. Сумма задолженности на дату открытия конкурсного производства
     *
     * @var float $debtSum
     */
    private $debtSum = null;

    /**
     * 41.2. Дата открытия конкурсного производства
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * 41.3. Сумма задолженности на дату завершения конкурсного производства
     *
     * @var float $debtEndSum
     */
    private $debtEndSum = null;

    /**
     * 41.4. Дата завершения конкурсного производства
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * 41.5. Сумма задолженности на дату последнего внесенного платежа
     *
     * @var float $debtLastPaySum
     */
    private $debtLastPaySum = null;

    /**
     * 41.6. Дата последнего внесенного платежа
     *
     * @var \DateTime $lastPayDate
     */
    private $lastPayDate = null;

    /**
     * 41.7. Признак перехода прав кредитора к другому лицу = 0
     *
     * @var string $ownerChangeExist0
     */
    private $ownerChangeExist0 = null;

    /**
     * 41.7. Признак перехода прав кредитора к другому лицу = 1
     *
     * @var string $ownerChangeExist1
     */
    private $ownerChangeExist1 = null;

    /**
     * 41.8. Признак прекращения обязательства = 0
     *
     * @var string $obligationEndExist0
     */
    private $obligationEndExist0 = null;

    /**
     * 41.8. Признак прекращения обязательства = 1
     *
     * @var string $obligationEndExist1
     */
    private $obligationEndExist1 = null;

    /**
     * 41.9. Код основания прекращения обязательства
     *
     * @var int $obligationEndCode
     */
    private $obligationEndCode = null;

    /**
     * 41.10. Валюта задолженности
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * Gets as debtSum
     *
     * 41.1. Сумма задолженности на дату открытия конкурсного производства
     *
     * @return float
     */
    public function getDebtSum()
    {
        return $this->debtSum;
    }

    /**
     * Sets a new debtSum
     *
     * 41.1. Сумма задолженности на дату открытия конкурсного производства
     *
     * @param float $debtSum
     * @return self
     */
    public function setDebtSum($debtSum)
    {
        $this->debtSum = $debtSum;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * 41.2. Дата открытия конкурсного производства
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * 41.2. Дата открытия конкурсного производства
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(?\DateTime $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as debtEndSum
     *
     * 41.3. Сумма задолженности на дату завершения конкурсного производства
     *
     * @return float
     */
    public function getDebtEndSum()
    {
        return $this->debtEndSum;
    }

    /**
     * Sets a new debtEndSum
     *
     * 41.3. Сумма задолженности на дату завершения конкурсного производства
     *
     * @param float $debtEndSum
     * @return self
     */
    public function setDebtEndSum($debtEndSum)
    {
        $this->debtEndSum = $debtEndSum;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * 41.4. Дата завершения конкурсного производства
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
     * 41.4. Дата завершения конкурсного производства
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
     * Gets as debtLastPaySum
     *
     * 41.5. Сумма задолженности на дату последнего внесенного платежа
     *
     * @return float
     */
    public function getDebtLastPaySum()
    {
        return $this->debtLastPaySum;
    }

    /**
     * Sets a new debtLastPaySum
     *
     * 41.5. Сумма задолженности на дату последнего внесенного платежа
     *
     * @param float $debtLastPaySum
     * @return self
     */
    public function setDebtLastPaySum($debtLastPaySum)
    {
        $this->debtLastPaySum = $debtLastPaySum;
        return $this;
    }

    /**
     * Gets as lastPayDate
     *
     * 41.6. Дата последнего внесенного платежа
     *
     * @return \DateTime
     */
    public function getLastPayDate()
    {
        return $this->lastPayDate;
    }

    /**
     * Sets a new lastPayDate
     *
     * 41.6. Дата последнего внесенного платежа
     *
     * @param \DateTime $lastPayDate
     * @return self
     */
    public function setLastPayDate(?\DateTime $lastPayDate = null)
    {
        $this->lastPayDate = $lastPayDate;
        return $this;
    }

    /**
     * Gets as ownerChangeExist0
     *
     * 41.7. Признак перехода прав кредитора к другому лицу = 0
     *
     * @return string
     */
    public function getOwnerChangeExist0()
    {
        return $this->ownerChangeExist0;
    }

    /**
     * Sets a new ownerChangeExist0
     *
     * 41.7. Признак перехода прав кредитора к другому лицу = 0
     *
     * @param string $ownerChangeExist0
     * @return self
     */
    public function setOwnerChangeExist0($ownerChangeExist0)
    {
        $this->ownerChangeExist0 = $ownerChangeExist0;
        return $this;
    }

    /**
     * Gets as ownerChangeExist1
     *
     * 41.7. Признак перехода прав кредитора к другому лицу = 1
     *
     * @return string
     */
    public function getOwnerChangeExist1()
    {
        return $this->ownerChangeExist1;
    }

    /**
     * Sets a new ownerChangeExist1
     *
     * 41.7. Признак перехода прав кредитора к другому лицу = 1
     *
     * @param string $ownerChangeExist1
     * @return self
     */
    public function setOwnerChangeExist1($ownerChangeExist1)
    {
        $this->ownerChangeExist1 = $ownerChangeExist1;
        return $this;
    }

    /**
     * Gets as obligationEndExist0
     *
     * 41.8. Признак прекращения обязательства = 0
     *
     * @return string
     */
    public function getObligationEndExist0()
    {
        return $this->obligationEndExist0;
    }

    /**
     * Sets a new obligationEndExist0
     *
     * 41.8. Признак прекращения обязательства = 0
     *
     * @param string $obligationEndExist0
     * @return self
     */
    public function setObligationEndExist0($obligationEndExist0)
    {
        $this->obligationEndExist0 = $obligationEndExist0;
        return $this;
    }

    /**
     * Gets as obligationEndExist1
     *
     * 41.8. Признак прекращения обязательства = 1
     *
     * @return string
     */
    public function getObligationEndExist1()
    {
        return $this->obligationEndExist1;
    }

    /**
     * Sets a new obligationEndExist1
     *
     * 41.8. Признак прекращения обязательства = 1
     *
     * @param string $obligationEndExist1
     * @return self
     */
    public function setObligationEndExist1($obligationEndExist1)
    {
        $this->obligationEndExist1 = $obligationEndExist1;
        return $this;
    }

    /**
     * Gets as obligationEndCode
     *
     * 41.9. Код основания прекращения обязательства
     *
     * @return int
     */
    public function getObligationEndCode()
    {
        return $this->obligationEndCode;
    }

    /**
     * Sets a new obligationEndCode
     *
     * 41.9. Код основания прекращения обязательства
     *
     * @param int $obligationEndCode
     * @return self
     */
    public function setObligationEndCode($obligationEndCode)
    {
        $this->obligationEndCode = $obligationEndCode;
        return $this;
    }

    /**
     * Gets as currency
     *
     * 41.10. Валюта задолженности
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
     * 41.10. Валюта задолженности
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

