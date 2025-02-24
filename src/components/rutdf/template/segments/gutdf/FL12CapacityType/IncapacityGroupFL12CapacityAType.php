<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing IncapacityGroupFL12CapacityAType
 */
class IncapacityGroupFL12CapacityAType extends GutdfSegment
{
    /**
     * 12.2. Дата вступления в силу решения суда о признании недееспособным или об ограничении дееспособности
     *
     * @var string $incapacityDate
     */
    private $incapacityDate = null;

    /**
     * 12.3. Номер решения суда
     *
     * @var string $incapacityDecisionNum
     */
    private $incapacityDecisionNum = null;

    /**
     * 12.4. Наименование суда
     *
     * @var string $incapacityCourtName
     */
    private $incapacityCourtName = null;

    /**
     * Gets as incapacityDate
     *
     * 12.2. Дата вступления в силу решения суда о признании недееспособным или об ограничении дееспособности
     *
     * @return string
     */
    public function getIncapacityDate()
    {
        return $this->incapacityDate;
    }

    /**
     * Sets a new incapacityDate
     *
     * 12.2. Дата вступления в силу решения суда о признании недееспособным или об ограничении дееспособности
     *
     * @param string $incapacityDate
     * @return self
     */
    public function setIncapacityDate($incapacityDate)
    {
        $this->incapacityDate = $incapacityDate;
        return $this;
    }

    /**
     * Gets as incapacityDecisionNum
     *
     * 12.3. Номер решения суда
     *
     * @return string
     */
    public function getIncapacityDecisionNum()
    {
        return $this->incapacityDecisionNum;
    }

    /**
     * Sets a new incapacityDecisionNum
     *
     * 12.3. Номер решения суда
     *
     * @param string $incapacityDecisionNum
     * @return self
     */
    public function setIncapacityDecisionNum($incapacityDecisionNum)
    {
        $this->incapacityDecisionNum = $incapacityDecisionNum;
        return $this;
    }

    /**
     * Gets as incapacityCourtName
     *
     * 12.4. Наименование суда
     *
     * @return string
     */
    public function getIncapacityCourtName()
    {
        return $this->incapacityCourtName;
    }

    /**
     * Sets a new incapacityCourtName
     *
     * 12.4. Наименование суда
     *
     * @param string $incapacityCourtName
     * @return self
     */
    public function setIncapacityCourtName($incapacityCourtName)
    {
        $this->incapacityCourtName = $incapacityCourtName;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'Incapacity_group_FL_12_Capacity';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Дата вступления в силу решения суда о признании недееспособным или об ограничении дееспособности' => '',
            'Номер решения суда' => 'Сведения о решении суда, который признал гражданина недееспособным или ограничил его дееспособность.',
            'Наименование суда' => 'Для иностранного суда заполняются на языке страны места нахождения данного суда. В скобках указывается перевод наименования суда на русский язык (при наличии перевода).Сведения о решении суда, который признал гражданина недееспособным или ограничил его дееспособность.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return '12.2–12.4';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $model = $this->sendData->getCapabilityReply();
        $this->incapacityDate = $this->formatDate($model->incapDecisionDt);
        $this->incapacityDecisionNum = $model->incapDecisionNum;
        $this->incapacityCourtName = $model->incapCourtName;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'incapacityDate',
            'incapacityDecisionNum',
            'incapacityCourtName',
        ];
    }
}

