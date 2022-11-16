<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing InformationPartRUTDFType
 *
 * 
 * XSD Type: InformationPartRUTDF
 */
class InformationPartRUTDFType
{

    /**
     * @var string $requestedFlagIndicatorCode
     */
    private $requestedFlagIndicatorCode = null;

    /**
     * @var string $requestedAmt
     */
    private $requestedAmt = null;

    /**
     * @var string $requestedCurrencyCode
     */
    private $requestedCurrencyCode = null;

    /**
     * @var string $applicationNumber
     */
    private $applicationNumber = null;

    /**
     * @var string $oldAppNum
     */
    private $oldAppNum = null;

    /**
     * @var \DateTime $applicationDate
     */
    private $applicationDate = null;

    /**
     * @var string $creditorTypeCode
     */
    private $creditorTypeCode = null;

    /**
     * @var string $applicationShipmentCode
     */
    private $applicationShipmentCode = null;

    /**
     * @var \DateTime $approvalExpireDate
     */
    private $approvalExpireDate = null;

    /**
     * @var int $flagIndicatorCode
     */
    private $flagIndicatorCode = null;

    /**
     * @var int $approvedLoanTypeCode
     */
    private $approvedLoanTypeCode = null;

    /**
     * @var string $agreementNumber
     */
    private $agreementNumber = null;

    /**
     * @var \DateTime $fundDt
     */
    private $fundDt = null;

    /**
     * @var int $defaultFlag
     */
    private $defaultFlag = null;

    /**
     * @var int $loanIndicator
     */
    private $loanIndicator = null;

    /**
     * @var \DateTime $rejectedDate
     */
    private $rejectedDate = null;

    /**
     * @var int[] $rejectedReasonCode
     */
    private $rejectedReasonCode = [
        
    ];

    /**
     * @var string $cancellationFlag
     */
    private $cancellationFlag = null;

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
     * Gets as requestedFlagIndicatorCode
     *
     * @return string
     */
    public function getRequestedFlagIndicatorCode()
    {
        return $this->requestedFlagIndicatorCode;
    }

    /**
     * Sets a new requestedFlagIndicatorCode
     *
     * @param string $requestedFlagIndicatorCode
     * @return self
     */
    public function setRequestedFlagIndicatorCode($requestedFlagIndicatorCode)
    {
        $this->requestedFlagIndicatorCode = $requestedFlagIndicatorCode;
        return $this;
    }

    /**
     * Gets as requestedAmt
     *
     * @return string
     */
    public function getRequestedAmt()
    {
        return $this->requestedAmt;
    }

    /**
     * Sets a new requestedAmt
     *
     * @param string $requestedAmt
     * @return self
     */
    public function setRequestedAmt($requestedAmt)
    {
        $this->requestedAmt = $requestedAmt;
        return $this;
    }

    /**
     * Gets as requestedCurrencyCode
     *
     * @return string
     */
    public function getRequestedCurrencyCode()
    {
        return $this->requestedCurrencyCode;
    }

    /**
     * Sets a new requestedCurrencyCode
     *
     * @param string $requestedCurrencyCode
     * @return self
     */
    public function setRequestedCurrencyCode($requestedCurrencyCode)
    {
        $this->requestedCurrencyCode = $requestedCurrencyCode;
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
     * Gets as oldAppNum
     *
     * @return string
     */
    public function getOldAppNum()
    {
        return $this->oldAppNum;
    }

    /**
     * Sets a new oldAppNum
     *
     * @param string $oldAppNum
     * @return self
     */
    public function setOldAppNum($oldAppNum)
    {
        $this->oldAppNum = $oldAppNum;
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
     * Gets as flagIndicatorCode
     *
     * @return int
     */
    public function getFlagIndicatorCode()
    {
        return $this->flagIndicatorCode;
    }

    /**
     * Sets a new flagIndicatorCode
     *
     * @param int $flagIndicatorCode
     * @return self
     */
    public function setFlagIndicatorCode($flagIndicatorCode)
    {
        $this->flagIndicatorCode = $flagIndicatorCode;
        return $this;
    }

    /**
     * Gets as approvedLoanTypeCode
     *
     * @return int
     */
    public function getApprovedLoanTypeCode()
    {
        return $this->approvedLoanTypeCode;
    }

    /**
     * Sets a new approvedLoanTypeCode
     *
     * @param int $approvedLoanTypeCode
     * @return self
     */
    public function setApprovedLoanTypeCode($approvedLoanTypeCode)
    {
        $this->approvedLoanTypeCode = $approvedLoanTypeCode;
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
     * Gets as fundDt
     *
     * @return \DateTime
     */
    public function getFundDt()
    {
        return $this->fundDt;
    }

    /**
     * Sets a new fundDt
     *
     * @param \DateTime $fundDt
     * @return self
     */
    public function setFundDt(\DateTime $fundDt)
    {
        $this->fundDt = $fundDt;
        return $this;
    }

    /**
     * Gets as defaultFlag
     *
     * @return int
     */
    public function getDefaultFlag()
    {
        return $this->defaultFlag;
    }

    /**
     * Sets a new defaultFlag
     *
     * @param int $defaultFlag
     * @return self
     */
    public function setDefaultFlag($defaultFlag)
    {
        $this->defaultFlag = $defaultFlag;
        return $this;
    }

    /**
     * Gets as loanIndicator
     *
     * @return int
     */
    public function getLoanIndicator()
    {
        return $this->loanIndicator;
    }

    /**
     * Sets a new loanIndicator
     *
     * @param int $loanIndicator
     * @return self
     */
    public function setLoanIndicator($loanIndicator)
    {
        $this->loanIndicator = $loanIndicator;
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
     * Adds as rejectedReasonCode
     *
     * @return self
     * @param int $rejectedReasonCode
     */
    public function addToRejectedReasonCode($rejectedReasonCode)
    {
        $this->rejectedReasonCode[] = $rejectedReasonCode;
        return $this;
    }

    /**
     * isset rejectedReasonCode
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectedReasonCode($index)
    {
        return isset($this->rejectedReasonCode[$index]);
    }

    /**
     * unset rejectedReasonCode
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectedReasonCode($index)
    {
        unset($this->rejectedReasonCode[$index]);
    }

    /**
     * Gets as rejectedReasonCode
     *
     * @return int[]
     */
    public function getRejectedReasonCode()
    {
        return $this->rejectedReasonCode;
    }

    /**
     * Sets a new rejectedReasonCode
     *
     * @param int[] $rejectedReasonCode
     * @return self
     */
    public function setRejectedReasonCode(array $rejectedReasonCode)
    {
        $this->rejectedReasonCode = $rejectedReasonCode;
        return $this;
    }

    /**
     * Gets as cancellationFlag
     *
     * @return string
     */
    public function getCancellationFlag()
    {
        return $this->cancellationFlag;
    }

    /**
     * Sets a new cancellationFlag
     *
     * @param string $cancellationFlag
     * @return self
     */
    public function setCancellationFlag($cancellationFlag)
    {
        $this->cancellationFlag = $cancellationFlag;
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


}

