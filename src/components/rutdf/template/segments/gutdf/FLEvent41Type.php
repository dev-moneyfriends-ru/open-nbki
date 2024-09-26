<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent41Type
 *
 * Требуется аннулирование отдельных показателей кредитной истории
 * XSD Type: FL_Event_4_1_Type
 */
class FLEvent41Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 17. Идентификатор сделки (необязательный УИд сделки)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidRType $fL17DealUidR
     */
    private $fL17DealUidR = null;

    /**
     * Блок 32,35
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL3235GroupAType[] $fL3235Group
     */
    private $fL3235Group = [
        
    ];

    /**
     * Блок 33. Сведения о поручительстве
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL33WarrantyAType[] $fL33Warranty
     */
    private $fL33Warranty = [
        
    ];

    /**
     * Блок 34. Сведения о независимой гарантии
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL34GuaranteeAType[] $fL34Guarantee
     */
    private $fL34Guarantee = [
        
    ];

    /**
     * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL36ProvisionPaymentAType[] $fL36ProvisionPayment
     */
    private $fL36ProvisionPayment = [
        
    ];

    /**
     * Блок 37. Сведения о возмещении принципалом гаранту выплаченной суммы
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL37WarrantyReturnAType[] $fL37WarrantyReturn
     */
    private $fL37WarrantyReturn = [
        
    ];

    /**
     * Блок 39. Сведения о судебном споре или требовании по обязательству
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL39CourtAType[] $fL39Court
     */
    private $fL39Court = [
        
    ];

    /**
     * Блок 41. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL41SourceBankruptcyAType[] $fL41SourceBankruptcy
     */
    private $fL41SourceBankruptcy = [
        
    ];

    /**
     * Блок 42. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL42SourceLiquidationAType[] $fL42SourceLiquidation
     */
    private $fL42SourceLiquidation = [
        
    ];

    /**
     * Блок 45. Сведения о прекращении передачи информации по обязательству
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL45StopSendAType[] $fL45StopSend
     */
    private $fL45StopSend = [
        
    ];

    /**
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL51OrgAcquirerAType[] $fL51OrgAcquirer
     */
    private $fL51OrgAcquirer = [
        
    ];

    /**
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL52PersonAcquirerAType[] $fL52PersonAcquirer
     */
    private $fL52PersonAcquirer = [
        
    ];

    /**
     * Блок 53. Сведения об обслуживающей организации
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL53ServiceOrgAType[] $fL53ServiceOrg
     */
    private $fL53ServiceOrg = [
        
    ];

    /**
     * Блок 54. Сведения об учете обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL54AccountingAType[] $fL54Accounting
     */
    private $fL54Accounting = [
        
    ];

    /**
     * Блок 1,4
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL14GroupAType[] $fL14Group
     */
    private $fL14Group = [
        
    ];

    /**
     * Блок 2,5
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL25GroupAType[] $fL25Group
     */
    private $fL25Group = [
        
    ];

    /**
     * Блок 3. Дата и место рождения
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL3BirthAType[] $fL3Birth
     */
    private $fL3Birth = [
        
    ];

    /**
     * Блок 6. Номер налогоплательщика и регистрационный номер
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL6TaxAType[] $fL6Tax
     */
    private $fL6Tax = [
        
    ];

    /**
     * Блок 7. СНИЛС
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL7SocialAType[] $fL7Social
     */
    private $fL7Social = [
        
    ];

    /**
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL8AddrRegAType[] $fL8AddrReg
     */
    private $fL8AddrReg = [
        
    ];

    /**
     * Блок 9. Фактическое место жительства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL9AddrFactAType[] $fL9AddrFact
     */
    private $fL9AddrFact = [
        
    ];

    /**
     * Блок 10. Контактные данные
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL10ContactAType[] $fL10Contact
     */
    private $fL10Contact = [
        
    ];

    /**
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL11IndividualEntrepreneurAType[] $fL11IndividualEntrepreneur
     */
    private $fL11IndividualEntrepreneur = [
        
    ];

    /**
     * Блок 12. Сведения о дееспособности
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL12CapacityAType[] $fL12Capacity
     */
    private $fL12Capacity = [
        
    ];

    /**
     * Блок 13. Сведения по делу о несостоятельности (банкротстве)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL13BankruptcyAType[] $fL13Bankruptcy
     */
    private $fL13Bankruptcy = [
        
    ];

    /**
     * Блок 14. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL14BankruptcyEndAType[] $fL14BankruptcyEnd
     */
    private $fL14BankruptcyEnd = [
        
    ];

    /**
     * Блок 43. Сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL43CollectionAType[] $fL43Collection
     */
    private $fL43Collection = [
        
    ];

    /**
     * Блок 55,57
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL5557GroupRAType[] $fL5557GroupR
     */
    private $fL5557GroupR = [
        
    ];

    /**
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL56ParticipationAType[] $fL56Participation
     */
    private $fL56Participation = [
        
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
     * Gets as fL17DealUidR
     *
     * Блок 17. Идентификатор сделки (необязательный УИд сделки)
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidRType
     */
    public function getFL17DealUidR()
    {
        return $this->fL17DealUidR;
    }

    /**
     * Sets a new fL17DealUidR
     *
     * Блок 17. Идентификатор сделки (необязательный УИд сделки)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidRType $fL17DealUidR
     * @return self
     */
    public function setFL17DealUidR(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidRType $fL17DealUidR = null)
    {
        $this->fL17DealUidR = $fL17DealUidR;
        return $this;
    }

    /**
     * Adds as fL3235Group
     *
     * Блок 32,35
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL3235GroupAType $fL3235Group
     *@return self
     */
    public function addToFL3235Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL3235GroupAType $fL3235Group)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL3235GroupAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL3235GroupAType[] $fL3235Group
     * @return self
     */
    public function setFL3235Group(array $fL3235Group = null)
    {
        $this->fL3235Group = $fL3235Group;
        return $this;
    }

    /**
     * Adds as fL33Warranty
     *
     * Блок 33. Сведения о поручительстве
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL33WarrantyAType $fL33Warranty
     *@return self
     */
    public function addToFL33Warranty(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL33WarrantyAType $fL33Warranty)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL33WarrantyAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL33WarrantyAType[] $fL33Warranty
     * @return self
     */
    public function setFL33Warranty(array $fL33Warranty = null)
    {
        $this->fL33Warranty = $fL33Warranty;
        return $this;
    }

    /**
     * Adds as fL34Guarantee
     *
     * Блок 34. Сведения о независимой гарантии
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL34GuaranteeAType $fL34Guarantee
     *@return self
     */
    public function addToFL34Guarantee(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL34GuaranteeAType $fL34Guarantee)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL34GuaranteeAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL34GuaranteeAType[] $fL34Guarantee
     * @return self
     */
    public function setFL34Guarantee(array $fL34Guarantee = null)
    {
        $this->fL34Guarantee = $fL34Guarantee;
        return $this;
    }

    /**
     * Adds as fL36ProvisionPayment
     *
     * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL36ProvisionPaymentAType $fL36ProvisionPayment
     *@return self
     */
    public function addToFL36ProvisionPayment(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL36ProvisionPaymentAType $fL36ProvisionPayment)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL36ProvisionPaymentAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL36ProvisionPaymentAType[] $fL36ProvisionPayment
     * @return self
     */
    public function setFL36ProvisionPayment(array $fL36ProvisionPayment = null)
    {
        $this->fL36ProvisionPayment = $fL36ProvisionPayment;
        return $this;
    }

    /**
     * Adds as fL37WarrantyReturn
     *
     * Блок 37. Сведения о возмещении принципалом гаранту выплаченной суммы
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL37WarrantyReturnAType $fL37WarrantyReturn
     *@return self
     */
    public function addToFL37WarrantyReturn(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL37WarrantyReturnAType $fL37WarrantyReturn)
    {
        $this->fL37WarrantyReturn[] = $fL37WarrantyReturn;
        return $this;
    }

    /**
     * isset fL37WarrantyReturn
     *
     * Блок 37. Сведения о возмещении принципалом гаранту выплаченной суммы
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL37WarrantyReturn($index)
    {
        return isset($this->fL37WarrantyReturn[$index]);
    }

    /**
     * unset fL37WarrantyReturn
     *
     * Блок 37. Сведения о возмещении принципалом гаранту выплаченной суммы
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL37WarrantyReturn($index)
    {
        unset($this->fL37WarrantyReturn[$index]);
    }

    /**
     * Gets as fL37WarrantyReturn
     *
     * Блок 37. Сведения о возмещении принципалом гаранту выплаченной суммы
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL37WarrantyReturnAType[]
     */
    public function getFL37WarrantyReturn()
    {
        return $this->fL37WarrantyReturn;
    }

    /**
     * Sets a new fL37WarrantyReturn
     *
     * Блок 37. Сведения о возмещении принципалом гаранту выплаченной суммы
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL37WarrantyReturnAType[] $fL37WarrantyReturn
     * @return self
     */
    public function setFL37WarrantyReturn(array $fL37WarrantyReturn = null)
    {
        $this->fL37WarrantyReturn = $fL37WarrantyReturn;
        return $this;
    }

    /**
     * Adds as fL39Court
     *
     * Блок 39. Сведения о судебном споре или требовании по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL39CourtAType $fL39Court
     *@return self
     */
    public function addToFL39Court(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL39CourtAType $fL39Court)
    {
        $this->fL39Court[] = $fL39Court;
        return $this;
    }

    /**
     * isset fL39Court
     *
     * Блок 39. Сведения о судебном споре или требовании по обязательству
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL39Court($index)
    {
        return isset($this->fL39Court[$index]);
    }

    /**
     * unset fL39Court
     *
     * Блок 39. Сведения о судебном споре или требовании по обязательству
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL39Court($index)
    {
        unset($this->fL39Court[$index]);
    }

    /**
     * Gets as fL39Court
     *
     * Блок 39. Сведения о судебном споре или требовании по обязательству
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL39CourtAType[]
     */
    public function getFL39Court()
    {
        return $this->fL39Court;
    }

    /**
     * Sets a new fL39Court
     *
     * Блок 39. Сведения о судебном споре или требовании по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL39CourtAType[] $fL39Court
     * @return self
     */
    public function setFL39Court(array $fL39Court = null)
    {
        $this->fL39Court = $fL39Court;
        return $this;
    }

    /**
     * Adds as fL41SourceBankruptcy
     *
     * Блок 41. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL41SourceBankruptcyAType $fL41SourceBankruptcy
     *@return self
     */
    public function addToFL41SourceBankruptcy(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL41SourceBankruptcyAType $fL41SourceBankruptcy)
    {
        $this->fL41SourceBankruptcy[] = $fL41SourceBankruptcy;
        return $this;
    }

    /**
     * isset fL41SourceBankruptcy
     *
     * Блок 41. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL41SourceBankruptcy($index)
    {
        return isset($this->fL41SourceBankruptcy[$index]);
    }

    /**
     * unset fL41SourceBankruptcy
     *
     * Блок 41. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL41SourceBankruptcy($index)
    {
        unset($this->fL41SourceBankruptcy[$index]);
    }

    /**
     * Gets as fL41SourceBankruptcy
     *
     * Блок 41. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL41SourceBankruptcyAType[]
     */
    public function getFL41SourceBankruptcy()
    {
        return $this->fL41SourceBankruptcy;
    }

    /**
     * Sets a new fL41SourceBankruptcy
     *
     * Блок 41. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL41SourceBankruptcyAType[] $fL41SourceBankruptcy
     * @return self
     */
    public function setFL41SourceBankruptcy(array $fL41SourceBankruptcy = null)
    {
        $this->fL41SourceBankruptcy = $fL41SourceBankruptcy;
        return $this;
    }

    /**
     * Adds as fL42SourceLiquidation
     *
     * Блок 42. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL42SourceLiquidationAType $fL42SourceLiquidation
     *@return self
     */
    public function addToFL42SourceLiquidation(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL42SourceLiquidationAType $fL42SourceLiquidation)
    {
        $this->fL42SourceLiquidation[] = $fL42SourceLiquidation;
        return $this;
    }

    /**
     * isset fL42SourceLiquidation
     *
     * Блок 42. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL42SourceLiquidation($index)
    {
        return isset($this->fL42SourceLiquidation[$index]);
    }

    /**
     * unset fL42SourceLiquidation
     *
     * Блок 42. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL42SourceLiquidation($index)
    {
        unset($this->fL42SourceLiquidation[$index]);
    }

    /**
     * Gets as fL42SourceLiquidation
     *
     * Блок 42. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL42SourceLiquidationAType[]
     */
    public function getFL42SourceLiquidation()
    {
        return $this->fL42SourceLiquidation;
    }

    /**
     * Sets a new fL42SourceLiquidation
     *
     * Блок 42. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL42SourceLiquidationAType[] $fL42SourceLiquidation
     * @return self
     */
    public function setFL42SourceLiquidation(array $fL42SourceLiquidation = null)
    {
        $this->fL42SourceLiquidation = $fL42SourceLiquidation;
        return $this;
    }

    /**
     * Adds as fL45StopSend
     *
     * Блок 45. Сведения о прекращении передачи информации по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL45StopSendAType $fL45StopSend
     *@return self
     */
    public function addToFL45StopSend(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL45StopSendAType $fL45StopSend)
    {
        $this->fL45StopSend[] = $fL45StopSend;
        return $this;
    }

    /**
     * isset fL45StopSend
     *
     * Блок 45. Сведения о прекращении передачи информации по обязательству
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL45StopSend($index)
    {
        return isset($this->fL45StopSend[$index]);
    }

    /**
     * unset fL45StopSend
     *
     * Блок 45. Сведения о прекращении передачи информации по обязательству
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL45StopSend($index)
    {
        unset($this->fL45StopSend[$index]);
    }

    /**
     * Gets as fL45StopSend
     *
     * Блок 45. Сведения о прекращении передачи информации по обязательству
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL45StopSendAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL45StopSendAType[] $fL45StopSend
     * @return self
     */
    public function setFL45StopSend(array $fL45StopSend = null)
    {
        $this->fL45StopSend = $fL45StopSend;
        return $this;
    }

    /**
     * Adds as fL51OrgAcquirer
     *
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL51OrgAcquirerAType $fL51OrgAcquirer
     *@return self
     */
    public function addToFL51OrgAcquirer(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL51OrgAcquirerAType $fL51OrgAcquirer)
    {
        $this->fL51OrgAcquirer[] = $fL51OrgAcquirer;
        return $this;
    }

    /**
     * isset fL51OrgAcquirer
     *
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL51OrgAcquirer($index)
    {
        return isset($this->fL51OrgAcquirer[$index]);
    }

    /**
     * unset fL51OrgAcquirer
     *
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL51OrgAcquirer($index)
    {
        unset($this->fL51OrgAcquirer[$index]);
    }

    /**
     * Gets as fL51OrgAcquirer
     *
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL51OrgAcquirerAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL51OrgAcquirerAType[] $fL51OrgAcquirer
     * @return self
     */
    public function setFL51OrgAcquirer(array $fL51OrgAcquirer = null)
    {
        $this->fL51OrgAcquirer = $fL51OrgAcquirer;
        return $this;
    }

    /**
     * Adds as fL52PersonAcquirer
     *
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL52PersonAcquirerAType $fL52PersonAcquirer
     *@return self
     */
    public function addToFL52PersonAcquirer(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL52PersonAcquirerAType $fL52PersonAcquirer)
    {
        $this->fL52PersonAcquirer[] = $fL52PersonAcquirer;
        return $this;
    }

    /**
     * isset fL52PersonAcquirer
     *
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL52PersonAcquirer($index)
    {
        return isset($this->fL52PersonAcquirer[$index]);
    }

    /**
     * unset fL52PersonAcquirer
     *
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL52PersonAcquirer($index)
    {
        unset($this->fL52PersonAcquirer[$index]);
    }

    /**
     * Gets as fL52PersonAcquirer
     *
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL52PersonAcquirerAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL52PersonAcquirerAType[] $fL52PersonAcquirer
     * @return self
     */
    public function setFL52PersonAcquirer(array $fL52PersonAcquirer = null)
    {
        $this->fL52PersonAcquirer = $fL52PersonAcquirer;
        return $this;
    }

    /**
     * Adds as fL53ServiceOrg
     *
     * Блок 53. Сведения об обслуживающей организации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL53ServiceOrgAType $fL53ServiceOrg
     *@return self
     */
    public function addToFL53ServiceOrg(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL53ServiceOrgAType $fL53ServiceOrg)
    {
        $this->fL53ServiceOrg[] = $fL53ServiceOrg;
        return $this;
    }

    /**
     * isset fL53ServiceOrg
     *
     * Блок 53. Сведения об обслуживающей организации
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL53ServiceOrg($index)
    {
        return isset($this->fL53ServiceOrg[$index]);
    }

    /**
     * unset fL53ServiceOrg
     *
     * Блок 53. Сведения об обслуживающей организации
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL53ServiceOrg($index)
    {
        unset($this->fL53ServiceOrg[$index]);
    }

    /**
     * Gets as fL53ServiceOrg
     *
     * Блок 53. Сведения об обслуживающей организации
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL53ServiceOrgAType[]
     */
    public function getFL53ServiceOrg()
    {
        return $this->fL53ServiceOrg;
    }

    /**
     * Sets a new fL53ServiceOrg
     *
     * Блок 53. Сведения об обслуживающей организации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL53ServiceOrgAType[] $fL53ServiceOrg
     * @return self
     */
    public function setFL53ServiceOrg(array $fL53ServiceOrg = null)
    {
        $this->fL53ServiceOrg = $fL53ServiceOrg;
        return $this;
    }

    /**
     * Adds as fL54Accounting
     *
     * Блок 54. Сведения об учете обязательства
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL54AccountingAType $fL54Accounting
     *@return self
     */
    public function addToFL54Accounting(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL54AccountingAType $fL54Accounting)
    {
        $this->fL54Accounting[] = $fL54Accounting;
        return $this;
    }

    /**
     * isset fL54Accounting
     *
     * Блок 54. Сведения об учете обязательства
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL54Accounting($index)
    {
        return isset($this->fL54Accounting[$index]);
    }

    /**
     * unset fL54Accounting
     *
     * Блок 54. Сведения об учете обязательства
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL54Accounting($index)
    {
        unset($this->fL54Accounting[$index]);
    }

    /**
     * Gets as fL54Accounting
     *
     * Блок 54. Сведения об учете обязательства
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL54AccountingAType[]
     */
    public function getFL54Accounting()
    {
        return $this->fL54Accounting;
    }

    /**
     * Sets a new fL54Accounting
     *
     * Блок 54. Сведения об учете обязательства
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL54AccountingAType[] $fL54Accounting
     * @return self
     */
    public function setFL54Accounting(array $fL54Accounting = null)
    {
        $this->fL54Accounting = $fL54Accounting;
        return $this;
    }

    /**
     * Adds as fL14Group
     *
     * Блок 1,4
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL14GroupAType $fL14Group
     *@return self
     */
    public function addToFL14Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL14GroupAType $fL14Group)
    {
        $this->fL14Group[] = $fL14Group;
        return $this;
    }

    /**
     * isset fL14Group
     *
     * Блок 1,4
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL14Group($index)
    {
        return isset($this->fL14Group[$index]);
    }

    /**
     * unset fL14Group
     *
     * Блок 1,4
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL14Group($index)
    {
        unset($this->fL14Group[$index]);
    }

    /**
     * Gets as fL14Group
     *
     * Блок 1,4
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL14GroupAType[]
     */
    public function getFL14Group()
    {
        return $this->fL14Group;
    }

    /**
     * Sets a new fL14Group
     *
     * Блок 1,4
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL14GroupAType[] $fL14Group
     * @return self
     */
    public function setFL14Group(array $fL14Group = null)
    {
        $this->fL14Group = $fL14Group;
        return $this;
    }

    /**
     * Adds as fL25Group
     *
     * Блок 2,5
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL25GroupAType $fL25Group
     * @return self
     */
    public function addToFL25Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL25GroupAType $fL25Group)
    {
        $this->fL25Group[] = $fL25Group;
        return $this;
    }

    /**
     * isset fL25Group
     *
     * Блок 2,5
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL25Group($index)
    {
        return isset($this->fL25Group[$index]);
    }

    /**
     * unset fL25Group
     *
     * Блок 2,5
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL25Group($index)
    {
        unset($this->fL25Group[$index]);
    }

    /**
     * Gets as fL25Group
     *
     * Блок 2,5
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL25GroupAType[]
     */
    public function getFL25Group()
    {
        return $this->fL25Group;
    }

    /**
     * Sets a new fL25Group
     *
     * Блок 2,5
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL25GroupAType[] $fL25Group
     * @return self
     */
    public function setFL25Group(array $fL25Group = null)
    {
        $this->fL25Group = $fL25Group;
        return $this;
    }

    /**
     * Adds as fL3Birth
     *
     * Блок 3. Дата и место рождения
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL3BirthAType $fL3Birth
     * @return self
     */
    public function addToFL3Birth(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL3BirthAType $fL3Birth)
    {
        $this->fL3Birth[] = $fL3Birth;
        return $this;
    }

    /**
     * isset fL3Birth
     *
     * Блок 3. Дата и место рождения
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL3Birth($index)
    {
        return isset($this->fL3Birth[$index]);
    }

    /**
     * unset fL3Birth
     *
     * Блок 3. Дата и место рождения
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL3Birth($index)
    {
        unset($this->fL3Birth[$index]);
    }

    /**
     * Gets as fL3Birth
     *
     * Блок 3. Дата и место рождения
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL3BirthAType[]
     */
    public function getFL3Birth()
    {
        return $this->fL3Birth;
    }

    /**
     * Sets a new fL3Birth
     *
     * Блок 3. Дата и место рождения
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL3BirthAType[] $fL3Birth
     * @return self
     */
    public function setFL3Birth(array $fL3Birth = null)
    {
        $this->fL3Birth = $fL3Birth;
        return $this;
    }

    /**
     * Adds as fL6Tax
     *
     * Блок 6. Номер налогоплательщика и регистрационный номер
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL6TaxAType $fL6Tax
     * @return self
     */
    public function addToFL6Tax(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL6TaxAType $fL6Tax)
    {
        $this->fL6Tax[] = $fL6Tax;
        return $this;
    }

    /**
     * isset fL6Tax
     *
     * Блок 6. Номер налогоплательщика и регистрационный номер
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL6Tax($index)
    {
        return isset($this->fL6Tax[$index]);
    }

    /**
     * unset fL6Tax
     *
     * Блок 6. Номер налогоплательщика и регистрационный номер
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL6Tax($index)
    {
        unset($this->fL6Tax[$index]);
    }

    /**
     * Gets as fL6Tax
     *
     * Блок 6. Номер налогоплательщика и регистрационный номер
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL6TaxAType[]
     */
    public function getFL6Tax()
    {
        return $this->fL6Tax;
    }

    /**
     * Sets a new fL6Tax
     *
     * Блок 6. Номер налогоплательщика и регистрационный номер
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL6TaxAType[] $fL6Tax
     * @return self
     */
    public function setFL6Tax(array $fL6Tax = null)
    {
        $this->fL6Tax = $fL6Tax;
        return $this;
    }

    /**
     * Adds as fL7Social
     *
     * Блок 7. СНИЛС
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL7SocialAType $fL7Social
     * @return self
     */
    public function addToFL7Social(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL7SocialAType $fL7Social)
    {
        $this->fL7Social[] = $fL7Social;
        return $this;
    }

    /**
     * isset fL7Social
     *
     * Блок 7. СНИЛС
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL7Social($index)
    {
        return isset($this->fL7Social[$index]);
    }

    /**
     * unset fL7Social
     *
     * Блок 7. СНИЛС
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL7Social($index)
    {
        unset($this->fL7Social[$index]);
    }

    /**
     * Gets as fL7Social
     *
     * Блок 7. СНИЛС
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL7SocialAType[]
     */
    public function getFL7Social()
    {
        return $this->fL7Social;
    }

    /**
     * Sets a new fL7Social
     *
     * Блок 7. СНИЛС
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL7SocialAType[] $fL7Social
     * @return self
     */
    public function setFL7Social(array $fL7Social = null)
    {
        $this->fL7Social = $fL7Social;
        return $this;
    }

    /**
     * Adds as fL8AddrReg
     *
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL8AddrRegAType $fL8AddrReg
     * @return self
     */
    public function addToFL8AddrReg(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL8AddrRegAType $fL8AddrReg)
    {
        $this->fL8AddrReg[] = $fL8AddrReg;
        return $this;
    }

    /**
     * isset fL8AddrReg
     *
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL8AddrReg($index)
    {
        return isset($this->fL8AddrReg[$index]);
    }

    /**
     * unset fL8AddrReg
     *
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL8AddrReg($index)
    {
        unset($this->fL8AddrReg[$index]);
    }

    /**
     * Gets as fL8AddrReg
     *
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL8AddrRegAType[]
     */
    public function getFL8AddrReg()
    {
        return $this->fL8AddrReg;
    }

    /**
     * Sets a new fL8AddrReg
     *
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL8AddrRegAType[] $fL8AddrReg
     * @return self
     */
    public function setFL8AddrReg(array $fL8AddrReg = null)
    {
        $this->fL8AddrReg = $fL8AddrReg;
        return $this;
    }

    /**
     * Adds as fL9AddrFact
     *
     * Блок 9. Фактическое место жительства
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL9AddrFactAType $fL9AddrFact
     * @return self
     */
    public function addToFL9AddrFact(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL9AddrFactAType $fL9AddrFact)
    {
        $this->fL9AddrFact[] = $fL9AddrFact;
        return $this;
    }

    /**
     * isset fL9AddrFact
     *
     * Блок 9. Фактическое место жительства
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL9AddrFact($index)
    {
        return isset($this->fL9AddrFact[$index]);
    }

    /**
     * unset fL9AddrFact
     *
     * Блок 9. Фактическое место жительства
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL9AddrFact($index)
    {
        unset($this->fL9AddrFact[$index]);
    }

    /**
     * Gets as fL9AddrFact
     *
     * Блок 9. Фактическое место жительства
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL9AddrFactAType[]
     */
    public function getFL9AddrFact()
    {
        return $this->fL9AddrFact;
    }

    /**
     * Sets a new fL9AddrFact
     *
     * Блок 9. Фактическое место жительства
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL9AddrFactAType[] $fL9AddrFact
     * @return self
     */
    public function setFL9AddrFact(array $fL9AddrFact = null)
    {
        $this->fL9AddrFact = $fL9AddrFact;
        return $this;
    }

    /**
     * Adds as fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL10ContactAType $fL10Contact
     * @return self
     */
    public function addToFL10Contact(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL10ContactAType $fL10Contact)
    {
        $this->fL10Contact[] = $fL10Contact;
        return $this;
    }

    /**
     * isset fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL10Contact($index)
    {
        return isset($this->fL10Contact[$index]);
    }

    /**
     * unset fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL10Contact($index)
    {
        unset($this->fL10Contact[$index]);
    }

    /**
     * Gets as fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL10ContactAType[]
     */
    public function getFL10Contact()
    {
        return $this->fL10Contact;
    }

    /**
     * Sets a new fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL10ContactAType[] $fL10Contact
     * @return self
     */
    public function setFL10Contact(array $fL10Contact = null)
    {
        $this->fL10Contact = $fL10Contact;
        return $this;
    }

    /**
     * Adds as fL11IndividualEntrepreneur
     *
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL11IndividualEntrepreneurAType $fL11IndividualEntrepreneur
     *@return self
     */
    public function addToFL11IndividualEntrepreneur(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL11IndividualEntrepreneurAType $fL11IndividualEntrepreneur)
    {
        $this->fL11IndividualEntrepreneur[] = $fL11IndividualEntrepreneur;
        return $this;
    }

    /**
     * isset fL11IndividualEntrepreneur
     *
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL11IndividualEntrepreneur($index)
    {
        return isset($this->fL11IndividualEntrepreneur[$index]);
    }

    /**
     * unset fL11IndividualEntrepreneur
     *
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL11IndividualEntrepreneur($index)
    {
        unset($this->fL11IndividualEntrepreneur[$index]);
    }

    /**
     * Gets as fL11IndividualEntrepreneur
     *
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL11IndividualEntrepreneurAType[]
     */
    public function getFL11IndividualEntrepreneur()
    {
        return $this->fL11IndividualEntrepreneur;
    }

    /**
     * Sets a new fL11IndividualEntrepreneur
     *
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL11IndividualEntrepreneurAType[] $fL11IndividualEntrepreneur
     * @return self
     */
    public function setFL11IndividualEntrepreneur(array $fL11IndividualEntrepreneur = null)
    {
        $this->fL11IndividualEntrepreneur = $fL11IndividualEntrepreneur;
        return $this;
    }

    /**
     * Adds as fL12Capacity
     *
     * Блок 12. Сведения о дееспособности
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL12CapacityAType $fL12Capacity
     * @return self
     */
    public function addToFL12Capacity(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL12CapacityAType $fL12Capacity)
    {
        $this->fL12Capacity[] = $fL12Capacity;
        return $this;
    }

    /**
     * isset fL12Capacity
     *
     * Блок 12. Сведения о дееспособности
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL12Capacity($index)
    {
        return isset($this->fL12Capacity[$index]);
    }

    /**
     * unset fL12Capacity
     *
     * Блок 12. Сведения о дееспособности
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL12Capacity($index)
    {
        unset($this->fL12Capacity[$index]);
    }

    /**
     * Gets as fL12Capacity
     *
     * Блок 12. Сведения о дееспособности
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL12CapacityAType[]
     */
    public function getFL12Capacity()
    {
        return $this->fL12Capacity;
    }

    /**
     * Sets a new fL12Capacity
     *
     * Блок 12. Сведения о дееспособности
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL12CapacityAType[] $fL12Capacity
     * @return self
     */
    public function setFL12Capacity(array $fL12Capacity = null)
    {
        $this->fL12Capacity = $fL12Capacity;
        return $this;
    }

    /**
     * Adds as fL13Bankruptcy
     *
     * Блок 13. Сведения по делу о несостоятельности (банкротстве)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL13BankruptcyAType $fL13Bankruptcy
     *@return self
     */
    public function addToFL13Bankruptcy(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL13BankruptcyAType $fL13Bankruptcy)
    {
        $this->fL13Bankruptcy[] = $fL13Bankruptcy;
        return $this;
    }

    /**
     * isset fL13Bankruptcy
     *
     * Блок 13. Сведения по делу о несостоятельности (банкротстве)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL13Bankruptcy($index)
    {
        return isset($this->fL13Bankruptcy[$index]);
    }

    /**
     * unset fL13Bankruptcy
     *
     * Блок 13. Сведения по делу о несостоятельности (банкротстве)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL13Bankruptcy($index)
    {
        unset($this->fL13Bankruptcy[$index]);
    }

    /**
     * Gets as fL13Bankruptcy
     *
     * Блок 13. Сведения по делу о несостоятельности (банкротстве)
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL13BankruptcyAType[]
     */
    public function getFL13Bankruptcy()
    {
        return $this->fL13Bankruptcy;
    }

    /**
     * Sets a new fL13Bankruptcy
     *
     * Блок 13. Сведения по делу о несостоятельности (банкротстве)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL13BankruptcyAType[] $fL13Bankruptcy
     * @return self
     */
    public function setFL13Bankruptcy(array $fL13Bankruptcy = null)
    {
        $this->fL13Bankruptcy = $fL13Bankruptcy;
        return $this;
    }

    /**
     * Adds as fL14BankruptcyEnd
     *
     * Блок 14. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL14BankruptcyEndAType $fL14BankruptcyEnd
     *@return self
     */
    public function addToFL14BankruptcyEnd(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL14BankruptcyEndAType $fL14BankruptcyEnd)
    {
        $this->fL14BankruptcyEnd[] = $fL14BankruptcyEnd;
        return $this;
    }

    /**
     * isset fL14BankruptcyEnd
     *
     * Блок 14. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL14BankruptcyEnd($index)
    {
        return isset($this->fL14BankruptcyEnd[$index]);
    }

    /**
     * unset fL14BankruptcyEnd
     *
     * Блок 14. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL14BankruptcyEnd($index)
    {
        unset($this->fL14BankruptcyEnd[$index]);
    }

    /**
     * Gets as fL14BankruptcyEnd
     *
     * Блок 14. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL14BankruptcyEndAType[]
     */
    public function getFL14BankruptcyEnd()
    {
        return $this->fL14BankruptcyEnd;
    }

    /**
     * Sets a new fL14BankruptcyEnd
     *
     * Блок 14. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL14BankruptcyEndAType[] $fL14BankruptcyEnd
     * @return self
     */
    public function setFL14BankruptcyEnd(array $fL14BankruptcyEnd = null)
    {
        $this->fL14BankruptcyEnd = $fL14BankruptcyEnd;
        return $this;
    }

    /**
     * Adds as fL43Collection
     *
     * Блок 43. Сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL43CollectionAType $fL43Collection
     * @return self
     */
    public function addToFL43Collection(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL43CollectionAType $fL43Collection)
    {
        $this->fL43Collection[] = $fL43Collection;
        return $this;
    }

    /**
     * isset fL43Collection
     *
     * Блок 43. Сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL43Collection($index)
    {
        return isset($this->fL43Collection[$index]);
    }

    /**
     * unset fL43Collection
     *
     * Блок 43. Сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL43Collection($index)
    {
        unset($this->fL43Collection[$index]);
    }

    /**
     * Gets as fL43Collection
     *
     * Блок 43. Сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL43CollectionAType[]
     */
    public function getFL43Collection()
    {
        return $this->fL43Collection;
    }

    /**
     * Sets a new fL43Collection
     *
     * Блок 43. Сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL43CollectionAType[] $fL43Collection
     * @return self
     */
    public function setFL43Collection(array $fL43Collection = null)
    {
        $this->fL43Collection = $fL43Collection;
        return $this;
    }

    /**
     * Adds as fL5557GroupR
     *
     * Блок 55,57
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL5557GroupRAType $fL5557GroupR
     * @return self
     */
    public function addToFL5557GroupR(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL5557GroupRAType $fL5557GroupR)
    {
        $this->fL5557GroupR[] = $fL5557GroupR;
        return $this;
    }

    /**
     * isset fL5557GroupR
     *
     * Блок 55,57
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL5557GroupR($index)
    {
        return isset($this->fL5557GroupR[$index]);
    }

    /**
     * unset fL5557GroupR
     *
     * Блок 55,57
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL5557GroupR($index)
    {
        unset($this->fL5557GroupR[$index]);
    }

    /**
     * Gets as fL5557GroupR
     *
     * Блок 55,57
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL5557GroupRAType[]
     */
    public function getFL5557GroupR()
    {
        return $this->fL5557GroupR;
    }

    /**
     * Sets a new fL5557GroupR
     *
     * Блок 55,57
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL5557GroupRAType[] $fL5557GroupR
     * @return self
     */
    public function setFL5557GroupR(array $fL5557GroupR = null)
    {
        $this->fL5557GroupR = $fL5557GroupR;
        return $this;
    }

    /**
     * Adds as fL56Participation
     *
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL56ParticipationAType $fL56Participation
     *@return self
     */
    public function addToFL56Participation(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL56ParticipationAType $fL56Participation)
    {
        $this->fL56Participation[] = $fL56Participation;
        return $this;
    }

    /**
     * isset fL56Participation
     *
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL56Participation($index)
    {
        return isset($this->fL56Participation[$index]);
    }

    /**
     * unset fL56Participation
     *
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL56Participation($index)
    {
        unset($this->fL56Participation[$index]);
    }

    /**
     * Gets as fL56Participation
     *
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL56ParticipationAType[]
     */
    public function getFL56Participation()
    {
        return $this->fL56Participation;
    }

    /**
     * Sets a new fL56Participation
     *
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type\FL56ParticipationAType[] $fL56Participation
     * @return self
     */
    public function setFL56Participation(array $fL56Participation = null)
    {
        $this->fL56Participation = $fL56Participation;
        return $this;
    }
}

