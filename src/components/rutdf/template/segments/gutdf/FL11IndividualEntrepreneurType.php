<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL11IndividualEntrepreneurType
 *
 * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
 * XSD Type: FL_11_IndividualEntrepreneur_Type
 */
class FL11IndividualEntrepreneurType
{
    /**
     * 11.1. Признак индивидуального предпринимателя = 0
     *
     * @var string $regFact0
     */
    private $regFact0 = null;

    /**
     * 11.1. Признак индивидуального предпринимателя = 1
     *
     * @var string $regFact1
     */
    private $regFact1 = null;

    /**
     * 11.2. Регистрационный номер
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * 11.3. Дата регистрации индивидуального предпринимателя
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Gets as regFact0
     *
     * 11.1. Признак индивидуального предпринимателя = 0
     *
     * @return string
     */
    public function getRegFact0()
    {
        return $this->regFact0;
    }

    /**
     * Sets a new regFact0
     *
     * 11.1. Признак индивидуального предпринимателя = 0
     *
     * @param string $regFact0
     * @return self
     */
    public function setRegFact0($regFact0)
    {
        $this->regFact0 = $regFact0;
        return $this;
    }

    /**
     * Gets as regFact1
     *
     * 11.1. Признак индивидуального предпринимателя = 1
     *
     * @return string
     */
    public function getRegFact1()
    {
        return $this->regFact1;
    }

    /**
     * Sets a new regFact1
     *
     * 11.1. Признак индивидуального предпринимателя = 1
     *
     * @param string $regFact1
     * @return self
     */
    public function setRegFact1($regFact1)
    {
        $this->regFact1 = $regFact1;
        return $this;
    }

    /**
     * Gets as regNum
     *
     * 11.2. Регистрационный номер
     *
     * @return string
     */
    public function getRegNum()
    {
        return $this->regNum;
    }

    /**
     * Sets a new regNum
     *
     * 11.2. Регистрационный номер
     *
     * @param string $regNum
     * @return self
     */
    public function setRegNum($regNum)
    {
        $this->regNum = $regNum;
        return $this;
    }

    /**
     * Gets as date
     *
     * 11.3. Дата регистрации индивидуального предпринимателя
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
     * 11.3. Дата регистрации индивидуального предпринимателя
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }
}

