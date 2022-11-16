<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing UserLegalType
 *
 * 
 * XSD Type: UserLegal
 */
class UserLegalType
{

    /**
     * @var int $memberTypeCode
     */
    private $memberTypeCode = null;

    /**
     * @var int $memberRus
     */
    private $memberRus = null;

    /**
     * @var string $memberFullName
     */
    private $memberFullName = null;

    /**
     * @var string $memberShortName
     */
    private $memberShortName = null;

    /**
     * @var string $memberOtherName
     */
    private $memberOtherName = null;

    /**
     * @var string $memberLEI
     */
    private $memberLEI = null;

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
     * Gets as memberTypeCode
     *
     * @return int
     */
    public function getMemberTypeCode()
    {
        return $this->memberTypeCode;
    }

    /**
     * Sets a new memberTypeCode
     *
     * @param int $memberTypeCode
     * @return self
     */
    public function setMemberTypeCode($memberTypeCode)
    {
        $this->memberTypeCode = $memberTypeCode;
        return $this;
    }

    /**
     * Gets as memberRus
     *
     * @return int
     */
    public function getMemberRus()
    {
        return $this->memberRus;
    }

    /**
     * Sets a new memberRus
     *
     * @param int $memberRus
     * @return self
     */
    public function setMemberRus($memberRus)
    {
        $this->memberRus = $memberRus;
        return $this;
    }

    /**
     * Gets as memberFullName
     *
     * @return string
     */
    public function getMemberFullName()
    {
        return $this->memberFullName;
    }

    /**
     * Sets a new memberFullName
     *
     * @param string $memberFullName
     * @return self
     */
    public function setMemberFullName($memberFullName)
    {
        $this->memberFullName = $memberFullName;
        return $this;
    }

    /**
     * Gets as memberShortName
     *
     * @return string
     */
    public function getMemberShortName()
    {
        return $this->memberShortName;
    }

    /**
     * Sets a new memberShortName
     *
     * @param string $memberShortName
     * @return self
     */
    public function setMemberShortName($memberShortName)
    {
        $this->memberShortName = $memberShortName;
        return $this;
    }

    /**
     * Gets as memberOtherName
     *
     * @return string
     */
    public function getMemberOtherName()
    {
        return $this->memberOtherName;
    }

    /**
     * Sets a new memberOtherName
     *
     * @param string $memberOtherName
     * @return self
     */
    public function setMemberOtherName($memberOtherName)
    {
        $this->memberOtherName = $memberOtherName;
        return $this;
    }

    /**
     * Gets as memberLEI
     *
     * @return string
     */
    public function getMemberLEI()
    {
        return $this->memberLEI;
    }

    /**
     * Sets a new memberLEI
     *
     * @param string $memberLEI
     * @return self
     */
    public function setMemberLEI($memberLEI)
    {
        $this->memberLEI = $memberLEI;
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

