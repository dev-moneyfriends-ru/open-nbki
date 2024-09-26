<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL48UL38ArbitrationManagerSourceType
 *
 * Блок 48. Сведения об источнике – арбитражном управляющем
 * XSD Type: FL_48_UL_38_ArbitrationManagerSource_Type
 */
class FL48UL38ArbitrationManagerSourceType
{
    /**
     * 48.1., 38.1. Фамилия
     *
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * 48.2., 38.2. Имя
     *
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * 48.3., 38.3. Отчество
     *
     * @var string $middleName
     */
    private $middleName = null;

    /**
     * 48.4., 38.4. Дата рождения
     *
     * @var string $birthDate
     */
    private $birthDate = null;

    /**
     * 48.5., 38.5. Место рождения
     *
     * @var string $birthPlace
     */
    private $birthPlace = null;

    /**
     * 48.6., 38.6. Наименование саморегулируемой организации
     *
     * @var string $sourceSroName
     */
    private $sourceSroName = null;

    /**
     * 48.7., 38.7. Адрес саморегулируемой организации
     *
     * @var string $sourceSroAddress
     */
    private $sourceSroAddress = null;

    /**
     * 48.8., 38.8. Дата утверждения арбитражного управляющего
     *
     * @var \DateTime $sourceAcceptDate
     */
    private $sourceAcceptDate = null;

    /**
     * 48.9., 38.9. Дата прекращения полномочий арбитражного управляющего
     *
     * @var \DateTime $sourceTerminationDate
     */
    private $sourceTerminationDate = null;

    /**
     * Номер налогоплательщика
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL48UL38ArbitrationManagerSourceType\TaxNumGroupFL48UL38ArbitrationManagerSourceAType[] $taxNumGroupFL48UL38ArbitrationManagerSource
     */
    private $taxNumGroupFL48UL38ArbitrationManagerSource = [
        
    ];

    /**
     * 48.12., 38.12. СНИЛС
     *
     * @var string $socialNum
     */
    private $socialNum = null;

    /**
     * 48.13., 38.13. Дата формирования кредитной информации
     *
     * @var \DateTime $sourceCreditInfoDate
     */
    private $sourceCreditInfoDate = null;

    /**
     * Gets as lastName
     *
     * 48.1., 38.1. Фамилия
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * 48.1., 38.1. Фамилия
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * 48.2., 38.2. Имя
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * 48.2., 38.2. Имя
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as middleName
     *
     * 48.3., 38.3. Отчество
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Sets a new middleName
     *
     * 48.3., 38.3. Отчество
     *
     * @param string $middleName
     * @return self
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Gets as birthDate
     *
     * 48.4., 38.4. Дата рождения
     *
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * 48.4., 38.4. Дата рождения
     *
     * @param string $birthDate
     * @return self
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as birthPlace
     *
     * 48.5., 38.5. Место рождения
     *
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * Sets a new birthPlace
     *
     * 48.5., 38.5. Место рождения
     *
     * @param string $birthPlace
     * @return self
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
        return $this;
    }

    /**
     * Gets as sourceSroName
     *
     * 48.6., 38.6. Наименование саморегулируемой организации
     *
     * @return string
     */
    public function getSourceSroName()
    {
        return $this->sourceSroName;
    }

    /**
     * Sets a new sourceSroName
     *
     * 48.6., 38.6. Наименование саморегулируемой организации
     *
     * @param string $sourceSroName
     * @return self
     */
    public function setSourceSroName($sourceSroName)
    {
        $this->sourceSroName = $sourceSroName;
        return $this;
    }

    /**
     * Gets as sourceSroAddress
     *
     * 48.7., 38.7. Адрес саморегулируемой организации
     *
     * @return string
     */
    public function getSourceSroAddress()
    {
        return $this->sourceSroAddress;
    }

    /**
     * Sets a new sourceSroAddress
     *
     * 48.7., 38.7. Адрес саморегулируемой организации
     *
     * @param string $sourceSroAddress
     * @return self
     */
    public function setSourceSroAddress($sourceSroAddress)
    {
        $this->sourceSroAddress = $sourceSroAddress;
        return $this;
    }

    /**
     * Gets as sourceAcceptDate
     *
     * 48.8., 38.8. Дата утверждения арбитражного управляющего
     *
     * @return \DateTime
     */
    public function getSourceAcceptDate()
    {
        return $this->sourceAcceptDate;
    }

    /**
     * Sets a new sourceAcceptDate
     *
     * 48.8., 38.8. Дата утверждения арбитражного управляющего
     *
     * @param \DateTime $sourceAcceptDate
     * @return self
     */
    public function setSourceAcceptDate(\DateTime $sourceAcceptDate)
    {
        $this->sourceAcceptDate = $sourceAcceptDate;
        return $this;
    }

    /**
     * Gets as sourceTerminationDate
     *
     * 48.9., 38.9. Дата прекращения полномочий арбитражного управляющего
     *
     * @return \DateTime
     */
    public function getSourceTerminationDate()
    {
        return $this->sourceTerminationDate;
    }

    /**
     * Sets a new sourceTerminationDate
     *
     * 48.9., 38.9. Дата прекращения полномочий арбитражного управляющего
     *
     * @param \DateTime $sourceTerminationDate
     * @return self
     */
    public function setSourceTerminationDate(?\DateTime $sourceTerminationDate = null)
    {
        $this->sourceTerminationDate = $sourceTerminationDate;
        return $this;
    }

    /**
     * Adds as taxNumGroupFL48UL38ArbitrationManagerSource
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL48UL38ArbitrationManagerSourceType\TaxNumGroupFL48UL38ArbitrationManagerSourceAType $taxNumGroupFL48UL38ArbitrationManagerSource
     *@return self
     */
    public function addToTaxNumGroupFL48UL38ArbitrationManagerSource(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL48UL38ArbitrationManagerSourceType\TaxNumGroupFL48UL38ArbitrationManagerSourceAType $taxNumGroupFL48UL38ArbitrationManagerSource)
    {
        $this->taxNumGroupFL48UL38ArbitrationManagerSource[] = $taxNumGroupFL48UL38ArbitrationManagerSource;
        return $this;
    }

    /**
     * isset taxNumGroupFL48UL38ArbitrationManagerSource
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxNumGroupFL48UL38ArbitrationManagerSource($index)
    {
        return isset($this->taxNumGroupFL48UL38ArbitrationManagerSource[$index]);
    }

    /**
     * unset taxNumGroupFL48UL38ArbitrationManagerSource
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxNumGroupFL48UL38ArbitrationManagerSource($index)
    {
        unset($this->taxNumGroupFL48UL38ArbitrationManagerSource[$index]);
    }

    /**
     * Gets as taxNumGroupFL48UL38ArbitrationManagerSource
     *
     * Номер налогоплательщика
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL48UL38ArbitrationManagerSourceType\TaxNumGroupFL48UL38ArbitrationManagerSourceAType[]
     */
    public function getTaxNumGroupFL48UL38ArbitrationManagerSource()
    {
        return $this->taxNumGroupFL48UL38ArbitrationManagerSource;
    }

    /**
     * Sets a new taxNumGroupFL48UL38ArbitrationManagerSource
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL48UL38ArbitrationManagerSourceType\TaxNumGroupFL48UL38ArbitrationManagerSourceAType[] $taxNumGroupFL48UL38ArbitrationManagerSource
     * @return self
     */
    public function setTaxNumGroupFL48UL38ArbitrationManagerSource(array $taxNumGroupFL48UL38ArbitrationManagerSource = null)
    {
        $this->taxNumGroupFL48UL38ArbitrationManagerSource = $taxNumGroupFL48UL38ArbitrationManagerSource;
        return $this;
    }

    /**
     * Gets as socialNum
     *
     * 48.12., 38.12. СНИЛС
     *
     * @return string
     */
    public function getSocialNum()
    {
        return $this->socialNum;
    }

    /**
     * Sets a new socialNum
     *
     * 48.12., 38.12. СНИЛС
     *
     * @param string $socialNum
     * @return self
     */
    public function setSocialNum($socialNum)
    {
        $this->socialNum = $socialNum;
        return $this;
    }

    /**
     * Gets as sourceCreditInfoDate
     *
     * 48.13., 38.13. Дата формирования кредитной информации
     *
     * @return \DateTime
     */
    public function getSourceCreditInfoDate()
    {
        return $this->sourceCreditInfoDate;
    }

    /**
     * Sets a new sourceCreditInfoDate
     *
     * 48.13., 38.13. Дата формирования кредитной информации
     *
     * @param \DateTime $sourceCreditInfoDate
     * @return self
     */
    public function setSourceCreditInfoDate(\DateTime $sourceCreditInfoDate)
    {
        $this->sourceCreditInfoDate = $sourceCreditInfoDate;
        return $this;
    }
}

