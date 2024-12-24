<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent25Type
 *
 * Обязательство субъекта прекратилось
 * XSD Type: FL_Event_2_5_Type
 */
class FLEvent25Type extends EventDataType
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
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @var FL30NonMonetarySourceType[] $fL30NonMonetarySource
     */
    private $fL30NonMonetarySource = [

    ];

    /**
     * Блок 38. Сведения о прекращении обязательства
     *
     * @var FL38ContractEndType $fL38ContractEnd
     */
    private $fL38ContractEnd = null;

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
     * Gets as fL38ContractEnd
     *
     * Блок 38. Сведения о прекращении обязательства
     *
     * @return FL38ContractEndType
     */
    public function getFL38ContractEnd()
    {
        return $this->fL38ContractEnd;
    }

    /**
     * Sets a new fL38ContractEnd
     *
     * Блок 38. Сведения о прекращении обязательства
     *
     * @param FL38ContractEndType $fL38ContractEnd
     * @return self
     */
    public function setFL38ContractEnd(FL38ContractEndType $fL38ContractEnd)
    {
        $this->fL38ContractEnd = $fL38ContractEnd;
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
        return 'FL_Event_2_5';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Обязательство субъекта прекратилось';
    }

    protected function initAttributes()
    {
        $this->fL17DealUid = new FL17DealUidType($this->template);
        $this->fL18Deal = new FL18DealType($this->template);
        $this->fL19Amount = new FL19AmountType($this->template);

        foreach ($this->template->sendData->getAccountReplyRUTDF()->getAmountInfoArray() as $key => $value) {
            $this->addToFL191AmountInfo(new FL191AmountInfoType($this->template, $key));
        }

        $this->fL21PaymentTerms = new FL21PaymentTermsType($this->template);
        $this->setFL25262728Group(new FL25262728GroupType($this->template));
        if($this->template->sendData->getAccountReplyRUTDF()->getMonthAverPaymt()){
            $this->fL29MonthlyPayment = new FL29MonthlyPaymentType($this->template);
        }

        if($this->template->sendData->getAccountReplyRUTDF()->getDebtBurdenInfo()){
            $this->fL291DebtBurdenInfo = new FL291DebtBurdenInfoType($this->template);
        }
        foreach ($this->template->sendData->getAccountReplyRUTDF()->getAmountInfoArray() as $key => $value) {
            $this->addToFL30NonMonetarySource(new FL30NonMonetarySourceType($this->template, $key));
        }
//        foreach ($this->template->sendData->getAccountReplyRUTDF()->getAmountInfoArray() as $key => $value) {
//            $this->addToFL31NonMonetarySubject(new FL31NonMonetarySubjectType($this->template, $key));
//        }
        $this->fL38ContractEnd = new FL38ContractEndType($this->template);
        $this->fL56Participation = new FL56ParticipationType($this->template);
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
            'fL29MonthlyPayment',
            'fL291DebtBurdenInfo',
            'fL30NonMonetarySource',
            'fL31NonMonetarySubject',
            'fL38ContractEnd',
            'fL56Participation',
        ];
    }
}

