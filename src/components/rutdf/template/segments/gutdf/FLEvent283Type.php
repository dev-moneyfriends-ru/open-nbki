<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent283Type
 *
 * Конкурсное производство в отношении источника завершилось
 * XSD Type: FL_Event_2_8_3_Type
 */
class FLEvent283Type extends EventDataType
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
     * Блок 41. Сведения об обязательстве, если в отношении источника открыто конкурсное производство
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType $fL41SourceBankruptcy
     */
    private $fL41SourceBankruptcy = null;

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

