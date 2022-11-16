<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing LegalItemType
 *
 * 
 * XSD Type: LegalItem
 */
class LegalItemType
{

    /**
     * @var int $fid
     */
    private $fid = null;

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var string $acctNum
     */
    private $acctNum = null;

    /**
     * @var string $filingNum
     */
    private $filingNum = null;

    /**
     * @var string $caseNumber
     */
    private $caseNumber = null;

    /**
     * @var string $srcCountryCode
     */
    private $srcCountryCode = null;

    /**
     * @var string $srcCountryCodeText
     */
    private $srcCountryCodeText = null;

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
     * @var string $legalType
     */
    private $legalType = null;

    /**
     * @var string $legalTypeText
     */
    private $legalTypeText = null;

    /**
     * @var string $courtTypeText
     */
    private $courtTypeText = null;

    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var string $statusText
     */
    private $statusText = null;

    /**
     * @var string $memberContactText
     */
    private $memberContactText = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $narrativeCode1
     */
    private $narrativeCode1 = null;

    /**
     * @var string $narrativeCode1Text
     */
    private $narrativeCode1Text = null;

    /**
     * @var string $narrativeCode2
     */
    private $narrativeCode2 = null;

    /**
     * @var string $narrativeCode2Text
     */
    private $narrativeCode2Text = null;

    /**
     * @var string $court
     */
    private $court = null;

    /**
     * @var string $courtType
     */
    private $courtType = null;

    /**
     * @var \DateTime $reportedDt
     */
    private $reportedDt = null;

    /**
     * @var \DateTime $satisfiedDt
     */
    private $satisfiedDt = null;

    /**
     * @var \DateTime $consideredDt
     */
    private $consideredDt = null;

    /**
     * @var int $originalAmt
     */
    private $originalAmt = null;

    /**
     * @var int $curBalance
     */
    private $curBalance = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var string $currencyCodeText
     */
    private $currencyCodeText = null;

    /**
     * @var string $plaintiff
     */
    private $plaintiff = null;

    /**
     * @var string $lawyer
     */
    private $lawyer = null;

    /**
     * @var string $thirdParty
     */
    private $thirdParty = null;

    /**
     * @var int $freezeFlag
     */
    private $freezeFlag = null;

    /**
     * @var int $suppressFlag
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
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var string $resolution
     */
    private $resolution = null;

    /**
     * @var string $disputedStatus
     */
    private $disputedStatus = null;

    /**
     * @var string $disputedStatusText
     */
    private $disputedStatusText = null;

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
     * Gets as filingNum
     *
     * @return string
     */
    public function getFilingNum()
    {
        return $this->filingNum;
    }

    /**
     * Sets a new filingNum
     *
     * @param string $filingNum
     * @return self
     */
    public function setFilingNum($filingNum)
    {
        $this->filingNum = $filingNum;
        return $this;
    }

    /**
     * Gets as caseNumber
     *
     * @return string
     */
    public function getCaseNumber()
    {
        return $this->caseNumber;
    }

    /**
     * Sets a new caseNumber
     *
     * @param string $caseNumber
     * @return self
     */
    public function setCaseNumber($caseNumber)
    {
        $this->caseNumber = $caseNumber;
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
     * Gets as legalType
     *
     * @return string
     */
    public function getLegalType()
    {
        return $this->legalType;
    }

    /**
     * Sets a new legalType
     *
     * @param string $legalType
     * @return self
     */
    public function setLegalType($legalType)
    {
        $this->legalType = $legalType;
        return $this;
    }

    /**
     * Gets as legalTypeText
     *
     * @return string
     */
    public function getLegalTypeText()
    {
        return $this->legalTypeText;
    }

    /**
     * Sets a new legalTypeText
     *
     * @param string $legalTypeText
     * @return self
     */
    public function setLegalTypeText($legalTypeText)
    {
        $this->legalTypeText = $legalTypeText;
        return $this;
    }

    /**
     * Gets as courtTypeText
     *
     * @return string
     */
    public function getCourtTypeText()
    {
        return $this->courtTypeText;
    }

    /**
     * Sets a new courtTypeText
     *
     * @param string $courtTypeText
     * @return self
     */
    public function setCourtTypeText($courtTypeText)
    {
        $this->courtTypeText = $courtTypeText;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusText
     *
     * @return string
     */
    public function getStatusText()
    {
        return $this->statusText;
    }

    /**
     * Sets a new statusText
     *
     * @param string $statusText
     * @return self
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;
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
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * Gets as court
     *
     * @return string
     */
    public function getCourt()
    {
        return $this->court;
    }

    /**
     * Sets a new court
     *
     * @param string $court
     * @return self
     */
    public function setCourt($court)
    {
        $this->court = $court;
        return $this;
    }

    /**
     * Gets as courtType
     *
     * @return string
     */
    public function getCourtType()
    {
        return $this->courtType;
    }

    /**
     * Sets a new courtType
     *
     * @param string $courtType
     * @return self
     */
    public function setCourtType($courtType)
    {
        $this->courtType = $courtType;
        return $this;
    }

    /**
     * Gets as reportedDt
     *
     * @return \DateTime
     */
    public function getReportedDt()
    {
        return $this->reportedDt;
    }

    /**
     * Sets a new reportedDt
     *
     * @param \DateTime $reportedDt
     * @return self
     */
    public function setReportedDt(\DateTime $reportedDt)
    {
        $this->reportedDt = $reportedDt;
        return $this;
    }

    /**
     * Gets as satisfiedDt
     *
     * @return \DateTime
     */
    public function getSatisfiedDt()
    {
        return $this->satisfiedDt;
    }

    /**
     * Sets a new satisfiedDt
     *
     * @param \DateTime $satisfiedDt
     * @return self
     */
    public function setSatisfiedDt(\DateTime $satisfiedDt)
    {
        $this->satisfiedDt = $satisfiedDt;
        return $this;
    }

    /**
     * Gets as consideredDt
     *
     * @return \DateTime
     */
    public function getConsideredDt()
    {
        return $this->consideredDt;
    }

    /**
     * Sets a new consideredDt
     *
     * @param \DateTime $consideredDt
     * @return self
     */
    public function setConsideredDt(\DateTime $consideredDt)
    {
        $this->consideredDt = $consideredDt;
        return $this;
    }

    /**
     * Gets as originalAmt
     *
     * @return int
     */
    public function getOriginalAmt()
    {
        return $this->originalAmt;
    }

    /**
     * Sets a new originalAmt
     *
     * @param int $originalAmt
     * @return self
     */
    public function setOriginalAmt($originalAmt)
    {
        $this->originalAmt = $originalAmt;
        return $this;
    }

    /**
     * Gets as curBalance
     *
     * @return int
     */
    public function getCurBalance()
    {
        return $this->curBalance;
    }

    /**
     * Sets a new curBalance
     *
     * @param int $curBalance
     * @return self
     */
    public function setCurBalance($curBalance)
    {
        $this->curBalance = $curBalance;
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
     * Gets as currencyCodeText
     *
     * @return string
     */
    public function getCurrencyCodeText()
    {
        return $this->currencyCodeText;
    }

    /**
     * Sets a new currencyCodeText
     *
     * @param string $currencyCodeText
     * @return self
     */
    public function setCurrencyCodeText($currencyCodeText)
    {
        $this->currencyCodeText = $currencyCodeText;
        return $this;
    }

    /**
     * Gets as plaintiff
     *
     * @return string
     */
    public function getPlaintiff()
    {
        return $this->plaintiff;
    }

    /**
     * Sets a new plaintiff
     *
     * @param string $plaintiff
     * @return self
     */
    public function setPlaintiff($plaintiff)
    {
        $this->plaintiff = $plaintiff;
        return $this;
    }

    /**
     * Gets as lawyer
     *
     * @return string
     */
    public function getLawyer()
    {
        return $this->lawyer;
    }

    /**
     * Sets a new lawyer
     *
     * @param string $lawyer
     * @return self
     */
    public function setLawyer($lawyer)
    {
        $this->lawyer = $lawyer;
        return $this;
    }

    /**
     * Gets as thirdParty
     *
     * @return string
     */
    public function getThirdParty()
    {
        return $this->thirdParty;
    }

    /**
     * Sets a new thirdParty
     *
     * @param string $thirdParty
     * @return self
     */
    public function setThirdParty($thirdParty)
    {
        $this->thirdParty = $thirdParty;
        return $this;
    }

    /**
     * Gets as freezeFlag
     *
     * @return int
     */
    public function getFreezeFlag()
    {
        return $this->freezeFlag;
    }

    /**
     * Sets a new freezeFlag
     *
     * @param int $freezeFlag
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
     * @return int
     */
    public function getSuppressFlag()
    {
        return $this->suppressFlag;
    }

    /**
     * Sets a new suppressFlag
     *
     * @param int $suppressFlag
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
     * Gets as resolution
     *
     * @return string
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Sets a new resolution
     *
     * @param string $resolution
     * @return self
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
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

