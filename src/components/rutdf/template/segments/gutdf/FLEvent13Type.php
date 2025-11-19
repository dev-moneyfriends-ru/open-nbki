<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent13Type
 *
 * Источник отказался от совершения сделки по обращению субъекта
 * XSD Type: FL_Event_1_3_Type
 */
class FLEvent13Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = EventDataType::OPERATION_CODE_B;

    /**
     * Блок 55. Сведения об обращении
     *
     * @var FL55ApplicationType $fL55Application
     */
    private $fL55Application = null;

    /**
     * Блок 57. Сведения об отказе источника от предложения совершить сделку
     *
     * @var FL57RejectType $fL57Reject
     */
    private $fL57Reject = null;

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
     * Gets as fL55Application
     *
     * Блок 55. Сведения об обращении
     *
     * @return FL55ApplicationType
     */
    public function getFL55Application()
    {
        return $this->fL55Application;
    }

    /**
     * Sets a new fL55Application
     *
     * Блок 55. Сведения об обращении
     *
     * @param FL55ApplicationType $fL55Application
     * @return self
     */
    public function setFL55Application(FL55ApplicationType $fL55Application)
    {
        $this->fL55Application = $fL55Application;
        return $this;
    }

    /**
     * Gets as fL57Reject
     *
     * Блок 57. Сведения об отказе источника от предложения совершить сделку
     *
     * @return FL57RejectType
     */
    public function getFL57Reject()
    {
        return $this->fL57Reject;
    }

    /**
     * Sets a new fL57Reject
     *
     * Блок 57. Сведения об отказе источника от предложения совершить сделку
     *
     * @param FL57RejectType $fL57Reject
     * @return self
     */
    public function setFL57Reject(FL57RejectType $fL57Reject)
    {
        $this->fL57Reject = $fL57Reject;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_Event_1_3';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Источник отказался от совершения сделки по обращению субъекта';
    }

    protected function initAttributes()
    {
        $this->setFL55Application(new FL55ApplicationType($this->template));
        $this->setFL57Reject(new FL57RejectType($this->template));
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fL55Application',
            'fL57Reject',
        ];
    }
}

