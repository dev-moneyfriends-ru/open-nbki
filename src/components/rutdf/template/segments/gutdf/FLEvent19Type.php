<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent19Type
 *
 * Изменились сведения о субъекте в основной части кредитной истории, кроме сведений о дееспособности, банкротстве, индивидуальном рейтинге и кредитной оценке
 * XSD Type: FL_Event_1_9_Type
 */
class FLEvent19Type extends EventDataType
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
}

