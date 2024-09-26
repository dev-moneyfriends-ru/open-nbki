<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL5557GroupType
 *
 * Блок 55,57
 * XSD Type: FL_55_57_Group_Type
 */
class FL5557GroupType
{
    /**
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupType\FL55ApplicationAType $fL55Application
     */
    private $fL55Application = null;

    /**
     * Блок 57. Сведения об отказе источника от предложения совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupType\FL57RejectAType $fL57Reject
     */
    private $fL57Reject = null;

    /**
     * Gets as fL55Application
     *
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupType\FL55ApplicationAType
     */
    public function getFL55Application()
    {
        return $this->fL55Application;
    }

    /**
     * Sets a new fL55Application
     *
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupType\FL55ApplicationAType $fL55Application
     * @return self
     */
    public function setFL55Application(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupType\FL55ApplicationAType $fL55Application)
    {
        $this->fL55Application = $fL55Application;
        return $this;
    }

    /**
     * Gets as fL57Reject
     *
     * Блок 57. Сведения об отказе источника от предложения совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupType\FL57RejectAType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupType\FL57RejectAType $fL57Reject
     * @return self
     */
    public function setFL57Reject(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL5557GroupType\FL57RejectAType $fL57Reject = null)
    {
        $this->fL57Reject = $fL57Reject;
        return $this;
    }
}

