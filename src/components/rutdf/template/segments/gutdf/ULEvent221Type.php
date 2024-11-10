<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent221Type
 *
 * Субъект стал принципалом по гарантии или поручителем по сделке
 * XSD Type: UL_Event_2_2_1_Type
 */
class ULEvent221Type extends EventDataType
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
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL10DealUidType $uL10DealUid
     */
    private $uL10DealUid = null;

    /**
     * Блок 11. Общие сведения о сделке
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL11DealType $uL11Deal
     */
    private $uL11Deal = null;

    /**
     * Блок 12. Сумма и валюта обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL12AmountType $uL12Amount
     */
    private $uL12Amount = null;

    /**
     * Блок 12(1). Сведения об обеспечиваемом обязательстве
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL121AmountInfoType[] $uL121AmountInfo
     */
    private $uL121AmountInfo = [
        
    ];

    /**
     * Блок 14. Сведения об условиях платежей
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL14PaymentTermsType $uL14PaymentTerms
     */
    private $uL14PaymentTerms = null;

    /**
     * Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL16FundType $uL16Fund
     */
    private $uL16Fund = null;

    /**
     * Блок 22. Сведения о неденежном обязательстве субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL22NonMonetarySubjectType[] $uL22NonMonetarySubject
     */
    private $uL22NonMonetarySubject = [
        
    ];

    /**
     * Блок 21. Сведения о неденежном обязательстве источника
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL21NonMonetarySourceType[] $uL21NonMonetarySource
     */
    private $uL21NonMonetarySource = [
        
    ];

    /**
     * Блок 44. Сведения об учете обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType $uL44Accounting
     */
    private $uL44Accounting = null;

    /**
     * Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL46ParticipationType $uL46Participation
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
    public function setUL10DealUid(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL10DealUidType $uL10DealUid)
    {
        $this->uL10DealUid = $uL10DealUid;
        return $this;
    }

    /**
     * Gets as uL11Deal
     *
     * Блок 11. Общие сведения о сделке
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL11DealType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL11DealType $uL11Deal
     * @return self
     */
    public function setUL11Deal(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL11DealType $uL11Deal)
    {
        $this->uL11Deal = $uL11Deal;
        return $this;
    }

    /**
     * Gets as uL12Amount
     *
     * Блок 12. Сумма и валюта обязательства
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL12AmountType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL12AmountType $uL12Amount
     * @return self
     */
    public function setUL12Amount(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL12AmountType $uL12Amount = null)
    {
        $this->uL12Amount = $uL12Amount;
        return $this;
    }

    /**
     * Adds as uL121AmountInfo
     *
     * Блок 12(1). Сведения об обеспечиваемом обязательстве
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL121AmountInfoType $uL121AmountInfo
     */
    public function addToUL121AmountInfo(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL121AmountInfoType $uL121AmountInfo)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL121AmountInfoType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL121AmountInfoType[] $uL121AmountInfo
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL14PaymentTermsType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL14PaymentTermsType $uL14PaymentTerms
     * @return self
     */
    public function setUL14PaymentTerms(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL14PaymentTermsType $uL14PaymentTerms = null)
    {
        $this->uL14PaymentTerms = $uL14PaymentTerms;
        return $this;
    }

    /**
     * Gets as uL16Fund
     *
     * Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL16FundType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL16FundType $uL16Fund
     * @return self
     */
    public function setUL16Fund(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL16FundType $uL16Fund = null)
    {
        $this->uL16Fund = $uL16Fund;
        return $this;
    }

    /**
     * Adds as uL22NonMonetarySubject
     *
     * Блок 22. Сведения о неденежном обязательстве субъекта
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL22NonMonetarySubjectType $uL22NonMonetarySubject
     */
    public function addToUL22NonMonetarySubject(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL22NonMonetarySubjectType $uL22NonMonetarySubject)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL22NonMonetarySubjectType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL22NonMonetarySubjectType[] $uL22NonMonetarySubject
     * @return self
     */
    public function setUL22NonMonetarySubject(array $uL22NonMonetarySubject = null)
    {
        $this->uL22NonMonetarySubject = $uL22NonMonetarySubject;
        return $this;
    }

    /**
     * Adds as uL21NonMonetarySource
     *
     * Блок 21. Сведения о неденежном обязательстве источника
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL21NonMonetarySourceType $uL21NonMonetarySource
     */
    public function addToUL21NonMonetarySource(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL21NonMonetarySourceType $uL21NonMonetarySource)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL21NonMonetarySourceType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL21NonMonetarySourceType[] $uL21NonMonetarySource
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType $uL44Accounting
     * @return self
     */
    public function setUL44Accounting(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType $uL44Accounting)
    {
        $this->uL44Accounting = $uL44Accounting;
        return $this;
    }

    /**
     * Gets as uL46Participation
     *
     * Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL46ParticipationType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL46ParticipationType $uL46Participation
     * @return self
     */
    public function setUL46Participation(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL46ParticipationType $uL46Participation)
    {
        $this->uL46Participation = $uL46Participation;
        return $this;
    }
}

