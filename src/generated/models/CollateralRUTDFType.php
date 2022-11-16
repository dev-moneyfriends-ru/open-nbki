<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing CollateralRUTDFType
 *
 * 
 * XSD Type: CollateralRUTDF
 */
class CollateralRUTDFType
{

    /**
     * @var string $collateralCode
     */
    private $collateralCode = null;

    /**
     * @var string $collateralId
     */
    private $collateralId = null;

    /**
     * @var \DateTime $collateralAgreementDt
     */
    private $collateralAgreementDt = null;

    /**
     * @var string $collateralValue
     */
    private $collateralValue = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var \DateTime $collateralDate
     */
    private $collateralDate = null;

    /**
     * @var int $collateralEncum
     */
    private $collateralEncum = null;

    /**
     * @var \DateTime $collateralExpirationDate
     */
    private $collateralExpirationDate = null;

    /**
     * @var \DateTime $collateralFactExpirationDate
     */
    private $collateralFactExpirationDate = null;

    /**
     * @var string $collateralEndReason
     */
    private $collateralEndReason = null;

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
     * Gets as collateralCode
     *
     * @return string
     */
    public function getCollateralCode()
    {
        return $this->collateralCode;
    }

    /**
     * Sets a new collateralCode
     *
     * @param string $collateralCode
     * @return self
     */
    public function setCollateralCode($collateralCode)
    {
        $this->collateralCode = $collateralCode;
        return $this;
    }

    /**
     * Gets as collateralId
     *
     * @return string
     */
    public function getCollateralId()
    {
        return $this->collateralId;
    }

    /**
     * Sets a new collateralId
     *
     * @param string $collateralId
     * @return self
     */
    public function setCollateralId($collateralId)
    {
        $this->collateralId = $collateralId;
        return $this;
    }

    /**
     * Gets as collateralAgreementDt
     *
     * @return \DateTime
     */
    public function getCollateralAgreementDt()
    {
        return $this->collateralAgreementDt;
    }

    /**
     * Sets a new collateralAgreementDt
     *
     * @param \DateTime $collateralAgreementDt
     * @return self
     */
    public function setCollateralAgreementDt(\DateTime $collateralAgreementDt)
    {
        $this->collateralAgreementDt = $collateralAgreementDt;
        return $this;
    }

    /**
     * Gets as collateralValue
     *
     * @return string
     */
    public function getCollateralValue()
    {
        return $this->collateralValue;
    }

    /**
     * Sets a new collateralValue
     *
     * @param string $collateralValue
     * @return self
     */
    public function setCollateralValue($collateralValue)
    {
        $this->collateralValue = $collateralValue;
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
     * Gets as collateralDate
     *
     * @return \DateTime
     */
    public function getCollateralDate()
    {
        return $this->collateralDate;
    }

    /**
     * Sets a new collateralDate
     *
     * @param \DateTime $collateralDate
     * @return self
     */
    public function setCollateralDate(\DateTime $collateralDate)
    {
        $this->collateralDate = $collateralDate;
        return $this;
    }

    /**
     * Gets as collateralEncum
     *
     * @return int
     */
    public function getCollateralEncum()
    {
        return $this->collateralEncum;
    }

    /**
     * Sets a new collateralEncum
     *
     * @param int $collateralEncum
     * @return self
     */
    public function setCollateralEncum($collateralEncum)
    {
        $this->collateralEncum = $collateralEncum;
        return $this;
    }

    /**
     * Gets as collateralExpirationDate
     *
     * @return \DateTime
     */
    public function getCollateralExpirationDate()
    {
        return $this->collateralExpirationDate;
    }

    /**
     * Sets a new collateralExpirationDate
     *
     * @param \DateTime $collateralExpirationDate
     * @return self
     */
    public function setCollateralExpirationDate(\DateTime $collateralExpirationDate)
    {
        $this->collateralExpirationDate = $collateralExpirationDate;
        return $this;
    }

    /**
     * Gets as collateralFactExpirationDate
     *
     * @return \DateTime
     */
    public function getCollateralFactExpirationDate()
    {
        return $this->collateralFactExpirationDate;
    }

    /**
     * Sets a new collateralFactExpirationDate
     *
     * @param \DateTime $collateralFactExpirationDate
     * @return self
     */
    public function setCollateralFactExpirationDate(\DateTime $collateralFactExpirationDate)
    {
        $this->collateralFactExpirationDate = $collateralFactExpirationDate;
        return $this;
    }

    /**
     * Gets as collateralEndReason
     *
     * @return string
     */
    public function getCollateralEndReason()
    {
        return $this->collateralEndReason;
    }

    /**
     * Sets a new collateralEndReason
     *
     * @param string $collateralEndReason
     * @return self
     */
    public function setCollateralEndReason($collateralEndReason)
    {
        $this->collateralEndReason = $collateralEndReason;
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

