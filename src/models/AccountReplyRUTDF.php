<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Данные о кредитах, полученные в формате RUTDF
 */
class AccountReplyRUTDF extends Account
{
    /**
     * @var TradeRUTDF[]
     */
    private $trade = [];
    /**
     * @var AccountAmtRUTDF[]
     */
    private $accountAmt = [];
    
    /**
     * @var CoborrowerRUTDF[]
     */
    private $coborrower = [];
    
    /**
     * @var PaymtConditionRUTDF[]
     */
    private $paymtCondition = [];
    
    /**
     * @var OverallValRUTDF[] $overallVal
     */
    private $overallVal = [];
    
    /**
     * @var string $fundDate
     */
    public $fundDate = null;
    
    /**
     * @var ArrearRUTDF[] $arrear
     */
    private $arrear = [];
    
    /**
     * @var DueArrearRUTDF[] $dueArrear
     */
    private $dueArrear = [];
    
    /**
     * @var PastdueArrearRUTDF[] $pastdueArrear
     */
    private $pastdueArrear = [];
    
    /**
     * @var SourceNonMonetObligRUTDF[] $sourceNonMonetOblig
     */
    private $sourceNonMonetOblig = [];
    
    /**
     * @var SubjectNonMonetObligRUTDF[] $subjectNonMonetOblig
     */
    private $subjectNonMonetOblig = [];
    
    /**
     * @var IndepGuarantorRUTDF[] $indepGuarantor
     */
    private $indepGuarantor = [];
    
    /**
     * @var CollatInsuredRUTDF[] $collatInsured
     */
    private $collatInsured = [];
    
    /**
     * @var CollatRepayRUTDF[] $collatRepay
     */
    private $collatRepay = [];
    
    /**
     * @var int $hasGuaranteeRepay
     */
    public $hasGuaranteeRepay = null;
    
    /**
     * @var string $guaranteeToRepay
     */
    public $guaranteeToRepay = null;
    
    /**
     * @var string $guaranteeRepayAmt
     */
    public $guaranteeRepayAmt = null;
    
    /**
     * @var int $guaranteeRepayKeepCode
     */
    public $guaranteeRepayKeepCode = null;
    
    /**
     * @var int $loanIndicator
     */
    public $loanIndicator = null;
    
    /**
     * @var string $loanIndicatorDt
     */
    public $loanIndicatorDt = null;
    
    /**
     * @var LegalItemsRUTDF[] $legalItems
     */
    private $legalItems = [];
    
    /**
     * @var string $sbStartOutstanding
     */
    public $sbStartOutstanding = null;
    
    /**
     * @var string $sbStartDt
     */
    public $sbStartDt = null;
    
    /**
     * @var string $sbEndOutstanding
     */
    public $sbEndOutstanding = null;
    
    /**
     * @var string $sbEndDt
     */
    public $sbEndDt = null;
    
    /**
     * @var string $sbLastPayOutstanding
     */
    public $sbLastPayOutstanding = null;
    
    /**
     * @var string $sbLastPaymtDt
     */
    public $sbLastPaymtDt = null;
    
    /**
     * @var int $sbTransferCode
     */
    public $sbTransferCode = null;
    
    /**
     * @var int $sbLoanIndicator
     */
    public $sbLoanIndicator = null;
    
    /**
     * @var string $sbLoanIndicatorReason
     */
    public $sbLoanIndicatorReason = null;
    
    /**
     * @var string $slStartOutstanding
     */
    public $slStartOutstanding = null;
    
    /**
     * @var string $slStartDt
     */
    public $slStartDt = null;
    
    /**
     * @var string $slBalanceOutstanding
     */
    public $slBalanceOutstanding = null;
    
    /**
     * @var string $slBalanceDt
     */
    public $slBalanceDt = null;
    
    /**
     * @var string $slLastPayOutstanding
     */
    public $slLastPayOutstanding = null;
    
    /**
     * @var string $slLastPaymtDt
     */
    public $slLastPaymtDt = null;
    
    /**
     * @var int $slTransferCode
     */
    public $slTransferCode = null;
    
    /**
     * @var int $slLoanIndicator
     */
    public $slLoanIndicator = null;
    
    /**
     * @var string $slLoanIndicatorReason
     */
    public $slLoanIndicatorReason = null;
    
    /**
     * @var AcquirerLegalRUTDF[] $acquirerLegal
     */
    private $acquirerLegal = [];
    
    /**
     * @var AcquirerIndividRUTDF[] $acquirerIndivid
     */
    private $acquirerIndivid = [];
    
    /**
     * @var int $obligAccountCode
     */
    public $obligAccountCode = null;
    
    /**
     * @var SubmitHoldRUTDF[]
     */
    private $submitHold = [];
    
    /**
     * @var MonthAverPaymtRUTDF[]
     */
    private $monthAverPaymt = [];
    
    /**
     * @var null|string
     */
    public $headerReportingDt = null;
    
    /**
     * @return TradeRUTDF[]
     */
    public function getTrade(): array
    {
        return $this->trade;
    }
    
    /**
     * @param array $trade
     */
    public function setTrade(array $tradeData): void
    {
        $this->trade = $this->initPropertyModels($tradeData, TradeRUTDF::class);
    }
    
    /**
     * @return AccountAmtRUTDF[]|null
     */
    public function getAccountAmt(): ?array
    {
        return $this->accountAmt;
    }
    
    /**
     * @param array $accountAmt
     */
    public function setAccountAmt(array $accountAmtData): void
    {
        $this->accountAmt = $this->initPropertyModels($accountAmtData, AccountAmtRUTDF::class);
    }
    
    /**
     * @return CoborrowerRUTDF[]
     */
    public function getCoborrower(): array
    {
        return $this->coborrower;
    }
    
    /**
     * @param array $coborrower
     */
    public function setCoborrower(array $coborrowerData): void
    {
        $this->coborrower = $this->initPropertyModels($coborrowerData, CoborrowerRUTDF::class);
    }
    
    /**
     * @return PaymtConditionRUTDF[]
     */
    public function getPaymtCondition(): array
    {
        return $this->paymtCondition;
    }
    
    /**
     * @param array $paymtCondition
     */
    public function setPaymtCondition(array $paymtCondition): void
    {
        $this->paymtCondition = $this->initPropertyModels($paymtCondition, PaymtConditionRUTDF::class);
    }
    
    /**
     * @return OverallValRUTDF[]
     */
    public function getOverallVal(): array
    {
        return $this->overallVal;
    }
    
    /**
     * @param array $overallVal
     */
    public function setOverallVal(array $overallVal): void
    {
        $this->overallVal = $this->initPropertyModels($overallVal, OverallValRUTDF::class);
    }
    
    /**
     * @return AcquirerLegalRUTDF[]
     */
    public function getAcquirerLegal(): array
    {
        return $this->acquirerLegal;
    }
    
    /**
     * @param array $acquirerLegal
     */
    public function setAcquirerLegal(array $acquirerLegal): void
    {
        $this->acquirerLegal = $this->initPropertyModels($acquirerLegal, AcquirerLegalRUTDF::class);
    }
    
    /**
     * @return AcquirerIndividRUTDF[]
     */
    public function getAcquirerIndivid(): array
    {
        return $this->acquirerIndivid;
    }
    
    /**
     * @param array $acquirerIndivid
     */
    public function setAcquirerIndivid(array $acquirerIndivid): void
    {
        $this->acquirerIndivid = $this->initPropertyModels($acquirerIndivid, AcquirerIndividRUTDF::class);
    }
    
    /**
     * @return ArrearRUTDF[]
     */
    public function getArrear(): array
    {
        return $this->arrear;
    }
    
    /**
     * @param array $arrear
     */
    public function setArrear(array $arrear): void
    {
        $this->arrear = $this->initPropertyModels($arrear, ArrearRUTDF::class);
    }
    
    /**
     * @return DueArrearRUTDF[]
     */
    public function getDueArrear(): array
    {
        return $this->dueArrear;
    }
    
    /**
     * @param array $dueArrear
     */
    public function setDueArrear(array $dueArrear): void
    {
        $this->dueArrear = $this->initPropertyModels($dueArrear, DueArrearRUTDF::class);
    }
    
    /**
     * @return PastdueArrearRUTDF[]
     */
    public function getPastdueArrear(): array
    {
        return $this->pastdueArrear;
    }
    
    /**
     * @param array $pastdueArrear
     */
    public function setPastdueArrear(array $pastdueArrear): void
    {
        $this->pastdueArrear = $this->initPropertyModels($pastdueArrear, PastdueArrearRUTDF::class);
    }
    
    /**
     * @return SourceNonMonetObligRUTDF[]
     */
    public function getSourceNonMonetOblig(): array
    {
        return $this->sourceNonMonetOblig;
    }
    
    /**
     * @param array $sourceNonMonetOblig
     */
    public function setSourceNonMonetOblig(array $sourceNonMonetOblig): void
    {
        $this->sourceNonMonetOblig = $this->initPropertyModels($sourceNonMonetOblig, SourceNonMonetObligRUTDF::class);
    }
    
    /**
     * @return SubjectNonMonetObligRUTDF[]
     */
    public function getSubjectNonMonetOblig(): array
    {
        return $this->subjectNonMonetOblig;
    }
    
    /**
     * @param array $subjectNonMonetOblig
     */
    public function setSubjectNonMonetOblig(array $subjectNonMonetOblig): void
    {
        $this->subjectNonMonetOblig = $this->initPropertyModels($subjectNonMonetOblig, SubjectNonMonetObligRUTDF::class);
    }
    
    /**
     * @return IndepGuarantorRUTDF[]
     */
    public function getIndepGuarantor(): array
    {
        return $this->indepGuarantor;
    }
    
    /**
     * @param array $indepGuarantor
     */
    public function setIndepGuarantor(array $indepGuarantor): void
    {
        $this->indepGuarantor = $this->initPropertyModels($indepGuarantor, IndepGuarantorRUTDF::class);
    }
    
    /**
     * @return CollatInsuredRUTDF[]
     */
    public function getCollatInsured(): array
    {
        return $this->collatInsured;
    }
    
    /**
     * @param array $collatInsured
     */
    public function setCollatInsured(array $collatInsured): void
    {
        $this->collatInsured = $this->initPropertyModels($collatInsured, CollatInsuredRUTDF::class);
    }
    
    /**
     * @return CollatRepayRUTDF[]
     */
    public function getCollatRepay(): array
    {
        return $this->collatRepay;
    }
    
    /**
     * @param array $collatRepay
     */
    public function setCollatRepay(array $collatRepay): void
    {
        $this->collatRepay = $this->initPropertyModels($collatRepay, CollatRepayRUTDF::class);
    }
    
    /**
     * @return LegalItemsRUTDF[]
     */
    public function getLegalItems(): array
    {
        return $this->legalItems;
    }
    
    /**
     * @param array $legalItems
     */
    public function setLegalItems(array $legalItems): void
    {
        $this->legalItems = $this->initPropertyModels($legalItems, LegalItemsRUTDF::class);
    }
    
    /**
     * @return SubmitHoldRUTDF[]
     */
    public function getSubmitHold(): array
    {
        return $this->submitHold;
    }
    
    /**
     * @param array $submitHold
     */
    public function setSubmitHold(array $submitHold): void
    {
        $this->submitHold = $this->initPropertyModels($submitHold, SubmitHoldRUTDF::class);
    }
    
    /**
     * @return MonthAverPaymtRUTDF[]
     */
    public function getMonthAverPaymt(): array
    {
        return $this->monthAverPaymt;
    }
    
    /**
     * @param array $monthAverPaymt
     */
    public function setMonthAverPaymt(array $monthAverPaymt): void
    {
        $this->monthAverPaymt = $this->initPropertyModels($monthAverPaymt, MonthAverPaymtRUTDF::class);
    }
}