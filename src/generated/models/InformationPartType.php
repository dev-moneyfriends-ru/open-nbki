<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing InformationPartType
 *
 * 
 * XSD Type: InformationPart
 */
class InformationPartType
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
     * @var string $memberCode
     */
    private $memberCode = null;

    /**
     * @var string $applicationNumber
     */
    private $applicationNumber = null;

    /**
     * @var \DateTime $applicationDate
     */
    private $applicationDate = null;

    /**
     * @var string $creditorTypeCode
     */
    private $creditorTypeCode = null;

    /**
     * @var string $creditorTypeCodeText
     */
    private $creditorTypeCodeText = null;

    /**
     * @var string $flagIndicatorCode
     */
    private $flagIndicatorCode = null;

    /**
     * @var string $flagIndicatorCodeText
     */
    private $flagIndicatorCodeText = null;

    /**
     * @var string $requestedLoanTypeCode
     */
    private $requestedLoanTypeCode = null;

    /**
     * @var string $requestedLoanTypeCodeText
     */
    private $requestedLoanTypeCodeText = null;

    /**
     * @var string $applicationShipmentCode
     */
    private $applicationShipmentCode = null;

    /**
     * @var string $applicationShipmentCodeText
     */
    private $applicationShipmentCodeText = null;

    /**
     * @var string $approvalFlag
     */
    private $approvalFlag = null;

    /**
     * @var string $approvalFlagText
     */
    private $approvalFlagText = null;

    /**
     * @var \DateTime $approvalExpireDate
     */
    private $approvalExpireDate = null;

    /**
     * @var int $rejectedAmt
     */
    private $rejectedAmt = null;

    /**
     * @var string $rejectedAmtCurrencyCode
     */
    private $rejectedAmtCurrencyCode = null;

    /**
     * @var \DateTime $rejectedDate
     */
    private $rejectedDate = null;

    /**
     * @var string $rejectedReasonCode
     */
    private $rejectedReasonCode = null;

    /**
     * @var string $rejectedReasonCodeText
     */
    private $rejectedReasonCodeText = null;

    /**
     * @var string $agreementNumber
     */
    private $agreementNumber = null;

    /**
     * @var string $approvedLoanTypeCode
     */
    private $approvedLoanTypeCode = null;

    /**
     * @var string $approvedLoanTypeCodeText
     */
    private $approvedLoanTypeCodeText = null;

    /**
     * @var string $defaultFlag
     */
    private $defaultFlag = null;

    /**
     * @var string $defaultFlagText
     */
    private $defaultFlagText = null;

    /**
     * @var string $loanIndicator
     */
    private $loanIndicator = null;

    /**
     * @var string $cancelFlag
     */
    private $cancelFlag = null;

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
     * @var string $partnerRating
     */
    private $partnerRating = null;

    /**
     * @var \DateTime $partnerStartDate
     */
    private $partnerStartDate = null;

    /**
     * @var \DateTime $partnerRegDate
     */
    private $partnerRegDate = null;

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
     * Gets as applicationNumber
     *
     * @return string
     */
    public function getApplicationNumber()
    {
        return $this->applicationNumber;
    }

    /**
     * Sets a new applicationNumber
     *
     * @param string $applicationNumber
     * @return self
     */
    public function setApplicationNumber($applicationNumber)
    {
        $this->applicationNumber = $applicationNumber;
        return $this;
    }

    /**
     * Gets as applicationDate
     *
     * @return \DateTime
     */
    public function getApplicationDate()
    {
        return $this->applicationDate;
    }

    /**
     * Sets a new applicationDate
     *
     * @param \DateTime $applicationDate
     * @return self
     */
    public function setApplicationDate(\DateTime $applicationDate)
    {
        $this->applicationDate = $applicationDate;
        return $this;
    }

    /**
     * Gets as creditorTypeCode
     *
     * @return string
     */
    public function getCreditorTypeCode()
    {
        return $this->creditorTypeCode;
    }

    /**
     * Sets a new creditorTypeCode
     *
     * @param string $creditorTypeCode
     * @return self
     */
    public function setCreditorTypeCode($creditorTypeCode)
    {
        $this->creditorTypeCode = $creditorTypeCode;
        return $this;
    }

    /**
     * Gets as creditorTypeCodeText
     *
     * @return string
     */
    public function getCreditorTypeCodeText()
    {
        return $this->creditorTypeCodeText;
    }

    /**
     * Sets a new creditorTypeCodeText
     *
     * @param string $creditorTypeCodeText
     * @return self
     */
    public function setCreditorTypeCodeText($creditorTypeCodeText)
    {
        $this->creditorTypeCodeText = $creditorTypeCodeText;
        return $this;
    }

    /**
     * Gets as flagIndicatorCode
     *
     * @return string
     */
    public function getFlagIndicatorCode()
    {
        return $this->flagIndicatorCode;
    }

    /**
     * Sets a new flagIndicatorCode
     *
     * @param string $flagIndicatorCode
     * @return self
     */
    public function setFlagIndicatorCode($flagIndicatorCode)
    {
        $this->flagIndicatorCode = $flagIndicatorCode;
        return $this;
    }

    /**
     * Gets as flagIndicatorCodeText
     *
     * @return string
     */
    public function getFlagIndicatorCodeText()
    {
        return $this->flagIndicatorCodeText;
    }

    /**
     * Sets a new flagIndicatorCodeText
     *
     * @param string $flagIndicatorCodeText
     * @return self
     */
    public function setFlagIndicatorCodeText($flagIndicatorCodeText)
    {
        $this->flagIndicatorCodeText = $flagIndicatorCodeText;
        return $this;
    }

    /**
     * Gets as requestedLoanTypeCode
     *
     * @return string
     */
    public function getRequestedLoanTypeCode()
    {
        return $this->requestedLoanTypeCode;
    }

    /**
     * Sets a new requestedLoanTypeCode
     *
     * @param string $requestedLoanTypeCode
     * @return self
     */
    public function setRequestedLoanTypeCode($requestedLoanTypeCode)
    {
        $this->requestedLoanTypeCode = $requestedLoanTypeCode;
        return $this;
    }

    /**
     * Gets as requestedLoanTypeCodeText
     *
     * @return string
     */
    public function getRequestedLoanTypeCodeText()
    {
        return $this->requestedLoanTypeCodeText;
    }

    /**
     * Sets a new requestedLoanTypeCodeText
     *
     * @param string $requestedLoanTypeCodeText
     * @return self
     */
    public function setRequestedLoanTypeCodeText($requestedLoanTypeCodeText)
    {
        $this->requestedLoanTypeCodeText = $requestedLoanTypeCodeText;
        return $this;
    }

    /**
     * Gets as applicationShipmentCode
     *
     * @return string
     */
    public function getApplicationShipmentCode()
    {
        return $this->applicationShipmentCode;
    }

    /**
     * Sets a new applicationShipmentCode
     *
     * @param string $applicationShipmentCode
     * @return self
     */
    public function setApplicationShipmentCode($applicationShipmentCode)
    {
        $this->applicationShipmentCode = $applicationShipmentCode;
        return $this;
    }

    /**
     * Gets as applicationShipmentCodeText
     *
     * @return string
     */
    public function getApplicationShipmentCodeText()
    {
        return $this->applicationShipmentCodeText;
    }

    /**
     * Sets a new applicationShipmentCodeText
     *
     * @param string $applicationShipmentCodeText
     * @return self
     */
    public function setApplicationShipmentCodeText($applicationShipmentCodeText)
    {
        $this->applicationShipmentCodeText = $applicationShipmentCodeText;
        return $this;
    }

    /**
     * Gets as approvalFlag
     *
     * @return string
     */
    public function getApprovalFlag()
    {
        return $this->approvalFlag;
    }

    /**
     * Sets a new approvalFlag
     *
     * @param string $approvalFlag
     * @return self
     */
    public function setApprovalFlag($approvalFlag)
    {
        $this->approvalFlag = $approvalFlag;
        return $this;
    }

    /**
     * Gets as approvalFlagText
     *
     * @return string
     */
    public function getApprovalFlagText()
    {
        return $this->approvalFlagText;
    }

    /**
     * Sets a new approvalFlagText
     *
     * @param string $approvalFlagText
     * @return self
     */
    public function setApprovalFlagText($approvalFlagText)
    {
        $this->approvalFlagText = $approvalFlagText;
        return $this;
    }

    /**
     * Gets as approvalExpireDate
     *
     * @return \DateTime
     */
    public function getApprovalExpireDate()
    {
        return $this->approvalExpireDate;
    }

    /**
     * Sets a new approvalExpireDate
     *
     * @param \DateTime $approvalExpireDate
     * @return self
     */
    public function setApprovalExpireDate(\DateTime $approvalExpireDate)
    {
        $this->approvalExpireDate = $approvalExpireDate;
        return $this;
    }

    /**
     * Gets as rejectedAmt
     *
     * @return int
     */
    public function getRejectedAmt()
    {
        return $this->rejectedAmt;
    }

    /**
     * Sets a new rejectedAmt
     *
     * @param int $rejectedAmt
     * @return self
     */
    public function setRejectedAmt($rejectedAmt)
    {
        $this->rejectedAmt = $rejectedAmt;
        return $this;
    }

    /**
     * Gets as rejectedAmtCurrencyCode
     *
     * @return string
     */
    public function getRejectedAmtCurrencyCode()
    {
        return $this->rejectedAmtCurrencyCode;
    }

    /**
     * Sets a new rejectedAmtCurrencyCode
     *
     * @param string $rejectedAmtCurrencyCode
     * @return self
     */
    public function setRejectedAmtCurrencyCode($rejectedAmtCurrencyCode)
    {
        $this->rejectedAmtCurrencyCode = $rejectedAmtCurrencyCode;
        return $this;
    }

    /**
     * Gets as rejectedDate
     *
     * @return \DateTime
     */
    public function getRejectedDate()
    {
        return $this->rejectedDate;
    }

    /**
     * Sets a new rejectedDate
     *
     * @param \DateTime $rejectedDate
     * @return self
     */
    public function setRejectedDate(\DateTime $rejectedDate)
    {
        $this->rejectedDate = $rejectedDate;
        return $this;
    }

    /**
     * Gets as rejectedReasonCode
     *
     * @return string
     */
    public function getRejectedReasonCode()
    {
        return $this->rejectedReasonCode;
    }

    /**
     * Sets a new rejectedReasonCode
     *
     * @param string $rejectedReasonCode
     * @return self
     */
    public function setRejectedReasonCode($rejectedReasonCode)
    {
        $this->rejectedReasonCode = $rejectedReasonCode;
        return $this;
    }

    /**
     * Gets as rejectedReasonCodeText
     *
     * @return string
     */
    public function getRejectedReasonCodeText()
    {
        return $this->rejectedReasonCodeText;
    }

    /**
     * Sets a new rejectedReasonCodeText
     *
     * @param string $rejectedReasonCodeText
     * @return self
     */
    public function setRejectedReasonCodeText($rejectedReasonCodeText)
    {
        $this->rejectedReasonCodeText = $rejectedReasonCodeText;
        return $this;
    }

    /**
     * Gets as agreementNumber
     *
     * @return string
     */
    public function getAgreementNumber()
    {
        return $this->agreementNumber;
    }

    /**
     * Sets a new agreementNumber
     *
     * @param string $agreementNumber
     * @return self
     */
    public function setAgreementNumber($agreementNumber)
    {
        $this->agreementNumber = $agreementNumber;
        return $this;
    }

    /**
     * Gets as approvedLoanTypeCode
     *
     * @return string
     */
    public function getApprovedLoanTypeCode()
    {
        return $this->approvedLoanTypeCode;
    }

    /**
     * Sets a new approvedLoanTypeCode
     *
     * @param string $approvedLoanTypeCode
     * @return self
     */
    public function setApprovedLoanTypeCode($approvedLoanTypeCode)
    {
        $this->approvedLoanTypeCode = $approvedLoanTypeCode;
        return $this;
    }

    /**
     * Gets as approvedLoanTypeCodeText
     *
     * @return string
     */
    public function getApprovedLoanTypeCodeText()
    {
        return $this->approvedLoanTypeCodeText;
    }

    /**
     * Sets a new approvedLoanTypeCodeText
     *
     * @param string $approvedLoanTypeCodeText
     * @return self
     */
    public function setApprovedLoanTypeCodeText($approvedLoanTypeCodeText)
    {
        $this->approvedLoanTypeCodeText = $approvedLoanTypeCodeText;
        return $this;
    }

    /**
     * Gets as defaultFlag
     *
     * @return string
     */
    public function getDefaultFlag()
    {
        return $this->defaultFlag;
    }

    /**
     * Sets a new defaultFlag
     *
     * @param string $defaultFlag
     * @return self
     */
    public function setDefaultFlag($defaultFlag)
    {
        $this->defaultFlag = $defaultFlag;
        return $this;
    }

    /**
     * Gets as defaultFlagText
     *
     * @return string
     */
    public function getDefaultFlagText()
    {
        return $this->defaultFlagText;
    }

    /**
     * Sets a new defaultFlagText
     *
     * @param string $defaultFlagText
     * @return self
     */
    public function setDefaultFlagText($defaultFlagText)
    {
        $this->defaultFlagText = $defaultFlagText;
        return $this;
    }

    /**
     * Gets as loanIndicator
     *
     * @return string
     */
    public function getLoanIndicator()
    {
        return $this->loanIndicator;
    }

    /**
     * Sets a new loanIndicator
     *
     * @param string $loanIndicator
     * @return self
     */
    public function setLoanIndicator($loanIndicator)
    {
        $this->loanIndicator = $loanIndicator;
        return $this;
    }

    /**
     * Gets as cancelFlag
     *
     * @return string
     */
    public function getCancelFlag()
    {
        return $this->cancelFlag;
    }

    /**
     * Sets a new cancelFlag
     *
     * @param string $cancelFlag
     * @return self
     */
    public function setCancelFlag($cancelFlag)
    {
        $this->cancelFlag = $cancelFlag;
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
     * Gets as partnerRating
     *
     * @return string
     */
    public function getPartnerRating()
    {
        return $this->partnerRating;
    }

    /**
     * Sets a new partnerRating
     *
     * @param string $partnerRating
     * @return self
     */
    public function setPartnerRating($partnerRating)
    {
        $this->partnerRating = $partnerRating;
        return $this;
    }

    /**
     * Gets as partnerStartDate
     *
     * @return \DateTime
     */
    public function getPartnerStartDate()
    {
        return $this->partnerStartDate;
    }

    /**
     * Sets a new partnerStartDate
     *
     * @param \DateTime $partnerStartDate
     * @return self
     */
    public function setPartnerStartDate(\DateTime $partnerStartDate)
    {
        $this->partnerStartDate = $partnerStartDate;
        return $this;
    }

    /**
     * Gets as partnerRegDate
     *
     * @return \DateTime
     */
    public function getPartnerRegDate()
    {
        return $this->partnerRegDate;
    }

    /**
     * Sets a new partnerRegDate
     *
     * @param \DateTime $partnerRegDate
     * @return self
     */
    public function setPartnerRegDate(\DateTime $partnerRegDate)
    {
        $this->partnerRegDate = $partnerRegDate;
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

