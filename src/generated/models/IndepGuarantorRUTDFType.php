<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing IndepGuarantorRUTDFType
 *
 * 
 * XSD Type: IndepGuarantorRUTDF
 */
class IndepGuarantorRUTDFType
{

    /**
     * @var string $indepGuaranteeUuid
     */
    private $indepGuaranteeUuid = null;

    /**
     * @var string $indepGuaranteeVolume
     */
    private $indepGuaranteeVolume = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var \DateTime $indepGuaranteeDt
     */
    private $indepGuaranteeDt = null;

    /**
     * @var \DateTime $indepGuaranteeExpirationDate
     */
    private $indepGuaranteeExpirationDate = null;

    /**
     * @var \DateTime $indepGuaranteeFactExpirationDate
     */
    private $indepGuaranteeFactExpirationDate = null;

    /**
     * @var string $indepGuaranteeEndReason
     */
    private $indepGuaranteeEndReason = null;

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
     * Gets as indepGuaranteeUuid
     *
     * @return string
     */
    public function getIndepGuaranteeUuid()
    {
        return $this->indepGuaranteeUuid;
    }

    /**
     * Sets a new indepGuaranteeUuid
     *
     * @param string $indepGuaranteeUuid
     * @return self
     */
    public function setIndepGuaranteeUuid($indepGuaranteeUuid)
    {
        $this->indepGuaranteeUuid = $indepGuaranteeUuid;
        return $this;
    }

    /**
     * Gets as indepGuaranteeVolume
     *
     * @return string
     */
    public function getIndepGuaranteeVolume()
    {
        return $this->indepGuaranteeVolume;
    }

    /**
     * Sets a new indepGuaranteeVolume
     *
     * @param string $indepGuaranteeVolume
     * @return self
     */
    public function setIndepGuaranteeVolume($indepGuaranteeVolume)
    {
        $this->indepGuaranteeVolume = $indepGuaranteeVolume;
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
     * Gets as indepGuaranteeDt
     *
     * @return \DateTime
     */
    public function getIndepGuaranteeDt()
    {
        return $this->indepGuaranteeDt;
    }

    /**
     * Sets a new indepGuaranteeDt
     *
     * @param \DateTime $indepGuaranteeDt
     * @return self
     */
    public function setIndepGuaranteeDt(\DateTime $indepGuaranteeDt)
    {
        $this->indepGuaranteeDt = $indepGuaranteeDt;
        return $this;
    }

    /**
     * Gets as indepGuaranteeExpirationDate
     *
     * @return \DateTime
     */
    public function getIndepGuaranteeExpirationDate()
    {
        return $this->indepGuaranteeExpirationDate;
    }

    /**
     * Sets a new indepGuaranteeExpirationDate
     *
     * @param \DateTime $indepGuaranteeExpirationDate
     * @return self
     */
    public function setIndepGuaranteeExpirationDate(\DateTime $indepGuaranteeExpirationDate)
    {
        $this->indepGuaranteeExpirationDate = $indepGuaranteeExpirationDate;
        return $this;
    }

    /**
     * Gets as indepGuaranteeFactExpirationDate
     *
     * @return \DateTime
     */
    public function getIndepGuaranteeFactExpirationDate()
    {
        return $this->indepGuaranteeFactExpirationDate;
    }

    /**
     * Sets a new indepGuaranteeFactExpirationDate
     *
     * @param \DateTime $indepGuaranteeFactExpirationDate
     * @return self
     */
    public function setIndepGuaranteeFactExpirationDate(\DateTime $indepGuaranteeFactExpirationDate)
    {
        $this->indepGuaranteeFactExpirationDate = $indepGuaranteeFactExpirationDate;
        return $this;
    }

    /**
     * Gets as indepGuaranteeEndReason
     *
     * @return string
     */
    public function getIndepGuaranteeEndReason()
    {
        return $this->indepGuaranteeEndReason;
    }

    /**
     * Sets a new indepGuaranteeEndReason
     *
     * @param string $indepGuaranteeEndReason
     * @return self
     */
    public function setIndepGuaranteeEndReason($indepGuaranteeEndReason)
    {
        $this->indepGuaranteeEndReason = $indepGuaranteeEndReason;
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

