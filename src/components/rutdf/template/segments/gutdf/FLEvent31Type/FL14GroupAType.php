<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL14GroupAType
 */
class FL14GroupAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType $fL14GroupCurrent
     */
    private $fL14GroupCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType $fL14GroupNew
     */
    private $fL14GroupNew = null;

    /**
     * Gets as fL14GroupCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType
     */
    public function getFL14GroupCurrent()
    {
        return $this->fL14GroupCurrent;
    }

    /**
     * Sets a new fL14GroupCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType $fL14GroupCurrent
     * @return self
     */
    public function setFL14GroupCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType $fL14GroupCurrent = null)
    {
        $this->fL14GroupCurrent = $fL14GroupCurrent;
        return $this;
    }

    /**
     * Gets as fL14GroupNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType
     */
    public function getFL14GroupNew()
    {
        return $this->fL14GroupNew;
    }

    /**
     * Sets a new fL14GroupNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType $fL14GroupNew
     * @return self
     */
    public function setFL14GroupNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType $fL14GroupNew = null)
    {
        $this->fL14GroupNew = $fL14GroupNew;
        return $this;
    }
}

