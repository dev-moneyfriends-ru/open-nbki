<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType;

/**
 * Class representing SourceAType
 */
class SourceAType
{
    /**
     * Блок 46. Сведения об источнике – юридическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL46UL36OrgSourceType $fL46UL36OrgSource
     */
    private $fL46UL36OrgSource = null;

    /**
     * Блок 47. Сведения об источнике – физическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL47UL37PersonSourceType $fL47UL37PersonSource
     */
    private $fL47UL37PersonSource = null;

    /**
     * Блок 48. Сведения об источнике – арбитражном управляющем
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL48UL38ArbitrationManagerSourceType $fL48UL38ArbitrationManagerSource
     */
    private $fL48UL38ArbitrationManagerSource = null;

    /**
     * Gets as fL46UL36OrgSource
     *
     * Блок 46. Сведения об источнике – юридическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL46UL36OrgSourceType
     */
    public function getFL46UL36OrgSource()
    {
        return $this->fL46UL36OrgSource;
    }

    /**
     * Sets a new fL46UL36OrgSource
     *
     * Блок 46. Сведения об источнике – юридическом лице
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL46UL36OrgSourceType $fL46UL36OrgSource
     * @return self
     */
    public function setFL46UL36OrgSource(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL46UL36OrgSourceType $fL46UL36OrgSource = null)
    {
        $this->fL46UL36OrgSource = $fL46UL36OrgSource;
        return $this;
    }

    /**
     * Gets as fL47UL37PersonSource
     *
     * Блок 47. Сведения об источнике – физическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL47UL37PersonSourceType
     */
    public function getFL47UL37PersonSource()
    {
        return $this->fL47UL37PersonSource;
    }

    /**
     * Sets a new fL47UL37PersonSource
     *
     * Блок 47. Сведения об источнике – физическом лице
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL47UL37PersonSourceType $fL47UL37PersonSource
     * @return self
     */
    public function setFL47UL37PersonSource(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL47UL37PersonSourceType $fL47UL37PersonSource = null)
    {
        $this->fL47UL37PersonSource = $fL47UL37PersonSource;
        return $this;
    }

    /**
     * Gets as fL48UL38ArbitrationManagerSource
     *
     * Блок 48. Сведения об источнике – арбитражном управляющем
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL48UL38ArbitrationManagerSourceType
     */
    public function getFL48UL38ArbitrationManagerSource()
    {
        return $this->fL48UL38ArbitrationManagerSource;
    }

    /**
     * Sets a new fL48UL38ArbitrationManagerSource
     *
     * Блок 48. Сведения об источнике – арбитражном управляющем
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL48UL38ArbitrationManagerSourceType $fL48UL38ArbitrationManagerSource
     * @return self
     */
    public function setFL48UL38ArbitrationManagerSource(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL48UL38ArbitrationManagerSourceType $fL48UL38ArbitrationManagerSource = null)
    {
        $this->fL48UL38ArbitrationManagerSource = $fL48UL38ArbitrationManagerSource;
        return $this;
    }
}

