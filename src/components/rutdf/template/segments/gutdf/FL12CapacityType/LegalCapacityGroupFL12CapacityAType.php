<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing LegalCapacityGroupFL12CapacityAType
 */
class LegalCapacityGroupFL12CapacityAType extends GutdfSegment
{
    /**
     * 12.5. Дата вступления в силу решения суда о признании дееспособным или об отмене ограничения дееспособности
     *
     * @var string $legalCapacityDate
     */
    private $legalCapacityDate = null;

    /**
     * 12.6. Номер решения суда
     *
     * @var string $legalCapacityDecisionNum
     */
    private $legalCapacityDecisionNum = null;

    /**
     * 12.7. Наименование суда
     *
     * @var string $legalCapacityCourtName
     */
    private $legalCapacityCourtName = null;

    /**
     * Gets as legalCapacityDate
     *
     * 12.5. Дата вступления в силу решения суда о признании дееспособным или об отмене ограничения дееспособности
     *
     * @return string
     */
    public function getLegalCapacityDate()
    {
        return $this->legalCapacityDate;
    }

    /**
     * Sets a new legalCapacityDate
     *
     * 12.5. Дата вступления в силу решения суда о признании дееспособным или об отмене ограничения дееспособности
     *
     * @param string $legalCapacityDate
     * @return self
     */
    public function setLegalCapacityDate($legalCapacityDate)
    {
        $this->legalCapacityDate = $legalCapacityDate;
        return $this;
    }

    /**
     * Gets as legalCapacityDecisionNum
     *
     * 12.6. Номер решения суда
     *
     * @return string
     */
    public function getLegalCapacityDecisionNum()
    {
        return $this->legalCapacityDecisionNum;
    }

    /**
     * Sets a new legalCapacityDecisionNum
     *
     * 12.6. Номер решения суда
     *
     * @param string $legalCapacityDecisionNum
     * @return self
     */
    public function setLegalCapacityDecisionNum($legalCapacityDecisionNum)
    {
        $this->legalCapacityDecisionNum = $legalCapacityDecisionNum;
        return $this;
    }

    /**
     * Gets as legalCapacityCourtName
     *
     * 12.7. Наименование суда
     *
     * @return string
     */
    public function getLegalCapacityCourtName()
    {
        return $this->legalCapacityCourtName;
    }

    /**
     * Sets a new legalCapacityCourtName
     *
     * 12.7. Наименование суда
     *
     * @param string $legalCapacityCourtName
     * @return self
     */
    public function setLegalCapacityCourtName($legalCapacityCourtName)
    {
        $this->legalCapacityCourtName = $legalCapacityCourtName;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'LegalCapacity_group_FL_12_Capacity';
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
        return '12.5–12.7';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $model = $this->template->sendData->getCapabilityReply();
        $this->legalCapacityDate = $this->formatDate($model->capDecisionDt);
        $this->legalCapacityDecisionNum = $model->capDecisionNum;
        $this->legalCapacityCourtName = $model->capCourtName;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'legalCapacityDate',
            'legalCapacityDecisionNum',
            'legalCapacityCourtName',
        ];
    }
}

