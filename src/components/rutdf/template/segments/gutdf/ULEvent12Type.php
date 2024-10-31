<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent12Type
 *
 * Источник одобрил обращение (направил ему оферту) или изменились сведения об обращении
 * XSD Type: UL_Event_1_2_Type
 */
class ULEvent12Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = EventDataType::OPERATION_CODE_B;

    /**
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL45ApplicationType $uL45Application
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL45ApplicationType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL45ApplicationType $uL45Application
     * @return self
     */
    public function setUL45Application(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL45ApplicationType $uL45Application)
    {
        $this->uL45Application = $uL45Application;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_Event_1_2';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Источник одобрил обращение (направил ему оферту) или изменились сведения об обращении';
    }

    protected function initAttributes()
    {
        $this->uL45Application = new UL45ApplicationType($this->template);
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
}

