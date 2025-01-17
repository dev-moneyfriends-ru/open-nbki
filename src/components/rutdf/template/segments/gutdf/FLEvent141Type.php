<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent141Type
 *
 * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
 * XSD Type: FL_Event_1_4_1_Type
 */
class FLEvent141Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = EventDataType::OPERATION_CODE_A;

    /**
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @var FL8AddrRegType[] $fL8AddrReg
     */
    private $fL8AddrReg = [
        
    ];

    /**
     * Блок 9. Фактическое место жительства
     *
     * @var FL9AddrFactType $fL9AddrFact
     */
    private $fL9AddrFact = null;

    /**
     * Блок 10. Контактные данные
     *
     * @var FL10ContactType $fL10Contact
     */
    private $fL10Contact = null;

    /**
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @var FL11IndividualEntrepreneurType $fL11IndividualEntrepreneur
     */
    private $fL11IndividualEntrepreneur = null;

    /**
     * Блок 12. Сведения о дееспособности
     *
     * @var FL12CapacityType $fL12Capacity
     */
    private $fL12Capacity = null;

    /**
     * Блок 17. Идентификатор сделки
     *
     * @var FL17DealUidType $fL17DealUid
     */
    private $fL17DealUid = null;

    /**
     * Блок 18. Общие сведения о сделке
     *
     * @var FL18DealType $fL18Deal
     */
    private $fL18Deal = null;

    /**
     * Блок 19. Сумма и валюта обязательства
     *
     * @var FL19AmountType $fL19Amount
     */
    private $fL19Amount = null;

    /**
     * Блок 19(1). Сведения об обеспечиваемом обязательстве
     *
     * @var FL191AmountInfoType[] $fL191AmountInfo
     */
    private $fL191AmountInfo = [
        
    ];

    /**
     * Блок 20. Сведения о солидарных должниках
     *
     * @var FL20JointDebtorsType $fL20JointDebtors
     */
    private $fL20JointDebtors = null;

    /**
     * Блок 21. Сведения об условиях платежей
     *
     * @var FL21PaymentTermsType $fL21PaymentTerms
     */
    private $fL21PaymentTerms = null;

    /**
     * Блок 24. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var FL24FundType[] $fL24Fund
     */
    private $fL24Fund = [
        
    ];

    /**
     * Блок 25-28
     *
     * @var FL25262728GroupType[] $fL25262728Group
     */
    private $fL25262728Group = [
        
    ];

    /**
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @var FL30NonMonetarySourceType[] $fL30NonMonetarySource
     */
    private $fL30NonMonetarySource = [
        
    ];

    /**
     * Блок 31. Сведения о неденежном обязательстве субъекта
     *
     * @var FL31NonMonetarySubjectType[] $fL31NonMonetarySubject
     */
    private $fL31NonMonetarySubject = [
        
    ];

    /**
     * Блок 54. Сведения об учете обязательства
     *
     * @var FL54AccountingType $fL54Accounting
     */
    private $fL54Accounting = null;

    /**
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @var FL55ApplicationType $fL55Application
     */
    private $fL55Application = null;

    /**
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @var FL56ParticipationType $fL56Participation
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
     * @param FL8AddrRegType $fL8AddrReg
     * @return self
     */
    public function addToFL8AddrReg(FL8AddrRegType $fL8AddrReg)
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
     * @return FL8AddrRegType[]
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
     * @param FL8AddrRegType[] $fL8AddrReg
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
     * @return FL9AddrFactType
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
     * @param FL9AddrFactType $fL9AddrFact
     * @return self
     */
    public function setFL9AddrFact(FL9AddrFactType $fL9AddrFact)
    {
        $this->fL9AddrFact = $fL9AddrFact;
        return $this;
    }

    /**
     * Gets as fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @return FL10ContactType
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
     * @param FL10ContactType $fL10Contact
     * @return self
     */
    public function setFL10Contact(FL10ContactType $fL10Contact)
    {
        $this->fL10Contact = $fL10Contact;
        return $this;
    }

    /**
     * Gets as fL11IndividualEntrepreneur
     *
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @return FL11IndividualEntrepreneurType
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
     * @param FL11IndividualEntrepreneurType $fL11IndividualEntrepreneur
     * @return self
     */
    public function setFL11IndividualEntrepreneur(FL11IndividualEntrepreneurType $fL11IndividualEntrepreneur)
    {
        $this->fL11IndividualEntrepreneur = $fL11IndividualEntrepreneur;
        return $this;
    }

    /**
     * Gets as fL12Capacity
     *
     * Блок 12. Сведения о дееспособности
     *
     * @return FL12CapacityType
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
     * @param FL12CapacityType $fL12Capacity
     * @return self
     */
    public function setFL12Capacity(FL12CapacityType $fL12Capacity)
    {
        $this->fL12Capacity = $fL12Capacity;
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
     * Gets as fL18Deal
     *
     * Блок 18. Общие сведения о сделке
     *
     * @return FL18DealType
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
     * @param FL18DealType $fL18Deal
     * @return self
     */
    public function setFL18Deal(FL18DealType $fL18Deal)
    {
        $this->fL18Deal = $fL18Deal;
        return $this;
    }

    /**
     * Gets as fL19Amount
     *
     * Блок 19. Сумма и валюта обязательства
     *
     * @return FL19AmountType
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
     * @param FL19AmountType $fL19Amount
     * @return self
     */
    public function setFL19Amount(FL19AmountType $fL19Amount)
    {
        $this->fL19Amount = $fL19Amount;
        return $this;
    }

    /**
     * Adds as fL191AmountInfo
     *
     * Блок 19(1). Сведения об обеспечиваемом обязательстве
     *
     * @param FL191AmountInfoType $fL191AmountInfo
     *@return self
     */
    public function addToFL191AmountInfo(FL191AmountInfoType $fL191AmountInfo)
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
     * @return FL191AmountInfoType[]
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
     * @param FL191AmountInfoType[] $fL191AmountInfo
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
     * @return FL20JointDebtorsType
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
     * @param FL20JointDebtorsType $fL20JointDebtors
     * @return self
     */
    public function setFL20JointDebtors(FL20JointDebtorsType $fL20JointDebtors)
    {
        $this->fL20JointDebtors = $fL20JointDebtors;
        return $this;
    }

    /**
     * Gets as fL21PaymentTerms
     *
     * Блок 21. Сведения об условиях платежей
     *
     * @return FL21PaymentTermsType
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
     * @param FL21PaymentTermsType $fL21PaymentTerms
     * @return self
     */
    public function setFL21PaymentTerms(FL21PaymentTermsType $fL21PaymentTerms)
    {
        $this->fL21PaymentTerms = $fL21PaymentTerms;
        return $this;
    }

    /**
     * Adds as fL24Fund
     *
     * Блок 24. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param FL24FundType $fL24Fund
     * @return self
     */
    public function addToFL24Fund(FL24FundType $fL24Fund)
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
     * @return FL24FundType[]
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
     * @param FL24FundType[] $fL24Fund
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
     * @param FL25262728GroupType $fL25262728Group
     *@return self
     */
    public function addToFL25262728Group(FL25262728GroupType $fL25262728Group)
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
     * @return FL25262728GroupType[]
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
     * @param FL25262728GroupType[] $fL25262728Group
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
     * @param FL30NonMonetarySourceType $fL30NonMonetarySource
     *@return self
     */
    public function addToFL30NonMonetarySource(FL30NonMonetarySourceType $fL30NonMonetarySource)
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
     * @return FL30NonMonetarySourceType[]
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
     * @param FL30NonMonetarySourceType[] $fL30NonMonetarySource
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
     * @param FL31NonMonetarySubjectType $fL31NonMonetarySubject
     *@return self
     */
    public function addToFL31NonMonetarySubject(FL31NonMonetarySubjectType $fL31NonMonetarySubject)
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
     * @return FL31NonMonetarySubjectType[]
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
     * @param FL31NonMonetarySubjectType[] $fL31NonMonetarySubject
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
     * @return FL54AccountingType
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
     * @param FL54AccountingType $fL54Accounting
     * @return self
     */
    public function setFL54Accounting(FL54AccountingType $fL54Accounting)
    {
        $this->fL54Accounting = $fL54Accounting;
        return $this;
    }

    /**
     * Gets as fL55Application
     *
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @return FL55ApplicationType
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
     * @param FL55ApplicationType $fL55Application
     * @return self
     */
    public function setFL55Application(?FL55ApplicationType $fL55Application = null)
    {
        $this->fL55Application = $fL55Application;
        return $this;
    }

    /**
     * Gets as fL56Participation
     *
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @return FL56ParticipationType
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
     * @param FL56ParticipationType $fL56Participation
     * @return self
     */
    public function setFL56Participation(FL56ParticipationType $fL56Participation)
    {
        $this->fL56Participation = $fL56Participation;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_Event_1_4_1';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю';
    }

    protected function initAttributes()
    {
        $this->addToFL8AddrReg(new FL8AddrRegType($this->template));
        $this->fL9AddrFact = new FL9AddrFactType($this->template);
        $this->fL10Contact = new FL10ContactType($this->template);
        $this->fL11IndividualEntrepreneur = new FL11IndividualEntrepreneurType($this->template);
        $this->fL12Capacity = new FL12CapacityType($this->template);
        $this->fL17DealUid = new FL17DealUidType($this->template);
        $this->fL18Deal = new FL18DealType($this->template);
        $this->fL19Amount = new FL19AmountType($this->template);
        foreach ($this->template->sendData->getAccountReplyRUTDF()->getAmountInfoArray() as $key => $value) {
            $this->addToFL191AmountInfo(new FL191AmountInfoType($this->template, $key));
        }
        $this->fL20JointDebtors = new FL20JointDebtorsType($this->template);
        $this->fL21PaymentTerms = new FL21PaymentTermsType($this->template);
        foreach ($this->template->sendData->getAccountReplyRUTDF()->getFundDateRUTDF() as $key => $value) {
            $this->addToFL24Fund(new FL24FundType($this->template, $key));
        }
        $this->addToFL25262728Group(new FL25262728GroupType($this->template));
        foreach ($this->template->sendData->getAccountReplyRUTDF()->getAmountInfoArray() as $key => $value) {
            $this->addToFL30NonMonetarySource(new FL30NonMonetarySourceType($this->template, $key));
        }
        foreach ($this->template->sendData->getAccountReplyRUTDF()->getAmountInfoArray() as $key => $value) {
            $this->addToFL31NonMonetarySubject(new FL31NonMonetarySubjectType($this->template, $key));
        }
        $this->fL54Accounting = new FL54AccountingType($this->template);
        $this->fL55Application = new FL55ApplicationType($this->template);
        $this->fL56Participation = new FL56ParticipationType($this->template);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fL8AddrReg',
            'fL9AddrFact',
            'fL10Contact',
            'fL11IndividualEntrepreneur',
            'fL12Capacity',
            'fL17DealUid',
            'fL18Deal',
            'fL19Amount',
            'fL191AmountInfo',
            'fL20JointDebtors',
            'fL21PaymentTerms',
            'fL24Fund',
            'fL25262728Group',
            'fL30NonMonetarySource',
            'fL31NonMonetarySubject',
            'fL54Accounting',
            'fL55Application',
            'fL56Participation',
        ];
    }
}

