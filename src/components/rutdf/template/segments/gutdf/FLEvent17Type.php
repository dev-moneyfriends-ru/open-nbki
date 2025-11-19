<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent17Type
 *
 * Изменились сведения титульной части кредитной истории субъекта
 * XSD Type: FL_Event_1_7_Type
 */
class FLEvent17Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = self::OPERATION_CODE_B;

    /**
     * Блок 1,4
     *
     * @var FL14GroupType $fL14Group
     */
    private $fL14Group = null;

    /**
     * Блок 2,5
     *
     * @var FL25GroupType[] $fL25Group
     */
    private $fL25Group = [

    ];

    /**
     * Блок 3. Дата и место рождения
     *
     * @var FL3BirthType $fL3Birth
     */
    private $fL3Birth = null;

    /**
     * Блок 6. Номер налогоплательщика, регистрационный номер и признак специального налогового режима
     *
     * @var FL6TaxType[] $fL6Tax
     */
    private $fL6Tax = [

    ];

    /**
     * Блок 7. СНИЛС
     *
     * @var FL7SocialType $fL7Social
     */
    private $fL7Social = null;

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
     * Gets as fL14Group
     *
     * Блок 1,4
     *
     * @return FL14GroupType
     */
    public function getFL14Group()
    {
        return $this->fL14Group;
    }

    /**
     * Sets a new fL14Group
     *
     * Блок 1,4
     *
     * @param FL14GroupType $fL14Group
     * @return self
     */
    public function setFL14Group(FL14GroupType $fL14Group)
    {
        $this->fL14Group = $fL14Group;
        return $this;
    }

    /**
     * Adds as fL25Group
     *
     * Блок 2,5
     *
     * @param FL25GroupType $fL25Group
     * @return self
     */
    public function addToFL25Group(FL25GroupType $fL25Group)
    {
        $this->fL25Group[] = $fL25Group;
        return $this;
    }

    /**
     * isset fL25Group
     *
     * Блок 2,5
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL25Group($index)
    {
        return isset($this->fL25Group[$index]);
    }

    /**
     * unset fL25Group
     *
     * Блок 2,5
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL25Group($index)
    {
        unset($this->fL25Group[$index]);
    }

    /**
     * Gets as fL25Group
     *
     * Блок 2,5
     *
     * @return FL25GroupType[]
     */
    public function getFL25Group()
    {
        return $this->fL25Group;
    }

    /**
     * Sets a new fL25Group
     *
     * Блок 2,5
     *
     * @param FL25GroupType[] $fL25Group
     * @return self
     */
    public function setFL25Group(array $fL25Group)
    {
        $this->fL25Group = $fL25Group;
        return $this;
    }

    /**
     * Gets as fL3Birth
     *
     * Блок 3. Дата и место рождения
     *
     * @return FL3BirthType
     */
    public function getFL3Birth()
    {
        return $this->fL3Birth;
    }

    /**
     * Sets a new fL3Birth
     *
     * Блок 3. Дата и место рождения
     *
     * @param FL3BirthType $fL3Birth
     * @return self
     */
    public function setFL3Birth(FL3BirthType $fL3Birth)
    {
        $this->fL3Birth = $fL3Birth;
        return $this;
    }

    /**
     * Adds as fL6Tax
     *
     * Блок 6. Номер налогоплательщика, регистрационный номер и признак специального налогового режима
     *
     * @param FL6TaxType $fL6Tax
     * @return self
     */
    public function addToFL6Tax(FL6TaxType $fL6Tax)
    {
        $this->fL6Tax[] = $fL6Tax;
        return $this;
    }

    /**
     * isset fL6Tax
     *
     * Блок 6. Номер налогоплательщика, регистрационный номер и признак специального налогового режима
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL6Tax($index)
    {
        return isset($this->fL6Tax[$index]);
    }

    /**
     * unset fL6Tax
     *
     * Блок 6. Номер налогоплательщика, регистрационный номер и признак специального налогового режима
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL6Tax($index)
    {
        unset($this->fL6Tax[$index]);
    }

    /**
     * Gets as fL6Tax
     *
     * Блок 6. Номер налогоплательщика, регистрационный номер и признак специального налогового режима
     *
     * @return FL6TaxType[]
     */
    public function getFL6Tax()
    {
        return $this->fL6Tax;
    }

    /**
     * Sets a new fL6Tax
     *
     * Блок 6. Номер налогоплательщика, регистрационный номер и признак специального налогового режима
     *
     * @param FL6TaxType[] $fL6Tax
     * @return self
     */
    public function setFL6Tax(array $fL6Tax = null)
    {
        $this->fL6Tax = $fL6Tax;
        return $this;
    }

    /**
     * Gets as fL7Social
     *
     * Блок 7. СНИЛС
     *
     * @return FL7SocialType
     */
    public function getFL7Social()
    {
        return $this->fL7Social;
    }

    /**
     * Sets a new fL7Social
     *
     * Блок 7. СНИЛС
     *
     * @param FL7SocialType $fL7Social
     * @return self
     */
    public function setFL7Social(?FL7SocialType $fL7Social = null)
    {
        $this->fL7Social = $fL7Social;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_Event_1_7';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Изменились сведения титульной части кредитной истории субъекта';
    }

    protected function initAttributes()
    {
        $this->setFL14Group(new FL14GroupType($this->template));
        $this->addToFL25Group(new FL25GroupType($this->template));
        $this->setFL3Birth(new FL3BirthType($this->template));
        $this->addToFL6Tax(new FL6TaxType($this->template));
        if($this->sendData->getSNILSReply()){
            $this->fL7Social = new FL7SocialType($this->template);
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fL14Group',
            'fL25Group',
            'fL3Birth',
            'fL6Tax',
            'fL7Social',
        ];
    }
}

