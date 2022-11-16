<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing OwnAccountType
 *
 * 
 * XSD Type: OwnAccount
 */
class OwnAccountType
{

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var string $acctNum
     */
    private $acctNum = null;

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
     * Gets as acctNum
     *
     * @return string
     */
    public function getAcctNum()
    {
        return $this->acctNum;
    }

    /**
     * Sets a new acctNum
     *
     * @param string $acctNum
     * @return self
     */
    public function setAcctNum($acctNum)
    {
        $this->acctNum = $acctNum;
        return $this;
    }


}

