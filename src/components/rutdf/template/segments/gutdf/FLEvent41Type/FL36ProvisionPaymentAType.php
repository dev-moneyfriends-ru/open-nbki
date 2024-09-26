<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type;

/**
 * Class representing FL36ProvisionPaymentAType
 */
class FL36ProvisionPaymentAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType $fL36ProvisionPaymentCurrent
     */
    private $fL36ProvisionPaymentCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType $fL36ProvisionPaymentNew
     */
    private $fL36ProvisionPaymentNew = null;

    /**
     * Gets as fL36ProvisionPaymentCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType
     */
    public function getFL36ProvisionPaymentCurrent()
    {
        return $this->fL36ProvisionPaymentCurrent;
    }

    /**
     * Sets a new fL36ProvisionPaymentCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType $fL36ProvisionPaymentCurrent
     * @return self
     */
    public function setFL36ProvisionPaymentCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType $fL36ProvisionPaymentCurrent = null)
    {
        $this->fL36ProvisionPaymentCurrent = $fL36ProvisionPaymentCurrent;
        return $this;
    }

    /**
     * Gets as fL36ProvisionPaymentNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType
     */
    public function getFL36ProvisionPaymentNew()
    {
        return $this->fL36ProvisionPaymentNew;
    }

    /**
     * Sets a new fL36ProvisionPaymentNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType $fL36ProvisionPaymentNew
     * @return self
     */
    public function setFL36ProvisionPaymentNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType $fL36ProvisionPaymentNew = null)
    {
        $this->fL36ProvisionPaymentNew = $fL36ProvisionPaymentNew;
        return $this;
    }
}

