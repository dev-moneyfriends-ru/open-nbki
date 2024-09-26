<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL6TaxAType
 */
class FL6TaxAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType $fL6TaxCurrent
     */
    private $fL6TaxCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType $fL6TaxNew
     */
    private $fL6TaxNew = null;

    /**
     * Gets as fL6TaxCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType
     */
    public function getFL6TaxCurrent()
    {
        return $this->fL6TaxCurrent;
    }

    /**
     * Sets a new fL6TaxCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType $fL6TaxCurrent
     * @return self
     */
    public function setFL6TaxCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType $fL6TaxCurrent = null)
    {
        $this->fL6TaxCurrent = $fL6TaxCurrent;
        return $this;
    }

    /**
     * Gets as fL6TaxNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType
     */
    public function getFL6TaxNew()
    {
        return $this->fL6TaxNew;
    }

    /**
     * Sets a new fL6TaxNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType $fL6TaxNew
     * @return self
     */
    public function setFL6TaxNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType $fL6TaxNew = null)
    {
        $this->fL6TaxNew = $fL6TaxNew;
        return $this;
    }
}

