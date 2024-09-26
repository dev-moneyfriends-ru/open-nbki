<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL14BankruptcyEndType
 *
 * Блок 14. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
 * XSD Type: FL_14_BankruptcyEnd_Type
 */
class FL14BankruptcyEndType
{
    /**
     * 14.1. Признак завершения расчетов с кредиторами = 0
     *
     * @var string $bankruptcyEndFact0
     */
    private $bankruptcyEndFact0 = null;

    /**
     * 14.5. Дата восстановления обязательства
     *
     * @var \DateTime $resumeDate
     */
    private $resumeDate = null;

    /**
     * 14.1. Признак завершения расчетов с кредиторами = 1
     *
     * @var string $bankruptcyEndFact1
     */
    private $bankruptcyEndFact1 = null;

    /**
     * 14.2. Дата завершения расчетов с кредиторами
     *
     * @var \DateTime $completionDate
     */
    private $completionDate = null;

    /**
     * 14.3. Признак освобождения от исполнения требований кредиторов = 0
     *
     * @var string $settlementExist0
     */
    private $settlementExist0 = null;

    /**
     * 14.3. Признак освобождения от исполнения требований кредиторов = 1
     *
     * @var string $settlementExist1
     */
    private $settlementExist1 = null;

    /**
     * 14.4. Дата освобождения от исполнения требований кредиторов
     *
     * @var \DateTime $settlementDate
     */
    private $settlementDate = null;

    /**
     * Gets as bankruptcyEndFact0
     *
     * 14.1. Признак завершения расчетов с кредиторами = 0
     *
     * @return string
     */
    public function getBankruptcyEndFact0()
    {
        return $this->bankruptcyEndFact0;
    }

    /**
     * Sets a new bankruptcyEndFact0
     *
     * 14.1. Признак завершения расчетов с кредиторами = 0
     *
     * @param string $bankruptcyEndFact0
     * @return self
     */
    public function setBankruptcyEndFact0($bankruptcyEndFact0)
    {
        $this->bankruptcyEndFact0 = $bankruptcyEndFact0;
        return $this;
    }

    /**
     * Gets as resumeDate
     *
     * 14.5. Дата восстановления обязательства
     *
     * @return \DateTime
     */
    public function getResumeDate()
    {
        return $this->resumeDate;
    }

    /**
     * Sets a new resumeDate
     *
     * 14.5. Дата восстановления обязательства
     *
     * @param \DateTime $resumeDate
     * @return self
     */
    public function setResumeDate(?\DateTime $resumeDate = null)
    {
        $this->resumeDate = $resumeDate;
        return $this;
    }

    /**
     * Gets as bankruptcyEndFact1
     *
     * 14.1. Признак завершения расчетов с кредиторами = 1
     *
     * @return string
     */
    public function getBankruptcyEndFact1()
    {
        return $this->bankruptcyEndFact1;
    }

    /**
     * Sets a new bankruptcyEndFact1
     *
     * 14.1. Признак завершения расчетов с кредиторами = 1
     *
     * @param string $bankruptcyEndFact1
     * @return self
     */
    public function setBankruptcyEndFact1($bankruptcyEndFact1)
    {
        $this->bankruptcyEndFact1 = $bankruptcyEndFact1;
        return $this;
    }

    /**
     * Gets as completionDate
     *
     * 14.2. Дата завершения расчетов с кредиторами
     *
     * @return \DateTime
     */
    public function getCompletionDate()
    {
        return $this->completionDate;
    }

    /**
     * Sets a new completionDate
     *
     * 14.2. Дата завершения расчетов с кредиторами
     *
     * @param \DateTime $completionDate
     * @return self
     */
    public function setCompletionDate(?\DateTime $completionDate = null)
    {
        $this->completionDate = $completionDate;
        return $this;
    }

    /**
     * Gets as settlementExist0
     *
     * 14.3. Признак освобождения от исполнения требований кредиторов = 0
     *
     * @return string
     */
    public function getSettlementExist0()
    {
        return $this->settlementExist0;
    }

    /**
     * Sets a new settlementExist0
     *
     * 14.3. Признак освобождения от исполнения требований кредиторов = 0
     *
     * @param string $settlementExist0
     * @return self
     */
    public function setSettlementExist0($settlementExist0)
    {
        $this->settlementExist0 = $settlementExist0;
        return $this;
    }

    /**
     * Gets as settlementExist1
     *
     * 14.3. Признак освобождения от исполнения требований кредиторов = 1
     *
     * @return string
     */
    public function getSettlementExist1()
    {
        return $this->settlementExist1;
    }

    /**
     * Sets a new settlementExist1
     *
     * 14.3. Признак освобождения от исполнения требований кредиторов = 1
     *
     * @param string $settlementExist1
     * @return self
     */
    public function setSettlementExist1($settlementExist1)
    {
        $this->settlementExist1 = $settlementExist1;
        return $this;
    }

    /**
     * Gets as settlementDate
     *
     * 14.4. Дата освобождения от исполнения требований кредиторов
     *
     * @return \DateTime
     */
    public function getSettlementDate()
    {
        return $this->settlementDate;
    }

    /**
     * Sets a new settlementDate
     *
     * 14.4. Дата освобождения от исполнения требований кредиторов
     *
     * @param \DateTime $settlementDate
     * @return self
     */
    public function setSettlementDate(?\DateTime $settlementDate = null)
    {
        $this->settlementDate = $settlementDate;
        return $this;
    }
}

