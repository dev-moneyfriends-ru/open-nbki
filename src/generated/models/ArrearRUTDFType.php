<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing ArrearRUTDFType
 *
 * 
 * XSD Type: ArrearRUTDF
 */
class ArrearRUTDFType
{

    /**
     * @var string $startAmtOutstanding
     */
    private $startAmtOutstanding = null;

    /**
     * @var int $lastPaymentDueCode
     */
    private $lastPaymentDueCode = null;

    /**
     * @var string $amtOutstanding
     */
    private $amtOutstanding = null;

    /**
     * @var string $principalOutstanding
     */
    private $principalOutstanding = null;

    /**
     * @var string $intOutstanding
     */
    private $intOutstanding = null;

    /**
     * @var string $otherAmtOutstanding
     */
    private $otherAmtOutstanding = null;

    /**
     * @var \DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * @var int $unconfirmGrace
     */
    private $unconfirmGrace = null;

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
     * Gets as startAmtOutstanding
     *
     * @return string
     */
    public function getStartAmtOutstanding()
    {
        return $this->startAmtOutstanding;
    }

    /**
     * Sets a new startAmtOutstanding
     *
     * @param string $startAmtOutstanding
     * @return self
     */
    public function setStartAmtOutstanding($startAmtOutstanding)
    {
        $this->startAmtOutstanding = $startAmtOutstanding;
        return $this;
    }

    /**
     * Gets as lastPaymentDueCode
     *
     * @return int
     */
    public function getLastPaymentDueCode()
    {
        return $this->lastPaymentDueCode;
    }

    /**
     * Sets a new lastPaymentDueCode
     *
     * @param int $lastPaymentDueCode
     * @return self
     */
    public function setLastPaymentDueCode($lastPaymentDueCode)
    {
        $this->lastPaymentDueCode = $lastPaymentDueCode;
        return $this;
    }

    /**
     * Gets as amtOutstanding
     *
     * @return string
     */
    public function getAmtOutstanding()
    {
        return $this->amtOutstanding;
    }

    /**
     * Sets a new amtOutstanding
     *
     * @param string $amtOutstanding
     * @return self
     */
    public function setAmtOutstanding($amtOutstanding)
    {
        $this->amtOutstanding = $amtOutstanding;
        return $this;
    }

    /**
     * Gets as principalOutstanding
     *
     * @return string
     */
    public function getPrincipalOutstanding()
    {
        return $this->principalOutstanding;
    }

    /**
     * Sets a new principalOutstanding
     *
     * @param string $principalOutstanding
     * @return self
     */
    public function setPrincipalOutstanding($principalOutstanding)
    {
        $this->principalOutstanding = $principalOutstanding;
        return $this;
    }

    /**
     * Gets as intOutstanding
     *
     * @return string
     */
    public function getIntOutstanding()
    {
        return $this->intOutstanding;
    }

    /**
     * Sets a new intOutstanding
     *
     * @param string $intOutstanding
     * @return self
     */
    public function setIntOutstanding($intOutstanding)
    {
        $this->intOutstanding = $intOutstanding;
        return $this;
    }

    /**
     * Gets as otherAmtOutstanding
     *
     * @return string
     */
    public function getOtherAmtOutstanding()
    {
        return $this->otherAmtOutstanding;
    }

    /**
     * Sets a new otherAmtOutstanding
     *
     * @param string $otherAmtOutstanding
     * @return self
     */
    public function setOtherAmtOutstanding($otherAmtOutstanding)
    {
        $this->otherAmtOutstanding = $otherAmtOutstanding;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * @return \DateTime
     */
    public function getCalcDate()
    {
        return $this->calcDate;
    }

    /**
     * Sets a new calcDate
     *
     * @param \DateTime $calcDate
     * @return self
     */
    public function setCalcDate(\DateTime $calcDate)
    {
        $this->calcDate = $calcDate;
        return $this;
    }

    /**
     * Gets as unconfirmGrace
     *
     * @return int
     */
    public function getUnconfirmGrace()
    {
        return $this->unconfirmGrace;
    }

    /**
     * Sets a new unconfirmGrace
     *
     * @param int $unconfirmGrace
     * @return self
     */
    public function setUnconfirmGrace($unconfirmGrace)
    {
        $this->unconfirmGrace = $unconfirmGrace;
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

