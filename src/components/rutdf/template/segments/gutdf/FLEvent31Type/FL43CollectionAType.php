<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL43CollectionAType
 */
class FL43CollectionAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL43CollectionType $fL43CollectionCurrent
     */
    private $fL43CollectionCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL43CollectionType $fL43CollectionNew
     */
    private $fL43CollectionNew = null;

    /**
     * Gets as fL43CollectionCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL43CollectionType
     */
    public function getFL43CollectionCurrent()
    {
        return $this->fL43CollectionCurrent;
    }

    /**
     * Sets a new fL43CollectionCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL43CollectionType $fL43CollectionCurrent
     * @return self
     */
    public function setFL43CollectionCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL43CollectionType $fL43CollectionCurrent = null)
    {
        $this->fL43CollectionCurrent = $fL43CollectionCurrent;
        return $this;
    }

    /**
     * Gets as fL43CollectionNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL43CollectionType
     */
    public function getFL43CollectionNew()
    {
        return $this->fL43CollectionNew;
    }

    /**
     * Sets a new fL43CollectionNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL43CollectionType $fL43CollectionNew
     * @return self
     */
    public function setFL43CollectionNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL43CollectionType $fL43CollectionNew = null)
    {
        $this->fL43CollectionNew = $fL43CollectionNew;
        return $this;
    }
}

