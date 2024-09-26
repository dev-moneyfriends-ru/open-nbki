<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL4547GroupRType
 *
 * Блок 45,47
 * XSD Type: UL_45_47_Group_R_Type
 */
class UL4547GroupRType
{
    /**
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupRType\UL45ApplicationRAType $uL45ApplicationR
     */
    private $uL45ApplicationR = null;

    /**
     * Блок 47. Сведения об отказе источника от предложения совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupRType\UL47RejectAType $uL47Reject
     */
    private $uL47Reject = null;

    /**
     * Gets as uL45ApplicationR
     *
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupRType\UL45ApplicationRAType
     */
    public function getUL45ApplicationR()
    {
        return $this->uL45ApplicationR;
    }

    /**
     * Sets a new uL45ApplicationR
     *
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupRType\UL45ApplicationRAType $uL45ApplicationR
     * @return self
     */
    public function setUL45ApplicationR(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupRType\UL45ApplicationRAType $uL45ApplicationR)
    {
        $this->uL45ApplicationR = $uL45ApplicationR;
        return $this;
    }

    /**
     * Gets as uL47Reject
     *
     * Блок 47. Сведения об отказе источника от предложения совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupRType\UL47RejectAType
     */
    public function getUL47Reject()
    {
        return $this->uL47Reject;
    }

    /**
     * Sets a new uL47Reject
     *
     * Блок 47. Сведения об отказе источника от предложения совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupRType\UL47RejectAType $uL47Reject
     * @return self
     */
    public function setUL47Reject(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupRType\UL47RejectAType $uL47Reject = null)
    {
        $this->uL47Reject = $uL47Reject;
        return $this;
    }
}

