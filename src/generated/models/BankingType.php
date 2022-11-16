<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing BankingType
 *
 * 
 * XSD Type: Banking
 */
class BankingType
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
     * @var string $bkType
     */
    private $bkType = null;

    /**
     * @var string $bkTypeText
     */
    private $bkTypeText = null;

    /**
     * @var string $bkStatus
     */
    private $bkStatus = null;

    /**
     * @var string $bkStatusText
     */
    private $bkStatusText = null;

    /**
     * @var int $bkBalance
     */
    private $bkBalance = null;

    /**
     * @var int $bkOverdraft
     */
    private $bkOverdraft = null;

    /**
     * @var string $narrativeCode
     */
    private $narrativeCode = null;

    /**
     * @var string $narrativeCodeText
     */
    private $narrativeCodeText = null;

    /**
     * @var string $ownerIndic
     */
    private $ownerIndic = null;

    /**
     * @var string $ownerIndicText
     */
    private $ownerIndicText = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var \DateTime $openedDt
     */
    private $openedDt = null;

    /**
     * @var \DateTime $closedDt
     */
    private $closedDt = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

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
     * Gets as bkType
     *
     * @return string
     */
    public function getBkType()
    {
        return $this->bkType;
    }

    /**
     * Sets a new bkType
     *
     * @param string $bkType
     * @return self
     */
    public function setBkType($bkType)
    {
        $this->bkType = $bkType;
        return $this;
    }

    /**
     * Gets as bkTypeText
     *
     * @return string
     */
    public function getBkTypeText()
    {
        return $this->bkTypeText;
    }

    /**
     * Sets a new bkTypeText
     *
     * @param string $bkTypeText
     * @return self
     */
    public function setBkTypeText($bkTypeText)
    {
        $this->bkTypeText = $bkTypeText;
        return $this;
    }

    /**
     * Gets as bkStatus
     *
     * @return string
     */
    public function getBkStatus()
    {
        return $this->bkStatus;
    }

    /**
     * Sets a new bkStatus
     *
     * @param string $bkStatus
     * @return self
     */
    public function setBkStatus($bkStatus)
    {
        $this->bkStatus = $bkStatus;
        return $this;
    }

    /**
     * Gets as bkStatusText
     *
     * @return string
     */
    public function getBkStatusText()
    {
        return $this->bkStatusText;
    }

    /**
     * Sets a new bkStatusText
     *
     * @param string $bkStatusText
     * @return self
     */
    public function setBkStatusText($bkStatusText)
    {
        $this->bkStatusText = $bkStatusText;
        return $this;
    }

    /**
     * Gets as bkBalance
     *
     * @return int
     */
    public function getBkBalance()
    {
        return $this->bkBalance;
    }

    /**
     * Sets a new bkBalance
     *
     * @param int $bkBalance
     * @return self
     */
    public function setBkBalance($bkBalance)
    {
        $this->bkBalance = $bkBalance;
        return $this;
    }

    /**
     * Gets as bkOverdraft
     *
     * @return int
     */
    public function getBkOverdraft()
    {
        return $this->bkOverdraft;
    }

    /**
     * Sets a new bkOverdraft
     *
     * @param int $bkOverdraft
     * @return self
     */
    public function setBkOverdraft($bkOverdraft)
    {
        $this->bkOverdraft = $bkOverdraft;
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
     * Gets as ownerIndic
     *
     * @return string
     */
    public function getOwnerIndic()
    {
        return $this->ownerIndic;
    }

    /**
     * Sets a new ownerIndic
     *
     * @param string $ownerIndic
     * @return self
     */
    public function setOwnerIndic($ownerIndic)
    {
        $this->ownerIndic = $ownerIndic;
        return $this;
    }

    /**
     * Gets as ownerIndicText
     *
     * @return string
     */
    public function getOwnerIndicText()
    {
        return $this->ownerIndicText;
    }

    /**
     * Sets a new ownerIndicText
     *
     * @param string $ownerIndicText
     * @return self
     */
    public function setOwnerIndicText($ownerIndicText)
    {
        $this->ownerIndicText = $ownerIndicText;
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
     * Gets as closedDt
     *
     * @return \DateTime
     */
    public function getClosedDt()
    {
        return $this->closedDt;
    }

    /**
     * Sets a new closedDt
     *
     * @param \DateTime $closedDt
     * @return self
     */
    public function setClosedDt(\DateTime $closedDt)
    {
        $this->closedDt = $closedDt;
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


}

