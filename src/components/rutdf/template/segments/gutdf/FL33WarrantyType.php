<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL33WarrantyType
 *
 * Блок 33. Сведения о поручительстве
 * XSD Type: FL_33_Warranty_Type
 */
class FL33WarrantyType
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
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType\UidGroupFL33WarrantyAType[] $uidGroupFL33Warranty
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType\UidGroupFL33WarrantyAType $uidGroupFL33Warranty
     *@return self
     */
    public function addToUidGroupFL33Warranty(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType\UidGroupFL33WarrantyAType $uidGroupFL33Warranty)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType\UidGroupFL33WarrantyAType[]
     */
    public function getUidGroupFL33Warranty()
    {
        return $this->uidGroupFL33Warranty;
    }

    /**
     * Sets a new uidGroupFL33Warranty
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType\UidGroupFL33WarrantyAType[] $uidGroupFL33Warranty
     * @return self
     */
    public function setUidGroupFL33Warranty(array $uidGroupFL33Warranty = null)
    {
        $this->uidGroupFL33Warranty = $uidGroupFL33Warranty;
        return $this;
    }
}

