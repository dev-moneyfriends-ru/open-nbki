<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type;

/**
 * Class representing UL44AccountingAType
 */
class UL44AccountingAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType $uL44AccountingCurrent
     */
    private $uL44AccountingCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType $uL44AccountingNew
     */
    private $uL44AccountingNew = null;

    /**
     * Gets as uL44AccountingCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType
     */
    public function getUL44AccountingCurrent()
    {
        return $this->uL44AccountingCurrent;
    }

    /**
     * Sets a new uL44AccountingCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType $uL44AccountingCurrent
     * @return self
     */
    public function setUL44AccountingCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType $uL44AccountingCurrent = null)
    {
        $this->uL44AccountingCurrent = $uL44AccountingCurrent;
        return $this;
    }

    /**
     * Gets as uL44AccountingNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType
     */
    public function getUL44AccountingNew()
    {
        return $this->uL44AccountingNew;
    }

    /**
     * Sets a new uL44AccountingNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType $uL44AccountingNew
     * @return self
     */
    public function setUL44AccountingNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL44AccountingType $uL44AccountingNew = null)
    {
        $this->uL44AccountingNew = $uL44AccountingNew;
        return $this;
    }
}

