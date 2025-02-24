<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing FL35InsuranceAType
 */
class FL35InsuranceAType extends GutdfSegment
{
    /**
     * 35.1. Признак наличия страхования = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 35.1. Признак наличия страхования = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 35.4. Признак наличия франшизы = 0
     *
     * @var string $franchiseExist0
     */
    private $franchiseExist0 = null;

    /**
     * 35.4. Признак наличия франшизы = 1
     *
     * @var string $franchiseExist1
     */
    private $franchiseExist1 = null;

    /**
     * 35.5. Дата начала действия страхования
     *
     * @var string $startDate
     */
    private $startDate = null;

    /**
     * 35.6. Дата окончания действия страхования согласно договору
     *
     * @var string $insuranceEndDate
     */
    private $insuranceEndDate = null;

    /**
     * 35.7. Дата фактического прекращения страхования
     *
     * @var \DateTime $insuranceFactEndDate
     */
    private $insuranceFactEndDate = null;

    /**
     * 35.8. Код причины прекращения страхования
     *
     * @var int $endCode
     */
    private $endCode = null;

    /**
     * Gets as exist0
     *
     * 35.1. Признак наличия страхования = 0
     *
     * @return string
     */
    public function getExist0()
    {
        return $this->exist0;
    }

    /**
     * Sets a new exist0
     *
     * 35.1. Признак наличия страхования = 0
     *
     * @param string $exist0
     * @return self
     */
    public function setExist0($exist0)
    {
        $this->exist0 = $exist0;
        return $this;
    }

    /**
     * Gets as exist1
     *
     * 35.1. Признак наличия страхования = 1
     *
     * @return string
     */
    public function getExist1()
    {
        return $this->exist1;
    }

    /**
     * Sets a new exist1
     *
     * 35.1. Признак наличия страхования = 1
     *
     * @param string $exist1
     * @return self
     */
    public function setExist1($exist1)
    {
        $this->exist1 = $exist1;
        return $this;
    }

    /**
     * Gets as franchiseExist0
     *
     * 35.4. Признак наличия франшизы = 0
     *
     * @return string
     */
    public function getFranchiseExist0()
    {
        return $this->franchiseExist0;
    }

    /**
     * Sets a new franchiseExist0
     *
     * 35.4. Признак наличия франшизы = 0
     *
     * @param string $franchiseExist0
     * @return self
     */
    public function setFranchiseExist0($franchiseExist0)
    {
        $this->franchiseExist0 = $franchiseExist0;
        return $this;
    }

    /**
     * Gets as franchiseExist1
     *
     * 35.4. Признак наличия франшизы = 1
     *
     * @return string
     */
    public function getFranchiseExist1()
    {
        return $this->franchiseExist1;
    }

    /**
     * Sets a new franchiseExist1
     *
     * 35.4. Признак наличия франшизы = 1
     *
     * @param string $franchiseExist1
     * @return self
     */
    public function setFranchiseExist1($franchiseExist1)
    {
        $this->franchiseExist1 = $franchiseExist1;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * 35.5. Дата начала действия страхования
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * 35.5. Дата начала действия страхования
     *
     * @param string $startDate
     * @return self
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as insuranceEndDate
     *
     * 35.6. Дата окончания действия страхования согласно договору
     *
     * @return string
     */
    public function getInsuranceEndDate()
    {
        return $this->insuranceEndDate;
    }

    /**
     * Sets a new insuranceEndDate
     *
     * 35.6. Дата окончания действия страхования согласно договору
     *
     * @param string $insuranceEndDate
     * @return self
     */
    public function setInsuranceEndDate($insuranceEndDate)
    {
        $this->insuranceEndDate = $insuranceEndDate;
        return $this;
    }

    /**
     * Gets as insuranceFactEndDate
     *
     * 35.7. Дата фактического прекращения страхования
     *
     * @return \DateTime
     */
    public function getInsuranceFactEndDate()
    {
        return $this->insuranceFactEndDate;
    }

    /**
     * Sets a new insuranceFactEndDate
     *
     * 35.7. Дата фактического прекращения страхования
     *
     * @param \DateTime $insuranceFactEndDate
     * @return self
     */
    public function setInsuranceFactEndDate(?\DateTime $insuranceFactEndDate = null)
    {
        $this->insuranceFactEndDate = $insuranceFactEndDate;
        return $this;
    }

    /**
     * Gets as endCode
     *
     * 35.8. Код причины прекращения страхования
     *
     * @return int
     */
    public function getEndCode()
    {
        return $this->endCode;
    }

    /**
     * Sets a new endCode
     *
     * 35.8. Код причины прекращения страхования
     *
     * @param int $endCode
     * @return self
     */
    public function setEndCode($endCode)
    {
        $this->endCode = $endCode;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_35_Insurance';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак наличия страхования 0' => 'Код «1» – риск утраты стоимости предмета залога застрахован в пользу источника или субъекта; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока не заполняются.',
            'Признак наличия страхования 1' => 'Код «1» – риск утраты стоимости предмета залога застрахован в пользу источника или субъекта; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока не заполняются.',
            'Признак наличия франшизы 0' => 'Код «1» – в договоре страхования имеется условие об условной или безусловной франшизе; код «0» – обстоятельство кода «1» отсутствует.',
            'Признак наличия франшизы 1' => 'Код «1» – в договоре страхования имеется условие об условной или безусловной франшизе; код «0» – обстоятельство кода «1» отсутствует.',
            'Дата начала действия страхования' => 'Дата начала действия страхования, обусловленного договором страхования.',
            'Дата окончания действия страхования согласно договору' => 'Дата планового окончания действия страхования, обусловленного договором страхования.',
            'Дата фактического прекращения страхования' => 'Дата фактического окончания действия страхования, обусловленного договором страхования.',
            'Код причины прекращения страхования' => 'Заполняется по справочнику 4.2.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 35. Сведения о страховании предмета залога';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        if($this->idx === null){
            $this->exist0 = '';
            $this->exist1 = null;
            return;
        }

        $collatInsured = $this->sendData->getAccountReplyRUTDF()->getCollatInsured()[$this->idx];

        $this->exist0 = null;
        $this->exist1 = '';

        if($collatInsured->hasFranchise){
            $this->franchiseExist1 = '';
            $this->franchiseExist0 = null;
        }else{
            $this->franchiseExist0 = '';
            $this->franchiseExist1 = null;
        }

        $this->startDate = $this->formatDate($collatInsured->insurStartDt);
        $this->insuranceEndDate = $this->formatDate($collatInsured->insurEndDt);
        $this->insuranceFactEndDate = $this->formatDate($collatInsured->insurFactEndDt);
        $this->endCode = $collatInsured->insurEndReason;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'exist_0' => 'exist0',
            'exist_1' => 'exist1',
            'franchiseExist_0' => 'franchiseExist0',
            'franchiseExist_1' => 'franchiseExist1',
            'startDate',
            'insuranceEndDate',
            'insuranceFactEndDate',
            'endCode',
        ];
    }
}

