<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing PersonType
 *
 * 
 * XSD Type: Person
 */
class PersonType
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
     * @var string $customerType
     */
    private $customerType = null;

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
     * @var string $name1
     */
    private $name1 = null;

    /**
     * @var string $name2
     */
    private $name2 = null;

    /**
     * @var string $name3
     */
    private $name3 = null;

    /**
     * @var string $first
     */
    private $first = null;

    /**
     * @var string $middle
     */
    private $middle = null;

    /**
     * @var string $paternal
     */
    private $paternal = null;

    /**
     * @var string $oldSurname
     */
    private $oldSurname = null;

    /**
     * @var string $oldFirstName
     */
    private $oldFirstName = null;

    /**
     * @var string $suffix
     */
    private $suffix = null;

    /**
     * @var string $suffixText
     */
    private $suffixText = null;

    /**
     * @var string $gender
     */
    private $gender = null;

    /**
     * @var string $genderText
     */
    private $genderText = null;

    /**
     * @var string $title
     */
    private $title = null;

    /**
     * @var string $nationality
     */
    private $nationality = null;

    /**
     * @var string $nationalityText
     */
    private $nationalityText = null;

    /**
     * @var string $spouseName
     */
    private $spouseName = null;

    /**
     * @var string $occupation
     */
    private $occupation = null;

    /**
     * @var string $occupationText
     */
    private $occupationText = null;

    /**
     * @var string $consentToEnquire
     */
    private $consentToEnquire = null;

    /**
     * @var string $consentToEnquireText
     */
    private $consentToEnquireText = null;

    /**
     * @var \DateTime $birthDt
     */
    private $birthDt = null;

    /**
     * @var \DateTime $deceasedDt
     */
    private $deceasedDt = null;

    /**
     * @var string $maritalStatus
     */
    private $maritalStatus = null;

    /**
     * @var string $maritalStatusText
     */
    private $maritalStatusText = null;

    /**
     * @var int $numDependants
     */
    private $numDependants = null;

    /**
     * @var string $deathFlag
     */
    private $deathFlag = null;

    /**
     * @var string $countryBirth
     */
    private $countryBirth = null;

    /**
     * @var string $countryBirthText
     */
    private $countryBirthText = null;

    /**
     * @var string $placeOfBirth
     */
    private $placeOfBirth = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var string $dataValidity
     */
    private $dataValidity = null;

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
     * @var int $isPrevName
     */
    private $isPrevName = null;

    /**
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * @var string $oKSM
     */
    private $oKSM = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

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
     * Gets as customerType
     *
     * @return string
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * Sets a new customerType
     *
     * @param string $customerType
     * @return self
     */
    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;
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
     * Gets as name1
     *
     * @return string
     */
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * Sets a new name1
     *
     * @param string $name1
     * @return self
     */
    public function setName1($name1)
    {
        $this->name1 = $name1;
        return $this;
    }

    /**
     * Gets as name2
     *
     * @return string
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * Sets a new name2
     *
     * @param string $name2
     * @return self
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;
        return $this;
    }

    /**
     * Gets as name3
     *
     * @return string
     */
    public function getName3()
    {
        return $this->name3;
    }

    /**
     * Sets a new name3
     *
     * @param string $name3
     * @return self
     */
    public function setName3($name3)
    {
        $this->name3 = $name3;
        return $this;
    }

    /**
     * Gets as first
     *
     * @return string
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Sets a new first
     *
     * @param string $first
     * @return self
     */
    public function setFirst($first)
    {
        $this->first = $first;
        return $this;
    }

    /**
     * Gets as middle
     *
     * @return string
     */
    public function getMiddle()
    {
        return $this->middle;
    }

    /**
     * Sets a new middle
     *
     * @param string $middle
     * @return self
     */
    public function setMiddle($middle)
    {
        $this->middle = $middle;
        return $this;
    }

    /**
     * Gets as paternal
     *
     * @return string
     */
    public function getPaternal()
    {
        return $this->paternal;
    }

    /**
     * Sets a new paternal
     *
     * @param string $paternal
     * @return self
     */
    public function setPaternal($paternal)
    {
        $this->paternal = $paternal;
        return $this;
    }

    /**
     * Gets as oldSurname
     *
     * @return string
     */
    public function getOldSurname()
    {
        return $this->oldSurname;
    }

    /**
     * Sets a new oldSurname
     *
     * @param string $oldSurname
     * @return self
     */
    public function setOldSurname($oldSurname)
    {
        $this->oldSurname = $oldSurname;
        return $this;
    }

    /**
     * Gets as oldFirstName
     *
     * @return string
     */
    public function getOldFirstName()
    {
        return $this->oldFirstName;
    }

    /**
     * Sets a new oldFirstName
     *
     * @param string $oldFirstName
     * @return self
     */
    public function setOldFirstName($oldFirstName)
    {
        $this->oldFirstName = $oldFirstName;
        return $this;
    }

    /**
     * Gets as suffix
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Sets a new suffix
     *
     * @param string $suffix
     * @return self
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * Gets as suffixText
     *
     * @return string
     */
    public function getSuffixText()
    {
        return $this->suffixText;
    }

    /**
     * Sets a new suffixText
     *
     * @param string $suffixText
     * @return self
     */
    public function setSuffixText($suffixText)
    {
        $this->suffixText = $suffixText;
        return $this;
    }

    /**
     * Gets as gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as genderText
     *
     * @return string
     */
    public function getGenderText()
    {
        return $this->genderText;
    }

    /**
     * Sets a new genderText
     *
     * @param string $genderText
     * @return self
     */
    public function setGenderText($genderText)
    {
        $this->genderText = $genderText;
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
     * Gets as nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Sets a new nationality
     *
     * @param string $nationality
     * @return self
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * Gets as nationalityText
     *
     * @return string
     */
    public function getNationalityText()
    {
        return $this->nationalityText;
    }

    /**
     * Sets a new nationalityText
     *
     * @param string $nationalityText
     * @return self
     */
    public function setNationalityText($nationalityText)
    {
        $this->nationalityText = $nationalityText;
        return $this;
    }

    /**
     * Gets as spouseName
     *
     * @return string
     */
    public function getSpouseName()
    {
        return $this->spouseName;
    }

    /**
     * Sets a new spouseName
     *
     * @param string $spouseName
     * @return self
     */
    public function setSpouseName($spouseName)
    {
        $this->spouseName = $spouseName;
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
     * Gets as consentToEnquire
     *
     * @return string
     */
    public function getConsentToEnquire()
    {
        return $this->consentToEnquire;
    }

    /**
     * Sets a new consentToEnquire
     *
     * @param string $consentToEnquire
     * @return self
     */
    public function setConsentToEnquire($consentToEnquire)
    {
        $this->consentToEnquire = $consentToEnquire;
        return $this;
    }

    /**
     * Gets as consentToEnquireText
     *
     * @return string
     */
    public function getConsentToEnquireText()
    {
        return $this->consentToEnquireText;
    }

    /**
     * Sets a new consentToEnquireText
     *
     * @param string $consentToEnquireText
     * @return self
     */
    public function setConsentToEnquireText($consentToEnquireText)
    {
        $this->consentToEnquireText = $consentToEnquireText;
        return $this;
    }

    /**
     * Gets as birthDt
     *
     * @return \DateTime
     */
    public function getBirthDt()
    {
        return $this->birthDt;
    }

    /**
     * Sets a new birthDt
     *
     * @param \DateTime $birthDt
     * @return self
     */
    public function setBirthDt(\DateTime $birthDt)
    {
        $this->birthDt = $birthDt;
        return $this;
    }

    /**
     * Gets as deceasedDt
     *
     * @return \DateTime
     */
    public function getDeceasedDt()
    {
        return $this->deceasedDt;
    }

    /**
     * Sets a new deceasedDt
     *
     * @param \DateTime $deceasedDt
     * @return self
     */
    public function setDeceasedDt(\DateTime $deceasedDt)
    {
        $this->deceasedDt = $deceasedDt;
        return $this;
    }

    /**
     * Gets as maritalStatus
     *
     * @return string
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Sets a new maritalStatus
     *
     * @param string $maritalStatus
     * @return self
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * Gets as maritalStatusText
     *
     * @return string
     */
    public function getMaritalStatusText()
    {
        return $this->maritalStatusText;
    }

    /**
     * Sets a new maritalStatusText
     *
     * @param string $maritalStatusText
     * @return self
     */
    public function setMaritalStatusText($maritalStatusText)
    {
        $this->maritalStatusText = $maritalStatusText;
        return $this;
    }

    /**
     * Gets as numDependants
     *
     * @return int
     */
    public function getNumDependants()
    {
        return $this->numDependants;
    }

    /**
     * Sets a new numDependants
     *
     * @param int $numDependants
     * @return self
     */
    public function setNumDependants($numDependants)
    {
        $this->numDependants = $numDependants;
        return $this;
    }

    /**
     * Gets as deathFlag
     *
     * @return string
     */
    public function getDeathFlag()
    {
        return $this->deathFlag;
    }

    /**
     * Sets a new deathFlag
     *
     * @param string $deathFlag
     * @return self
     */
    public function setDeathFlag($deathFlag)
    {
        $this->deathFlag = $deathFlag;
        return $this;
    }

    /**
     * Gets as countryBirth
     *
     * @return string
     */
    public function getCountryBirth()
    {
        return $this->countryBirth;
    }

    /**
     * Sets a new countryBirth
     *
     * @param string $countryBirth
     * @return self
     */
    public function setCountryBirth($countryBirth)
    {
        $this->countryBirth = $countryBirth;
        return $this;
    }

    /**
     * Gets as countryBirthText
     *
     * @return string
     */
    public function getCountryBirthText()
    {
        return $this->countryBirthText;
    }

    /**
     * Sets a new countryBirthText
     *
     * @param string $countryBirthText
     * @return self
     */
    public function setCountryBirthText($countryBirthText)
    {
        $this->countryBirthText = $countryBirthText;
        return $this;
    }

    /**
     * Gets as placeOfBirth
     *
     * @return string
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }

    /**
     * Sets a new placeOfBirth
     *
     * @param string $placeOfBirth
     * @return self
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;
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
     * Gets as dataValidity
     *
     * @return string
     */
    public function getDataValidity()
    {
        return $this->dataValidity;
    }

    /**
     * Sets a new dataValidity
     *
     * @param string $dataValidity
     * @return self
     */
    public function setDataValidity($dataValidity)
    {
        $this->dataValidity = $dataValidity;
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

    /**
     * Gets as isPrevName
     *
     * @return int
     */
    public function getIsPrevName()
    {
        return $this->isPrevName;
    }

    /**
     * Sets a new isPrevName
     *
     * @param int $isPrevName
     * @return self
     */
    public function setIsPrevName($isPrevName)
    {
        $this->isPrevName = $isPrevName;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as oKSM
     *
     * @return string
     */
    public function getOKSM()
    {
        return $this->oKSM;
    }

    /**
     * Sets a new oKSM
     *
     * @param string $oKSM
     * @return self
     */
    public function setOKSM($oKSM)
    {
        $this->oKSM = $oKSM;
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


}

