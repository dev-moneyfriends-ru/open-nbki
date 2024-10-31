<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType\UidGroupFL33WarrantyAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\UL24WarrantyType\UidGroupUL24WarrantyAType;

/**
 * Class representing FL33WarrantyType
 *
 * Блок 33. Сведения о поручительстве
 * XSD Type: FL_33_Warranty_Type
 */
class FL33WarrantyType extends GutdfSegment
{
    /**
     * 33.1. Признак наличия поручительства = 0
     *
     * @var string $warrantyFact0
     */
    private $warrantyFact0 = null;

    /**
     * 33.1. Признак наличия поручительства = 1
     *
     * @var string $warrantyFact1
     */
    private $warrantyFact1 = null;

    /**
     * @var UidGroupFL33WarrantyAType[] $uidGroupFL33Warranty
     */
    private $uidGroupFL33Warranty = [
        
    ];

    /**
     * Gets as warrantyFact0
     *
     * 33.1. Признак наличия поручительства = 0
     *
     * @return string
     */
    public function getWarrantyFact0()
    {
        return $this->warrantyFact0;
    }

    /**
     * Sets a new warrantyFact0
     *
     * 33.1. Признак наличия поручительства = 0
     *
     * @param string $warrantyFact0
     * @return self
     */
    public function setWarrantyFact0($warrantyFact0)
    {
        $this->warrantyFact0 = $warrantyFact0;
        return $this;
    }

    /**
     * Gets as warrantyFact1
     *
     * 33.1. Признак наличия поручительства = 1
     *
     * @return string
     */
    public function getWarrantyFact1()
    {
        return $this->warrantyFact1;
    }

    /**
     * Sets a new warrantyFact1
     *
     * 33.1. Признак наличия поручительства = 1
     *
     * @param string $warrantyFact1
     * @return self
     */
    public function setWarrantyFact1($warrantyFact1)
    {
        $this->warrantyFact1 = $warrantyFact1;
        return $this;
    }

    /**
     * Adds as uidGroupFL33Warranty
     *
     * @return self
     * @param UidGroupFL33WarrantyAType $uidGroupFL33Warranty
     */
    public function addToUidGroupFL33Warranty(UidGroupFL33WarrantyAType $uidGroupFL33Warranty)
    {
        $this->uidGroupFL33Warranty[] = $uidGroupFL33Warranty;
        return $this;
    }

    /**
     * isset uidGroupFL33Warranty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUidGroupFL33Warranty($index)
    {
        return isset($this->uidGroupFL33Warranty[$index]);
    }

    /**
     * unset uidGroupFL33Warranty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUidGroupFL33Warranty($index)
    {
        unset($this->uidGroupFL33Warranty[$index]);
    }

    /**
     * Gets as uidGroupFL33Warranty
     *
     * @return UidGroupFL33WarrantyAType[]
     */
    public function getUidGroupFL33Warranty()
    {
        return $this->uidGroupFL33Warranty;
    }

    /**
     * Sets a new uidGroupFL33Warranty
     *
     * @param UidGroupFL33WarrantyAType[] $uidGroupFL33Warranty
     * @return self
     */
    public function setUidGroupFL33Warranty(array $uidGroupFL33Warranty = null)
    {
        $this->uidGroupFL33Warranty = $uidGroupFL33Warranty;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_33_Warranty';
    }

    public function getFields(): array
    {
        return [
            'warrantyFact_0' => $this->warrantyFact0,
            'warrantyFact_1' => $this->warrantyFact1,
        ];
    }
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак наличия поручительства 0' => 'Код «1» – обязательство субъекта обеспечено поручительством; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 24 не передаются в соответствии со схемой Blocks.xsd.',
            'Признак наличия поручительства 1' => 'Код «1» – обязательство субъекта обеспечено поручительством; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 24 не передаются в соответствии со схемой Blocks.xsd.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 33. Сведения о поручительстве';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $warranties = $this->template->sendData->getAccountReplyRUTDF()->getGuarantor();
        if(empty($warranties)){
            $this->warrantyFact0 = '';
            $this->warrantyFact1 = null;
            return;
        }
        $this->warrantyFact1 = '';
        $this->warrantyFact0 = null;

        foreach($warranties as $key => $warranty){
            $this->addToUidGroupFL33Warranty(new UidGroupFL33WarrantyAType($this->template, $key));
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'warrantyFact_0' => 'warrantyFact0',
            'warrantyFact_1' => 'warrantyFact1',
            'uidGroupFL33Warranty',
        ];
    }
}

