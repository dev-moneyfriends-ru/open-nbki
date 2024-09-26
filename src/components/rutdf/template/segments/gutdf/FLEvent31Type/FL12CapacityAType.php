<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL12CapacityAType
 */
class FL12CapacityAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12CapacityCurrent
     */
    private $fL12CapacityCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12CapacityNew
     */
    private $fL12CapacityNew = null;

    /**
     * Gets as fL12CapacityCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType
     */
    public function getFL12CapacityCurrent()
    {
        return $this->fL12CapacityCurrent;
    }

    /**
     * Sets a new fL12CapacityCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12CapacityCurrent
     * @return self
     */
    public function setFL12CapacityCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12CapacityCurrent = null)
    {
        $this->fL12CapacityCurrent = $fL12CapacityCurrent;
        return $this;
    }

    /**
     * Gets as fL12CapacityNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType
     */
    public function getFL12CapacityNew()
    {
        return $this->fL12CapacityNew;
    }

    /**
     * Sets a new fL12CapacityNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12CapacityNew
     * @return self
     */
    public function setFL12CapacityNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType $fL12CapacityNew = null)
    {
        $this->fL12CapacityNew = $fL12CapacityNew;
        return $this;
    }
}

