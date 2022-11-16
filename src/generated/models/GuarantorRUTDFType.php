<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing GuarantorRUTDFType
 *
 * 
 * XSD Type: GuarantorRUTDF
 */
class GuarantorRUTDFType
{

    /**
     * @var string $guaranteeUuid
     */
    private $guaranteeUuid = null;

    /**
     * @var string $guaranteeVolume
     */
    private $guaranteeVolume = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var \DateTime $guaranteeAgreementDt
     */
    private $guaranteeAgreementDt = null;

    /**
     * @var \DateTime $guaranteeExpirationDate
     */
    private $guaranteeExpirationDate = null;

    /**
     * @var \DateTime $guaranteeFactExpirationDate
     */
    private $guaranteeFactExpirationDate = null;

    /**
     * @var string $guaranteeEndReason
     */
    private $guaranteeEndReason = null;

    /**
     * @var int $fid
     */
    private $fid = null;

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var string $acctSerialNum
     */
    private $acctSerialNum = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

    /**
     * Gets as guaranteeUuid
     *
     * @return string
     */
    public function getGuaranteeUuid()
    {
        return $this->guaranteeUuid;
    }

    /**
     * Sets a new guaranteeUuid
     *
     * @param string $guaranteeUuid
     * @return self
     */
    public function setGuaranteeUuid($guaranteeUuid)
    {
        $this->guaranteeUuid = $guaranteeUuid;
        return $this;
    }

    /**
     * Gets as guaranteeVolume
     *
     * @return string
     */
    public function getGuaranteeVolume()
    {
        return $this->guaranteeVolume;
    }

    /**
     * Sets a new guaranteeVolume
     *
     * @param string $guaranteeVolume
     * @return self
     */
    public function setGuaranteeVolume($guaranteeVolume)
    {
        $this->guaranteeVolume = $guaranteeVolume;
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
     * Gets as guaranteeAgreementDt
     *
     * @return \DateTime
     */
    public function getGuaranteeAgreementDt()
    {
        return $this->guaranteeAgreementDt;
    }

    /**
     * Sets a new guaranteeAgreementDt
     *
     * @param \DateTime $guaranteeAgreementDt
     * @return self
     */
    public function setGuaranteeAgreementDt(\DateTime $guaranteeAgreementDt)
    {
        $this->guaranteeAgreementDt = $guaranteeAgreementDt;
        return $this;
    }

    /**
     * Gets as guaranteeExpirationDate
     *
     * @return \DateTime
     */
    public function getGuaranteeExpirationDate()
    {
        return $this->guaranteeExpirationDate;
    }

    /**
     * Sets a new guaranteeExpirationDate
     *
     * @param \DateTime $guaranteeExpirationDate
     * @return self
     */
    public function setGuaranteeExpirationDate(\DateTime $guaranteeExpirationDate)
    {
        $this->guaranteeExpirationDate = $guaranteeExpirationDate;
        return $this;
    }

    /**
     * Gets as guaranteeFactExpirationDate
     *
     * @return \DateTime
     */
    public function getGuaranteeFactExpirationDate()
    {
        return $this->guaranteeFactExpirationDate;
    }

    /**
     * Sets a new guaranteeFactExpirationDate
     *
     * @param \DateTime $guaranteeFactExpirationDate
     * @return self
     */
    public function setGuaranteeFactExpirationDate(\DateTime $guaranteeFactExpirationDate)
    {
        $this->guaranteeFactExpirationDate = $guaranteeFactExpirationDate;
        return $this;
    }

    /**
     * Gets as guaranteeEndReason
     *
     * @return string
     */
    public function getGuaranteeEndReason()
    {
        return $this->guaranteeEndReason;
    }

    /**
     * Sets a new guaranteeEndReason
     *
     * @param string $guaranteeEndReason
     * @return self
     */
    public function setGuaranteeEndReason($guaranteeEndReason)
    {
        $this->guaranteeEndReason = $guaranteeEndReason;
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
     * Gets as acctSerialNum
     *
     * @return string
     */
    public function getAcctSerialNum()
    {
        return $this->acctSerialNum;
    }

    /**
     * Sets a new acctSerialNum
     *
     * @param string $acctSerialNum
     * @return self
     */
    public function setAcctSerialNum($acctSerialNum)
    {
        $this->acctSerialNum = $acctSerialNum;
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

