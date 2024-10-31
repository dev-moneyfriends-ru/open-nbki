<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\BaseTemplate;

/**
 * Class representing EventDataType
 *
 * Сопроводительные атрибуты
 * XSD Type: EventData
 */
abstract class EventDataType extends GutdfSegment
{
    public const OPERATION_CODE_A = 'A';
    public const OPERATION_CODE_B = 'B';
    /**
     * Комментарий с пояснением причины представления группы блоков показателей
     *
     * @var string $eventComment
     */
    private $eventComment = "";

    /**
     * Порядковый номер записи в файле
     *
     * @var int $orderNum
     */
    private $orderNum = null;

    /**
     * Дата события
     *
     * @var \DateTime $eventDate
     */
    private $eventDate = null;

    /**
     * @var null|string
     */
    protected $eventId = null;

    /**
     * @param BaseTemplate $template
     * @param $eventId
     */
    public function __construct(BaseTemplate $template, $eventId)
    {
        $this->eventId = $eventId;
        parent::__construct($template);
    }

    /**
     * Gets as eventComment
     *
     * Комментарий с пояснением причины представления группы блоков показателей
     *
     * @return string
     */
    public function getEventComment()
    {
        return $this->eventComment;
    }

    /**
     * Sets a new eventComment
     *
     * Комментарий с пояснением причины представления группы блоков показателей
     *
     * @param string $eventComment
     * @return self
     */
    public function setEventComment($eventComment)
    {
        $this->eventComment = $eventComment;
        return $this;
    }

    /**
     * Gets as orderNum
     *
     * Порядковый номер записи в файле
     *
     * @return int
     */
    public function getOrderNum()
    {
        return $this->orderNum;
    }

    /**
     * Sets a new orderNum
     *
     * Порядковый номер записи в файле
     *
     * @param int $orderNum
     * @return self
     */
    public function setOrderNum($orderNum)
    {
        $this->orderNum = $orderNum;
        return $this;
    }

    /**
     * Gets as eventDate
     *
     * Дата события
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Sets a new eventDate
     *
     * Дата события
     *
     * @param \DateTime $eventDate
     * @return self
     */
    public function setEventDate(\DateTime $eventDate)
    {
        $this->eventDate = $eventDate;
        return $this;
    }

    /**
     * Gets as operationCode
     *
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @return string
     */
    abstract public function getOperationCode();

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
    public function getProperties(): array
    {
        return [
            'eventComment',
            'eventDate',
            'operationCode',
            'orderNum'
        ];
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        $props = [];
        foreach ($this->getProperties() as $property) {
            $props[] = "$property = " . $this->$property;
        }
        return implode(', ', $props);
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $this->eventDate = $this->formatDate($this->template->sendData->getReportingDt());
        $this->initAttributes();
    }

    abstract protected function initAttributes();
}

