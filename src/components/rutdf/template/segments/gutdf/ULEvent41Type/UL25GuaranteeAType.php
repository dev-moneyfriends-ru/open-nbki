<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent41Type;

/**
 * Class representing UL25GuaranteeAType
 */
class UL25GuaranteeAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType $uL25GuaranteeCurrent
     */
    private $uL25GuaranteeCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType $uL25GuaranteeNew
     */
    private $uL25GuaranteeNew = null;

    /**
     * Gets as uL25GuaranteeCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType
     */
    public function getUL25GuaranteeCurrent()
    {
        return $this->uL25GuaranteeCurrent;
    }

    /**
     * Sets a new uL25GuaranteeCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType $uL25GuaranteeCurrent
     * @return self
     */
    public function setUL25GuaranteeCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType $uL25GuaranteeCurrent = null)
    {
        $this->uL25GuaranteeCurrent = $uL25GuaranteeCurrent;
        return $this;
    }

    /**
     * Gets as uL25GuaranteeNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType
     */
    public function getUL25GuaranteeNew()
    {
        return $this->uL25GuaranteeNew;
    }

    /**
     * Sets a new uL25GuaranteeNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType $uL25GuaranteeNew
     * @return self
     */
    public function setUL25GuaranteeNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType $uL25GuaranteeNew = null)
    {
        $this->uL25GuaranteeNew = $uL25GuaranteeNew;
        return $this;
    }
}

