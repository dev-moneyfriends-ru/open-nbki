<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent293Type
 *
 * Процесс ликвидации источника завершился
 * XSD Type: UL_Event_2_9_3_Type
 */
class ULEvent293Type extends EventDataType
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
     * Блок 32. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL32SourceLiquidationType $uL32SourceLiquidation
     */
    private $uL32SourceLiquidation = null;

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
     * Gets as uL32SourceLiquidation
     *
     * Блок 32. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL32SourceLiquidationType
     */
    public function getUL32SourceLiquidation()
    {
        return $this->uL32SourceLiquidation;
    }

    /**
     * Sets a new uL32SourceLiquidation
     *
     * Блок 32. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL32SourceLiquidationType $uL32SourceLiquidation
     * @return self
     */
    public function setUL32SourceLiquidation(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL32SourceLiquidationType $uL32SourceLiquidation)
    {
        $this->uL32SourceLiquidation = $uL32SourceLiquidation;
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

