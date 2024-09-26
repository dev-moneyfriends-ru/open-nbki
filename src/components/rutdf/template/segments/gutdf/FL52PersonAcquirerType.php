<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL52PersonAcquirerType
 *
 * Блок 52. Сведения о приобретателе прав – физическом лице
 * XSD Type: FL_52_PersonAcquirer_Type
 */
class FL52PersonAcquirerType
{
    /**
     * 52.1. Фамилия
     *
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * 52.2. Имя
     *
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * 52.3. Отчество
     *
     * @var string $middleName
     */
    private $middleName = null;

    /**
     * 52.4. Дата рождения
     *
     * @var string $birthDate
     */
    private $birthDate = null;

    /**
     * 52.5. Место рождения
     *
     * @var string $birthPlace
     */
    private $birthPlace = null;

    /**
     * Номер налогоплательщика
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType\TaxNumGroupFL52PersonAcquirerAType[] $taxNumGroupFL52PersonAcquirer
     */
    private $taxNumGroupFL52PersonAcquirer = [
        
    ];

    /**
     * 52.8. СНИЛС
     *
     * @var string $socialNum
     */
    private $socialNum = null;

    /**
     * 52.9. Код документа
     *
     * @var string $docCode
     */
    private $docCode = null;

    /**
     * 52.10. Наименование иного документа
     *
     * @var string $docOtherName
     */
    private $docOtherName = null;

    /**
     * 52.11. Серия документа
     *
     * @var string $docSeries
     */
    private $docSeries = null;

    /**
     * 52.12. Номер документа
     *
     * @var string $docNum
     */
    private $docNum = null;

    /**
     * 52.13. Дата выдачи документа
     *
     * @var string $issueDate
     */
    private $issueDate = null;

    /**
     * 52.14. Кем выдан документ
     *
     * @var string $docIssuer
     */
    private $docIssuer = null;

    /**
     * 52.15. Код подразделения
     *
     * @var string $deptCode
     */
    private $deptCode = null;

    /**
     * 52.16. Дата приобретения прав
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Gets as lastName
     *
     * 52.1. Фамилия
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
     * 52.1. Фамилия
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
     * 52.2. Имя
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
     * 52.2. Имя
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
     * 52.3. Отчество
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
     * 52.3. Отчество
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
     * 52.4. Дата рождения
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
     * 52.4. Дата рождения
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
     * 52.5. Место рождения
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
     * 52.5. Место рождения
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
     * Adds as taxNumGroupFL52PersonAcquirer
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType\TaxNumGroupFL52PersonAcquirerAType $taxNumGroupFL52PersonAcquirer
     *@return self
     */
    public function addToTaxNumGroupFL52PersonAcquirer(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType\TaxNumGroupFL52PersonAcquirerAType $taxNumGroupFL52PersonAcquirer)
    {
        $this->taxNumGroupFL52PersonAcquirer[] = $taxNumGroupFL52PersonAcquirer;
        return $this;
    }

    /**
     * isset taxNumGroupFL52PersonAcquirer
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxNumGroupFL52PersonAcquirer($index)
    {
        return isset($this->taxNumGroupFL52PersonAcquirer[$index]);
    }

    /**
     * unset taxNumGroupFL52PersonAcquirer
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxNumGroupFL52PersonAcquirer($index)
    {
        unset($this->taxNumGroupFL52PersonAcquirer[$index]);
    }

    /**
     * Gets as taxNumGroupFL52PersonAcquirer
     *
     * Номер налогоплательщика
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType\TaxNumGroupFL52PersonAcquirerAType[]
     */
    public function getTaxNumGroupFL52PersonAcquirer()
    {
        return $this->taxNumGroupFL52PersonAcquirer;
    }

    /**
     * Sets a new taxNumGroupFL52PersonAcquirer
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType\TaxNumGroupFL52PersonAcquirerAType[] $taxNumGroupFL52PersonAcquirer
     * @return self
     */
    public function setTaxNumGroupFL52PersonAcquirer(array $taxNumGroupFL52PersonAcquirer = null)
    {
        $this->taxNumGroupFL52PersonAcquirer = $taxNumGroupFL52PersonAcquirer;
        return $this;
    }

    /**
     * Gets as socialNum
     *
     * 52.8. СНИЛС
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
     * 52.8. СНИЛС
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
     * Gets as docCode
     *
     * 52.9. Код документа
     *
     * @return string
     */
    public function getDocCode()
    {
        return $this->docCode;
    }

    /**
     * Sets a new docCode
     *
     * 52.9. Код документа
     *
     * @param string $docCode
     * @return self
     */
    public function setDocCode($docCode)
    {
        $this->docCode = $docCode;
        return $this;
    }

    /**
     * Gets as docOtherName
     *
     * 52.10. Наименование иного документа
     *
     * @return string
     */
    public function getDocOtherName()
    {
        return $this->docOtherName;
    }

    /**
     * Sets a new docOtherName
     *
     * 52.10. Наименование иного документа
     *
     * @param string $docOtherName
     * @return self
     */
    public function setDocOtherName($docOtherName)
    {
        $this->docOtherName = $docOtherName;
        return $this;
    }

    /**
     * Gets as docSeries
     *
     * 52.11. Серия документа
     *
     * @return string
     */
    public function getDocSeries()
    {
        return $this->docSeries;
    }

    /**
     * Sets a new docSeries
     *
     * 52.11. Серия документа
     *
     * @param string $docSeries
     * @return self
     */
    public function setDocSeries($docSeries)
    {
        $this->docSeries = $docSeries;
        return $this;
    }

    /**
     * Gets as docNum
     *
     * 52.12. Номер документа
     *
     * @return string
     */
    public function getDocNum()
    {
        return $this->docNum;
    }

    /**
     * Sets a new docNum
     *
     * 52.12. Номер документа
     *
     * @param string $docNum
     * @return self
     */
    public function setDocNum($docNum)
    {
        $this->docNum = $docNum;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * 52.13. Дата выдачи документа
     *
     * @return string
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * 52.13. Дата выдачи документа
     *
     * @param string $issueDate
     * @return self
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as docIssuer
     *
     * 52.14. Кем выдан документ
     *
     * @return string
     */
    public function getDocIssuer()
    {
        return $this->docIssuer;
    }

    /**
     * Sets a new docIssuer
     *
     * 52.14. Кем выдан документ
     *
     * @param string $docIssuer
     * @return self
     */
    public function setDocIssuer($docIssuer)
    {
        $this->docIssuer = $docIssuer;
        return $this;
    }

    /**
     * Gets as deptCode
     *
     * 52.15. Код подразделения
     *
     * @return string
     */
    public function getDeptCode()
    {
        return $this->deptCode;
    }

    /**
     * Sets a new deptCode
     *
     * 52.15. Код подразделения
     *
     * @param string $deptCode
     * @return self
     */
    public function setDeptCode($deptCode)
    {
        $this->deptCode = $deptCode;
        return $this;
    }

    /**
     * Gets as date
     *
     * 52.16. Дата приобретения прав
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
     * 52.16. Дата приобретения прав
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

