<?php

namespace mfteam\nbch\models;

abstract class BaseInformationPartReplyRUTDF extends BaseItem
{
    /**
     * @var string $cancellationFlag
     */
    public $cancellationFlag = '';
    
    /**
     * @var string$partnerRegDate
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
     * @var string$memberStartDt
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
     * @var string$memberIDIssueDate
     */
    public $memberIDIssueDate = '';
    
    /**
     * @var string $memberBusinessCode
     */
    public $memberBusinessCode = '';
    
    /**
     * @var string$memberBankruptDt
     */
    public $memberBankruptDt = '';
    
    /**
     * @var string$memberComp
     */
    public $memberComp = '';
    
    /**
     * @var string$memberLiquidStartDt
     */
    public $memberLiquidStartDt = '';
    
    /**
     * @var string$memberLiquidEndDt
     */
    public $memberLiquidEndDt = '';
}