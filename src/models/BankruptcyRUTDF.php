<?php

namespace mfteam\nbch\models;

/**
 * Сведения по делу о несостоятельности (банкротстве)
 */
class BankruptcyRUTDF extends BaseItem
{
    /**
     * @var string $caseNum
     */
    public $caseNum;
    
    /**
     * @var string $stageCode
     */
    public $stageCode;
    
    /**
     * @var string $procedureInclusionDt
     */
    public $procedureInclusionDt;
    
    /**
     * @var string $procedureLink
     */
    public $procedureLink;
    
    /**
     * @var int $illegActCode
     */
    public $illegActCode;
    
    /**
     * @var string $illegActInfoDt
     */
    public $illegActInfoDt;
    
    /**
     * @var int $fictitiousActCode
     */
    public $fictitiousActCode;
    
    /**
     * @var string $fictitiousActDt
     */
    public $fictitiousActDt;
    
    /**
     * @var string $additionalInfo
     */
    public $additionalInfo;
    
    /**
     * @var string $memberFullName
     */
    public $memberFullName;
    
    /**
     * @var string $memberShortName
     */
    public $memberShortName;
    
    /**
     * @var string $memberLastName
     */
    public $memberLastName;
    
    /**
     * @var string $memberFirstName
     */
    public $memberFirstName;
    
    /**
     * @var string $memberMiddleName
     */
    public $memberMiddleName;
    
    /**
     * @var string $memberBirthDt
     */
    public $memberBirthDt;
    
    /**
     * @var string $memberPlaceOfBirth
     */
    public $memberPlaceOfBirth;
    
    /**
     * @var string $memberSRO
     */
    public $memberSRO;
    
    /**
     * @var string $memberSROAddress
     */
    public $memberSROAddress;
    
    /**
     * @var string $memberRegNum
     */
    public $memberRegNum;
    
    /**
     * @var string $memberType
     */
    public $memberType;
    
    /**
     * @var int $memberTaxpayerIDCode
     */
    public $memberTaxpayerIDCode;
    
    /**
     * @var string $memberTaxpayerID
     */
    public $memberTaxpayerID;
    
    /**
     * @var string $memberSNILS
     */
    public $memberSNILS;
    
    /**
     * @var string $memberOKPO
     */
    public $memberOKPO;
    
    /**
     * @var string $memberIDIssueAuth
     */
    public $memberIDIssueAuth;
    
    /**
     * @var string $memberIDIssueLoc
     */
    public $memberIDIssueLoc;
    
    /**
     * @var string $memberIDIssueDate
     */
    public $memberIDIssueDate;
    
    /**
     * @var string $memberBusinessCode
     */
    public $memberBusinessCode;
    
    /**
     * @var string $memberBCStart
     */
    public $memberBCStart;
    
    /**
     * @var string $memberBCEnd
     */
    public $memberBCEnd;
}