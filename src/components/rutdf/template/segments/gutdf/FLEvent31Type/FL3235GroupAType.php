<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL3235GroupAType
 */
class FL3235GroupAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType $fL3235GroupCurrent
     */
    private $fL3235GroupCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType $fL3235GroupNew
     */
    private $fL3235GroupNew = null;

    /**
     * Gets as fL3235GroupCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType
     */
    public function getFL3235GroupCurrent()
    {
        return $this->fL3235GroupCurrent;
    }

    /**
     * Sets a new fL3235GroupCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType $fL3235GroupCurrent
     * @return self
     */
    public function setFL3235GroupCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType $fL3235GroupCurrent = null)
    {
        $this->fL3235GroupCurrent = $fL3235GroupCurrent;
        return $this;
    }

    /**
     * Gets as fL3235GroupNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType
     */
    public function getFL3235GroupNew()
    {
        return $this->fL3235GroupNew;
    }

    /**
     * Sets a new fL3235GroupNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType $fL3235GroupNew
     * @return self
     */
    public function setFL3235GroupNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType $fL3235GroupNew = null)
    {
        $this->fL3235GroupNew = $fL3235GroupNew;
        return $this;
    }
}

