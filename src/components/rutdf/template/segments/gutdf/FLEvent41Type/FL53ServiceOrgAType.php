<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type;

/**
 * Class representing FL53ServiceOrgAType
 */
class FL53ServiceOrgAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL53ServiceOrgType $fL53ServiceOrgCurrent
     */
    private $fL53ServiceOrgCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL53ServiceOrgType $fL53ServiceOrgNew
     */
    private $fL53ServiceOrgNew = null;

    /**
     * Gets as fL53ServiceOrgCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL53ServiceOrgType
     */
    public function getFL53ServiceOrgCurrent()
    {
        return $this->fL53ServiceOrgCurrent;
    }

    /**
     * Sets a new fL53ServiceOrgCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL53ServiceOrgType $fL53ServiceOrgCurrent
     * @return self
     */
    public function setFL53ServiceOrgCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL53ServiceOrgType $fL53ServiceOrgCurrent = null)
    {
        $this->fL53ServiceOrgCurrent = $fL53ServiceOrgCurrent;
        return $this;
    }

    /**
     * Gets as fL53ServiceOrgNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL53ServiceOrgType
     */
    public function getFL53ServiceOrgNew()
    {
        return $this->fL53ServiceOrgNew;
    }

    /**
     * Sets a new fL53ServiceOrgNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL53ServiceOrgType $fL53ServiceOrgNew
     * @return self
     */
    public function setFL53ServiceOrgNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL53ServiceOrgType $fL53ServiceOrgNew = null)
    {
        $this->fL53ServiceOrgNew = $fL53ServiceOrgNew;
        return $this;
    }
}

