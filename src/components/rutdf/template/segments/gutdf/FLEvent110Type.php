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
    private $operationCode = EventDataType::OPERATION_CODE_B;

    /**
     * Блок 12. Сведения о дееспособности
     *
     * @var FL12CapacityType $fL12Capacity
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
     * @return FL12CapacityType
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
     * @param FL12CapacityType $fL12Capacity
     * @return self
     */
    public function setFL12Capacity(FL12CapacityType $fL12Capacity)
    {
        $this->fL12Capacity = $fL12Capacity;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_Event_1_10';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Изменились сведения о дееспособности субъекта';
    }

    protected function initAttributes()
    {
        $this->fL12Capacity = new FL12CapacityType($this->template);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fL12Capacity'
        ];
    }
}

