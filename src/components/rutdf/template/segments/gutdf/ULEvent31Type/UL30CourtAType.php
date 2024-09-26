<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type;

/**
 * Class representing UL30CourtAType
 */
class UL30CourtAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL30CourtType $uL30CourtCurrent
     */
    private $uL30CourtCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL30CourtType $uL30CourtNew
     */
    private $uL30CourtNew = null;

    /**
     * Gets as uL30CourtCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL30CourtType
     */
    public function getUL30CourtCurrent()
    {
        return $this->uL30CourtCurrent;
    }

    /**
     * Sets a new uL30CourtCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL30CourtType $uL30CourtCurrent
     * @return self
     */
    public function setUL30CourtCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL30CourtType $uL30CourtCurrent = null)
    {
        $this->uL30CourtCurrent = $uL30CourtCurrent;
        return $this;
    }

    /**
     * Gets as uL30CourtNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL30CourtType
     */
    public function getUL30CourtNew()
    {
        return $this->uL30CourtNew;
    }

    /**
     * Sets a new uL30CourtNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL30CourtType $uL30CourtNew
     * @return self
     */
    public function setUL30CourtNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL30CourtType $uL30CourtNew = null)
    {
        $this->uL30CourtNew = $uL30CourtNew;
        return $this;
    }
}

