<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\NbchEvents;
use Relay\Event;

/**
 * Class representing SubjectEventDataType
 *
 * Технические атрибуты событий
 * XSD Type: SubjectEventData
 */
class SubjectEventDataType extends GutdfSegment
{
    /**
     * @var array|EventDataType[]
     */
    protected $events = [];

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'Events';
    }

    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'События';
    }

    /**
     * @inheritDoc
     */
    public function getProperties(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $eventIds = $this->template->getEventIds();
        $cnt = 1;
        foreach ($eventIds as $eventId) {
            $eventClass = NbchEvents::getEventClass($eventId, $this->template->sendData->isLegal());
            if ($eventClass === null) {
                continue;
            }
            /** @var EventDataType $eventClass */
            $event = new $eventClass($this->template, $eventId);
            $event->setOrderNum($cnt);
            $this->events[] = $event;
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return ['events'];
    }

    public function getEvents(): array
    {
        return $this->events;
    }

    public function setEvents(array $events): void
    {
        $this->events = $events;
    }

    public function addEvent(EventDataType $event): void
    {
        $this->events[] = $event;
    }
}

