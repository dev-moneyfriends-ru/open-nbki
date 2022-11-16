<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing ReorgType
 *
 * 
 * XSD Type: Reorg
 */
class ReorgType
{

    /**
     * @var int $nameChangeCode
     */
    private $nameChangeCode = null;

    /**
     * @var int $isReorg
     */
    private $isReorg = null;

    /**
     * @var string $prevName
     */
    private $prevName = null;

    /**
     * @var string $prevAbbrName
     */
    private $prevAbbrName = null;

    /**
     * @var string $prevRegNum
     */
    private $prevRegNum = null;

    /**
     * @var \DateTime $reorgDt
     */
    private $reorgDt = null;

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
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

    /**
     * Gets as nameChangeCode
     *
     * @return int
     */
    public function getNameChangeCode()
    {
        return $this->nameChangeCode;
    }

    /**
     * Sets a new nameChangeCode
     *
     * @param int $nameChangeCode
     * @return self
     */
    public function setNameChangeCode($nameChangeCode)
    {
        $this->nameChangeCode = $nameChangeCode;
        return $this;
    }

    /**
     * Gets as isReorg
     *
     * @return int
     */
    public function getIsReorg()
    {
        return $this->isReorg;
    }

    /**
     * Sets a new isReorg
     *
     * @param int $isReorg
     * @return self
     */
    public function setIsReorg($isReorg)
    {
        $this->isReorg = $isReorg;
        return $this;
    }

    /**
     * Gets as prevName
     *
     * @return string
     */
    public function getPrevName()
    {
        return $this->prevName;
    }

    /**
     * Sets a new prevName
     *
     * @param string $prevName
     * @return self
     */
    public function setPrevName($prevName)
    {
        $this->prevName = $prevName;
        return $this;
    }

    /**
     * Gets as prevAbbrName
     *
     * @return string
     */
    public function getPrevAbbrName()
    {
        return $this->prevAbbrName;
    }

    /**
     * Sets a new prevAbbrName
     *
     * @param string $prevAbbrName
     * @return self
     */
    public function setPrevAbbrName($prevAbbrName)
    {
        $this->prevAbbrName = $prevAbbrName;
        return $this;
    }

    /**
     * Gets as prevRegNum
     *
     * @return string
     */
    public function getPrevRegNum()
    {
        return $this->prevRegNum;
    }

    /**
     * Sets a new prevRegNum
     *
     * @param string $prevRegNum
     * @return self
     */
    public function setPrevRegNum($prevRegNum)
    {
        $this->prevRegNum = $prevRegNum;
        return $this;
    }

    /**
     * Gets as reorgDt
     *
     * @return \DateTime
     */
    public function getReorgDt()
    {
        return $this->reorgDt;
    }

    /**
     * Sets a new reorgDt
     *
     * @param \DateTime $reorgDt
     * @return self
     */
    public function setReorgDt(\DateTime $reorgDt)
    {
        $this->reorgDt = $reorgDt;
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

    /**
     * Gets as reportingDt
     *
     * @return \DateTime
     */
    public function getReportingDt()
    {
        return $this->reportingDt;
    }

    /**
     * Sets a new reportingDt
     *
     * @param \DateTime $reportingDt
     * @return self
     */
    public function setReportingDt(\DateTime $reportingDt)
    {
        $this->reportingDt = $reportingDt;
        return $this;
    }


}

