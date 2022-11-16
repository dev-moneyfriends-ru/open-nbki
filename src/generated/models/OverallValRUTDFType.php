<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing OverallValRUTDFType
 *
 * 
 * XSD Type: OverallValRUTDF
 */
class OverallValRUTDFType
{

    /**
     * @var string $creditTotalAmt
     */
    private $creditTotalAmt = null;

    /**
     * @var string $creditTotalMonetaryAmt
     */
    private $creditTotalMonetaryAmt = null;

    /**
     * @var \DateTime $creditTotalAmtDate
     */
    private $creditTotalAmtDate = null;

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
     * Gets as creditTotalAmt
     *
     * @return string
     */
    public function getCreditTotalAmt()
    {
        return $this->creditTotalAmt;
    }

    /**
     * Sets a new creditTotalAmt
     *
     * @param string $creditTotalAmt
     * @return self
     */
    public function setCreditTotalAmt($creditTotalAmt)
    {
        $this->creditTotalAmt = $creditTotalAmt;
        return $this;
    }

    /**
     * Gets as creditTotalMonetaryAmt
     *
     * @return string
     */
    public function getCreditTotalMonetaryAmt()
    {
        return $this->creditTotalMonetaryAmt;
    }

    /**
     * Sets a new creditTotalMonetaryAmt
     *
     * @param string $creditTotalMonetaryAmt
     * @return self
     */
    public function setCreditTotalMonetaryAmt($creditTotalMonetaryAmt)
    {
        $this->creditTotalMonetaryAmt = $creditTotalMonetaryAmt;
        return $this;
    }

    /**
     * Gets as creditTotalAmtDate
     *
     * @return \DateTime
     */
    public function getCreditTotalAmtDate()
    {
        return $this->creditTotalAmtDate;
    }

    /**
     * Sets a new creditTotalAmtDate
     *
     * @param \DateTime $creditTotalAmtDate
     * @return self
     */
    public function setCreditTotalAmtDate(\DateTime $creditTotalAmtDate)
    {
        $this->creditTotalAmtDate = $creditTotalAmtDate;
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

