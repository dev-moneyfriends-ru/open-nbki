<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent21Type
 *
 * Изменились сведения об условиях обязательства субъекта
 * XSD Type: UL_Event_2_1_Type
 */
class ULEvent21Type extends EventDataType
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
     * Блок 14. Сведения об условиях платежей
     *
     * @var UL14PaymentTermsType $uL14PaymentTerms
     */
    private $uL14PaymentTerms = null;

    /**
     * Блок 17-20
     *
     * @var UL17181920GroupType $uL17181920Group
     */
    private $uL17181920Group = null;

    /**
     * Блок 22. Сведения о неденежном обязательстве субъекта
     *
     * @var UL22NonMonetarySubjectType[] $uL22NonMonetarySubject
     */
    private $uL22NonMonetarySubject = [
        
    ];

    /**
     * Блок 13. Сведения о солидарных должниках
     *
     * @var UL13JointDebtorsType $uL13JointDebtors
     */
    private $uL13JointDebtors = null;

    /**
     * Блок 15. Сведения об изменении договора
     *
     * @var UL15ContractChangesType[] $uL15ContractChanges
     */
    private $uL15ContractChanges = [
        
    ];

    /**
     * Блок 15(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
     *
     * @var UL151ContractTermsChangesType[] $uL151ContractTermsChanges
     */
    private $uL151ContractTermsChanges = [
        
    ];

    /**
     * Блок 21. Сведения о неденежном обязательстве источника
     *
     * @var UL21NonMonetarySourceType[] $uL21NonMonetarySource
     */
    private $uL21NonMonetarySource = [
        
    ];

    /**
     * Блок 44. Сведения об учете обязательства
     *
     * @var UL44AccountingType $uL44Accounting
     */
    private $uL44Accounting = null;

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
    public function setUL12Amount(?UL12AmountType $uL12Amount = null)
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
    public function setUL121AmountInfo(array $uL121AmountInfo = null)
    {
        $this->uL121AmountInfo = $uL121AmountInfo;
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
    public function setUL14PaymentTerms(?UL14PaymentTermsType $uL14PaymentTerms = null)
    {
        $this->uL14PaymentTerms = $uL14PaymentTerms;
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
    public function setUL17181920Group(?UL17181920GroupType $uL17181920Group = null)
    {
        $this->uL17181920Group = $uL17181920Group;
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
     * Adds as uL15ContractChanges
     *
     * Блок 15. Сведения об изменении договора
     *
     * @param UL15ContractChangesType $uL15ContractChanges
     *@return self
     */
    public function addToUL15ContractChanges(UL15ContractChangesType $uL15ContractChanges)
    {
        $this->uL15ContractChanges[] = $uL15ContractChanges;
        return $this;
    }

    /**
     * isset uL15ContractChanges
     *
     * Блок 15. Сведения об изменении договора
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL15ContractChanges($index)
    {
        return isset($this->uL15ContractChanges[$index]);
    }

    /**
     * unset uL15ContractChanges
     *
     * Блок 15. Сведения об изменении договора
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL15ContractChanges($index)
    {
        unset($this->uL15ContractChanges[$index]);
    }

    /**
     * Gets as uL15ContractChanges
     *
     * Блок 15. Сведения об изменении договора
     *
     * @return UL15ContractChangesType[]
     */
    public function getUL15ContractChanges()
    {
        return $this->uL15ContractChanges;
    }

    /**
     * Sets a new uL15ContractChanges
     *
     * Блок 15. Сведения об изменении договора
     *
     * @param UL15ContractChangesType[] $uL15ContractChanges
     * @return self
     */
    public function setUL15ContractChanges(array $uL15ContractChanges)
    {
        $this->uL15ContractChanges = $uL15ContractChanges;
        return $this;
    }

    /**
     * Adds as uL151ContractTermsChanges
     *
     * Блок 15(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
     *
     * @param UL151ContractTermsChangesType $uL151ContractTermsChanges
     *@return self
     */
    public function addToUL151ContractTermsChanges(UL151ContractTermsChangesType $uL151ContractTermsChanges)
    {
        $this->uL151ContractTermsChanges[] = $uL151ContractTermsChanges;
        return $this;
    }

    /**
     * isset uL151ContractTermsChanges
     *
     * Блок 15(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL151ContractTermsChanges($index)
    {
        return isset($this->uL151ContractTermsChanges[$index]);
    }

    /**
     * unset uL151ContractTermsChanges
     *
     * Блок 15(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL151ContractTermsChanges($index)
    {
        unset($this->uL151ContractTermsChanges[$index]);
    }

    /**
     * Gets as uL151ContractTermsChanges
     *
     * Блок 15(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
     *
     * @return UL151ContractTermsChangesType[]
     */
    public function getUL151ContractTermsChanges()
    {
        return $this->uL151ContractTermsChanges;
    }

    /**
     * Sets a new uL151ContractTermsChanges
     *
     * Блок 15(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
     *
     * @param UL151ContractTermsChangesType[] $uL151ContractTermsChanges
     * @return self
     */
    public function setUL151ContractTermsChanges(array $uL151ContractTermsChanges)
    {
        $this->uL151ContractTermsChanges = $uL151ContractTermsChanges;
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
     * Gets as uL44Accounting
     *
     * Блок 44. Сведения об учете обязательства
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
     * Блок 44. Сведения об учете обязательства
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
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_Event_2_1';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Изменились сведения об условиях обязательства субъекта';
    }

    protected function initAttributes()
    {
        $this->uL10DealUid = new UL10DealUidType($this->template);
        $this->uL11Deal = new UL11DealType($this->template);
        $this->uL12Amount= new UL12AmountType($this->template);

        foreach ($this->template->sendData->getAccountReplyRUTDF()->getAmountInfoArray() as $key => $value) {
            $this->addToUL121AmountInfo(new UL121AmountInfoType($this->template, $key));
        }

        $this->uL13JointDebtors = new UL13JointDebtorsType($this->template);
        $this->uL14PaymentTerms = new UL14PaymentTermsType($this->template);

        foreach ($this->template->sendData->getAccountReplyRUTDF()->getContractTermsChanges() as $key => $value) {
            $this->addToUL151ContractTermsChanges(new UL151ContractTermsChangesType($this->template, $key));
        }
        if(empty($this->uL151ContractTermsChanges)){
            $this->addToUL151ContractTermsChanges(new UL151ContractTermsChangesType($this->template));
        }
        foreach ($this->template->sendData->getAccountReplyRUTDF()->getAmendment() as $key => $value) {
            $this->addToUL15ContractChanges(new UL15ContractChangesType($this->template, $key));
        }

        if(empty($this->uL15ContractChanges)){
            $this->addToUL15ContractChanges(new UL15ContractChangesType($this->template));
        }
        $this->setUL17181920Group(new UL17181920GroupType($this->template));

        foreach ($this->template->sendData->getAccountReplyRUTDF()->getSourceNonMonetObligArray() as $key => $value) {
            $this->addToUL21NonMonetarySource(new UL21NonMonetarySourceType($this->template, $key));
        }

        foreach ($this->template->sendData->getAccountReplyRUTDF()->getSubjectNonMonetObligArray() as $key => $value) {
            $this->addToUL22NonMonetarySubject(new UL22NonMonetarySubjectType($this->template, $key));
        }

        $this->uL44Accounting = new UL44AccountingType($this->template);
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
            'uL14PaymentTerms',
            'uL17181920Group',
            'uL13JointDebtors',
            'uL15ContractChanges',
            'uL151ContractTermsChanges',
            'uL21NonMonetarySource',
            'uL22NonMonetarySubject',
            'uL44Accounting',
        ];
    }
}

