<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL12CapacityType
 *
 * Блок 12. Сведения о дееспособности
 * XSD Type: FL_12_Capacity_Type
 */
class FL12CapacityType
{
    /**
     * 12.1. Код дееспособности
     *
     * @var string $code
     */
    private $code = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType\IncapacityGroupFL12CapacityAType $incapacityGroupFL12Capacity
     */
    private $incapacityGroupFL12Capacity = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType\LegalCapacityGroupFL12CapacityAType $legalCapacityGroupFL12Capacity
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType\IncapacityGroupFL12CapacityAType
     */
    public function getIncapacityGroupFL12Capacity()
    {
        return $this->incapacityGroupFL12Capacity;
    }

    /**
     * Sets a new incapacityGroupFL12Capacity
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType\IncapacityGroupFL12CapacityAType $incapacityGroupFL12Capacity
     * @return self
     */
    public function setIncapacityGroupFL12Capacity(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType\IncapacityGroupFL12CapacityAType $incapacityGroupFL12Capacity = null)
    {
        $this->incapacityGroupFL12Capacity = $incapacityGroupFL12Capacity;
        return $this;
    }

    /**
     * Gets as legalCapacityGroupFL12Capacity
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType\LegalCapacityGroupFL12CapacityAType
     */
    public function getLegalCapacityGroupFL12Capacity()
    {
        return $this->legalCapacityGroupFL12Capacity;
    }

    /**
     * Sets a new legalCapacityGroupFL12Capacity
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType\LegalCapacityGroupFL12CapacityAType $legalCapacityGroupFL12Capacity
     * @return self
     */
    public function setLegalCapacityGroupFL12Capacity(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType\LegalCapacityGroupFL12CapacityAType $legalCapacityGroupFL12Capacity = null)
    {
        $this->legalCapacityGroupFL12Capacity = $legalCapacityGroupFL12Capacity;
        return $this;
    }
}

