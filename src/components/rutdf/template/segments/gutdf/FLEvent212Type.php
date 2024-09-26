<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent212Type
 *
 * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
 * XSD Type: FL_Event_2_12_Type
 */
class FLEvent212Type extends EventDataType
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
     * Блок 53. Сведения об обслуживающей организации
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL53ServiceOrgType $fL53ServiceOrg
     */
    private $fL53ServiceOrg = null;

    /**
     * Блок 54. Сведения об учете обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54Accounting
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
     * Gets as fL53ServiceOrg
     *
     * Блок 53. Сведения об обслуживающей организации
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL53ServiceOrgType
     */
    public function getFL53ServiceOrg()
    {
        return $this->fL53ServiceOrg;
    }

    /**
     * Sets a new fL53ServiceOrg
     *
     * Блок 53. Сведения об обслуживающей организации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL53ServiceOrgType $fL53ServiceOrg
     * @return self
     */
    public function setFL53ServiceOrg(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL53ServiceOrgType $fL53ServiceOrg)
    {
        $this->fL53ServiceOrg = $fL53ServiceOrg;
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
}

