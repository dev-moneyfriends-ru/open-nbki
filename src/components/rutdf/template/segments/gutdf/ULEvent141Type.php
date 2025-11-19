<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent141Type
 *
 * Субъект и источник заключили договор лизинга либо поручительства по лизингу, и предмет лизинга передан лизингополучателю
 * XSD Type: UL_Event_1_4_1_Type
 */
class ULEvent141Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = EventDataType::OPERATION_CODE_A;

    /**
     * Блок 10. Идентификатор сделки
     *
     * @var UL10DealUidType $uL10DealUid
     */
    private $uL10DealUid = null;

    /**
     * Блок 11. Общие сведения о сделке
     *
     * @var UL11DealType $uL11Deal
     */
    private $uL11Deal = null;

    /**
     * Блок 12. Сумма и валюта обязательства
     *
     * @var UL12AmountType $uL12Amount
     */
    private $uL12Amount = null;

    /**
     * Блок 12(1). Сведения об обеспечиваемом обязательстве
     *
     * @var UL121AmountInfoType[] $uL121AmountInfo
     */
    private $uL121AmountInfo = [
        
    ];

    /**
     * Блок 13. Сведения о солидарных должниках
     *
     * @var UL13JointDebtorsType $uL13JointDebtors
     */
    private $uL13JointDebtors = null;

    /**
     * Блок 14. Сведения об условиях платежей
     *
     * @var UL14PaymentTermsType $uL14PaymentTerms
     */
    private $uL14PaymentTerms = null;

    /**
     * Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var UL16FundType[] $uL16Fund
     */
    private $uL16Fund = [
        
    ];

    /**
     * Блок 17-20
     *
     * @var UL17181920GroupType $uL17181920Group
     */
    private $uL17181920Group = null;

    /**
     * Блок 21. Сведения о неденежном обязательстве источника
     *
     * @var UL21NonMonetarySourceType[] $uL21NonMonetarySource
     */
    private $uL21NonMonetarySource = [
        
    ];

    /**
     * Блок 22. Сведения о неденежном обязательстве субъекта
     *
     * @var UL22NonMonetarySubjectType[] $uL22NonMonetarySubject
     */
    private $uL22NonMonetarySubject = [
        
    ];

    /**
     * Блок 44. Сведения об учете задолженности
     *
     * @var UL44AccountingType $uL44Accounting
     */
    private $uL44Accounting = null;

    /**
     * Блок 45. Сведения об обращении
     *
     * @var UL45ApplicationType $uL45Application
     */
    private $uL45Application = null;

    /**
     * Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @var UL46ParticipationType $uL46Participation
     */
    private $uL46Participation = null;

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
     * Gets as uL11Deal
     *
     * Блок 11. Общие сведения о сделке
     *
     * @return UL11DealType
     */
    public function getUL11Deal()
    {
        return $this->uL11Deal;
    }

    /**
     * Sets a new uL11Deal
     *
     * Блок 11. Общие сведения о сделке
     *
     * @param UL11DealType $uL11Deal
     * @return self
     */
    public function setUL11Deal(UL11DealType $uL11Deal)
    {
        $this->uL11Deal = $uL11Deal;
        return $this;
    }

    /**
     * Gets as uL12Amount
     *
     * Блок 12. Сумма и валюта обязательства
     *
     * @return UL12AmountType
     */
    public function getUL12Amount()
    {
        return $this->uL12Amount;
    }

    /**
     * Sets a new uL12Amount
     *
     * Блок 12. Сумма и валюта обязательства
     *
     * @param UL12AmountType $uL12Amount
     * @return self
     */
    public function setUL12Amount(UL12AmountType $uL12Amount)
    {
        $this->uL12Amount = $uL12Amount;
        return $this;
    }

    /**
     * Adds as uL121AmountInfo
     *
     * Блок 12(1). Сведения об обеспечиваемом обязательстве
     *
     * @param UL121AmountInfoType $uL121AmountInfo
     *@return self
     */
    public function addToUL121AmountInfo(UL121AmountInfoType $uL121AmountInfo)
    {
        $this->uL121AmountInfo[] = $uL121AmountInfo;
        return $this;
    }

    /**
     * isset uL121AmountInfo
     *
     * Блок 12(1). Сведения об обеспечиваемом обязательстве
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL121AmountInfo($index)
    {
        return isset($this->uL121AmountInfo[$index]);
    }

    /**
     * unset uL121AmountInfo
     *
     * Блок 12(1). Сведения об обеспечиваемом обязательстве
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL121AmountInfo($index)
    {
        unset($this->uL121AmountInfo[$index]);
    }

    /**
     * Gets as uL121AmountInfo
     *
     * Блок 12(1). Сведения об обеспечиваемом обязательстве
     *
     * @return UL121AmountInfoType[]
     */
    public function getUL121AmountInfo()
    {
        return $this->uL121AmountInfo;
    }

    /**
     * Sets a new uL121AmountInfo
     *
     * Блок 12(1). Сведения об обеспечиваемом обязательстве
     *
     * @param UL121AmountInfoType[] $uL121AmountInfo
     * @return self
     */
    public function setUL121AmountInfo(array $uL121AmountInfo)
    {
        $this->uL121AmountInfo = $uL121AmountInfo;
        return $this;
    }

    /**
     * Gets as uL13JointDebtors
     *
     * Блок 13. Сведения о солидарных должниках
     *
     * @return UL13JointDebtorsType
     */
    public function getUL13JointDebtors()
    {
        return $this->uL13JointDebtors;
    }

    /**
     * Sets a new uL13JointDebtors
     *
     * Блок 13. Сведения о солидарных должниках
     *
     * @param UL13JointDebtorsType $uL13JointDebtors
     * @return self
     */
    public function setUL13JointDebtors(UL13JointDebtorsType $uL13JointDebtors)
    {
        $this->uL13JointDebtors = $uL13JointDebtors;
        return $this;
    }

    /**
     * Gets as uL14PaymentTerms
     *
     * Блок 14. Сведения об условиях платежей
     *
     * @return UL14PaymentTermsType
     */
    public function getUL14PaymentTerms()
    {
        return $this->uL14PaymentTerms;
    }

    /**
     * Sets a new uL14PaymentTerms
     *
     * Блок 14. Сведения об условиях платежей
     *
     * @param UL14PaymentTermsType $uL14PaymentTerms
     * @return self
     */
    public function setUL14PaymentTerms(UL14PaymentTermsType $uL14PaymentTerms)
    {
        $this->uL14PaymentTerms = $uL14PaymentTerms;
        return $this;
    }

    /**
     * Adds as uL16Fund
     *
     * Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param UL16FundType $uL16Fund
     * @return self
     */
    public function addToUL16Fund(UL16FundType $uL16Fund)
    {
        $this->uL16Fund[] = $uL16Fund;
        return $this;
    }

    /**
     * isset uL16Fund
     *
     * Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL16Fund($index)
    {
        return isset($this->uL16Fund[$index]);
    }

    /**
     * unset uL16Fund
     *
     * Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL16Fund($index)
    {
        unset($this->uL16Fund[$index]);
    }

    /**
     * Gets as uL16Fund
     *
     * Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @return UL16FundType[]
     */
    public function getUL16Fund()
    {
        return $this->uL16Fund;
    }

    /**
     * Sets a new uL16Fund
     *
     * Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param UL16FundType[] $uL16Fund
     * @return self
     */
    public function setUL16Fund(array $uL16Fund)
    {
        $this->uL16Fund = $uL16Fund;
        return $this;
    }

    /**
     * Gets as uL17181920Group
     *
     * Блок 17-20
     *
     * @return UL17181920GroupType
     */
    public function getUL17181920Group()
    {
        return $this->uL17181920Group;
    }

    /**
     * Sets a new uL17181920Group
     *
     * Блок 17-20
     *
     * @param UL17181920GroupType $uL17181920Group
     * @return self
     */
    public function setUL17181920Group(UL17181920GroupType $uL17181920Group)
    {
        $this->uL17181920Group = $uL17181920Group;
        return $this;
    }

    /**
     * Adds as uL21NonMonetarySource
     *
     * Блок 21. Сведения о неденежном обязательстве источника
     *
     * @param UL21NonMonetarySourceType $uL21NonMonetarySource
     *@return self
     */
    public function addToUL21NonMonetarySource(UL21NonMonetarySourceType $uL21NonMonetarySource)
    {
        $this->uL21NonMonetarySource[] = $uL21NonMonetarySource;
        return $this;
    }

    /**
     * isset uL21NonMonetarySource
     *
     * Блок 21. Сведения о неденежном обязательстве источника
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL21NonMonetarySource($index)
    {
        return isset($this->uL21NonMonetarySource[$index]);
    }

    /**
     * unset uL21NonMonetarySource
     *
     * Блок 21. Сведения о неденежном обязательстве источника
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL21NonMonetarySource($index)
    {
        unset($this->uL21NonMonetarySource[$index]);
    }

    /**
     * Gets as uL21NonMonetarySource
     *
     * Блок 21. Сведения о неденежном обязательстве источника
     *
     * @return UL21NonMonetarySourceType[]
     */
    public function getUL21NonMonetarySource()
    {
        return $this->uL21NonMonetarySource;
    }

    /**
     * Sets a new uL21NonMonetarySource
     *
     * Блок 21. Сведения о неденежном обязательстве источника
     *
     * @param UL21NonMonetarySourceType[] $uL21NonMonetarySource
     * @return self
     */
    public function setUL21NonMonetarySource(array $uL21NonMonetarySource = null)
    {
        $this->uL21NonMonetarySource = $uL21NonMonetarySource;
        return $this;
    }

    /**
     * Adds as uL22NonMonetarySubject
     *
     * Блок 22. Сведения о неденежном обязательстве субъекта
     *
     * @param UL22NonMonetarySubjectType $uL22NonMonetarySubject
     *@return self
     */
    public function addToUL22NonMonetarySubject(UL22NonMonetarySubjectType $uL22NonMonetarySubject)
    {
        $this->uL22NonMonetarySubject[] = $uL22NonMonetarySubject;
        return $this;
    }

    /**
     * isset uL22NonMonetarySubject
     *
     * Блок 22. Сведения о неденежном обязательстве субъекта
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL22NonMonetarySubject($index)
    {
        return isset($this->uL22NonMonetarySubject[$index]);
    }

    /**
     * unset uL22NonMonetarySubject
     *
     * Блок 22. Сведения о неденежном обязательстве субъекта
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL22NonMonetarySubject($index)
    {
        unset($this->uL22NonMonetarySubject[$index]);
    }

    /**
     * Gets as uL22NonMonetarySubject
     *
     * Блок 22. Сведения о неденежном обязательстве субъекта
     *
     * @return UL22NonMonetarySubjectType[]
     */
    public function getUL22NonMonetarySubject()
    {
        return $this->uL22NonMonetarySubject;
    }

    /**
     * Sets a new uL22NonMonetarySubject
     *
     * Блок 22. Сведения о неденежном обязательстве субъекта
     *
     * @param UL22NonMonetarySubjectType[] $uL22NonMonetarySubject
     * @return self
     */
    public function setUL22NonMonetarySubject(array $uL22NonMonetarySubject = null)
    {
        $this->uL22NonMonetarySubject = $uL22NonMonetarySubject;
        return $this;
    }

    /**
     * Gets as uL44Accounting
     *
     * Блок 44. Сведения об учете задолженности
     *
     * @return UL44AccountingType
     */
    public function getUL44Accounting()
    {
        return $this->uL44Accounting;
    }

    /**
     * Sets a new uL44Accounting
     *
     * Блок 44. Сведения об учете задолженности
     *
     * @param UL44AccountingType $uL44Accounting
     * @return self
     */
    public function setUL44Accounting(UL44AccountingType $uL44Accounting)
    {
        $this->uL44Accounting = $uL44Accounting;
        return $this;
    }

    /**
     * Gets as uL45Application
     *
     * Блок 45. Сведения об обращении
     *
     * @return UL45ApplicationType
     */
    public function getUL45Application()
    {
        return $this->uL45Application;
    }

    /**
     * Sets a new uL45Application
     *
     * Блок 45. Сведения об обращении
     *
     * @param UL45ApplicationType $uL45Application
     * @return self
     */
    public function setUL45Application(?UL45ApplicationType $uL45Application = null)
    {
        $this->uL45Application = $uL45Application;
        return $this;
    }

    /**
     * Gets as uL46Participation
     *
     * Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @return UL46ParticipationType
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
     * @param UL46ParticipationType $uL46Participation
     * @return self
     */
    public function setUL46Participation(UL46ParticipationType $uL46Participation)
    {
        $this->uL46Participation = $uL46Participation;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_Event_1_4_1';
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
        $this->setUL10DealUid(new UL10DealUidType($this->template));
        $this->setUL11Deal(new UL11DealType($this->template));
        $this->setUL12Amount(new UL12AmountType($this->template));

        foreach ($this->sendData->getAccountReplyRUTDF()->getAmountInfoArray() as $key => $value) {
            $this->addToUL121AmountInfo(new UL121AmountInfoType($this->template, $key));
        }

        $this->setUL13JointDebtors(new UL13JointDebtorsType($this->template));
        $this->setUL14PaymentTerms(new UL14PaymentTermsType($this->template));

        foreach ($this->sendData->getAccountReplyRUTDF()->getFundDateRUTDF() as $key => $value) {
            $this->addToUL16Fund(new UL16FundType($this->template, $key));
        }

        $this->setUL17181920Group(new UL17181920GroupType($this->template));

        foreach ($this->sendData->getAccountReplyRUTDF()->getSourceNonMonetObligArray() as $key => $value) {
            $this->addToUL21NonMonetarySource(new UL21NonMonetarySourceType($this->template, $key));
        }

        foreach ($this->sendData->getAccountReplyRUTDF()->getSubjectNonMonetObligArray() as $key => $value) {
            $this->addToUL22NonMonetarySubject(new UL22NonMonetarySubjectType($this->template, $key));
        }

        $this->setUL44Accounting(new UL44AccountingType($this->template));
        $this->setUL45Application(new UL45ApplicationType($this->template));
        $this->setUL46Participation(new UL46ParticipationType($this->template));
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'uL10DealUid',
            'uL11Deal',
            'uL12Amount',
            'uL121AmountInfo',
            'uL13JointDebtors',
            'uL14PaymentTerms',
            'uL16Fund',
            'uL17181920Group',
            'uL21NonMonetarySource',
            'uL22NonMonetarySubject',
            'uL44Accounting',
            'uL45Application',
            'uL46Participation',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [];
    }
}

