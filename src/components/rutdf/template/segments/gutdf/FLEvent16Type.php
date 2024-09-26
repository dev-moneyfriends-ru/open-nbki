<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent16Type
 *
 * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
 * XSD Type: FL_Event_1_6_Type
 */
class FLEvent16Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 43. Сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL43CollectionType $fL43Collection
     */
    private $fL43Collection = null;

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
     * Gets as fL43Collection
     *
     * Блок 43. Сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL43CollectionType
     */
    public function getFL43Collection()
    {
        return $this->fL43Collection;
    }

    /**
     * Sets a new fL43Collection
     *
     * Блок 43. Сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL43CollectionType $fL43Collection
     * @return self
     */
    public function setFL43Collection(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL43CollectionType $fL43Collection)
    {
        $this->fL43Collection = $fL43Collection;
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

