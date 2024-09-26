<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent41Type;

/**
 * Class representing UL41OrgAcquirerAType
 */
class UL41OrgAcquirerAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType $uL41OrgAcquirerCurrent
     */
    private $uL41OrgAcquirerCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType $uL41OrgAcquirerNew
     */
    private $uL41OrgAcquirerNew = null;

    /**
     * Gets as uL41OrgAcquirerCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType
     */
    public function getUL41OrgAcquirerCurrent()
    {
        return $this->uL41OrgAcquirerCurrent;
    }

    /**
     * Sets a new uL41OrgAcquirerCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType $uL41OrgAcquirerCurrent
     * @return self
     */
    public function setUL41OrgAcquirerCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType $uL41OrgAcquirerCurrent = null)
    {
        $this->uL41OrgAcquirerCurrent = $uL41OrgAcquirerCurrent;
        return $this;
    }

    /**
     * Gets as uL41OrgAcquirerNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType
     */
    public function getUL41OrgAcquirerNew()
    {
        return $this->uL41OrgAcquirerNew;
    }

    /**
     * Sets a new uL41OrgAcquirerNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType $uL41OrgAcquirerNew
     * @return self
     */
    public function setUL41OrgAcquirerNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType $uL41OrgAcquirerNew = null)
    {
        $this->uL41OrgAcquirerNew = $uL41OrgAcquirerNew;
        return $this;
    }
}

