<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing UserEntrepType
 *
 * 
 * XSD Type: UserEntrep
 */
class UserEntrepType
{

    /**
     * @var string $memberLastName
     */
    private $memberLastName = null;

    /**
     * @var string $memberFirstName
     */
    private $memberFirstName = null;

    /**
     * @var string $memberMiddleName
     */
    private $memberMiddleName = null;

    /**
     * @var \DateTime $memberBirthDt
     */
    private $memberBirthDt = null;

    /**
     * @var string $memberPlaceOfBirth
     */
    private $memberPlaceOfBirth = null;

    /**
     * @var string $memberRegNum
     */
    private $memberRegNum = null;

    /**
     * @var int $memberTaxpayerIDCode
     */
    private $memberTaxpayerIDCode = null;

    /**
     * @var string $memberTaxpayerID
     */
    private $memberTaxpayerID = null;

    /**
     * @var string $memberSNILS
     */
    private $memberSNILS = null;

    /**
     * @var string $memberIdType
     */
    private $memberIdType = null;

    /**
     * @var string $memberOtherId
     */
    private $memberOtherId = null;

    /**
     * @var string $memberIdSeries
     */
    private $memberIdSeries = null;

    /**
     * @var string $memberIdNum
     */
    private $memberIdNum = null;

    /**
     * @var \DateTime $memberIdIssueDt
     */
    private $memberIdIssueDt = null;

    /**
     * @var string $memberIdIssueAuthority
     */
    private $memberIdIssueAuthority = null;

    /**
     * @var string $memberIdDivCode
     */
    private $memberIdDivCode = null;

    /**
     * @var int $memberMonitor
     */
    private $memberMonitor = null;

    /**
     * @var \DateTime $memberMonitorStartDt
     */
    private $memberMonitorStartDt = null;

    /**
     * @var int $inquiryType
     */
    private $inquiryType = null;

    /**
     * @var \DateTime $inqRespDate
     */
    private $inqRespDate = null;

    /**
     * @var \DateTime $inquiryDt
     */
    private $inquiryDt = null;

    /**
     * @var int $inquiryPurpose
     */
    private $inquiryPurpose = null;

    /**
     * @var string $otherInqPurpose
     */
    private $otherInqPurpose = null;

    /**
     * @var string $inqAmount
     */
    private $inqAmount = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

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
     * Gets as memberLastName
     *
     * @return string
     */
    public function getMemberLastName()
    {
        return $this->memberLastName;
    }

    /**
     * Sets a new memberLastName
     *
     * @param string $memberLastName
     * @return self
     */
    public function setMemberLastName($memberLastName)
    {
        $this->memberLastName = $memberLastName;
        return $this;
    }

    /**
     * Gets as memberFirstName
     *
     * @return string
     */
    public function getMemberFirstName()
    {
        return $this->memberFirstName;
    }

    /**
     * Sets a new memberFirstName
     *
     * @param string $memberFirstName
     * @return self
     */
    public function setMemberFirstName($memberFirstName)
    {
        $this->memberFirstName = $memberFirstName;
        return $this;
    }

    /**
     * Gets as memberMiddleName
     *
     * @return string
     */
    public function getMemberMiddleName()
    {
        return $this->memberMiddleName;
    }

    /**
     * Sets a new memberMiddleName
     *
     * @param string $memberMiddleName
     * @return self
     */
    public function setMemberMiddleName($memberMiddleName)
    {
        $this->memberMiddleName = $memberMiddleName;
        return $this;
    }

    /**
     * Gets as memberBirthDt
     *
     * @return \DateTime
     */
    public function getMemberBirthDt()
    {
        return $this->memberBirthDt;
    }

    /**
     * Sets a new memberBirthDt
     *
     * @param \DateTime $memberBirthDt
     * @return self
     */
    public function setMemberBirthDt(\DateTime $memberBirthDt)
    {
        $this->memberBirthDt = $memberBirthDt;
        return $this;
    }

    /**
     * Gets as memberPlaceOfBirth
     *
     * @return string
     */
    public function getMemberPlaceOfBirth()
    {
        return $this->memberPlaceOfBirth;
    }

    /**
     * Sets a new memberPlaceOfBirth
     *
     * @param string $memberPlaceOfBirth
     * @return self
     */
    public function setMemberPlaceOfBirth($memberPlaceOfBirth)
    {
        $this->memberPlaceOfBirth = $memberPlaceOfBirth;
        return $this;
    }

    /**
     * Gets as memberRegNum
     *
     * @return string
     */
    public function getMemberRegNum()
    {
        return $this->memberRegNum;
    }

    /**
     * Sets a new memberRegNum
     *
     * @param string $memberRegNum
     * @return self
     */
    public function setMemberRegNum($memberRegNum)
    {
        $this->memberRegNum = $memberRegNum;
        return $this;
    }

    /**
     * Gets as memberTaxpayerIDCode
     *
     * @return int
     */
    public function getMemberTaxpayerIDCode()
    {
        return $this->memberTaxpayerIDCode;
    }

    /**
     * Sets a new memberTaxpayerIDCode
     *
     * @param int $memberTaxpayerIDCode
     * @return self
     */
    public function setMemberTaxpayerIDCode($memberTaxpayerIDCode)
    {
        $this->memberTaxpayerIDCode = $memberTaxpayerIDCode;
        return $this;
    }

    /**
     * Gets as memberTaxpayerID
     *
     * @return string
     */
    public function getMemberTaxpayerID()
    {
        return $this->memberTaxpayerID;
    }

    /**
     * Sets a new memberTaxpayerID
     *
     * @param string $memberTaxpayerID
     * @return self
     */
    public function setMemberTaxpayerID($memberTaxpayerID)
    {
        $this->memberTaxpayerID = $memberTaxpayerID;
        return $this;
    }

    /**
     * Gets as memberSNILS
     *
     * @return string
     */
    public function getMemberSNILS()
    {
        return $this->memberSNILS;
    }

    /**
     * Sets a new memberSNILS
     *
     * @param string $memberSNILS
     * @return self
     */
    public function setMemberSNILS($memberSNILS)
    {
        $this->memberSNILS = $memberSNILS;
        return $this;
    }

    /**
     * Gets as memberIdType
     *
     * @return string
     */
    public function getMemberIdType()
    {
        return $this->memberIdType;
    }

    /**
     * Sets a new memberIdType
     *
     * @param string $memberIdType
     * @return self
     */
    public function setMemberIdType($memberIdType)
    {
        $this->memberIdType = $memberIdType;
        return $this;
    }

    /**
     * Gets as memberOtherId
     *
     * @return string
     */
    public function getMemberOtherId()
    {
        return $this->memberOtherId;
    }

    /**
     * Sets a new memberOtherId
     *
     * @param string $memberOtherId
     * @return self
     */
    public function setMemberOtherId($memberOtherId)
    {
        $this->memberOtherId = $memberOtherId;
        return $this;
    }

    /**
     * Gets as memberIdSeries
     *
     * @return string
     */
    public function getMemberIdSeries()
    {
        return $this->memberIdSeries;
    }

    /**
     * Sets a new memberIdSeries
     *
     * @param string $memberIdSeries
     * @return self
     */
    public function setMemberIdSeries($memberIdSeries)
    {
        $this->memberIdSeries = $memberIdSeries;
        return $this;
    }

    /**
     * Gets as memberIdNum
     *
     * @return string
     */
    public function getMemberIdNum()
    {
        return $this->memberIdNum;
    }

    /**
     * Sets a new memberIdNum
     *
     * @param string $memberIdNum
     * @return self
     */
    public function setMemberIdNum($memberIdNum)
    {
        $this->memberIdNum = $memberIdNum;
        return $this;
    }

    /**
     * Gets as memberIdIssueDt
     *
     * @return \DateTime
     */
    public function getMemberIdIssueDt()
    {
        return $this->memberIdIssueDt;
    }

    /**
     * Sets a new memberIdIssueDt
     *
     * @param \DateTime $memberIdIssueDt
     * @return self
     */
    public function setMemberIdIssueDt(\DateTime $memberIdIssueDt)
    {
        $this->memberIdIssueDt = $memberIdIssueDt;
        return $this;
    }

    /**
     * Gets as memberIdIssueAuthority
     *
     * @return string
     */
    public function getMemberIdIssueAuthority()
    {
        return $this->memberIdIssueAuthority;
    }

    /**
     * Sets a new memberIdIssueAuthority
     *
     * @param string $memberIdIssueAuthority
     * @return self
     */
    public function setMemberIdIssueAuthority($memberIdIssueAuthority)
    {
        $this->memberIdIssueAuthority = $memberIdIssueAuthority;
        return $this;
    }

    /**
     * Gets as memberIdDivCode
     *
     * @return string
     */
    public function getMemberIdDivCode()
    {
        return $this->memberIdDivCode;
    }

    /**
     * Sets a new memberIdDivCode
     *
     * @param string $memberIdDivCode
     * @return self
     */
    public function setMemberIdDivCode($memberIdDivCode)
    {
        $this->memberIdDivCode = $memberIdDivCode;
        return $this;
    }

    /**
     * Gets as memberMonitor
     *
     * @return int
     */
    public function getMemberMonitor()
    {
        return $this->memberMonitor;
    }

    /**
     * Sets a new memberMonitor
     *
     * @param int $memberMonitor
     * @return self
     */
    public function setMemberMonitor($memberMonitor)
    {
        $this->memberMonitor = $memberMonitor;
        return $this;
    }

    /**
     * Gets as memberMonitorStartDt
     *
     * @return \DateTime
     */
    public function getMemberMonitorStartDt()
    {
        return $this->memberMonitorStartDt;
    }

    /**
     * Sets a new memberMonitorStartDt
     *
     * @param \DateTime $memberMonitorStartDt
     * @return self
     */
    public function setMemberMonitorStartDt(\DateTime $memberMonitorStartDt)
    {
        $this->memberMonitorStartDt = $memberMonitorStartDt;
        return $this;
    }

    /**
     * Gets as inquiryType
     *
     * @return int
     */
    public function getInquiryType()
    {
        return $this->inquiryType;
    }

    /**
     * Sets a new inquiryType
     *
     * @param int $inquiryType
     * @return self
     */
    public function setInquiryType($inquiryType)
    {
        $this->inquiryType = $inquiryType;
        return $this;
    }

    /**
     * Gets as inqRespDate
     *
     * @return \DateTime
     */
    public function getInqRespDate()
    {
        return $this->inqRespDate;
    }

    /**
     * Sets a new inqRespDate
     *
     * @param \DateTime $inqRespDate
     * @return self
     */
    public function setInqRespDate(\DateTime $inqRespDate)
    {
        $this->inqRespDate = $inqRespDate;
        return $this;
    }

    /**
     * Gets as inquiryDt
     *
     * @return \DateTime
     */
    public function getInquiryDt()
    {
        return $this->inquiryDt;
    }

    /**
     * Sets a new inquiryDt
     *
     * @param \DateTime $inquiryDt
     * @return self
     */
    public function setInquiryDt(\DateTime $inquiryDt)
    {
        $this->inquiryDt = $inquiryDt;
        return $this;
    }

    /**
     * Gets as inquiryPurpose
     *
     * @return int
     */
    public function getInquiryPurpose()
    {
        return $this->inquiryPurpose;
    }

    /**
     * Sets a new inquiryPurpose
     *
     * @param int $inquiryPurpose
     * @return self
     */
    public function setInquiryPurpose($inquiryPurpose)
    {
        $this->inquiryPurpose = $inquiryPurpose;
        return $this;
    }

    /**
     * Gets as otherInqPurpose
     *
     * @return string
     */
    public function getOtherInqPurpose()
    {
        return $this->otherInqPurpose;
    }

    /**
     * Sets a new otherInqPurpose
     *
     * @param string $otherInqPurpose
     * @return self
     */
    public function setOtherInqPurpose($otherInqPurpose)
    {
        $this->otherInqPurpose = $otherInqPurpose;
        return $this;
    }

    /**
     * Gets as inqAmount
     *
     * @return string
     */
    public function getInqAmount()
    {
        return $this->inqAmount;
    }

    /**
     * Sets a new inqAmount
     *
     * @param string $inqAmount
     * @return self
     */
    public function setInqAmount($inqAmount)
    {
        $this->inqAmount = $inqAmount;
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


}

