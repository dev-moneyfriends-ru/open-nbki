<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

class Account extends BaseItem
{
    /**
     * @var string $memberCode
     */
    public $memberCode = null;
    
    /**
     * @var string $memberTypeText
     */
    public $memberTypeText = null;
    
    /**
     * @var string $memberNameText
     */
    public $memberNameText = null;
    
    /**
     * @var string $memberContactText
     */
    public $memberContactText = null;
    
    /**
     * @var string $acctNum
     */
    public $acctNum = null;
    
    /**
     * @var string $srcCountryCode
     */
    public $srcCountryCode = null;
    
    /**
     * @var string $srcCountryCodeText
     */
    public $srcCountryCodeText = null;
    
    /**
     * @var int $acctNumDisplay
     */
    public $acctNumDisplay = null;
    
    /**
     * @var string $ownerIndic
     */
    public $ownerIndic = null;
    
    /**
     * @var string $ownerIndicText
     */
    public $ownerIndicText = null;
    
    /**
     * @var string $consent
     */
    public $consent = null;
    
    /**
     * @var string $consentText
     */
    public $consentText = null;
    
    /**
     * @var \DateTime $openedDt
     */
    public $openedDt = null;
    
    /**
     * @var string $lastPaymtDt
     */
    public $lastPaymtDt = null;
    
    /**
     * @var string $completePerformDt
     */
    public $completePerformDt = null;
    
    /**
     * @var string $closedDt
     */
    public $closedDt = null;
    
    /**
     * @var string $reportingDt
     */
    public $reportingDt = null;
    
    /**
     * @var string $postedDt
     */
    public $postedDt = null;
    
    /**
     * @var string $acctType
     */
    public $acctType = null;
    
    /**
     * @var string $acctTypeText
     */
    public $acctTypeText = null;
    
    /**
     * @var string $acctStatus
     */
    public $acctStatus = null;
    
    /**
     * @var string $acctStatusText
     */
    public $acctStatusText = null;
    
    /**
     * @var string $loanCode
     */
    public $loanCode = null;
    
    /**
     * @var string $loanCodeText
     */
    public $loanCodeText = null;
    
    /**
     * @var string $paymtHistory1
     */
    public $paymtHistory1 = null;
    
    /**
     * @var string $paymtHistory2
     */
    public $paymtHistory2 = null;
    
    /**
     * @var string $paymtHistoryStartDt
     */
    public $paymtHistoryStartDt = null;
    
    /**
     * @var string $paymtHistoryEndDt
     */
    public $paymtHistoryEndDt = null;
    
    /**
     * @var string $loanObjectiveText
     */
    public $loanObjectiveText = null;
    
    /**
     * @var string $collateralCode
     */
    public $collateralCode = null;
    
    /**
     * @var string $collateralValue
     */
    public $collateralValue = null;
    
    /**
     * @var string $collateralDate
     */
    public $collateralDate = null;
    
    /**
     * @var string $collateralExpirationDate
     */
    public $collateralExpirationDate = null;
    
    /**
     * @var string $collateral1Text
     */
    public $collateral1Text = null;
    
    /**
     * @var string $collateral2Text
     */
    public $collateral2Text = null;
    
    /**
     * @var string $collateral3Text
     */
    public $collateral3Text = null;
    
    /**
     * @var Collateral[] $collateral
     */
    private $collateral = [];
    
    /**
     * @var string $lastDebtRestructureDt
     */
    public $lastDebtRestructureDt = null;
    
    /**
     * @var int $percentPayment
     */
    public $percentPayment = null;
    
    /**
     * @var string $creditCardTypeCode
     */
    public $creditCardTypeCode = null;
    
    /**
     * @var string $creditCardTypeCodeText
     */
    public $creditCardTypeCodeText = null;
    
    /**
     * @var int $numCoborrowers
     */
    public $numCoborrowers = null;
    
    /**
     * @var string $unitMakeText
     */
    public $unitMakeText = null;
    
    /**
     * @var string $unitModelText
     */
    public $unitModelText = null;
    
    /**
     * @var string $creditTypeFlagCode
     */
    public $creditTypeFlagCode = null;
    
    /**
     * @var string $narrativeCode1
     */
    public $narrativeCode1 = null;
    
    /**
     * @var string $narrativeCode2
     */
    public $narrativeCode2 = null;
    
    /**
     * @var string $narrativeCode1Text
     */
    public $narrativeCode1Text = null;
    
    /**
     * @var string $narrativeCode2Text
     */
    public $narrativeCode2Text = null;
    
    /**
     * @var string $currencyCode
     */
    public $currencyCode = null;
    
    /**
     * @var int $highCreditAmt
     */
    public $highCreditAmt = null;
    
    /**
     * @var int $creditLimit
     */
    public $creditLimit = null;
    
    /**
     * @var int $curBalanceAmt
     */
    public $curBalanceAmt = null;
    
    /**
     * @var int $amtPastDue
     */
    public $amtPastDue = null;
    
    /**
     * @var int $termsNumPaymts
     */
    public $termsNumPaymts = null;
    
    /**
     * @var string $termsFrequency
     */
    public $termsFrequency = null;
    
    /**
     * @var string $guarantorIndicatorCode
     */
    public $guarantorIndicatorCode = null;
    
    /**
     * @var string $guarantorIndicatorCodeText
     */
    public $guarantorIndicatorCodeText = null;
    
    /**
     * @var string $guaranteeVolumeCode
     */
    public $guaranteeVolumeCode = null;
    
    /**
     * @var string $guaranteeVolumeCodeText
     */
    public $guaranteeVolumeCodeText = null;
    
    /**
     * @var int $guaranteeAmt
     */
    public $guaranteeAmt = null;
    
    /**
     * @var string $guaranteeTerm
     */
    public $guaranteeTerm = null;
    
    /**
     * @var Guarantor[] $guarantor
     */
    private $guarantor = [];
    
    /**
     * @var string $bankGuaranteeIndicatorCode
     */
    public $bankGuaranteeIndicatorCode = null;
    
    /**
     * @var string $bankGuaranteeIndicatorCodeText
     */
    public $bankGuaranteeIndicatorCodeText = null;
    
    /**
     * @var string $bankGuaranteeVolumeCode
     */
    public $bankGuaranteeVolumeCode = null;
    
    /**
     * @var string $bankGuaranteeVolumeCodeText
     */
    public $bankGuaranteeVolumeCodeText = null;
    
    /**
     * @var int $bankGuaranteeAmt
     */
    public $bankGuaranteeAmt = null;
    
    /**
     * @var string $bankGuaranteeTerm
     */
    public $bankGuaranteeTerm = null;
    
    /**
     * @var string $rightOfClaimName
     */
    public $rightOfClaimName = null;
    
    /**
     * @var string $rightOfClaimID
     */
    public $rightOfClaimID = null;
    
    /**
     * @var string $rightOfClaimINN
     */
    public $rightOfClaimINN = null;
    
    /**
     * @var string $rightOfClaimSNILS
     */
    public $rightOfClaimSNILS = null;
    
    /**
     * @var string $creditTotalAmt
     */
    public $creditTotalAmt = null;
    
    /**
     * @var int $termsAmt
     */
    public $termsAmt = null;
    
    /**
     * @var int $baloonPaymtAmt
     */
    public $baloonPaymtAmt = null;
    
    /**
     * @var string $baloonPaymtDt
     */
    public $baloonPaymtDt = null;
    
    /**
     * @var string $lastPurchasedDt
     */
    public $lastPurchasedDt = null;
    
    /**
     * @var int $amtOutstanding
     */
    public $amtOutstanding = null;
    
    /**
     * @var string $firstDelqDt
     */
    public $firstDelqDt = null;
    
    /**
     * @var string $maxDelqDt
     */
    public $maxDelqDt = null;
    
    /**
     * @var int $maxDelq
     */
    public $maxDelq = null;
    
    /**
     * @var string $maxDelqAmtDt
     */
    public $maxDelqAmtDt = null;
    
    /**
     * @var int $maxDelqAmt
     */
    public $maxDelqAmt = null;
    
    /**
     * @var int $monthsReviewed
     */
    public $monthsReviewed = null;
    
    /**
     * @var int $numDays30
     */
    public $numDays30 = null;
    
    /**
     * @var int $numDays60
     */
    public $numDays60 = null;
    
    /**
     * @var int $numDays90
     */
    public $numDays90 = null;
    
    /**
     * @var int $numDays120
     */
    public $numDays120 = null;
    
    /**
     * @var string $paymtPat
     */
    public $paymtPat = null;
    
    /**
     * @var string $mOP
     */
    public $mOP = null;
    
    /**
     * @var string $mOPText
     */
    public $mOPText = null;
    
    /**
     * @var int $mOPMaxValue
     */
    public $mOPMaxValue = null;
    
    /**
     * @var string $mOPMaxValueText
     */
    public $mOPMaxValueText = null;
    
    /**
     * @var string $paymtPatStartDt
     */
    public $paymtPatStartDt = null;
    
    /**
     * @var string $suppressFlag
     */
    public $suppressFlag = null;
    
    /**
     * @var string $suppressStrDt
     */
    public $suppressStrDt = null;
    
    /**
     * @var string $suppressEndDt
     */
    public $suppressEndDt = null;
    
    /**
     * @var string $paymtFreqText
     */
    public $paymtFreqText = null;
    
    /**
     * @var string $creditAgreementNum
     */
    public $creditAgreementNum = null;
    
    /**
     * @var string $accountRelationship
     */
    public $accountRelationship = null;
    
    /**
     * @var string $accountRelationshipText
     */
    public $accountRelationshipText = null;
    
    /**
     * @var string $accountRating
     */
    public $accountRating = null;
    
    /**
     * @var string $accountRatingText
     */
    public $accountRatingText = null;
    
    /**
     * @var string $accountRatingDate
     */
    public $accountRatingDate = null;
    
    /**
     * @var string $contractTerminationDate
     */
    public $contractTerminationDate = null;
    
    /**
     * @var string $paymentDueDate
     */
    public $paymentDueDate = null;
    
    /**
     * @var string $oldMemeberCode
     */
    public $oldMemeberCode = null;
    
    /**
     * @var string $oldCreditAgreementNumber
     */
    public $oldCreditAgreementNumber = null;
    
    /**
     * @var string $interestPaymentDueDate
     */
    public $interestPaymentDueDate = null;
    
    /**
     * @var string $interestPaymentFrequencyCode
     */
    public $interestPaymentFrequencyCode = null;
    
    /**
     * @var string $interestPaymentFrequencyText
     */
    public $interestPaymentFrequencyText = null;
    
    /**
     * @var string $memberFullName
     */
    public $memberFullName = null;
    
    /**
     * @var string $memberShortName
     */
    public $memberShortName = null;
    
    /**
     * @var string $memberLastName
     */
    public $memberLastName = null;
    
    /**
     * @var string $memberFirstName
     */
    public $memberFirstName = null;
    
    /**
     * @var string $memberMiddleName
     */
    public $memberMiddleName = null;
    
    /**
     * @var string $memberRegNum
     */
    public $memberRegNum = null;
    
    /**
     * @var string $memberType
     */
    public $memberType = null;
    
    /**
     * @var string $memberTaxpayerID
     */
    public $memberTaxpayerID = null;
    
    /**
     * @var string $memberOKPO
     */
    public $memberOKPO = null;
    
    /**
     * @var string $memberIDIssueAuth
     */
    public $memberIDIssueAuth = null;
    
    /**
     * @var string $memberIDIssueLoc
     */
    public $memberIDIssueLoc = null;
    
    /**
     * @var string $memberIDIssueDate
     */
    public $memberIDIssueDate = null;
    
    /**
     * @var string $memberBusinessCode
     */
    public $memberBusinessCode = null;
    
    /**
     * @var string $businessCategory
     */
    public $businessCategory = null;
    
    /**
     * @var string $partnerRating
     */
    public $partnerRating = null;
    
    /**
     * @var string $partnerStartDate
     */
    public $partnerStartDate = null;
    
    /**
     * @var string $partnerRegDate
     */
    public $partnerRegDate = null;
    
    /**
     * @var int $principalOutstanding
     */
    public $principalOutstanding = null;
    
    /**
     * @var int $intOutstanding
     */
    public $intOutstanding = null;
    
    /**
     * @var int $otherAmtOutstanding
     */
    public $otherAmtOutstanding = null;
    
    /**
     * @var int $principalPastDue
     */
    public $principalPastDue = null;
    
    /**
     * @var int $intPastDue
     */
    public $intPastDue = null;
    
    /**
     * @var int $otherAmtPastDue
     */
    public $otherAmtPastDue = null;
    
    /**
     * @var string $graceEndDt
     */
    public $graceEndDt = null;
    
    /**
     * @var int $gracePeriodReason
     */
    public $gracePeriodReason = null;
    
    /**
     * @var string $gracePeriodDeclinedDt
     */
    public $gracePeriodDeclinedDt = null;
    
    /**
     * @var string $creditTotalMonetaryAmt
     */
    public $creditTotalMonetaryAmt = null;
    
    /**
     * @var string $uuid
     */
    public $uuid = null;
    
    /**
     * @var Amendment[] $amendment
     */
    private $amendment = [];
    
    /**
     * @var Payment[] $payment
     */
    private $payment = [];
    
    /**
     * @return Collateral[]
     */
    public function getCollateral(): array
    {
        return $this->collateral;
    }
    
    /**
     * @param array[] $collateral
     */
    public function setCollateral(array $collateralData): void
    {
        $models = [];
        foreach ($collateralData as $config) {
            $models[] = new Collateral($config);
        }
        $this->collateral = $models;
    }
    
    /**
     * @return Guarantor[]
     */
    public function getGuarantor(): array
    {
        return $this->guarantor;
    }
    
    /**
     * @param array[] $guarantor
     */
    public function setGuarantor(array $guarantorData): void
    {
        $models = [];
        foreach ($guarantorData as $config) {
            $models[] = new Guarantor($config);
        }
        $this->guarantor = $models;
    }
    
    /**
     * @return Amendment[]
     */
    public function getAmendment(): array
    {
        return $this->amendment;
    }
    
    /**
     * @param Amendment[] $amendment
     */
    public function setAmendment(array $amendmentData): void
    {
        $models = [];
        foreach ($amendmentData as $config) {
            $models[] = new Amendment($config);
        }
        $this->amendment = $models;
    }
    
    /**
     * @return Payment[]
     */
    public function getPayment(): array
    {
        return $this->payment;
    }
    
    /**
     * @param Payment[] $payment
     */
    public function setPayment(array $paymentData): void
    {
        $models = [];
        if (ArrayHelper::isIndexed($paymentData)) {
            foreach ($paymentData as $config) {
                $models[] = new Payment($config);
            }
        } else {
            $models[] = new Payment($paymentData);
        }
        
        $this->amendment = $models;
        $this->payment = $models;
    }
}