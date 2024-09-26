<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent281Type
 *
 * Конкурсное производство в отношении источника открылось
 * XSD Type: UL_Event_2_8_1_Type
 */
class ULEvent281Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

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
     * Блок 31. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL31SourceBankruptcyType $uL31SourceBankruptcy
     */
    private $uL31SourceBankruptcy = null;

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
    public function setUL12Amount(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL12AmountType $uL12Amount)
    {
        $this->uL12Amount = $uL12Amount;
        return $this;
    }

    /**
     * Adds as uL121AmountInfo
     *
     * Блок 12(1). Сведения об обеспечиваемом обязательстве
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL121AmountInfoType $uL121AmountInfo
     *@return self
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
    public function setUL121AmountInfo(array $uL121AmountInfo)
    {
        $this->uL121AmountInfo = $uL121AmountInfo;
        return $this;
    }

    /**
     * Gets as uL31SourceBankruptcy
     *
     * Блок 31. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL31SourceBankruptcyType
     */
    public function getUL31SourceBankruptcy()
    {
        return $this->uL31SourceBankruptcy;
    }

    /**
     * Sets a new uL31SourceBankruptcy
     *
     * Блок 31. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL31SourceBankruptcyType $uL31SourceBankruptcy
     * @return self
     */
    public function setUL31SourceBankruptcy(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL31SourceBankruptcyType $uL31SourceBankruptcy)
    {
        $this->uL31SourceBankruptcy = $uL31SourceBankruptcy;
        return $this;
    }
}

