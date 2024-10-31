<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType\IncapacityGroupFL12CapacityAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType\LegalCapacityGroupFL12CapacityAType;

/**
 * Class representing FL12CapacityType
 *
 * Блок 12. Сведения о дееспособности
 * XSD Type: FL_12_Capacity_Type
 */
class FL12CapacityType extends GutdfSegment
{
    /**
     * 12.1. Код дееспособности
     *
     * @var string $code
     */
    private $code = null;

    /**
     * @var IncapacityGroupFL12CapacityAType $incapacityGroupFL12Capacity
     */
    private $incapacityGroupFL12Capacity = null;

    /**
     * @var LegalCapacityGroupFL12CapacityAType $legalCapacityGroupFL12Capacity
     */
    private $legalCapacityGroupFL12Capacity = null;

    /**
     * Gets as code
     *
     * 12.1. Код дееспособности
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 12.1. Код дееспособности
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as incapacityGroupFL12Capacity
     *
     * @return IncapacityGroupFL12CapacityAType
     */
    public function getIncapacityGroupFL12Capacity()
    {
        return $this->incapacityGroupFL12Capacity;
    }

    /**
     * Sets a new incapacityGroupFL12Capacity
     *
     * @param IncapacityGroupFL12CapacityAType $incapacityGroupFL12Capacity
     * @return self
     */
    public function setIncapacityGroupFL12Capacity(?IncapacityGroupFL12CapacityAType $incapacityGroupFL12Capacity = null)
    {
        $this->incapacityGroupFL12Capacity = $incapacityGroupFL12Capacity;
        return $this;
    }

    /**
     * Gets as legalCapacityGroupFL12Capacity
     *
     * @return LegalCapacityGroupFL12CapacityAType
     */
    public function getLegalCapacityGroupFL12Capacity()
    {
        return $this->legalCapacityGroupFL12Capacity;
    }

    /**
     * Sets a new legalCapacityGroupFL12Capacity
     *
     * @param LegalCapacityGroupFL12CapacityAType $legalCapacityGroupFL12Capacity
     * @return self
     */
    public function setLegalCapacityGroupFL12Capacity(?LegalCapacityGroupFL12CapacityAType $legalCapacityGroupFL12Capacity = null)
    {
        $this->legalCapacityGroupFL12Capacity = $legalCapacityGroupFL12Capacity;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_12_Capacity';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Код дееспособности' => 'Заполняется по справочнику 1.3. Если указан код «1» или код «2», иные показатели блока 12 не заполняются; если указан код «3» или код «4», заполняются показатели 12.2–12.4; если указан код «5», заполняются показатели 12.5–12.7.'
        ];
    }

    public function getFields(): array
    {
        return [
            'code' => $this->code,
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 12. Сведения о дееспособности';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $model = $this->template->sendData->getCapabilityReply();
        $this->code = $model->capability;
        if ($this->code === 1 || $this->code === 2) {
            return;
        }
        if ($this->code === 3 || $this->code === 4) {
            $this->incapacityGroupFL12Capacity = new IncapacityGroupFL12CapacityAType($this->template);
        }
        if ($this->code === 5) {
            $this->incapacityGroupFL12Capacity = new LegalCapacityGroupFL12CapacityAType($this->template);
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'code',
            'incapacityGroupFL12Capacity',
            'legalCapacityGroupFL12Capacity',
        ];
    }
}

