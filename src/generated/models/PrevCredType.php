<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing PrevCredType
 *
 * 
 * XSD Type: PrevCred
 */
class PrevCredType
{

    /**
     * @var int $prevRus
     */
    private $prevRus = null;

    /**
     * @var string $prevBorrowerName
     */
    private $prevBorrowerName = null;

    /**
     * @var string $prevBorrowerRegNum
     */
    private $prevBorrowerRegNum = null;

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
     * Gets as prevRus
     *
     * @return int
     */
    public function getPrevRus()
    {
        return $this->prevRus;
    }

    /**
     * Sets a new prevRus
     *
     * @param int $prevRus
     * @return self
     */
    public function setPrevRus($prevRus)
    {
        $this->prevRus = $prevRus;
        return $this;
    }

    /**
     * Gets as prevBorrowerName
     *
     * @return string
     */
    public function getPrevBorrowerName()
    {
        return $this->prevBorrowerName;
    }

    /**
     * Sets a new prevBorrowerName
     *
     * @param string $prevBorrowerName
     * @return self
     */
    public function setPrevBorrowerName($prevBorrowerName)
    {
        $this->prevBorrowerName = $prevBorrowerName;
        return $this;
    }

    /**
     * Gets as prevBorrowerRegNum
     *
     * @return string
     */
    public function getPrevBorrowerRegNum()
    {
        return $this->prevBorrowerRegNum;
    }

    /**
     * Sets a new prevBorrowerRegNum
     *
     * @param string $prevBorrowerRegNum
     * @return self
     */
    public function setPrevBorrowerRegNum($prevBorrowerRegNum)
    {
        $this->prevBorrowerRegNum = $prevBorrowerRegNum;
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

