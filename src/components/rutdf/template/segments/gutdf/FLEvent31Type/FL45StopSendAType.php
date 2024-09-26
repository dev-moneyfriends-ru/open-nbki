<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL45StopSendAType
 */
class FL45StopSendAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL45StopSendType $fL45StopSendCurrent
     */
    private $fL45StopSendCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL45StopSendType $fL45StopSendNew
     */
    private $fL45StopSendNew = null;

    /**
     * Gets as fL45StopSendCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL45StopSendType
     */
    public function getFL45StopSendCurrent()
    {
        return $this->fL45StopSendCurrent;
    }

    /**
     * Sets a new fL45StopSendCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL45StopSendType $fL45StopSendCurrent
     * @return self
     */
    public function setFL45StopSendCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL45StopSendType $fL45StopSendCurrent = null)
    {
        $this->fL45StopSendCurrent = $fL45StopSendCurrent;
        return $this;
    }

    /**
     * Gets as fL45StopSendNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL45StopSendType
     */
    public function getFL45StopSendNew()
    {
        return $this->fL45StopSendNew;
    }

    /**
     * Sets a new fL45StopSendNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL45StopSendType $fL45StopSendNew
     * @return self
     */
    public function setFL45StopSendNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL45StopSendType $fL45StopSendNew = null)
    {
        $this->fL45StopSendNew = $fL45StopSendNew;
        return $this;
    }
}

