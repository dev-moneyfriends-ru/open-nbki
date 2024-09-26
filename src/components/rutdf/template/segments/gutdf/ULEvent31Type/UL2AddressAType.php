<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type;

/**
 * Class representing UL2AddressAType
 */
class UL2AddressAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType $uL2AddressCurrent
     */
    private $uL2AddressCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType $uL2AddressNew
     */
    private $uL2AddressNew = null;

    /**
     * Gets as uL2AddressCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType
     */
    public function getUL2AddressCurrent()
    {
        return $this->uL2AddressCurrent;
    }

    /**
     * Sets a new uL2AddressCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType $uL2AddressCurrent
     * @return self
     */
    public function setUL2AddressCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType $uL2AddressCurrent = null)
    {
        $this->uL2AddressCurrent = $uL2AddressCurrent;
        return $this;
    }

    /**
     * Gets as uL2AddressNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType
     */
    public function getUL2AddressNew()
    {
        return $this->uL2AddressNew;
    }

    /**
     * Sets a new uL2AddressNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType $uL2AddressNew
     * @return self
     */
    public function setUL2AddressNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType $uL2AddressNew = null)
    {
        $this->uL2AddressNew = $uL2AddressNew;
        return $this;
    }
}

