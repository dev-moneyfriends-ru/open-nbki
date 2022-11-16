<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing CollectionType
 *
 * 
 * XSD Type: Collection
 */
class CollectionType
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
     * @var string $acctNum
     */
    private $acctNum = null;

    /**
     * @var string $creditor
     */
    private $creditor = null;

    /**
     * @var string $creditorAcct
     */
    private $creditorAcct = null;

    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var string $collectionStatusText
     */
    private $collectionStatusText = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

    /**
     * @var \DateTime $openedDt
     */
    private $openedDt = null;

    /**
     * @var \DateTime $paidDt
     */
    private $paidDt = null;

    /**
     * @var int $curBalance
     */
    private $curBalance = null;

    /**
     * @var int $origBalance
     */
    private $origBalance = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var string $narrativeCode1
     */
    private $narrativeCode1 = null;

    /**
     * @var string $narrativeCode2
     */
    private $narrativeCode2 = null;

    /**
     * @var string $narrativeCode1Text
     */
    private $narrativeCode1Text = null;

    /**
     * @var string $narrativeCode2Text
     */
    private $narrativeCode2Text = null;

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
     * Gets as creditor
     *
     * @return string
     */
    public function getCreditor()
    {
        return $this->creditor;
    }

    /**
     * Sets a new creditor
     *
     * @param string $creditor
     * @return self
     */
    public function setCreditor($creditor)
    {
        $this->creditor = $creditor;
        return $this;
    }

    /**
     * Gets as creditorAcct
     *
     * @return string
     */
    public function getCreditorAcct()
    {
        return $this->creditorAcct;
    }

    /**
     * Sets a new creditorAcct
     *
     * @param string $creditorAcct
     * @return self
     */
    public function setCreditorAcct($creditorAcct)
    {
        $this->creditorAcct = $creditorAcct;
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
     * Gets as collectionStatusText
     *
     * @return string
     */
    public function getCollectionStatusText()
    {
        return $this->collectionStatusText;
    }

    /**
     * Sets a new collectionStatusText
     *
     * @param string $collectionStatusText
     * @return self
     */
    public function setCollectionStatusText($collectionStatusText)
    {
        $this->collectionStatusText = $collectionStatusText;
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
     * Gets as paidDt
     *
     * @return \DateTime
     */
    public function getPaidDt()
    {
        return $this->paidDt;
    }

    /**
     * Sets a new paidDt
     *
     * @param \DateTime $paidDt
     * @return self
     */
    public function setPaidDt(\DateTime $paidDt)
    {
        $this->paidDt = $paidDt;
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
     * Gets as origBalance
     *
     * @return int
     */
    public function getOrigBalance()
    {
        return $this->origBalance;
    }

    /**
     * Sets a new origBalance
     *
     * @param int $origBalance
     * @return self
     */
    public function setOrigBalance($origBalance)
    {
        $this->origBalance = $origBalance;
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

