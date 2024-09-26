<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent42Type
 *
 * Требуется аннулирование записи кредитной истории
 * XSD Type: FL_Event_4_2_Type
 */
class FLEvent42Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 17. Идентификатор сделки (необязательный УИд сделки)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidRType $fL17DealUidR
     */
    private $fL17DealUidR = null;

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
     * Gets as fL17DealUidR
     *
     * Блок 17. Идентификатор сделки (необязательный УИд сделки)
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidRType
     */
    public function getFL17DealUidR()
    {
        return $this->fL17DealUidR;
    }

    /**
     * Sets a new fL17DealUidR
     *
     * Блок 17. Идентификатор сделки (необязательный УИд сделки)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidRType $fL17DealUidR
     * @return self
     */
    public function setFL17DealUidR(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidRType $fL17DealUidR)
    {
        $this->fL17DealUidR = $fL17DealUidR;
        return $this;
    }
}

