<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent15Type
 *
 * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
 * XSD Type: FL_Event_1_5_Type
 */
class FLEvent15Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType[] $fL8AddrReg
     */
    private $fL8AddrReg = [
        
    ];

    /**
     * Блок 9. Фактическое место жительства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType $fL9AddrFact
     */
    private $fL9AddrFact = null;

    /**
     * Блок 10. Контактные данные
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType $fL10Contact
     */
    private $fL10Contact = null;

    /**
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL11IndividualEntrepreneurType $fL11IndividualEntrepreneur
     */
    private $fL11IndividualEntrepreneur = null;

    /**
     * Блок 12. Сведения о дееспособности
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12Capacity
     */
    private $fL12Capacity = null;

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
     * Adds as fL8AddrReg
     *
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType $fL8AddrReg
     *@return self
     */
    public function addToFL8AddrReg(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType $fL8AddrReg)
    {
        $this->fL8AddrReg[] = $fL8AddrReg;
        return $this;
    }

    /**
     * isset fL8AddrReg
     *
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL8AddrReg($index)
    {
        return isset($this->fL8AddrReg[$index]);
    }

    /**
     * unset fL8AddrReg
     *
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL8AddrReg($index)
    {
        unset($this->fL8AddrReg[$index]);
    }

    /**
     * Gets as fL8AddrReg
     *
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType[]
     */
    public function getFL8AddrReg()
    {
        return $this->fL8AddrReg;
    }

    /**
     * Sets a new fL8AddrReg
     *
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType[] $fL8AddrReg
     * @return self
     */
    public function setFL8AddrReg(array $fL8AddrReg)
    {
        $this->fL8AddrReg = $fL8AddrReg;
        return $this;
    }

    /**
     * Gets as fL9AddrFact
     *
     * Блок 9. Фактическое место жительства
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType
     */
    public function getFL9AddrFact()
    {
        return $this->fL9AddrFact;
    }

    /**
     * Sets a new fL9AddrFact
     *
     * Блок 9. Фактическое место жительства
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType $fL9AddrFact
     * @return self
     */
    public function setFL9AddrFact(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType $fL9AddrFact)
    {
        $this->fL9AddrFact = $fL9AddrFact;
        return $this;
    }

    /**
     * Gets as fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType
     */
    public function getFL10Contact()
    {
        return $this->fL10Contact;
    }

    /**
     * Sets a new fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType $fL10Contact
     * @return self
     */
    public function setFL10Contact(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType $fL10Contact)
    {
        $this->fL10Contact = $fL10Contact;
        return $this;
    }

    /**
     * Gets as fL11IndividualEntrepreneur
     *
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL11IndividualEntrepreneurType
     */
    public function getFL11IndividualEntrepreneur()
    {
        return $this->fL11IndividualEntrepreneur;
    }

    /**
     * Sets a new fL11IndividualEntrepreneur
     *
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL11IndividualEntrepreneurType $fL11IndividualEntrepreneur
     * @return self
     */
    public function setFL11IndividualEntrepreneur(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL11IndividualEntrepreneurType $fL11IndividualEntrepreneur)
    {
        $this->fL11IndividualEntrepreneur = $fL11IndividualEntrepreneur;
        return $this;
    }

    /**
     * Gets as fL12Capacity
     *
     * Блок 12. Сведения о дееспособности
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType
     */
    public function getFL12Capacity()
    {
        return $this->fL12Capacity;
    }

    /**
     * Sets a new fL12Capacity
     *
     * Блок 12. Сведения о дееспособности
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12Capacity
     * @return self
     */
    public function setFL12Capacity(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12Capacity)
    {
        $this->fL12Capacity = $fL12Capacity;
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

