<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL24WarrantyType
 *
 * Блок 24. Сведения о поручительстве
 * XSD Type: UL_24_Warranty_Type
 */
class UL24WarrantyType
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
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL24WarrantyType\UidGroupUL24WarrantyAType[] $uidGroupUL24Warranty
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL24WarrantyType\UidGroupUL24WarrantyAType $uidGroupUL24Warranty
     *@return self
     */
    public function addToUidGroupUL24Warranty(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL24WarrantyType\UidGroupUL24WarrantyAType $uidGroupUL24Warranty)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL24WarrantyType\UidGroupUL24WarrantyAType[]
     */
    public function getUidGroupUL24Warranty()
    {
        return $this->uidGroupUL24Warranty;
    }

    /**
     * Sets a new uidGroupUL24Warranty
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL24WarrantyType\UidGroupUL24WarrantyAType[] $uidGroupUL24Warranty
     * @return self
     */
    public function setUidGroupUL24Warranty(array $uidGroupUL24Warranty = null)
    {
        $this->uidGroupUL24Warranty = $uidGroupUL24Warranty;
        return $this;
    }
}

