<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL4547GroupType
 *
 * Блок 45,47
 * XSD Type: UL_45_47_Group_Type
 */
class UL4547GroupType
{
    /**
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupType\UL45ApplicationAType $uL45Application
     */
    private $uL45Application = null;

    /**
     * Блок 47. Сведения об отказе источника от предложения совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupType\UL47RejectAType $uL47Reject
     */
    private $uL47Reject = null;

    /**
     * Gets as uL45Application
     *
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupType\UL45ApplicationAType
     */
    public function getUL45Application()
    {
        return $this->uL45Application;
    }

    /**
     * Sets a new uL45Application
     *
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupType\UL45ApplicationAType $uL45Application
     * @return self
     */
    public function setUL45Application(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupType\UL45ApplicationAType $uL45Application)
    {
        $this->uL45Application = $uL45Application;
        return $this;
    }

    /**
     * Gets as uL47Reject
     *
     * Блок 47. Сведения об отказе источника от предложения совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupType\UL47RejectAType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupType\UL47RejectAType $uL47Reject
     * @return self
     */
    public function setUL47Reject(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupType\UL47RejectAType $uL47Reject = null)
    {
        $this->uL47Reject = $uL47Reject;
        return $this;
    }
}

