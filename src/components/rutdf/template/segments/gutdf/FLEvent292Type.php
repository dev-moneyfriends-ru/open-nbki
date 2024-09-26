<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent292Type
 *
 * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
 * XSD Type: FL_Event_2_9_2_Type
 */
class FLEvent292Type extends EventDataType
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
     * Блок 42. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL42SourceLiquidationType $fL42SourceLiquidation
     */
    private $fL42SourceLiquidation = null;

    /**
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType $fL56Participation
     */
    private $fL56Participation = null;

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
     * Gets as fL42SourceLiquidation
     *
     * Блок 42. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL42SourceLiquidationType
     */
    public function getFL42SourceLiquidation()
    {
        return $this->fL42SourceLiquidation;
    }

    /**
     * Sets a new fL42SourceLiquidation
     *
     * Блок 42. Сведения об обязательстве, если источник находится в процессе ликвидации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL42SourceLiquidationType $fL42SourceLiquidation
     * @return self
     */
    public function setFL42SourceLiquidation(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL42SourceLiquidationType $fL42SourceLiquidation)
    {
        $this->fL42SourceLiquidation = $fL42SourceLiquidation;
        return $this;
    }

    /**
     * Gets as fL56Participation
     *
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType
     */
    public function getFL56Participation()
    {
        return $this->fL56Participation;
    }

    /**
     * Sets a new fL56Participation
     *
     * Блок 56. Сведения об участии в обязательстве, по которому формируется кредитная история
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType $fL56Participation
     * @return self
     */
    public function setFL56Participation(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType $fL56Participation)
    {
        $this->fL56Participation = $fL56Participation;
        return $this;
    }
}

