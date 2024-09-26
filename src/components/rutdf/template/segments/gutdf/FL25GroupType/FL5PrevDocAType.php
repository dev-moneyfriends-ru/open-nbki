<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType;

/**
 * Class representing FL5PrevDocAType
 */
class FL5PrevDocAType
{
    /**
     * 5.1. Признак наличия документа = 0
     *
     * @var string $prevDocFact0
     */
    private $prevDocFact0 = null;

    /**
     * 5.1. Признак наличия документа = 1
     *
     * @var string $prevDocFact1
     */
    private $prevDocFact1 = null;

    /**
     * 5.2. Код страны гражданства по ОКСМ
     *
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * 5.3. Наименование иной страны
     *
     * @var string $countryOther
     */
    private $countryOther = null;

    /**
     * 5.4. Код документа
     *
     * @var string $docCode
     */
    private $docCode = null;

    /**
     * 5.5. Наименование иного документа
     *
     * @var string $docOtherName
     */
    private $docOtherName = null;

    /**
     * 5.6. Серия документа
     *
     * @var string $docSeries
     */
    private $docSeries = null;

    /**
     * 5.7. Номер документа
     *
     * @var string $docNum
     */
    private $docNum = null;

    /**
     * 5.8. Дата выдачи документа
     *
     * @var string $issueDate
     */
    private $issueDate = null;

    /**
     * 5.9. Кем выдан документ
     *
     * @var string $docIssuer
     */
    private $docIssuer = null;

    /**
     * 5.10. Код подразделения
     *
     * @var string $deptCode
     */
    private $deptCode = null;

    /**
     * 5.11. Дата окончания срока действия документа
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * Gets as prevDocFact0
     *
     * 5.1. Признак наличия документа = 0
     *
     * @return string
     */
    public function getPrevDocFact0()
    {
        return $this->prevDocFact0;
    }

    /**
     * Sets a new prevDocFact0
     *
     * 5.1. Признак наличия документа = 0
     *
     * @param string $prevDocFact0
     * @return self
     */
    public function setPrevDocFact0($prevDocFact0)
    {
        $this->prevDocFact0 = $prevDocFact0;
        return $this;
    }

    /**
     * Gets as prevDocFact1
     *
     * 5.1. Признак наличия документа = 1
     *
     * @return string
     */
    public function getPrevDocFact1()
    {
        return $this->prevDocFact1;
    }

    /**
     * Sets a new prevDocFact1
     *
     * 5.1. Признак наличия документа = 1
     *
     * @param string $prevDocFact1
     * @return self
     */
    public function setPrevDocFact1($prevDocFact1)
    {
        $this->prevDocFact1 = $prevDocFact1;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * 5.2. Код страны гражданства по ОКСМ
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * 5.2. Код страны гражданства по ОКСМ
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as countryOther
     *
     * 5.3. Наименование иной страны
     *
     * @return string
     */
    public function getCountryOther()
    {
        return $this->countryOther;
    }

    /**
     * Sets a new countryOther
     *
     * 5.3. Наименование иной страны
     *
     * @param string $countryOther
     * @return self
     */
    public function setCountryOther($countryOther)
    {
        $this->countryOther = $countryOther;
        return $this;
    }

    /**
     * Gets as docCode
     *
     * 5.4. Код документа
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
     * 5.4. Код документа
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
     * 5.5. Наименование иного документа
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
     * 5.5. Наименование иного документа
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
     * 5.6. Серия документа
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
     * 5.6. Серия документа
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
     * 5.7. Номер документа
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
     * 5.7. Номер документа
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
     * 5.8. Дата выдачи документа
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
     * 5.8. Дата выдачи документа
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
     * 5.9. Кем выдан документ
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
     * 5.9. Кем выдан документ
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
     * 5.10. Код подразделения
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
     * 5.10. Код подразделения
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
     * Gets as endDate
     *
     * 5.11. Дата окончания срока действия документа
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
     * 5.11. Дата окончания срока действия документа
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(?\DateTime $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }
}

