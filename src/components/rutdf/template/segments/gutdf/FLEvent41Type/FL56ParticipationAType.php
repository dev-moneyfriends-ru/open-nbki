<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type;

/**
 * Class representing FL56ParticipationAType
 */
class FL56ParticipationAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType $fL56ParticipationCurrent
     */
    private $fL56ParticipationCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType $fL56ParticipationNew
     */
    private $fL56ParticipationNew = null;

    /**
     * Gets as fL56ParticipationCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType
     */
    public function getFL56ParticipationCurrent()
    {
        return $this->fL56ParticipationCurrent;
    }

    /**
     * Sets a new fL56ParticipationCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType $fL56ParticipationCurrent
     * @return self
     */
    public function setFL56ParticipationCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType $fL56ParticipationCurrent = null)
    {
        $this->fL56ParticipationCurrent = $fL56ParticipationCurrent;
        return $this;
    }

    /**
     * Gets as fL56ParticipationNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType
     */
    public function getFL56ParticipationNew()
    {
        return $this->fL56ParticipationNew;
    }

    /**
     * Sets a new fL56ParticipationNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType $fL56ParticipationNew
     * @return self
     */
    public function setFL56ParticipationNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL56ParticipationType $fL56ParticipationNew = null)
    {
        $this->fL56ParticipationNew = $fL56ParticipationNew;
        return $this;
    }
}

