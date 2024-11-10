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
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidType $fL17DealUid
     */
    private $fL17DealUid = null;

    /**
     * Блок 32,35
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType $fL3235Group
     */
    private $fL3235Group = null;

    /**
     * Блок 33. Сведения о поручительстве
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType $fL33Warranty
     */
    private $fL33Warranty = null;

    /**
     * Блок 34. Сведения о независимой гарантии
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType $fL34Guarantee
     */
    private $fL34Guarantee = null;

    /**
     * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType $fL36ProvisionPayment
     */
    private $fL36ProvisionPayment = null;

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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidType $fL17DealUid
     * @return self
     */
    public function setFL17DealUid(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidType $fL17DealUid)
    {
        $this->fL17DealUid = $fL17DealUid;
        return $this;
    }

    /**
     * Gets as fL3235Group
     *
     * Блок 32,35
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType $fL3235Group
     * @return self
     */
    public function setFL3235Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType $fL3235Group)
    {
        $this->fL3235Group = $fL3235Group;
        return $this;
    }

    /**
     * Gets as fL33Warranty
     *
     * Блок 33. Сведения о поручительстве
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType $fL33Warranty
     * @return self
     */
    public function setFL33Warranty(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType $fL33Warranty)
    {
        $this->fL33Warranty = $fL33Warranty;
        return $this;
    }

    /**
     * Gets as fL34Guarantee
     *
     * Блок 34. Сведения о независимой гарантии
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType $fL34Guarantee
     * @return self
     */
    public function setFL34Guarantee(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType $fL34Guarantee)
    {
        $this->fL34Guarantee = $fL34Guarantee;
        return $this;
    }

    /**
     * Gets as fL36ProvisionPayment
     *
     * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType $fL36ProvisionPayment
     * @return self
     */
    public function setFL36ProvisionPayment(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType $fL36ProvisionPayment)
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
        $this->fL17DealUid = new FL17DealUidType($this->template);
        $this->fL3235Group = new FL3235GroupType($this->template);
        $this->fL33Warranty = new FL33WarrantyType($this->template);
        $this->fL34Guarantee = new FL34GuaranteeType($this->template);
        $this->fL36ProvisionPayment = new FL36ProvisionPaymentType($this->template);
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

