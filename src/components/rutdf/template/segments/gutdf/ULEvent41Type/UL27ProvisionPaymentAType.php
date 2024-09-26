<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent41Type;

/**
 * Class representing UL27ProvisionPaymentAType
 */
class UL27ProvisionPaymentAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType $uL27ProvisionPaymentCurrent
     */
    private $uL27ProvisionPaymentCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType $uL27ProvisionPaymentNew
     */
    private $uL27ProvisionPaymentNew = null;

    /**
     * Gets as uL27ProvisionPaymentCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType
     */
    public function getUL27ProvisionPaymentCurrent()
    {
        return $this->uL27ProvisionPaymentCurrent;
    }

    /**
     * Sets a new uL27ProvisionPaymentCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType $uL27ProvisionPaymentCurrent
     * @return self
     */
    public function setUL27ProvisionPaymentCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType $uL27ProvisionPaymentCurrent = null)
    {
        $this->uL27ProvisionPaymentCurrent = $uL27ProvisionPaymentCurrent;
        return $this;
    }

    /**
     * Gets as uL27ProvisionPaymentNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType
     */
    public function getUL27ProvisionPaymentNew()
    {
        return $this->uL27ProvisionPaymentNew;
    }

    /**
     * Sets a new uL27ProvisionPaymentNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType $uL27ProvisionPaymentNew
     * @return self
     */
    public function setUL27ProvisionPaymentNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType $uL27ProvisionPaymentNew = null)
    {
        $this->uL27ProvisionPaymentNew = $uL27ProvisionPaymentNew;
        return $this;
    }
}

