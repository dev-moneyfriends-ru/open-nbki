<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL39CourtAType
 */
class FL39CourtAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType $fL39CourtCurrent
     */
    private $fL39CourtCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType $fL39CourtNew
     */
    private $fL39CourtNew = null;

    /**
     * Gets as fL39CourtCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType
     */
    public function getFL39CourtCurrent()
    {
        return $this->fL39CourtCurrent;
    }

    /**
     * Sets a new fL39CourtCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType $fL39CourtCurrent
     * @return self
     */
    public function setFL39CourtCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType $fL39CourtCurrent = null)
    {
        $this->fL39CourtCurrent = $fL39CourtCurrent;
        return $this;
    }

    /**
     * Gets as fL39CourtNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType
     */
    public function getFL39CourtNew()
    {
        return $this->fL39CourtNew;
    }

    /**
     * Sets a new fL39CourtNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType $fL39CourtNew
     * @return self
     */
    public function setFL39CourtNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL39CourtType $fL39CourtNew = null)
    {
        $this->fL39CourtNew = $fL39CourtNew;
        return $this;
    }
}

