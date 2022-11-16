<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing QBCHAverPaymtType
 *
 * 
 * XSD Type: QBCHAverPaymt
 */
class QBCHAverPaymtType
{

    /**
     * @var string $averAmount
     */
    private $averAmount = null;

    /**
     * @var \DateTime $averDate
     */
    private $averDate = null;

    /**
     * @var string $averCurrency
     */
    private $averCurrency = null;

    /**
     * @var string $averUuid
     */
    private $averUuid = null;

    /**
     * @var string $averSrcRegnum
     */
    private $averSrcRegnum = null;

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
     * Gets as averAmount
     *
     * @return string
     */
    public function getAverAmount()
    {
        return $this->averAmount;
    }

    /**
     * Sets a new averAmount
     *
     * @param string $averAmount
     * @return self
     */
    public function setAverAmount($averAmount)
    {
        $this->averAmount = $averAmount;
        return $this;
    }

    /**
     * Gets as averDate
     *
     * @return \DateTime
     */
    public function getAverDate()
    {
        return $this->averDate;
    }

    /**
     * Sets a new averDate
     *
     * @param \DateTime $averDate
     * @return self
     */
    public function setAverDate(\DateTime $averDate)
    {
        $this->averDate = $averDate;
        return $this;
    }

    /**
     * Gets as averCurrency
     *
     * @return string
     */
    public function getAverCurrency()
    {
        return $this->averCurrency;
    }

    /**
     * Sets a new averCurrency
     *
     * @param string $averCurrency
     * @return self
     */
    public function setAverCurrency($averCurrency)
    {
        $this->averCurrency = $averCurrency;
        return $this;
    }

    /**
     * Gets as averUuid
     *
     * @return string
     */
    public function getAverUuid()
    {
        return $this->averUuid;
    }

    /**
     * Sets a new averUuid
     *
     * @param string $averUuid
     * @return self
     */
    public function setAverUuid($averUuid)
    {
        $this->averUuid = $averUuid;
        return $this;
    }

    /**
     * Gets as averSrcRegnum
     *
     * @return string
     */
    public function getAverSrcRegnum()
    {
        return $this->averSrcRegnum;
    }

    /**
     * Sets a new averSrcRegnum
     *
     * @param string $averSrcRegnum
     * @return self
     */
    public function setAverSrcRegnum($averSrcRegnum)
    {
        $this->averSrcRegnum = $averSrcRegnum;
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

