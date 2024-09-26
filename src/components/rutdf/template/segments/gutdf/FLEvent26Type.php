<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent26Type
 *
 * Изменились сведения о судебном споре или требовании по обязательству
 * XSD Type: FL_Event_2_6_Type
 */
class FLEvent26Type extends EventDataType
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
     * Блок 39. Сведения о судебном споре или требовании по обязательству
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType[] $fL39Court
     */
    private $fL39Court = [
        
    ];

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
     * Adds as fL39Court
     *
     * Блок 39. Сведения о судебном споре или требовании по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType $fL39Court
     *@return self
     */
    public function addToFL39Court(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType $fL39Court)
    {
        $this->fL39Court[] = $fL39Court;
        return $this;
    }

    /**
     * isset fL39Court
     *
     * Блок 39. Сведения о судебном споре или требовании по обязательству
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL39Court($index)
    {
        return isset($this->fL39Court[$index]);
    }

    /**
     * unset fL39Court
     *
     * Блок 39. Сведения о судебном споре или требовании по обязательству
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL39Court($index)
    {
        unset($this->fL39Court[$index]);
    }

    /**
     * Gets as fL39Court
     *
     * Блок 39. Сведения о судебном споре или требовании по обязательству
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType[]
     */
    public function getFL39Court()
    {
        return $this->fL39Court;
    }

    /**
     * Sets a new fL39Court
     *
     * Блок 39. Сведения о судебном споре или требовании по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType[] $fL39Court
     * @return self
     */
    public function setFL39Court(array $fL39Court)
    {
        $this->fL39Court = $fL39Court;
        return $this;
    }
}

