<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing AccountType
 *
 * 
 * XSD Type: Account
 */
class AccountType
{

    /**
     * @var \mfteam\nbch\generated\models\HistoryType[] $historyReply
     */
    private $historyReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\PaymentPatternType[] $paymentPattern
     */
    private $paymentPattern = [
        
    ];

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
     * @var string $acctNum
     */
    private $acctNum = null;

    /**
     * @var string $srcCountryCode
     */
    private $srcCountryCode = null;

    /**
     * @var string $srcCountryCodeText
     */
    private $srcCountryCodeText = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var int $acctNumDisplay
     */
    private $acctNumDisplay = null;

    /**
     * @var string $ownerIndic
     */
    private $ownerIndic = null;

    /**
     * @var string $ownerIndicText
     */
    private $ownerIndicText = null;

    /**
     * @var string $consent
     */
    private $consent = null;

    /**
     * @var string $consentText
     */
    private $consentText = null;

    /**
     * @var \DateTime $openedDt
     */
    private $openedDt = null;

    /**
     * @var \DateTime $lastPaymtDt
     */
    private $lastPaymtDt = null;

    /**
     * @var \DateTime $completePerformDt
     */
    private $completePerformDt = null;

    /**
     * @var \DateTime $closedDt
     */
    private $closedDt = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

    /**
     * @var \DateTime $postedDt
     */
    private $postedDt = null;

    /**
     * @var string $acctType
     */
    private $acctType = null;

    /**
     * @var string $acctTypeText
     */
    private $acctTypeText = null;

    /**
     * @var string $acctStatus
     */
    private $acctStatus = null;

    /**
     * @var string $acctStatusText
     */
    private $acctStatusText = null;

    /**
     * @var string $loanCode
     */
    private $loanCode = null;

    /**
     * @var string $loanCodeText
     */
    private $loanCodeText = null;

    /**
     * @var string $paymtHistory1
     */
    private $paymtHistory1 = null;

    /**
     * @var string $paymtHistory2
     */
    private $paymtHistory2 = null;

    /**
     * @var \DateTime $paymtHistoryStartDt
     */
    private $paymtHistoryStartDt = null;

    /**
     * @var \DateTime $paymtHistoryEndDt
     */
    private $paymtHistoryEndDt = null;

    /**
     * @var string $loanObjectiveText
     */
    private $loanObjectiveText = null;

    /**
     * @var string $collateralCode
     */
    private $collateralCode = null;

    /**
     * @var string $collateralValue
     */
    private $collateralValue = null;

    /**
     * @var \DateTime $collateralDate
     */
    private $collateralDate = null;

    /**
     * @var \DateTime $collateralExpirationDate
     */
    private $collateralExpirationDate = null;

    /**
     * @var string $collateral1Text
     */
    private $collateral1Text = null;

    /**
     * @var string $collateral2Text
     */
    private $collateral2Text = null;

    /**
     * @var string $collateral3Text
     */
    private $collateral3Text = null;

    /**
     * @var \mfteam\nbch\generated\models\CollateralType[] $collateral
     */
    private $collateral = [
        
    ];

    /**
     * @var \DateTime $lastDebtRestructureDt
     */
    private $lastDebtRestructureDt = null;

    /**
     * @var int $percentPayment
     */
    private $percentPayment = null;

    /**
     * @var string $creditCardTypeCode
     */
    private $creditCardTypeCode = null;

    /**
     * @var string $creditCardTypeCodeText
     */
    private $creditCardTypeCodeText = null;

    /**
     * @var int $numCoborrowers
     */
    private $numCoborrowers = null;

    /**
     * @var string $unitMakeText
     */
    private $unitMakeText = null;

    /**
     * @var string $unitModelText
     */
    private $unitModelText = null;

    /**
     * @var string $creditTypeFlagCode
     */
    private $creditTypeFlagCode = null;

    /**
     * @var string $narrativeCode1
     */
    private $narrativeCode1 = null;

    /**
     * @var string $narrativeCode2
     */
    private $narrativeCode2 = null;

    /**
     * @var string $narrativeCode1Text
     */
    private $narrativeCode1Text = null;

    /**
     * @var string $narrativeCode2Text
     */
    private $narrativeCode2Text = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var int $highCreditAmt
     */
    private $highCreditAmt = null;

    /**
     * @var int $creditLimit
     */
    private $creditLimit = null;

    /**
     * @var int $curBalanceAmt
     */
    private $curBalanceAmt = null;

    /**
     * @var int $amtPastDue
     */
    private $amtPastDue = null;

    /**
     * @var int $termsNumPaymts
     */
    private $termsNumPaymts = null;

    /**
     * @var string $termsFrequency
     */
    private $termsFrequency = null;

    /**
     * @var string $guarantorIndicatorCode
     */
    private $guarantorIndicatorCode = null;

    /**
     * @var string $guarantorIndicatorCodeText
     */
    private $guarantorIndicatorCodeText = null;

    /**
     * @var string $guaranteeVolumeCode
     */
    private $guaranteeVolumeCode = null;

    /**
     * @var string $guaranteeVolumeCodeText
     */
    private $guaranteeVolumeCodeText = null;

    /**
     * @var int $guaranteeAmt
     */
    private $guaranteeAmt = null;

    /**
     * @var \DateTime $guaranteeTerm
     */
    private $guaranteeTerm = null;

    /**
     * @var \mfteam\nbch\generated\models\GuarantorType[] $guarantor
     */
    private $guarantor = [
        
    ];

    /**
     * @var string $bankGuaranteeIndicatorCode
     */
    private $bankGuaranteeIndicatorCode = null;

    /**
     * @var string $bankGuaranteeIndicatorCodeText
     */
    private $bankGuaranteeIndicatorCodeText = null;

    /**
     * @var string $bankGuaranteeVolumeCode
     */
    private $bankGuaranteeVolumeCode = null;

    /**
     * @var string $bankGuaranteeVolumeCodeText
     */
    private $bankGuaranteeVolumeCodeText = null;

    /**
     * @var int $bankGuaranteeAmt
     */
    private $bankGuaranteeAmt = null;

    /**
     * @var \DateTime $bankGuaranteeTerm
     */
    private $bankGuaranteeTerm = null;

    /**
     * @var \mfteam\nbch\generated\models\BankGuaranteeType[] $bankGuarantee
     */
    private $bankGuarantee = [
        
    ];

    /**
     * @var string $rightOfClaimName
     */
    private $rightOfClaimName = null;

    /**
     * @var string $rightOfClaimID
     */
    private $rightOfClaimID = null;

    /**
     * @var string $rightOfClaimINN
     */
    private $rightOfClaimINN = null;

    /**
     * @var string $rightOfClaimSNILS
     */
    private $rightOfClaimSNILS = null;

    /**
     * @var string $creditTotalAmt
     */
    private $creditTotalAmt = null;

    /**
     * @var int $termsAmt
     */
    private $termsAmt = null;

    /**
     * @var int $baloonPaymtAmt
     */
    private $baloonPaymtAmt = null;

    /**
     * @var \DateTime $baloonPaymtDt
     */
    private $baloonPaymtDt = null;

    /**
     * @var \DateTime $lastPurchasedDt
     */
    private $lastPurchasedDt = null;

    /**
     * @var int $amtOutstanding
     */
    private $amtOutstanding = null;

    /**
     * @var \DateTime $firstDelqDt
     */
    private $firstDelqDt = null;

    /**
     * @var \DateTime $maxDelqDt
     */
    private $maxDelqDt = null;

    /**
     * @var int $maxDelq
     */
    private $maxDelq = null;

    /**
     * @var \DateTime $maxDelqAmtDt
     */
    private $maxDelqAmtDt = null;

    /**
     * @var int $maxDelqAmt
     */
    private $maxDelqAmt = null;

    /**
     * @var int $monthsReviewed
     */
    private $monthsReviewed = null;

    /**
     * @var int $numDays30
     */
    private $numDays30 = null;

    /**
     * @var int $numDays60
     */
    private $numDays60 = null;

    /**
     * @var int $numDays90
     */
    private $numDays90 = null;

    /**
     * @var int $numDays120
     */
    private $numDays120 = null;

    /**
     * @var string $paymtPat
     */
    private $paymtPat = null;

    /**
     * @var string $mOP
     */
    private $mOP = null;

    /**
     * @var string $mOPText
     */
    private $mOPText = null;

    /**
     * @var int $mOPMaxValue
     */
    private $mOPMaxValue = null;

    /**
     * @var string $mOPMaxValueText
     */
    private $mOPMaxValueText = null;

    /**
     * @var \DateTime $paymtPatStartDt
     */
    private $paymtPatStartDt = null;

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
     * @var string $paymtFreqText
     */
    private $paymtFreqText = null;

    /**
     * @var string $creditAgreementNum
     */
    private $creditAgreementNum = null;

    /**
     * @var string $accountRelationship
     */
    private $accountRelationship = null;

    /**
     * @var string $accountRelationshipText
     */
    private $accountRelationshipText = null;

    /**
     * @var string $accountRating
     */
    private $accountRating = null;

    /**
     * @var string $accountRatingText
     */
    private $accountRatingText = null;

    /**
     * @var \DateTime $accountRatingDate
     */
    private $accountRatingDate = null;

    /**
     * @var \DateTime $contractTerminationDate
     */
    private $contractTerminationDate = null;

    /**
     * @var \DateTime $paymentDueDate
     */
    private $paymentDueDate = null;

    /**
     * @var string $oldMemeberCode
     */
    private $oldMemeberCode = null;

    /**
     * @var string $oldCreditAgreementNumber
     */
    private $oldCreditAgreementNumber = null;

    /**
     * @var \DateTime $interestPaymentDueDate
     */
    private $interestPaymentDueDate = null;

    /**
     * @var string $interestPaymentFrequencyCode
     */
    private $interestPaymentFrequencyCode = null;

    /**
     * @var string $interestPaymentFrequencyText
     */
    private $interestPaymentFrequencyText = null;

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
     * @var string $disputedStatus
     */
    private $disputedStatus = null;

    /**
     * @var string $disputedStatusText
     */
    private $disputedStatusText = null;

    /**
     * @var int $principalOutstanding
     */
    private $principalOutstanding = null;

    /**
     * @var int $intOutstanding
     */
    private $intOutstanding = null;

    /**
     * @var int $otherAmtOutstanding
     */
    private $otherAmtOutstanding = null;

    /**
     * @var int $principalPastDue
     */
    private $principalPastDue = null;

    /**
     * @var int $intPastDue
     */
    private $intPastDue = null;

    /**
     * @var int $otherAmtPastDue
     */
    private $otherAmtPastDue = null;

    /**
     * @var \DateTime $graceEndDt
     */
    private $graceEndDt = null;

    /**
     * @var int $gracePeriodReason
     */
    private $gracePeriodReason = null;

    /**
     * @var \DateTime $gracePeriodDeclinedDt
     */
    private $gracePeriodDeclinedDt = null;

    /**
     * @var string $creditTotalMonetaryAmt
     */
    private $creditTotalMonetaryAmt = null;

    /**
     * @var string $uuid
     */
    private $uuid = null;

    /**
     * @var \mfteam\nbch\generated\models\AmendmentType[] $amendment
     */
    private $amendment = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\PaymentType[] $payment
     */
    private $payment = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\HistoryInternalType[] $historyInternal
     */
    private $historyInternal = [
        
    ];

    /**
     * Adds as historyReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\HistoryType $historyReply
     */
    public function addToHistoryReply(\mfteam\nbch\generated\models\HistoryType $historyReply)
    {
        $this->historyReply[] = $historyReply;
        return $this;
    }

    /**
     * isset historyReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHistoryReply($index)
    {
        return isset($this->historyReply[$index]);
    }

    /**
     * unset historyReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHistoryReply($index)
    {
        unset($this->historyReply[$index]);
    }

    /**
     * Gets as historyReply
     *
     * @return \mfteam\nbch\generated\models\HistoryType[]
     */
    public function getHistoryReply()
    {
        return $this->historyReply;
    }

    /**
     * Sets a new historyReply
     *
     * @param \mfteam\nbch\generated\models\HistoryType[] $historyReply
     * @return self
     */
    public function setHistoryReply(array $historyReply)
    {
        $this->historyReply = $historyReply;
        return $this;
    }

    /**
     * Adds as paymentPattern
     *
     * @return self
     * @param \mfteam\nbch\generated\models\PaymentPatternType $paymentPattern
     */
    public function addToPaymentPattern(\mfteam\nbch\generated\models\PaymentPatternType $paymentPattern)
    {
        $this->paymentPattern[] = $paymentPattern;
        return $this;
    }

    /**
     * isset paymentPattern
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentPattern($index)
    {
        return isset($this->paymentPattern[$index]);
    }

    /**
     * unset paymentPattern
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentPattern($index)
    {
        unset($this->paymentPattern[$index]);
    }

    /**
     * Gets as paymentPattern
     *
     * @return \mfteam\nbch\generated\models\PaymentPatternType[]
     */
    public function getPaymentPattern()
    {
        return $this->paymentPattern;
    }

    /**
     * Sets a new paymentPattern
     *
     * @param \mfteam\nbch\generated\models\PaymentPatternType[] $paymentPattern
     * @return self
     */
    public function setPaymentPattern(array $paymentPattern)
    {
        $this->paymentPattern = $paymentPattern;
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
     * Gets as acctNum
     *
     * @return string
     */
    public function getAcctNum()
    {
        return $this->acctNum;
    }

    /**
     * Sets a new acctNum
     *
     * @param string $acctNum
     * @return self
     */
    public function setAcctNum($acctNum)
    {
        $this->acctNum = $acctNum;
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
     * Gets as acctNumDisplay
     *
     * @return int
     */
    public function getAcctNumDisplay()
    {
        return $this->acctNumDisplay;
    }

    /**
     * Sets a new acctNumDisplay
     *
     * @param int $acctNumDisplay
     * @return self
     */
    public function setAcctNumDisplay($acctNumDisplay)
    {
        $this->acctNumDisplay = $acctNumDisplay;
        return $this;
    }

    /**
     * Gets as ownerIndic
     *
     * @return string
     */
    public function getOwnerIndic()
    {
        return $this->ownerIndic;
    }

    /**
     * Sets a new ownerIndic
     *
     * @param string $ownerIndic
     * @return self
     */
    public function setOwnerIndic($ownerIndic)
    {
        $this->ownerIndic = $ownerIndic;
        return $this;
    }

    /**
     * Gets as ownerIndicText
     *
     * @return string
     */
    public function getOwnerIndicText()
    {
        return $this->ownerIndicText;
    }

    /**
     * Sets a new ownerIndicText
     *
     * @param string $ownerIndicText
     * @return self
     */
    public function setOwnerIndicText($ownerIndicText)
    {
        $this->ownerIndicText = $ownerIndicText;
        return $this;
    }

    /**
     * Gets as consent
     *
     * @return string
     */
    public function getConsent()
    {
        return $this->consent;
    }

    /**
     * Sets a new consent
     *
     * @param string $consent
     * @return self
     */
    public function setConsent($consent)
    {
        $this->consent = $consent;
        return $this;
    }

    /**
     * Gets as consentText
     *
     * @return string
     */
    public function getConsentText()
    {
        return $this->consentText;
    }

    /**
     * Sets a new consentText
     *
     * @param string $consentText
     * @return self
     */
    public function setConsentText($consentText)
    {
        $this->consentText = $consentText;
        return $this;
    }

    /**
     * Gets as openedDt
     *
     * @return \DateTime
     */
    public function getOpenedDt()
    {
        return $this->openedDt;
    }

    /**
     * Sets a new openedDt
     *
     * @param \DateTime $openedDt
     * @return self
     */
    public function setOpenedDt(\DateTime $openedDt)
    {
        $this->openedDt = $openedDt;
        return $this;
    }

    /**
     * Gets as lastPaymtDt
     *
     * @return \DateTime
     */
    public function getLastPaymtDt()
    {
        return $this->lastPaymtDt;
    }

    /**
     * Sets a new lastPaymtDt
     *
     * @param \DateTime $lastPaymtDt
     * @return self
     */
    public function setLastPaymtDt(\DateTime $lastPaymtDt)
    {
        $this->lastPaymtDt = $lastPaymtDt;
        return $this;
    }

    /**
     * Gets as completePerformDt
     *
     * @return \DateTime
     */
    public function getCompletePerformDt()
    {
        return $this->completePerformDt;
    }

    /**
     * Sets a new completePerformDt
     *
     * @param \DateTime $completePerformDt
     * @return self
     */
    public function setCompletePerformDt(\DateTime $completePerformDt)
    {
        $this->completePerformDt = $completePerformDt;
        return $this;
    }

    /**
     * Gets as closedDt
     *
     * @return \DateTime
     */
    public function getClosedDt()
    {
        return $this->closedDt;
    }

    /**
     * Sets a new closedDt
     *
     * @param \DateTime $closedDt
     * @return self
     */
    public function setClosedDt(\DateTime $closedDt)
    {
        $this->closedDt = $closedDt;
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
     * Gets as postedDt
     *
     * @return \DateTime
     */
    public function getPostedDt()
    {
        return $this->postedDt;
    }

    /**
     * Sets a new postedDt
     *
     * @param \DateTime $postedDt
     * @return self
     */
    public function setPostedDt(\DateTime $postedDt)
    {
        $this->postedDt = $postedDt;
        return $this;
    }

    /**
     * Gets as acctType
     *
     * @return string
     */
    public function getAcctType()
    {
        return $this->acctType;
    }

    /**
     * Sets a new acctType
     *
     * @param string $acctType
     * @return self
     */
    public function setAcctType($acctType)
    {
        $this->acctType = $acctType;
        return $this;
    }

    /**
     * Gets as acctTypeText
     *
     * @return string
     */
    public function getAcctTypeText()
    {
        return $this->acctTypeText;
    }

    /**
     * Sets a new acctTypeText
     *
     * @param string $acctTypeText
     * @return self
     */
    public function setAcctTypeText($acctTypeText)
    {
        $this->acctTypeText = $acctTypeText;
        return $this;
    }

    /**
     * Gets as acctStatus
     *
     * @return string
     */
    public function getAcctStatus()
    {
        return $this->acctStatus;
    }

    /**
     * Sets a new acctStatus
     *
     * @param string $acctStatus
     * @return self
     */
    public function setAcctStatus($acctStatus)
    {
        $this->acctStatus = $acctStatus;
        return $this;
    }

    /**
     * Gets as acctStatusText
     *
     * @return string
     */
    public function getAcctStatusText()
    {
        return $this->acctStatusText;
    }

    /**
     * Sets a new acctStatusText
     *
     * @param string $acctStatusText
     * @return self
     */
    public function setAcctStatusText($acctStatusText)
    {
        $this->acctStatusText = $acctStatusText;
        return $this;
    }

    /**
     * Gets as loanCode
     *
     * @return string
     */
    public function getLoanCode()
    {
        return $this->loanCode;
    }

    /**
     * Sets a new loanCode
     *
     * @param string $loanCode
     * @return self
     */
    public function setLoanCode($loanCode)
    {
        $this->loanCode = $loanCode;
        return $this;
    }

    /**
     * Gets as loanCodeText
     *
     * @return string
     */
    public function getLoanCodeText()
    {
        return $this->loanCodeText;
    }

    /**
     * Sets a new loanCodeText
     *
     * @param string $loanCodeText
     * @return self
     */
    public function setLoanCodeText($loanCodeText)
    {
        $this->loanCodeText = $loanCodeText;
        return $this;
    }

    /**
     * Gets as paymtHistory1
     *
     * @return string
     */
    public function getPaymtHistory1()
    {
        return $this->paymtHistory1;
    }

    /**
     * Sets a new paymtHistory1
     *
     * @param string $paymtHistory1
     * @return self
     */
    public function setPaymtHistory1($paymtHistory1)
    {
        $this->paymtHistory1 = $paymtHistory1;
        return $this;
    }

    /**
     * Gets as paymtHistory2
     *
     * @return string
     */
    public function getPaymtHistory2()
    {
        return $this->paymtHistory2;
    }

    /**
     * Sets a new paymtHistory2
     *
     * @param string $paymtHistory2
     * @return self
     */
    public function setPaymtHistory2($paymtHistory2)
    {
        $this->paymtHistory2 = $paymtHistory2;
        return $this;
    }

    /**
     * Gets as paymtHistoryStartDt
     *
     * @return \DateTime
     */
    public function getPaymtHistoryStartDt()
    {
        return $this->paymtHistoryStartDt;
    }

    /**
     * Sets a new paymtHistoryStartDt
     *
     * @param \DateTime $paymtHistoryStartDt
     * @return self
     */
    public function setPaymtHistoryStartDt(\DateTime $paymtHistoryStartDt)
    {
        $this->paymtHistoryStartDt = $paymtHistoryStartDt;
        return $this;
    }

    /**
     * Gets as paymtHistoryEndDt
     *
     * @return \DateTime
     */
    public function getPaymtHistoryEndDt()
    {
        return $this->paymtHistoryEndDt;
    }

    /**
     * Sets a new paymtHistoryEndDt
     *
     * @param \DateTime $paymtHistoryEndDt
     * @return self
     */
    public function setPaymtHistoryEndDt(\DateTime $paymtHistoryEndDt)
    {
        $this->paymtHistoryEndDt = $paymtHistoryEndDt;
        return $this;
    }

    /**
     * Gets as loanObjectiveText
     *
     * @return string
     */
    public function getLoanObjectiveText()
    {
        return $this->loanObjectiveText;
    }

    /**
     * Sets a new loanObjectiveText
     *
     * @param string $loanObjectiveText
     * @return self
     */
    public function setLoanObjectiveText($loanObjectiveText)
    {
        $this->loanObjectiveText = $loanObjectiveText;
        return $this;
    }

    /**
     * Gets as collateralCode
     *
     * @return string
     */
    public function getCollateralCode()
    {
        return $this->collateralCode;
    }

    /**
     * Sets a new collateralCode
     *
     * @param string $collateralCode
     * @return self
     */
    public function setCollateralCode($collateralCode)
    {
        $this->collateralCode = $collateralCode;
        return $this;
    }

    /**
     * Gets as collateralValue
     *
     * @return string
     */
    public function getCollateralValue()
    {
        return $this->collateralValue;
    }

    /**
     * Sets a new collateralValue
     *
     * @param string $collateralValue
     * @return self
     */
    public function setCollateralValue($collateralValue)
    {
        $this->collateralValue = $collateralValue;
        return $this;
    }

    /**
     * Gets as collateralDate
     *
     * @return \DateTime
     */
    public function getCollateralDate()
    {
        return $this->collateralDate;
    }

    /**
     * Sets a new collateralDate
     *
     * @param \DateTime $collateralDate
     * @return self
     */
    public function setCollateralDate(\DateTime $collateralDate)
    {
        $this->collateralDate = $collateralDate;
        return $this;
    }

    /**
     * Gets as collateralExpirationDate
     *
     * @return \DateTime
     */
    public function getCollateralExpirationDate()
    {
        return $this->collateralExpirationDate;
    }

    /**
     * Sets a new collateralExpirationDate
     *
     * @param \DateTime $collateralExpirationDate
     * @return self
     */
    public function setCollateralExpirationDate(\DateTime $collateralExpirationDate)
    {
        $this->collateralExpirationDate = $collateralExpirationDate;
        return $this;
    }

    /**
     * Gets as collateral1Text
     *
     * @return string
     */
    public function getCollateral1Text()
    {
        return $this->collateral1Text;
    }

    /**
     * Sets a new collateral1Text
     *
     * @param string $collateral1Text
     * @return self
     */
    public function setCollateral1Text($collateral1Text)
    {
        $this->collateral1Text = $collateral1Text;
        return $this;
    }

    /**
     * Gets as collateral2Text
     *
     * @return string
     */
    public function getCollateral2Text()
    {
        return $this->collateral2Text;
    }

    /**
     * Sets a new collateral2Text
     *
     * @param string $collateral2Text
     * @return self
     */
    public function setCollateral2Text($collateral2Text)
    {
        $this->collateral2Text = $collateral2Text;
        return $this;
    }

    /**
     * Gets as collateral3Text
     *
     * @return string
     */
    public function getCollateral3Text()
    {
        return $this->collateral3Text;
    }

    /**
     * Sets a new collateral3Text
     *
     * @param string $collateral3Text
     * @return self
     */
    public function setCollateral3Text($collateral3Text)
    {
        $this->collateral3Text = $collateral3Text;
        return $this;
    }

    /**
     * Adds as collateral
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CollateralType $collateral
     */
    public function addToCollateral(\mfteam\nbch\generated\models\CollateralType $collateral)
    {
        $this->collateral[] = $collateral;
        return $this;
    }

    /**
     * isset collateral
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollateral($index)
    {
        return isset($this->collateral[$index]);
    }

    /**
     * unset collateral
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollateral($index)
    {
        unset($this->collateral[$index]);
    }

    /**
     * Gets as collateral
     *
     * @return \mfteam\nbch\generated\models\CollateralType[]
     */
    public function getCollateral()
    {
        return $this->collateral;
    }

    /**
     * Sets a new collateral
     *
     * @param \mfteam\nbch\generated\models\CollateralType[] $collateral
     * @return self
     */
    public function setCollateral(array $collateral)
    {
        $this->collateral = $collateral;
        return $this;
    }

    /**
     * Gets as lastDebtRestructureDt
     *
     * @return \DateTime
     */
    public function getLastDebtRestructureDt()
    {
        return $this->lastDebtRestructureDt;
    }

    /**
     * Sets a new lastDebtRestructureDt
     *
     * @param \DateTime $lastDebtRestructureDt
     * @return self
     */
    public function setLastDebtRestructureDt(\DateTime $lastDebtRestructureDt)
    {
        $this->lastDebtRestructureDt = $lastDebtRestructureDt;
        return $this;
    }

    /**
     * Gets as percentPayment
     *
     * @return int
     */
    public function getPercentPayment()
    {
        return $this->percentPayment;
    }

    /**
     * Sets a new percentPayment
     *
     * @param int $percentPayment
     * @return self
     */
    public function setPercentPayment($percentPayment)
    {
        $this->percentPayment = $percentPayment;
        return $this;
    }

    /**
     * Gets as creditCardTypeCode
     *
     * @return string
     */
    public function getCreditCardTypeCode()
    {
        return $this->creditCardTypeCode;
    }

    /**
     * Sets a new creditCardTypeCode
     *
     * @param string $creditCardTypeCode
     * @return self
     */
    public function setCreditCardTypeCode($creditCardTypeCode)
    {
        $this->creditCardTypeCode = $creditCardTypeCode;
        return $this;
    }

    /**
     * Gets as creditCardTypeCodeText
     *
     * @return string
     */
    public function getCreditCardTypeCodeText()
    {
        return $this->creditCardTypeCodeText;
    }

    /**
     * Sets a new creditCardTypeCodeText
     *
     * @param string $creditCardTypeCodeText
     * @return self
     */
    public function setCreditCardTypeCodeText($creditCardTypeCodeText)
    {
        $this->creditCardTypeCodeText = $creditCardTypeCodeText;
        return $this;
    }

    /**
     * Gets as numCoborrowers
     *
     * @return int
     */
    public function getNumCoborrowers()
    {
        return $this->numCoborrowers;
    }

    /**
     * Sets a new numCoborrowers
     *
     * @param int $numCoborrowers
     * @return self
     */
    public function setNumCoborrowers($numCoborrowers)
    {
        $this->numCoborrowers = $numCoborrowers;
        return $this;
    }

    /**
     * Gets as unitMakeText
     *
     * @return string
     */
    public function getUnitMakeText()
    {
        return $this->unitMakeText;
    }

    /**
     * Sets a new unitMakeText
     *
     * @param string $unitMakeText
     * @return self
     */
    public function setUnitMakeText($unitMakeText)
    {
        $this->unitMakeText = $unitMakeText;
        return $this;
    }

    /**
     * Gets as unitModelText
     *
     * @return string
     */
    public function getUnitModelText()
    {
        return $this->unitModelText;
    }

    /**
     * Sets a new unitModelText
     *
     * @param string $unitModelText
     * @return self
     */
    public function setUnitModelText($unitModelText)
    {
        $this->unitModelText = $unitModelText;
        return $this;
    }

    /**
     * Gets as creditTypeFlagCode
     *
     * @return string
     */
    public function getCreditTypeFlagCode()
    {
        return $this->creditTypeFlagCode;
    }

    /**
     * Sets a new creditTypeFlagCode
     *
     * @param string $creditTypeFlagCode
     * @return self
     */
    public function setCreditTypeFlagCode($creditTypeFlagCode)
    {
        $this->creditTypeFlagCode = $creditTypeFlagCode;
        return $this;
    }

    /**
     * Gets as narrativeCode1
     *
     * @return string
     */
    public function getNarrativeCode1()
    {
        return $this->narrativeCode1;
    }

    /**
     * Sets a new narrativeCode1
     *
     * @param string $narrativeCode1
     * @return self
     */
    public function setNarrativeCode1($narrativeCode1)
    {
        $this->narrativeCode1 = $narrativeCode1;
        return $this;
    }

    /**
     * Gets as narrativeCode2
     *
     * @return string
     */
    public function getNarrativeCode2()
    {
        return $this->narrativeCode2;
    }

    /**
     * Sets a new narrativeCode2
     *
     * @param string $narrativeCode2
     * @return self
     */
    public function setNarrativeCode2($narrativeCode2)
    {
        $this->narrativeCode2 = $narrativeCode2;
        return $this;
    }

    /**
     * Gets as narrativeCode1Text
     *
     * @return string
     */
    public function getNarrativeCode1Text()
    {
        return $this->narrativeCode1Text;
    }

    /**
     * Sets a new narrativeCode1Text
     *
     * @param string $narrativeCode1Text
     * @return self
     */
    public function setNarrativeCode1Text($narrativeCode1Text)
    {
        $this->narrativeCode1Text = $narrativeCode1Text;
        return $this;
    }

    /**
     * Gets as narrativeCode2Text
     *
     * @return string
     */
    public function getNarrativeCode2Text()
    {
        return $this->narrativeCode2Text;
    }

    /**
     * Sets a new narrativeCode2Text
     *
     * @param string $narrativeCode2Text
     * @return self
     */
    public function setNarrativeCode2Text($narrativeCode2Text)
    {
        $this->narrativeCode2Text = $narrativeCode2Text;
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
     * Gets as highCreditAmt
     *
     * @return int
     */
    public function getHighCreditAmt()
    {
        return $this->highCreditAmt;
    }

    /**
     * Sets a new highCreditAmt
     *
     * @param int $highCreditAmt
     * @return self
     */
    public function setHighCreditAmt($highCreditAmt)
    {
        $this->highCreditAmt = $highCreditAmt;
        return $this;
    }

    /**
     * Gets as creditLimit
     *
     * @return int
     */
    public function getCreditLimit()
    {
        return $this->creditLimit;
    }

    /**
     * Sets a new creditLimit
     *
     * @param int $creditLimit
     * @return self
     */
    public function setCreditLimit($creditLimit)
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * Gets as curBalanceAmt
     *
     * @return int
     */
    public function getCurBalanceAmt()
    {
        return $this->curBalanceAmt;
    }

    /**
     * Sets a new curBalanceAmt
     *
     * @param int $curBalanceAmt
     * @return self
     */
    public function setCurBalanceAmt($curBalanceAmt)
    {
        $this->curBalanceAmt = $curBalanceAmt;
        return $this;
    }

    /**
     * Gets as amtPastDue
     *
     * @return int
     */
    public function getAmtPastDue()
    {
        return $this->amtPastDue;
    }

    /**
     * Sets a new amtPastDue
     *
     * @param int $amtPastDue
     * @return self
     */
    public function setAmtPastDue($amtPastDue)
    {
        $this->amtPastDue = $amtPastDue;
        return $this;
    }

    /**
     * Gets as termsNumPaymts
     *
     * @return int
     */
    public function getTermsNumPaymts()
    {
        return $this->termsNumPaymts;
    }

    /**
     * Sets a new termsNumPaymts
     *
     * @param int $termsNumPaymts
     * @return self
     */
    public function setTermsNumPaymts($termsNumPaymts)
    {
        $this->termsNumPaymts = $termsNumPaymts;
        return $this;
    }

    /**
     * Gets as termsFrequency
     *
     * @return string
     */
    public function getTermsFrequency()
    {
        return $this->termsFrequency;
    }

    /**
     * Sets a new termsFrequency
     *
     * @param string $termsFrequency
     * @return self
     */
    public function setTermsFrequency($termsFrequency)
    {
        $this->termsFrequency = $termsFrequency;
        return $this;
    }

    /**
     * Gets as guarantorIndicatorCode
     *
     * @return string
     */
    public function getGuarantorIndicatorCode()
    {
        return $this->guarantorIndicatorCode;
    }

    /**
     * Sets a new guarantorIndicatorCode
     *
     * @param string $guarantorIndicatorCode
     * @return self
     */
    public function setGuarantorIndicatorCode($guarantorIndicatorCode)
    {
        $this->guarantorIndicatorCode = $guarantorIndicatorCode;
        return $this;
    }

    /**
     * Gets as guarantorIndicatorCodeText
     *
     * @return string
     */
    public function getGuarantorIndicatorCodeText()
    {
        return $this->guarantorIndicatorCodeText;
    }

    /**
     * Sets a new guarantorIndicatorCodeText
     *
     * @param string $guarantorIndicatorCodeText
     * @return self
     */
    public function setGuarantorIndicatorCodeText($guarantorIndicatorCodeText)
    {
        $this->guarantorIndicatorCodeText = $guarantorIndicatorCodeText;
        return $this;
    }

    /**
     * Gets as guaranteeVolumeCode
     *
     * @return string
     */
    public function getGuaranteeVolumeCode()
    {
        return $this->guaranteeVolumeCode;
    }

    /**
     * Sets a new guaranteeVolumeCode
     *
     * @param string $guaranteeVolumeCode
     * @return self
     */
    public function setGuaranteeVolumeCode($guaranteeVolumeCode)
    {
        $this->guaranteeVolumeCode = $guaranteeVolumeCode;
        return $this;
    }

    /**
     * Gets as guaranteeVolumeCodeText
     *
     * @return string
     */
    public function getGuaranteeVolumeCodeText()
    {
        return $this->guaranteeVolumeCodeText;
    }

    /**
     * Sets a new guaranteeVolumeCodeText
     *
     * @param string $guaranteeVolumeCodeText
     * @return self
     */
    public function setGuaranteeVolumeCodeText($guaranteeVolumeCodeText)
    {
        $this->guaranteeVolumeCodeText = $guaranteeVolumeCodeText;
        return $this;
    }

    /**
     * Gets as guaranteeAmt
     *
     * @return int
     */
    public function getGuaranteeAmt()
    {
        return $this->guaranteeAmt;
    }

    /**
     * Sets a new guaranteeAmt
     *
     * @param int $guaranteeAmt
     * @return self
     */
    public function setGuaranteeAmt($guaranteeAmt)
    {
        $this->guaranteeAmt = $guaranteeAmt;
        return $this;
    }

    /**
     * Gets as guaranteeTerm
     *
     * @return \DateTime
     */
    public function getGuaranteeTerm()
    {
        return $this->guaranteeTerm;
    }

    /**
     * Sets a new guaranteeTerm
     *
     * @param \DateTime $guaranteeTerm
     * @return self
     */
    public function setGuaranteeTerm(\DateTime $guaranteeTerm)
    {
        $this->guaranteeTerm = $guaranteeTerm;
        return $this;
    }

    /**
     * Adds as guarantor
     *
     * @return self
     * @param \mfteam\nbch\generated\models\GuarantorType $guarantor
     */
    public function addToGuarantor(\mfteam\nbch\generated\models\GuarantorType $guarantor)
    {
        $this->guarantor[] = $guarantor;
        return $this;
    }

    /**
     * isset guarantor
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuarantor($index)
    {
        return isset($this->guarantor[$index]);
    }

    /**
     * unset guarantor
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuarantor($index)
    {
        unset($this->guarantor[$index]);
    }

    /**
     * Gets as guarantor
     *
     * @return \mfteam\nbch\generated\models\GuarantorType[]
     */
    public function getGuarantor()
    {
        return $this->guarantor;
    }

    /**
     * Sets a new guarantor
     *
     * @param \mfteam\nbch\generated\models\GuarantorType[] $guarantor
     * @return self
     */
    public function setGuarantor(array $guarantor)
    {
        $this->guarantor = $guarantor;
        return $this;
    }

    /**
     * Gets as bankGuaranteeIndicatorCode
     *
     * @return string
     */
    public function getBankGuaranteeIndicatorCode()
    {
        return $this->bankGuaranteeIndicatorCode;
    }

    /**
     * Sets a new bankGuaranteeIndicatorCode
     *
     * @param string $bankGuaranteeIndicatorCode
     * @return self
     */
    public function setBankGuaranteeIndicatorCode($bankGuaranteeIndicatorCode)
    {
        $this->bankGuaranteeIndicatorCode = $bankGuaranteeIndicatorCode;
        return $this;
    }

    /**
     * Gets as bankGuaranteeIndicatorCodeText
     *
     * @return string
     */
    public function getBankGuaranteeIndicatorCodeText()
    {
        return $this->bankGuaranteeIndicatorCodeText;
    }

    /**
     * Sets a new bankGuaranteeIndicatorCodeText
     *
     * @param string $bankGuaranteeIndicatorCodeText
     * @return self
     */
    public function setBankGuaranteeIndicatorCodeText($bankGuaranteeIndicatorCodeText)
    {
        $this->bankGuaranteeIndicatorCodeText = $bankGuaranteeIndicatorCodeText;
        return $this;
    }

    /**
     * Gets as bankGuaranteeVolumeCode
     *
     * @return string
     */
    public function getBankGuaranteeVolumeCode()
    {
        return $this->bankGuaranteeVolumeCode;
    }

    /**
     * Sets a new bankGuaranteeVolumeCode
     *
     * @param string $bankGuaranteeVolumeCode
     * @return self
     */
    public function setBankGuaranteeVolumeCode($bankGuaranteeVolumeCode)
    {
        $this->bankGuaranteeVolumeCode = $bankGuaranteeVolumeCode;
        return $this;
    }

    /**
     * Gets as bankGuaranteeVolumeCodeText
     *
     * @return string
     */
    public function getBankGuaranteeVolumeCodeText()
    {
        return $this->bankGuaranteeVolumeCodeText;
    }

    /**
     * Sets a new bankGuaranteeVolumeCodeText
     *
     * @param string $bankGuaranteeVolumeCodeText
     * @return self
     */
    public function setBankGuaranteeVolumeCodeText($bankGuaranteeVolumeCodeText)
    {
        $this->bankGuaranteeVolumeCodeText = $bankGuaranteeVolumeCodeText;
        return $this;
    }

    /**
     * Gets as bankGuaranteeAmt
     *
     * @return int
     */
    public function getBankGuaranteeAmt()
    {
        return $this->bankGuaranteeAmt;
    }

    /**
     * Sets a new bankGuaranteeAmt
     *
     * @param int $bankGuaranteeAmt
     * @return self
     */
    public function setBankGuaranteeAmt($bankGuaranteeAmt)
    {
        $this->bankGuaranteeAmt = $bankGuaranteeAmt;
        return $this;
    }

    /**
     * Gets as bankGuaranteeTerm
     *
     * @return \DateTime
     */
    public function getBankGuaranteeTerm()
    {
        return $this->bankGuaranteeTerm;
    }

    /**
     * Sets a new bankGuaranteeTerm
     *
     * @param \DateTime $bankGuaranteeTerm
     * @return self
     */
    public function setBankGuaranteeTerm(\DateTime $bankGuaranteeTerm)
    {
        $this->bankGuaranteeTerm = $bankGuaranteeTerm;
        return $this;
    }

    /**
     * Adds as bankGuarantee
     *
     * @return self
     * @param \mfteam\nbch\generated\models\BankGuaranteeType $bankGuarantee
     */
    public function addToBankGuarantee(\mfteam\nbch\generated\models\BankGuaranteeType $bankGuarantee)
    {
        $this->bankGuarantee[] = $bankGuarantee;
        return $this;
    }

    /**
     * isset bankGuarantee
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankGuarantee($index)
    {
        return isset($this->bankGuarantee[$index]);
    }

    /**
     * unset bankGuarantee
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankGuarantee($index)
    {
        unset($this->bankGuarantee[$index]);
    }

    /**
     * Gets as bankGuarantee
     *
     * @return \mfteam\nbch\generated\models\BankGuaranteeType[]
     */
    public function getBankGuarantee()
    {
        return $this->bankGuarantee;
    }

    /**
     * Sets a new bankGuarantee
     *
     * @param \mfteam\nbch\generated\models\BankGuaranteeType[] $bankGuarantee
     * @return self
     */
    public function setBankGuarantee(array $bankGuarantee)
    {
        $this->bankGuarantee = $bankGuarantee;
        return $this;
    }

    /**
     * Gets as rightOfClaimName
     *
     * @return string
     */
    public function getRightOfClaimName()
    {
        return $this->rightOfClaimName;
    }

    /**
     * Sets a new rightOfClaimName
     *
     * @param string $rightOfClaimName
     * @return self
     */
    public function setRightOfClaimName($rightOfClaimName)
    {
        $this->rightOfClaimName = $rightOfClaimName;
        return $this;
    }

    /**
     * Gets as rightOfClaimID
     *
     * @return string
     */
    public function getRightOfClaimID()
    {
        return $this->rightOfClaimID;
    }

    /**
     * Sets a new rightOfClaimID
     *
     * @param string $rightOfClaimID
     * @return self
     */
    public function setRightOfClaimID($rightOfClaimID)
    {
        $this->rightOfClaimID = $rightOfClaimID;
        return $this;
    }

    /**
     * Gets as rightOfClaimINN
     *
     * @return string
     */
    public function getRightOfClaimINN()
    {
        return $this->rightOfClaimINN;
    }

    /**
     * Sets a new rightOfClaimINN
     *
     * @param string $rightOfClaimINN
     * @return self
     */
    public function setRightOfClaimINN($rightOfClaimINN)
    {
        $this->rightOfClaimINN = $rightOfClaimINN;
        return $this;
    }

    /**
     * Gets as rightOfClaimSNILS
     *
     * @return string
     */
    public function getRightOfClaimSNILS()
    {
        return $this->rightOfClaimSNILS;
    }

    /**
     * Sets a new rightOfClaimSNILS
     *
     * @param string $rightOfClaimSNILS
     * @return self
     */
    public function setRightOfClaimSNILS($rightOfClaimSNILS)
    {
        $this->rightOfClaimSNILS = $rightOfClaimSNILS;
        return $this;
    }

    /**
     * Gets as creditTotalAmt
     *
     * @return string
     */
    public function getCreditTotalAmt()
    {
        return $this->creditTotalAmt;
    }

    /**
     * Sets a new creditTotalAmt
     *
     * @param string $creditTotalAmt
     * @return self
     */
    public function setCreditTotalAmt($creditTotalAmt)
    {
        $this->creditTotalAmt = $creditTotalAmt;
        return $this;
    }

    /**
     * Gets as termsAmt
     *
     * @return int
     */
    public function getTermsAmt()
    {
        return $this->termsAmt;
    }

    /**
     * Sets a new termsAmt
     *
     * @param int $termsAmt
     * @return self
     */
    public function setTermsAmt($termsAmt)
    {
        $this->termsAmt = $termsAmt;
        return $this;
    }

    /**
     * Gets as baloonPaymtAmt
     *
     * @return int
     */
    public function getBaloonPaymtAmt()
    {
        return $this->baloonPaymtAmt;
    }

    /**
     * Sets a new baloonPaymtAmt
     *
     * @param int $baloonPaymtAmt
     * @return self
     */
    public function setBaloonPaymtAmt($baloonPaymtAmt)
    {
        $this->baloonPaymtAmt = $baloonPaymtAmt;
        return $this;
    }

    /**
     * Gets as baloonPaymtDt
     *
     * @return \DateTime
     */
    public function getBaloonPaymtDt()
    {
        return $this->baloonPaymtDt;
    }

    /**
     * Sets a new baloonPaymtDt
     *
     * @param \DateTime $baloonPaymtDt
     * @return self
     */
    public function setBaloonPaymtDt(\DateTime $baloonPaymtDt)
    {
        $this->baloonPaymtDt = $baloonPaymtDt;
        return $this;
    }

    /**
     * Gets as lastPurchasedDt
     *
     * @return \DateTime
     */
    public function getLastPurchasedDt()
    {
        return $this->lastPurchasedDt;
    }

    /**
     * Sets a new lastPurchasedDt
     *
     * @param \DateTime $lastPurchasedDt
     * @return self
     */
    public function setLastPurchasedDt(\DateTime $lastPurchasedDt)
    {
        $this->lastPurchasedDt = $lastPurchasedDt;
        return $this;
    }

    /**
     * Gets as amtOutstanding
     *
     * @return int
     */
    public function getAmtOutstanding()
    {
        return $this->amtOutstanding;
    }

    /**
     * Sets a new amtOutstanding
     *
     * @param int $amtOutstanding
     * @return self
     */
    public function setAmtOutstanding($amtOutstanding)
    {
        $this->amtOutstanding = $amtOutstanding;
        return $this;
    }

    /**
     * Gets as firstDelqDt
     *
     * @return \DateTime
     */
    public function getFirstDelqDt()
    {
        return $this->firstDelqDt;
    }

    /**
     * Sets a new firstDelqDt
     *
     * @param \DateTime $firstDelqDt
     * @return self
     */
    public function setFirstDelqDt(\DateTime $firstDelqDt)
    {
        $this->firstDelqDt = $firstDelqDt;
        return $this;
    }

    /**
     * Gets as maxDelqDt
     *
     * @return \DateTime
     */
    public function getMaxDelqDt()
    {
        return $this->maxDelqDt;
    }

    /**
     * Sets a new maxDelqDt
     *
     * @param \DateTime $maxDelqDt
     * @return self
     */
    public function setMaxDelqDt(\DateTime $maxDelqDt)
    {
        $this->maxDelqDt = $maxDelqDt;
        return $this;
    }

    /**
     * Gets as maxDelq
     *
     * @return int
     */
    public function getMaxDelq()
    {
        return $this->maxDelq;
    }

    /**
     * Sets a new maxDelq
     *
     * @param int $maxDelq
     * @return self
     */
    public function setMaxDelq($maxDelq)
    {
        $this->maxDelq = $maxDelq;
        return $this;
    }

    /**
     * Gets as maxDelqAmtDt
     *
     * @return \DateTime
     */
    public function getMaxDelqAmtDt()
    {
        return $this->maxDelqAmtDt;
    }

    /**
     * Sets a new maxDelqAmtDt
     *
     * @param \DateTime $maxDelqAmtDt
     * @return self
     */
    public function setMaxDelqAmtDt(\DateTime $maxDelqAmtDt)
    {
        $this->maxDelqAmtDt = $maxDelqAmtDt;
        return $this;
    }

    /**
     * Gets as maxDelqAmt
     *
     * @return int
     */
    public function getMaxDelqAmt()
    {
        return $this->maxDelqAmt;
    }

    /**
     * Sets a new maxDelqAmt
     *
     * @param int $maxDelqAmt
     * @return self
     */
    public function setMaxDelqAmt($maxDelqAmt)
    {
        $this->maxDelqAmt = $maxDelqAmt;
        return $this;
    }

    /**
     * Gets as monthsReviewed
     *
     * @return int
     */
    public function getMonthsReviewed()
    {
        return $this->monthsReviewed;
    }

    /**
     * Sets a new monthsReviewed
     *
     * @param int $monthsReviewed
     * @return self
     */
    public function setMonthsReviewed($monthsReviewed)
    {
        $this->monthsReviewed = $monthsReviewed;
        return $this;
    }

    /**
     * Gets as numDays30
     *
     * @return int
     */
    public function getNumDays30()
    {
        return $this->numDays30;
    }

    /**
     * Sets a new numDays30
     *
     * @param int $numDays30
     * @return self
     */
    public function setNumDays30($numDays30)
    {
        $this->numDays30 = $numDays30;
        return $this;
    }

    /**
     * Gets as numDays60
     *
     * @return int
     */
    public function getNumDays60()
    {
        return $this->numDays60;
    }

    /**
     * Sets a new numDays60
     *
     * @param int $numDays60
     * @return self
     */
    public function setNumDays60($numDays60)
    {
        $this->numDays60 = $numDays60;
        return $this;
    }

    /**
     * Gets as numDays90
     *
     * @return int
     */
    public function getNumDays90()
    {
        return $this->numDays90;
    }

    /**
     * Sets a new numDays90
     *
     * @param int $numDays90
     * @return self
     */
    public function setNumDays90($numDays90)
    {
        $this->numDays90 = $numDays90;
        return $this;
    }

    /**
     * Gets as numDays120
     *
     * @return int
     */
    public function getNumDays120()
    {
        return $this->numDays120;
    }

    /**
     * Sets a new numDays120
     *
     * @param int $numDays120
     * @return self
     */
    public function setNumDays120($numDays120)
    {
        $this->numDays120 = $numDays120;
        return $this;
    }

    /**
     * Gets as paymtPat
     *
     * @return string
     */
    public function getPaymtPat()
    {
        return $this->paymtPat;
    }

    /**
     * Sets a new paymtPat
     *
     * @param string $paymtPat
     * @return self
     */
    public function setPaymtPat($paymtPat)
    {
        $this->paymtPat = $paymtPat;
        return $this;
    }

    /**
     * Gets as mOP
     *
     * @return string
     */
    public function getMOP()
    {
        return $this->mOP;
    }

    /**
     * Sets a new mOP
     *
     * @param string $mOP
     * @return self
     */
    public function setMOP($mOP)
    {
        $this->mOP = $mOP;
        return $this;
    }

    /**
     * Gets as mOPText
     *
     * @return string
     */
    public function getMOPText()
    {
        return $this->mOPText;
    }

    /**
     * Sets a new mOPText
     *
     * @param string $mOPText
     * @return self
     */
    public function setMOPText($mOPText)
    {
        $this->mOPText = $mOPText;
        return $this;
    }

    /**
     * Gets as mOPMaxValue
     *
     * @return int
     */
    public function getMOPMaxValue()
    {
        return $this->mOPMaxValue;
    }

    /**
     * Sets a new mOPMaxValue
     *
     * @param int $mOPMaxValue
     * @return self
     */
    public function setMOPMaxValue($mOPMaxValue)
    {
        $this->mOPMaxValue = $mOPMaxValue;
        return $this;
    }

    /**
     * Gets as mOPMaxValueText
     *
     * @return string
     */
    public function getMOPMaxValueText()
    {
        return $this->mOPMaxValueText;
    }

    /**
     * Sets a new mOPMaxValueText
     *
     * @param string $mOPMaxValueText
     * @return self
     */
    public function setMOPMaxValueText($mOPMaxValueText)
    {
        $this->mOPMaxValueText = $mOPMaxValueText;
        return $this;
    }

    /**
     * Gets as paymtPatStartDt
     *
     * @return \DateTime
     */
    public function getPaymtPatStartDt()
    {
        return $this->paymtPatStartDt;
    }

    /**
     * Sets a new paymtPatStartDt
     *
     * @param \DateTime $paymtPatStartDt
     * @return self
     */
    public function setPaymtPatStartDt(\DateTime $paymtPatStartDt)
    {
        $this->paymtPatStartDt = $paymtPatStartDt;
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
     * Gets as paymtFreqText
     *
     * @return string
     */
    public function getPaymtFreqText()
    {
        return $this->paymtFreqText;
    }

    /**
     * Sets a new paymtFreqText
     *
     * @param string $paymtFreqText
     * @return self
     */
    public function setPaymtFreqText($paymtFreqText)
    {
        $this->paymtFreqText = $paymtFreqText;
        return $this;
    }

    /**
     * Gets as creditAgreementNum
     *
     * @return string
     */
    public function getCreditAgreementNum()
    {
        return $this->creditAgreementNum;
    }

    /**
     * Sets a new creditAgreementNum
     *
     * @param string $creditAgreementNum
     * @return self
     */
    public function setCreditAgreementNum($creditAgreementNum)
    {
        $this->creditAgreementNum = $creditAgreementNum;
        return $this;
    }

    /**
     * Gets as accountRelationship
     *
     * @return string
     */
    public function getAccountRelationship()
    {
        return $this->accountRelationship;
    }

    /**
     * Sets a new accountRelationship
     *
     * @param string $accountRelationship
     * @return self
     */
    public function setAccountRelationship($accountRelationship)
    {
        $this->accountRelationship = $accountRelationship;
        return $this;
    }

    /**
     * Gets as accountRelationshipText
     *
     * @return string
     */
    public function getAccountRelationshipText()
    {
        return $this->accountRelationshipText;
    }

    /**
     * Sets a new accountRelationshipText
     *
     * @param string $accountRelationshipText
     * @return self
     */
    public function setAccountRelationshipText($accountRelationshipText)
    {
        $this->accountRelationshipText = $accountRelationshipText;
        return $this;
    }

    /**
     * Gets as accountRating
     *
     * @return string
     */
    public function getAccountRating()
    {
        return $this->accountRating;
    }

    /**
     * Sets a new accountRating
     *
     * @param string $accountRating
     * @return self
     */
    public function setAccountRating($accountRating)
    {
        $this->accountRating = $accountRating;
        return $this;
    }

    /**
     * Gets as accountRatingText
     *
     * @return string
     */
    public function getAccountRatingText()
    {
        return $this->accountRatingText;
    }

    /**
     * Sets a new accountRatingText
     *
     * @param string $accountRatingText
     * @return self
     */
    public function setAccountRatingText($accountRatingText)
    {
        $this->accountRatingText = $accountRatingText;
        return $this;
    }

    /**
     * Gets as accountRatingDate
     *
     * @return \DateTime
     */
    public function getAccountRatingDate()
    {
        return $this->accountRatingDate;
    }

    /**
     * Sets a new accountRatingDate
     *
     * @param \DateTime $accountRatingDate
     * @return self
     */
    public function setAccountRatingDate(\DateTime $accountRatingDate)
    {
        $this->accountRatingDate = $accountRatingDate;
        return $this;
    }

    /**
     * Gets as contractTerminationDate
     *
     * @return \DateTime
     */
    public function getContractTerminationDate()
    {
        return $this->contractTerminationDate;
    }

    /**
     * Sets a new contractTerminationDate
     *
     * @param \DateTime $contractTerminationDate
     * @return self
     */
    public function setContractTerminationDate(\DateTime $contractTerminationDate)
    {
        $this->contractTerminationDate = $contractTerminationDate;
        return $this;
    }

    /**
     * Gets as paymentDueDate
     *
     * @return \DateTime
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * Sets a new paymentDueDate
     *
     * @param \DateTime $paymentDueDate
     * @return self
     */
    public function setPaymentDueDate(\DateTime $paymentDueDate)
    {
        $this->paymentDueDate = $paymentDueDate;
        return $this;
    }

    /**
     * Gets as oldMemeberCode
     *
     * @return string
     */
    public function getOldMemeberCode()
    {
        return $this->oldMemeberCode;
    }

    /**
     * Sets a new oldMemeberCode
     *
     * @param string $oldMemeberCode
     * @return self
     */
    public function setOldMemeberCode($oldMemeberCode)
    {
        $this->oldMemeberCode = $oldMemeberCode;
        return $this;
    }

    /**
     * Gets as oldCreditAgreementNumber
     *
     * @return string
     */
    public function getOldCreditAgreementNumber()
    {
        return $this->oldCreditAgreementNumber;
    }

    /**
     * Sets a new oldCreditAgreementNumber
     *
     * @param string $oldCreditAgreementNumber
     * @return self
     */
    public function setOldCreditAgreementNumber($oldCreditAgreementNumber)
    {
        $this->oldCreditAgreementNumber = $oldCreditAgreementNumber;
        return $this;
    }

    /**
     * Gets as interestPaymentDueDate
     *
     * @return \DateTime
     */
    public function getInterestPaymentDueDate()
    {
        return $this->interestPaymentDueDate;
    }

    /**
     * Sets a new interestPaymentDueDate
     *
     * @param \DateTime $interestPaymentDueDate
     * @return self
     */
    public function setInterestPaymentDueDate(\DateTime $interestPaymentDueDate)
    {
        $this->interestPaymentDueDate = $interestPaymentDueDate;
        return $this;
    }

    /**
     * Gets as interestPaymentFrequencyCode
     *
     * @return string
     */
    public function getInterestPaymentFrequencyCode()
    {
        return $this->interestPaymentFrequencyCode;
    }

    /**
     * Sets a new interestPaymentFrequencyCode
     *
     * @param string $interestPaymentFrequencyCode
     * @return self
     */
    public function setInterestPaymentFrequencyCode($interestPaymentFrequencyCode)
    {
        $this->interestPaymentFrequencyCode = $interestPaymentFrequencyCode;
        return $this;
    }

    /**
     * Gets as interestPaymentFrequencyText
     *
     * @return string
     */
    public function getInterestPaymentFrequencyText()
    {
        return $this->interestPaymentFrequencyText;
    }

    /**
     * Sets a new interestPaymentFrequencyText
     *
     * @param string $interestPaymentFrequencyText
     * @return self
     */
    public function setInterestPaymentFrequencyText($interestPaymentFrequencyText)
    {
        $this->interestPaymentFrequencyText = $interestPaymentFrequencyText;
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
     * Gets as principalOutstanding
     *
     * @return int
     */
    public function getPrincipalOutstanding()
    {
        return $this->principalOutstanding;
    }

    /**
     * Sets a new principalOutstanding
     *
     * @param int $principalOutstanding
     * @return self
     */
    public function setPrincipalOutstanding($principalOutstanding)
    {
        $this->principalOutstanding = $principalOutstanding;
        return $this;
    }

    /**
     * Gets as intOutstanding
     *
     * @return int
     */
    public function getIntOutstanding()
    {
        return $this->intOutstanding;
    }

    /**
     * Sets a new intOutstanding
     *
     * @param int $intOutstanding
     * @return self
     */
    public function setIntOutstanding($intOutstanding)
    {
        $this->intOutstanding = $intOutstanding;
        return $this;
    }

    /**
     * Gets as otherAmtOutstanding
     *
     * @return int
     */
    public function getOtherAmtOutstanding()
    {
        return $this->otherAmtOutstanding;
    }

    /**
     * Sets a new otherAmtOutstanding
     *
     * @param int $otherAmtOutstanding
     * @return self
     */
    public function setOtherAmtOutstanding($otherAmtOutstanding)
    {
        $this->otherAmtOutstanding = $otherAmtOutstanding;
        return $this;
    }

    /**
     * Gets as principalPastDue
     *
     * @return int
     */
    public function getPrincipalPastDue()
    {
        return $this->principalPastDue;
    }

    /**
     * Sets a new principalPastDue
     *
     * @param int $principalPastDue
     * @return self
     */
    public function setPrincipalPastDue($principalPastDue)
    {
        $this->principalPastDue = $principalPastDue;
        return $this;
    }

    /**
     * Gets as intPastDue
     *
     * @return int
     */
    public function getIntPastDue()
    {
        return $this->intPastDue;
    }

    /**
     * Sets a new intPastDue
     *
     * @param int $intPastDue
     * @return self
     */
    public function setIntPastDue($intPastDue)
    {
        $this->intPastDue = $intPastDue;
        return $this;
    }

    /**
     * Gets as otherAmtPastDue
     *
     * @return int
     */
    public function getOtherAmtPastDue()
    {
        return $this->otherAmtPastDue;
    }

    /**
     * Sets a new otherAmtPastDue
     *
     * @param int $otherAmtPastDue
     * @return self
     */
    public function setOtherAmtPastDue($otherAmtPastDue)
    {
        $this->otherAmtPastDue = $otherAmtPastDue;
        return $this;
    }

    /**
     * Gets as graceEndDt
     *
     * @return \DateTime
     */
    public function getGraceEndDt()
    {
        return $this->graceEndDt;
    }

    /**
     * Sets a new graceEndDt
     *
     * @param \DateTime $graceEndDt
     * @return self
     */
    public function setGraceEndDt(\DateTime $graceEndDt)
    {
        $this->graceEndDt = $graceEndDt;
        return $this;
    }

    /**
     * Gets as gracePeriodReason
     *
     * @return int
     */
    public function getGracePeriodReason()
    {
        return $this->gracePeriodReason;
    }

    /**
     * Sets a new gracePeriodReason
     *
     * @param int $gracePeriodReason
     * @return self
     */
    public function setGracePeriodReason($gracePeriodReason)
    {
        $this->gracePeriodReason = $gracePeriodReason;
        return $this;
    }

    /**
     * Gets as gracePeriodDeclinedDt
     *
     * @return \DateTime
     */
    public function getGracePeriodDeclinedDt()
    {
        return $this->gracePeriodDeclinedDt;
    }

    /**
     * Sets a new gracePeriodDeclinedDt
     *
     * @param \DateTime $gracePeriodDeclinedDt
     * @return self
     */
    public function setGracePeriodDeclinedDt(\DateTime $gracePeriodDeclinedDt)
    {
        $this->gracePeriodDeclinedDt = $gracePeriodDeclinedDt;
        return $this;
    }

    /**
     * Gets as creditTotalMonetaryAmt
     *
     * @return string
     */
    public function getCreditTotalMonetaryAmt()
    {
        return $this->creditTotalMonetaryAmt;
    }

    /**
     * Sets a new creditTotalMonetaryAmt
     *
     * @param string $creditTotalMonetaryAmt
     * @return self
     */
    public function setCreditTotalMonetaryAmt($creditTotalMonetaryAmt)
    {
        $this->creditTotalMonetaryAmt = $creditTotalMonetaryAmt;
        return $this;
    }

    /**
     * Gets as uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Sets a new uuid
     *
     * @param string $uuid
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * Adds as amendment
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AmendmentType $amendment
     */
    public function addToAmendment(\mfteam\nbch\generated\models\AmendmentType $amendment)
    {
        $this->amendment[] = $amendment;
        return $this;
    }

    /**
     * isset amendment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAmendment($index)
    {
        return isset($this->amendment[$index]);
    }

    /**
     * unset amendment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAmendment($index)
    {
        unset($this->amendment[$index]);
    }

    /**
     * Gets as amendment
     *
     * @return \mfteam\nbch\generated\models\AmendmentType[]
     */
    public function getAmendment()
    {
        return $this->amendment;
    }

    /**
     * Sets a new amendment
     *
     * @param \mfteam\nbch\generated\models\AmendmentType[] $amendment
     * @return self
     */
    public function setAmendment(array $amendment)
    {
        $this->amendment = $amendment;
        return $this;
    }

    /**
     * Adds as payment
     *
     * @return self
     * @param \mfteam\nbch\generated\models\PaymentType $payment
     */
    public function addToPayment(\mfteam\nbch\generated\models\PaymentType $payment)
    {
        $this->payment[] = $payment;
        return $this;
    }

    /**
     * isset payment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPayment($index)
    {
        return isset($this->payment[$index]);
    }

    /**
     * unset payment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPayment($index)
    {
        unset($this->payment[$index]);
    }

    /**
     * Gets as payment
     *
     * @return \mfteam\nbch\generated\models\PaymentType[]
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * @param \mfteam\nbch\generated\models\PaymentType[] $payment
     * @return self
     */
    public function setPayment(array $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Adds as historyInternal
     *
     * @return self
     * @param \mfteam\nbch\generated\models\HistoryInternalType $historyInternal
     */
    public function addToHistoryInternal(\mfteam\nbch\generated\models\HistoryInternalType $historyInternal)
    {
        $this->historyInternal[] = $historyInternal;
        return $this;
    }

    /**
     * isset historyInternal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHistoryInternal($index)
    {
        return isset($this->historyInternal[$index]);
    }

    /**
     * unset historyInternal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHistoryInternal($index)
    {
        unset($this->historyInternal[$index]);
    }

    /**
     * Gets as historyInternal
     *
     * @return \mfteam\nbch\generated\models\HistoryInternalType[]
     */
    public function getHistoryInternal()
    {
        return $this->historyInternal;
    }

    /**
     * Sets a new historyInternal
     *
     * @param \mfteam\nbch\generated\models\HistoryInternalType[] $historyInternal
     * @return self
     */
    public function setHistoryInternal(array $historyInternal)
    {
        $this->historyInternal = $historyInternal;
        return $this;
    }


}

