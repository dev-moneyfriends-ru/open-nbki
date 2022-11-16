<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing SubjectNonMonetObligRUTDFType
 *
 * 
 * XSD Type: SubjectNonMonetObligRUTDF
 */
class SubjectNonMonetObligRUTDFType
{

    /**
     * @var string $subjNonMonetOblig
     */
    private $subjNonMonetOblig = null;

    /**
     * @var string $subjNonMonetObligObject
     */
    private $subjNonMonetObligObject = null;

    /**
     * @var string $subjNonMonetObligRegul
     */
    private $subjNonMonetObligRegul = null;

    /**
     * @var int $subjNonMonetObligAdverseCode
     */
    private $subjNonMonetObligAdverseCode = null;

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
     * Gets as subjNonMonetOblig
     *
     * @return string
     */
    public function getSubjNonMonetOblig()
    {
        return $this->subjNonMonetOblig;
    }

    /**
     * Sets a new subjNonMonetOblig
     *
     * @param string $subjNonMonetOblig
     * @return self
     */
    public function setSubjNonMonetOblig($subjNonMonetOblig)
    {
        $this->subjNonMonetOblig = $subjNonMonetOblig;
        return $this;
    }

    /**
     * Gets as subjNonMonetObligObject
     *
     * @return string
     */
    public function getSubjNonMonetObligObject()
    {
        return $this->subjNonMonetObligObject;
    }

    /**
     * Sets a new subjNonMonetObligObject
     *
     * @param string $subjNonMonetObligObject
     * @return self
     */
    public function setSubjNonMonetObligObject($subjNonMonetObligObject)
    {
        $this->subjNonMonetObligObject = $subjNonMonetObligObject;
        return $this;
    }

    /**
     * Gets as subjNonMonetObligRegul
     *
     * @return string
     */
    public function getSubjNonMonetObligRegul()
    {
        return $this->subjNonMonetObligRegul;
    }

    /**
     * Sets a new subjNonMonetObligRegul
     *
     * @param string $subjNonMonetObligRegul
     * @return self
     */
    public function setSubjNonMonetObligRegul($subjNonMonetObligRegul)
    {
        $this->subjNonMonetObligRegul = $subjNonMonetObligRegul;
        return $this;
    }

    /**
     * Gets as subjNonMonetObligAdverseCode
     *
     * @return int
     */
    public function getSubjNonMonetObligAdverseCode()
    {
        return $this->subjNonMonetObligAdverseCode;
    }

    /**
     * Sets a new subjNonMonetObligAdverseCode
     *
     * @param int $subjNonMonetObligAdverseCode
     * @return self
     */
    public function setSubjNonMonetObligAdverseCode($subjNonMonetObligAdverseCode)
    {
        $this->subjNonMonetObligAdverseCode = $subjNonMonetObligAdverseCode;
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

