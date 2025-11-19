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
    private $operationCode = EventDataType::OPERATION_CODE_B;

    /**
     * Блок 8. Регистрация физического лица по месту жительства или пребывания
     *
     * @var FL8AddrRegType[] $fL8AddrReg
     */
    private $fL8AddrReg = [
        
    ];

    /**
     * Блок 9. Фактическое место жительства
     *
     * @var FL9AddrFactType $fL9AddrFact
     */
    private $fL9AddrFact = null;

    /**
     * Блок 10. Контактные данные
     *
     * @var FL10ContactType[] $fL10Contact
     */
    private $fL10Contact = [

    ];

    /**
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @var FL11IndividualEntrepreneurType $fL11IndividualEntrepreneur
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
     * @param FL8AddrRegType $fL8AddrReg
     * @return self
     */
    public function addToFL8AddrReg(FL8AddrRegType $fL8AddrReg)
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
     * @return FL8AddrRegType[]
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
     * @param FL8AddrRegType[] $fL8AddrReg
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
     * @return FL9AddrFactType
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
     * @param FL9AddrFactType $fL9AddrFact
     * @return self
     */
    public function setFL9AddrFact(FL9AddrFactType $fL9AddrFact)
    {
        $this->fL9AddrFact = $fL9AddrFact;
        return $this;
    }

    /**
     * Adds as fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @param FL10ContactType $fL10Contact
     *@return self
     */
    public function addToFL10Contact(FL10ContactType $fL10Contact)
    {
        $this->fL10Contact[] = $fL10Contact;
        return $this;
    }

    /**
     * isset fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL10Contact($index)
    {
        return isset($this->fL10Contact[$index]);
    }

    /**
     * unset fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL10Contact($index)
    {
        unset($this->fL10Contact[$index]);
    }

    /**
     * Gets as fL10Contact
     *
     * Блок 10. Контактные данные
     *
     * @return FL10ContactType[]
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
     * @param FL10ContactType[] $fL10Contact
     * @return self
     */
    public function setFL10Contact(array $fL10Contact = null)
    {
        $this->fL10Contact = $fL10Contact;
        return $this;
    }

    /**
     * Gets as fL11IndividualEntrepreneur
     *
     * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя
     *
     * @return FL11IndividualEntrepreneurType
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
     * @param FL11IndividualEntrepreneurType $fL11IndividualEntrepreneur
     * @return self
     */
    public function setFL11IndividualEntrepreneur(FL11IndividualEntrepreneurType $fL11IndividualEntrepreneur)
    {
        $this->fL11IndividualEntrepreneur = $fL11IndividualEntrepreneur;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_Event_1_9';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Изменились сведения о субъекте в основной части кредитной истории, кроме сведений о дееспособности, банкротстве, индивидуальном рейтинге и кредитной оценке';
    }

    protected function initAttributes()
    {
        $this->addToFL8AddrReg(new FL8AddrRegType($this->template));
        $this->setFL9AddrFact(new FL9AddrFactType($this->template));
        foreach ($this->sendData->getContactReply() as $key => $value) {
            $this->addToFL10Contact(new FL10ContactType($this->template, $key));
        }
        $this->setFL11IndividualEntrepreneur(new FL11IndividualEntrepreneurType($this->template));
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fL8AddrReg',
            'fL9AddrFact',
            'fL10Contact',
            'fL11IndividualEntrepreneur',
        ];
    }
}

