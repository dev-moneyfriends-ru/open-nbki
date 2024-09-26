<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType;

/**
 * Class representing SubjectFLAType
 */
class SubjectFLAType
{
    /**
     * Титульная часть
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectTitleDataFLType $title
     */
    private $title = null;

    /**
     * События
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectEventDataFLType $events
     */
    private $events = null;

    /**
     * Gets as title
     *
     * Титульная часть
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectTitleDataFLType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * Титульная часть
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectTitleDataFLType $title
     * @return self
     */
    public function setTitle(?\mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectTitleDataFLType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as events
     *
     * События
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectEventDataFLType
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Sets a new events
     *
     * События
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectEventDataFLType $events
     * @return self
     */
    public function setEvents(?\mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectEventDataFLType $events = null)
    {
        $this->events = $events;
        return $this;
    }
}

