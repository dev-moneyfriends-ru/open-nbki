<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent212Type
 *
 * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
 * XSD Type: UL_Event_2_12_Type
 */
class ULEvent212Type extends EventDataType
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
     * Блок 43. Сведения об обслуживающей организации
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType $uL43ServiceOrg
     */
    private $uL43ServiceOrg = null;

    /**
     * Блок 44. Сведения об учете обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType $uL44Accounting
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
     * Gets as uL43ServiceOrg
     *
     * Блок 43. Сведения об обслуживающей организации
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType
     */
    public function getUL43ServiceOrg()
    {
        return $this->uL43ServiceOrg;
    }

    /**
     * Sets a new uL43ServiceOrg
     *
     * Блок 43. Сведения об обслуживающей организации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType $uL43ServiceOrg
     * @return self
     */
    public function setUL43ServiceOrg(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType $uL43ServiceOrg)
    {
        $this->uL43ServiceOrg = $uL43ServiceOrg;
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
}

