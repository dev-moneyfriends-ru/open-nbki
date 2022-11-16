<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing CapabilityType
 *
 * 
 * XSD Type: Capability
 */
class CapabilityType
{

    /**
     * @var int $capability
     */
    private $capability = null;

    /**
     * @var \DateTime $incapDecisionDt
     */
    private $incapDecisionDt = null;

    /**
     * @var string $incapDecisionNum
     */
    private $incapDecisionNum = null;

    /**
     * @var string $incapCourtName
     */
    private $incapCourtName = null;

    /**
     * @var \DateTime $capDecisionDt
     */
    private $capDecisionDt = null;

    /**
     * @var string $capDecisionNum
     */
    private $capDecisionNum = null;

    /**
     * @var string $capCourtName
     */
    private $capCourtName = null;

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
     * Gets as capability
     *
     * @return int
     */
    public function getCapability()
    {
        return $this->capability;
    }

    /**
     * Sets a new capability
     *
     * @param int $capability
     * @return self
     */
    public function setCapability($capability)
    {
        $this->capability = $capability;
        return $this;
    }

    /**
     * Gets as incapDecisionDt
     *
     * @return \DateTime
     */
    public function getIncapDecisionDt()
    {
        return $this->incapDecisionDt;
    }

    /**
     * Sets a new incapDecisionDt
     *
     * @param \DateTime $incapDecisionDt
     * @return self
     */
    public function setIncapDecisionDt(\DateTime $incapDecisionDt)
    {
        $this->incapDecisionDt = $incapDecisionDt;
        return $this;
    }

    /**
     * Gets as incapDecisionNum
     *
     * @return string
     */
    public function getIncapDecisionNum()
    {
        return $this->incapDecisionNum;
    }

    /**
     * Sets a new incapDecisionNum
     *
     * @param string $incapDecisionNum
     * @return self
     */
    public function setIncapDecisionNum($incapDecisionNum)
    {
        $this->incapDecisionNum = $incapDecisionNum;
        return $this;
    }

    /**
     * Gets as incapCourtName
     *
     * @return string
     */
    public function getIncapCourtName()
    {
        return $this->incapCourtName;
    }

    /**
     * Sets a new incapCourtName
     *
     * @param string $incapCourtName
     * @return self
     */
    public function setIncapCourtName($incapCourtName)
    {
        $this->incapCourtName = $incapCourtName;
        return $this;
    }

    /**
     * Gets as capDecisionDt
     *
     * @return \DateTime
     */
    public function getCapDecisionDt()
    {
        return $this->capDecisionDt;
    }

    /**
     * Sets a new capDecisionDt
     *
     * @param \DateTime $capDecisionDt
     * @return self
     */
    public function setCapDecisionDt(\DateTime $capDecisionDt)
    {
        $this->capDecisionDt = $capDecisionDt;
        return $this;
    }

    /**
     * Gets as capDecisionNum
     *
     * @return string
     */
    public function getCapDecisionNum()
    {
        return $this->capDecisionNum;
    }

    /**
     * Sets a new capDecisionNum
     *
     * @param string $capDecisionNum
     * @return self
     */
    public function setCapDecisionNum($capDecisionNum)
    {
        $this->capDecisionNum = $capDecisionNum;
        return $this;
    }

    /**
     * Gets as capCourtName
     *
     * @return string
     */
    public function getCapCourtName()
    {
        return $this->capCourtName;
    }

    /**
     * Sets a new capCourtName
     *
     * @param string $capCourtName
     * @return self
     */
    public function setCapCourtName($capCourtName)
    {
        $this->capCourtName = $capCourtName;
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

