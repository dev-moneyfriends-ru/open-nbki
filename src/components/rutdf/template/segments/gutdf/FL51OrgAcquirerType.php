<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL51OrgAcquirerType
 *
 * Блок 51. Сведения о приобретателе прав – юридическом лице
 * XSD Type: FL_51_OrgAcquirer_Type
 */
class FL51OrgAcquirerType
{
    /**
     * 51.1. Код приобретателя прав
     *
     * @var int $code
     */
    private $code = null;

    /**
     * 51.2. Признак регистрации в Российской Федерации = 0
     *
     * @var string $regRusExist0
     */
    private $regRusExist0 = null;

    /**
     * 51.2. Признак регистрации в Российской Федерации = 1
     *
     * @var string $regRusExist1
     */
    private $regRusExist1 = null;

    /**
     * 51.3. Полное наименование
     *
     * @var string $fullName
     */
    private $fullName = null;

    /**
     * 51.4. Сокращенное наименование
     *
     * @var string $shortName
     */
    private $shortName = null;

    /**
     * 51.5. Иное наименование
     *
     * @var string $otherName
     */
    private $otherName = null;

    /**
     * 51.6. Идентификатор LEI
     *
     * @var string $lei
     */
    private $lei = null;

    /**
     * 51.7. Регистрационный номер
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * Номер налогоплательщика
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType\TaxNumGroupFL51OrgAcquirerAType[] $taxNumGroupFL51OrgAcquirer
     */
    private $taxNumGroupFL51OrgAcquirer = [
        
    ];

    /**
     * 51.10. Дата приобретения прав
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Gets as code
     *
     * 51.1. Код приобретателя прав
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
     * 51.1. Код приобретателя прав
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
     * Gets as regRusExist0
     *
     * 51.2. Признак регистрации в Российской Федерации = 0
     *
     * @return string
     */
    public function getRegRusExist0()
    {
        return $this->regRusExist0;
    }

    /**
     * Sets a new regRusExist0
     *
     * 51.2. Признак регистрации в Российской Федерации = 0
     *
     * @param string $regRusExist0
     * @return self
     */
    public function setRegRusExist0($regRusExist0)
    {
        $this->regRusExist0 = $regRusExist0;
        return $this;
    }

    /**
     * Gets as regRusExist1
     *
     * 51.2. Признак регистрации в Российской Федерации = 1
     *
     * @return string
     */
    public function getRegRusExist1()
    {
        return $this->regRusExist1;
    }

    /**
     * Sets a new regRusExist1
     *
     * 51.2. Признак регистрации в Российской Федерации = 1
     *
     * @param string $regRusExist1
     * @return self
     */
    public function setRegRusExist1($regRusExist1)
    {
        $this->regRusExist1 = $regRusExist1;
        return $this;
    }

    /**
     * Gets as fullName
     *
     * 51.3. Полное наименование
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets a new fullName
     *
     * 51.3. Полное наименование
     *
     * @param string $fullName
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Gets as shortName
     *
     * 51.4. Сокращенное наименование
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName
     *
     * 51.4. Сокращенное наименование
     *
     * @param string $shortName
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * Gets as otherName
     *
     * 51.5. Иное наименование
     *
     * @return string
     */
    public function getOtherName()
    {
        return $this->otherName;
    }

    /**
     * Sets a new otherName
     *
     * 51.5. Иное наименование
     *
     * @param string $otherName
     * @return self
     */
    public function setOtherName($otherName)
    {
        $this->otherName = $otherName;
        return $this;
    }

    /**
     * Gets as lei
     *
     * 51.6. Идентификатор LEI
     *
     * @return string
     */
    public function getLei()
    {
        return $this->lei;
    }

    /**
     * Sets a new lei
     *
     * 51.6. Идентификатор LEI
     *
     * @param string $lei
     * @return self
     */
    public function setLei($lei)
    {
        $this->lei = $lei;
        return $this;
    }

    /**
     * Gets as regNum
     *
     * 51.7. Регистрационный номер
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
     * 51.7. Регистрационный номер
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
     * Adds as taxNumGroupFL51OrgAcquirer
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType\TaxNumGroupFL51OrgAcquirerAType $taxNumGroupFL51OrgAcquirer
     *@return self
     */
    public function addToTaxNumGroupFL51OrgAcquirer(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType\TaxNumGroupFL51OrgAcquirerAType $taxNumGroupFL51OrgAcquirer)
    {
        $this->taxNumGroupFL51OrgAcquirer[] = $taxNumGroupFL51OrgAcquirer;
        return $this;
    }

    /**
     * isset taxNumGroupFL51OrgAcquirer
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxNumGroupFL51OrgAcquirer($index)
    {
        return isset($this->taxNumGroupFL51OrgAcquirer[$index]);
    }

    /**
     * unset taxNumGroupFL51OrgAcquirer
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxNumGroupFL51OrgAcquirer($index)
    {
        unset($this->taxNumGroupFL51OrgAcquirer[$index]);
    }

    /**
     * Gets as taxNumGroupFL51OrgAcquirer
     *
     * Номер налогоплательщика
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType\TaxNumGroupFL51OrgAcquirerAType[]
     */
    public function getTaxNumGroupFL51OrgAcquirer()
    {
        return $this->taxNumGroupFL51OrgAcquirer;
    }

    /**
     * Sets a new taxNumGroupFL51OrgAcquirer
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType\TaxNumGroupFL51OrgAcquirerAType[] $taxNumGroupFL51OrgAcquirer
     * @return self
     */
    public function setTaxNumGroupFL51OrgAcquirer(array $taxNumGroupFL51OrgAcquirer = null)
    {
        $this->taxNumGroupFL51OrgAcquirer = $taxNumGroupFL51OrgAcquirer;
        return $this;
    }

    /**
     * Gets as date
     *
     * 51.10. Дата приобретения прав
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
     * 51.10. Дата приобретения прав
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }
}

