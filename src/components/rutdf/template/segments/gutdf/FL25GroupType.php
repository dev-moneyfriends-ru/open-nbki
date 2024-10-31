<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType\FL2PrevNameAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType\FL5PrevDocAType;

/**
 * Class representing FL25GroupType
 *
 * Блок 2,5
 * XSD Type: FL_2_5_Group_Type
 */
class FL25GroupType extends GutdfSegment
{
    /**
     * Блок 2. Предыдущее имя
     *
     * @var FL2PrevNameAType $fL2PrevName
     */
    private $fL2PrevName = null;

    /**
     * Блок 5. Документ, ранее удостоверявший личность
     *
     * @var FL5PrevDocAType[] $fL5PrevDoc
     */
    private $fL5PrevDoc = [

    ];

    /**
     * Gets as fL2PrevName
     *
     * Блок 2. Предыдущее имя
     *
     * @return FL2PrevNameAType
     */
    public function getFL2PrevName()
    {
        return $this->fL2PrevName;
    }

    /**
     * Sets a new fL2PrevName
     *
     * Блок 2. Предыдущее имя
     *
     * @param FL2PrevNameAType $fL2PrevName
     * @return self
     */
    public function setFL2PrevName(FL2PrevNameAType $fL2PrevName)
    {
        $this->fL2PrevName = $fL2PrevName;
        return $this;
    }

    /**
     * Adds as fL5PrevDoc
     *
     * Блок 5. Документ, ранее удостоверявший личность
     *
     * @param FL5PrevDocAType $fL5PrevDoc
     * @return self
     */
    public function addToFL5PrevDoc(FL5PrevDocAType $fL5PrevDoc)
    {
        $this->fL5PrevDoc[] = $fL5PrevDoc;
        return $this;
    }

    /**
     * isset fL5PrevDoc
     *
     * Блок 5. Документ, ранее удостоверявший личность
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL5PrevDoc($index)
    {
        return isset($this->fL5PrevDoc[$index]);
    }

    /**
     * unset fL5PrevDoc
     *
     * Блок 5. Документ, ранее удостоверявший личность
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL5PrevDoc($index)
    {
        unset($this->fL5PrevDoc[$index]);
    }

    /**
     * Gets as fL5PrevDoc
     *
     * Блок 5. Документ, ранее удостоверявший личность
     *
     * @return FL5PrevDocAType[]
     */
    public function getFL5PrevDoc()
    {
        return $this->fL5PrevDoc;
    }

    /**
     * Sets a new fL5PrevDoc
     *
     * Блок 5. Документ, ранее удостоверявший личность
     *
     * @param FL5PrevDocAType[] $fL5PrevDoc
     * @return self
     */
    public function setFL5PrevDoc(array $fL5PrevDoc)
    {
        $this->fL5PrevDoc = $fL5PrevDoc;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_2_5_Group';
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
        return 'Блок 2,5';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $this->fL2PrevName = new FL2PrevNameAType($this->template);
        $this->addToFL5PrevDoc(new FL5PrevDocAType($this->template));
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fL2PrevName',
            'fL5PrevDoc',
        ];
    }
}

