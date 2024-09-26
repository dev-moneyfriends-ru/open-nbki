<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL9AddrFactAType
 */
class FL9AddrFactAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType $fL9AddrFactCurrent
     */
    private $fL9AddrFactCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType $fL9AddrFactNew
     */
    private $fL9AddrFactNew = null;

    /**
     * Gets as fL9AddrFactCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType
     */
    public function getFL9AddrFactCurrent()
    {
        return $this->fL9AddrFactCurrent;
    }

    /**
     * Sets a new fL9AddrFactCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType $fL9AddrFactCurrent
     * @return self
     */
    public function setFL9AddrFactCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType $fL9AddrFactCurrent = null)
    {
        $this->fL9AddrFactCurrent = $fL9AddrFactCurrent;
        return $this;
    }

    /**
     * Gets as fL9AddrFactNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType
     */
    public function getFL9AddrFactNew()
    {
        return $this->fL9AddrFactNew;
    }

    /**
     * Sets a new fL9AddrFactNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType $fL9AddrFactNew
     * @return self
     */
    public function setFL9AddrFactNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL9AddrFactType $fL9AddrFactNew = null)
    {
        $this->fL9AddrFactNew = $fL9AddrFactNew;
        return $this;
    }
}

