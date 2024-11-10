<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent2111Type
 *
 * Права по обязательству частично перешли к другому лицу
 * XSD Type: FL_Event_2_11_1_Type
 */
class FLEvent2111Type extends EventDataType
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
     * Блок 21. Сведения об условиях платежей
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL21PaymentTermsType $fL21PaymentTerms
     */
    private $fL21PaymentTerms = null;

    /**
     * Блок 22. Полная стоимость потребительского кредита (займа)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL22TotalCostType $fL22TotalCost
     */
    private $fL22TotalCost = null;

    /**
     * Блок 25-28
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType $fL25262728Group
     */
    private $fL25262728Group = null;

    /**
     * Блок 29. Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL29MonthlyPaymentType $fL29MonthlyPayment
     */
    private $fL29MonthlyPayment = null;

    /**
     * Блок 29(1). Сведения о долговой нагрузке заемщика
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL291DebtBurdenInfoType $fL291DebtBurdenInfo
     */
    private $fL291DebtBurdenInfo = null;

    /**
     * Блок 54. Сведения об учете обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54Accounting
     */
    private $fL54Accounting = null;

    /**
     * Блок 31. Сведения о неденежном обязательстве субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL31NonMonetarySubjectType[] $fL31NonMonetarySubject
     */
    private $fL31NonMonetarySubject = [
        
    ];

    /**
     * Блок 20. Сведения о солидарных должниках
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL20JointDebtorsType $fL20JointDebtors
     */
    private $fL20JointDebtors = null;

    /**
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL30NonMonetarySourceType[] $fL30NonMonetarySource
     */
    private $fL30NonMonetarySource = [
        
    ];

    /**
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType $fL51OrgAcquirer
     */
    private $fL51OrgAcquirer = null;

    /**
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType $fL52PersonAcquirer
     */
    private $fL52PersonAcquirer = null;

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
    public function setFL19Amount(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL19AmountType $fL19Amount = null)
    {
        $this->fL19Amount = $fL19Amount;
        return $this;
    }

    /**
     * Adds as fL191AmountInfo
     *
     * Блок 19(1). Сведения об обеспечиваемом обязательстве
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL191AmountInfoType $fL191AmountInfo
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
    public function setFL21PaymentTerms(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL21PaymentTermsType $fL21PaymentTerms = null)
    {
        $this->fL21PaymentTerms = $fL21PaymentTerms;
        return $this;
    }

    /**
     * Gets as fL22TotalCost
     *
     * Блок 22. Полная стоимость потребительского кредита (займа)
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL22TotalCostType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL22TotalCostType $fL22TotalCost
     * @return self
     */
    public function setFL22TotalCost(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL22TotalCostType $fL22TotalCost = null)
    {
        $this->fL22TotalCost = $fL22TotalCost;
        return $this;
    }

    /**
     * Gets as fL25262728Group
     *
     * Блок 25-28
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType $fL25262728Group
     * @return self
     */
    public function setFL25262728Group(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType $fL25262728Group = null)
    {
        $this->fL25262728Group = $fL25262728Group;
        return $this;
    }

    /**
     * Gets as fL29MonthlyPayment
     *
     * Блок 29. Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL29MonthlyPaymentType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL29MonthlyPaymentType $fL29MonthlyPayment
     * @return self
     */
    public function setFL29MonthlyPayment(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL29MonthlyPaymentType $fL29MonthlyPayment = null)
    {
        $this->fL29MonthlyPayment = $fL29MonthlyPayment;
        return $this;
    }

    /**
     * Gets as fL291DebtBurdenInfo
     *
     * Блок 29(1). Сведения о долговой нагрузке заемщика
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL291DebtBurdenInfoType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL291DebtBurdenInfoType $fL291DebtBurdenInfo
     * @return self
     */
    public function setFL291DebtBurdenInfo(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL291DebtBurdenInfoType $fL291DebtBurdenInfo = null)
    {
        $this->fL291DebtBurdenInfo = $fL291DebtBurdenInfo;
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
    public function setFL54Accounting(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54Accounting = null)
    {
        $this->fL54Accounting = $fL54Accounting;
        return $this;
    }

    /**
     * Adds as fL31NonMonetarySubject
     *
     * Блок 31. Сведения о неденежном обязательстве субъекта
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL31NonMonetarySubjectType $fL31NonMonetarySubject
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
     * Adds as fL30NonMonetarySource
     *
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL30NonMonetarySourceType $fL30NonMonetarySource
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
     * Gets as fL51OrgAcquirer
     *
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType $fL51OrgAcquirer
     * @return self
     */
    public function setFL51OrgAcquirer(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType $fL51OrgAcquirer = null)
    {
        $this->fL51OrgAcquirer = $fL51OrgAcquirer;
        return $this;
    }

    /**
     * Gets as fL52PersonAcquirer
     *
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType $fL52PersonAcquirer
     * @return self
     */
    public function setFL52PersonAcquirer(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType $fL52PersonAcquirer = null)
    {
        $this->fL52PersonAcquirer = $fL52PersonAcquirer;
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

