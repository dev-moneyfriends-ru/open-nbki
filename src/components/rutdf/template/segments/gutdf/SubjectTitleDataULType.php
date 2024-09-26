<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing SubjectTitleDataULType
 *
 * Титульная часть
 * XSD Type: SubjectTitleDataUL
 */
class SubjectTitleDataULType extends SubjectTitleDataType
{
    /**
     * Блок 1. Наименование юридического лица
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL1NameType $uL1Name
     */
    private $uL1Name = null;

    /**
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType $uL2Address
     */
    private $uL2Address = null;

    /**
     * Блок 3. Регистрационный номер
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL3RegType $uL3Reg
     */
    private $uL3Reg = null;

    /**
     * Блок 4. Номер налогоплательщика
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType[] $uL4Tax
     */
    private $uL4Tax = null;

    /**
     * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType[] $uL5Reorg
     */
    private $uL5Reorg = [
        
    ];

    /**
     * Gets as uL1Name
     *
     * Блок 1. Наименование юридического лица
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL1NameType
     */
    public function getUL1Name()
    {
        return $this->uL1Name;
    }

    /**
     * Sets a new uL1Name
     *
     * Блок 1. Наименование юридического лица
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL1NameType $uL1Name
     * @return self
     */
    public function setUL1Name(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL1NameType $uL1Name)
    {
        $this->uL1Name = $uL1Name;
        return $this;
    }

    /**
     * Gets as uL2Address
     *
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType
     */
    public function getUL2Address()
    {
        return $this->uL2Address;
    }

    /**
     * Sets a new uL2Address
     *
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType $uL2Address
     * @return self
     */
    public function setUL2Address(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType $uL2Address)
    {
        $this->uL2Address = $uL2Address;
        return $this;
    }

    /**
     * Gets as uL3Reg
     *
     * Блок 3. Регистрационный номер
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL3RegType
     */
    public function getUL3Reg()
    {
        return $this->uL3Reg;
    }

    /**
     * Sets a new uL3Reg
     *
     * Блок 3. Регистрационный номер
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL3RegType $uL3Reg
     * @return self
     */
    public function setUL3Reg(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL3RegType $uL3Reg = null)
    {
        $this->uL3Reg = $uL3Reg;
        return $this;
    }

    /**
     * Adds as taxNumGroupUL4Tax
     *
     * Блок 4. Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType $taxNumGroupUL4Tax
     *@return self
     */
    public function addToUL4Tax(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType $taxNumGroupUL4Tax)
    {
        $this->uL4Tax[] = $taxNumGroupUL4Tax;
        return $this;
    }

    /**
     * isset uL4Tax
     *
     * Блок 4. Номер налогоплательщика
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL4Tax($index)
    {
        return isset($this->uL4Tax[$index]);
    }

    /**
     * unset uL4Tax
     *
     * Блок 4. Номер налогоплательщика
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL4Tax($index)
    {
        unset($this->uL4Tax[$index]);
    }

    /**
     * Gets as uL4Tax
     *
     * Блок 4. Номер налогоплательщика
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType[]
     */
    public function getUL4Tax()
    {
        return $this->uL4Tax;
    }

    /**
     * Sets a new uL4Tax
     *
     * Блок 4. Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType[] $uL4Tax
     * @return self
     */
    public function setUL4Tax(array $uL4Tax = null)
    {
        $this->uL4Tax = $uL4Tax;
        return $this;
    }

    /**
     * Adds as uL5Reorg
     *
     * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType $uL5Reorg
     *@return self
     */
    public function addToUL5Reorg(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType $uL5Reorg)
    {
        $this->uL5Reorg[] = $uL5Reorg;
        return $this;
    }

    /**
     * isset uL5Reorg
     *
     * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL5Reorg($index)
    {
        return isset($this->uL5Reorg[$index]);
    }

    /**
     * unset uL5Reorg
     *
     * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL5Reorg($index)
    {
        unset($this->uL5Reorg[$index]);
    }

    /**
     * Gets as uL5Reorg
     *
     * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType[]
     */
    public function getUL5Reorg()
    {
        return $this->uL5Reorg;
    }

    /**
     * Sets a new uL5Reorg
     *
     * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType[] $uL5Reorg
     * @return self
     */
    public function setUL5Reorg(array $uL5Reorg = null)
    {
        $this->uL5Reorg = $uL5Reorg;
        return $this;
    }
}

