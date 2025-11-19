<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent211Type
 *
 * Права по обязательству полностью перешли к другому лицу
 * XSD Type: FL_Event_2_11_Type
 */
class FLEvent211Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = self::OPERATION_CODE_B;

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
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @var FL51OrgAcquirerType $fL51OrgAcquirer
     */
    private $fL51OrgAcquirer = null;

    /**
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @var FL52PersonAcquirerType $fL52PersonAcquirer
     */
    private $fL52PersonAcquirer = null;

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
     * Gets as fL51OrgAcquirer
     *
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @return FL51OrgAcquirerType
     */
    public function getFL51OrgAcquirer()
    {
        return $this->fL51OrgAcquirer;
    }

    /**
     * Sets a new fL51OrgAcquirer
     *
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @param FL51OrgAcquirerType $fL51OrgAcquirer
     * @return self
     */
    public function setFL51OrgAcquirer(?FL51OrgAcquirerType $fL51OrgAcquirer = null)
    {
        $this->fL51OrgAcquirer = $fL51OrgAcquirer;
        return $this;
    }

    /**
     * Gets as fL52PersonAcquirer
     *
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @return FL52PersonAcquirerType
     */
    public function getFL52PersonAcquirer()
    {
        return $this->fL52PersonAcquirer;
    }

    /**
     * Sets a new fL52PersonAcquirer
     *
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @param FL52PersonAcquirerType $fL52PersonAcquirer
     * @return self
     */
    public function setFL52PersonAcquirer(?FL52PersonAcquirerType $fL52PersonAcquirer = null)
    {
        $this->fL52PersonAcquirer = $fL52PersonAcquirer;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_Event_2_11';
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
        $this->setFL17DealUid(new FL17DealUidType($this->template));
        $this->setFL45StopSend(new FL45StopSendType($this->template));
        if($this->sendData->getAccountReplyRUTDF()->getAcquirerLegal()){
            $this->setFL51OrgAcquirer(new FL51OrgAcquirerType($this->template));
        }
        if($this->sendData->getAccountReplyRUTDF()->getAcquirerIndivid()){
            $this->setFL52PersonAcquirer(new FL52PersonAcquirerType($this->template));
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fl17DealUid',
            'fL45StopSend',
            'fL51OrgAcquirer',
            'fL52PersonAcquirer',
        ];
    }
}

