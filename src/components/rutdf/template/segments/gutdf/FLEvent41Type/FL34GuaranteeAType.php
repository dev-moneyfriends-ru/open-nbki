<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type;

/**
 * Class representing FL34GuaranteeAType
 */
class FL34GuaranteeAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType $fL34GuaranteeCurrent
     */
    private $fL34GuaranteeCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType $fL34GuaranteeNew
     */
    private $fL34GuaranteeNew = null;

    /**
     * Gets as fL34GuaranteeCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType
     */
    public function getFL34GuaranteeCurrent()
    {
        return $this->fL34GuaranteeCurrent;
    }

    /**
     * Sets a new fL34GuaranteeCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType $fL34GuaranteeCurrent
     * @return self
     */
    public function setFL34GuaranteeCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType $fL34GuaranteeCurrent = null)
    {
        $this->fL34GuaranteeCurrent = $fL34GuaranteeCurrent;
        return $this;
    }

    /**
     * Gets as fL34GuaranteeNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType
     */
    public function getFL34GuaranteeNew()
    {
        return $this->fL34GuaranteeNew;
    }

    /**
     * Sets a new fL34GuaranteeNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType $fL34GuaranteeNew
     * @return self
     */
    public function setFL34GuaranteeNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType $fL34GuaranteeNew = null)
    {
        $this->fL34GuaranteeNew = $fL34GuaranteeNew;
        return $this;
    }
}

