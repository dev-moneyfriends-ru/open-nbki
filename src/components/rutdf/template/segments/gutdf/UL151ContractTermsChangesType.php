<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL151ContractTermsChangesType
 *
 * Блок 15(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
 * XSD Type: UL_15_1_ContractTermsChanges_Type
 */
class UL151ContractTermsChangesType
{
    /**
     * 15(1).1. Признак изменения условий обязательства = 0
     *
     * @var string $changeFact0
     */
    private $changeFact0 = null;

    /**
     * 15(1).1. Признак изменения условий обязательства = 1
     *
     * @var string $changeFact1
     */
    private $changeFact1 = null;

    /**
     * 15(1).2. Код вида изменения условий обязательства
     *
     * @var int $termsChangeCode
     */
    private $termsChangeCode = null;

    /**
     * 15(1).3. Описание иного изменения условий обязательства
     *
     * @var string $termsChangeDesc
     */
    private $termsChangeDesc = null;

    /**
     * 15(1).4. Дата начала действия изменения условий обязательства
     *
     * @var string $changingDate
     */
    private $changingDate = null;

    /**
     * Gets as changeFact0
     *
     * 15(1).1. Признак изменения условий обязательства = 0
     *
     * @return string
     */
    public function getChangeFact0()
    {
        return $this->changeFact0;
    }

    /**
     * Sets a new changeFact0
     *
     * 15(1).1. Признак изменения условий обязательства = 0
     *
     * @param string $changeFact0
     * @return self
     */
    public function setChangeFact0($changeFact0)
    {
        $this->changeFact0 = $changeFact0;
        return $this;
    }

    /**
     * Gets as changeFact1
     *
     * 15(1).1. Признак изменения условий обязательства = 1
     *
     * @return string
     */
    public function getChangeFact1()
    {
        return $this->changeFact1;
    }

    /**
     * Sets a new changeFact1
     *
     * 15(1).1. Признак изменения условий обязательства = 1
     *
     * @param string $changeFact1
     * @return self
     */
    public function setChangeFact1($changeFact1)
    {
        $this->changeFact1 = $changeFact1;
        return $this;
    }

    /**
     * Gets as termsChangeCode
     *
     * 15(1).2. Код вида изменения условий обязательства
     *
     * @return int
     */
    public function getTermsChangeCode()
    {
        return $this->termsChangeCode;
    }

    /**
     * Sets a new termsChangeCode
     *
     * 15(1).2. Код вида изменения условий обязательства
     *
     * @param int $termsChangeCode
     * @return self
     */
    public function setTermsChangeCode($termsChangeCode)
    {
        $this->termsChangeCode = $termsChangeCode;
        return $this;
    }

    /**
     * Gets as termsChangeDesc
     *
     * 15(1).3. Описание иного изменения условий обязательства
     *
     * @return string
     */
    public function getTermsChangeDesc()
    {
        return $this->termsChangeDesc;
    }

    /**
     * Sets a new termsChangeDesc
     *
     * 15(1).3. Описание иного изменения условий обязательства
     *
     * @param string $termsChangeDesc
     * @return self
     */
    public function setTermsChangeDesc($termsChangeDesc)
    {
        $this->termsChangeDesc = $termsChangeDesc;
        return $this;
    }

    /**
     * Gets as changingDate
     *
     * 15(1).4. Дата начала действия изменения условий обязательства
     *
     * @return string
     */
    public function getChangingDate()
    {
        return $this->changingDate;
    }

    /**
     * Sets a new changingDate
     *
     * 15(1).4. Дата начала действия изменения условий обязательства
     *
     * @param string $changingDate
     * @return self
     */
    public function setChangingDate($changingDate)
    {
        $this->changingDate = $changingDate;
        return $this;
    }
}

