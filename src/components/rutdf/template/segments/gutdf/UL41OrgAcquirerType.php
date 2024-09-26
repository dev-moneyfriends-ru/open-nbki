<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL41OrgAcquirerType
 *
 * Блок 41. Сведения о приобретателе прав – юридическом лице
 * XSD Type: UL_41_OrgAcquirer_Type
 */
class UL41OrgAcquirerType
{
    /**
     * 41.1. Код приобретателя прав
     *
     * @var int $code
     */
    private $code = null;

    /**
     * 41.2. Признак регистрации в Российской Федерации = 0
     *
     * @var string $regRusExist0
     */
    private $regRusExist0 = null;

    /**
     * 41.2. Признак регистрации в Российской Федерации = 1
     *
     * @var string $regRusExist1
     */
    private $regRusExist1 = null;

    /**
     * 41.3. Полное наименование
     *
     * @var string $fullName
     */
    private $fullName = null;

    /**
     * 41.4. Сокращенное наименование
     *
     * @var string $shortName
     */
    private $shortName = null;

    /**
     * 41.5. Иное наименование
     *
     * @var string $otherName
     */
    private $otherName = null;

    /**
     * 41.6. Идентификатор LEI
     *
     * @var string $lei
     */
    private $lei = null;

    /**
     * 41.7. Регистрационный номер
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * Номер налогоплательщика
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType\TaxNumGroupUL41OrgAcquirerAType[] $taxNumGroupUL41OrgAcquirer
     */
    private $taxNumGroupUL41OrgAcquirer = [
        
    ];

    /**
     * 41.10. Дата приобретения прав
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Gets as code
     *
     * 41.1. Код приобретателя прав
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
     * 41.1. Код приобретателя прав
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
     * 41.2. Признак регистрации в Российской Федерации = 0
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
     * 41.2. Признак регистрации в Российской Федерации = 0
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
     * 41.2. Признак регистрации в Российской Федерации = 1
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
     * 41.2. Признак регистрации в Российской Федерации = 1
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
     * 41.3. Полное наименование
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
     * 41.3. Полное наименование
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
     * 41.4. Сокращенное наименование
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
     * 41.4. Сокращенное наименование
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
     * 41.5. Иное наименование
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
     * 41.5. Иное наименование
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
     * 41.6. Идентификатор LEI
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
     * 41.6. Идентификатор LEI
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
     * 41.7. Регистрационный номер
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
     * 41.7. Регистрационный номер
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
     * Adds as taxNumGroupUL41OrgAcquirer
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType\TaxNumGroupUL41OrgAcquirerAType $taxNumGroupUL41OrgAcquirer
     *@return self
     */
    public function addToTaxNumGroupUL41OrgAcquirer(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType\TaxNumGroupUL41OrgAcquirerAType $taxNumGroupUL41OrgAcquirer)
    {
        $this->taxNumGroupUL41OrgAcquirer[] = $taxNumGroupUL41OrgAcquirer;
        return $this;
    }

    /**
     * isset taxNumGroupUL41OrgAcquirer
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxNumGroupUL41OrgAcquirer($index)
    {
        return isset($this->taxNumGroupUL41OrgAcquirer[$index]);
    }

    /**
     * unset taxNumGroupUL41OrgAcquirer
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxNumGroupUL41OrgAcquirer($index)
    {
        unset($this->taxNumGroupUL41OrgAcquirer[$index]);
    }

    /**
     * Gets as taxNumGroupUL41OrgAcquirer
     *
     * Номер налогоплательщика
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType\TaxNumGroupUL41OrgAcquirerAType[]
     */
    public function getTaxNumGroupUL41OrgAcquirer()
    {
        return $this->taxNumGroupUL41OrgAcquirer;
    }

    /**
     * Sets a new taxNumGroupUL41OrgAcquirer
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType\TaxNumGroupUL41OrgAcquirerAType[] $taxNumGroupUL41OrgAcquirer
     * @return self
     */
    public function setTaxNumGroupUL41OrgAcquirer(array $taxNumGroupUL41OrgAcquirer = null)
    {
        $this->taxNumGroupUL41OrgAcquirer = $taxNumGroupUL41OrgAcquirer;
        return $this;
    }

    /**
     * Gets as date
     *
     * 41.10. Дата приобретения прав
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
     * 41.10. Дата приобретения прав
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

