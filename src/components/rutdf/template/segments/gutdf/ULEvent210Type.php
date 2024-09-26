<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent210Type
 *
 * Источник прекратил передачу информации по обязательству
 * XSD Type: UL_Event_2_10_Type
 */
class ULEvent210Type extends EventDataType
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
     * Блок 35. Сведения о прекращении передачи информации по обязательству
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL35StopSendType $uL35StopSend
     */
    private $uL35StopSend = null;

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
     * Gets as uL35StopSend
     *
     * Блок 35. Сведения о прекращении передачи информации по обязательству
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL35StopSendType
     */
    public function getUL35StopSend()
    {
        return $this->uL35StopSend;
    }

    /**
     * Sets a new uL35StopSend
     *
     * Блок 35. Сведения о прекращении передачи информации по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL35StopSendType $uL35StopSend
     * @return self
     */
    public function setUL35StopSend(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL35StopSendType $uL35StopSend)
    {
        $this->uL35StopSend = $uL35StopSend;
        return $this;
    }
}

