<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing OwnIPRecordType
 *
 * 
 * XSD Type: OwnIPRecord
 */
class OwnIPRecordType
{

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

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


}

