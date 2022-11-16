<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing AmendmentRUTDFType
 *
 * 
 * XSD Type: AmendmentRUTDF
 */
class AmendmentRUTDFType
{

    /**
     * @var \DateTime $amendDate
     */
    private $amendDate = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $specType
     */
    private $specType = null;

    /**
     * @var string $otherDesc
     */
    private $otherDesc = null;

    /**
     * @var \DateTime $startDt
     */
    private $startDt = null;

    /**
     * @var \DateTime $planEndDt
     */
    private $planEndDt = null;

    /**
     * @var \DateTime $factEndDt
     */
    private $factEndDt = null;

    /**
     * @var string $endReason
     */
    private $endReason = null;

    /**
     * @var string $curRate
     */
    private $curRate = null;

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
     * Gets as amendDate
     *
     * @return \DateTime
     */
    public function getAmendDate()
    {
        return $this->amendDate;
    }

    /**
     * Sets a new amendDate
     *
     * @param \DateTime $amendDate
     * @return self
     */
    public function setAmendDate(\DateTime $amendDate)
    {
        $this->amendDate = $amendDate;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as specType
     *
     * @return string
     */
    public function getSpecType()
    {
        return $this->specType;
    }

    /**
     * Sets a new specType
     *
     * @param string $specType
     * @return self
     */
    public function setSpecType($specType)
    {
        $this->specType = $specType;
        return $this;
    }

    /**
     * Gets as otherDesc
     *
     * @return string
     */
    public function getOtherDesc()
    {
        return $this->otherDesc;
    }

    /**
     * Sets a new otherDesc
     *
     * @param string $otherDesc
     * @return self
     */
    public function setOtherDesc($otherDesc)
    {
        $this->otherDesc = $otherDesc;
        return $this;
    }

    /**
     * Gets as startDt
     *
     * @return \DateTime
     */
    public function getStartDt()
    {
        return $this->startDt;
    }

    /**
     * Sets a new startDt
     *
     * @param \DateTime $startDt
     * @return self
     */
    public function setStartDt(\DateTime $startDt)
    {
        $this->startDt = $startDt;
        return $this;
    }

    /**
     * Gets as planEndDt
     *
     * @return \DateTime
     */
    public function getPlanEndDt()
    {
        return $this->planEndDt;
    }

    /**
     * Sets a new planEndDt
     *
     * @param \DateTime $planEndDt
     * @return self
     */
    public function setPlanEndDt(\DateTime $planEndDt)
    {
        $this->planEndDt = $planEndDt;
        return $this;
    }

    /**
     * Gets as factEndDt
     *
     * @return \DateTime
     */
    public function getFactEndDt()
    {
        return $this->factEndDt;
    }

    /**
     * Sets a new factEndDt
     *
     * @param \DateTime $factEndDt
     * @return self
     */
    public function setFactEndDt(\DateTime $factEndDt)
    {
        $this->factEndDt = $factEndDt;
        return $this;
    }

    /**
     * Gets as endReason
     *
     * @return string
     */
    public function getEndReason()
    {
        return $this->endReason;
    }

    /**
     * Sets a new endReason
     *
     * @param string $endReason
     * @return self
     */
    public function setEndReason($endReason)
    {
        $this->endReason = $endReason;
        return $this;
    }

    /**
     * Gets as curRate
     *
     * @return string
     */
    public function getCurRate()
    {
        return $this->curRate;
    }

    /**
     * Sets a new curRate
     *
     * @param string $curRate
     * @return self
     */
    public function setCurRate($curRate)
    {
        $this->curRate = $curRate;
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

