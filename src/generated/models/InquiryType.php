<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing InquiryType
 *
 * 
 * XSD Type: Inquiry
 */
class InquiryType
{

    /**
     * @var \mfteam\nbch\generated\models\ConsentType $consentReq
     */
    private $consentReq = null;

    /**
     * @var int $fid
     */
    private $fid = null;

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var string $srcCountryCode
     */
    private $srcCountryCode = null;

    /**
     * @var string $srcCountryCodeText
     */
    private $srcCountryCodeText = null;

    /**
     * @var string $memberCode
     */
    private $memberCode = null;

    /**
     * @var string $memberTypeText
     */
    private $memberTypeText = null;

    /**
     * @var string $memberNameText
     */
    private $memberNameText = null;

    /**
     * @var string $memberContactText
     */
    private $memberContactText = null;

    /**
     * @var int $inqControlNum
     */
    private $inqControlNum = null;

    /**
     * @var \DateTime $inquiryDt
     */
    private $inquiryDt = null;

    /**
     * @var string $inquiryDate
     */
    private $inquiryDate = null;

    /**
     * @var string $inquiryPeriod
     */
    private $inquiryPeriod = null;

    /**
     * @var string $inquiryTime
     */
    private $inquiryTime = null;

    /**
     * @var string $inqPurpose
     */
    private $inqPurpose = null;

    /**
     * @var string $inqPurposeText
     */
    private $inqPurposeText = null;

    /**
     * @var string $inqAmount
     */
    private $inqAmount = null;

    /**
     * @var string $billingCode
     */
    private $billingCode = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var string $memberFullName
     */
    private $memberFullName = null;

    /**
     * @var string $memberShortName
     */
    private $memberShortName = null;

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
     * @var string $memberRegNum
     */
    private $memberRegNum = null;

    /**
     * @var string $memberType
     */
    private $memberType = null;

    /**
     * @var string $memberTypeIDText
     */
    private $memberTypeIDText = null;

    /**
     * @var string $memberTaxpayerID
     */
    private $memberTaxpayerID = null;

    /**
     * @var string $memberOKPO
     */
    private $memberOKPO = null;

    /**
     * @var string $memberIDIssueAuth
     */
    private $memberIDIssueAuth = null;

    /**
     * @var string $memberIDIssueLoc
     */
    private $memberIDIssueLoc = null;

    /**
     * @var \DateTime $memberIDIssueDate
     */
    private $memberIDIssueDate = null;

    /**
     * @var string $memberBusinessCode
     */
    private $memberBusinessCode = null;

    /**
     * @var string $businessCategory
     */
    private $businessCategory = null;

    /**
     * @var string $userReference
     */
    private $userReference = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var int $freezeFlag
     */
    private $freezeFlag = null;

    /**
     * @var int $suppressFlag
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
     * @var \DateTime $powerStartDt
     */
    private $powerStartDt = null;

    /**
     * @var \DateTime $powerEndDt
     */
    private $powerEndDt = null;

    /**
     * @var int $inquiryType
     */
    private $inquiryType = null;

    /**
     * @var \DateTime $inqRespDate
     */
    private $inqRespDate = null;

    /**
     * @var string $otherInqPurpose
     */
    private $otherInqPurpose = null;

    /**
     * @var \mfteam\nbch\generated\models\UserLegalType $userLegal
     */
    private $userLegal = null;

    /**
     * @var \mfteam\nbch\generated\models\UserEntrepType $userEntrep
     */
    private $userEntrep = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var bool $fromRutdf
     */
    private $fromRutdf = null;

    /**
     * @var string $abonentInn
     */
    private $abonentInn = null;

    /**
     * @var string $abonentOgrn
     */
    private $abonentOgrn = null;

    /**
     * @var string $abonentFullName
     */
    private $abonentFullName = null;

    /**
     * Gets as consentReq
     *
     * @return \mfteam\nbch\generated\models\ConsentType
     */
    public function getConsentReq()
    {
        return $this->consentReq;
    }

    /**
     * Sets a new consentReq
     *
     * @param \mfteam\nbch\generated\models\ConsentType $consentReq
     * @return self
     */
    public function setConsentReq(\mfteam\nbch\generated\models\ConsentType $consentReq)
    {
        $this->consentReq = $consentReq;
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
     * Gets as srcCountryCode
     *
     * @return string
     */
    public function getSrcCountryCode()
    {
        return $this->srcCountryCode;
    }

    /**
     * Sets a new srcCountryCode
     *
     * @param string $srcCountryCode
     * @return self
     */
    public function setSrcCountryCode($srcCountryCode)
    {
        $this->srcCountryCode = $srcCountryCode;
        return $this;
    }

    /**
     * Gets as srcCountryCodeText
     *
     * @return string
     */
    public function getSrcCountryCodeText()
    {
        return $this->srcCountryCodeText;
    }

    /**
     * Sets a new srcCountryCodeText
     *
     * @param string $srcCountryCodeText
     * @return self
     */
    public function setSrcCountryCodeText($srcCountryCodeText)
    {
        $this->srcCountryCodeText = $srcCountryCodeText;
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
     * Gets as memberTypeText
     *
     * @return string
     */
    public function getMemberTypeText()
    {
        return $this->memberTypeText;
    }

    /**
     * Sets a new memberTypeText
     *
     * @param string $memberTypeText
     * @return self
     */
    public function setMemberTypeText($memberTypeText)
    {
        $this->memberTypeText = $memberTypeText;
        return $this;
    }

    /**
     * Gets as memberNameText
     *
     * @return string
     */
    public function getMemberNameText()
    {
        return $this->memberNameText;
    }

    /**
     * Sets a new memberNameText
     *
     * @param string $memberNameText
     * @return self
     */
    public function setMemberNameText($memberNameText)
    {
        $this->memberNameText = $memberNameText;
        return $this;
    }

    /**
     * Gets as memberContactText
     *
     * @return string
     */
    public function getMemberContactText()
    {
        return $this->memberContactText;
    }

    /**
     * Sets a new memberContactText
     *
     * @param string $memberContactText
     * @return self
     */
    public function setMemberContactText($memberContactText)
    {
        $this->memberContactText = $memberContactText;
        return $this;
    }

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
     * Gets as inquiryDate
     *
     * @return string
     */
    public function getInquiryDate()
    {
        return $this->inquiryDate;
    }

    /**
     * Sets a new inquiryDate
     *
     * @param string $inquiryDate
     * @return self
     */
    public function setInquiryDate($inquiryDate)
    {
        $this->inquiryDate = $inquiryDate;
        return $this;
    }

    /**
     * Gets as inquiryPeriod
     *
     * @return string
     */
    public function getInquiryPeriod()
    {
        return $this->inquiryPeriod;
    }

    /**
     * Sets a new inquiryPeriod
     *
     * @param string $inquiryPeriod
     * @return self
     */
    public function setInquiryPeriod($inquiryPeriod)
    {
        $this->inquiryPeriod = $inquiryPeriod;
        return $this;
    }

    /**
     * Gets as inquiryTime
     *
     * @return string
     */
    public function getInquiryTime()
    {
        return $this->inquiryTime;
    }

    /**
     * Sets a new inquiryTime
     *
     * @param string $inquiryTime
     * @return self
     */
    public function setInquiryTime($inquiryTime)
    {
        $this->inquiryTime = $inquiryTime;
        return $this;
    }

    /**
     * Gets as inqPurpose
     *
     * @return string
     */
    public function getInqPurpose()
    {
        return $this->inqPurpose;
    }

    /**
     * Sets a new inqPurpose
     *
     * @param string $inqPurpose
     * @return self
     */
    public function setInqPurpose($inqPurpose)
    {
        $this->inqPurpose = $inqPurpose;
        return $this;
    }

    /**
     * Gets as inqPurposeText
     *
     * @return string
     */
    public function getInqPurposeText()
    {
        return $this->inqPurposeText;
    }

    /**
     * Sets a new inqPurposeText
     *
     * @param string $inqPurposeText
     * @return self
     */
    public function setInqPurposeText($inqPurposeText)
    {
        $this->inqPurposeText = $inqPurposeText;
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
     * Gets as billingCode
     *
     * @return string
     */
    public function getBillingCode()
    {
        return $this->billingCode;
    }

    /**
     * Sets a new billingCode
     *
     * @param string $billingCode
     * @return self
     */
    public function setBillingCode($billingCode)
    {
        $this->billingCode = $billingCode;
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
     * Gets as memberType
     *
     * @return string
     */
    public function getMemberType()
    {
        return $this->memberType;
    }

    /**
     * Sets a new memberType
     *
     * @param string $memberType
     * @return self
     */
    public function setMemberType($memberType)
    {
        $this->memberType = $memberType;
        return $this;
    }

    /**
     * Gets as memberTypeIDText
     *
     * @return string
     */
    public function getMemberTypeIDText()
    {
        return $this->memberTypeIDText;
    }

    /**
     * Sets a new memberTypeIDText
     *
     * @param string $memberTypeIDText
     * @return self
     */
    public function setMemberTypeIDText($memberTypeIDText)
    {
        $this->memberTypeIDText = $memberTypeIDText;
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
     * Gets as memberOKPO
     *
     * @return string
     */
    public function getMemberOKPO()
    {
        return $this->memberOKPO;
    }

    /**
     * Sets a new memberOKPO
     *
     * @param string $memberOKPO
     * @return self
     */
    public function setMemberOKPO($memberOKPO)
    {
        $this->memberOKPO = $memberOKPO;
        return $this;
    }

    /**
     * Gets as memberIDIssueAuth
     *
     * @return string
     */
    public function getMemberIDIssueAuth()
    {
        return $this->memberIDIssueAuth;
    }

    /**
     * Sets a new memberIDIssueAuth
     *
     * @param string $memberIDIssueAuth
     * @return self
     */
    public function setMemberIDIssueAuth($memberIDIssueAuth)
    {
        $this->memberIDIssueAuth = $memberIDIssueAuth;
        return $this;
    }

    /**
     * Gets as memberIDIssueLoc
     *
     * @return string
     */
    public function getMemberIDIssueLoc()
    {
        return $this->memberIDIssueLoc;
    }

    /**
     * Sets a new memberIDIssueLoc
     *
     * @param string $memberIDIssueLoc
     * @return self
     */
    public function setMemberIDIssueLoc($memberIDIssueLoc)
    {
        $this->memberIDIssueLoc = $memberIDIssueLoc;
        return $this;
    }

    /**
     * Gets as memberIDIssueDate
     *
     * @return \DateTime
     */
    public function getMemberIDIssueDate()
    {
        return $this->memberIDIssueDate;
    }

    /**
     * Sets a new memberIDIssueDate
     *
     * @param \DateTime $memberIDIssueDate
     * @return self
     */
    public function setMemberIDIssueDate(\DateTime $memberIDIssueDate)
    {
        $this->memberIDIssueDate = $memberIDIssueDate;
        return $this;
    }

    /**
     * Gets as memberBusinessCode
     *
     * @return string
     */
    public function getMemberBusinessCode()
    {
        return $this->memberBusinessCode;
    }

    /**
     * Sets a new memberBusinessCode
     *
     * @param string $memberBusinessCode
     * @return self
     */
    public function setMemberBusinessCode($memberBusinessCode)
    {
        $this->memberBusinessCode = $memberBusinessCode;
        return $this;
    }

    /**
     * Gets as businessCategory
     *
     * @return string
     */
    public function getBusinessCategory()
    {
        return $this->businessCategory;
    }

    /**
     * Sets a new businessCategory
     *
     * @param string $businessCategory
     * @return self
     */
    public function setBusinessCategory($businessCategory)
    {
        $this->businessCategory = $businessCategory;
        return $this;
    }

    /**
     * Gets as userReference
     *
     * @return string
     */
    public function getUserReference()
    {
        return $this->userReference;
    }

    /**
     * Sets a new userReference
     *
     * @param string $userReference
     * @return self
     */
    public function setUserReference($userReference)
    {
        $this->userReference = $userReference;
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
     * @return int
     */
    public function getFreezeFlag()
    {
        return $this->freezeFlag;
    }

    /**
     * Sets a new freezeFlag
     *
     * @param int $freezeFlag
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
     * @return int
     */
    public function getSuppressFlag()
    {
        return $this->suppressFlag;
    }

    /**
     * Sets a new suppressFlag
     *
     * @param int $suppressFlag
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
     * Gets as powerStartDt
     *
     * @return \DateTime
     */
    public function getPowerStartDt()
    {
        return $this->powerStartDt;
    }

    /**
     * Sets a new powerStartDt
     *
     * @param \DateTime $powerStartDt
     * @return self
     */
    public function setPowerStartDt(\DateTime $powerStartDt)
    {
        $this->powerStartDt = $powerStartDt;
        return $this;
    }

    /**
     * Gets as powerEndDt
     *
     * @return \DateTime
     */
    public function getPowerEndDt()
    {
        return $this->powerEndDt;
    }

    /**
     * Sets a new powerEndDt
     *
     * @param \DateTime $powerEndDt
     * @return self
     */
    public function setPowerEndDt(\DateTime $powerEndDt)
    {
        $this->powerEndDt = $powerEndDt;
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
     * Gets as userLegal
     *
     * @return \mfteam\nbch\generated\models\UserLegalType
     */
    public function getUserLegal()
    {
        return $this->userLegal;
    }

    /**
     * Sets a new userLegal
     *
     * @param \mfteam\nbch\generated\models\UserLegalType $userLegal
     * @return self
     */
    public function setUserLegal(\mfteam\nbch\generated\models\UserLegalType $userLegal)
    {
        $this->userLegal = $userLegal;
        return $this;
    }

    /**
     * Gets as userEntrep
     *
     * @return \mfteam\nbch\generated\models\UserEntrepType
     */
    public function getUserEntrep()
    {
        return $this->userEntrep;
    }

    /**
     * Sets a new userEntrep
     *
     * @param \mfteam\nbch\generated\models\UserEntrepType $userEntrep
     * @return self
     */
    public function setUserEntrep(\mfteam\nbch\generated\models\UserEntrepType $userEntrep)
    {
        $this->userEntrep = $userEntrep;
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
     * Gets as fromRutdf
     *
     * @return bool
     */
    public function getFromRutdf()
    {
        return $this->fromRutdf;
    }

    /**
     * Sets a new fromRutdf
     *
     * @param bool $fromRutdf
     * @return self
     */
    public function setFromRutdf($fromRutdf)
    {
        $this->fromRutdf = $fromRutdf;
        return $this;
    }

    /**
     * Gets as abonentInn
     *
     * @return string
     */
    public function getAbonentInn()
    {
        return $this->abonentInn;
    }

    /**
     * Sets a new abonentInn
     *
     * @param string $abonentInn
     * @return self
     */
    public function setAbonentInn($abonentInn)
    {
        $this->abonentInn = $abonentInn;
        return $this;
    }

    /**
     * Gets as abonentOgrn
     *
     * @return string
     */
    public function getAbonentOgrn()
    {
        return $this->abonentOgrn;
    }

    /**
     * Sets a new abonentOgrn
     *
     * @param string $abonentOgrn
     * @return self
     */
    public function setAbonentOgrn($abonentOgrn)
    {
        $this->abonentOgrn = $abonentOgrn;
        return $this;
    }

    /**
     * Gets as abonentFullName
     *
     * @return string
     */
    public function getAbonentFullName()
    {
        return $this->abonentFullName;
    }

    /**
     * Sets a new abonentFullName
     *
     * @param string $abonentFullName
     * @return self
     */
    public function setAbonentFullName($abonentFullName)
    {
        $this->abonentFullName = $abonentFullName;
        return $this;
    }


}

