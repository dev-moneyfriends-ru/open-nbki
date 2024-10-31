<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing FL4DocAType
 */
class FL4DocAType extends GutdfSegment
{
    /**
     * 4.1. Код страны гражданства по ОКСМ
     *
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * 4.2. Наименование иной страны
     *
     * @var string $countryOther
     */
    private $countryOther = null;

    /**
     * 4.3. Код документа
     *
     * @var string $docCode
     */
    private $docCode = null;

    /**
     * 4.4. Наименование иного документа
     *
     * @var string $docOtherName
     */
    private $docOtherName = null;

    /**
     * 4.5. Серия документа
     *
     * @var string $docSeries
     */
    private $docSeries = null;

    /**
     * 4.6. Номер документа
     *
     * @var string $docNum
     */
    private $docNum = null;

    /**
     * 4.7. Дата выдачи документа
     *
     * @var string $issueDate
     */
    private $issueDate = null;

    /**
     * 4.8. Кем выдан документ
     *
     * @var string $docIssuer
     */
    private $docIssuer = null;

    /**
     * 4.9. Код подразделения
     *
     * @var string $deptCode
     */
    private $deptCode = null;

    /**
     * 4.10. Дата окончания срока действия документа
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * 4.11. Признак иностранного гражданина
     *
     * @var int $foreignerCode
     */
    private $foreignerCode = null;

    /**
     * Gets as countryCode
     *
     * 4.1. Код страны гражданства по ОКСМ
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
     * 4.1. Код страны гражданства по ОКСМ
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
     * 4.2. Наименование иной страны
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
     * 4.2. Наименование иной страны
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
     * 4.3. Код документа
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
     * 4.3. Код документа
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
     * 4.4. Наименование иного документа
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
     * 4.4. Наименование иного документа
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
     * 4.5. Серия документа
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
     * 4.5. Серия документа
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
     * 4.6. Номер документа
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
     * 4.6. Номер документа
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
     * 4.7. Дата выдачи документа
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
     * 4.7. Дата выдачи документа
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
     * 4.8. Кем выдан документ
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
     * 4.8. Кем выдан документ
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
     * 4.9. Код подразделения
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
     * 4.9. Код подразделения
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
     * 4.10. Дата окончания срока действия документа
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
     * 4.10. Дата окончания срока действия документа
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
     * Gets as foreignerCode
     *
     * 4.11. Признак иностранного гражданина
     *
     * @return int
     */
    public function getForeignerCode()
    {
        return $this->foreignerCode;
    }

    /**
     * Sets a new foreignerCode
     *
     * 4.11. Признак иностранного гражданина
     *
     * @param int $foreignerCode
     * @return self
     */
    public function setForeignerCode($foreignerCode)
    {
        $this->foreignerCode = $foreignerCode;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_4_Doc';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            "Код страны гражданства по ОКСМ" => 'Цифровой код страны согласно Общероссийскому классификатору стран мира (далее – ОКСМ, см. справочник A1). При отсутствии страны в ОКСМ указывается «999». При отсутствии у субъекта гражданства указывается «999».',
            "Наименование иной страны" => 'Заполняется, если по показателю «Код страны по ОКСМ» указано «999». При отсутствии у субъекта гражданства указывается «ГРАЖДАНСТВО ОТСУТСТВУЕТ».',
            "Код документа" => 'Заполняется по справочнику 1.1',
            "Наименование иного документа" => 'Заполняется, если по показателю «Код документа» указано «999».',
            "Серия документа" => '',
            "Номер документа" => '',
            "Дата выдачи документа" => '',
            "Кем выдан документ" => 'Наименование органа, который выдал документ, удостоверяющий личность. Может не заполняться, если заполнен показатель «Код подразделения» в блоке показателей, содержащем этот показатель.',
            "Код подразделения" => 'Заполняется только для паспорта гражданина Российской Федерации.',
            "Дата окончания срока действия документа" => 'Заполняется при наличии такого срока в документе.',
            "Признак иностранного гражданина" => 'Заполняется по справочнику 1.8',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 4. Документ, удостоверяющий личность';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $idReply = $this->template->sendData->getIdReply();
        if(empty($idReply)){
            return;
        }

        $this->countryCode = $idReply->oksm;
        $this->countryOther = $idReply->otherCountry;
        $this->docCode = $idReply->idType;
        $this->docOtherName = $idReply->otherId;
        $this->docSeries = $idReply->seriesNumber;
        $this->docNum = $idReply->idNum;
        $this->issueDate = $this->formatDate($idReply->issueDate);
        $this->docIssuer = $idReply->issueAuthority;
        $this->deptCode = $idReply->divCode;
        $this->endDate = $this->formatDate($idReply->validTo);
        $this->foreignerCode = $idReply->foreignerCode;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'countryCode',
            'countryOther',
            'docCode',
            'docOtherName',
            'docSeries',
            'docNum',
            'issueDate',
            'docIssuer',
            'deptCode',
            'endDate',
            'foreignerCode',
        ];
    }
}

