<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL4547GroupRType;

/**
 * Class representing UL47RejectAType
 */
class UL47RejectAType
{
    /**
     * 47.1. Дата отказа
     *
     * @var \DateTime $rejectDate
     */
    private $rejectDate = null;

    /**
     * 47.2. Код причины отказа
     *
     * @var int[] $rejectCode
     */
    private $rejectCode = [
        
    ];

    /**
     * Gets as rejectDate
     *
     * 47.1. Дата отказа
     *
     * @return \DateTime
     */
    public function getRejectDate()
    {
        return $this->rejectDate;
    }

    /**
     * Sets a new rejectDate
     *
     * 47.1. Дата отказа
     *
     * @param \DateTime $rejectDate
     * @return self
     */
    public function setRejectDate(\DateTime $rejectDate)
    {
        $this->rejectDate = $rejectDate;
        return $this;
    }

    /**
     * Adds as rejectCode
     *
     * 47.2. Код причины отказа
     *
     * @return self
     * @param int $rejectCode
     */
    public function addToRejectCode($rejectCode)
    {
        $this->rejectCode[] = $rejectCode;
        return $this;
    }

    /**
     * isset rejectCode
     *
     * 47.2. Код причины отказа
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectCode($index)
    {
        return isset($this->rejectCode[$index]);
    }

    /**
     * unset rejectCode
     *
     * 47.2. Код причины отказа
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectCode($index)
    {
        unset($this->rejectCode[$index]);
    }

    /**
     * Gets as rejectCode
     *
     * 47.2. Код причины отказа
     *
     * @return int[]
     */
    public function getRejectCode()
    {
        return $this->rejectCode;
    }

    /**
     * Sets a new rejectCode
     *
     * 47.2. Код причины отказа
     *
     * @param int $rejectCode
     * @return self
     */
    public function setRejectCode(array $rejectCode)
    {
        $this->rejectCode = $rejectCode;
        return $this;
    }
}

