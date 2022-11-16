<?php

namespace mfteam\nbch\generated\models\CreditReportRequestType;

/**
 * Class representing VersionAType
 */
class VersionAType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * @var string $mappedFormat
     */
    private $mappedFormat = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as mappedFormat
     *
     * @return string
     */
    public function getMappedFormat()
    {
        return $this->mappedFormat;
    }

    /**
     * Sets a new mappedFormat
     *
     * @param string $mappedFormat
     * @return self
     */
    public function setMappedFormat($mappedFormat)
    {
        $this->mappedFormat = $mappedFormat;
        return $this;
    }


}

