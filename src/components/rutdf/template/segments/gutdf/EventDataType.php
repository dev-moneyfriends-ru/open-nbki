<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing EventDataType
 *
 * Сопроводительные атрибуты
 * XSD Type: EventData
 */
class EventDataType
{
    /**
     * Комментарий с пояснением причины представления группы блоков показателей
     *
     * @var string $eventComment
     */
    private $eventComment = null;

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
}

