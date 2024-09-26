<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent281Type
 *
 * Конкурсное производство в отношении источника открылось
 * XSD Type: FL_Event_2_8_1_Type
 */
class FLEvent281Type extends EventDataType
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
     * Блок 41. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType $fL41SourceBankruptcy
     */
    private $fL41SourceBankruptcy = null;

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
     * Gets as fL41SourceBankruptcy
     *
     * Блок 41. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType
     */
    public function getFL41SourceBankruptcy()
    {
        return $this->fL41SourceBankruptcy;
    }

    /**
     * Sets a new fL41SourceBankruptcy
     *
     * Блок 41. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType $fL41SourceBankruptcy
     * @return self
     */
    public function setFL41SourceBankruptcy(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType $fL41SourceBankruptcy)
    {
        $this->fL41SourceBankruptcy = $fL41SourceBankruptcy;
        return $this;
    }
}

