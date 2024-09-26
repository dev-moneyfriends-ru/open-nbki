<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL47UL37PersonSourceType
 *
 * Блок 47. Сведения об источнике – физическом лице
 * XSD Type: FL_47_UL_37_PersonSource_Type
 */
class FL47UL37PersonSourceType
{
    /**
     * 47.1., 37.1. Фамилия
     *
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * 47.2., 37.2. Имя
     *
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * 47.3., 37.3. Отчество
     *
     * @var string $middleName
     */
    private $middleName = null;

    /**
     * 47.4., 37.4. Дата рождения
     *
     * @var string $birthDate
     */
    private $birthDate = null;

    /**
     * 47.5., 37.5. Место рождения
     *
     * @var string $birthPlace
     */
    private $birthPlace = null;

    /**
     * 47.6., 37.6. Код документа
     *
     * @var string $sourceDocCode
     */
    private $sourceDocCode = null;

    /**
     * 47.7., 37.7. Наименование иного документа
     *
     * @var string $sourceDocName
     */
    private $sourceDocName = null;

    /**
     * 47.8., 37.8. Серия документа
     *
     * @var string $sourceDocSeries
     */
    private $sourceDocSeries = null;

    /**
     * 47.9., 37.9. Номер документа
     *
     * @var string $sourceDocNum
     */
    private $sourceDocNum = null;

    /**
     * 47.10., 37.10. Дата выдачи документа
     *
     * @var string $sourceDocDate
     */
    private $sourceDocDate = null;

    /**
     * 47.11., 37.11. Кем выдан документ
     *
     * @var string $sourceDocDiv
     */
    private $sourceDocDiv = null;

    /**
     * 47.12., 37.12. Код подразделения
     *
     * @var string $sourceDocDivCode
     */
    private $sourceDocDivCode = null;

    /**
     * 47.13., 37.13. Регистрационный номер
     *
     * @var string $sourceRegNum
     */
    private $sourceRegNum = null;

    /**
     * 47.14., 37.14. Дата формирования кредитной информации
     *
     * @var \DateTime $sourceCreditInfoDate
     */
    private $sourceCreditInfoDate = null;

    /**
     * Gets as lastName
     *
     * 47.1., 37.1. Фамилия
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
     * 47.1., 37.1. Фамилия
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
     * 47.2., 37.2. Имя
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
     * 47.2., 37.2. Имя
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
     * 47.3., 37.3. Отчество
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
     * 47.3., 37.3. Отчество
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
     * 47.4., 37.4. Дата рождения
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
     * 47.4., 37.4. Дата рождения
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
     * 47.5., 37.5. Место рождения
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
     * 47.5., 37.5. Место рождения
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
     * Gets as sourceDocCode
     *
     * 47.6., 37.6. Код документа
     *
     * @return string
     */
    public function getSourceDocCode()
    {
        return $this->sourceDocCode;
    }

    /**
     * Sets a new sourceDocCode
     *
     * 47.6., 37.6. Код документа
     *
     * @param string $sourceDocCode
     * @return self
     */
    public function setSourceDocCode($sourceDocCode)
    {
        $this->sourceDocCode = $sourceDocCode;
        return $this;
    }

    /**
     * Gets as sourceDocName
     *
     * 47.7., 37.7. Наименование иного документа
     *
     * @return string
     */
    public function getSourceDocName()
    {
        return $this->sourceDocName;
    }

    /**
     * Sets a new sourceDocName
     *
     * 47.7., 37.7. Наименование иного документа
     *
     * @param string $sourceDocName
     * @return self
     */
    public function setSourceDocName($sourceDocName)
    {
        $this->sourceDocName = $sourceDocName;
        return $this;
    }

    /**
     * Gets as sourceDocSeries
     *
     * 47.8., 37.8. Серия документа
     *
     * @return string
     */
    public function getSourceDocSeries()
    {
        return $this->sourceDocSeries;
    }

    /**
     * Sets a new sourceDocSeries
     *
     * 47.8., 37.8. Серия документа
     *
     * @param string $sourceDocSeries
     * @return self
     */
    public function setSourceDocSeries($sourceDocSeries)
    {
        $this->sourceDocSeries = $sourceDocSeries;
        return $this;
    }

    /**
     * Gets as sourceDocNum
     *
     * 47.9., 37.9. Номер документа
     *
     * @return string
     */
    public function getSourceDocNum()
    {
        return $this->sourceDocNum;
    }

    /**
     * Sets a new sourceDocNum
     *
     * 47.9., 37.9. Номер документа
     *
     * @param string $sourceDocNum
     * @return self
     */
    public function setSourceDocNum($sourceDocNum)
    {
        $this->sourceDocNum = $sourceDocNum;
        return $this;
    }

    /**
     * Gets as sourceDocDate
     *
     * 47.10., 37.10. Дата выдачи документа
     *
     * @return string
     */
    public function getSourceDocDate()
    {
        return $this->sourceDocDate;
    }

    /**
     * Sets a new sourceDocDate
     *
     * 47.10., 37.10. Дата выдачи документа
     *
     * @param string $sourceDocDate
     * @return self
     */
    public function setSourceDocDate($sourceDocDate)
    {
        $this->sourceDocDate = $sourceDocDate;
        return $this;
    }

    /**
     * Gets as sourceDocDiv
     *
     * 47.11., 37.11. Кем выдан документ
     *
     * @return string
     */
    public function getSourceDocDiv()
    {
        return $this->sourceDocDiv;
    }

    /**
     * Sets a new sourceDocDiv
     *
     * 47.11., 37.11. Кем выдан документ
     *
     * @param string $sourceDocDiv
     * @return self
     */
    public function setSourceDocDiv($sourceDocDiv)
    {
        $this->sourceDocDiv = $sourceDocDiv;
        return $this;
    }

    /**
     * Gets as sourceDocDivCode
     *
     * 47.12., 37.12. Код подразделения
     *
     * @return string
     */
    public function getSourceDocDivCode()
    {
        return $this->sourceDocDivCode;
    }

    /**
     * Sets a new sourceDocDivCode
     *
     * 47.12., 37.12. Код подразделения
     *
     * @param string $sourceDocDivCode
     * @return self
     */
    public function setSourceDocDivCode($sourceDocDivCode)
    {
        $this->sourceDocDivCode = $sourceDocDivCode;
        return $this;
    }

    /**
     * Gets as sourceRegNum
     *
     * 47.13., 37.13. Регистрационный номер
     *
     * @return string
     */
    public function getSourceRegNum()
    {
        return $this->sourceRegNum;
    }

    /**
     * Sets a new sourceRegNum
     *
     * 47.13., 37.13. Регистрационный номер
     *
     * @param string $sourceRegNum
     * @return self
     */
    public function setSourceRegNum($sourceRegNum)
    {
        $this->sourceRegNum = $sourceRegNum;
        return $this;
    }

    /**
     * Gets as sourceCreditInfoDate
     *
     * 47.14., 37.14. Дата формирования кредитной информации
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
     * 47.14., 37.14. Дата формирования кредитной информации
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

