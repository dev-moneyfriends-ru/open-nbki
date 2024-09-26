<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type;

/**
 * Class representing UL35StopSendAType
 */
class UL35StopSendAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL35StopSendType $uL35StopSendCurrent
     */
    private $uL35StopSendCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL35StopSendType $uL35StopSendNew
     */
    private $uL35StopSendNew = null;

    /**
     * Gets as uL35StopSendCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL35StopSendType
     */
    public function getUL35StopSendCurrent()
    {
        return $this->uL35StopSendCurrent;
    }

    /**
     * Sets a new uL35StopSendCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL35StopSendType $uL35StopSendCurrent
     * @return self
     */
    public function setUL35StopSendCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL35StopSendType $uL35StopSendCurrent = null)
    {
        $this->uL35StopSendCurrent = $uL35StopSendCurrent;
        return $this;
    }

    /**
     * Gets as uL35StopSendNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL35StopSendType
     */
    public function getUL35StopSendNew()
    {
        return $this->uL35StopSendNew;
    }

    /**
     * Sets a new uL35StopSendNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL35StopSendType $uL35StopSendNew
     * @return self
     */
    public function setUL35StopSendNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL35StopSendType $uL35StopSendNew = null)
    {
        $this->uL35StopSendNew = $uL35StopSendNew;
        return $this;
    }
}

