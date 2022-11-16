<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing OtherLegalItemsType
 *
 * 
 * XSD Type: OtherLegalItems
 */
class OtherLegalItemsType
{

    /**
     * @var string $debtCode
     */
    private $debtCode = null;

    /**
     * @var string $courtName
     */
    private $courtName = null;

    /**
     * @var string $courtActNum
     */
    private $courtActNum = null;

    /**
     * @var \DateTime $courtActDt
     */
    private $courtActDt = null;

    /**
     * @var string $resolution
     */
    private $resolution = null;

    /**
     * @var string $execNum
     */
    private $execNum = null;

    /**
     * @var \DateTime $collectEnd
     */
    private $collectEnd = null;

    /**
     * @var string $collectFirstAmt
     */
    private $collectFirstAmt = null;

    /**
     * @var string $collectAmt
     */
    private $collectAmt = null;

    /**
     * @var \DateTime $calcDt
     */
    private $calcDt = null;

    /**
     * @var string $collectRegularAmt
     */
    private $collectRegularAmt = null;

    /**
     * @var string $frequencyCode
     */
    private $frequencyCode = null;

    /**
     * @var int $fid
     */
    private $fid = null;

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var string $memberCode
     */
    private $memberCode = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var string $disputedStatus
     */
    private $disputedStatus = null;

    /**
     * @var string $disputedStatusText
     */
    private $disputedStatusText = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

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
     * Gets as debtCode
     *
     * @return string
     */
    public function getDebtCode()
    {
        return $this->debtCode;
    }

    /**
     * Sets a new debtCode
     *
     * @param string $debtCode
     * @return self
     */
    public function setDebtCode($debtCode)
    {
        $this->debtCode = $debtCode;
        return $this;
    }

    /**
     * Gets as courtName
     *
     * @return string
     */
    public function getCourtName()
    {
        return $this->courtName;
    }

    /**
     * Sets a new courtName
     *
     * @param string $courtName
     * @return self
     */
    public function setCourtName($courtName)
    {
        $this->courtName = $courtName;
        return $this;
    }

    /**
     * Gets as courtActNum
     *
     * @return string
     */
    public function getCourtActNum()
    {
        return $this->courtActNum;
    }

    /**
     * Sets a new courtActNum
     *
     * @param string $courtActNum
     * @return self
     */
    public function setCourtActNum($courtActNum)
    {
        $this->courtActNum = $courtActNum;
        return $this;
    }

    /**
     * Gets as courtActDt
     *
     * @return \DateTime
     */
    public function getCourtActDt()
    {
        return $this->courtActDt;
    }

    /**
     * Sets a new courtActDt
     *
     * @param \DateTime $courtActDt
     * @return self
     */
    public function setCourtActDt(\DateTime $courtActDt)
    {
        $this->courtActDt = $courtActDt;
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
     * Gets as execNum
     *
     * @return string
     */
    public function getExecNum()
    {
        return $this->execNum;
    }

    /**
     * Sets a new execNum
     *
     * @param string $execNum
     * @return self
     */
    public function setExecNum($execNum)
    {
        $this->execNum = $execNum;
        return $this;
    }

    /**
     * Gets as collectEnd
     *
     * @return \DateTime
     */
    public function getCollectEnd()
    {
        return $this->collectEnd;
    }

    /**
     * Sets a new collectEnd
     *
     * @param \DateTime $collectEnd
     * @return self
     */
    public function setCollectEnd(\DateTime $collectEnd)
    {
        $this->collectEnd = $collectEnd;
        return $this;
    }

    /**
     * Gets as collectFirstAmt
     *
     * @return string
     */
    public function getCollectFirstAmt()
    {
        return $this->collectFirstAmt;
    }

    /**
     * Sets a new collectFirstAmt
     *
     * @param string $collectFirstAmt
     * @return self
     */
    public function setCollectFirstAmt($collectFirstAmt)
    {
        $this->collectFirstAmt = $collectFirstAmt;
        return $this;
    }

    /**
     * Gets as collectAmt
     *
     * @return string
     */
    public function getCollectAmt()
    {
        return $this->collectAmt;
    }

    /**
     * Sets a new collectAmt
     *
     * @param string $collectAmt
     * @return self
     */
    public function setCollectAmt($collectAmt)
    {
        $this->collectAmt = $collectAmt;
        return $this;
    }

    /**
     * Gets as calcDt
     *
     * @return \DateTime
     */
    public function getCalcDt()
    {
        return $this->calcDt;
    }

    /**
     * Sets a new calcDt
     *
     * @param \DateTime $calcDt
     * @return self
     */
    public function setCalcDt(\DateTime $calcDt)
    {
        $this->calcDt = $calcDt;
        return $this;
    }

    /**
     * Gets as collectRegularAmt
     *
     * @return string
     */
    public function getCollectRegularAmt()
    {
        return $this->collectRegularAmt;
    }

    /**
     * Sets a new collectRegularAmt
     *
     * @param string $collectRegularAmt
     * @return self
     */
    public function setCollectRegularAmt($collectRegularAmt)
    {
        $this->collectRegularAmt = $collectRegularAmt;
        return $this;
    }

    /**
     * Gets as frequencyCode
     *
     * @return string
     */
    public function getFrequencyCode()
    {
        return $this->frequencyCode;
    }

    /**
     * Sets a new frequencyCode
     *
     * @param string $frequencyCode
     * @return self
     */
    public function setFrequencyCode($frequencyCode)
    {
        $this->frequencyCode = $frequencyCode;
        return $this;
    }

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

