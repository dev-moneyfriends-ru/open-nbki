<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType;

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
     * @var UL1NameType $uL1Name
     */
    private $uL1Name = null;

    /**
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @var UL2AddressType[] $uL2Address
     */
    private $uL2Address = [

    ];

    /**
     * Блок 3. Регистрационный номер
     *
     * @var UL3RegType $uL3Reg
     */
    private $uL3Reg = null;

    /**
     * Блок 4. Номер налогоплательщика
     *
     * @var TaxNumGroupUL4TaxAType[] $uL4Tax
     */
    private $uL4Tax = null;

    /**
     * Блок 5. Сведения о правопреемстве при реорганизации
     *
     * @var UL5ReorgType[] $uL5Reorg
     */
    private $uL5Reorg = [
        
    ];

    /**
     * Gets as uL1Name
     *
     * Блок 1. Наименование юридического лица
     *
     * @return UL1NameType
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
     * @param UL1NameType $uL1Name
     * @return self
     */
    public function setUL1Name(UL1NameType $uL1Name)
    {
        $this->uL1Name = $uL1Name;
        return $this;
    }

    /**
     * Adds as uL2Address
     *
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @param UL2AddressType $uL2Address
     * @return self
     */
    public function addToUL2Address(UL2AddressType $uL2Address)
    {
        $this->uL2Address[] = $uL2Address;
        return $this;
    }

    /**
     * isset uL2Address
     *
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL2Address($index)
    {
        return isset($this->uL2Address[$index]);
    }

    /**
     * unset uL2Address
     *
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL2Address($index)
    {
        unset($this->uL2Address[$index]);
    }

    /**
     * Gets as uL2Address
     *
     * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
     *
     * @return UL2AddressType[]
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
     * @param UL2AddressType[] $uL2Address
     * @return self
     */
    public function setUL2Address(array $uL2Address)
    {
        $this->uL2Address = $uL2Address;
        return $this;
    }

    /**
     * Gets as uL3Reg
     *
     * Блок 3. Регистрационный номер
     *
     * @return UL3RegType
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
     * @param UL3RegType $uL3Reg
     * @return self
     */
    public function setUL3Reg(?UL3RegType $uL3Reg = null)
    {
        $this->uL3Reg = $uL3Reg;
        return $this;
    }

    /**
     * Adds as taxNumGroupUL4Tax
     *
     * Блок 4. Номер налогоплательщика
     *
     * @return self
     * @param TaxNumGroupUL4TaxAType $taxNumGroupUL4Tax
     */
    public function addToUL4Tax(TaxNumGroupUL4TaxAType $taxNumGroupUL4Tax)
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
     * @return TaxNumGroupUL4TaxAType[]
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
     * @param TaxNumGroupUL4TaxAType[] $uL4Tax
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
     * Блок 5. Сведения о правопреемстве при реорганизации
     *
     * @param UL5ReorgType $uL5Reorg
     * @return self
     */
    public function addToUL5Reorg(UL5ReorgType $uL5Reorg)
    {
        $this->uL5Reorg[] = $uL5Reorg;
        return $this;
    }

    /**
     * isset uL5Reorg
     *
     * Блок 5. Сведения о правопреемстве при реорганизации
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
     * Блок 5. Сведения о правопреемстве при реорганизации
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
     * Блок 5. Сведения о правопреемстве при реорганизации
     *
     * @return UL5ReorgType[]
     */
    public function getUL5Reorg()
    {
        return $this->uL5Reorg;
    }

    /**
     * Sets a new uL5Reorg
     *
     * Блок 5. Сведения о правопреемстве при реорганизации
     *
     * @param UL5ReorgType[] $uL5Reorg
     * @return self
     */
    public function setUL5Reorg(array $uL5Reorg = null)
    {
        $this->uL5Reorg = $uL5Reorg;
        return $this;
    }

    public function getSegmentName(): string
    {
        return 'Title';
    }

    public function getFields(): array
    {
        return [];
    }

    public function getFieldsDescriptions(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return '';
    }

    public function getTitle(): string
    {
        return 'Титульная часть ЮЛ';
    }

    public function getProperties(): array
    {
        return [];
    }

    public function init(): void
    {
        $this->setUL1Name(new UL1NameType($this->template));
        $this->addToUL2Address(new UL2AddressType($this->template));
        $this->setUL3Reg(new UL3RegType($this->template));
        $this->addToUL4Tax(new TaxNumGroupUL4TaxAType($this->template));
        $this->addToUL5Reorg(new UL5ReorgType($this->template));
    }

    public function getXmlAttributes(): array
    {
        return [
            'uL1Name',
            'uL2Address',
            'uL3Reg',
            'UL_4_Tax' => 'uL4Tax',
            'uL5Reorg',
        ];
    }
}

