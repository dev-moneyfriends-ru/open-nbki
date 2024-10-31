<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\document\dataType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;
use mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectEventDataType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\SubjectTitleDataFLType;

/**
 * Class representing SubjectFLAType
 */
class SubjectFLAType extends GutdfSegment
{
    /**
     * Титульная часть
     *
     * @var SubjectTitleDataFLType $title
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
     * @return SubjectTitleDataFLType
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
     * @param SubjectTitleDataFLType $title
     * @return self
     */
    public function setTitle(?SubjectTitleDataFLType $title = null)
    {
        $this->title = $title;
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

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'Subject_FL';
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

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $this->titleSegment = new SubjectTitleDataFLType($this->template);
        $this->events = new SubjectEventDataType($this->template);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'titleSegment',
            'events'
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Субъект ФЛ';
    }
}

