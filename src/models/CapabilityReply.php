<?php

namespace mfteam\nbch\models;

/**
 * Сведения о дееспособности
 */
class CapabilityReply extends BaseItem
{
    /**
     * @var int $capability
     */
    public $capability = null;
    
    /**
     * @var \DateTime $incapDecisionDt
     */
    public $incapDecisionDt = null;
    
    /**
     * @var string $incapDecisionNum
     */
    public $incapDecisionNum = null;
    
    /**
     * @var string $incapCourtName
     */
    public $incapCourtName = null;
    
    /**
     * @var \DateTime $capDecisionDt
     */
    public $capDecisionDt = null;
    
    /**
     * @var string $capDecisionNum
     */
    public $capDecisionNum = null;
    
    /**
     * @var string $capCourtName
     */
    public $capCourtName = null;
    
    /**
     * @var string $memberCode
     */
    public $memberCode = null;
    
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
     * @var \DateTime $memberIDIssueDate
     */
    public $memberIDIssueDate = null;
    
    /**
     * @var string $memberBusinessCode
     */
    public $memberBusinessCode = null;
}