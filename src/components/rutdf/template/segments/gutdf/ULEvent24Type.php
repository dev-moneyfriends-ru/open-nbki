<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent24Type
 *
 * Изменились сведения об обеспечении исполнения обязательства
 * XSD Type: UL_Event_2_4_Type
 */
class ULEvent24Type extends EventDataType
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
     * Блок 23,26
     *
     * @var UL2326GroupType $uL2326Group
     */
    private $uL2326Group = null;

    /**
     * Блок 24. Сведения о поручительстве
     *
     * @var UL24WarrantyType $uL24Warranty
     */
    private $uL24Warranty = null;

    /**
     * Блок 25. Сведения о независимой гарантии
     *
     * @var UL25GuaranteeType $uL25Guarantee
     */
    private $uL25Guarantee = null;

    /**
     * Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @var UL27ProvisionPaymentType $uL27ProvisionPayment
     */
    private $uL27ProvisionPayment = null;

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
     * Gets as uL2326Group
     *
     * Блок 23,26
     *
     * @return UL2326GroupType
     */
    public function getUL2326Group()
    {
        return $this->uL2326Group;
    }

    /**
     * Sets a new uL2326Group
     *
     * Блок 23,26
     *
     * @param UL2326GroupType $uL2326Group
     * @return self
     */
    public function setUL2326Group(UL2326GroupType $uL2326Group)
    {
        $this->uL2326Group = $uL2326Group;
        return $this;
    }

    /**
     * Gets as uL24Warranty
     *
     * Блок 24. Сведения о поручительстве
     *
     * @return UL24WarrantyType
     */
    public function getUL24Warranty()
    {
        return $this->uL24Warranty;
    }

    /**
     * Sets a new uL24Warranty
     *
     * Блок 24. Сведения о поручительстве
     *
     * @param UL24WarrantyType $uL24Warranty
     * @return self
     */
    public function setUL24Warranty(UL24WarrantyType $uL24Warranty)
    {
        $this->uL24Warranty = $uL24Warranty;
        return $this;
    }

    /**
     * Gets as uL25Guarantee
     *
     * Блок 25. Сведения о независимой гарантии
     *
     * @return UL25GuaranteeType
     */
    public function getUL25Guarantee()
    {
        return $this->uL25Guarantee;
    }

    /**
     * Sets a new uL25Guarantee
     *
     * Блок 25. Сведения о независимой гарантии
     *
     * @param UL25GuaranteeType $uL25Guarantee
     * @return self
     */
    public function setUL25Guarantee(UL25GuaranteeType $uL25Guarantee)
    {
        $this->uL25Guarantee = $uL25Guarantee;
        return $this;
    }

    /**
     * Gets as uL27ProvisionPayment
     *
     * Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @return UL27ProvisionPaymentType
     */
    public function getUL27ProvisionPayment()
    {
        return $this->uL27ProvisionPayment;
    }

    /**
     * Sets a new uL27ProvisionPayment
     *
     * Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @param UL27ProvisionPaymentType $uL27ProvisionPayment
     * @return self
     */
    public function setUL27ProvisionPayment(UL27ProvisionPaymentType $uL27ProvisionPayment)
    {
        $this->uL27ProvisionPayment = $uL27ProvisionPayment;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_Event_2_4';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Изменились сведения об обеспечении исполнения обязательства';
    }

    protected function initAttributes()
    {
        $this->uL10DealUid = new UL10DealUidType($this->template);
        $this->uL2326Group = new UL2326GroupType($this->template);
        $this->uL24Warranty = new UL24WarrantyType($this->template);
        $this->uL25Guarantee = new UL25GuaranteeType($this->template);
        $this->uL27ProvisionPayment = new UL27ProvisionPaymentType($this->template);

    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'uL10DealUid',
            'uL2326Group',
            'uL24Warranty',
            'uL25Guarantee',
            'uL27ProvisionPayment',
        ];
    }
}

