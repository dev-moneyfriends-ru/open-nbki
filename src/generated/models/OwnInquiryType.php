<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing OwnInquiryType
 *
 * 
 * XSD Type: OwnInquiry
 */
class OwnInquiryType
{

    /**
     * @var int $inqControlNum
     */
    private $inqControlNum = null;

    /**
     * Gets as inqControlNum
     *
     * @return int
     */
    public function getInqControlNum()
    {
        return $this->inqControlNum;
    }

    /**
     * Sets a new inqControlNum
     *
     * @param int $inqControlNum
     * @return self
     */
    public function setInqControlNum($inqControlNum)
    {
        $this->inqControlNum = $inqControlNum;
        return $this;
    }


}

