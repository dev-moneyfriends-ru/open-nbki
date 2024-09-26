<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL29ContractEndType
 *
 * Блок 29. Сведения о прекращении обязательства
 * XSD Type: UL_29_ContractEnd_Type
 */
class UL29ContractEndType
{
    /**
     * 29.2. Дата фактического прекращения обязательства
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * 29.1. Код основания прекращения обязательства
     *
     * @var int $code
     */
    private $code = null;

    /**
     * Gets as date
     *
     * 29.2. Дата фактического прекращения обязательства
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
     * 29.2. Дата фактического прекращения обязательства
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as code
     *
     * 29.1. Код основания прекращения обязательства
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
     * 29.1. Код основания прекращения обязательства
     *
     * @param int $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
}

