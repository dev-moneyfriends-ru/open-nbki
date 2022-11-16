<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing AccountRUTDFType
 *
 * 
 * XSD Type: AccountRUTDF
 */
class AccountRUTDFType
{

    /**
     * @var string $uuid
     */
    private $uuid = null;

    /**
     * @var string $acctNum
     */
    private $acctNum = null;

    /**
     * @var \mfteam\nbch\generated\models\TradeRUTDFType[] $trade
     */
    private $trade = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AccountAmtRUTDFType[] $accountAmt
     */
    private $accountAmt = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CoborrowerRUTDFType[] $coborrower
     */
    private $coborrower = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\PaymtConditionRUTDFType[] $paymtCondition
     */
    private $paymtCondition = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\OverallValRUTDFType[] $overallVal
     */
    private $overallVal = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AmendmentRUTDFType[] $amendment
     */
    private $amendment = [
        
    ];

    /**
     * @var \DateTime $fundDate
     */
    private $fundDate = null;

    /**
     * @var \mfteam\nbch\generated\models\ArrearRUTDFType[] $arrear
     */
    private $arrear = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\DueArrearRUTDFType[] $dueArrear
     */
    private $dueArrear = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\PastdueArrearRUTDFType[] $pastdueArrear
     */
    private $pastdueArrear = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\PaymentRUTDFType[] $payment
     */
    private $payment = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\MonthAverPaymtRUTDFType[] $monthAverPaymt
     */
    private $monthAverPaymt = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\SourceNonMonetObligRUTDFType[] $sourceNonMonetOblig
     */
    private $sourceNonMonetOblig = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\SubjectNonMonetObligRUTDFType[] $subjectNonMonetOblig
     */
    private $subjectNonMonetOblig = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CollateralRUTDFType[] $collateral
     */
    private $collateral = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\GuarantorRUTDFType[] $guarantor
     */
    private $guarantor = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\IndepGuarantorRUTDFType[] $indepGuarantor
     */
    private $indepGuarantor = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CollatInsuredRUTDFType[] $collatInsured
     */
    private $collatInsured = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CollatRepayRUTDFType[] $collatRepay
     */
    private $collatRepay = [
        
    ];

    /**
     * @var int $hasGuaranteeRepay
     */
    private $hasGuaranteeRepay = null;

    /**
     * @var string $guaranteeToRepay
     */
    private $guaranteeToRepay = null;

    /**
     * @var string $guaranteeRepayAmt
     */
    private $guaranteeRepayAmt = null;

    /**
     * @var int $guaranteeRepayKeepCode
     */
    private $guaranteeRepayKeepCode = null;

    /**
     * @var int $loanIndicator
     */
    private $loanIndicator = null;

    /**
     * @var \DateTime $loanIndicatorDt
     */
    private $loanIndicatorDt = null;

    /**
     * @var \mfteam\nbch\generated\models\LegalItemsRUTDFType[] $legalItems
     */
    private $legalItems = [
        
    ];

    /**
     * @var string $sbStartOutstanding
     */
    private $sbStartOutstanding = null;

    /**
     * @var \DateTime $sbStartDt
     */
    private $sbStartDt = null;

    /**
     * @var string $sbEndOutstanding
     */
    private $sbEndOutstanding = null;

    /**
     * @var \DateTime $sbEndDt
     */
    private $sbEndDt = null;

    /**
     * @var string $sbLastPayOutstanding
     */
    private $sbLastPayOutstanding = null;

    /**
     * @var \DateTime $sbLastPaymtDt
     */
    private $sbLastPaymtDt = null;

    /**
     * @var int $sbTransferCode
     */
    private $sbTransferCode = null;

    /**
     * @var int $sbLoanIndicator
     */
    private $sbLoanIndicator = null;

    /**
     * @var string $sbLoanIndicatorReason
     */
    private $sbLoanIndicatorReason = null;

    /**
     * @var string $slStartOutstanding
     */
    private $slStartOutstanding = null;

    /**
     * @var \DateTime $slStartDt
     */
    private $slStartDt = null;

    /**
     * @var string $slBalanceOutstanding
     */
    private $slBalanceOutstanding = null;

    /**
     * @var \DateTime $slBalanceDt
     */
    private $slBalanceDt = null;

    /**
     * @var string $slLastPayOutstanding
     */
    private $slLastPayOutstanding = null;

    /**
     * @var \DateTime $slLastPaymtDt
     */
    private $slLastPaymtDt = null;

    /**
     * @var int $slTransferCode
     */
    private $slTransferCode = null;

    /**
     * @var int $slLoanIndicator
     */
    private $slLoanIndicator = null;

    /**
     * @var string $slLoanIndicatorReason
     */
    private $slLoanIndicatorReason = null;

    /**
     * @var \mfteam\nbch\generated\models\SubmitHoldRUTDFType[] $submitHold
     */
    private $submitHold = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\SourceLegalRUTDFType[] $sourceLegal
     */
    private $sourceLegal = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\SourceIndividRUTDFType[] $sourceIndivid
     */
    private $sourceIndivid = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\SourceBCommRUTDFType[] $sourceBComm
     */
    private $sourceBComm = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AcquirerLegalRUTDFType[] $acquirerLegal
     */
    private $acquirerLegal = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AcquirerIndividRUTDFType[] $acquirerIndivid
     */
    private $acquirerIndivid = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\ServiceCoRUTDFType[] $serviceCo
     */
    private $serviceCo = [
        
    ];

    /**
     * @var int $obligAccountCode
     */
    private $obligAccountCode = null;

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
     * Adds as trade
     *
     * @return self
     * @param \mfteam\nbch\generated\models\TradeRUTDFType $trade
     */
    public function addToTrade(\mfteam\nbch\generated\models\TradeRUTDFType $trade)
    {
        $this->trade[] = $trade;
        return $this;
    }

    /**
     * isset trade
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrade($index)
    {
        return isset($this->trade[$index]);
    }

    /**
     * unset trade
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrade($index)
    {
        unset($this->trade[$index]);
    }

    /**
     * Gets as trade
     *
     * @return \mfteam\nbch\generated\models\TradeRUTDFType[]
     */
    public function getTrade()
    {
        return $this->trade;
    }

    /**
     * Sets a new trade
     *
     * @param \mfteam\nbch\generated\models\TradeRUTDFType[] $trade
     * @return self
     */
    public function setTrade(array $trade)
    {
        $this->trade = $trade;
        return $this;
    }

    /**
     * Adds as accountAmt
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AccountAmtRUTDFType $accountAmt
     */
    public function addToAccountAmt(\mfteam\nbch\generated\models\AccountAmtRUTDFType $accountAmt)
    {
        $this->accountAmt[] = $accountAmt;
        return $this;
    }

    /**
     * isset accountAmt
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountAmt($index)
    {
        return isset($this->accountAmt[$index]);
    }

    /**
     * unset accountAmt
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountAmt($index)
    {
        unset($this->accountAmt[$index]);
    }

    /**
     * Gets as accountAmt
     *
     * @return \mfteam\nbch\generated\models\AccountAmtRUTDFType[]
     */
    public function getAccountAmt()
    {
        return $this->accountAmt;
    }

    /**
     * Sets a new accountAmt
     *
     * @param \mfteam\nbch\generated\models\AccountAmtRUTDFType[] $accountAmt
     * @return self
     */
    public function setAccountAmt(array $accountAmt)
    {
        $this->accountAmt = $accountAmt;
        return $this;
    }

    /**
     * Adds as coborrower
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CoborrowerRUTDFType $coborrower
     */
    public function addToCoborrower(\mfteam\nbch\generated\models\CoborrowerRUTDFType $coborrower)
    {
        $this->coborrower[] = $coborrower;
        return $this;
    }

    /**
     * isset coborrower
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoborrower($index)
    {
        return isset($this->coborrower[$index]);
    }

    /**
     * unset coborrower
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoborrower($index)
    {
        unset($this->coborrower[$index]);
    }

    /**
     * Gets as coborrower
     *
     * @return \mfteam\nbch\generated\models\CoborrowerRUTDFType[]
     */
    public function getCoborrower()
    {
        return $this->coborrower;
    }

    /**
     * Sets a new coborrower
     *
     * @param \mfteam\nbch\generated\models\CoborrowerRUTDFType[] $coborrower
     * @return self
     */
    public function setCoborrower(array $coborrower)
    {
        $this->coborrower = $coborrower;
        return $this;
    }

    /**
     * Adds as paymtCondition
     *
     * @return self
     * @param \mfteam\nbch\generated\models\PaymtConditionRUTDFType $paymtCondition
     */
    public function addToPaymtCondition(\mfteam\nbch\generated\models\PaymtConditionRUTDFType $paymtCondition)
    {
        $this->paymtCondition[] = $paymtCondition;
        return $this;
    }

    /**
     * isset paymtCondition
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymtCondition($index)
    {
        return isset($this->paymtCondition[$index]);
    }

    /**
     * unset paymtCondition
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymtCondition($index)
    {
        unset($this->paymtCondition[$index]);
    }

    /**
     * Gets as paymtCondition
     *
     * @return \mfteam\nbch\generated\models\PaymtConditionRUTDFType[]
     */
    public function getPaymtCondition()
    {
        return $this->paymtCondition;
    }

    /**
     * Sets a new paymtCondition
     *
     * @param \mfteam\nbch\generated\models\PaymtConditionRUTDFType[] $paymtCondition
     * @return self
     */
    public function setPaymtCondition(array $paymtCondition)
    {
        $this->paymtCondition = $paymtCondition;
        return $this;
    }

    /**
     * Adds as overallVal
     *
     * @return self
     * @param \mfteam\nbch\generated\models\OverallValRUTDFType $overallVal
     */
    public function addToOverallVal(\mfteam\nbch\generated\models\OverallValRUTDFType $overallVal)
    {
        $this->overallVal[] = $overallVal;
        return $this;
    }

    /**
     * isset overallVal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOverallVal($index)
    {
        return isset($this->overallVal[$index]);
    }

    /**
     * unset overallVal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOverallVal($index)
    {
        unset($this->overallVal[$index]);
    }

    /**
     * Gets as overallVal
     *
     * @return \mfteam\nbch\generated\models\OverallValRUTDFType[]
     */
    public function getOverallVal()
    {
        return $this->overallVal;
    }

    /**
     * Sets a new overallVal
     *
     * @param \mfteam\nbch\generated\models\OverallValRUTDFType[] $overallVal
     * @return self
     */
    public function setOverallVal(array $overallVal)
    {
        $this->overallVal = $overallVal;
        return $this;
    }

    /**
     * Adds as amendment
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AmendmentRUTDFType $amendment
     */
    public function addToAmendment(\mfteam\nbch\generated\models\AmendmentRUTDFType $amendment)
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
     * @return \mfteam\nbch\generated\models\AmendmentRUTDFType[]
     */
    public function getAmendment()
    {
        return $this->amendment;
    }

    /**
     * Sets a new amendment
     *
     * @param \mfteam\nbch\generated\models\AmendmentRUTDFType[] $amendment
     * @return self
     */
    public function setAmendment(array $amendment)
    {
        $this->amendment = $amendment;
        return $this;
    }

    /**
     * Gets as fundDate
     *
     * @return \DateTime
     */
    public function getFundDate()
    {
        return $this->fundDate;
    }

    /**
     * Sets a new fundDate
     *
     * @param \DateTime $fundDate
     * @return self
     */
    public function setFundDate(\DateTime $fundDate)
    {
        $this->fundDate = $fundDate;
        return $this;
    }

    /**
     * Adds as arrear
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ArrearRUTDFType $arrear
     */
    public function addToArrear(\mfteam\nbch\generated\models\ArrearRUTDFType $arrear)
    {
        $this->arrear[] = $arrear;
        return $this;
    }

    /**
     * isset arrear
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArrear($index)
    {
        return isset($this->arrear[$index]);
    }

    /**
     * unset arrear
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArrear($index)
    {
        unset($this->arrear[$index]);
    }

    /**
     * Gets as arrear
     *
     * @return \mfteam\nbch\generated\models\ArrearRUTDFType[]
     */
    public function getArrear()
    {
        return $this->arrear;
    }

    /**
     * Sets a new arrear
     *
     * @param \mfteam\nbch\generated\models\ArrearRUTDFType[] $arrear
     * @return self
     */
    public function setArrear(array $arrear)
    {
        $this->arrear = $arrear;
        return $this;
    }

    /**
     * Adds as dueArrear
     *
     * @return self
     * @param \mfteam\nbch\generated\models\DueArrearRUTDFType $dueArrear
     */
    public function addToDueArrear(\mfteam\nbch\generated\models\DueArrearRUTDFType $dueArrear)
    {
        $this->dueArrear[] = $dueArrear;
        return $this;
    }

    /**
     * isset dueArrear
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDueArrear($index)
    {
        return isset($this->dueArrear[$index]);
    }

    /**
     * unset dueArrear
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDueArrear($index)
    {
        unset($this->dueArrear[$index]);
    }

    /**
     * Gets as dueArrear
     *
     * @return \mfteam\nbch\generated\models\DueArrearRUTDFType[]
     */
    public function getDueArrear()
    {
        return $this->dueArrear;
    }

    /**
     * Sets a new dueArrear
     *
     * @param \mfteam\nbch\generated\models\DueArrearRUTDFType[] $dueArrear
     * @return self
     */
    public function setDueArrear(array $dueArrear)
    {
        $this->dueArrear = $dueArrear;
        return $this;
    }

    /**
     * Adds as pastdueArrear
     *
     * @return self
     * @param \mfteam\nbch\generated\models\PastdueArrearRUTDFType $pastdueArrear
     */
    public function addToPastdueArrear(\mfteam\nbch\generated\models\PastdueArrearRUTDFType $pastdueArrear)
    {
        $this->pastdueArrear[] = $pastdueArrear;
        return $this;
    }

    /**
     * isset pastdueArrear
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPastdueArrear($index)
    {
        return isset($this->pastdueArrear[$index]);
    }

    /**
     * unset pastdueArrear
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPastdueArrear($index)
    {
        unset($this->pastdueArrear[$index]);
    }

    /**
     * Gets as pastdueArrear
     *
     * @return \mfteam\nbch\generated\models\PastdueArrearRUTDFType[]
     */
    public function getPastdueArrear()
    {
        return $this->pastdueArrear;
    }

    /**
     * Sets a new pastdueArrear
     *
     * @param \mfteam\nbch\generated\models\PastdueArrearRUTDFType[] $pastdueArrear
     * @return self
     */
    public function setPastdueArrear(array $pastdueArrear)
    {
        $this->pastdueArrear = $pastdueArrear;
        return $this;
    }

    /**
     * Adds as payment
     *
     * @return self
     * @param \mfteam\nbch\generated\models\PaymentRUTDFType $payment
     */
    public function addToPayment(\mfteam\nbch\generated\models\PaymentRUTDFType $payment)
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
     * @return \mfteam\nbch\generated\models\PaymentRUTDFType[]
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * @param \mfteam\nbch\generated\models\PaymentRUTDFType[] $payment
     * @return self
     */
    public function setPayment(array $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Adds as monthAverPaymt
     *
     * @return self
     * @param \mfteam\nbch\generated\models\MonthAverPaymtRUTDFType $monthAverPaymt
     */
    public function addToMonthAverPaymt(\mfteam\nbch\generated\models\MonthAverPaymtRUTDFType $monthAverPaymt)
    {
        $this->monthAverPaymt[] = $monthAverPaymt;
        return $this;
    }

    /**
     * isset monthAverPaymt
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMonthAverPaymt($index)
    {
        return isset($this->monthAverPaymt[$index]);
    }

    /**
     * unset monthAverPaymt
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMonthAverPaymt($index)
    {
        unset($this->monthAverPaymt[$index]);
    }

    /**
     * Gets as monthAverPaymt
     *
     * @return \mfteam\nbch\generated\models\MonthAverPaymtRUTDFType[]
     */
    public function getMonthAverPaymt()
    {
        return $this->monthAverPaymt;
    }

    /**
     * Sets a new monthAverPaymt
     *
     * @param \mfteam\nbch\generated\models\MonthAverPaymtRUTDFType[] $monthAverPaymt
     * @return self
     */
    public function setMonthAverPaymt(array $monthAverPaymt)
    {
        $this->monthAverPaymt = $monthAverPaymt;
        return $this;
    }

    /**
     * Adds as sourceNonMonetOblig
     *
     * @return self
     * @param \mfteam\nbch\generated\models\SourceNonMonetObligRUTDFType $sourceNonMonetOblig
     */
    public function addToSourceNonMonetOblig(\mfteam\nbch\generated\models\SourceNonMonetObligRUTDFType $sourceNonMonetOblig)
    {
        $this->sourceNonMonetOblig[] = $sourceNonMonetOblig;
        return $this;
    }

    /**
     * isset sourceNonMonetOblig
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSourceNonMonetOblig($index)
    {
        return isset($this->sourceNonMonetOblig[$index]);
    }

    /**
     * unset sourceNonMonetOblig
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSourceNonMonetOblig($index)
    {
        unset($this->sourceNonMonetOblig[$index]);
    }

    /**
     * Gets as sourceNonMonetOblig
     *
     * @return \mfteam\nbch\generated\models\SourceNonMonetObligRUTDFType[]
     */
    public function getSourceNonMonetOblig()
    {
        return $this->sourceNonMonetOblig;
    }

    /**
     * Sets a new sourceNonMonetOblig
     *
     * @param \mfteam\nbch\generated\models\SourceNonMonetObligRUTDFType[] $sourceNonMonetOblig
     * @return self
     */
    public function setSourceNonMonetOblig(array $sourceNonMonetOblig)
    {
        $this->sourceNonMonetOblig = $sourceNonMonetOblig;
        return $this;
    }

    /**
     * Adds as subjectNonMonetOblig
     *
     * @return self
     * @param \mfteam\nbch\generated\models\SubjectNonMonetObligRUTDFType $subjectNonMonetOblig
     */
    public function addToSubjectNonMonetOblig(\mfteam\nbch\generated\models\SubjectNonMonetObligRUTDFType $subjectNonMonetOblig)
    {
        $this->subjectNonMonetOblig[] = $subjectNonMonetOblig;
        return $this;
    }

    /**
     * isset subjectNonMonetOblig
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubjectNonMonetOblig($index)
    {
        return isset($this->subjectNonMonetOblig[$index]);
    }

    /**
     * unset subjectNonMonetOblig
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubjectNonMonetOblig($index)
    {
        unset($this->subjectNonMonetOblig[$index]);
    }

    /**
     * Gets as subjectNonMonetOblig
     *
     * @return \mfteam\nbch\generated\models\SubjectNonMonetObligRUTDFType[]
     */
    public function getSubjectNonMonetOblig()
    {
        return $this->subjectNonMonetOblig;
    }

    /**
     * Sets a new subjectNonMonetOblig
     *
     * @param \mfteam\nbch\generated\models\SubjectNonMonetObligRUTDFType[] $subjectNonMonetOblig
     * @return self
     */
    public function setSubjectNonMonetOblig(array $subjectNonMonetOblig)
    {
        $this->subjectNonMonetOblig = $subjectNonMonetOblig;
        return $this;
    }

    /**
     * Adds as collateral
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CollateralRUTDFType $collateral
     */
    public function addToCollateral(\mfteam\nbch\generated\models\CollateralRUTDFType $collateral)
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
     * @return \mfteam\nbch\generated\models\CollateralRUTDFType[]
     */
    public function getCollateral()
    {
        return $this->collateral;
    }

    /**
     * Sets a new collateral
     *
     * @param \mfteam\nbch\generated\models\CollateralRUTDFType[] $collateral
     * @return self
     */
    public function setCollateral(array $collateral)
    {
        $this->collateral = $collateral;
        return $this;
    }

    /**
     * Adds as guarantor
     *
     * @return self
     * @param \mfteam\nbch\generated\models\GuarantorRUTDFType $guarantor
     */
    public function addToGuarantor(\mfteam\nbch\generated\models\GuarantorRUTDFType $guarantor)
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
     * @return \mfteam\nbch\generated\models\GuarantorRUTDFType[]
     */
    public function getGuarantor()
    {
        return $this->guarantor;
    }

    /**
     * Sets a new guarantor
     *
     * @param \mfteam\nbch\generated\models\GuarantorRUTDFType[] $guarantor
     * @return self
     */
    public function setGuarantor(array $guarantor)
    {
        $this->guarantor = $guarantor;
        return $this;
    }

    /**
     * Adds as indepGuarantor
     *
     * @return self
     * @param \mfteam\nbch\generated\models\IndepGuarantorRUTDFType $indepGuarantor
     */
    public function addToIndepGuarantor(\mfteam\nbch\generated\models\IndepGuarantorRUTDFType $indepGuarantor)
    {
        $this->indepGuarantor[] = $indepGuarantor;
        return $this;
    }

    /**
     * isset indepGuarantor
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndepGuarantor($index)
    {
        return isset($this->indepGuarantor[$index]);
    }

    /**
     * unset indepGuarantor
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndepGuarantor($index)
    {
        unset($this->indepGuarantor[$index]);
    }

    /**
     * Gets as indepGuarantor
     *
     * @return \mfteam\nbch\generated\models\IndepGuarantorRUTDFType[]
     */
    public function getIndepGuarantor()
    {
        return $this->indepGuarantor;
    }

    /**
     * Sets a new indepGuarantor
     *
     * @param \mfteam\nbch\generated\models\IndepGuarantorRUTDFType[] $indepGuarantor
     * @return self
     */
    public function setIndepGuarantor(array $indepGuarantor)
    {
        $this->indepGuarantor = $indepGuarantor;
        return $this;
    }

    /**
     * Adds as collatInsured
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CollatInsuredRUTDFType $collatInsured
     */
    public function addToCollatInsured(\mfteam\nbch\generated\models\CollatInsuredRUTDFType $collatInsured)
    {
        $this->collatInsured[] = $collatInsured;
        return $this;
    }

    /**
     * isset collatInsured
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollatInsured($index)
    {
        return isset($this->collatInsured[$index]);
    }

    /**
     * unset collatInsured
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollatInsured($index)
    {
        unset($this->collatInsured[$index]);
    }

    /**
     * Gets as collatInsured
     *
     * @return \mfteam\nbch\generated\models\CollatInsuredRUTDFType[]
     */
    public function getCollatInsured()
    {
        return $this->collatInsured;
    }

    /**
     * Sets a new collatInsured
     *
     * @param \mfteam\nbch\generated\models\CollatInsuredRUTDFType[] $collatInsured
     * @return self
     */
    public function setCollatInsured(array $collatInsured)
    {
        $this->collatInsured = $collatInsured;
        return $this;
    }

    /**
     * Adds as collatRepay
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CollatRepayRUTDFType $collatRepay
     */
    public function addToCollatRepay(\mfteam\nbch\generated\models\CollatRepayRUTDFType $collatRepay)
    {
        $this->collatRepay[] = $collatRepay;
        return $this;
    }

    /**
     * isset collatRepay
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollatRepay($index)
    {
        return isset($this->collatRepay[$index]);
    }

    /**
     * unset collatRepay
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollatRepay($index)
    {
        unset($this->collatRepay[$index]);
    }

    /**
     * Gets as collatRepay
     *
     * @return \mfteam\nbch\generated\models\CollatRepayRUTDFType[]
     */
    public function getCollatRepay()
    {
        return $this->collatRepay;
    }

    /**
     * Sets a new collatRepay
     *
     * @param \mfteam\nbch\generated\models\CollatRepayRUTDFType[] $collatRepay
     * @return self
     */
    public function setCollatRepay(array $collatRepay)
    {
        $this->collatRepay = $collatRepay;
        return $this;
    }

    /**
     * Gets as hasGuaranteeRepay
     *
     * @return int
     */
    public function getHasGuaranteeRepay()
    {
        return $this->hasGuaranteeRepay;
    }

    /**
     * Sets a new hasGuaranteeRepay
     *
     * @param int $hasGuaranteeRepay
     * @return self
     */
    public function setHasGuaranteeRepay($hasGuaranteeRepay)
    {
        $this->hasGuaranteeRepay = $hasGuaranteeRepay;
        return $this;
    }

    /**
     * Gets as guaranteeToRepay
     *
     * @return string
     */
    public function getGuaranteeToRepay()
    {
        return $this->guaranteeToRepay;
    }

    /**
     * Sets a new guaranteeToRepay
     *
     * @param string $guaranteeToRepay
     * @return self
     */
    public function setGuaranteeToRepay($guaranteeToRepay)
    {
        $this->guaranteeToRepay = $guaranteeToRepay;
        return $this;
    }

    /**
     * Gets as guaranteeRepayAmt
     *
     * @return string
     */
    public function getGuaranteeRepayAmt()
    {
        return $this->guaranteeRepayAmt;
    }

    /**
     * Sets a new guaranteeRepayAmt
     *
     * @param string $guaranteeRepayAmt
     * @return self
     */
    public function setGuaranteeRepayAmt($guaranteeRepayAmt)
    {
        $this->guaranteeRepayAmt = $guaranteeRepayAmt;
        return $this;
    }

    /**
     * Gets as guaranteeRepayKeepCode
     *
     * @return int
     */
    public function getGuaranteeRepayKeepCode()
    {
        return $this->guaranteeRepayKeepCode;
    }

    /**
     * Sets a new guaranteeRepayKeepCode
     *
     * @param int $guaranteeRepayKeepCode
     * @return self
     */
    public function setGuaranteeRepayKeepCode($guaranteeRepayKeepCode)
    {
        $this->guaranteeRepayKeepCode = $guaranteeRepayKeepCode;
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
     * Gets as loanIndicatorDt
     *
     * @return \DateTime
     */
    public function getLoanIndicatorDt()
    {
        return $this->loanIndicatorDt;
    }

    /**
     * Sets a new loanIndicatorDt
     *
     * @param \DateTime $loanIndicatorDt
     * @return self
     */
    public function setLoanIndicatorDt(\DateTime $loanIndicatorDt)
    {
        $this->loanIndicatorDt = $loanIndicatorDt;
        return $this;
    }

    /**
     * Adds as legalItems
     *
     * @return self
     * @param \mfteam\nbch\generated\models\LegalItemsRUTDFType $legalItems
     */
    public function addToLegalItems(\mfteam\nbch\generated\models\LegalItemsRUTDFType $legalItems)
    {
        $this->legalItems[] = $legalItems;
        return $this;
    }

    /**
     * isset legalItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLegalItems($index)
    {
        return isset($this->legalItems[$index]);
    }

    /**
     * unset legalItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLegalItems($index)
    {
        unset($this->legalItems[$index]);
    }

    /**
     * Gets as legalItems
     *
     * @return \mfteam\nbch\generated\models\LegalItemsRUTDFType[]
     */
    public function getLegalItems()
    {
        return $this->legalItems;
    }

    /**
     * Sets a new legalItems
     *
     * @param \mfteam\nbch\generated\models\LegalItemsRUTDFType[] $legalItems
     * @return self
     */
    public function setLegalItems(array $legalItems)
    {
        $this->legalItems = $legalItems;
        return $this;
    }

    /**
     * Gets as sbStartOutstanding
     *
     * @return string
     */
    public function getSbStartOutstanding()
    {
        return $this->sbStartOutstanding;
    }

    /**
     * Sets a new sbStartOutstanding
     *
     * @param string $sbStartOutstanding
     * @return self
     */
    public function setSbStartOutstanding($sbStartOutstanding)
    {
        $this->sbStartOutstanding = $sbStartOutstanding;
        return $this;
    }

    /**
     * Gets as sbStartDt
     *
     * @return \DateTime
     */
    public function getSbStartDt()
    {
        return $this->sbStartDt;
    }

    /**
     * Sets a new sbStartDt
     *
     * @param \DateTime $sbStartDt
     * @return self
     */
    public function setSbStartDt(\DateTime $sbStartDt)
    {
        $this->sbStartDt = $sbStartDt;
        return $this;
    }

    /**
     * Gets as sbEndOutstanding
     *
     * @return string
     */
    public function getSbEndOutstanding()
    {
        return $this->sbEndOutstanding;
    }

    /**
     * Sets a new sbEndOutstanding
     *
     * @param string $sbEndOutstanding
     * @return self
     */
    public function setSbEndOutstanding($sbEndOutstanding)
    {
        $this->sbEndOutstanding = $sbEndOutstanding;
        return $this;
    }

    /**
     * Gets as sbEndDt
     *
     * @return \DateTime
     */
    public function getSbEndDt()
    {
        return $this->sbEndDt;
    }

    /**
     * Sets a new sbEndDt
     *
     * @param \DateTime $sbEndDt
     * @return self
     */
    public function setSbEndDt(\DateTime $sbEndDt)
    {
        $this->sbEndDt = $sbEndDt;
        return $this;
    }

    /**
     * Gets as sbLastPayOutstanding
     *
     * @return string
     */
    public function getSbLastPayOutstanding()
    {
        return $this->sbLastPayOutstanding;
    }

    /**
     * Sets a new sbLastPayOutstanding
     *
     * @param string $sbLastPayOutstanding
     * @return self
     */
    public function setSbLastPayOutstanding($sbLastPayOutstanding)
    {
        $this->sbLastPayOutstanding = $sbLastPayOutstanding;
        return $this;
    }

    /**
     * Gets as sbLastPaymtDt
     *
     * @return \DateTime
     */
    public function getSbLastPaymtDt()
    {
        return $this->sbLastPaymtDt;
    }

    /**
     * Sets a new sbLastPaymtDt
     *
     * @param \DateTime $sbLastPaymtDt
     * @return self
     */
    public function setSbLastPaymtDt(\DateTime $sbLastPaymtDt)
    {
        $this->sbLastPaymtDt = $sbLastPaymtDt;
        return $this;
    }

    /**
     * Gets as sbTransferCode
     *
     * @return int
     */
    public function getSbTransferCode()
    {
        return $this->sbTransferCode;
    }

    /**
     * Sets a new sbTransferCode
     *
     * @param int $sbTransferCode
     * @return self
     */
    public function setSbTransferCode($sbTransferCode)
    {
        $this->sbTransferCode = $sbTransferCode;
        return $this;
    }

    /**
     * Gets as sbLoanIndicator
     *
     * @return int
     */
    public function getSbLoanIndicator()
    {
        return $this->sbLoanIndicator;
    }

    /**
     * Sets a new sbLoanIndicator
     *
     * @param int $sbLoanIndicator
     * @return self
     */
    public function setSbLoanIndicator($sbLoanIndicator)
    {
        $this->sbLoanIndicator = $sbLoanIndicator;
        return $this;
    }

    /**
     * Gets as sbLoanIndicatorReason
     *
     * @return string
     */
    public function getSbLoanIndicatorReason()
    {
        return $this->sbLoanIndicatorReason;
    }

    /**
     * Sets a new sbLoanIndicatorReason
     *
     * @param string $sbLoanIndicatorReason
     * @return self
     */
    public function setSbLoanIndicatorReason($sbLoanIndicatorReason)
    {
        $this->sbLoanIndicatorReason = $sbLoanIndicatorReason;
        return $this;
    }

    /**
     * Gets as slStartOutstanding
     *
     * @return string
     */
    public function getSlStartOutstanding()
    {
        return $this->slStartOutstanding;
    }

    /**
     * Sets a new slStartOutstanding
     *
     * @param string $slStartOutstanding
     * @return self
     */
    public function setSlStartOutstanding($slStartOutstanding)
    {
        $this->slStartOutstanding = $slStartOutstanding;
        return $this;
    }

    /**
     * Gets as slStartDt
     *
     * @return \DateTime
     */
    public function getSlStartDt()
    {
        return $this->slStartDt;
    }

    /**
     * Sets a new slStartDt
     *
     * @param \DateTime $slStartDt
     * @return self
     */
    public function setSlStartDt(\DateTime $slStartDt)
    {
        $this->slStartDt = $slStartDt;
        return $this;
    }

    /**
     * Gets as slBalanceOutstanding
     *
     * @return string
     */
    public function getSlBalanceOutstanding()
    {
        return $this->slBalanceOutstanding;
    }

    /**
     * Sets a new slBalanceOutstanding
     *
     * @param string $slBalanceOutstanding
     * @return self
     */
    public function setSlBalanceOutstanding($slBalanceOutstanding)
    {
        $this->slBalanceOutstanding = $slBalanceOutstanding;
        return $this;
    }

    /**
     * Gets as slBalanceDt
     *
     * @return \DateTime
     */
    public function getSlBalanceDt()
    {
        return $this->slBalanceDt;
    }

    /**
     * Sets a new slBalanceDt
     *
     * @param \DateTime $slBalanceDt
     * @return self
     */
    public function setSlBalanceDt(\DateTime $slBalanceDt)
    {
        $this->slBalanceDt = $slBalanceDt;
        return $this;
    }

    /**
     * Gets as slLastPayOutstanding
     *
     * @return string
     */
    public function getSlLastPayOutstanding()
    {
        return $this->slLastPayOutstanding;
    }

    /**
     * Sets a new slLastPayOutstanding
     *
     * @param string $slLastPayOutstanding
     * @return self
     */
    public function setSlLastPayOutstanding($slLastPayOutstanding)
    {
        $this->slLastPayOutstanding = $slLastPayOutstanding;
        return $this;
    }

    /**
     * Gets as slLastPaymtDt
     *
     * @return \DateTime
     */
    public function getSlLastPaymtDt()
    {
        return $this->slLastPaymtDt;
    }

    /**
     * Sets a new slLastPaymtDt
     *
     * @param \DateTime $slLastPaymtDt
     * @return self
     */
    public function setSlLastPaymtDt(\DateTime $slLastPaymtDt)
    {
        $this->slLastPaymtDt = $slLastPaymtDt;
        return $this;
    }

    /**
     * Gets as slTransferCode
     *
     * @return int
     */
    public function getSlTransferCode()
    {
        return $this->slTransferCode;
    }

    /**
     * Sets a new slTransferCode
     *
     * @param int $slTransferCode
     * @return self
     */
    public function setSlTransferCode($slTransferCode)
    {
        $this->slTransferCode = $slTransferCode;
        return $this;
    }

    /**
     * Gets as slLoanIndicator
     *
     * @return int
     */
    public function getSlLoanIndicator()
    {
        return $this->slLoanIndicator;
    }

    /**
     * Sets a new slLoanIndicator
     *
     * @param int $slLoanIndicator
     * @return self
     */
    public function setSlLoanIndicator($slLoanIndicator)
    {
        $this->slLoanIndicator = $slLoanIndicator;
        return $this;
    }

    /**
     * Gets as slLoanIndicatorReason
     *
     * @return string
     */
    public function getSlLoanIndicatorReason()
    {
        return $this->slLoanIndicatorReason;
    }

    /**
     * Sets a new slLoanIndicatorReason
     *
     * @param string $slLoanIndicatorReason
     * @return self
     */
    public function setSlLoanIndicatorReason($slLoanIndicatorReason)
    {
        $this->slLoanIndicatorReason = $slLoanIndicatorReason;
        return $this;
    }

    /**
     * Adds as submitHold
     *
     * @return self
     * @param \mfteam\nbch\generated\models\SubmitHoldRUTDFType $submitHold
     */
    public function addToSubmitHold(\mfteam\nbch\generated\models\SubmitHoldRUTDFType $submitHold)
    {
        $this->submitHold[] = $submitHold;
        return $this;
    }

    /**
     * isset submitHold
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubmitHold($index)
    {
        return isset($this->submitHold[$index]);
    }

    /**
     * unset submitHold
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubmitHold($index)
    {
        unset($this->submitHold[$index]);
    }

    /**
     * Gets as submitHold
     *
     * @return \mfteam\nbch\generated\models\SubmitHoldRUTDFType[]
     */
    public function getSubmitHold()
    {
        return $this->submitHold;
    }

    /**
     * Sets a new submitHold
     *
     * @param \mfteam\nbch\generated\models\SubmitHoldRUTDFType[] $submitHold
     * @return self
     */
    public function setSubmitHold(array $submitHold)
    {
        $this->submitHold = $submitHold;
        return $this;
    }

    /**
     * Adds as sourceLegal
     *
     * @return self
     * @param \mfteam\nbch\generated\models\SourceLegalRUTDFType $sourceLegal
     */
    public function addToSourceLegal(\mfteam\nbch\generated\models\SourceLegalRUTDFType $sourceLegal)
    {
        $this->sourceLegal[] = $sourceLegal;
        return $this;
    }

    /**
     * isset sourceLegal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSourceLegal($index)
    {
        return isset($this->sourceLegal[$index]);
    }

    /**
     * unset sourceLegal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSourceLegal($index)
    {
        unset($this->sourceLegal[$index]);
    }

    /**
     * Gets as sourceLegal
     *
     * @return \mfteam\nbch\generated\models\SourceLegalRUTDFType[]
     */
    public function getSourceLegal()
    {
        return $this->sourceLegal;
    }

    /**
     * Sets a new sourceLegal
     *
     * @param \mfteam\nbch\generated\models\SourceLegalRUTDFType[] $sourceLegal
     * @return self
     */
    public function setSourceLegal(array $sourceLegal)
    {
        $this->sourceLegal = $sourceLegal;
        return $this;
    }

    /**
     * Adds as sourceIndivid
     *
     * @return self
     * @param \mfteam\nbch\generated\models\SourceIndividRUTDFType $sourceIndivid
     */
    public function addToSourceIndivid(\mfteam\nbch\generated\models\SourceIndividRUTDFType $sourceIndivid)
    {
        $this->sourceIndivid[] = $sourceIndivid;
        return $this;
    }

    /**
     * isset sourceIndivid
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSourceIndivid($index)
    {
        return isset($this->sourceIndivid[$index]);
    }

    /**
     * unset sourceIndivid
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSourceIndivid($index)
    {
        unset($this->sourceIndivid[$index]);
    }

    /**
     * Gets as sourceIndivid
     *
     * @return \mfteam\nbch\generated\models\SourceIndividRUTDFType[]
     */
    public function getSourceIndivid()
    {
        return $this->sourceIndivid;
    }

    /**
     * Sets a new sourceIndivid
     *
     * @param \mfteam\nbch\generated\models\SourceIndividRUTDFType[] $sourceIndivid
     * @return self
     */
    public function setSourceIndivid(array $sourceIndivid)
    {
        $this->sourceIndivid = $sourceIndivid;
        return $this;
    }

    /**
     * Adds as sourceBComm
     *
     * @return self
     * @param \mfteam\nbch\generated\models\SourceBCommRUTDFType $sourceBComm
     */
    public function addToSourceBComm(\mfteam\nbch\generated\models\SourceBCommRUTDFType $sourceBComm)
    {
        $this->sourceBComm[] = $sourceBComm;
        return $this;
    }

    /**
     * isset sourceBComm
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSourceBComm($index)
    {
        return isset($this->sourceBComm[$index]);
    }

    /**
     * unset sourceBComm
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSourceBComm($index)
    {
        unset($this->sourceBComm[$index]);
    }

    /**
     * Gets as sourceBComm
     *
     * @return \mfteam\nbch\generated\models\SourceBCommRUTDFType[]
     */
    public function getSourceBComm()
    {
        return $this->sourceBComm;
    }

    /**
     * Sets a new sourceBComm
     *
     * @param \mfteam\nbch\generated\models\SourceBCommRUTDFType[] $sourceBComm
     * @return self
     */
    public function setSourceBComm(array $sourceBComm)
    {
        $this->sourceBComm = $sourceBComm;
        return $this;
    }

    /**
     * Adds as acquirerLegal
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AcquirerLegalRUTDFType $acquirerLegal
     */
    public function addToAcquirerLegal(\mfteam\nbch\generated\models\AcquirerLegalRUTDFType $acquirerLegal)
    {
        $this->acquirerLegal[] = $acquirerLegal;
        return $this;
    }

    /**
     * isset acquirerLegal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcquirerLegal($index)
    {
        return isset($this->acquirerLegal[$index]);
    }

    /**
     * unset acquirerLegal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcquirerLegal($index)
    {
        unset($this->acquirerLegal[$index]);
    }

    /**
     * Gets as acquirerLegal
     *
     * @return \mfteam\nbch\generated\models\AcquirerLegalRUTDFType[]
     */
    public function getAcquirerLegal()
    {
        return $this->acquirerLegal;
    }

    /**
     * Sets a new acquirerLegal
     *
     * @param \mfteam\nbch\generated\models\AcquirerLegalRUTDFType[] $acquirerLegal
     * @return self
     */
    public function setAcquirerLegal(array $acquirerLegal)
    {
        $this->acquirerLegal = $acquirerLegal;
        return $this;
    }

    /**
     * Adds as acquirerIndivid
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AcquirerIndividRUTDFType $acquirerIndivid
     */
    public function addToAcquirerIndivid(\mfteam\nbch\generated\models\AcquirerIndividRUTDFType $acquirerIndivid)
    {
        $this->acquirerIndivid[] = $acquirerIndivid;
        return $this;
    }

    /**
     * isset acquirerIndivid
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcquirerIndivid($index)
    {
        return isset($this->acquirerIndivid[$index]);
    }

    /**
     * unset acquirerIndivid
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcquirerIndivid($index)
    {
        unset($this->acquirerIndivid[$index]);
    }

    /**
     * Gets as acquirerIndivid
     *
     * @return \mfteam\nbch\generated\models\AcquirerIndividRUTDFType[]
     */
    public function getAcquirerIndivid()
    {
        return $this->acquirerIndivid;
    }

    /**
     * Sets a new acquirerIndivid
     *
     * @param \mfteam\nbch\generated\models\AcquirerIndividRUTDFType[] $acquirerIndivid
     * @return self
     */
    public function setAcquirerIndivid(array $acquirerIndivid)
    {
        $this->acquirerIndivid = $acquirerIndivid;
        return $this;
    }

    /**
     * Adds as serviceCo
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ServiceCoRUTDFType $serviceCo
     */
    public function addToServiceCo(\mfteam\nbch\generated\models\ServiceCoRUTDFType $serviceCo)
    {
        $this->serviceCo[] = $serviceCo;
        return $this;
    }

    /**
     * isset serviceCo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceCo($index)
    {
        return isset($this->serviceCo[$index]);
    }

    /**
     * unset serviceCo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceCo($index)
    {
        unset($this->serviceCo[$index]);
    }

    /**
     * Gets as serviceCo
     *
     * @return \mfteam\nbch\generated\models\ServiceCoRUTDFType[]
     */
    public function getServiceCo()
    {
        return $this->serviceCo;
    }

    /**
     * Sets a new serviceCo
     *
     * @param \mfteam\nbch\generated\models\ServiceCoRUTDFType[] $serviceCo
     * @return self
     */
    public function setServiceCo(array $serviceCo)
    {
        $this->serviceCo = $serviceCo;
        return $this;
    }

    /**
     * Gets as obligAccountCode
     *
     * @return int
     */
    public function getObligAccountCode()
    {
        return $this->obligAccountCode;
    }

    /**
     * Sets a new obligAccountCode
     *
     * @param int $obligAccountCode
     * @return self
     */
    public function setObligAccountCode($obligAccountCode)
    {
        $this->obligAccountCode = $obligAccountCode;
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

