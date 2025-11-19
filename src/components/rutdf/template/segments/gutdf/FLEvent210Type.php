<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent210Type
 *
 * Источник прекратил передачу информации по обязательству
 * XSD Type: FL_Event_2_10_Type
 */
class FLEvent210Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = EventDataType::OPERATION_CODE_B;

    /**
     * Блок 17. Идентификатор сделки
     *
     * @var FL17DealUidType $fL17DealUid
     */
    private $fL17DealUid = null;

    /**
     * Блок 45. Сведения о прекращении передачи информации по обязательству
     *
     * @var FL45StopSendType $fL45StopSend
     */
    private $fL45StopSend = null;

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
     * Gets as fL17DealUid
     *
     * Блок 17. Идентификатор сделки
     *
     * @return FL17DealUidType
     */
    public function getFL17DealUid()
    {
        return $this->fL17DealUid;
    }

    /**
     * Sets a new fL17DealUid
     *
     * Блок 17. Идентификатор сделки
     *
     * @param FL17DealUidType $fL17DealUid
     * @return self
     */
    public function setFL17DealUid(FL17DealUidType $fL17DealUid)
    {
        $this->fL17DealUid = $fL17DealUid;
        return $this;
    }

    /**
     * Gets as fL45StopSend
     *
     * Блок 45. Сведения о прекращении передачи информации по обязательству
     *
     * @return FL45StopSendType
     */
    public function getFL45StopSend()
    {
        return $this->fL45StopSend;
    }

    /**
     * Sets a new fL45StopSend
     *
     * Блок 45. Сведения о прекращении передачи информации по обязательству
     *
     * @param FL45StopSendType $fL45StopSend
     * @return self
     */
    public function setFL45StopSend(FL45StopSendType $fL45StopSend)
    {
        $this->fL45StopSend = $fL45StopSend;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_Event_2_10';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Источник прекратил передачу информации по обязательству';
    }

    protected function initAttributes()
    {
        $this->setFL17DealUid(new FL17DealUidType($this->template));
        $this->setFL45StopSend(new FL45StopSendType($this->template));
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fl17DealUid',
            'fL45StopSend',
        ];
    }
}

