<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing EmploymentType
 *
 * 
 * XSD Type: Employment
 */
class EmploymentType
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
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $occupation
     */
    private $occupation = null;

    /**
     * @var string $occupationText
     */
    private $occupationText = null;

    /**
     * @var string $occupationStatus
     */
    private $occupationStatus = null;

    /**
     * @var string $occupationStatusText
     */
    private $occupationStatusText = null;

    /**
     * @var string $occupationTrade
     */
    private $occupationTrade = null;

    /**
     * @var string $occupationTradeText
     */
    private $occupationTradeText = null;

    /**
     * @var string $salaryCurrency
     */
    private $salaryCurrency = null;

    /**
     * @var int $salary
     */
    private $salary = null;

    /**
     * @var string $salaryFreq
     */
    private $salaryFreq = null;

    /**
     * @var string $salaryFreqText
     */
    private $salaryFreqText = null;

    /**
     * @var \DateTime $startDt
     */
    private $startDt = null;

    /**
     * @var \DateTime $endDt
     */
    private $endDt = null;

    /**
     * @var string $current
     */
    private $current = null;

    /**
     * @var string $title
     */
    private $title = null;

    /**
     * @var string $titleText
     */
    private $titleText = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $prov
     */
    private $prov = null;

    /**
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * @var string $countryCodeText
     */
    private $countryCodeText = null;

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
     * @var string $disputedStatus
     */
    private $disputedStatus = null;

    /**
     * @var string $disputedStatusText
     */
    private $disputedStatusText = null;

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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as occupation
     *
     * @return string
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Sets a new occupation
     *
     * @param string $occupation
     * @return self
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;
        return $this;
    }

    /**
     * Gets as occupationText
     *
     * @return string
     */
    public function getOccupationText()
    {
        return $this->occupationText;
    }

    /**
     * Sets a new occupationText
     *
     * @param string $occupationText
     * @return self
     */
    public function setOccupationText($occupationText)
    {
        $this->occupationText = $occupationText;
        return $this;
    }

    /**
     * Gets as occupationStatus
     *
     * @return string
     */
    public function getOccupationStatus()
    {
        return $this->occupationStatus;
    }

    /**
     * Sets a new occupationStatus
     *
     * @param string $occupationStatus
     * @return self
     */
    public function setOccupationStatus($occupationStatus)
    {
        $this->occupationStatus = $occupationStatus;
        return $this;
    }

    /**
     * Gets as occupationStatusText
     *
     * @return string
     */
    public function getOccupationStatusText()
    {
        return $this->occupationStatusText;
    }

    /**
     * Sets a new occupationStatusText
     *
     * @param string $occupationStatusText
     * @return self
     */
    public function setOccupationStatusText($occupationStatusText)
    {
        $this->occupationStatusText = $occupationStatusText;
        return $this;
    }

    /**
     * Gets as occupationTrade
     *
     * @return string
     */
    public function getOccupationTrade()
    {
        return $this->occupationTrade;
    }

    /**
     * Sets a new occupationTrade
     *
     * @param string $occupationTrade
     * @return self
     */
    public function setOccupationTrade($occupationTrade)
    {
        $this->occupationTrade = $occupationTrade;
        return $this;
    }

    /**
     * Gets as occupationTradeText
     *
     * @return string
     */
    public function getOccupationTradeText()
    {
        return $this->occupationTradeText;
    }

    /**
     * Sets a new occupationTradeText
     *
     * @param string $occupationTradeText
     * @return self
     */
    public function setOccupationTradeText($occupationTradeText)
    {
        $this->occupationTradeText = $occupationTradeText;
        return $this;
    }

    /**
     * Gets as salaryCurrency
     *
     * @return string
     */
    public function getSalaryCurrency()
    {
        return $this->salaryCurrency;
    }

    /**
     * Sets a new salaryCurrency
     *
     * @param string $salaryCurrency
     * @return self
     */
    public function setSalaryCurrency($salaryCurrency)
    {
        $this->salaryCurrency = $salaryCurrency;
        return $this;
    }

    /**
     * Gets as salary
     *
     * @return int
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Sets a new salary
     *
     * @param int $salary
     * @return self
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
        return $this;
    }

    /**
     * Gets as salaryFreq
     *
     * @return string
     */
    public function getSalaryFreq()
    {
        return $this->salaryFreq;
    }

    /**
     * Sets a new salaryFreq
     *
     * @param string $salaryFreq
     * @return self
     */
    public function setSalaryFreq($salaryFreq)
    {
        $this->salaryFreq = $salaryFreq;
        return $this;
    }

    /**
     * Gets as salaryFreqText
     *
     * @return string
     */
    public function getSalaryFreqText()
    {
        return $this->salaryFreqText;
    }

    /**
     * Sets a new salaryFreqText
     *
     * @param string $salaryFreqText
     * @return self
     */
    public function setSalaryFreqText($salaryFreqText)
    {
        $this->salaryFreqText = $salaryFreqText;
        return $this;
    }

    /**
     * Gets as startDt
     *
     * @return \DateTime
     */
    public function getStartDt()
    {
        return $this->startDt;
    }

    /**
     * Sets a new startDt
     *
     * @param \DateTime $startDt
     * @return self
     */
    public function setStartDt(\DateTime $startDt)
    {
        $this->startDt = $startDt;
        return $this;
    }

    /**
     * Gets as endDt
     *
     * @return \DateTime
     */
    public function getEndDt()
    {
        return $this->endDt;
    }

    /**
     * Sets a new endDt
     *
     * @param \DateTime $endDt
     * @return self
     */
    public function setEndDt(\DateTime $endDt)
    {
        $this->endDt = $endDt;
        return $this;
    }

    /**
     * Gets as current
     *
     * @return string
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Sets a new current
     *
     * @param string $current
     * @return self
     */
    public function setCurrent($current)
    {
        $this->current = $current;
        return $this;
    }

    /**
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as titleText
     *
     * @return string
     */
    public function getTitleText()
    {
        return $this->titleText;
    }

    /**
     * Sets a new titleText
     *
     * @param string $titleText
     * @return self
     */
    public function setTitleText($titleText)
    {
        $this->titleText = $titleText;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as prov
     *
     * @return string
     */
    public function getProv()
    {
        return $this->prov;
    }

    /**
     * Sets a new prov
     *
     * @param string $prov
     * @return self
     */
    public function setProv($prov)
    {
        $this->prov = $prov;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as countryCodeText
     *
     * @return string
     */
    public function getCountryCodeText()
    {
        return $this->countryCodeText;
    }

    /**
     * Sets a new countryCodeText
     *
     * @param string $countryCodeText
     * @return self
     */
    public function setCountryCodeText($countryCodeText)
    {
        $this->countryCodeText = $countryCodeText;
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


}

