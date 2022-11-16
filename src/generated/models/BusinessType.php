<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing BusinessType
 *
 * 
 * XSD Type: Business
 */
class BusinessType
{

    /**
     * @var int $fid
     */
    private $fid = null;

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var string $businessName
     */
    private $businessName = null;

    /**
     * @var int $numberOfEmployees
     */
    private $numberOfEmployees = null;

    /**
     * @var int $numberOfDirectors
     */
    private $numberOfDirectors = null;

    /**
     * @var string $revenueRangeCode
     */
    private $revenueRangeCode = null;

    /**
     * @var string $revenueRangeCodeText
     */
    private $revenueRangeCodeText = null;

    /**
     * @var string $businessStatus
     */
    private $businessStatus = null;

    /**
     * @var string $businessStatusText
     */
    private $businessStatusText = null;

    /**
     * @var \DateTime $dateOfStatus
     */
    private $dateOfStatus = null;

    /**
     * @var string $abbreviatedBusinessName
     */
    private $abbreviatedBusinessName = null;

    /**
     * @var string $trademark
     */
    private $trademark = null;

    /**
     * @var string $businessNameRF
     */
    private $businessNameRF = null;

    /**
     * @var string $businessNameAlt
     */
    private $businessNameAlt = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var string $freezeFlag
     */
    private $freezeFlag = null;

    /**
     * @var string $suppressFlag
     */
    private $suppressFlag = null;

    /**
     * @var \DateTime $suppressStrDt
     */
    private $suppressStrDt = null;

    /**
     * @var \DateTime $suppressEndDt
     */
    private $suppressEndDt = null;

    /**
     * @var string $disputedStatus
     */
    private $disputedStatus = null;

    /**
     * @var string $disputedStatusText
     */
    private $disputedStatusText = null;

    /**
     * @var string $otherName
     */
    private $otherName = null;

    /**
     * @var string $memberCode
     */
    private $memberCode = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

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
     * Gets as businessName
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->businessName;
    }

    /**
     * Sets a new businessName
     *
     * @param string $businessName
     * @return self
     */
    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;
        return $this;
    }

    /**
     * Gets as numberOfEmployees
     *
     * @return int
     */
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * Sets a new numberOfEmployees
     *
     * @param int $numberOfEmployees
     * @return self
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->numberOfEmployees = $numberOfEmployees;
        return $this;
    }

    /**
     * Gets as numberOfDirectors
     *
     * @return int
     */
    public function getNumberOfDirectors()
    {
        return $this->numberOfDirectors;
    }

    /**
     * Sets a new numberOfDirectors
     *
     * @param int $numberOfDirectors
     * @return self
     */
    public function setNumberOfDirectors($numberOfDirectors)
    {
        $this->numberOfDirectors = $numberOfDirectors;
        return $this;
    }

    /**
     * Gets as revenueRangeCode
     *
     * @return string
     */
    public function getRevenueRangeCode()
    {
        return $this->revenueRangeCode;
    }

    /**
     * Sets a new revenueRangeCode
     *
     * @param string $revenueRangeCode
     * @return self
     */
    public function setRevenueRangeCode($revenueRangeCode)
    {
        $this->revenueRangeCode = $revenueRangeCode;
        return $this;
    }

    /**
     * Gets as revenueRangeCodeText
     *
     * @return string
     */
    public function getRevenueRangeCodeText()
    {
        return $this->revenueRangeCodeText;
    }

    /**
     * Sets a new revenueRangeCodeText
     *
     * @param string $revenueRangeCodeText
     * @return self
     */
    public function setRevenueRangeCodeText($revenueRangeCodeText)
    {
        $this->revenueRangeCodeText = $revenueRangeCodeText;
        return $this;
    }

    /**
     * Gets as businessStatus
     *
     * @return string
     */
    public function getBusinessStatus()
    {
        return $this->businessStatus;
    }

    /**
     * Sets a new businessStatus
     *
     * @param string $businessStatus
     * @return self
     */
    public function setBusinessStatus($businessStatus)
    {
        $this->businessStatus = $businessStatus;
        return $this;
    }

    /**
     * Gets as businessStatusText
     *
     * @return string
     */
    public function getBusinessStatusText()
    {
        return $this->businessStatusText;
    }

    /**
     * Sets a new businessStatusText
     *
     * @param string $businessStatusText
     * @return self
     */
    public function setBusinessStatusText($businessStatusText)
    {
        $this->businessStatusText = $businessStatusText;
        return $this;
    }

    /**
     * Gets as dateOfStatus
     *
     * @return \DateTime
     */
    public function getDateOfStatus()
    {
        return $this->dateOfStatus;
    }

    /**
     * Sets a new dateOfStatus
     *
     * @param \DateTime $dateOfStatus
     * @return self
     */
    public function setDateOfStatus(\DateTime $dateOfStatus)
    {
        $this->dateOfStatus = $dateOfStatus;
        return $this;
    }

    /**
     * Gets as abbreviatedBusinessName
     *
     * @return string
     */
    public function getAbbreviatedBusinessName()
    {
        return $this->abbreviatedBusinessName;
    }

    /**
     * Sets a new abbreviatedBusinessName
     *
     * @param string $abbreviatedBusinessName
     * @return self
     */
    public function setAbbreviatedBusinessName($abbreviatedBusinessName)
    {
        $this->abbreviatedBusinessName = $abbreviatedBusinessName;
        return $this;
    }

    /**
     * Gets as trademark
     *
     * @return string
     */
    public function getTrademark()
    {
        return $this->trademark;
    }

    /**
     * Sets a new trademark
     *
     * @param string $trademark
     * @return self
     */
    public function setTrademark($trademark)
    {
        $this->trademark = $trademark;
        return $this;
    }

    /**
     * Gets as businessNameRF
     *
     * @return string
     */
    public function getBusinessNameRF()
    {
        return $this->businessNameRF;
    }

    /**
     * Sets a new businessNameRF
     *
     * @param string $businessNameRF
     * @return self
     */
    public function setBusinessNameRF($businessNameRF)
    {
        $this->businessNameRF = $businessNameRF;
        return $this;
    }

    /**
     * Gets as businessNameAlt
     *
     * @return string
     */
    public function getBusinessNameAlt()
    {
        return $this->businessNameAlt;
    }

    /**
     * Sets a new businessNameAlt
     *
     * @param string $businessNameAlt
     * @return self
     */
    public function setBusinessNameAlt($businessNameAlt)
    {
        $this->businessNameAlt = $businessNameAlt;
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
     * Gets as freezeFlag
     *
     * @return string
     */
    public function getFreezeFlag()
    {
        return $this->freezeFlag;
    }

    /**
     * Sets a new freezeFlag
     *
     * @param string $freezeFlag
     * @return self
     */
    public function setFreezeFlag($freezeFlag)
    {
        $this->freezeFlag = $freezeFlag;
        return $this;
    }

    /**
     * Gets as suppressFlag
     *
     * @return string
     */
    public function getSuppressFlag()
    {
        return $this->suppressFlag;
    }

    /**
     * Sets a new suppressFlag
     *
     * @param string $suppressFlag
     * @return self
     */
    public function setSuppressFlag($suppressFlag)
    {
        $this->suppressFlag = $suppressFlag;
        return $this;
    }

    /**
     * Gets as suppressStrDt
     *
     * @return \DateTime
     */
    public function getSuppressStrDt()
    {
        return $this->suppressStrDt;
    }

    /**
     * Sets a new suppressStrDt
     *
     * @param \DateTime $suppressStrDt
     * @return self
     */
    public function setSuppressStrDt(\DateTime $suppressStrDt)
    {
        $this->suppressStrDt = $suppressStrDt;
        return $this;
    }

    /**
     * Gets as suppressEndDt
     *
     * @return \DateTime
     */
    public function getSuppressEndDt()
    {
        return $this->suppressEndDt;
    }

    /**
     * Sets a new suppressEndDt
     *
     * @param \DateTime $suppressEndDt
     * @return self
     */
    public function setSuppressEndDt(\DateTime $suppressEndDt)
    {
        $this->suppressEndDt = $suppressEndDt;
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
     * Gets as otherName
     *
     * @return string
     */
    public function getOtherName()
    {
        return $this->otherName;
    }

    /**
     * Sets a new otherName
     *
     * @param string $otherName
     * @return self
     */
    public function setOtherName($otherName)
    {
        $this->otherName = $otherName;
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

