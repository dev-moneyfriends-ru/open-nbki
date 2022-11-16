<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing AddressType
 *
 * 
 * XSD Type: Address
 */
class AddressType
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
     * @var string $resStat
     */
    private $resStat = null;

    /**
     * @var string $resStatText
     */
    private $resStatText = null;

    /**
     * @var string $line1
     */
    private $line1 = null;

    /**
     * @var string $line2
     */
    private $line2 = null;

    /**
     * @var string $line3
     */
    private $line3 = null;

    /**
     * @var string $line4
     */
    private $line4 = null;

    /**
     * @var string $subDistrict
     */
    private $subDistrict = null;

    /**
     * @var string $district
     */
    private $district = null;

    /**
     * @var string $houseNumber
     */
    private $houseNumber = null;

    /**
     * @var string $street
     */
    private $street = null;

    /**
     * @var string $streetType
     */
    private $streetType = null;

    /**
     * @var string $streetTypeText
     */
    private $streetTypeText = null;

    /**
     * @var string $block
     */
    private $block = null;

    /**
     * @var string $building
     */
    private $building = null;

    /**
     * @var string $apartment
     */
    private $apartment = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $prov
     */
    private $prov = null;

    /**
     * @var string $provText
     */
    private $provText = null;

    /**
     * @var string $postal
     */
    private $postal = null;

    /**
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * @var string $countryCodeText
     */
    private $countryCodeText = null;

    /**
     * @var string $addressType
     */
    private $addressType = null;

    /**
     * @var string $addressTypeText
     */
    private $addressTypeText = null;

    /**
     * @var \DateTime $reportedDate
     */
    private $reportedDate = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

    /**
     * @var \DateTime $addrSinceDt
     */
    private $addrSinceDt = null;

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
     * @var int $regType
     */
    private $regType = null;

    /**
     * @var string $otherCountry
     */
    private $otherCountry = null;

    /**
     * @var string $fIAS
     */
    private $fIAS = null;

    /**
     * @var string $oKATO
     */
    private $oKATO = null;

    /**
     * @var string $otherLocation
     */
    private $otherLocation = null;

    /**
     * @var string $estate
     */
    private $estate = null;

    /**
     * @var string $regAuthority
     */
    private $regAuthority = null;

    /**
     * @var string $divCode
     */
    private $divCode = null;

    /**
     * @var string $phone
     */
    private $phone = null;

    /**
     * @var string $phoneComment
     */
    private $phoneComment = null;

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * @var string $oKSM
     */
    private $oKSM = null;

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
     * Gets as resStat
     *
     * @return string
     */
    public function getResStat()
    {
        return $this->resStat;
    }

    /**
     * Sets a new resStat
     *
     * @param string $resStat
     * @return self
     */
    public function setResStat($resStat)
    {
        $this->resStat = $resStat;
        return $this;
    }

    /**
     * Gets as resStatText
     *
     * @return string
     */
    public function getResStatText()
    {
        return $this->resStatText;
    }

    /**
     * Sets a new resStatText
     *
     * @param string $resStatText
     * @return self
     */
    public function setResStatText($resStatText)
    {
        $this->resStatText = $resStatText;
        return $this;
    }

    /**
     * Gets as line1
     *
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * Sets a new line1
     *
     * @param string $line1
     * @return self
     */
    public function setLine1($line1)
    {
        $this->line1 = $line1;
        return $this;
    }

    /**
     * Gets as line2
     *
     * @return string
     */
    public function getLine2()
    {
        return $this->line2;
    }

    /**
     * Sets a new line2
     *
     * @param string $line2
     * @return self
     */
    public function setLine2($line2)
    {
        $this->line2 = $line2;
        return $this;
    }

    /**
     * Gets as line3
     *
     * @return string
     */
    public function getLine3()
    {
        return $this->line3;
    }

    /**
     * Sets a new line3
     *
     * @param string $line3
     * @return self
     */
    public function setLine3($line3)
    {
        $this->line3 = $line3;
        return $this;
    }

    /**
     * Gets as line4
     *
     * @return string
     */
    public function getLine4()
    {
        return $this->line4;
    }

    /**
     * Sets a new line4
     *
     * @param string $line4
     * @return self
     */
    public function setLine4($line4)
    {
        $this->line4 = $line4;
        return $this;
    }

    /**
     * Gets as subDistrict
     *
     * @return string
     */
    public function getSubDistrict()
    {
        return $this->subDistrict;
    }

    /**
     * Sets a new subDistrict
     *
     * @param string $subDistrict
     * @return self
     */
    public function setSubDistrict($subDistrict)
    {
        $this->subDistrict = $subDistrict;
        return $this;
    }

    /**
     * Gets as district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Sets a new district
     *
     * @param string $district
     * @return self
     */
    public function setDistrict($district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * Gets as houseNumber
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Sets a new houseNumber
     *
     * @param string $houseNumber
     * @return self
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    /**
     * Gets as street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as streetType
     *
     * @return string
     */
    public function getStreetType()
    {
        return $this->streetType;
    }

    /**
     * Sets a new streetType
     *
     * @param string $streetType
     * @return self
     */
    public function setStreetType($streetType)
    {
        $this->streetType = $streetType;
        return $this;
    }

    /**
     * Gets as streetTypeText
     *
     * @return string
     */
    public function getStreetTypeText()
    {
        return $this->streetTypeText;
    }

    /**
     * Sets a new streetTypeText
     *
     * @param string $streetTypeText
     * @return self
     */
    public function setStreetTypeText($streetTypeText)
    {
        $this->streetTypeText = $streetTypeText;
        return $this;
    }

    /**
     * Gets as block
     *
     * @return string
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Sets a new block
     *
     * @param string $block
     * @return self
     */
    public function setBlock($block)
    {
        $this->block = $block;
        return $this;
    }

    /**
     * Gets as building
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Sets a new building
     *
     * @param string $building
     * @return self
     */
    public function setBuilding($building)
    {
        $this->building = $building;
        return $this;
    }

    /**
     * Gets as apartment
     *
     * @return string
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * Sets a new apartment
     *
     * @param string $apartment
     * @return self
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
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
     * Gets as provText
     *
     * @return string
     */
    public function getProvText()
    {
        return $this->provText;
    }

    /**
     * Sets a new provText
     *
     * @param string $provText
     * @return self
     */
    public function setProvText($provText)
    {
        $this->provText = $provText;
        return $this;
    }

    /**
     * Gets as postal
     *
     * @return string
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * Sets a new postal
     *
     * @param string $postal
     * @return self
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;
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
     * Gets as addressType
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * Sets a new addressType
     *
     * @param string $addressType
     * @return self
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
        return $this;
    }

    /**
     * Gets as addressTypeText
     *
     * @return string
     */
    public function getAddressTypeText()
    {
        return $this->addressTypeText;
    }

    /**
     * Sets a new addressTypeText
     *
     * @param string $addressTypeText
     * @return self
     */
    public function setAddressTypeText($addressTypeText)
    {
        $this->addressTypeText = $addressTypeText;
        return $this;
    }

    /**
     * Gets as reportedDate
     *
     * @return \DateTime
     */
    public function getReportedDate()
    {
        return $this->reportedDate;
    }

    /**
     * Sets a new reportedDate
     *
     * @param \DateTime $reportedDate
     * @return self
     */
    public function setReportedDate(\DateTime $reportedDate)
    {
        $this->reportedDate = $reportedDate;
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
     * Gets as addrSinceDt
     *
     * @return \DateTime
     */
    public function getAddrSinceDt()
    {
        return $this->addrSinceDt;
    }

    /**
     * Sets a new addrSinceDt
     *
     * @param \DateTime $addrSinceDt
     * @return self
     */
    public function setAddrSinceDt(\DateTime $addrSinceDt)
    {
        $this->addrSinceDt = $addrSinceDt;
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

    /**
     * Gets as regType
     *
     * @return int
     */
    public function getRegType()
    {
        return $this->regType;
    }

    /**
     * Sets a new regType
     *
     * @param int $regType
     * @return self
     */
    public function setRegType($regType)
    {
        $this->regType = $regType;
        return $this;
    }

    /**
     * Gets as otherCountry
     *
     * @return string
     */
    public function getOtherCountry()
    {
        return $this->otherCountry;
    }

    /**
     * Sets a new otherCountry
     *
     * @param string $otherCountry
     * @return self
     */
    public function setOtherCountry($otherCountry)
    {
        $this->otherCountry = $otherCountry;
        return $this;
    }

    /**
     * Gets as fIAS
     *
     * @return string
     */
    public function getFIAS()
    {
        return $this->fIAS;
    }

    /**
     * Sets a new fIAS
     *
     * @param string $fIAS
     * @return self
     */
    public function setFIAS($fIAS)
    {
        $this->fIAS = $fIAS;
        return $this;
    }

    /**
     * Gets as oKATO
     *
     * @return string
     */
    public function getOKATO()
    {
        return $this->oKATO;
    }

    /**
     * Sets a new oKATO
     *
     * @param string $oKATO
     * @return self
     */
    public function setOKATO($oKATO)
    {
        $this->oKATO = $oKATO;
        return $this;
    }

    /**
     * Gets as otherLocation
     *
     * @return string
     */
    public function getOtherLocation()
    {
        return $this->otherLocation;
    }

    /**
     * Sets a new otherLocation
     *
     * @param string $otherLocation
     * @return self
     */
    public function setOtherLocation($otherLocation)
    {
        $this->otherLocation = $otherLocation;
        return $this;
    }

    /**
     * Gets as estate
     *
     * @return string
     */
    public function getEstate()
    {
        return $this->estate;
    }

    /**
     * Sets a new estate
     *
     * @param string $estate
     * @return self
     */
    public function setEstate($estate)
    {
        $this->estate = $estate;
        return $this;
    }

    /**
     * Gets as regAuthority
     *
     * @return string
     */
    public function getRegAuthority()
    {
        return $this->regAuthority;
    }

    /**
     * Sets a new regAuthority
     *
     * @param string $regAuthority
     * @return self
     */
    public function setRegAuthority($regAuthority)
    {
        $this->regAuthority = $regAuthority;
        return $this;
    }

    /**
     * Gets as divCode
     *
     * @return string
     */
    public function getDivCode()
    {
        return $this->divCode;
    }

    /**
     * Sets a new divCode
     *
     * @param string $divCode
     * @return self
     */
    public function setDivCode($divCode)
    {
        $this->divCode = $divCode;
        return $this;
    }

    /**
     * Gets as phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as phoneComment
     *
     * @return string
     */
    public function getPhoneComment()
    {
        return $this->phoneComment;
    }

    /**
     * Sets a new phoneComment
     *
     * @param string $phoneComment
     * @return self
     */
    public function setPhoneComment($phoneComment)
    {
        $this->phoneComment = $phoneComment;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
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


}

