<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL45StopSendType
 *
 * Блок 45. Сведения о прекращении передачи информации по обязательству
 * XSD Type: FL_45_StopSend_Type
 */
class FL45StopSendType
{
    /**
     * 45.1. Код причины прекращения передачи информации
     *
     * @var int $code
     */
    private $code = null;

    /**
     * 45.2. Дата прекращения передачи информации
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Gets as code
     *
     * 45.1. Код причины прекращения передачи информации
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 45.1. Код причины прекращения передачи информации
     *
     * @param int $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as date
     *
     * 45.2. Дата прекращения передачи информации
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * 45.2. Дата прекращения передачи информации
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }
}

