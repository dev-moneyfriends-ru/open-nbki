<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing OwnAccountRUTDFType
 *
 * 
 * XSD Type: OwnAccountRUTDF
 */
class OwnAccountRUTDFType
{

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var string $uuid
     */
    private $uuid = null;

    /**
     * Gets as serialNum
     *
     * @return int
     */
    public function getSerialNum()
    {
        return $this->serialNum;
    }

    /**
     * Sets a new serialNum
     *
     * @param int $serialNum
     * @return self
     */
    public function setSerialNum($serialNum)
    {
        $this->serialNum = $serialNum;
        return $this;
    }

    /**
     * Gets as uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Sets a new uuid
     *
     * @param string $uuid
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }


}

