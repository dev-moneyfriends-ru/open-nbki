<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing RegnumType
 *
 * 
 * XSD Type: Regnum
 */
class RegnumType
{

    /**
     * @var int $taxpayerCode
     */
    private $taxpayerCode = null;

    /**
     * @var string $taxpayerNum
     */
    private $taxpayerNum = null;

    /**
     * @var int $regNumCode
     */
    private $regNumCode = null;

    /**
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * @var string $lEI
     */
    private $lEI = null;

    /**
     * @var int $fid
     */
    private $fid = null;

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var string $memberCode
     */
    private $memberCode = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var string $disputedStatus
     */
    private $disputedStatus = null;

    /**
     * @var string $disputedStatusText
     */
    private $disputedStatusText = null;

    /**
     * Gets as taxpayerCode
     *
     * @return int
     */
    public function getTaxpayerCode()
    {
        return $this->taxpayerCode;
    }

    /**
     * Sets a new taxpayerCode
     *
     * @param int $taxpayerCode
     * @return self
     */
    public function setTaxpayerCode($taxpayerCode)
    {
        $this->taxpayerCode = $taxpayerCode;
        return $this;
    }

    /**
     * Gets as taxpayerNum
     *
     * @return string
     */
    public function getTaxpayerNum()
    {
        return $this->taxpayerNum;
    }

    /**
     * Sets a new taxpayerNum
     *
     * @param string $taxpayerNum
     * @return self
     */
    public function setTaxpayerNum($taxpayerNum)
    {
        $this->taxpayerNum = $taxpayerNum;
        return $this;
    }

    /**
     * Gets as regNumCode
     *
     * @return int
     */
    public function getRegNumCode()
    {
        return $this->regNumCode;
    }

    /**
     * Sets a new regNumCode
     *
     * @param int $regNumCode
     * @return self
     */
    public function setRegNumCode($regNumCode)
    {
        $this->regNumCode = $regNumCode;
        return $this;
    }

    /**
     * Gets as regNum
     *
     * @return string
     */
    public function getRegNum()
    {
        return $this->regNum;
    }

    /**
     * Sets a new regNum
     *
     * @param string $regNum
     * @return self
     */
    public function setRegNum($regNum)
    {
        $this->regNum = $regNum;
        return $this;
    }

    /**
     * Gets as lEI
     *
     * @return string
     */
    public function getLEI()
    {
        return $this->lEI;
    }

    /**
     * Sets a new lEI
     *
     * @param string $lEI
     * @return self
     */
    public function setLEI($lEI)
    {
        $this->lEI = $lEI;
        return $this;
    }

    /**
     * Gets as fid
     *
     * @return int
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Sets a new fid
     *
     * @param int $fid
     * @return self
     */
    public function setFid($fid)
    {
        $this->fid = $fid;
        return $this;
    }

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
     * Gets as memberCode
     *
     * @return string
     */
    public function getMemberCode()
    {
        return $this->memberCode;
    }

    /**
     * Sets a new memberCode
     *
     * @param string $memberCode
     * @return self
     */
    public function setMemberCode($memberCode)
    {
        $this->memberCode = $memberCode;
        return $this;
    }

    /**
     * Gets as fileSinceDt
     *
     * @return \DateTime
     */
    public function getFileSinceDt()
    {
        return $this->fileSinceDt;
    }

    /**
     * Sets a new fileSinceDt
     *
     * @param \DateTime $fileSinceDt
     * @return self
     */
    public function setFileSinceDt(\DateTime $fileSinceDt)
    {
        $this->fileSinceDt = $fileSinceDt;
        return $this;
    }

    /**
     * Gets as lastUpdatedDt
     *
     * @return \DateTime
     */
    public function getLastUpdatedDt()
    {
        return $this->lastUpdatedDt;
    }

    /**
     * Sets a new lastUpdatedDt
     *
     * @param \DateTime $lastUpdatedDt
     * @return self
     */
    public function setLastUpdatedDt(\DateTime $lastUpdatedDt)
    {
        $this->lastUpdatedDt = $lastUpdatedDt;
        return $this;
    }

    /**
     * Gets as disputedStatus
     *
     * @return string
     */
    public function getDisputedStatus()
    {
        return $this->disputedStatus;
    }

    /**
     * Sets a new disputedStatus
     *
     * @param string $disputedStatus
     * @return self
     */
    public function setDisputedStatus($disputedStatus)
    {
        $this->disputedStatus = $disputedStatus;
        return $this;
    }

    /**
     * Gets as disputedStatusText
     *
     * @return string
     */
    public function getDisputedStatusText()
    {
        return $this->disputedStatusText;
    }

    /**
     * Sets a new disputedStatusText
     *
     * @param string $disputedStatusText
     * @return self
     */
    public function setDisputedStatusText($disputedStatusText)
    {
        $this->disputedStatusText = $disputedStatusText;
        return $this;
    }


}

