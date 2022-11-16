<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing GuarantorType
 *
 * 
 * XSD Type: Guarantor
 */
class GuarantorType
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
     * @var string $guarantorIndicatorCode
     */
    private $guarantorIndicatorCode = null;

    /**
     * @var string $guarantorIndicatorCodeText
     */
    private $guarantorIndicatorCodeText = null;

    /**
     * @var string $guaranteeVolumeCode
     */
    private $guaranteeVolumeCode = null;

    /**
     * @var string $guaranteeVolumeCodeText
     */
    private $guaranteeVolumeCodeText = null;

    /**
     * @var int $guaranteeAmt
     */
    private $guaranteeAmt = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var \DateTime $guaranteeTerm
     */
    private $guaranteeTerm = null;

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
     * Gets as guarantorIndicatorCode
     *
     * @return string
     */
    public function getGuarantorIndicatorCode()
    {
        return $this->guarantorIndicatorCode;
    }

    /**
     * Sets a new guarantorIndicatorCode
     *
     * @param string $guarantorIndicatorCode
     * @return self
     */
    public function setGuarantorIndicatorCode($guarantorIndicatorCode)
    {
        $this->guarantorIndicatorCode = $guarantorIndicatorCode;
        return $this;
    }

    /**
     * Gets as guarantorIndicatorCodeText
     *
     * @return string
     */
    public function getGuarantorIndicatorCodeText()
    {
        return $this->guarantorIndicatorCodeText;
    }

    /**
     * Sets a new guarantorIndicatorCodeText
     *
     * @param string $guarantorIndicatorCodeText
     * @return self
     */
    public function setGuarantorIndicatorCodeText($guarantorIndicatorCodeText)
    {
        $this->guarantorIndicatorCodeText = $guarantorIndicatorCodeText;
        return $this;
    }

    /**
     * Gets as guaranteeVolumeCode
     *
     * @return string
     */
    public function getGuaranteeVolumeCode()
    {
        return $this->guaranteeVolumeCode;
    }

    /**
     * Sets a new guaranteeVolumeCode
     *
     * @param string $guaranteeVolumeCode
     * @return self
     */
    public function setGuaranteeVolumeCode($guaranteeVolumeCode)
    {
        $this->guaranteeVolumeCode = $guaranteeVolumeCode;
        return $this;
    }

    /**
     * Gets as guaranteeVolumeCodeText
     *
     * @return string
     */
    public function getGuaranteeVolumeCodeText()
    {
        return $this->guaranteeVolumeCodeText;
    }

    /**
     * Sets a new guaranteeVolumeCodeText
     *
     * @param string $guaranteeVolumeCodeText
     * @return self
     */
    public function setGuaranteeVolumeCodeText($guaranteeVolumeCodeText)
    {
        $this->guaranteeVolumeCodeText = $guaranteeVolumeCodeText;
        return $this;
    }

    /**
     * Gets as guaranteeAmt
     *
     * @return int
     */
    public function getGuaranteeAmt()
    {
        return $this->guaranteeAmt;
    }

    /**
     * Sets a new guaranteeAmt
     *
     * @param int $guaranteeAmt
     * @return self
     */
    public function setGuaranteeAmt($guaranteeAmt)
    {
        $this->guaranteeAmt = $guaranteeAmt;
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
     * Gets as guaranteeTerm
     *
     * @return \DateTime
     */
    public function getGuaranteeTerm()
    {
        return $this->guaranteeTerm;
    }

    /**
     * Sets a new guaranteeTerm
     *
     * @param \DateTime $guaranteeTerm
     * @return self
     */
    public function setGuaranteeTerm(\DateTime $guaranteeTerm)
    {
        $this->guaranteeTerm = $guaranteeTerm;
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

