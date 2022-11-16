<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing CollatInsuredRUTDFType
 *
 * 
 * XSD Type: CollatInsuredRUTDF
 */
class CollatInsuredRUTDFType
{

    /**
     * @var int $insurLimit
     */
    private $insurLimit = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var int $hasFranchise
     */
    private $hasFranchise = null;

    /**
     * @var \DateTime $insurStartDt
     */
    private $insurStartDt = null;

    /**
     * @var \DateTime $insurEndDt
     */
    private $insurEndDt = null;

    /**
     * @var \DateTime $insurFactEndDt
     */
    private $insurFactEndDt = null;

    /**
     * @var string $insurEndReason
     */
    private $insurEndReason = null;

    /**
     * @var int $fid
     */
    private $fid = null;

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var string $acctSerialNum
     */
    private $acctSerialNum = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

    /**
     * Gets as insurLimit
     *
     * @return int
     */
    public function getInsurLimit()
    {
        return $this->insurLimit;
    }

    /**
     * Sets a new insurLimit
     *
     * @param int $insurLimit
     * @return self
     */
    public function setInsurLimit($insurLimit)
    {
        $this->insurLimit = $insurLimit;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as hasFranchise
     *
     * @return int
     */
    public function getHasFranchise()
    {
        return $this->hasFranchise;
    }

    /**
     * Sets a new hasFranchise
     *
     * @param int $hasFranchise
     * @return self
     */
    public function setHasFranchise($hasFranchise)
    {
        $this->hasFranchise = $hasFranchise;
        return $this;
    }

    /**
     * Gets as insurStartDt
     *
     * @return \DateTime
     */
    public function getInsurStartDt()
    {
        return $this->insurStartDt;
    }

    /**
     * Sets a new insurStartDt
     *
     * @param \DateTime $insurStartDt
     * @return self
     */
    public function setInsurStartDt(\DateTime $insurStartDt)
    {
        $this->insurStartDt = $insurStartDt;
        return $this;
    }

    /**
     * Gets as insurEndDt
     *
     * @return \DateTime
     */
    public function getInsurEndDt()
    {
        return $this->insurEndDt;
    }

    /**
     * Sets a new insurEndDt
     *
     * @param \DateTime $insurEndDt
     * @return self
     */
    public function setInsurEndDt(\DateTime $insurEndDt)
    {
        $this->insurEndDt = $insurEndDt;
        return $this;
    }

    /**
     * Gets as insurFactEndDt
     *
     * @return \DateTime
     */
    public function getInsurFactEndDt()
    {
        return $this->insurFactEndDt;
    }

    /**
     * Sets a new insurFactEndDt
     *
     * @param \DateTime $insurFactEndDt
     * @return self
     */
    public function setInsurFactEndDt(\DateTime $insurFactEndDt)
    {
        $this->insurFactEndDt = $insurFactEndDt;
        return $this;
    }

    /**
     * Gets as insurEndReason
     *
     * @return string
     */
    public function getInsurEndReason()
    {
        return $this->insurEndReason;
    }

    /**
     * Sets a new insurEndReason
     *
     * @param string $insurEndReason
     * @return self
     */
    public function setInsurEndReason($insurEndReason)
    {
        $this->insurEndReason = $insurEndReason;
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
     * Gets as acctSerialNum
     *
     * @return string
     */
    public function getAcctSerialNum()
    {
        return $this->acctSerialNum;
    }

    /**
     * Sets a new acctSerialNum
     *
     * @param string $acctSerialNum
     * @return self
     */
    public function setAcctSerialNum($acctSerialNum)
    {
        $this->acctSerialNum = $acctSerialNum;
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

