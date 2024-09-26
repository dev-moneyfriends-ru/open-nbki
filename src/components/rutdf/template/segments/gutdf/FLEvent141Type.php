<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent141Type
 *
 * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
 * XSD Type: FL_Event_1_4_1_Type
 */
class FLEvent141Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType[] $fL8AddrReg
     */
    private $fL8AddrReg = [
        
    ];

    /**
     * Блок 9. Фактическое место жительства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType $fL9AddrFact
     */
    private $fL9AddrFact = null;

    /**
     * Блок 10. Контактные данные
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType $fL10Contact
     */
    private $fL10Contact = null;

    /**
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL11IndividualEntrepreneurType $fL11IndividualEntrepreneur
     */
    private $fL11IndividualEntrepreneur = null;

    /**
     * Блок 12. Сведения о дееспособности
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12Capacity
     */
    private $fL12Capacity = null;

    /**
     * Блок 17. Идентификатор сделки
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidType $fL17DealUid
     */
    private $fL17DealUid = null;

    /**
     * Блок 18. Общие сведения о сделке
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL18DealType $fL18Deal
     */
    private $fL18Deal = null;

    /**
     * Блок 19. Сумма и валюта обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL19AmountType $fL19Amount
     */
    private $fL19Amount = null;

    /**
     * Блок 19(1). Сведения об обеспечиваемом обязательстве
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL191AmountInfoType[] $fL191AmountInfo
     */
    private $fL191AmountInfo = [
        
    ];

    /**
     * Блок 20. Сведения о солидарных должниках
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL20JointDebtorsType $fL20JointDebtors
     */
    private $fL20JointDebtors = null;

    /**
     * Блок 21. Сведения об условиях платежей
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL21PaymentTermsType $fL21PaymentTerms
     */
    private $fL21PaymentTerms = null;

    /**
     * Блок 24. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL24FundType[] $fL24Fund
     */
    private $fL24Fund = [
        
    ];

    /**
     * Блок 25-28
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType[] $fL25262728Group
     */
    private $fL25262728Group = [
        
    ];

    /**
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL30NonMonetarySourceType[] $fL30NonMonetarySource
     */
    private $fL30NonMonetarySource = [
        
    ];

    /**
     * Блок 31. Сведения о неденежном обязательстве субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL31NonMonetarySubjectType[] $fL31NonMonetarySubject
     */
    private $fL31NonMonetarySubject = [
        
    ];

    /**
     * Блок 54. Сведения об учете обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54Accounting
     */
    private $fL54Accounting = null;

    /**
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL55ApplicationType $fL55Application
     */
    private $fL55Application = null;

    /**
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType $fL56Participation
     */
    private $fL56Participation = null;

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
     * Adds as fL8AddrReg
     *
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType $fL8AddrReg
     *@return self
     */
    public function addToFL8AddrReg(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType $fL8AddrReg)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType[] $fL8AddrReg
     * @return self
     */
    public function setFL8AddrReg(array $fL8AddrReg)
    {
        $this->fL8AddrReg = $fL8AddrReg;
        return $this;
    }

    /**
     * Gets as fL9AddrFact
     *
     * Блок 9. Фактическое место жительства
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType $fL9AddrFact
     * @return self
     */
    public function setFL9AddrFact(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType $fL9AddrFact)
    {
        $this->fL9AddrFact = $fL9AddrFact;
        return $this;
    }

    /**
     * Gets as fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType $fL10Contact
     * @return self
     */
    public function setFL10Contact(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType $fL10Contact)
    {
        $this->fL10Contact = $fL10Contact;
        return $this;
    }

    /**
     * Gets as fL11IndividualEntrepreneur
     *
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL11IndividualEntrepreneurType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL11IndividualEntrepreneurType $fL11IndividualEntrepreneur
     * @return self
     */
    public function setFL11IndividualEntrepreneur(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL11IndividualEntrepreneurType $fL11IndividualEntrepreneur)
    {
        $this->fL11IndividualEntrepreneur = $fL11IndividualEntrepreneur;
        return $this;
    }

    /**
     * Gets as fL12Capacity
     *
     * Блок 12. Сведения о дееспособности
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12Capacity
     * @return self
     */
    public function setFL12Capacity(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12Capacity)
    {
        $this->fL12Capacity = $fL12Capacity;
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
     * Gets as fL18Deal
     *
     * Блок 18. Общие сведения о сделке
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL18DealType
     */
    public function getFL18Deal()
    {
        return $this->fL18Deal;
    }

    /**
     * Sets a new fL18Deal
     *
     * Блок 18. Общие сведения о сделке
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL18DealType $fL18Deal
     * @return self
     */
    public function setFL18Deal(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL18DealType $fL18Deal)
    {
        $this->fL18Deal = $fL18Deal;
        return $this;
    }

    /**
     * Gets as fL19Amount
     *
     * Блок 19. Сумма и валюта обязательства
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL19AmountType
     */
    public function getFL19Amount()
    {
        return $this->fL19Amount;
    }

    /**
     * Sets a new fL19Amount
     *
     * Блок 19. Сумма и валюта обязательства
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL19AmountType $fL19Amount
     * @return self
     */
    public function setFL19Amount(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL19AmountType $fL19Amount)
    {
        $this->fL19Amount = $fL19Amount;
        return $this;
    }

    /**
     * Adds as fL191AmountInfo
     *
     * Блок 19(1). Сведения об обеспечиваемом обязательстве
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL191AmountInfoType $fL191AmountInfo
     *@return self
     */
    public function addToFL191AmountInfo(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL191AmountInfoType $fL191AmountInfo)
    {
        $this->fL191AmountInfo[] = $fL191AmountInfo;
        return $this;
    }

    /**
     * isset fL191AmountInfo
     *
     * Блок 19(1). Сведения об обеспечиваемом обязательстве
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL191AmountInfo($index)
    {
        return isset($this->fL191AmountInfo[$index]);
    }

    /**
     * unset fL191AmountInfo
     *
     * Блок 19(1). Сведения об обеспечиваемом обязательстве
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL191AmountInfo($index)
    {
        unset($this->fL191AmountInfo[$index]);
    }

    /**
     * Gets as fL191AmountInfo
     *
     * Блок 19(1). Сведения об обеспечиваемом обязательстве
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL191AmountInfoType[]
     */
    public function getFL191AmountInfo()
    {
        return $this->fL191AmountInfo;
    }

    /**
     * Sets a new fL191AmountInfo
     *
     * Блок 19(1). Сведения об обеспечиваемом обязательстве
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL191AmountInfoType[] $fL191AmountInfo
     * @return self
     */
    public function setFL191AmountInfo(array $fL191AmountInfo)
    {
        $this->fL191AmountInfo = $fL191AmountInfo;
        return $this;
    }

    /**
     * Gets as fL20JointDebtors
     *
     * Блок 20. Сведения о солидарных должниках
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL20JointDebtorsType
     */
    public function getFL20JointDebtors()
    {
        return $this->fL20JointDebtors;
    }

    /**
     * Sets a new fL20JointDebtors
     *
     * Блок 20. Сведения о солидарных должниках
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL20JointDebtorsType $fL20JointDebtors
     * @return self
     */
    public function setFL20JointDebtors(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL20JointDebtorsType $fL20JointDebtors)
    {
        $this->fL20JointDebtors = $fL20JointDebtors;
        return $this;
    }

    /**
     * Gets as fL21PaymentTerms
     *
     * Блок 21. Сведения об условиях платежей
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL21PaymentTermsType
     */
    public function getFL21PaymentTerms()
    {
        return $this->fL21PaymentTerms;
    }

    /**
     * Sets a new fL21PaymentTerms
     *
     * Блок 21. Сведения об условиях платежей
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL21PaymentTermsType $fL21PaymentTerms
     * @return self
     */
    public function setFL21PaymentTerms(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL21PaymentTermsType $fL21PaymentTerms)
    {
        $this->fL21PaymentTerms = $fL21PaymentTerms;
        return $this;
    }

    /**
     * Adds as fL24Fund
     *
     * Блок 24. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL24FundType $fL24Fund
     *@return self
     */
    public function addToFL24Fund(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL24FundType $fL24Fund)
    {
        $this->fL24Fund[] = $fL24Fund;
        return $this;
    }

    /**
     * isset fL24Fund
     *
     * Блок 24. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL24Fund($index)
    {
        return isset($this->fL24Fund[$index]);
    }

    /**
     * unset fL24Fund
     *
     * Блок 24. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL24Fund($index)
    {
        unset($this->fL24Fund[$index]);
    }

    /**
     * Gets as fL24Fund
     *
     * Блок 24. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL24FundType[]
     */
    public function getFL24Fund()
    {
        return $this->fL24Fund;
    }

    /**
     * Sets a new fL24Fund
     *
     * Блок 24. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL24FundType[] $fL24Fund
     * @return self
     */
    public function setFL24Fund(array $fL24Fund)
    {
        $this->fL24Fund = $fL24Fund;
        return $this;
    }

    /**
     * Adds as fL25262728Group
     *
     * Блок 25-28
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType $fL25262728Group
     *@return self
     */
    public function addToFL25262728Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType $fL25262728Group)
    {
        $this->fL25262728Group[] = $fL25262728Group;
        return $this;
    }

    /**
     * isset fL25262728Group
     *
     * Блок 25-28
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL25262728Group($index)
    {
        return isset($this->fL25262728Group[$index]);
    }

    /**
     * unset fL25262728Group
     *
     * Блок 25-28
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL25262728Group($index)
    {
        unset($this->fL25262728Group[$index]);
    }

    /**
     * Gets as fL25262728Group
     *
     * Блок 25-28
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType[]
     */
    public function getFL25262728Group()
    {
        return $this->fL25262728Group;
    }

    /**
     * Sets a new fL25262728Group
     *
     * Блок 25-28
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType[] $fL25262728Group
     * @return self
     */
    public function setFL25262728Group(array $fL25262728Group)
    {
        $this->fL25262728Group = $fL25262728Group;
        return $this;
    }

    /**
     * Adds as fL30NonMonetarySource
     *
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL30NonMonetarySourceType $fL30NonMonetarySource
     *@return self
     */
    public function addToFL30NonMonetarySource(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL30NonMonetarySourceType $fL30NonMonetarySource)
    {
        $this->fL30NonMonetarySource[] = $fL30NonMonetarySource;
        return $this;
    }

    /**
     * isset fL30NonMonetarySource
     *
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL30NonMonetarySource($index)
    {
        return isset($this->fL30NonMonetarySource[$index]);
    }

    /**
     * unset fL30NonMonetarySource
     *
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL30NonMonetarySource($index)
    {
        unset($this->fL30NonMonetarySource[$index]);
    }

    /**
     * Gets as fL30NonMonetarySource
     *
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL30NonMonetarySourceType[]
     */
    public function getFL30NonMonetarySource()
    {
        return $this->fL30NonMonetarySource;
    }

    /**
     * Sets a new fL30NonMonetarySource
     *
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL30NonMonetarySourceType[] $fL30NonMonetarySource
     * @return self
     */
    public function setFL30NonMonetarySource(array $fL30NonMonetarySource = null)
    {
        $this->fL30NonMonetarySource = $fL30NonMonetarySource;
        return $this;
    }

    /**
     * Adds as fL31NonMonetarySubject
     *
     * Блок 31. Сведения о неденежном обязательстве субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL31NonMonetarySubjectType $fL31NonMonetarySubject
     *@return self
     */
    public function addToFL31NonMonetarySubject(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL31NonMonetarySubjectType $fL31NonMonetarySubject)
    {
        $this->fL31NonMonetarySubject[] = $fL31NonMonetarySubject;
        return $this;
    }

    /**
     * isset fL31NonMonetarySubject
     *
     * Блок 31. Сведения о неденежном обязательстве субъекта
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL31NonMonetarySubject($index)
    {
        return isset($this->fL31NonMonetarySubject[$index]);
    }

    /**
     * unset fL31NonMonetarySubject
     *
     * Блок 31. Сведения о неденежном обязательстве субъекта
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL31NonMonetarySubject($index)
    {
        unset($this->fL31NonMonetarySubject[$index]);
    }

    /**
     * Gets as fL31NonMonetarySubject
     *
     * Блок 31. Сведения о неденежном обязательстве субъекта
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL31NonMonetarySubjectType[]
     */
    public function getFL31NonMonetarySubject()
    {
        return $this->fL31NonMonetarySubject;
    }

    /**
     * Sets a new fL31NonMonetarySubject
     *
     * Блок 31. Сведения о неденежном обязательстве субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL31NonMonetarySubjectType[] $fL31NonMonetarySubject
     * @return self
     */
    public function setFL31NonMonetarySubject(array $fL31NonMonetarySubject = null)
    {
        $this->fL31NonMonetarySubject = $fL31NonMonetarySubject;
        return $this;
    }

    /**
     * Gets as fL54Accounting
     *
     * Блок 54. Сведения об учете обязательства
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54Accounting
     * @return self
     */
    public function setFL54Accounting(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54Accounting)
    {
        $this->fL54Accounting = $fL54Accounting;
        return $this;
    }

    /**
     * Gets as fL55Application
     *
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL55ApplicationType
     */
    public function getFL55Application()
    {
        return $this->fL55Application;
    }

    /**
     * Sets a new fL55Application
     *
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL55ApplicationType $fL55Application
     * @return self
     */
    public function setFL55Application(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL55ApplicationType $fL55Application = null)
    {
        $this->fL55Application = $fL55Application;
        return $this;
    }

    /**
     * Gets as fL56Participation
     *
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType $fL56Participation
     * @return self
     */
    public function setFL56Participation(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType $fL56Participation)
    {
        $this->fL56Participation = $fL56Participation;
        return $this;
    }
}

