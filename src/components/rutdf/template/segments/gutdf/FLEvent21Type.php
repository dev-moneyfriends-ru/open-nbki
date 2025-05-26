<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent21Type
 *
 * Изменились сведения об условиях обязательства субъекта
 * XSD Type: FL_Event_2_1_Type
 */
class FLEvent21Type extends EventDataType
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
     * Блок 21. Сведения об условиях платежей
     *
     * @var FL21PaymentTermsType $fL21PaymentTerms
     */
    private $fL21PaymentTerms = null;

    /**
     * Блок 22. Полная стоимость потребительского кредита (займа)
     *
     * @var FL22TotalCostType $fL22TotalCost
     */
    private $fL22TotalCost = null;

    /**
     * Блок 25-28
     *
     * @var FL25262728GroupType $fL25262728Group
     */
    private $fL25262728Group = null;

    /**
     * Блок 29. Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета
     *
     * @var FL29MonthlyPaymentType $fL29MonthlyPayment
     */
    private $fL29MonthlyPayment = null;

    /**
     * Блок 29(1). Сведения о долговой нагрузке заемщика
     *
     * @var FL291DebtBurdenInfoType $fL291DebtBurdenInfo
     */
    private $fL291DebtBurdenInfo = null;

    /**
     * Блок 31. Сведения о неденежном обязательстве субъекта
     *
     * @var FL31NonMonetarySubjectType[] $fL31NonMonetarySubject
     */
    private $fL31NonMonetarySubject = [

    ];

    /**
     * Блок 20. Сведения о солидарных должниках
     *
     * @var FL20JointDebtorsType $fL20JointDebtors
     */
    private $fL20JointDebtors = null;

    /**
     * Блок 23. Сведения об изменении договора
     *
     * @var FL23ContractChangesType[] $fL23ContractChanges
     */
    private $fL23ContractChanges = [

    ];

    /**
     * Блок 23(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
     *
     * @var FL231ContractTermsChangesType[] $fL231ContractTermsChanges
     */
    private $fL231ContractTermsChanges = [

    ];

    /**
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @var FL30NonMonetarySourceType[] $fL30NonMonetarySource
     */
    private $fL30NonMonetarySource = [

    ];

    /**
     * Блок 54. Сведения об учете обязательства
     *
     * @var FL54AccountingType $fL54Accounting
     */
    private $fL54Accounting = null;

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
    public function setFL19Amount(?FL19AmountType $fL19Amount = null)
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
     * @return self
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
    public function setFL191AmountInfo(array $fL191AmountInfo = null)
    {
        $this->fL191AmountInfo = $fL191AmountInfo;
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
    public function setFL21PaymentTerms(?FL21PaymentTermsType $fL21PaymentTerms = null)
    {
        $this->fL21PaymentTerms = $fL21PaymentTerms;
        return $this;
    }

    /**
     * Gets as fL22TotalCost
     *
     * Блок 22. Полная стоимость потребительского кредита (займа)
     *
     * @return FL22TotalCostType
     */
    public function getFL22TotalCost()
    {
        return $this->fL22TotalCost;
    }

    /**
     * Sets a new fL22TotalCost
     *
     * Блок 22. Полная стоимость потребительского кредита (займа)
     *
     * @param FL22TotalCostType $fL22TotalCost
     * @return self
     */
    public function setFL22TotalCost(?FL22TotalCostType $fL22TotalCost = null)
    {
        $this->fL22TotalCost = $fL22TotalCost;
        return $this;
    }

    /**
     * Gets as fL25262728Group
     *
     * Блок 25-28
     *
     * @return FL25262728GroupType
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
     * @param FL25262728GroupType $fL25262728Group
     * @return self
     */
    public function setFL25262728Group(?FL25262728GroupType $fL25262728Group = null)
    {
        $this->fL25262728Group = $fL25262728Group;
        return $this;
    }

    /**
     * Gets as fL29MonthlyPayment
     *
     * Блок 29. Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета
     *
     * @return FL29MonthlyPaymentType
     */
    public function getFL29MonthlyPayment()
    {
        return $this->fL29MonthlyPayment;
    }

    /**
     * Sets a new fL29MonthlyPayment
     *
     * Блок 29. Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета
     *
     * @param FL29MonthlyPaymentType $fL29MonthlyPayment
     * @return self
     */
    public function setFL29MonthlyPayment(?FL29MonthlyPaymentType $fL29MonthlyPayment = null)
    {
        $this->fL29MonthlyPayment = $fL29MonthlyPayment;
        return $this;
    }

    /**
     * Gets as fL291DebtBurdenInfo
     *
     * Блок 29(1). Сведения о долговой нагрузке заемщика
     *
     * @return FL291DebtBurdenInfoType
     */
    public function getFL291DebtBurdenInfo()
    {
        return $this->fL291DebtBurdenInfo;
    }

    /**
     * Sets a new fL291DebtBurdenInfo
     *
     * Блок 29(1). Сведения о долговой нагрузке заемщика
     *
     * @param FL291DebtBurdenInfoType $fL291DebtBurdenInfo
     * @return self
     */
    public function setFL291DebtBurdenInfo(?FL291DebtBurdenInfoType $fL291DebtBurdenInfo = null)
    {
        $this->fL291DebtBurdenInfo = $fL291DebtBurdenInfo;
        return $this;
    }

    /**
     * Adds as fL31NonMonetarySubject
     *
     * Блок 31. Сведения о неденежном обязательстве субъекта
     *
     * @param FL31NonMonetarySubjectType $fL31NonMonetarySubject
     * @return self
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
     * Adds as fL23ContractChanges
     *
     * Блок 23. Сведения об изменении договора
     *
     * @param FL23ContractChangesType $fL23ContractChanges
     * @return self
     */
    public function addToFL23ContractChanges(FL23ContractChangesType $fL23ContractChanges)
    {
        $this->fL23ContractChanges[] = $fL23ContractChanges;
        return $this;
    }

    /**
     * isset fL23ContractChanges
     *
     * Блок 23. Сведения об изменении договора
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL23ContractChanges($index)
    {
        return isset($this->fL23ContractChanges[$index]);
    }

    /**
     * unset fL23ContractChanges
     *
     * Блок 23. Сведения об изменении договора
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL23ContractChanges($index)
    {
        unset($this->fL23ContractChanges[$index]);
    }

    /**
     * Gets as fL23ContractChanges
     *
     * Блок 23. Сведения об изменении договора
     *
     * @return FL23ContractChangesType[]
     */
    public function getFL23ContractChanges()
    {
        return $this->fL23ContractChanges;
    }

    /**
     * Sets a new fL23ContractChanges
     *
     * Блок 23. Сведения об изменении договора
     *
     * @param FL23ContractChangesType[] $fL23ContractChanges
     * @return self
     */
    public function setFL23ContractChanges(array $fL23ContractChanges)
    {
        $this->fL23ContractChanges = $fL23ContractChanges;
        return $this;
    }

    /**
     * Adds as fL231ContractTermsChanges
     *
     * Блок 23(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
     *
     * @param FL231ContractTermsChangesType $fL231ContractTermsChanges
     * @return self
     */
    public function addToFL231ContractTermsChanges(FL231ContractTermsChangesType $fL231ContractTermsChanges)
    {
        $this->fL231ContractTermsChanges[] = $fL231ContractTermsChanges;
        return $this;
    }

    /**
     * isset fL231ContractTermsChanges
     *
     * Блок 23(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL231ContractTermsChanges($index)
    {
        return isset($this->fL231ContractTermsChanges[$index]);
    }

    /**
     * unset fL231ContractTermsChanges
     *
     * Блок 23(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL231ContractTermsChanges($index)
    {
        unset($this->fL231ContractTermsChanges[$index]);
    }

    /**
     * Gets as fL231ContractTermsChanges
     *
     * Блок 23(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
     *
     * @return FL231ContractTermsChangesType[]
     */
    public function getFL231ContractTermsChanges()
    {
        return $this->fL231ContractTermsChanges;
    }

    /**
     * Sets a new fL231ContractTermsChanges
     *
     * Блок 23(1). Сведения об изменении условий обязательства в результате наступления указанного в сделке события
     *
     * @param FL231ContractTermsChangesType[] $fL231ContractTermsChanges
     * @return self
     */
    public function setFL231ContractTermsChanges(array $fL231ContractTermsChanges)
    {
        $this->fL231ContractTermsChanges = $fL231ContractTermsChanges;
        return $this;
    }

    /**
     * Adds as fL30NonMonetarySource
     *
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @param FL30NonMonetarySourceType $fL30NonMonetarySource
     * @return self
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
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_Event_2_1';
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
        $this->fL17DealUid = new FL17DealUidType($this->template);
        $this->fL18Deal = new FL18DealType($this->template);
        $this->fL19Amount = new FL19AmountType($this->template);

        foreach ($this->sendData->getAccountReplyRUTDF()->getAmountInfoArray() as $key => $value) {
            $this->addToFL191AmountInfo(new FL191AmountInfoType($this->template, $key));
        }
        $this->fL20JointDebtors = new FL20JointDebtorsType($this->template);
        $this->fL21PaymentTerms = new FL21PaymentTermsType($this->template);

        foreach ($this->sendData->getAccountReplyRUTDF()->getContractTermsChanges() as $key => $value) {
            $this->addToFL231ContractTermsChanges(new FL231ContractTermsChangesType($this->template, $key));
        }
        if(empty($this->fL231ContractChanges)){
            $this->addToFL231ContractTermsChanges(new FL231ContractTermsChangesType($this->template));
        }
        foreach ($this->sendData->getAccountReplyRUTDF()->getAmendment() as $key => $value) {
            $this->addToFL23ContractChanges(new FL23ContractChangesType($this->template, $key));
        }

        if(empty($this->fL23ContractChanges)){
            $this->addToFL23ContractChanges(new FL23ContractChangesType($this->template));
        }
        $this->setFL25262728Group(new FL25262728GroupType($this->template));
        if($this->sendData->getAccountReplyRUTDF()->getMonthAverPaymt()){
            $this->fL29MonthlyPayment = new FL29MonthlyPaymentType($this->template);
        }

        if($this->sendData->getAccountReplyRUTDF()->getDebtBurdenInfo()){
            $this->fL291DebtBurdenInfo = new FL291DebtBurdenInfoType($this->template);
        }
        if(!$this->template->sendData->getAccountReplyRUTDF()->getTrade()->isMoneySource){
            foreach ($this->sendData->getAccountReplyRUTDF()->getAmountInfoArray() as $key => $value) {
                $this->addToFL30NonMonetarySource(new FL30NonMonetarySourceType($this->template, $key));
            }
        }
        foreach ($this->sendData->getAccountReplyRUTDF()->getSubjectNonMonetObligArray() as $key => $value) {
            $this->addToFL31NonMonetarySubject(new FL31NonMonetarySubjectType($this->template, $key));
        }
        $this->fL54Accounting = new FL54AccountingType($this->template);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fL17DealUid',
            'fL18Deal',
            'fL19Amount',
            'fL191AmountInfo',
            'fL21PaymentTerms',
            'fL22TotalCost',
            'fL25262728Group',
            'fL20JointDebtors',
            'fL23ContractChanges',
            'fL231ContractTermsChanges',
            'fL29MonthlyPayment',
            'fL291DebtBurdenInfo',
            'fL30NonMonetarySource',
            'fL31NonMonetarySubject',
            'fL54Accounting',
        ];
    }
}

