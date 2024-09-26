<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type;

/**
 * Class representing UL5ReorgAType
 */
class UL5ReorgAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType $uL5ReorgCurrent
     */
    private $uL5ReorgCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType $uL5ReorgNew
     */
    private $uL5ReorgNew = null;

    /**
     * Gets as uL5ReorgCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType
     */
    public function getUL5ReorgCurrent()
    {
        return $this->uL5ReorgCurrent;
    }

    /**
     * Sets a new uL5ReorgCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType $uL5ReorgCurrent
     * @return self
     */
    public function setUL5ReorgCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType $uL5ReorgCurrent = null)
    {
        $this->uL5ReorgCurrent = $uL5ReorgCurrent;
        return $this;
    }

    /**
     * Gets as uL5ReorgNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType
     */
    public function getUL5ReorgNew()
    {
        return $this->uL5ReorgNew;
    }

    /**
     * Sets a new uL5ReorgNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType $uL5ReorgNew
     * @return self
     */
    public function setUL5ReorgNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL5ReorgType $uL5ReorgNew = null)
    {
        $this->uL5ReorgNew = $uL5ReorgNew;
        return $this;
    }
}

