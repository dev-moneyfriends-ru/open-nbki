<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent16Type
 *
 * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
 * XSD Type: UL_Event_1_6_Type
 */
class ULEvent16Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 33. Сведения о взыскании платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL33CollectionType $uL33Collection
     */
    private $uL33Collection = null;

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
     * Gets as uL33Collection
     *
     * Блок 33. Сведения о взыскании платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL33CollectionType
     */
    public function getUL33Collection()
    {
        return $this->uL33Collection;
    }

    /**
     * Sets a new uL33Collection
     *
     * Блок 33. Сведения о взыскании платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL33CollectionType $uL33Collection
     * @return self
     */
    public function setUL33Collection(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL33CollectionType $uL33Collection)
    {
        $this->uL33Collection = $uL33Collection;
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

