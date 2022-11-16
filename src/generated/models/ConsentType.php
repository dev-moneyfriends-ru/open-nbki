<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing ConsentType
 *
 * 
 * XSD Type: Consent
 */
class ConsentType
{

    /**
     * @var string $consentFlag
     */
    private $consentFlag = null;

    /**
     * @var \DateTime $consentDate
     */
    private $consentDate = null;

    /**
     * @var \DateTime $consentExpireDate
     */
    private $consentExpireDate = null;

    /**
     * @var string $consentPurpose
     */
    private $consentPurpose = null;

    /**
     * @var string $consentPurposeText
     */
    private $consentPurposeText = null;

    /**
     * @var string $otherConsentPurpose
     */
    private $otherConsentPurpose = null;

    /**
     * @var string $reportUser
     */
    private $reportUser = null;

    /**
     * @var string $liability
     */
    private $liability = null;

    /**
     * @var \DateTime $agreementDate
     */
    private $agreementDate = null;

    /**
     * @var int $transferReason
     */
    private $transferReason = null;

    /**
     * @var int $consentPeriod
     */
    private $consentPeriod = null;

    /**
     * @var string $reportUserRegNum
     */
    private $reportUserRegNum = null;

    /**
     * @var string $reportUserTaxID
     */
    private $reportUserTaxID = null;

    /**
     * @var string $consentHash
     */
    private $consentHash = null;

    /**
     * @var \mfteam\nbch\generated\models\PersonType[] $personReq
     */
    private $personReq = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\IdType[] $idReq
     */
    private $idReq = [
        
    ];

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
     * @var \mfteam\nbch\generated\models\BusinessType[] $businessReq
     */
    private $businessReq = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AddressType[] $addressReq
     */
    private $addressReq = [
        
    ];

    /**
     * Gets as consentFlag
     *
     * @return string
     */
    public function getConsentFlag()
    {
        return $this->consentFlag;
    }

    /**
     * Sets a new consentFlag
     *
     * @param string $consentFlag
     * @return self
     */
    public function setConsentFlag($consentFlag)
    {
        $this->consentFlag = $consentFlag;
        return $this;
    }

    /**
     * Gets as consentDate
     *
     * @return \DateTime
     */
    public function getConsentDate()
    {
        return $this->consentDate;
    }

    /**
     * Sets a new consentDate
     *
     * @param \DateTime $consentDate
     * @return self
     */
    public function setConsentDate(\DateTime $consentDate)
    {
        $this->consentDate = $consentDate;
        return $this;
    }

    /**
     * Gets as consentExpireDate
     *
     * @return \DateTime
     */
    public function getConsentExpireDate()
    {
        return $this->consentExpireDate;
    }

    /**
     * Sets a new consentExpireDate
     *
     * @param \DateTime $consentExpireDate
     * @return self
     */
    public function setConsentExpireDate(\DateTime $consentExpireDate)
    {
        $this->consentExpireDate = $consentExpireDate;
        return $this;
    }

    /**
     * Gets as consentPurpose
     *
     * @return string
     */
    public function getConsentPurpose()
    {
        return $this->consentPurpose;
    }

    /**
     * Sets a new consentPurpose
     *
     * @param string $consentPurpose
     * @return self
     */
    public function setConsentPurpose($consentPurpose)
    {
        $this->consentPurpose = $consentPurpose;
        return $this;
    }

    /**
     * Gets as consentPurposeText
     *
     * @return string
     */
    public function getConsentPurposeText()
    {
        return $this->consentPurposeText;
    }

    /**
     * Sets a new consentPurposeText
     *
     * @param string $consentPurposeText
     * @return self
     */
    public function setConsentPurposeText($consentPurposeText)
    {
        $this->consentPurposeText = $consentPurposeText;
        return $this;
    }

    /**
     * Gets as otherConsentPurpose
     *
     * @return string
     */
    public function getOtherConsentPurpose()
    {
        return $this->otherConsentPurpose;
    }

    /**
     * Sets a new otherConsentPurpose
     *
     * @param string $otherConsentPurpose
     * @return self
     */
    public function setOtherConsentPurpose($otherConsentPurpose)
    {
        $this->otherConsentPurpose = $otherConsentPurpose;
        return $this;
    }

    /**
     * Gets as reportUser
     *
     * @return string
     */
    public function getReportUser()
    {
        return $this->reportUser;
    }

    /**
     * Sets a new reportUser
     *
     * @param string $reportUser
     * @return self
     */
    public function setReportUser($reportUser)
    {
        $this->reportUser = $reportUser;
        return $this;
    }

    /**
     * Gets as liability
     *
     * @return string
     */
    public function getLiability()
    {
        return $this->liability;
    }

    /**
     * Sets a new liability
     *
     * @param string $liability
     * @return self
     */
    public function setLiability($liability)
    {
        $this->liability = $liability;
        return $this;
    }

    /**
     * Gets as agreementDate
     *
     * @return \DateTime
     */
    public function getAgreementDate()
    {
        return $this->agreementDate;
    }

    /**
     * Sets a new agreementDate
     *
     * @param \DateTime $agreementDate
     * @return self
     */
    public function setAgreementDate(\DateTime $agreementDate)
    {
        $this->agreementDate = $agreementDate;
        return $this;
    }

    /**
     * Gets as transferReason
     *
     * @return int
     */
    public function getTransferReason()
    {
        return $this->transferReason;
    }

    /**
     * Sets a new transferReason
     *
     * @param int $transferReason
     * @return self
     */
    public function setTransferReason($transferReason)
    {
        $this->transferReason = $transferReason;
        return $this;
    }

    /**
     * Gets as consentPeriod
     *
     * @return int
     */
    public function getConsentPeriod()
    {
        return $this->consentPeriod;
    }

    /**
     * Sets a new consentPeriod
     *
     * @param int $consentPeriod
     * @return self
     */
    public function setConsentPeriod($consentPeriod)
    {
        $this->consentPeriod = $consentPeriod;
        return $this;
    }

    /**
     * Gets as reportUserRegNum
     *
     * @return string
     */
    public function getReportUserRegNum()
    {
        return $this->reportUserRegNum;
    }

    /**
     * Sets a new reportUserRegNum
     *
     * @param string $reportUserRegNum
     * @return self
     */
    public function setReportUserRegNum($reportUserRegNum)
    {
        $this->reportUserRegNum = $reportUserRegNum;
        return $this;
    }

    /**
     * Gets as reportUserTaxID
     *
     * @return string
     */
    public function getReportUserTaxID()
    {
        return $this->reportUserTaxID;
    }

    /**
     * Sets a new reportUserTaxID
     *
     * @param string $reportUserTaxID
     * @return self
     */
    public function setReportUserTaxID($reportUserTaxID)
    {
        $this->reportUserTaxID = $reportUserTaxID;
        return $this;
    }

    /**
     * Gets as consentHash
     *
     * @return string
     */
    public function getConsentHash()
    {
        return $this->consentHash;
    }

    /**
     * Sets a new consentHash
     *
     * @param string $consentHash
     * @return self
     */
    public function setConsentHash($consentHash)
    {
        $this->consentHash = $consentHash;
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


}

