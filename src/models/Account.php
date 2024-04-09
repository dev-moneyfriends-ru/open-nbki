<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

abstract class Account extends BaseItem
{
    
    /**
     * Дата формирования кредитной информации. Дата составления документа, содержащего кредитную информацию, из блока HEADER.
     * @var string
     */
    public $headerReportingDt = '';
    
    /**
     * @var string $sbStartOutstanding
     */
    public $sbStartOutstanding = '';
    
    /**
     * @var string $sbStartDt
     */
    public $sbStartDt = '';
    
    /**
     * @var string $sbEndOutstanding
     */
    public $sbEndOutstanding = '';
    
    /**
     * @var string $sbEndDt
     */
    public $sbEndDt = '';
    
    /**
     * @var string $sbLastPayOutstanding
     */
    public $sbLastPayOutstanding = '';
    
    /**
     * @var string $sbLastPaymtDt
     */
    public $sbLastPaymtDt = '';
    
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
    public $sbLoanIndicatorReason = '';
    
    /**
     * @var string $sbArrCurrency
     */
    public $sbArrCurrency = '';
    
    /**
     * @var string $slStartOutstanding
     */
    public $slStartOutstanding = '';
    
    /**
     * @var string $slStartDt
     */
    public $slStartDt = '';
    
    /**
     * @var string $slBalanceOutstanding
     */
    public $slBalanceOutstanding = '';
    
    /**
     * @var string $slBalanceDt
     */
    public $slBalanceDt = '';
    
    /**
     * @var string $slLastPayOutstanding
     */
    public $slLastPayOutstanding = '';
    
    /**
     * @var string $slLastPaymtDt
     */
    public $slLastPaymtDt = '';
    
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
    public $slLoanIndicatorReason = '';
    
    /**
     * @var string $slArrCurrency
     */
    public $slArrCurrency = '';
    
    /**
     * @var AcquirerLegalRUTDF[] $acquirerLegal
     */
    public $acquirerLegal = [];
    
    /**
     * @var AcquirerIndividRUTDF[] $acquirerIndivid
     */
    public $acquirerIndivid = [];
    
    /**
     * @var ServiceCoRUTDF[] $serviceCo
     */
    public $serviceCo = [];
    
    /**
     * @var string $partnerRegDate
     */
    public $partnerRegDate = '';
    
    /**
     * @var int $memberTypeCode
     */
    public $memberTypeCode = null;
    
    /**
     * @var int $memberRus
     */
    public $memberRus = null;
    
    /**
     * @var string $memberFullName
     */
    public $memberFullName = '';
    
    /**
     * @var string $memberShortName
     */
    public $memberShortName = '';
    
    /**
     * @var string $memberOtherName
     */
    public $memberOtherName = '';
    
    /**
     * @var string $memberLEI
     */
    public $memberLEI = '';
    
    /**
     * @var string $memberStartDt
     */
    public $memberStartDt = '';
    
    /**
     * @var string $memberLastName
     */
    public $memberLastName = '';
    
    /**
     * @var string $memberFirstName
     */
    public $memberFirstName = '';
    
    /**
     * @var string $memberMiddleName
     */
    public $memberMiddleName = '';
    
    /**
     * @var string $memberRegNum
     */
    public $memberRegNum = '';
    
    /**
     * @var string $memberType
     */
    public $memberType = '';
    
    /**
     * @var int $memberTaxpayerIDCode
     */
    public $memberTaxpayerIDCode = null;
    
    /**
     * @var string $memberTaxpayerID
     */
    public $memberTaxpayerID = '';
    
    /**
     * @var string $memberOKPO
     */
    public $memberOKPO = '';
    
    /**
     * @var string $memberIDIssueAuth
     */
    public $memberIDIssueAuth = '';
    
    /**
     * @var string $memberIDIssueLoc
     */
    public $memberIDIssueLoc = '';
    
    /**
     * @var string $memberIDIssueDate
     */
    public $memberIDIssueDate = '';
    
    /**
     * @var string $memberBusinessCode
     */
    public $memberBusinessCode = '';
    
    /**
     * @var string $memberBankruptDt
     */
    public $memberBankruptDt = '';
    
    /**
     * @var string $memberComp
     */
    public $memberComp = '';
    
    /**
     * @var string $memberLiquidStartDt
     */
    public $memberLiquidStartDt = '';
    
    /**
     * @var string $memberLiquidEndDt
     */
    public $memberLiquidEndDt = '';
    
    /**
     * @var string $memberBCStart
     */
    public $memberBCStart = '';
    
    /**
     * @var string $memberBCEnd
     */
    public $memberBCEnd = '';
    
    /**
     * @return AcquirerLegalRUTDF[]
     */
    public function getAcquirerLegal(): array
    {
        return $this->acquirerLegal;
    }
    
    /**
     * @param AcquirerLegalRUTDF[]|array $config
     */
    public function setAcquirerLegal(array $config): void
    {
        $this->acquirerLegal = $this->initPropertyModels($config, AcquirerLegalRUTDF::class);
    }
    
    /**
     * @return AcquirerIndividRUTDF[]
     */
    public function getAcquirerIndivid(): array
    {
        return $this->acquirerIndivid;
    }
    
    /**
     * @param AcquirerIndividRUTDF[]|array $config
     */
    public function setAcquirerIndivid(array $config): void
    {
        $this->acquirerIndivid = $this->initPropertyModels($config, AcquirerIndividRUTDF::class);
    }
    
    /**
     * @return ServiceCoRUTDF[]
     */
    public function getServiceCo(): array
    {
        return $this->serviceCo;
    }
    
    /**
     * @param ServiceCoRUTDF[]|array $config
     */
    public function setServiceCo(array $config): void
    {
        $this->serviceCo = $this->initPropertyModels($config, ServiceCoRUTDF::class);
    }
}