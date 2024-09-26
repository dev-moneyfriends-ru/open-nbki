<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType;

/**
 * Class representing SubjectULAType
 */
class SubjectULAType
{
    /**
     * Титульная часть
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectTitleDataULType $title
     */
    private $title = null;

    /**
     * События
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectEventDataULType $events
     */
    private $events = null;

    /**
     * Gets as title
     *
     * Титульная часть
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectTitleDataULType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectTitleDataULType $title
     * @return self
     */
    public function setTitle(?\mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectTitleDataULType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as events
     *
     * События
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectEventDataULType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectEventDataULType $events
     * @return self
     */
    public function setEvents(?\mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectEventDataULType $events = null)
    {
        $this->events = $events;
        return $this;
    }
}

