<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type;

/**
 * Class representing UL3RegAType
 */
class UL3RegAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL3RegType $uL3RegCurrent
     */
    private $uL3RegCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL3RegType $uL3RegNew
     */
    private $uL3RegNew = null;

    /**
     * Gets as uL3RegCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL3RegType
     */
    public function getUL3RegCurrent()
    {
        return $this->uL3RegCurrent;
    }

    /**
     * Sets a new uL3RegCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL3RegType $uL3RegCurrent
     * @return self
     */
    public function setUL3RegCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL3RegType $uL3RegCurrent = null)
    {
        $this->uL3RegCurrent = $uL3RegCurrent;
        return $this;
    }

    /**
     * Gets as uL3RegNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL3RegType
     */
    public function getUL3RegNew()
    {
        return $this->uL3RegNew;
    }

    /**
     * Sets a new uL3RegNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL3RegType $uL3RegNew
     * @return self
     */
    public function setUL3RegNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL3RegType $uL3RegNew = null)
    {
        $this->uL3RegNew = $uL3RegNew;
        return $this;
    }
}

