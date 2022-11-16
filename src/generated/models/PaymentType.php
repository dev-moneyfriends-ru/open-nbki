<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing PaymentType
 *
 * 
 * XSD Type: Payment
 */
class PaymentType
{

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var int $acctSerialNum
     */
    private $acctSerialNum = null;

    /**
     * @var int $paymtAmt
     */
    private $paymtAmt = null;

    /**
     * @var int $paymtAmtDue
     */
    private $paymtAmtDue = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var \DateTime $paymtDate
     */
    private $paymtDate = null;

    /**
     * @var string $paymtVolume
     */
    private $paymtVolume = null;

    /**
     * @var int $m24Total
     */
    private $m24Total = null;

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
     * Gets as paymtAmt
     *
     * @return int
     */
    public function getPaymtAmt()
    {
        return $this->paymtAmt;
    }

    /**
     * Sets a new paymtAmt
     *
     * @param int $paymtAmt
     * @return self
     */
    public function setPaymtAmt($paymtAmt)
    {
        $this->paymtAmt = $paymtAmt;
        return $this;
    }

    /**
     * Gets as paymtAmtDue
     *
     * @return int
     */
    public function getPaymtAmtDue()
    {
        return $this->paymtAmtDue;
    }

    /**
     * Sets a new paymtAmtDue
     *
     * @param int $paymtAmtDue
     * @return self
     */
    public function setPaymtAmtDue($paymtAmtDue)
    {
        $this->paymtAmtDue = $paymtAmtDue;
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
     * Gets as paymtDate
     *
     * @return \DateTime
     */
    public function getPaymtDate()
    {
        return $this->paymtDate;
    }

    /**
     * Sets a new paymtDate
     *
     * @param \DateTime $paymtDate
     * @return self
     */
    public function setPaymtDate(\DateTime $paymtDate)
    {
        $this->paymtDate = $paymtDate;
        return $this;
    }

    /**
     * Gets as paymtVolume
     *
     * @return string
     */
    public function getPaymtVolume()
    {
        return $this->paymtVolume;
    }

    /**
     * Sets a new paymtVolume
     *
     * @param string $paymtVolume
     * @return self
     */
    public function setPaymtVolume($paymtVolume)
    {
        $this->paymtVolume = $paymtVolume;
        return $this;
    }

    /**
     * Gets as m24Total
     *
     * @return int
     */
    public function getM24Total()
    {
        return $this->m24Total;
    }

    /**
     * Sets a new m24Total
     *
     * @param int $m24Total
     * @return self
     */
    public function setM24Total($m24Total)
    {
        $this->m24Total = $m24Total;
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


}

