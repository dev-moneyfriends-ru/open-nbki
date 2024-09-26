<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type;

/**
 * Class representing FL8AddrRegAType
 */
class FL8AddrRegAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType $fL8AddrRegCurrent
     */
    private $fL8AddrRegCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType $fL8AddrRegNew
     */
    private $fL8AddrRegNew = null;

    /**
     * Gets as fL8AddrRegCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType
     */
    public function getFL8AddrRegCurrent()
    {
        return $this->fL8AddrRegCurrent;
    }

    /**
     * Sets a new fL8AddrRegCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType $fL8AddrRegCurrent
     * @return self
     */
    public function setFL8AddrRegCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType $fL8AddrRegCurrent = null)
    {
        $this->fL8AddrRegCurrent = $fL8AddrRegCurrent;
        return $this;
    }

    /**
     * Gets as fL8AddrRegNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType
     */
    public function getFL8AddrRegNew()
    {
        return $this->fL8AddrRegNew;
    }

    /**
     * Sets a new fL8AddrRegNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType $fL8AddrRegNew
     * @return self
     */
    public function setFL8AddrRegNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL8AddrRegType $fL8AddrRegNew = null)
    {
        $this->fL8AddrRegNew = $fL8AddrRegNew;
        return $this;
    }
}

