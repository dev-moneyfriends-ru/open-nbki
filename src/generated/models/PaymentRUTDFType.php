<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing PaymentRUTDFType
 *
 * 
 * XSD Type: PaymentRUTDF
 */
class PaymentRUTDFType
{

    /**
     * @var \DateTime $paymtDate
     */
    private $paymtDate = null;

    /**
     * @var string $paymtAmt
     */
    private $paymtAmt = null;

    /**
     * @var string $principalPaymtAmt
     */
    private $principalPaymtAmt = null;

    /**
     * @var string $intPaymtAmt
     */
    private $intPaymtAmt = null;

    /**
     * @var string $otherPaymtAmt
     */
    private $otherPaymtAmt = null;

    /**
     * @var string $totalAmt
     */
    private $totalAmt = null;

    /**
     * @var string $principalTotalAmt
     */
    private $principalTotalAmt = null;

    /**
     * @var string $intTotalAmt
     */
    private $intTotalAmt = null;

    /**
     * @var string $otherTotalAmt
     */
    private $otherTotalAmt = null;

    /**
     * @var string $amtKeepCode
     */
    private $amtKeepCode = null;

    /**
     * @var string $termsDueCode
     */
    private $termsDueCode = null;

    /**
     * @var int $daysPastDue
     */
    private $daysPastDue = null;

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
     * Gets as paymtAmt
     *
     * @return string
     */
    public function getPaymtAmt()
    {
        return $this->paymtAmt;
    }

    /**
     * Sets a new paymtAmt
     *
     * @param string $paymtAmt
     * @return self
     */
    public function setPaymtAmt($paymtAmt)
    {
        $this->paymtAmt = $paymtAmt;
        return $this;
    }

    /**
     * Gets as principalPaymtAmt
     *
     * @return string
     */
    public function getPrincipalPaymtAmt()
    {
        return $this->principalPaymtAmt;
    }

    /**
     * Sets a new principalPaymtAmt
     *
     * @param string $principalPaymtAmt
     * @return self
     */
    public function setPrincipalPaymtAmt($principalPaymtAmt)
    {
        $this->principalPaymtAmt = $principalPaymtAmt;
        return $this;
    }

    /**
     * Gets as intPaymtAmt
     *
     * @return string
     */
    public function getIntPaymtAmt()
    {
        return $this->intPaymtAmt;
    }

    /**
     * Sets a new intPaymtAmt
     *
     * @param string $intPaymtAmt
     * @return self
     */
    public function setIntPaymtAmt($intPaymtAmt)
    {
        $this->intPaymtAmt = $intPaymtAmt;
        return $this;
    }

    /**
     * Gets as otherPaymtAmt
     *
     * @return string
     */
    public function getOtherPaymtAmt()
    {
        return $this->otherPaymtAmt;
    }

    /**
     * Sets a new otherPaymtAmt
     *
     * @param string $otherPaymtAmt
     * @return self
     */
    public function setOtherPaymtAmt($otherPaymtAmt)
    {
        $this->otherPaymtAmt = $otherPaymtAmt;
        return $this;
    }

    /**
     * Gets as totalAmt
     *
     * @return string
     */
    public function getTotalAmt()
    {
        return $this->totalAmt;
    }

    /**
     * Sets a new totalAmt
     *
     * @param string $totalAmt
     * @return self
     */
    public function setTotalAmt($totalAmt)
    {
        $this->totalAmt = $totalAmt;
        return $this;
    }

    /**
     * Gets as principalTotalAmt
     *
     * @return string
     */
    public function getPrincipalTotalAmt()
    {
        return $this->principalTotalAmt;
    }

    /**
     * Sets a new principalTotalAmt
     *
     * @param string $principalTotalAmt
     * @return self
     */
    public function setPrincipalTotalAmt($principalTotalAmt)
    {
        $this->principalTotalAmt = $principalTotalAmt;
        return $this;
    }

    /**
     * Gets as intTotalAmt
     *
     * @return string
     */
    public function getIntTotalAmt()
    {
        return $this->intTotalAmt;
    }

    /**
     * Sets a new intTotalAmt
     *
     * @param string $intTotalAmt
     * @return self
     */
    public function setIntTotalAmt($intTotalAmt)
    {
        $this->intTotalAmt = $intTotalAmt;
        return $this;
    }

    /**
     * Gets as otherTotalAmt
     *
     * @return string
     */
    public function getOtherTotalAmt()
    {
        return $this->otherTotalAmt;
    }

    /**
     * Sets a new otherTotalAmt
     *
     * @param string $otherTotalAmt
     * @return self
     */
    public function setOtherTotalAmt($otherTotalAmt)
    {
        $this->otherTotalAmt = $otherTotalAmt;
        return $this;
    }

    /**
     * Gets as amtKeepCode
     *
     * @return string
     */
    public function getAmtKeepCode()
    {
        return $this->amtKeepCode;
    }

    /**
     * Sets a new amtKeepCode
     *
     * @param string $amtKeepCode
     * @return self
     */
    public function setAmtKeepCode($amtKeepCode)
    {
        $this->amtKeepCode = $amtKeepCode;
        return $this;
    }

    /**
     * Gets as termsDueCode
     *
     * @return string
     */
    public function getTermsDueCode()
    {
        return $this->termsDueCode;
    }

    /**
     * Sets a new termsDueCode
     *
     * @param string $termsDueCode
     * @return self
     */
    public function setTermsDueCode($termsDueCode)
    {
        $this->termsDueCode = $termsDueCode;
        return $this;
    }

    /**
     * Gets as daysPastDue
     *
     * @return int
     */
    public function getDaysPastDue()
    {
        return $this->daysPastDue;
    }

    /**
     * Sets a new daysPastDue
     *
     * @param int $daysPastDue
     * @return self
     */
    public function setDaysPastDue($daysPastDue)
    {
        $this->daysPastDue = $daysPastDue;
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

