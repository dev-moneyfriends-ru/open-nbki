<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent17Type
 *
 * Изменились сведения титульной части кредитной истории субъекта
 * XSD Type: UL_Event_1_7_Type
 */
class ULEvent17Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = EventDataType::OPERATION_CODE_B;

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
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_Event_1_7';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Изменились сведения титульной части кредитной истории субъекта';
    }

    protected function initAttributes()
    {
        //not attributes
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [];
    }
}

