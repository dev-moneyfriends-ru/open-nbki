<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing BankGuaranteeType
 *
 * 
 * XSD Type: BankGuarantee
 */
class BankGuaranteeType
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
     * @var string $bankGuaranteeIndicatorCode
     */
    private $bankGuaranteeIndicatorCode = null;

    /**
     * @var string $bankGuaranteeIndicatorCodeText
     */
    private $bankGuaranteeIndicatorCodeText = null;

    /**
     * @var string $bankGuaranteeVolumeCode
     */
    private $bankGuaranteeVolumeCode = null;

    /**
     * @var string $bankGuaranteeVolumeCodeText
     */
    private $bankGuaranteeVolumeCodeText = null;

    /**
     * @var int $bankGuaranteeAmt
     */
    private $bankGuaranteeAmt = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var \DateTime $bankGuaranteeTerm
     */
    private $bankGuaranteeTerm = null;

    /**
     * @var string $bankGuaranteeOtherTermination
     */
    private $bankGuaranteeOtherTermination = null;

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
     * Gets as bankGuaranteeIndicatorCode
     *
     * @return string
     */
    public function getBankGuaranteeIndicatorCode()
    {
        return $this->bankGuaranteeIndicatorCode;
    }

    /**
     * Sets a new bankGuaranteeIndicatorCode
     *
     * @param string $bankGuaranteeIndicatorCode
     * @return self
     */
    public function setBankGuaranteeIndicatorCode($bankGuaranteeIndicatorCode)
    {
        $this->bankGuaranteeIndicatorCode = $bankGuaranteeIndicatorCode;
        return $this;
    }

    /**
     * Gets as bankGuaranteeIndicatorCodeText
     *
     * @return string
     */
    public function getBankGuaranteeIndicatorCodeText()
    {
        return $this->bankGuaranteeIndicatorCodeText;
    }

    /**
     * Sets a new bankGuaranteeIndicatorCodeText
     *
     * @param string $bankGuaranteeIndicatorCodeText
     * @return self
     */
    public function setBankGuaranteeIndicatorCodeText($bankGuaranteeIndicatorCodeText)
    {
        $this->bankGuaranteeIndicatorCodeText = $bankGuaranteeIndicatorCodeText;
        return $this;
    }

    /**
     * Gets as bankGuaranteeVolumeCode
     *
     * @return string
     */
    public function getBankGuaranteeVolumeCode()
    {
        return $this->bankGuaranteeVolumeCode;
    }

    /**
     * Sets a new bankGuaranteeVolumeCode
     *
     * @param string $bankGuaranteeVolumeCode
     * @return self
     */
    public function setBankGuaranteeVolumeCode($bankGuaranteeVolumeCode)
    {
        $this->bankGuaranteeVolumeCode = $bankGuaranteeVolumeCode;
        return $this;
    }

    /**
     * Gets as bankGuaranteeVolumeCodeText
     *
     * @return string
     */
    public function getBankGuaranteeVolumeCodeText()
    {
        return $this->bankGuaranteeVolumeCodeText;
    }

    /**
     * Sets a new bankGuaranteeVolumeCodeText
     *
     * @param string $bankGuaranteeVolumeCodeText
     * @return self
     */
    public function setBankGuaranteeVolumeCodeText($bankGuaranteeVolumeCodeText)
    {
        $this->bankGuaranteeVolumeCodeText = $bankGuaranteeVolumeCodeText;
        return $this;
    }

    /**
     * Gets as bankGuaranteeAmt
     *
     * @return int
     */
    public function getBankGuaranteeAmt()
    {
        return $this->bankGuaranteeAmt;
    }

    /**
     * Sets a new bankGuaranteeAmt
     *
     * @param int $bankGuaranteeAmt
     * @return self
     */
    public function setBankGuaranteeAmt($bankGuaranteeAmt)
    {
        $this->bankGuaranteeAmt = $bankGuaranteeAmt;
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
     * Gets as bankGuaranteeTerm
     *
     * @return \DateTime
     */
    public function getBankGuaranteeTerm()
    {
        return $this->bankGuaranteeTerm;
    }

    /**
     * Sets a new bankGuaranteeTerm
     *
     * @param \DateTime $bankGuaranteeTerm
     * @return self
     */
    public function setBankGuaranteeTerm(\DateTime $bankGuaranteeTerm)
    {
        $this->bankGuaranteeTerm = $bankGuaranteeTerm;
        return $this;
    }

    /**
     * Gets as bankGuaranteeOtherTermination
     *
     * @return string
     */
    public function getBankGuaranteeOtherTermination()
    {
        return $this->bankGuaranteeOtherTermination;
    }

    /**
     * Sets a new bankGuaranteeOtherTermination
     *
     * @param string $bankGuaranteeOtherTermination
     * @return self
     */
    public function setBankGuaranteeOtherTermination($bankGuaranteeOtherTermination)
    {
        $this->bankGuaranteeOtherTermination = $bankGuaranteeOtherTermination;
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

