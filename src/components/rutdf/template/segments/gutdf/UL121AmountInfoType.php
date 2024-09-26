<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL121AmountInfoType
 *
 * Блок 12(1). Сведения об обеспечиваемом обязательстве
 * XSD Type: UL_12_1_AmountInfo_Type
 */
class UL121AmountInfoType
{
    /**
     * 12(1).1. Признак обеспечивающего обязательства = 0
     *
     * @var string $securityFact0
     */
    private $securityFact0 = null;

    /**
     * 12(1).1. Признак обеспечивающего обязательства = 1
     *
     * @var string $securityFact1
     */
    private $securityFact1 = null;

    /**
     * 12(1).2. Сумма обеспечиваемого обязательства
     *
     * @var float $securitySum
     */
    private $securitySum = null;

    /**
     * 12(1).3. Валюта обеспечиваемого обязательства
     *
     * @var string $securityCurrency
     */
    private $securityCurrency = null;

    /**
     * 12(1).4. Код типа обеспечиваемого обязательства
     *
     * @var int $securityTypeCode
     */
    private $securityTypeCode = null;

    /**
     * 12(1).5. Дата расчета
     *
     * @var string $calcDate
     */
    private $calcDate = null;

    /**
     * 12(1).6. УИд сделки, в результате которой возникло обеспечиваемое обязательство
     *
     * @var string $securityUid
     */
    private $securityUid = null;

    /**
     * 12(1).7. Лимит ответственности по обеспечиваемому обязательству
     *
     * @var int $liabilityLimit
     */
    private $liabilityLimit = null;

    /**
     * Gets as securityFact0
     *
     * 12(1).1. Признак обеспечивающего обязательства = 0
     *
     * @return string
     */
    public function getSecurityFact0()
    {
        return $this->securityFact0;
    }

    /**
     * Sets a new securityFact0
     *
     * 12(1).1. Признак обеспечивающего обязательства = 0
     *
     * @param string $securityFact0
     * @return self
     */
    public function setSecurityFact0($securityFact0)
    {
        $this->securityFact0 = $securityFact0;
        return $this;
    }

    /**
     * Gets as securityFact1
     *
     * 12(1).1. Признак обеспечивающего обязательства = 1
     *
     * @return string
     */
    public function getSecurityFact1()
    {
        return $this->securityFact1;
    }

    /**
     * Sets a new securityFact1
     *
     * 12(1).1. Признак обеспечивающего обязательства = 1
     *
     * @param string $securityFact1
     * @return self
     */
    public function setSecurityFact1($securityFact1)
    {
        $this->securityFact1 = $securityFact1;
        return $this;
    }

    /**
     * Gets as securitySum
     *
     * 12(1).2. Сумма обеспечиваемого обязательства
     *
     * @return float
     */
    public function getSecuritySum()
    {
        return $this->securitySum;
    }

    /**
     * Sets a new securitySum
     *
     * 12(1).2. Сумма обеспечиваемого обязательства
     *
     * @param float $securitySum
     * @return self
     */
    public function setSecuritySum($securitySum)
    {
        $this->securitySum = $securitySum;
        return $this;
    }

    /**
     * Gets as securityCurrency
     *
     * 12(1).3. Валюта обеспечиваемого обязательства
     *
     * @return string
     */
    public function getSecurityCurrency()
    {
        return $this->securityCurrency;
    }

    /**
     * Sets a new securityCurrency
     *
     * 12(1).3. Валюта обеспечиваемого обязательства
     *
     * @param string $securityCurrency
     * @return self
     */
    public function setSecurityCurrency($securityCurrency)
    {
        $this->securityCurrency = $securityCurrency;
        return $this;
    }

    /**
     * Gets as securityTypeCode
     *
     * 12(1).4. Код типа обеспечиваемого обязательства
     *
     * @return int
     */
    public function getSecurityTypeCode()
    {
        return $this->securityTypeCode;
    }

    /**
     * Sets a new securityTypeCode
     *
     * 12(1).4. Код типа обеспечиваемого обязательства
     *
     * @param int $securityTypeCode
     * @return self
     */
    public function setSecurityTypeCode($securityTypeCode)
    {
        $this->securityTypeCode = $securityTypeCode;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * 12(1).5. Дата расчета
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
     * 12(1).5. Дата расчета
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
     * Gets as securityUid
     *
     * 12(1).6. УИд сделки, в результате которой возникло обеспечиваемое обязательство
     *
     * @return string
     */
    public function getSecurityUid()
    {
        return $this->securityUid;
    }

    /**
     * Sets a new securityUid
     *
     * 12(1).6. УИд сделки, в результате которой возникло обеспечиваемое обязательство
     *
     * @param string $securityUid
     * @return self
     */
    public function setSecurityUid($securityUid)
    {
        $this->securityUid = $securityUid;
        return $this;
    }

    /**
     * Gets as liabilityLimit
     *
     * 12(1).7. Лимит ответственности по обеспечиваемому обязательству
     *
     * @return int
     */
    public function getLiabilityLimit()
    {
        return $this->liabilityLimit;
    }

    /**
     * Sets a new liabilityLimit
     *
     * 12(1).7. Лимит ответственности по обеспечиваемому обязательству
     *
     * @param int $liabilityLimit
     * @return self
     */
    public function setLiabilityLimit($liabilityLimit)
    {
        $this->liabilityLimit = $liabilityLimit;
        return $this;
    }
}

