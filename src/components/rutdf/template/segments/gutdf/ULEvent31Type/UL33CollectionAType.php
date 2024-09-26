<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type;

/**
 * Class representing UL33CollectionAType
 */
class UL33CollectionAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL33CollectionType $uL33CollectionCurrent
     */
    private $uL33CollectionCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL33CollectionType $uL33CollectionNew
     */
    private $uL33CollectionNew = null;

    /**
     * Gets as uL33CollectionCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL33CollectionType
     */
    public function getUL33CollectionCurrent()
    {
        return $this->uL33CollectionCurrent;
    }

    /**
     * Sets a new uL33CollectionCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL33CollectionType $uL33CollectionCurrent
     * @return self
     */
    public function setUL33CollectionCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL33CollectionType $uL33CollectionCurrent = null)
    {
        $this->uL33CollectionCurrent = $uL33CollectionCurrent;
        return $this;
    }

    /**
     * Gets as uL33CollectionNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL33CollectionType
     */
    public function getUL33CollectionNew()
    {
        return $this->uL33CollectionNew;
    }

    /**
     * Sets a new uL33CollectionNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL33CollectionType $uL33CollectionNew
     * @return self
     */
    public function setUL33CollectionNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL33CollectionType $uL33CollectionNew = null)
    {
        $this->uL33CollectionNew = $uL33CollectionNew;
        return $this;
    }
}

