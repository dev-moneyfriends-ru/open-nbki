<?php

namespace mfteam\nbch\models;

/**
 * Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
 */
class SettledReply extends BaseItem
{
    /**
     * @var int $isClosed
     */
    public $isClosed = null;
    
    /**
     * @var string $closeDt
     */
    public $closeDt = '';
    
    /**
     * @var int $isSettled
     */
    public $isSettled = null;
    
    /**
     * @var string $setlleDt
     */
    public $setlleDt = '';
    
    /**
     * @var string $resumeDt
     */
    public $resumeDt = '';
    
    /**
     * @var string $memberFullName
     */
    public $memberFullName = '';
    
    /**
     * @var string $memberShortName
     */
    public $memberShortName = '';
    
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
}