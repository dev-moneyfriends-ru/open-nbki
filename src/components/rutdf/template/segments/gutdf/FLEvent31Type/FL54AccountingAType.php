<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL54AccountingAType
 */
class FL54AccountingAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54AccountingCurrent
     */
    private $fL54AccountingCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54AccountingNew
     */
    private $fL54AccountingNew = null;

    /**
     * Gets as fL54AccountingCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType
     */
    public function getFL54AccountingCurrent()
    {
        return $this->fL54AccountingCurrent;
    }

    /**
     * Sets a new fL54AccountingCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54AccountingCurrent
     * @return self
     */
    public function setFL54AccountingCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54AccountingCurrent = null)
    {
        $this->fL54AccountingCurrent = $fL54AccountingCurrent;
        return $this;
    }

    /**
     * Gets as fL54AccountingNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType
     */
    public function getFL54AccountingNew()
    {
        return $this->fL54AccountingNew;
    }

    /**
     * Sets a new fL54AccountingNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54AccountingNew
     * @return self
     */
    public function setFL54AccountingNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL54AccountingType $fL54AccountingNew = null)
    {
        $this->fL54AccountingNew = $fL54AccountingNew;
        return $this;
    }
}

