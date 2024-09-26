<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent42Type
 *
 * Требуется аннулирование записи кредитной истории
 * XSD Type: UL_Event_4_2_Type
 */
class ULEvent42Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 10. Идентификатор сделки (необязательный УИд сделки)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL10DealUidRType $uL10DealUidR
     */
    private $uL10DealUidR = null;

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
     * Gets as uL10DealUidR
     *
     * Блок 10. Идентификатор сделки (необязательный УИд сделки)
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL10DealUidRType
     */
    public function getUL10DealUidR()
    {
        return $this->uL10DealUidR;
    }

    /**
     * Sets a new uL10DealUidR
     *
     * Блок 10. Идентификатор сделки (необязательный УИд сделки)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL10DealUidRType $uL10DealUidR
     * @return self
     */
    public function setUL10DealUidR(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL10DealUidRType $uL10DealUidR)
    {
        $this->uL10DealUidR = $uL10DealUidR;
        return $this;
    }
}

