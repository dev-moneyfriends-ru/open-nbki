<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\document\dataType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;
use mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectEventDataType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectTitleDataULType;

/**
 * Class representing SubjectULAType
 */
class SubjectULAType extends GutdfSegment
{
    /**
     * Титульная часть
     *
     * @var SubjectTitleDataULType $titleSegment
     */
    private $titleSegment = null;

    /**
     * События
     *
     * @var SubjectEventDataType $events
     */
    private $events = null;

    /**
     * Gets as title
     *
     * Титульная часть
     *
     * @return SubjectTitleDataULType
     */
    public function getTitleSegment()
    {
        return $this->titleSegment;
    }

    /**
     * Sets a new title
     *
     * Титульная часть
     *
     * @param SubjectTitleDataULType $titleSegment
     * @return self
     */
    public function setTitle(?SubjectTitleDataULType $titleSegment = null)
    {
        $this->titleSegment = $titleSegment;
        return $this;
    }

    /**
     * Gets as events
     *
     * События
     *
     * @return SubjectEventDataType
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
     * @param SubjectEventDataType $events
     * @return self
     */
    public function setEvents(?SubjectEventDataType $events = null)
    {
        $this->events = $events;
        return $this;
    }

    public function getSegmentName(): string
    {
        return 'Subject_UL';
    }

    public function getFields(): array
    {
        return [];
    }

    public function getFieldsDescriptions(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return '';
    }

    public function getProperties(): array
    {
        return [];
    }

    public function init(): void
    {
        $this->titleSegment = new SubjectTitleDataULType($this->template);
        $this->events = new SubjectEventDataType($this->template);
    }

    public function getXmlAttributes(): array
    {
        return [
            'titleSegment',
            'events'
        ];
    }

    public function getTitle(): string
    {
        return 'Субъект ЮЛ';
    }
}

