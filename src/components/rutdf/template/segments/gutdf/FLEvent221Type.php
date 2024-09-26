<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent221Type
 *
 * Субъект стал принципалом по гарантии или поручителем по сделке
 * XSD Type: FL_Event_2_2_1_Type
 */
class FLEvent221Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

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
     * Блок 24. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL24FundType $fL24Fund
     */
    private $fL24Fund = null;

    /**
     * Блок 31. Сведения о неденежном обязательстве субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL31NonMonetarySubjectType[] $fL31NonMonetarySubject
     */
    private $fL31NonMonetarySubject = [
        
    ];

    /**
     * Блок 30. Сведения о неденежном обязательстве источника
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL30NonMonetarySourceType[] $fL30NonMonetarySource
     */
    private $fL30NonMonetarySource = [
        
    ];

    /**
     * Блок 54. Сведения об учете обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54Accounting
     */
    private $fL54Accounting = null;

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
     * Gets as fL24Fund
     *
     * Блок 24. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL24FundType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL24FundType $fL24Fund
     * @return self
     */
    public function setFL24Fund(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL24FundType $fL24Fund = null)
    {
        $this->fL24Fund = $fL24Fund;
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

