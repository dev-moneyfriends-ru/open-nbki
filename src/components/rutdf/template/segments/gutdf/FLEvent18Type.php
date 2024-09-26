<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent18Type
 *
 * Субъект или его представитель обратился в бюро с заявлением о внесении изменений в титульную часть кредитной истории
 * XSD Type: FL_Event_1_8_Type
 */
class FLEvent18Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 1,4
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType $fL14Group
     */
    private $fL14Group = null;

    /**
     * Блок 3. Дата и место рождения
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3BirthType $fL3Birth
     */
    private $fL3Birth = null;

    /**
     * Блок 2,5
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType $fL25Group
     */
    private $fL25Group = null;

    /**
     * Блок 6. Номер налогоплательщика и регистрационный номер
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType $fL6Tax
     */
    private $fL6Tax = null;

    /**
     * Блок 7. СНИЛС
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL7SocialType $fL7Social
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType $fL14Group
     * @return self
     */
    public function setFL14Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType $fL14Group)
    {
        $this->fL14Group = $fL14Group;
        return $this;
    }

    /**
     * Gets as fL3Birth
     *
     * Блок 3. Дата и место рождения
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3BirthType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3BirthType $fL3Birth
     * @return self
     */
    public function setFL3Birth(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL3BirthType $fL3Birth)
    {
        $this->fL3Birth = $fL3Birth;
        return $this;
    }

    /**
     * Gets as fL25Group
     *
     * Блок 2,5
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType $fL25Group
     * @return self
     */
    public function setFL25Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType $fL25Group)
    {
        $this->fL25Group = $fL25Group;
        return $this;
    }

    /**
     * Gets as fL6Tax
     *
     * Блок 6. Номер налогоплательщика и регистрационный номер
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType
     */
    public function getFL6Tax()
    {
        return $this->fL6Tax;
    }

    /**
     * Sets a new fL6Tax
     *
     * Блок 6. Номер налогоплательщика и регистрационный номер
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType $fL6Tax
     * @return self
     */
    public function setFL6Tax(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType $fL6Tax)
    {
        $this->fL6Tax = $fL6Tax;
        return $this;
    }

    /**
     * Gets as fL7Social
     *
     * Блок 7. СНИЛС
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL7SocialType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL7SocialType $fL7Social
     * @return self
     */
    public function setFL7Social(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL7SocialType $fL7Social)
    {
        $this->fL7Social = $fL7Social;
        return $this;
    }
}

