<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type;

/**
 * Class representing UL1NameAType
 */
class UL1NameAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL1NameType $uL1NameCurrent
     */
    private $uL1NameCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL1NameType $uL1NameNew
     */
    private $uL1NameNew = null;

    /**
     * Gets as uL1NameCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL1NameType
     */
    public function getUL1NameCurrent()
    {
        return $this->uL1NameCurrent;
    }

    /**
     * Sets a new uL1NameCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL1NameType $uL1NameCurrent
     * @return self
     */
    public function setUL1NameCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL1NameType $uL1NameCurrent = null)
    {
        $this->uL1NameCurrent = $uL1NameCurrent;
        return $this;
    }

    /**
     * Gets as uL1NameNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL1NameType
     */
    public function getUL1NameNew()
    {
        return $this->uL1NameNew;
    }

    /**
     * Sets a new uL1NameNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL1NameType $uL1NameNew
     * @return self
     */
    public function setUL1NameNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL1NameType $uL1NameNew = null)
    {
        $this->uL1NameNew = $uL1NameNew;
        return $this;
    }
}

