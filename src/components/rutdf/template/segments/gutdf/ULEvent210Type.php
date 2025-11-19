<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent210Type
 *
 * Источник прекратил передачу информации по обязательству
 * XSD Type: UL_Event_2_10_Type
 */
class ULEvent210Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = EventDataType::OPERATION_CODE_B;

    /**
     * Блок 10. Идентификатор сделки
     *
     * @var UL10DealUidType $uL10DealUid
     */
    private $uL10DealUid = null;

    /**
     * Блок 35. Сведения о прекращении передачи информации по обязательству
     *
     * @var UL35StopSendType $uL35StopSend
     */
    private $uL35StopSend = null;

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
     * Gets as uL10DealUid
     *
     * Блок 10. Идентификатор сделки
     *
     * @return UL10DealUidType
     */
    public function getUL10DealUid()
    {
        return $this->uL10DealUid;
    }

    /**
     * Sets a new uL10DealUid
     *
     * Блок 10. Идентификатор сделки
     *
     * @param UL10DealUidType $uL10DealUid
     * @return self
     */
    public function setUL10DealUid(UL10DealUidType $uL10DealUid)
    {
        $this->uL10DealUid = $uL10DealUid;
        return $this;
    }

    /**
     * Gets as uL35StopSend
     *
     * Блок 35. Сведения о прекращении передачи информации по обязательству
     *
     * @return UL35StopSendType
     */
    public function getUL35StopSend()
    {
        return $this->uL35StopSend;
    }

    /**
     * Sets a new uL35StopSend
     *
     * Блок 35. Сведения о прекращении передачи информации по обязательству
     *
     * @param UL35StopSendType $uL35StopSend
     * @return self
     */
    public function setUL35StopSend(UL35StopSendType $uL35StopSend)
    {
        $this->uL35StopSend = $uL35StopSend;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_Event_2_10';
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
        $this->setUL10DealUid(new UL10DealUidType($this->template));
        $this->setUL35StopSend(new UL35StopSendType($this->template));
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'uL10DealUid',
            'uL35StopSend',
        ];
    }
}

