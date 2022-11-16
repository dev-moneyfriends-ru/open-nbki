<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing CollateralType
 *
 * 
 * XSD Type: Collateral
 */
class CollateralType
{

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var int $acctSerialNum
     */
    private $acctSerialNum = null;

    /**
     * @var string $agreementNumber
     */
    private $agreementNumber = null;

    /**
     * @var string $collateralCode
     */
    private $collateralCode = null;

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
     * @var \DateTime $collateralExpirationDate
     */
    private $collateralExpirationDate = null;

    /**
     * @var string $collateral1Text
     */
    private $collateral1Text = null;

    /**
     * @var string $collateral2Text
     */
    private $collateral2Text = null;

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
     * @var string $freezeFlag
     */
    private $freezeFlag = null;

    /**
     * @var string $suppressFlag
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
     * @return int
     */
    public function getAcctSerialNum()
    {
        return $this->acctSerialNum;
    }

    /**
     * Sets a new acctSerialNum
     *
     * @param int $acctSerialNum
     * @return self
     */
    public function setAcctSerialNum($acctSerialNum)
    {
        $this->acctSerialNum = $acctSerialNum;
        return $this;
    }

    /**
     * Gets as agreementNumber
     *
     * @return string
     */
    public function getAgreementNumber()
    {
        return $this->agreementNumber;
    }

    /**
     * Sets a new agreementNumber
     *
     * @param string $agreementNumber
     * @return self
     */
    public function setAgreementNumber($agreementNumber)
    {
        $this->agreementNumber = $agreementNumber;
        return $this;
    }

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
     * Gets as collateral1Text
     *
     * @return string
     */
    public function getCollateral1Text()
    {
        return $this->collateral1Text;
    }

    /**
     * Sets a new collateral1Text
     *
     * @param string $collateral1Text
     * @return self
     */
    public function setCollateral1Text($collateral1Text)
    {
        $this->collateral1Text = $collateral1Text;
        return $this;
    }

    /**
     * Gets as collateral2Text
     *
     * @return string
     */
    public function getCollateral2Text()
    {
        return $this->collateral2Text;
    }

    /**
     * Sets a new collateral2Text
     *
     * @param string $collateral2Text
     * @return self
     */
    public function setCollateral2Text($collateral2Text)
    {
        $this->collateral2Text = $collateral2Text;
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
     * Gets as freezeFlag
     *
     * @return string
     */
    public function getFreezeFlag()
    {
        return $this->freezeFlag;
    }

    /**
     * Sets a new freezeFlag
     *
     * @param string $freezeFlag
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
     * @return string
     */
    public function getSuppressFlag()
    {
        return $this->suppressFlag;
    }

    /**
     * Sets a new suppressFlag
     *
     * @param string $suppressFlag
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


}

