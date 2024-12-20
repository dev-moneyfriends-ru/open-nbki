<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL1NameType
 *
 * Блок 1. Наименование юридического лица
 * XSD Type: UL_1_Name_Type
 */
class UL1NameType extends GutdfSegment
{
    /**
     * 1.1. Полное наименование
     *
     * @var string $fullName
     */
    private $fullName = null;

    /**
     * 1.2. Сокращенное наименование
     *
     * @var string $shortName
     */
    private $shortName = null;

    /**
     * 1.3. Иное наименование
     *
     * @var string[] $otherName
     */
    private $otherName = [

    ];

    /**
     * 1.4. Признак смены наименования = 0
     *
     * @var string $change0
     */
    private $change0 = '';

    /**
     * 1.4. Признак смены наименования = 1
     *
     * @var string $change1
     */
    private $change1 = null;

    /**
     * 1.5. Полное наименование до его смены
     *
     * @var string[] $prevFull
     */
    private $prevFull = [

    ];

    /**
     * Gets as fullName
     *
     * 1.1. Полное наименование
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets a new fullName
     *
     * 1.1. Полное наименование
     *
     * @param string $fullName
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Gets as shortName
     *
     * 1.2. Сокращенное наименование
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName
     *
     * 1.2. Сокращенное наименование
     *
     * @param string $shortName
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * Adds as otherName
     *
     * 1.3. Иное наименование
     *
     * @param string $otherName
     * @return self
     */
    public function addToOtherName($otherName)
    {
        $this->otherName[] = $otherName;
        return $this;
    }

    /**
     * isset otherName
     *
     * 1.3. Иное наименование
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherName($index)
    {
        return isset($this->otherName[$index]);
    }

    /**
     * unset otherName
     *
     * 1.3. Иное наименование
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherName($index)
    {
        unset($this->otherName[$index]);
    }

    /**
     * Gets as otherName
     *
     * 1.3. Иное наименование
     *
     * @return string[]
     */
    public function getOtherName()
    {
        return $this->otherName;
    }

    /**
     * Sets a new otherName
     *
     * 1.3. Иное наименование
     *
     * @param string $otherName
     * @return self
     */
    public function setOtherName(array $otherName = null)
    {
        $this->otherName = $otherName;
        return $this;
    }

    /**
     * Gets as change0
     *
     * 1.4. Признак смены наименования = 0
     *
     * @return string
     */
    public function getChange0()
    {
        return $this->change0;
    }

    /**
     * Sets a new change0
     *
     * 1.4. Признак смены наименования = 0
     *
     * @param string $change0
     * @return self
     */
    public function setChange0($change0)
    {
        $this->change0 = $change0;
        return $this;
    }

    /**
     * Gets as change1
     *
     * 1.4. Признак смены наименования = 1
     *
     * @return string
     */
    public function getChange1()
    {
        return $this->change1;
    }

    /**
     * Sets a new change1
     *
     * 1.4. Признак смены наименования = 1
     *
     * @param string $change1
     * @return self
     */
    public function setChange1($change1)
    {
        $this->change1 = $change1;
        return $this;
    }

    /**
     * Adds as prevFull
     *
     * 1.5. Полное наименование до его смены
     *
     * @param string $prevFull
     * @return self
     */
    public function addToPrevFull($prevFull)
    {
        $this->prevFull[] = $prevFull;
        return $this;
    }

    /**
     * isset prevFull
     *
     * 1.5. Полное наименование до его смены
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrevFull($index)
    {
        return isset($this->prevFull[$index]);
    }

    /**
     * unset prevFull
     *
     * 1.5. Полное наименование до его смены
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrevFull($index)
    {
        unset($this->prevFull[$index]);
    }

    /**
     * Gets as prevFull
     *
     * 1.5. Полное наименование до его смены
     *
     * @return string[]
     */
    public function getPrevFull()
    {
        return $this->prevFull;
    }

    /**
     * Sets a new prevFull
     *
     * 1.5. Полное наименование до его смены
     *
     * @param string $prevFull
     * @return self
     */
    public function setPrevFull(array $prevFull = null)
    {
        $this->prevFull = $prevFull;
        return $this;
    }

    public function getSegmentName(): string
    {
        return 'UL_1_Name';
    }

    public function getFieldsDescriptions(): array
    {
        return [
            'Полное наименование' => 'Полное наименование юридического лица на русском языке. Недопустимо указание символа дефиса вместо значения.',
            'Сокращенное наименование' => 'Сокращенное наименование юридического лица на русском языке.',
            'Иное наименование' => 'Фирменное наименование юридического лица или его наименование на иностранном языке.
Заполняется при наличии у источника сведений об ином наименовании субъекта.
',
            'Наименование не менялось' => '',
            'Признак смены наименования' => '',
            'Полное наименование до его смены' => '',
        ];
    }

    public function getDescription(): string
    {
        return '';
    }

    public function getTitle(): string
    {
        return 'Блок 1. Наименование юридического лица';
    }

    public function getProperties(): array
    {
        return [];
    }

    public function init(): void
    {
        $this->setFullName($this->sendData->getBusinessReply()->businessName);
        $this->setShortName($this->sendData->getBusinessReply()->abbreviatedBusinessName);
        $this->addToOtherName($this->sendData->getBusinessReply()->businessNameAlt);
        if (!empty($this->sendData->getBusinessReply()->businessNamebfrChange)) {
            $this->setChange0(null);
            $this->setChange1('');
            $this->addToPrevFull($this->sendData->getBusinessReply()->businessNameBfrChange);
        }
    }

    public function getXmlAttributes(): array
    {
        return [
            'fullName',
            'shortName',
            'otherName',
            'change_0' => 'change0',
            'change_1' => 'change1',
            'prevFull',
        ];
    }
}

