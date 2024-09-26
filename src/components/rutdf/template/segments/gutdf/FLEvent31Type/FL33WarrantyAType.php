<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL33WarrantyAType
 */
class FL33WarrantyAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType $fL33WarrantyCurrent
     */
    private $fL33WarrantyCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType $fL33WarrantyNew
     */
    private $fL33WarrantyNew = null;

    /**
     * Gets as fL33WarrantyCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType
     */
    public function getFL33WarrantyCurrent()
    {
        return $this->fL33WarrantyCurrent;
    }

    /**
     * Sets a new fL33WarrantyCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType $fL33WarrantyCurrent
     * @return self
     */
    public function setFL33WarrantyCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType $fL33WarrantyCurrent = null)
    {
        $this->fL33WarrantyCurrent = $fL33WarrantyCurrent;
        return $this;
    }

    /**
     * Gets as fL33WarrantyNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType
     */
    public function getFL33WarrantyNew()
    {
        return $this->fL33WarrantyNew;
    }

    /**
     * Sets a new fL33WarrantyNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType $fL33WarrantyNew
     * @return self
     */
    public function setFL33WarrantyNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL33WarrantyType $fL33WarrantyNew = null)
    {
        $this->fL33WarrantyNew = $fL33WarrantyNew;
        return $this;
    }
}

