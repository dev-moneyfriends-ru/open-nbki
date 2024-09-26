<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL51OrgAcquirerAType
 */
class FL51OrgAcquirerAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType $fL51OrgAcquirerCurrent
     */
    private $fL51OrgAcquirerCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType $fL51OrgAcquirerNew
     */
    private $fL51OrgAcquirerNew = null;

    /**
     * Gets as fL51OrgAcquirerCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType
     */
    public function getFL51OrgAcquirerCurrent()
    {
        return $this->fL51OrgAcquirerCurrent;
    }

    /**
     * Sets a new fL51OrgAcquirerCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType $fL51OrgAcquirerCurrent
     * @return self
     */
    public function setFL51OrgAcquirerCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType $fL51OrgAcquirerCurrent = null)
    {
        $this->fL51OrgAcquirerCurrent = $fL51OrgAcquirerCurrent;
        return $this;
    }

    /**
     * Gets as fL51OrgAcquirerNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType
     */
    public function getFL51OrgAcquirerNew()
    {
        return $this->fL51OrgAcquirerNew;
    }

    /**
     * Sets a new fL51OrgAcquirerNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType $fL51OrgAcquirerNew
     * @return self
     */
    public function setFL51OrgAcquirerNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType $fL51OrgAcquirerNew = null)
    {
        $this->fL51OrgAcquirerNew = $fL51OrgAcquirerNew;
        return $this;
    }
}

