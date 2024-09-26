<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent110Type
 *
 * Изменились сведения о дееспособности субъекта
 * XSD Type: FL_Event_1_10_Type
 */
class FLEvent110Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 12. Сведения о дееспособности
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12Capacity
     */
    private $fL12Capacity = null;

    /**
     * Gets as operationCode
     *
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @return string
     */
    public function getOperationCode()
    {
        return $this->operationCode;
    }

    /**
     * Sets a new operationCode
     *
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @param string $operationCode
     * @return self
     */
    public function setOperationCode($operationCode)
    {
        $this->operationCode = $operationCode;
        return $this;
    }

    /**
     * Gets as fL12Capacity
     *
     * Блок 12. Сведения о дееспособности
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType
     */
    public function getFL12Capacity()
    {
        return $this->fL12Capacity;
    }

    /**
     * Sets a new fL12Capacity
     *
     * Блок 12. Сведения о дееспособности
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12Capacity
     * @return self
     */
    public function setFL12Capacity(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12Capacity)
    {
        $this->fL12Capacity = $fL12Capacity;
        return $this;
    }
}

