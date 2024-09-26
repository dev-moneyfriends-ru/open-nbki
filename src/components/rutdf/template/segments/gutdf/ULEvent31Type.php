<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent31Type
 *
 * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
 * XSD Type: UL_Event_3_1_Type
 */
class ULEvent31Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 10. Идентификатор сделки
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL10DealUidType $uL10DealUid
     */
    private $uL10DealUid = null;

    /**
     * Блок 23,26
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL2326GroupAType[] $uL2326Group
     */
    private $uL2326Group = [
        
    ];

    /**
     * Блок 24. Сведения о поручительстве
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL24WarrantyAType[] $uL24Warranty
     */
    private $uL24Warranty = [
        
    ];

    /**
     * Блок 25. Сведения о независимой гарантии
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL25GuaranteeAType[] $uL25Guarantee
     */
    private $uL25Guarantee = [
        
    ];

    /**
     * Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL27ProvisionPaymentAType[] $uL27ProvisionPayment
     */
    private $uL27ProvisionPayment = [
        
    ];

    /**
     * Блок 28. Сведения о возмещении принципалом гаранту выплаченной суммы
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL28WarrantyReturnAType[] $uL28WarrantyReturn
     */
    private $uL28WarrantyReturn = [
        
    ];

    /**
     * Блок 30. Сведения о судебном споре или требовании по обязательству
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL30CourtAType[] $uL30Court
     */
    private $uL30Court = [
        
    ];

    /**
     * Блок 31. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL31SourceBankruptcyAType[] $uL31SourceBankruptcy
     */
    private $uL31SourceBankruptcy = [
        
    ];

    /**
     * Блок 32. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL32SourceLiquidationAType[] $uL32SourceLiquidation
     */
    private $uL32SourceLiquidation = [
        
    ];

    /**
     * Блок 35. Сведения о прекращении передачи информации по обязательству
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL35StopSendAType[] $uL35StopSend
     */
    private $uL35StopSend = [
        
    ];

    /**
     * Блок 41. Сведения о приобретателе прав – юридическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL41OrgAcquirerAType[] $uL41OrgAcquirer
     */
    private $uL41OrgAcquirer = [
        
    ];

    /**
     * Блок 42. Сведения о приобретателе прав – физическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL42PersonAcquirerAType[] $uL42PersonAcquirer
     */
    private $uL42PersonAcquirer = [
        
    ];

    /**
     * Блок 43. Сведения об обслуживающей организации
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL43ServiceOrgAType[] $uL43ServiceOrg
     */
    private $uL43ServiceOrg = [
        
    ];

    /**
     * Блок 44. Сведения об учете обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL44AccountingAType[] $uL44Accounting
     */
    private $uL44Accounting = [
        
    ];

    /**
     * Блок 1. Наименование юридического лица
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL1NameAType[] $uL1Name
     */
    private $uL1Name = [
        
    ];

    /**
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL2AddressAType[] $uL2Address
     */
    private $uL2Address = [
        
    ];

    /**
     * Блок 3. Регистрационный номер
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL3RegAType[] $uL3Reg
     */
    private $uL3Reg = [
        
    ];

    /**
     * Блок 4. Номер налогоплательщика
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL4TaxAType[] $uL4Tax
     */
    private $uL4Tax = [
        
    ];

    /**
     * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL5ReorgAType[] $uL5Reorg
     */
    private $uL5Reorg = [
        
    ];

    /**
     * Блок 6. Сведения по делу о несостоятельности (банкротстве)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL6BankruptcyAType[] $uL6Bankruptcy
     */
    private $uL6Bankruptcy = [
        
    ];

    /**
     * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL7BankruptcyEndAType[] $uL7BankruptcyEnd
     */
    private $uL7BankruptcyEnd = [
        
    ];

    /**
     * Блок 33. Сведения о взыскании платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL33CollectionAType[] $uL33Collection
     */
    private $uL33Collection = [
        
    ];

    /**
     * Блок 45,47
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL4547GroupAType[] $uL4547Group
     */
    private $uL4547Group = [
        
    ];

    /**
     * Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL46ParticipationAType[] $uL46Participation
     */
    private $uL46Participation = [
        
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
     * Gets as uL10DealUid
     *
     * Блок 10. Идентификатор сделки
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL10DealUidType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL10DealUidType $uL10DealUid
     * @return self
     */
    public function setUL10DealUid(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL10DealUidType $uL10DealUid = null)
    {
        $this->uL10DealUid = $uL10DealUid;
        return $this;
    }

    /**
     * Adds as uL2326Group
     *
     * Блок 23,26
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL2326GroupAType $uL2326Group
     *@return self
     */
    public function addToUL2326Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL2326GroupAType $uL2326Group)
    {
        $this->uL2326Group[] = $uL2326Group;
        return $this;
    }

    /**
     * isset uL2326Group
     *
     * Блок 23,26
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL2326Group($index)
    {
        return isset($this->uL2326Group[$index]);
    }

    /**
     * unset uL2326Group
     *
     * Блок 23,26
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL2326Group($index)
    {
        unset($this->uL2326Group[$index]);
    }

    /**
     * Gets as uL2326Group
     *
     * Блок 23,26
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL2326GroupAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL2326GroupAType[] $uL2326Group
     * @return self
     */
    public function setUL2326Group(array $uL2326Group = null)
    {
        $this->uL2326Group = $uL2326Group;
        return $this;
    }

    /**
     * Adds as uL24Warranty
     *
     * Блок 24. Сведения о поручительстве
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL24WarrantyAType $uL24Warranty
     *@return self
     */
    public function addToUL24Warranty(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL24WarrantyAType $uL24Warranty)
    {
        $this->uL24Warranty[] = $uL24Warranty;
        return $this;
    }

    /**
     * isset uL24Warranty
     *
     * Блок 24. Сведения о поручительстве
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL24Warranty($index)
    {
        return isset($this->uL24Warranty[$index]);
    }

    /**
     * unset uL24Warranty
     *
     * Блок 24. Сведения о поручительстве
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL24Warranty($index)
    {
        unset($this->uL24Warranty[$index]);
    }

    /**
     * Gets as uL24Warranty
     *
     * Блок 24. Сведения о поручительстве
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL24WarrantyAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL24WarrantyAType[] $uL24Warranty
     * @return self
     */
    public function setUL24Warranty(array $uL24Warranty = null)
    {
        $this->uL24Warranty = $uL24Warranty;
        return $this;
    }

    /**
     * Adds as uL25Guarantee
     *
     * Блок 25. Сведения о независимой гарантии
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL25GuaranteeAType $uL25Guarantee
     *@return self
     */
    public function addToUL25Guarantee(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL25GuaranteeAType $uL25Guarantee)
    {
        $this->uL25Guarantee[] = $uL25Guarantee;
        return $this;
    }

    /**
     * isset uL25Guarantee
     *
     * Блок 25. Сведения о независимой гарантии
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL25Guarantee($index)
    {
        return isset($this->uL25Guarantee[$index]);
    }

    /**
     * unset uL25Guarantee
     *
     * Блок 25. Сведения о независимой гарантии
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL25Guarantee($index)
    {
        unset($this->uL25Guarantee[$index]);
    }

    /**
     * Gets as uL25Guarantee
     *
     * Блок 25. Сведения о независимой гарантии
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL25GuaranteeAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL25GuaranteeAType[] $uL25Guarantee
     * @return self
     */
    public function setUL25Guarantee(array $uL25Guarantee = null)
    {
        $this->uL25Guarantee = $uL25Guarantee;
        return $this;
    }

    /**
     * Adds as uL27ProvisionPayment
     *
     * Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL27ProvisionPaymentAType $uL27ProvisionPayment
     *@return self
     */
    public function addToUL27ProvisionPayment(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL27ProvisionPaymentAType $uL27ProvisionPayment)
    {
        $this->uL27ProvisionPayment[] = $uL27ProvisionPayment;
        return $this;
    }

    /**
     * isset uL27ProvisionPayment
     *
     * Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL27ProvisionPayment($index)
    {
        return isset($this->uL27ProvisionPayment[$index]);
    }

    /**
     * unset uL27ProvisionPayment
     *
     * Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL27ProvisionPayment($index)
    {
        unset($this->uL27ProvisionPayment[$index]);
    }

    /**
     * Gets as uL27ProvisionPayment
     *
     * Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL27ProvisionPaymentAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL27ProvisionPaymentAType[] $uL27ProvisionPayment
     * @return self
     */
    public function setUL27ProvisionPayment(array $uL27ProvisionPayment = null)
    {
        $this->uL27ProvisionPayment = $uL27ProvisionPayment;
        return $this;
    }

    /**
     * Adds as uL28WarrantyReturn
     *
     * Блок 28. Сведения о возмещении принципалом гаранту выплаченной суммы
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL28WarrantyReturnAType $uL28WarrantyReturn
     *@return self
     */
    public function addToUL28WarrantyReturn(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL28WarrantyReturnAType $uL28WarrantyReturn)
    {
        $this->uL28WarrantyReturn[] = $uL28WarrantyReturn;
        return $this;
    }

    /**
     * isset uL28WarrantyReturn
     *
     * Блок 28. Сведения о возмещении принципалом гаранту выплаченной суммы
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL28WarrantyReturn($index)
    {
        return isset($this->uL28WarrantyReturn[$index]);
    }

    /**
     * unset uL28WarrantyReturn
     *
     * Блок 28. Сведения о возмещении принципалом гаранту выплаченной суммы
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL28WarrantyReturn($index)
    {
        unset($this->uL28WarrantyReturn[$index]);
    }

    /**
     * Gets as uL28WarrantyReturn
     *
     * Блок 28. Сведения о возмещении принципалом гаранту выплаченной суммы
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL28WarrantyReturnAType[]
     */
    public function getUL28WarrantyReturn()
    {
        return $this->uL28WarrantyReturn;
    }

    /**
     * Sets a new uL28WarrantyReturn
     *
     * Блок 28. Сведения о возмещении принципалом гаранту выплаченной суммы
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL28WarrantyReturnAType[] $uL28WarrantyReturn
     * @return self
     */
    public function setUL28WarrantyReturn(array $uL28WarrantyReturn = null)
    {
        $this->uL28WarrantyReturn = $uL28WarrantyReturn;
        return $this;
    }

    /**
     * Adds as uL30Court
     *
     * Блок 30. Сведения о судебном споре или требовании по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL30CourtAType $uL30Court
     *@return self
     */
    public function addToUL30Court(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL30CourtAType $uL30Court)
    {
        $this->uL30Court[] = $uL30Court;
        return $this;
    }

    /**
     * isset uL30Court
     *
     * Блок 30. Сведения о судебном споре или требовании по обязательству
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL30Court($index)
    {
        return isset($this->uL30Court[$index]);
    }

    /**
     * unset uL30Court
     *
     * Блок 30. Сведения о судебном споре или требовании по обязательству
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL30Court($index)
    {
        unset($this->uL30Court[$index]);
    }

    /**
     * Gets as uL30Court
     *
     * Блок 30. Сведения о судебном споре или требовании по обязательству
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL30CourtAType[]
     */
    public function getUL30Court()
    {
        return $this->uL30Court;
    }

    /**
     * Sets a new uL30Court
     *
     * Блок 30. Сведения о судебном споре или требовании по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL30CourtAType[] $uL30Court
     * @return self
     */
    public function setUL30Court(array $uL30Court = null)
    {
        $this->uL30Court = $uL30Court;
        return $this;
    }

    /**
     * Adds as uL31SourceBankruptcy
     *
     * Блок 31. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL31SourceBankruptcyAType $uL31SourceBankruptcy
     *@return self
     */
    public function addToUL31SourceBankruptcy(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL31SourceBankruptcyAType $uL31SourceBankruptcy)
    {
        $this->uL31SourceBankruptcy[] = $uL31SourceBankruptcy;
        return $this;
    }

    /**
     * isset uL31SourceBankruptcy
     *
     * Блок 31. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL31SourceBankruptcy($index)
    {
        return isset($this->uL31SourceBankruptcy[$index]);
    }

    /**
     * unset uL31SourceBankruptcy
     *
     * Блок 31. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL31SourceBankruptcy($index)
    {
        unset($this->uL31SourceBankruptcy[$index]);
    }

    /**
     * Gets as uL31SourceBankruptcy
     *
     * Блок 31. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL31SourceBankruptcyAType[]
     */
    public function getUL31SourceBankruptcy()
    {
        return $this->uL31SourceBankruptcy;
    }

    /**
     * Sets a new uL31SourceBankruptcy
     *
     * Блок 31. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL31SourceBankruptcyAType[] $uL31SourceBankruptcy
     * @return self
     */
    public function setUL31SourceBankruptcy(array $uL31SourceBankruptcy = null)
    {
        $this->uL31SourceBankruptcy = $uL31SourceBankruptcy;
        return $this;
    }

    /**
     * Adds as uL32SourceLiquidation
     *
     * Блок 32. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL32SourceLiquidationAType $uL32SourceLiquidation
     *@return self
     */
    public function addToUL32SourceLiquidation(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL32SourceLiquidationAType $uL32SourceLiquidation)
    {
        $this->uL32SourceLiquidation[] = $uL32SourceLiquidation;
        return $this;
    }

    /**
     * isset uL32SourceLiquidation
     *
     * Блок 32. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL32SourceLiquidation($index)
    {
        return isset($this->uL32SourceLiquidation[$index]);
    }

    /**
     * unset uL32SourceLiquidation
     *
     * Блок 32. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL32SourceLiquidation($index)
    {
        unset($this->uL32SourceLiquidation[$index]);
    }

    /**
     * Gets as uL32SourceLiquidation
     *
     * Блок 32. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL32SourceLiquidationAType[]
     */
    public function getUL32SourceLiquidation()
    {
        return $this->uL32SourceLiquidation;
    }

    /**
     * Sets a new uL32SourceLiquidation
     *
     * Блок 32. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL32SourceLiquidationAType[] $uL32SourceLiquidation
     * @return self
     */
    public function setUL32SourceLiquidation(array $uL32SourceLiquidation = null)
    {
        $this->uL32SourceLiquidation = $uL32SourceLiquidation;
        return $this;
    }

    /**
     * Adds as uL35StopSend
     *
     * Блок 35. Сведения о прекращении передачи информации по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL35StopSendAType $uL35StopSend
     *@return self
     */
    public function addToUL35StopSend(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL35StopSendAType $uL35StopSend)
    {
        $this->uL35StopSend[] = $uL35StopSend;
        return $this;
    }

    /**
     * isset uL35StopSend
     *
     * Блок 35. Сведения о прекращении передачи информации по обязательству
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL35StopSend($index)
    {
        return isset($this->uL35StopSend[$index]);
    }

    /**
     * unset uL35StopSend
     *
     * Блок 35. Сведения о прекращении передачи информации по обязательству
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL35StopSend($index)
    {
        unset($this->uL35StopSend[$index]);
    }

    /**
     * Gets as uL35StopSend
     *
     * Блок 35. Сведения о прекращении передачи информации по обязательству
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL35StopSendAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL35StopSendAType[] $uL35StopSend
     * @return self
     */
    public function setUL35StopSend(array $uL35StopSend = null)
    {
        $this->uL35StopSend = $uL35StopSend;
        return $this;
    }

    /**
     * Adds as uL41OrgAcquirer
     *
     * Блок 41. Сведения о приобретателе прав – юридическом лице
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL41OrgAcquirerAType $uL41OrgAcquirer
     *@return self
     */
    public function addToUL41OrgAcquirer(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL41OrgAcquirerAType $uL41OrgAcquirer)
    {
        $this->uL41OrgAcquirer[] = $uL41OrgAcquirer;
        return $this;
    }

    /**
     * isset uL41OrgAcquirer
     *
     * Блок 41. Сведения о приобретателе прав – юридическом лице
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL41OrgAcquirer($index)
    {
        return isset($this->uL41OrgAcquirer[$index]);
    }

    /**
     * unset uL41OrgAcquirer
     *
     * Блок 41. Сведения о приобретателе прав – юридическом лице
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL41OrgAcquirer($index)
    {
        unset($this->uL41OrgAcquirer[$index]);
    }

    /**
     * Gets as uL41OrgAcquirer
     *
     * Блок 41. Сведения о приобретателе прав – юридическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL41OrgAcquirerAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL41OrgAcquirerAType[] $uL41OrgAcquirer
     * @return self
     */
    public function setUL41OrgAcquirer(array $uL41OrgAcquirer = null)
    {
        $this->uL41OrgAcquirer = $uL41OrgAcquirer;
        return $this;
    }

    /**
     * Adds as uL42PersonAcquirer
     *
     * Блок 42. Сведения о приобретателе прав – физическом лице
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL42PersonAcquirerAType $uL42PersonAcquirer
     *@return self
     */
    public function addToUL42PersonAcquirer(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL42PersonAcquirerAType $uL42PersonAcquirer)
    {
        $this->uL42PersonAcquirer[] = $uL42PersonAcquirer;
        return $this;
    }

    /**
     * isset uL42PersonAcquirer
     *
     * Блок 42. Сведения о приобретателе прав – физическом лице
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL42PersonAcquirer($index)
    {
        return isset($this->uL42PersonAcquirer[$index]);
    }

    /**
     * unset uL42PersonAcquirer
     *
     * Блок 42. Сведения о приобретателе прав – физическом лице
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL42PersonAcquirer($index)
    {
        unset($this->uL42PersonAcquirer[$index]);
    }

    /**
     * Gets as uL42PersonAcquirer
     *
     * Блок 42. Сведения о приобретателе прав – физическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL42PersonAcquirerAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL42PersonAcquirerAType[] $uL42PersonAcquirer
     * @return self
     */
    public function setUL42PersonAcquirer(array $uL42PersonAcquirer = null)
    {
        $this->uL42PersonAcquirer = $uL42PersonAcquirer;
        return $this;
    }

    /**
     * Adds as uL43ServiceOrg
     *
     * Блок 43. Сведения об обслуживающей организации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL43ServiceOrgAType $uL43ServiceOrg
     *@return self
     */
    public function addToUL43ServiceOrg(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL43ServiceOrgAType $uL43ServiceOrg)
    {
        $this->uL43ServiceOrg[] = $uL43ServiceOrg;
        return $this;
    }

    /**
     * isset uL43ServiceOrg
     *
     * Блок 43. Сведения об обслуживающей организации
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL43ServiceOrg($index)
    {
        return isset($this->uL43ServiceOrg[$index]);
    }

    /**
     * unset uL43ServiceOrg
     *
     * Блок 43. Сведения об обслуживающей организации
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL43ServiceOrg($index)
    {
        unset($this->uL43ServiceOrg[$index]);
    }

    /**
     * Gets as uL43ServiceOrg
     *
     * Блок 43. Сведения об обслуживающей организации
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL43ServiceOrgAType[]
     */
    public function getUL43ServiceOrg()
    {
        return $this->uL43ServiceOrg;
    }

    /**
     * Sets a new uL43ServiceOrg
     *
     * Блок 43. Сведения об обслуживающей организации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL43ServiceOrgAType[] $uL43ServiceOrg
     * @return self
     */
    public function setUL43ServiceOrg(array $uL43ServiceOrg = null)
    {
        $this->uL43ServiceOrg = $uL43ServiceOrg;
        return $this;
    }

    /**
     * Adds as uL44Accounting
     *
     * Блок 44. Сведения об учете обязательства
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL44AccountingAType $uL44Accounting
     *@return self
     */
    public function addToUL44Accounting(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL44AccountingAType $uL44Accounting)
    {
        $this->uL44Accounting[] = $uL44Accounting;
        return $this;
    }

    /**
     * isset uL44Accounting
     *
     * Блок 44. Сведения об учете обязательства
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL44Accounting($index)
    {
        return isset($this->uL44Accounting[$index]);
    }

    /**
     * unset uL44Accounting
     *
     * Блок 44. Сведения об учете обязательства
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL44Accounting($index)
    {
        unset($this->uL44Accounting[$index]);
    }

    /**
     * Gets as uL44Accounting
     *
     * Блок 44. Сведения об учете обязательства
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL44AccountingAType[]
     */
    public function getUL44Accounting()
    {
        return $this->uL44Accounting;
    }

    /**
     * Sets a new uL44Accounting
     *
     * Блок 44. Сведения об учете обязательства
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL44AccountingAType[] $uL44Accounting
     * @return self
     */
    public function setUL44Accounting(array $uL44Accounting = null)
    {
        $this->uL44Accounting = $uL44Accounting;
        return $this;
    }

    /**
     * Adds as uL1Name
     *
     * Блок 1. Наименование юридического лица
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL1NameAType $uL1Name
     * @return self
     */
    public function addToUL1Name(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL1NameAType $uL1Name)
    {
        $this->uL1Name[] = $uL1Name;
        return $this;
    }

    /**
     * isset uL1Name
     *
     * Блок 1. Наименование юридического лица
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL1Name($index)
    {
        return isset($this->uL1Name[$index]);
    }

    /**
     * unset uL1Name
     *
     * Блок 1. Наименование юридического лица
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL1Name($index)
    {
        unset($this->uL1Name[$index]);
    }

    /**
     * Gets as uL1Name
     *
     * Блок 1. Наименование юридического лица
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL1NameAType[]
     */
    public function getUL1Name()
    {
        return $this->uL1Name;
    }

    /**
     * Sets a new uL1Name
     *
     * Блок 1. Наименование юридического лица
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL1NameAType[] $uL1Name
     * @return self
     */
    public function setUL1Name(array $uL1Name = null)
    {
        $this->uL1Name = $uL1Name;
        return $this;
    }

    /**
     * Adds as uL2Address
     *
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL2AddressAType $uL2Address
     * @return self
     */
    public function addToUL2Address(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL2AddressAType $uL2Address)
    {
        $this->uL2Address[] = $uL2Address;
        return $this;
    }

    /**
     * isset uL2Address
     *
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL2Address($index)
    {
        return isset($this->uL2Address[$index]);
    }

    /**
     * unset uL2Address
     *
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL2Address($index)
    {
        unset($this->uL2Address[$index]);
    }

    /**
     * Gets as uL2Address
     *
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL2AddressAType[]
     */
    public function getUL2Address()
    {
        return $this->uL2Address;
    }

    /**
     * Sets a new uL2Address
     *
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL2AddressAType[] $uL2Address
     * @return self
     */
    public function setUL2Address(array $uL2Address = null)
    {
        $this->uL2Address = $uL2Address;
        return $this;
    }

    /**
     * Adds as uL3Reg
     *
     * Блок 3. Регистрационный номер
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL3RegAType $uL3Reg
     * @return self
     */
    public function addToUL3Reg(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL3RegAType $uL3Reg)
    {
        $this->uL3Reg[] = $uL3Reg;
        return $this;
    }

    /**
     * isset uL3Reg
     *
     * Блок 3. Регистрационный номер
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL3Reg($index)
    {
        return isset($this->uL3Reg[$index]);
    }

    /**
     * unset uL3Reg
     *
     * Блок 3. Регистрационный номер
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL3Reg($index)
    {
        unset($this->uL3Reg[$index]);
    }

    /**
     * Gets as uL3Reg
     *
     * Блок 3. Регистрационный номер
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL3RegAType[]
     */
    public function getUL3Reg()
    {
        return $this->uL3Reg;
    }

    /**
     * Sets a new uL3Reg
     *
     * Блок 3. Регистрационный номер
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL3RegAType[] $uL3Reg
     * @return self
     */
    public function setUL3Reg(array $uL3Reg = null)
    {
        $this->uL3Reg = $uL3Reg;
        return $this;
    }

    /**
     * Adds as uL4Tax
     *
     * Блок 4. Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL4TaxAType $uL4Tax
     * @return self
     */
    public function addToUL4Tax(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL4TaxAType $uL4Tax)
    {
        $this->uL4Tax[] = $uL4Tax;
        return $this;
    }

    /**
     * isset uL4Tax
     *
     * Блок 4. Номер налогоплательщика
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL4Tax($index)
    {
        return isset($this->uL4Tax[$index]);
    }

    /**
     * unset uL4Tax
     *
     * Блок 4. Номер налогоплательщика
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL4Tax($index)
    {
        unset($this->uL4Tax[$index]);
    }

    /**
     * Gets as uL4Tax
     *
     * Блок 4. Номер налогоплательщика
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL4TaxAType[]
     */
    public function getUL4Tax()
    {
        return $this->uL4Tax;
    }

    /**
     * Sets a new uL4Tax
     *
     * Блок 4. Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL4TaxAType[] $uL4Tax
     * @return self
     */
    public function setUL4Tax(array $uL4Tax = null)
    {
        $this->uL4Tax = $uL4Tax;
        return $this;
    }

    /**
     * Adds as uL5Reorg
     *
     * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL5ReorgAType $uL5Reorg
     * @return self
     */
    public function addToUL5Reorg(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL5ReorgAType $uL5Reorg)
    {
        $this->uL5Reorg[] = $uL5Reorg;
        return $this;
    }

    /**
     * isset uL5Reorg
     *
     * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL5Reorg($index)
    {
        return isset($this->uL5Reorg[$index]);
    }

    /**
     * unset uL5Reorg
     *
     * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL5Reorg($index)
    {
        unset($this->uL5Reorg[$index]);
    }

    /**
     * Gets as uL5Reorg
     *
     * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL5ReorgAType[]
     */
    public function getUL5Reorg()
    {
        return $this->uL5Reorg;
    }

    /**
     * Sets a new uL5Reorg
     *
     * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL5ReorgAType[] $uL5Reorg
     * @return self
     */
    public function setUL5Reorg(array $uL5Reorg = null)
    {
        $this->uL5Reorg = $uL5Reorg;
        return $this;
    }

    /**
     * Adds as uL6Bankruptcy
     *
     * Блок 6. Сведения по делу о несостоятельности (банкротстве)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL6BankruptcyAType $uL6Bankruptcy
     *@return self
     */
    public function addToUL6Bankruptcy(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL6BankruptcyAType $uL6Bankruptcy)
    {
        $this->uL6Bankruptcy[] = $uL6Bankruptcy;
        return $this;
    }

    /**
     * isset uL6Bankruptcy
     *
     * Блок 6. Сведения по делу о несостоятельности (банкротстве)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL6Bankruptcy($index)
    {
        return isset($this->uL6Bankruptcy[$index]);
    }

    /**
     * unset uL6Bankruptcy
     *
     * Блок 6. Сведения по делу о несостоятельности (банкротстве)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL6Bankruptcy($index)
    {
        unset($this->uL6Bankruptcy[$index]);
    }

    /**
     * Gets as uL6Bankruptcy
     *
     * Блок 6. Сведения по делу о несостоятельности (банкротстве)
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL6BankruptcyAType[]
     */
    public function getUL6Bankruptcy()
    {
        return $this->uL6Bankruptcy;
    }

    /**
     * Sets a new uL6Bankruptcy
     *
     * Блок 6. Сведения по делу о несостоятельности (банкротстве)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL6BankruptcyAType[] $uL6Bankruptcy
     * @return self
     */
    public function setUL6Bankruptcy(array $uL6Bankruptcy = null)
    {
        $this->uL6Bankruptcy = $uL6Bankruptcy;
        return $this;
    }

    /**
     * Adds as uL7BankruptcyEnd
     *
     * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL7BankruptcyEndAType $uL7BankruptcyEnd
     *@return self
     */
    public function addToUL7BankruptcyEnd(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL7BankruptcyEndAType $uL7BankruptcyEnd)
    {
        $this->uL7BankruptcyEnd[] = $uL7BankruptcyEnd;
        return $this;
    }

    /**
     * isset uL7BankruptcyEnd
     *
     * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL7BankruptcyEnd($index)
    {
        return isset($this->uL7BankruptcyEnd[$index]);
    }

    /**
     * unset uL7BankruptcyEnd
     *
     * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL7BankruptcyEnd($index)
    {
        unset($this->uL7BankruptcyEnd[$index]);
    }

    /**
     * Gets as uL7BankruptcyEnd
     *
     * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL7BankruptcyEndAType[]
     */
    public function getUL7BankruptcyEnd()
    {
        return $this->uL7BankruptcyEnd;
    }

    /**
     * Sets a new uL7BankruptcyEnd
     *
     * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL7BankruptcyEndAType[] $uL7BankruptcyEnd
     * @return self
     */
    public function setUL7BankruptcyEnd(array $uL7BankruptcyEnd = null)
    {
        $this->uL7BankruptcyEnd = $uL7BankruptcyEnd;
        return $this;
    }

    /**
     * Adds as uL33Collection
     *
     * Блок 33. Сведения о взыскании платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL33CollectionAType $uL33Collection
     *@return self
     */
    public function addToUL33Collection(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL33CollectionAType $uL33Collection)
    {
        $this->uL33Collection[] = $uL33Collection;
        return $this;
    }

    /**
     * isset uL33Collection
     *
     * Блок 33. Сведения о взыскании платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL33Collection($index)
    {
        return isset($this->uL33Collection[$index]);
    }

    /**
     * unset uL33Collection
     *
     * Блок 33. Сведения о взыскании платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL33Collection($index)
    {
        unset($this->uL33Collection[$index]);
    }

    /**
     * Gets as uL33Collection
     *
     * Блок 33. Сведения о взыскании платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL33CollectionAType[]
     */
    public function getUL33Collection()
    {
        return $this->uL33Collection;
    }

    /**
     * Sets a new uL33Collection
     *
     * Блок 33. Сведения о взыскании платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL33CollectionAType[] $uL33Collection
     * @return self
     */
    public function setUL33Collection(array $uL33Collection = null)
    {
        $this->uL33Collection = $uL33Collection;
        return $this;
    }

    /**
     * Adds as uL4547Group
     *
     * Блок 45,47
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL4547GroupAType $uL4547Group
     * @return self
     */
    public function addToUL4547Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL4547GroupAType $uL4547Group)
    {
        $this->uL4547Group[] = $uL4547Group;
        return $this;
    }

    /**
     * isset uL4547Group
     *
     * Блок 45,47
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL4547Group($index)
    {
        return isset($this->uL4547Group[$index]);
    }

    /**
     * unset uL4547Group
     *
     * Блок 45,47
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL4547Group($index)
    {
        unset($this->uL4547Group[$index]);
    }

    /**
     * Gets as uL4547Group
     *
     * Блок 45,47
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL4547GroupAType[]
     */
    public function getUL4547Group()
    {
        return $this->uL4547Group;
    }

    /**
     * Sets a new uL4547Group
     *
     * Блок 45,47
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL4547GroupAType[] $uL4547Group
     * @return self
     */
    public function setUL4547Group(array $uL4547Group = null)
    {
        $this->uL4547Group = $uL4547Group;
        return $this;
    }

    /**
     * Adds as uL46Participation
     *
     * Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL46ParticipationAType $uL46Participation
     *@return self
     */
    public function addToUL46Participation(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL46ParticipationAType $uL46Participation)
    {
        $this->uL46Participation[] = $uL46Participation;
        return $this;
    }

    /**
     * isset uL46Participation
     *
     * Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL46Participation($index)
    {
        return isset($this->uL46Participation[$index]);
    }

    /**
     * unset uL46Participation
     *
     * Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL46Participation($index)
    {
        unset($this->uL46Participation[$index]);
    }

    /**
     * Gets as uL46Participation
     *
     * Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL46ParticipationAType[]
     */
    public function getUL46Participation()
    {
        return $this->uL46Participation;
    }

    /**
     * Sets a new uL46Participation
     *
     * Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type\UL46ParticipationAType[] $uL46Participation
     * @return self
     */
    public function setUL46Participation(array $uL46Participation = null)
    {
        $this->uL46Participation = $uL46Participation;
        return $this;
    }
}

