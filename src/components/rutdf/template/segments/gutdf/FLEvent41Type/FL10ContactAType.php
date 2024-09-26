<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type;

/**
 * Class representing FL10ContactAType
 */
class FL10ContactAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType $fL10ContactCurrent
     */
    private $fL10ContactCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType $fL10ContactNew
     */
    private $fL10ContactNew = null;

    /**
     * Gets as fL10ContactCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType
     */
    public function getFL10ContactCurrent()
    {
        return $this->fL10ContactCurrent;
    }

    /**
     * Sets a new fL10ContactCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType $fL10ContactCurrent
     * @return self
     */
    public function setFL10ContactCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType $fL10ContactCurrent = null)
    {
        $this->fL10ContactCurrent = $fL10ContactCurrent;
        return $this;
    }

    /**
     * Gets as fL10ContactNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType
     */
    public function getFL10ContactNew()
    {
        return $this->fL10ContactNew;
    }

    /**
     * Sets a new fL10ContactNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType $fL10ContactNew
     * @return self
     */
    public function setFL10ContactNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType $fL10ContactNew = null)
    {
        $this->fL10ContactNew = $fL10ContactNew;
        return $this;
    }
}

