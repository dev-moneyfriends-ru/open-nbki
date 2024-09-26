<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type;

/**
 * Class representing UL42PersonAcquirerAType
 */
class UL42PersonAcquirerAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL42PersonAcquirerType $uL42PersonAcquirerCurrent
     */
    private $uL42PersonAcquirerCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL42PersonAcquirerType $uL42PersonAcquirerNew
     */
    private $uL42PersonAcquirerNew = null;

    /**
     * Gets as uL42PersonAcquirerCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL42PersonAcquirerType
     */
    public function getUL42PersonAcquirerCurrent()
    {
        return $this->uL42PersonAcquirerCurrent;
    }

    /**
     * Sets a new uL42PersonAcquirerCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL42PersonAcquirerType $uL42PersonAcquirerCurrent
     * @return self
     */
    public function setUL42PersonAcquirerCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL42PersonAcquirerType $uL42PersonAcquirerCurrent = null)
    {
        $this->uL42PersonAcquirerCurrent = $uL42PersonAcquirerCurrent;
        return $this;
    }

    /**
     * Gets as uL42PersonAcquirerNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL42PersonAcquirerType
     */
    public function getUL42PersonAcquirerNew()
    {
        return $this->uL42PersonAcquirerNew;
    }

    /**
     * Sets a new uL42PersonAcquirerNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL42PersonAcquirerType $uL42PersonAcquirerNew
     * @return self
     */
    public function setUL42PersonAcquirerNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL42PersonAcquirerType $uL42PersonAcquirerNew = null)
    {
        $this->uL42PersonAcquirerNew = $uL42PersonAcquirerNew;
        return $this;
    }
}

