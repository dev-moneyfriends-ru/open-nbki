<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent13Type
 *
 * Источник отказался от совершения сделки по обращению
 * XSD Type: UL_Event_1_3_Type
 */
class ULEvent13Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = EventDataType::OPERATION_CODE_B;

    /**
     * Блок 45. Сведения об обращении
     *
     * @var UL45ApplicationType $uL45Application
     */
    private $uL45Application = null;

    /**
     * Блок 47. Сведения об отказе источника от предложения совершить сделку
     *
     * @var UL47RejectType $uL47Reject
     */
    private $uL47Reject = null;

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
     * Блок 45. Сведения об обращении
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
     * Блок 45. Сведения об обращении
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
     * Gets as uL47Reject
     *
     * Блок 47. Сведения об отказе источника от предложения совершить сделку
     *
     * @return UL47RejectType
     */
    public function getUL47Reject()
    {
        return $this->uL47Reject;
    }

    /**
     * Sets a new uL47Reject
     *
     * Блок 47. Сведения об отказе источника от предложения совершить сделку
     *
     * @param UL47RejectType $uL47Reject
     * @return self
     */
    public function setUL47Reject(UL47RejectType $uL47Reject)
    {
        $this->uL47Reject = $uL47Reject;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_Event_1_3';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Источник отказался от совершения сделки по обращению';
    }

    protected function initAttributes()
    {
        $this->setUL45Application(new UL45ApplicationType($this->template));
        $this->setUL47Reject(new UL47RejectType($this->template));
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'uL45Application',
            'uL47Reject'
        ];
    }
}

