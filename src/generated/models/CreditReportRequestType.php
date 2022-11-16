<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing CreditReportRequestType
 *
 * 
 * XSD Type: CreditReportRequest
 */
class CreditReportRequestType
{

    /**
     * @var \mfteam\nbch\generated\models\AccountType[] $accountReq
     */
    private $accountReq = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AddressType[] $addressReq
     */
    private $addressReq = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\EmploymentType $employmentReq
     */
    private $employmentReq = null;

    /**
     * @var \mfteam\nbch\generated\models\IdType[] $idReq
     */
    private $idReq = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\InquiryType $inquiryReq
     */
    private $inquiryReq = null;

    /**
     * @var \mfteam\nbch\generated\models\PersonType[] $personReq
     */
    private $personReq = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\BusinessType[] $businessReq
     */
    private $businessReq = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\ClassificationType[] $classificationReq
     */
    private $classificationReq = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\PhoneType[] $phoneReq
     */
    private $phoneReq = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AlertMessageType[] $alertReq
     */
    private $alertReq = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\RequestorType $requestorReq
     */
    private $requestorReq = null;

    /**
     * @var \mfteam\nbch\generated\models\ReferenceType $refReq
     */
    private $refReq = null;

    /**
     * @var \mfteam\nbch\generated\models\BrokerType $brokerReq
     */
    private $brokerReq = null;

    /**
     * @var \mfteam\nbch\generated\models\ContactType $contactReq
     */
    private $contactReq = null;

    /**
     * @var \mfteam\nbch\generated\models\RegnumType[] $regnumReq
     */
    private $regnumReq = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\SnilsType $sNILSReq
     */
    private $sNILSReq = null;

    /**
     * @var \DateTime $requestDateTime
     */
    private $requestDateTime = null;

    /**
     * @var string $iOType
     */
    private $iOType = null;

    /**
     * @var string $outputFormat
     */
    private $outputFormat = null;

    /**
     * @var string $password
     */
    private $password = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var \mfteam\nbch\generated\models\CreditReportRequestType\VersionAType $version
     */
    private $version = null;

    /**
     * @var string $outputVersion
     */
    private $outputVersion = null;

    /**
     * @var string $allAddressBlocks
     */
    private $allAddressBlocks = null;

    /**
     * Adds as accountReq
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AccountType $accountReq
     */
    public function addToAccountReq(\mfteam\nbch\generated\models\AccountType $accountReq)
    {
        $this->accountReq[] = $accountReq;
        return $this;
    }

    /**
     * isset accountReq
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountReq($index)
    {
        return isset($this->accountReq[$index]);
    }

    /**
     * unset accountReq
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountReq($index)
    {
        unset($this->accountReq[$index]);
    }

    /**
     * Gets as accountReq
     *
     * @return \mfteam\nbch\generated\models\AccountType[]
     */
    public function getAccountReq()
    {
        return $this->accountReq;
    }

    /**
     * Sets a new accountReq
     *
     * @param \mfteam\nbch\generated\models\AccountType[] $accountReq
     * @return self
     */
    public function setAccountReq(array $accountReq)
    {
        $this->accountReq = $accountReq;
        return $this;
    }

    /**
     * Adds as addressReq
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AddressType $addressReq
     */
    public function addToAddressReq(\mfteam\nbch\generated\models\AddressType $addressReq)
    {
        $this->addressReq[] = $addressReq;
        return $this;
    }

    /**
     * isset addressReq
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressReq($index)
    {
        return isset($this->addressReq[$index]);
    }

    /**
     * unset addressReq
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressReq($index)
    {
        unset($this->addressReq[$index]);
    }

    /**
     * Gets as addressReq
     *
     * @return \mfteam\nbch\generated\models\AddressType[]
     */
    public function getAddressReq()
    {
        return $this->addressReq;
    }

    /**
     * Sets a new addressReq
     *
     * @param \mfteam\nbch\generated\models\AddressType[] $addressReq
     * @return self
     */
    public function setAddressReq(array $addressReq)
    {
        $this->addressReq = $addressReq;
        return $this;
    }

    /**
     * Gets as employmentReq
     *
     * @return \mfteam\nbch\generated\models\EmploymentType
     */
    public function getEmploymentReq()
    {
        return $this->employmentReq;
    }

    /**
     * Sets a new employmentReq
     *
     * @param \mfteam\nbch\generated\models\EmploymentType $employmentReq
     * @return self
     */
    public function setEmploymentReq(\mfteam\nbch\generated\models\EmploymentType $employmentReq)
    {
        $this->employmentReq = $employmentReq;
        return $this;
    }

    /**
     * Adds as idReq
     *
     * @return self
     * @param \mfteam\nbch\generated\models\IdType $idReq
     */
    public function addToIdReq(\mfteam\nbch\generated\models\IdType $idReq)
    {
        $this->idReq[] = $idReq;
        return $this;
    }

    /**
     * isset idReq
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdReq($index)
    {
        return isset($this->idReq[$index]);
    }

    /**
     * unset idReq
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdReq($index)
    {
        unset($this->idReq[$index]);
    }

    /**
     * Gets as idReq
     *
     * @return \mfteam\nbch\generated\models\IdType[]
     */
    public function getIdReq()
    {
        return $this->idReq;
    }

    /**
     * Sets a new idReq
     *
     * @param \mfteam\nbch\generated\models\IdType[] $idReq
     * @return self
     */
    public function setIdReq(array $idReq)
    {
        $this->idReq = $idReq;
        return $this;
    }

    /**
     * Gets as inquiryReq
     *
     * @return \mfteam\nbch\generated\models\InquiryType
     */
    public function getInquiryReq()
    {
        return $this->inquiryReq;
    }

    /**
     * Sets a new inquiryReq
     *
     * @param \mfteam\nbch\generated\models\InquiryType $inquiryReq
     * @return self
     */
    public function setInquiryReq(\mfteam\nbch\generated\models\InquiryType $inquiryReq)
    {
        $this->inquiryReq = $inquiryReq;
        return $this;
    }

    /**
     * Adds as personReq
     *
     * @return self
     * @param \mfteam\nbch\generated\models\PersonType $personReq
     */
    public function addToPersonReq(\mfteam\nbch\generated\models\PersonType $personReq)
    {
        $this->personReq[] = $personReq;
        return $this;
    }

    /**
     * isset personReq
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonReq($index)
    {
        return isset($this->personReq[$index]);
    }

    /**
     * unset personReq
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonReq($index)
    {
        unset($this->personReq[$index]);
    }

    /**
     * Gets as personReq
     *
     * @return \mfteam\nbch\generated\models\PersonType[]
     */
    public function getPersonReq()
    {
        return $this->personReq;
    }

    /**
     * Sets a new personReq
     *
     * @param \mfteam\nbch\generated\models\PersonType[] $personReq
     * @return self
     */
    public function setPersonReq(array $personReq)
    {
        $this->personReq = $personReq;
        return $this;
    }

    /**
     * Adds as businessReq
     *
     * @return self
     * @param \mfteam\nbch\generated\models\BusinessType $businessReq
     */
    public function addToBusinessReq(\mfteam\nbch\generated\models\BusinessType $businessReq)
    {
        $this->businessReq[] = $businessReq;
        return $this;
    }

    /**
     * isset businessReq
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBusinessReq($index)
    {
        return isset($this->businessReq[$index]);
    }

    /**
     * unset businessReq
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBusinessReq($index)
    {
        unset($this->businessReq[$index]);
    }

    /**
     * Gets as businessReq
     *
     * @return \mfteam\nbch\generated\models\BusinessType[]
     */
    public function getBusinessReq()
    {
        return $this->businessReq;
    }

    /**
     * Sets a new businessReq
     *
     * @param \mfteam\nbch\generated\models\BusinessType[] $businessReq
     * @return self
     */
    public function setBusinessReq(array $businessReq)
    {
        $this->businessReq = $businessReq;
        return $this;
    }

    /**
     * Adds as classificationReq
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ClassificationType $classificationReq
     */
    public function addToClassificationReq(\mfteam\nbch\generated\models\ClassificationType $classificationReq)
    {
        $this->classificationReq[] = $classificationReq;
        return $this;
    }

    /**
     * isset classificationReq
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassificationReq($index)
    {
        return isset($this->classificationReq[$index]);
    }

    /**
     * unset classificationReq
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassificationReq($index)
    {
        unset($this->classificationReq[$index]);
    }

    /**
     * Gets as classificationReq
     *
     * @return \mfteam\nbch\generated\models\ClassificationType[]
     */
    public function getClassificationReq()
    {
        return $this->classificationReq;
    }

    /**
     * Sets a new classificationReq
     *
     * @param \mfteam\nbch\generated\models\ClassificationType[] $classificationReq
     * @return self
     */
    public function setClassificationReq(array $classificationReq)
    {
        $this->classificationReq = $classificationReq;
        return $this;
    }

    /**
     * Adds as phoneReq
     *
     * @return self
     * @param \mfteam\nbch\generated\models\PhoneType $phoneReq
     */
    public function addToPhoneReq(\mfteam\nbch\generated\models\PhoneType $phoneReq)
    {
        $this->phoneReq[] = $phoneReq;
        return $this;
    }

    /**
     * isset phoneReq
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhoneReq($index)
    {
        return isset($this->phoneReq[$index]);
    }

    /**
     * unset phoneReq
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhoneReq($index)
    {
        unset($this->phoneReq[$index]);
    }

    /**
     * Gets as phoneReq
     *
     * @return \mfteam\nbch\generated\models\PhoneType[]
     */
    public function getPhoneReq()
    {
        return $this->phoneReq;
    }

    /**
     * Sets a new phoneReq
     *
     * @param \mfteam\nbch\generated\models\PhoneType[] $phoneReq
     * @return self
     */
    public function setPhoneReq(array $phoneReq)
    {
        $this->phoneReq = $phoneReq;
        return $this;
    }

    /**
     * Adds as alertReq
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AlertMessageType $alertReq
     */
    public function addToAlertReq(\mfteam\nbch\generated\models\AlertMessageType $alertReq)
    {
        $this->alertReq[] = $alertReq;
        return $this;
    }

    /**
     * isset alertReq
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlertReq($index)
    {
        return isset($this->alertReq[$index]);
    }

    /**
     * unset alertReq
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlertReq($index)
    {
        unset($this->alertReq[$index]);
    }

    /**
     * Gets as alertReq
     *
     * @return \mfteam\nbch\generated\models\AlertMessageType[]
     */
    public function getAlertReq()
    {
        return $this->alertReq;
    }

    /**
     * Sets a new alertReq
     *
     * @param \mfteam\nbch\generated\models\AlertMessageType[] $alertReq
     * @return self
     */
    public function setAlertReq(array $alertReq)
    {
        $this->alertReq = $alertReq;
        return $this;
    }

    /**
     * Gets as requestorReq
     *
     * @return \mfteam\nbch\generated\models\RequestorType
     */
    public function getRequestorReq()
    {
        return $this->requestorReq;
    }

    /**
     * Sets a new requestorReq
     *
     * @param \mfteam\nbch\generated\models\RequestorType $requestorReq
     * @return self
     */
    public function setRequestorReq(\mfteam\nbch\generated\models\RequestorType $requestorReq)
    {
        $this->requestorReq = $requestorReq;
        return $this;
    }

    /**
     * Gets as refReq
     *
     * @return \mfteam\nbch\generated\models\ReferenceType
     */
    public function getRefReq()
    {
        return $this->refReq;
    }

    /**
     * Sets a new refReq
     *
     * @param \mfteam\nbch\generated\models\ReferenceType $refReq
     * @return self
     */
    public function setRefReq(\mfteam\nbch\generated\models\ReferenceType $refReq)
    {
        $this->refReq = $refReq;
        return $this;
    }

    /**
     * Gets as brokerReq
     *
     * @return \mfteam\nbch\generated\models\BrokerType
     */
    public function getBrokerReq()
    {
        return $this->brokerReq;
    }

    /**
     * Sets a new brokerReq
     *
     * @param \mfteam\nbch\generated\models\BrokerType $brokerReq
     * @return self
     */
    public function setBrokerReq(\mfteam\nbch\generated\models\BrokerType $brokerReq)
    {
        $this->brokerReq = $brokerReq;
        return $this;
    }

    /**
     * Gets as contactReq
     *
     * @return \mfteam\nbch\generated\models\ContactType
     */
    public function getContactReq()
    {
        return $this->contactReq;
    }

    /**
     * Sets a new contactReq
     *
     * @param \mfteam\nbch\generated\models\ContactType $contactReq
     * @return self
     */
    public function setContactReq(\mfteam\nbch\generated\models\ContactType $contactReq)
    {
        $this->contactReq = $contactReq;
        return $this;
    }

    /**
     * Adds as regnumReq
     *
     * @return self
     * @param \mfteam\nbch\generated\models\RegnumType $regnumReq
     */
    public function addToRegnumReq(\mfteam\nbch\generated\models\RegnumType $regnumReq)
    {
        $this->regnumReq[] = $regnumReq;
        return $this;
    }

    /**
     * isset regnumReq
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegnumReq($index)
    {
        return isset($this->regnumReq[$index]);
    }

    /**
     * unset regnumReq
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegnumReq($index)
    {
        unset($this->regnumReq[$index]);
    }

    /**
     * Gets as regnumReq
     *
     * @return \mfteam\nbch\generated\models\RegnumType[]
     */
    public function getRegnumReq()
    {
        return $this->regnumReq;
    }

    /**
     * Sets a new regnumReq
     *
     * @param \mfteam\nbch\generated\models\RegnumType[] $regnumReq
     * @return self
     */
    public function setRegnumReq(array $regnumReq)
    {
        $this->regnumReq = $regnumReq;
        return $this;
    }

    /**
     * Gets as sNILSReq
     *
     * @return \mfteam\nbch\generated\models\SnilsType
     */
    public function getSNILSReq()
    {
        return $this->sNILSReq;
    }

    /**
     * Sets a new sNILSReq
     *
     * @param \mfteam\nbch\generated\models\SnilsType $sNILSReq
     * @return self
     */
    public function setSNILSReq(\mfteam\nbch\generated\models\SnilsType $sNILSReq)
    {
        $this->sNILSReq = $sNILSReq;
        return $this;
    }

    /**
     * Gets as requestDateTime
     *
     * @return \DateTime
     */
    public function getRequestDateTime()
    {
        return $this->requestDateTime;
    }

    /**
     * Sets a new requestDateTime
     *
     * @param \DateTime $requestDateTime
     * @return self
     */
    public function setRequestDateTime(\DateTime $requestDateTime)
    {
        $this->requestDateTime = $requestDateTime;
        return $this;
    }

    /**
     * Gets as iOType
     *
     * @return string
     */
    public function getIOType()
    {
        return $this->iOType;
    }

    /**
     * Sets a new iOType
     *
     * @param string $iOType
     * @return self
     */
    public function setIOType($iOType)
    {
        $this->iOType = $iOType;
        return $this;
    }

    /**
     * Gets as outputFormat
     *
     * @return string
     */
    public function getOutputFormat()
    {
        return $this->outputFormat;
    }

    /**
     * Sets a new outputFormat
     *
     * @param string $outputFormat
     * @return self
     */
    public function setOutputFormat($outputFormat)
    {
        $this->outputFormat = $outputFormat;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Sets a new lang
     *
     * @param string $lang
     * @return self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return \mfteam\nbch\generated\models\CreditReportRequestType\VersionAType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param \mfteam\nbch\generated\models\CreditReportRequestType\VersionAType $version
     * @return self
     */
    public function setVersion(\mfteam\nbch\generated\models\CreditReportRequestType\VersionAType $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as outputVersion
     *
     * @return string
     */
    public function getOutputVersion()
    {
        return $this->outputVersion;
    }

    /**
     * Sets a new outputVersion
     *
     * @param string $outputVersion
     * @return self
     */
    public function setOutputVersion($outputVersion)
    {
        $this->outputVersion = $outputVersion;
        return $this;
    }

    /**
     * Gets as allAddressBlocks
     *
     * @return string
     */
    public function getAllAddressBlocks()
    {
        return $this->allAddressBlocks;
    }

    /**
     * Sets a new allAddressBlocks
     *
     * @param string $allAddressBlocks
     * @return self
     */
    public function setAllAddressBlocks($allAddressBlocks)
    {
        $this->allAddressBlocks = $allAddressBlocks;
        return $this;
    }


}

