<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent11Type
 *
 * Субъект обратился к источнику с предложением совершить сделку
 * XSD Type: UL_Event_1_1_Type
 */
class ULEvent11Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = EventDataType::OPERATION_CODE_A;

    /**
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @var UL45ApplicationType $uL45Application
     */
    private $uL45Application = null;

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
     * Gets as uL45Application
     *
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @return UL45ApplicationType
     */
    public function getUL45Application()
    {
        return $this->uL45Application;
    }

    /**
     * Sets a new uL45Application
     *
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @param UL45ApplicationType $uL45Application
     * @return self
     */
    public function setUL45Application(UL45ApplicationType $uL45Application)
    {
        $this->uL45Application = $uL45Application;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_Event_1_1';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Субъект обратился к источнику с предложением совершить сделку';
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'uL45Application'
        ];
    }

    protected function initAttributes()
    {
        $this->uL45Application = new UL45ApplicationType($this->template);
    }
}

