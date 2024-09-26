<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL25GroupAType
 */
class FL25GroupAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType $fL25GroupCurrent
     */
    private $fL25GroupCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType $fL25GroupNew
     */
    private $fL25GroupNew = null;

    /**
     * Gets as fL25GroupCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType
     */
    public function getFL25GroupCurrent()
    {
        return $this->fL25GroupCurrent;
    }

    /**
     * Sets a new fL25GroupCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType $fL25GroupCurrent
     * @return self
     */
    public function setFL25GroupCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType $fL25GroupCurrent = null)
    {
        $this->fL25GroupCurrent = $fL25GroupCurrent;
        return $this;
    }

    /**
     * Gets as fL25GroupNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType
     */
    public function getFL25GroupNew()
    {
        return $this->fL25GroupNew;
    }

    /**
     * Sets a new fL25GroupNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType $fL25GroupNew
     * @return self
     */
    public function setFL25GroupNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType $fL25GroupNew = null)
    {
        $this->fL25GroupNew = $fL25GroupNew;
        return $this;
    }
}

