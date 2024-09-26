<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type;

/**
 * Class representing UL43ServiceOrgAType
 */
class UL43ServiceOrgAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType $uL43ServiceOrgCurrent
     */
    private $uL43ServiceOrgCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType $uL43ServiceOrgNew
     */
    private $uL43ServiceOrgNew = null;

    /**
     * Gets as uL43ServiceOrgCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType
     */
    public function getUL43ServiceOrgCurrent()
    {
        return $this->uL43ServiceOrgCurrent;
    }

    /**
     * Sets a new uL43ServiceOrgCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType $uL43ServiceOrgCurrent
     * @return self
     */
    public function setUL43ServiceOrgCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType $uL43ServiceOrgCurrent = null)
    {
        $this->uL43ServiceOrgCurrent = $uL43ServiceOrgCurrent;
        return $this;
    }

    /**
     * Gets as uL43ServiceOrgNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType
     */
    public function getUL43ServiceOrgNew()
    {
        return $this->uL43ServiceOrgNew;
    }

    /**
     * Sets a new uL43ServiceOrgNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType $uL43ServiceOrgNew
     * @return self
     */
    public function setUL43ServiceOrgNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL43ServiceOrgType $uL43ServiceOrgNew = null)
    {
        $this->uL43ServiceOrgNew = $uL43ServiceOrgNew;
        return $this;
    }
}

