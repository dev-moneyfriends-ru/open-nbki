<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\UL24WarrantyType\UidGroupUL24WarrantyAType;

/**
 * Class representing UL24WarrantyType
 *
 * Блок 24. Сведения о поручительстве
 * XSD Type: UL_24_Warranty_Type
 */
class UL24WarrantyType extends GutdfSegment
{
    /**
     * 24.1. Признак наличия поручительства = 0
     *
     * @var string $warrantyFact0
     */
    private $warrantyFact0 = null;

    /**
     * 24.1. Признак наличия поручительства = 1
     *
     * @var string $warrantyFact1
     */
    private $warrantyFact1 = null;

    /**
     * @var UidGroupUL24WarrantyAType[] $uidGroupUL24Warranty
     */
    private $uidGroupUL24Warranty = [
        
    ];

    /**
     * Gets as warrantyFact0
     *
     * 24.1. Признак наличия поручительства = 0
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
     * 24.1. Признак наличия поручительства = 0
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
     * 24.1. Признак наличия поручительства = 1
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
     * 24.1. Признак наличия поручительства = 1
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
     * Adds as uidGroupUL24Warranty
     *
     * @return self
     * @param UidGroupUL24WarrantyAType $uidGroupUL24Warranty
     */
    public function addToUidGroupUL24Warranty(UidGroupUL24WarrantyAType $uidGroupUL24Warranty)
    {
        $this->uidGroupUL24Warranty[] = $uidGroupUL24Warranty;
        return $this;
    }

    /**
     * isset uidGroupUL24Warranty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUidGroupUL24Warranty($index)
    {
        return isset($this->uidGroupUL24Warranty[$index]);
    }

    /**
     * unset uidGroupUL24Warranty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUidGroupUL24Warranty($index)
    {
        unset($this->uidGroupUL24Warranty[$index]);
    }

    /**
     * Gets as uidGroupUL24Warranty
     *
     * @return UidGroupUL24WarrantyAType[]
     */
    public function getUidGroupUL24Warranty()
    {
        return $this->uidGroupUL24Warranty;
    }

    /**
     * Sets a new uidGroupUL24Warranty
     *
     * @param UidGroupUL24WarrantyAType[] $uidGroupUL24Warranty
     * @return self
     */
    public function setUidGroupUL24Warranty(array $uidGroupUL24Warranty = null)
    {
        $this->uidGroupUL24Warranty = $uidGroupUL24Warranty;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_24_Warranty';
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
        return 'Блок 24. Сведения о поручительстве';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $warranties = $this->sendData->getAccountReplyRUTDF()->getGuarantor();
        if(empty($warranties)){
            $this->warrantyFact0 = '';
            $this->warrantyFact1 = null;
            return;
        }
        $this->warrantyFact1 = '';
        $this->warrantyFact0 = null;

        foreach($warranties as $key => $warranty){
            $this->addToUidGroupUL24Warranty(new UidGroupUL24WarrantyAType($this->template, $key));
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
          'uidGroupUL24Warranty',
        ];
    }
}

