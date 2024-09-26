<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL5557GroupRType
 *
 * Блок 55,57
 * XSD Type: FL_55_57_Group_R_Type
 */
class FL5557GroupRType
{
    /**
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupRType\FL55ApplicationRAType $fL55ApplicationR
     */
    private $fL55ApplicationR = null;

    /**
     * Блок 57. Сведения об отказе источника от предложения совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupRType\FL57RejectAType $fL57Reject
     */
    private $fL57Reject = null;

    /**
     * Gets as fL55ApplicationR
     *
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupRType\FL55ApplicationRAType
     */
    public function getFL55ApplicationR()
    {
        return $this->fL55ApplicationR;
    }

    /**
     * Sets a new fL55ApplicationR
     *
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupRType\FL55ApplicationRAType $fL55ApplicationR
     * @return self
     */
    public function setFL55ApplicationR(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupRType\FL55ApplicationRAType $fL55ApplicationR)
    {
        $this->fL55ApplicationR = $fL55ApplicationR;
        return $this;
    }

    /**
     * Gets as fL57Reject
     *
     * Блок 57. Сведения об отказе источника от предложения совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupRType\FL57RejectAType
     */
    public function getFL57Reject()
    {
        return $this->fL57Reject;
    }

    /**
     * Sets a new fL57Reject
     *
     * Блок 57. Сведения об отказе источника от предложения совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupRType\FL57RejectAType $fL57Reject
     * @return self
     */
    public function setFL57Reject(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupRType\FL57RejectAType $fL57Reject = null)
    {
        $this->fL57Reject = $fL57Reject;
        return $this;
    }
}

