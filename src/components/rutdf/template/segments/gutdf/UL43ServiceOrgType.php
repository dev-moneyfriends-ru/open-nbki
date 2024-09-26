<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL43ServiceOrgType
 *
 * Блок 43. Сведения об обслуживающей организации
 * XSD Type: UL_43_ServiceOrg_Type
 */
class UL43ServiceOrgType
{
    /**
     * 43.1. Признак регистрации в Российской Федерации = 0
     *
     * @var string $regRusExist0
     */
    private $regRusExist0 = null;

    /**
     * 43.1. Признак регистрации в Российской Федерации = 1
     *
     * @var string $regRusExist1
     */
    private $regRusExist1 = null;

    /**
     * 43.2. Полное наименование
     *
     * @var string $fullName
     */
    private $fullName = null;

    /**
     * 43.3. Сокращенное наименование
     *
     * @var string $shortName
     */
    private $shortName = null;

    /**
     * 43.4. Иное наименование
     *
     * @var string $otherName
     */
    private $otherName = null;

    /**
     * 43.5. Регистрационный номер обслуживающей организации
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * Номер налогоплательщика
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType\TaxNumGroupUL43ServiceOrgAType[] $taxNumGroupUL43ServiceOrg
     */
    private $taxNumGroupUL43ServiceOrg = [
        
    ];

    /**
     * 43.8. Дата начала действия договора обслуживания
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * 43.9. Дата окончания действия договора обслуживания
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * 43.10. Наименование эмитента
     *
     * @var string $issuerName
     */
    private $issuerName = null;

    /**
     * 43.11. Регистрационный номер эмитента
     *
     * @var string $issuerRegNum
     */
    private $issuerRegNum = null;

    /**
     * Gets as regRusExist0
     *
     * 43.1. Признак регистрации в Российской Федерации = 0
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
     * 43.1. Признак регистрации в Российской Федерации = 0
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
     * 43.1. Признак регистрации в Российской Федерации = 1
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
     * 43.1. Признак регистрации в Российской Федерации = 1
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
     * 43.2. Полное наименование
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
     * 43.2. Полное наименование
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
     * 43.3. Сокращенное наименование
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
     * 43.3. Сокращенное наименование
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
     * 43.4. Иное наименование
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
     * 43.4. Иное наименование
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
     * Gets as regNum
     *
     * 43.5. Регистрационный номер обслуживающей организации
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
     * 43.5. Регистрационный номер обслуживающей организации
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
     * Adds as taxNumGroupUL43ServiceOrg
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType\TaxNumGroupUL43ServiceOrgAType $taxNumGroupUL43ServiceOrg
     *@return self
     */
    public function addToTaxNumGroupUL43ServiceOrg(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType\TaxNumGroupUL43ServiceOrgAType $taxNumGroupUL43ServiceOrg)
    {
        $this->taxNumGroupUL43ServiceOrg[] = $taxNumGroupUL43ServiceOrg;
        return $this;
    }

    /**
     * isset taxNumGroupUL43ServiceOrg
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxNumGroupUL43ServiceOrg($index)
    {
        return isset($this->taxNumGroupUL43ServiceOrg[$index]);
    }

    /**
     * unset taxNumGroupUL43ServiceOrg
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxNumGroupUL43ServiceOrg($index)
    {
        unset($this->taxNumGroupUL43ServiceOrg[$index]);
    }

    /**
     * Gets as taxNumGroupUL43ServiceOrg
     *
     * Номер налогоплательщика
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType\TaxNumGroupUL43ServiceOrgAType[]
     */
    public function getTaxNumGroupUL43ServiceOrg()
    {
        return $this->taxNumGroupUL43ServiceOrg;
    }

    /**
     * Sets a new taxNumGroupUL43ServiceOrg
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType\TaxNumGroupUL43ServiceOrgAType[] $taxNumGroupUL43ServiceOrg
     * @return self
     */
    public function setTaxNumGroupUL43ServiceOrg(array $taxNumGroupUL43ServiceOrg = null)
    {
        $this->taxNumGroupUL43ServiceOrg = $taxNumGroupUL43ServiceOrg;
        return $this;
    }

    /**
     * Gets as date
     *
     * 43.8. Дата начала действия договора обслуживания
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
     * 43.8. Дата начала действия договора обслуживания
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * 43.9. Дата окончания действия договора обслуживания
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
     * 43.9. Дата окончания действия договора обслуживания
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
     * Gets as issuerName
     *
     * 43.10. Наименование эмитента
     *
     * @return string
     */
    public function getIssuerName()
    {
        return $this->issuerName;
    }

    /**
     * Sets a new issuerName
     *
     * 43.10. Наименование эмитента
     *
     * @param string $issuerName
     * @return self
     */
    public function setIssuerName($issuerName)
    {
        $this->issuerName = $issuerName;
        return $this;
    }

    /**
     * Gets as issuerRegNum
     *
     * 43.11. Регистрационный номер эмитента
     *
     * @return string
     */
    public function getIssuerRegNum()
    {
        return $this->issuerRegNum;
    }

    /**
     * Sets a new issuerRegNum
     *
     * 43.11. Регистрационный номер эмитента
     *
     * @param string $issuerRegNum
     * @return self
     */
    public function setIssuerRegNum($issuerRegNum)
    {
        $this->issuerRegNum = $issuerRegNum;
        return $this;
    }
}

