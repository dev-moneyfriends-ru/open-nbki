<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing LegalItemsRUTDFType
 *
 * 
 * XSD Type: LegalItemsRUTDF
 */
class LegalItemsRUTDFType
{

    /**
     * @var int $hasCourtAct
     */
    private $hasCourtAct = null;

    /**
     * @var \DateTime $courtActDt
     */
    private $courtActDt = null;

    /**
     * @var string $courtActNum
     */
    private $courtActNum = null;

    /**
     * @var string $resolution
     */
    private $resolution = null;

    /**
     * @var int $courtActEffectCode
     */
    private $courtActEffectCode = null;

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
     * Gets as hasCourtAct
     *
     * @return int
     */
    public function getHasCourtAct()
    {
        return $this->hasCourtAct;
    }

    /**
     * Sets a new hasCourtAct
     *
     * @param int $hasCourtAct
     * @return self
     */
    public function setHasCourtAct($hasCourtAct)
    {
        $this->hasCourtAct = $hasCourtAct;
        return $this;
    }

    /**
     * Gets as courtActDt
     *
     * @return \DateTime
     */
    public function getCourtActDt()
    {
        return $this->courtActDt;
    }

    /**
     * Sets a new courtActDt
     *
     * @param \DateTime $courtActDt
     * @return self
     */
    public function setCourtActDt(\DateTime $courtActDt)
    {
        $this->courtActDt = $courtActDt;
        return $this;
    }

    /**
     * Gets as courtActNum
     *
     * @return string
     */
    public function getCourtActNum()
    {
        return $this->courtActNum;
    }

    /**
     * Sets a new courtActNum
     *
     * @param string $courtActNum
     * @return self
     */
    public function setCourtActNum($courtActNum)
    {
        $this->courtActNum = $courtActNum;
        return $this;
    }

    /**
     * Gets as resolution
     *
     * @return string
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Sets a new resolution
     *
     * @param string $resolution
     * @return self
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
        return $this;
    }

    /**
     * Gets as courtActEffectCode
     *
     * @return int
     */
    public function getCourtActEffectCode()
    {
        return $this->courtActEffectCode;
    }

    /**
     * Sets a new courtActEffectCode
     *
     * @param int $courtActEffectCode
     * @return self
     */
    public function setCourtActEffectCode($courtActEffectCode)
    {
        $this->courtActEffectCode = $courtActEffectCode;
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

