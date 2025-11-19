<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent211Type
 *
 * Права по обязательству полностью перешли к другому лицу
 * XSD Type: UL_Event_2_11_Type
 */
class ULEvent211Type extends EventDataType
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
     * Блок 41. Сведения о приобретателе прав – юридическом лице
     *
     * @var UL41OrgAcquirerType $uL41OrgAcquirer
     */
    private $uL41OrgAcquirer = null;

    /**
     * Блок 42. Сведения о приобретателе прав – физическом лице
     *
     * @var UL42PersonAcquirerType $uL42PersonAcquirer
     */
    private $uL42PersonAcquirer = null;

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
     * Gets as uL41OrgAcquirer
     *
     * Блок 41. Сведения о приобретателе прав – юридическом лице
     *
     * @return UL41OrgAcquirerType
     */
    public function getUL41OrgAcquirer()
    {
        return $this->uL41OrgAcquirer;
    }

    /**
     * Sets a new uL41OrgAcquirer
     *
     * Блок 41. Сведения о приобретателе прав – юридическом лице
     *
     * @param UL41OrgAcquirerType $uL41OrgAcquirer
     * @return self
     */
    public function setUL41OrgAcquirer(?UL41OrgAcquirerType $uL41OrgAcquirer = null)
    {
        $this->uL41OrgAcquirer = $uL41OrgAcquirer;
        return $this;
    }

    /**
     * Gets as uL42PersonAcquirer
     *
     * Блок 42. Сведения о приобретателе прав – физическом лице
     *
     * @return UL42PersonAcquirerType
     */
    public function getUL42PersonAcquirer()
    {
        return $this->uL42PersonAcquirer;
    }

    /**
     * Sets a new uL42PersonAcquirer
     *
     * Блок 42. Сведения о приобретателе прав – физическом лице
     *
     * @param UL42PersonAcquirerType $uL42PersonAcquirer
     * @return self
     */
    public function setUL42PersonAcquirer(?UL42PersonAcquirerType $uL42PersonAcquirer = null)
    {
        $this->uL42PersonAcquirer = $uL42PersonAcquirer;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_Event_2_11';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Права по обязательству полностью перешли к другому лицу';
    }

    protected function initAttributes()
    {
        $this->setUL10DealUid(new UL10DealUidType($this->template));
        $this->setUL35StopSend(new UL35StopSendType($this->template));
        if($this->sendData->getAccountReplyRUTDF()->getAcquirerLegal()){
            $this->setUL41OrgAcquirer(new UL41OrgAcquirerType($this->template));
        }
        if($this->sendData->getAccountReplyRUTDF()->getAcquirerIndivid()){
            $this->setUL42PersonAcquirer(new UL42PersonAcquirerType($this->template));
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'uL10DealUid',
            'uL35StopSend',
            'uL41OrgAcquirer',
            'uL42PersonAcquirer',
        ];
    }
}

