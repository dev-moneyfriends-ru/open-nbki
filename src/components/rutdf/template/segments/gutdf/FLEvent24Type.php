<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent24Type
 *
 * Изменились сведения об обеспечении исполнения обязательства
 * XSD Type: FL_Event_2_4_Type
 */
class FLEvent24Type extends EventDataType
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
     * Блок 32,35
     *
     * @var FL3235GroupType[] $fL3235Group
     */
    private $fL3235Group = [

    ];

    /**
     * Блок 33. Сведения о поручительстве
     *
     * @var FL33WarrantyType[] $fL33Warranty
     */
    private $fL33Warranty = [

    ];

    /**
     * Блок 34. Сведения о независимой гарантии
     *
     * @var FL34GuaranteeType[] $fL34Guarantee
     */
    private $fL34Guarantee = [

    ];

    /**
     * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @var FL36ProvisionPaymentType[] $fL36ProvisionPayment
     */
    private $fL36ProvisionPayment = [

    ];

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
     * Adds as fL3235Group
     *
     * Блок 32,35
     *
     * @param FL3235GroupType $fL3235Group
     * @return self
     */
    public function addToFL3235Group(FL3235GroupType $fL3235Group)
    {
        $this->fL3235Group[] = $fL3235Group;
        return $this;
    }

    /**
     * isset fL3235Group
     *
     * Блок 32,35
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL3235Group($index)
    {
        return isset($this->fL3235Group[$index]);
    }

    /**
     * unset fL3235Group
     *
     * Блок 32,35
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL3235Group($index)
    {
        unset($this->fL3235Group[$index]);
    }

    /**
     * Gets as fL3235Group
     *
     * Блок 32,35
     *
     * @return FL3235GroupType[]
     */
    public function getFL3235Group()
    {
        return $this->fL3235Group;
    }

    /**
     * Sets a new fL3235Group
     *
     * Блок 32,35
     *
     * @param FL3235GroupType[] $fL3235Group
     * @return self
     */
    public function setFL3235Group(array $fL3235Group)
    {
        $this->fL3235Group = $fL3235Group;
        return $this;
    }

    /**
     * Adds as fL33Warranty
     *
     * Блок 33. Сведения о поручительстве
     *
     * @param FL33WarrantyType $fL33Warranty
     * @return self
     */
    public function addToFL33Warranty(FL33WarrantyType $fL33Warranty)
    {
        $this->fL33Warranty[] = $fL33Warranty;
        return $this;
    }

    /**
     * isset fL33Warranty
     *
     * Блок 33. Сведения о поручительстве
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL33Warranty($index)
    {
        return isset($this->fL33Warranty[$index]);
    }

    /**
     * unset fL33Warranty
     *
     * Блок 33. Сведения о поручительстве
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL33Warranty($index)
    {
        unset($this->fL33Warranty[$index]);
    }

    /**
     * Gets as fL33Warranty
     *
     * Блок 33. Сведения о поручительстве
     *
     * @return FL33WarrantyType[]
     */
    public function getFL33Warranty()
    {
        return $this->fL33Warranty;
    }

    /**
     * Sets a new fL33Warranty
     *
     * Блок 33. Сведения о поручительстве
     *
     * @param FL33WarrantyType $fL33Warranty
     * @return self
     */
    public function setFL33Warranty(array $fL33Warranty)
    {
        $this->fL33Warranty = $fL33Warranty;
        return $this;
    }

    /**
     * Adds as fL34Guarantee
     *
     * Блок 34. Сведения о независимой гарантии
     *
     * @param FL34GuaranteeType $fL34Guarantee
     * @return self
     */
    public function addToFL34Guarantee(FL34GuaranteeType $fL34Guarantee)
    {
        $this->fL34Guarantee[] = $fL34Guarantee;
        return $this;
    }

    /**
     * isset fL34Guarantee
     *
     * Блок 34. Сведения о независимой гарантии
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL34Guarantee($index)
    {
        return isset($this->fL34Guarantee[$index]);
    }

    /**
     * unset fL34Guarantee
     *
     * Блок 34. Сведения о независимой гарантии
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL34Guarantee($index)
    {
        unset($this->fL34Guarantee[$index]);
    }

    /**
     * Gets as fL34Guarantee
     *
     * Блок 34. Сведения о независимой гарантии
     *
     * @return FL34GuaranteeType[]
     */
    public function getFL34Guarantee()
    {
        return $this->fL34Guarantee;
    }

    /**
     * Sets a new fL34Guarantee
     *
     * Блок 34. Сведения о независимой гарантии
     *
     * @param FL34GuaranteeType[] $fL34Guarantee
     * @return self
     */
    public function setFL34Guarantee(array $fL34Guarantee)
    {
        $this->fL34Guarantee = $fL34Guarantee;
        return $this;
    }

    /**
     * Adds as fL36ProvisionPayment
     *
     * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @param FL36ProvisionPaymentType $fL36ProvisionPayment
     * @return self
     */
    public function addToFL36ProvisionPayment(FL36ProvisionPaymentType $fL36ProvisionPayment)
    {
        $this->fL36ProvisionPayment[] = $fL36ProvisionPayment;
        return $this;
    }

    /**
     * isset fL36ProvisionPayment
     *
     * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL36ProvisionPayment($index)
    {
        return isset($this->fL36ProvisionPayment[$index]);
    }

    /**
     * unset fL36ProvisionPayment
     *
     * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL36ProvisionPayment($index)
    {
        unset($this->fL36ProvisionPayment[$index]);
    }

    /**
     * Gets as fL36ProvisionPayment
     *
     * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @return FL36ProvisionPaymentType[]
     */
    public function getFL36ProvisionPayment()
    {
        return $this->fL36ProvisionPayment;
    }

    /**
     * Sets a new fL36ProvisionPayment
     *
     * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @param FL36ProvisionPaymentType[] $fL36ProvisionPayment
     * @return self
     */
    public function setFL36ProvisionPayment(array $fL36ProvisionPayment)
    {
        $this->fL36ProvisionPayment = $fL36ProvisionPayment;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_Event_2_4';
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
        $this->setFL17DealUid(new FL17DealUidType($this->template));
        foreach ($this->sendData->getAccountReplyRUTDF()->getCollateral() as $key => $value){
            $this->addToFL3235Group(new FL3235GroupType($this->template, $key));
        }
        foreach ($this->sendData->getAccountReplyRUTDF()->getGuarantor() as $key => $value){
            $this->addToFL33Warranty(new FL33WarrantyType($this->template, $key));
        }
        foreach ($this->sendData->getAccountReplyRUTDF()->getIndepGuarantor() as $key => $value){
            $this->addToFL34Guarantee(new FL34GuaranteeType($this->template, $key));
        }
        foreach ($this->sendData->getAccountReplyRUTDF()->getCollatRepay() as $key => $value){
            $this->addToFL36ProvisionPayment(new FL36ProvisionPaymentType($this->template, $key));
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fL17DealUid',
            'fL3235Group',
            'fL33Warranty',
            'fL34Guarantee',
            'fL36ProvisionPayment',
        ];
    }
}

