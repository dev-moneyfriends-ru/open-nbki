<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType\FL1NameAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType\FL4DocAType;

/**
 * Class representing FL14GroupType
 *
 * Блок 1,4
 * XSD Type: FL_1_4_Group_Type
 */
class FL14GroupType extends GutdfSegment
{
    /**
     * Блок 1. Имя
     *
     * @var FL1NameAType $fL1Name
     */
    private $fL1Name = null;

    /**
     * Блок 4. Документ, удостоверяющий личность
     *
     * @var FL4DocAType[] $fL4Doc
     */
    private $fL4Doc = [
        
    ];

    /**
     * Gets as fL1Name
     *
     * Блок 1. Имя
     *
     * @return FL1NameAType
     */
    public function getFL1Name()
    {
        return $this->fL1Name;
    }

    /**
     * Sets a new fL1Name
     *
     * Блок 1. Имя
     *
     * @param FL1NameAType $fL1Name
     * @return self
     */
    public function setFL1Name(FL1NameAType $fL1Name)
    {
        $this->fL1Name = $fL1Name;
        return $this;
    }

    /**
     * Adds as fL4Doc
     *
     * Блок 4. Документ, удостоверяющий личность
     *
     * @return self
     * @param FL4DocAType $fL4Doc
     */
    public function addToFL4Doc(FL4DocAType $fL4Doc)
    {
        $this->fL4Doc[] = $fL4Doc;
        return $this;
    }

    /**
     * isset fL4Doc
     *
     * Блок 4. Документ, удостоверяющий личность
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL4Doc($index)
    {
        return isset($this->fL4Doc[$index]);
    }

    /**
     * unset fL4Doc
     *
     * Блок 4. Документ, удостоверяющий личность
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL4Doc($index)
    {
        unset($this->fL4Doc[$index]);
    }

    /**
     * Gets as fL4Doc
     *
     * Блок 4. Документ, удостоверяющий личность
     *
     * @return FL4DocAType[]
     */
    public function getFL4Doc()
    {
        return $this->fL4Doc;
    }

    /**
     * Sets a new fL4Doc
     *
     * Блок 4. Документ, удостоверяющий личность
     *
     * @param FL4DocAType[] $fL4Doc
     * @return self
     */
    public function setFL4Doc(array $fL4Doc)
    {
        $this->fL4Doc = $fL4Doc;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_1_4_Group';
    }

    public function getFields(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'ФЛ';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $this->fL1Name = new FL1NameAType($this->template);
        $this->addToFL4Doc(new FL4DocAType($this->template));
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fL1Name',
            'fL4Doc',
        ];
    }
}

