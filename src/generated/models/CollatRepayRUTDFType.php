<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing CollatRepayRUTDFType
 *
 * 
 * XSD Type: CollatRepayRUTDF
 */
class CollatRepayRUTDFType
{

    /**
     * @var string $collatRepayCode
     */
    private $collatRepayCode = null;

    /**
     * @var \DateTime $collatRepayDt
     */
    private $collatRepayDt = null;

    /**
     * @var string $collatRepayAmt
     */
    private $collatRepayAmt = null;

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
     * Gets as collatRepayCode
     *
     * @return string
     */
    public function getCollatRepayCode()
    {
        return $this->collatRepayCode;
    }

    /**
     * Sets a new collatRepayCode
     *
     * @param string $collatRepayCode
     * @return self
     */
    public function setCollatRepayCode($collatRepayCode)
    {
        $this->collatRepayCode = $collatRepayCode;
        return $this;
    }

    /**
     * Gets as collatRepayDt
     *
     * @return \DateTime
     */
    public function getCollatRepayDt()
    {
        return $this->collatRepayDt;
    }

    /**
     * Sets a new collatRepayDt
     *
     * @param \DateTime $collatRepayDt
     * @return self
     */
    public function setCollatRepayDt(\DateTime $collatRepayDt)
    {
        $this->collatRepayDt = $collatRepayDt;
        return $this;
    }

    /**
     * Gets as collatRepayAmt
     *
     * @return string
     */
    public function getCollatRepayAmt()
    {
        return $this->collatRepayAmt;
    }

    /**
     * Sets a new collatRepayAmt
     *
     * @param string $collatRepayAmt
     * @return self
     */
    public function setCollatRepayAmt($collatRepayAmt)
    {
        $this->collatRepayAmt = $collatRepayAmt;
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

