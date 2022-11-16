<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing SourceNonMonetObligRUTDFType
 *
 * 
 * XSD Type: SourceNonMonetObligRUTDF
 */
class SourceNonMonetObligRUTDFType
{

    /**
     * @var string $srcNonMonetOblig
     */
    private $srcNonMonetOblig = null;

    /**
     * @var string $srcNonMonetObligCode
     */
    private $srcNonMonetObligCode = null;

    /**
     * @var string $srcNonMonetObligObject
     */
    private $srcNonMonetObligObject = null;

    /**
     * @var \DateTime $srcNonMonetObligDt
     */
    private $srcNonMonetObligDt = null;

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
     * Gets as srcNonMonetOblig
     *
     * @return string
     */
    public function getSrcNonMonetOblig()
    {
        return $this->srcNonMonetOblig;
    }

    /**
     * Sets a new srcNonMonetOblig
     *
     * @param string $srcNonMonetOblig
     * @return self
     */
    public function setSrcNonMonetOblig($srcNonMonetOblig)
    {
        $this->srcNonMonetOblig = $srcNonMonetOblig;
        return $this;
    }

    /**
     * Gets as srcNonMonetObligCode
     *
     * @return string
     */
    public function getSrcNonMonetObligCode()
    {
        return $this->srcNonMonetObligCode;
    }

    /**
     * Sets a new srcNonMonetObligCode
     *
     * @param string $srcNonMonetObligCode
     * @return self
     */
    public function setSrcNonMonetObligCode($srcNonMonetObligCode)
    {
        $this->srcNonMonetObligCode = $srcNonMonetObligCode;
        return $this;
    }

    /**
     * Gets as srcNonMonetObligObject
     *
     * @return string
     */
    public function getSrcNonMonetObligObject()
    {
        return $this->srcNonMonetObligObject;
    }

    /**
     * Sets a new srcNonMonetObligObject
     *
     * @param string $srcNonMonetObligObject
     * @return self
     */
    public function setSrcNonMonetObligObject($srcNonMonetObligObject)
    {
        $this->srcNonMonetObligObject = $srcNonMonetObligObject;
        return $this;
    }

    /**
     * Gets as srcNonMonetObligDt
     *
     * @return \DateTime
     */
    public function getSrcNonMonetObligDt()
    {
        return $this->srcNonMonetObligDt;
    }

    /**
     * Sets a new srcNonMonetObligDt
     *
     * @param \DateTime $srcNonMonetObligDt
     * @return self
     */
    public function setSrcNonMonetObligDt(\DateTime $srcNonMonetObligDt)
    {
        $this->srcNonMonetObligDt = $srcNonMonetObligDt;
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

