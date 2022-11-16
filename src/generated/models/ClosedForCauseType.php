<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing ClosedForCauseType
 *
 * 
 * XSD Type: ClosedForCause
 */
class ClosedForCauseType
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
     * @var string $memberContactText
     */
    private $memberContactText = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var string $acctType
     */
    private $acctType = null;

    /**
     * @var string $acctWoStatus
     */
    private $acctWoStatus = null;

    /**
     * @var string $ownershipCodeText
     */
    private $ownershipCodeText = null;

    /**
     * @var string $writeoffStatusText
     */
    private $writeoffStatusText = null;

    /**
     * @var \DateTime $reportedDt
     */
    private $reportedDt = null;

    /**
     * @var \DateTime $openedDt
     */
    private $openedDt = null;

    /**
     * @var \DateTime $writeOffDt
     */
    private $writeOffDt = null;

    /**
     * @var int $balance
     */
    private $balance = null;

    /**
     * @var int $overdraftLimit
     */
    private $overdraftLimit = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var string $currencyCodeText
     */
    private $currencyCodeText = null;

    /**
     * @var string $narrativeCode
     */
    private $narrativeCode = null;

    /**
     * @var string $narrativeCodeText
     */
    private $narrativeCodeText = null;

    /**
     * @var string $ownershipCode
     */
    private $ownershipCode = null;

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
     * Gets as acctWoStatus
     *
     * @return string
     */
    public function getAcctWoStatus()
    {
        return $this->acctWoStatus;
    }

    /**
     * Sets a new acctWoStatus
     *
     * @param string $acctWoStatus
     * @return self
     */
    public function setAcctWoStatus($acctWoStatus)
    {
        $this->acctWoStatus = $acctWoStatus;
        return $this;
    }

    /**
     * Gets as ownershipCodeText
     *
     * @return string
     */
    public function getOwnershipCodeText()
    {
        return $this->ownershipCodeText;
    }

    /**
     * Sets a new ownershipCodeText
     *
     * @param string $ownershipCodeText
     * @return self
     */
    public function setOwnershipCodeText($ownershipCodeText)
    {
        $this->ownershipCodeText = $ownershipCodeText;
        return $this;
    }

    /**
     * Gets as writeoffStatusText
     *
     * @return string
     */
    public function getWriteoffStatusText()
    {
        return $this->writeoffStatusText;
    }

    /**
     * Sets a new writeoffStatusText
     *
     * @param string $writeoffStatusText
     * @return self
     */
    public function setWriteoffStatusText($writeoffStatusText)
    {
        $this->writeoffStatusText = $writeoffStatusText;
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
     * Gets as writeOffDt
     *
     * @return \DateTime
     */
    public function getWriteOffDt()
    {
        return $this->writeOffDt;
    }

    /**
     * Sets a new writeOffDt
     *
     * @param \DateTime $writeOffDt
     * @return self
     */
    public function setWriteOffDt(\DateTime $writeOffDt)
    {
        $this->writeOffDt = $writeOffDt;
        return $this;
    }

    /**
     * Gets as balance
     *
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Sets a new balance
     *
     * @param int $balance
     * @return self
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Gets as overdraftLimit
     *
     * @return int
     */
    public function getOverdraftLimit()
    {
        return $this->overdraftLimit;
    }

    /**
     * Sets a new overdraftLimit
     *
     * @param int $overdraftLimit
     * @return self
     */
    public function setOverdraftLimit($overdraftLimit)
    {
        $this->overdraftLimit = $overdraftLimit;
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
     * Gets as narrativeCode
     *
     * @return string
     */
    public function getNarrativeCode()
    {
        return $this->narrativeCode;
    }

    /**
     * Sets a new narrativeCode
     *
     * @param string $narrativeCode
     * @return self
     */
    public function setNarrativeCode($narrativeCode)
    {
        $this->narrativeCode = $narrativeCode;
        return $this;
    }

    /**
     * Gets as narrativeCodeText
     *
     * @return string
     */
    public function getNarrativeCodeText()
    {
        return $this->narrativeCodeText;
    }

    /**
     * Sets a new narrativeCodeText
     *
     * @param string $narrativeCodeText
     * @return self
     */
    public function setNarrativeCodeText($narrativeCodeText)
    {
        $this->narrativeCodeText = $narrativeCodeText;
        return $this;
    }

    /**
     * Gets as ownershipCode
     *
     * @return string
     */
    public function getOwnershipCode()
    {
        return $this->ownershipCode;
    }

    /**
     * Sets a new ownershipCode
     *
     * @param string $ownershipCode
     * @return self
     */
    public function setOwnershipCode($ownershipCode)
    {
        $this->ownershipCode = $ownershipCode;
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


}

