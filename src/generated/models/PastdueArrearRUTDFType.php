<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing PastdueArrearRUTDFType
 *
 * 
 * XSD Type: PastdueArrearRUTDF
 */
class PastdueArrearRUTDFType
{

    /**
     * @var \DateTime $pastDueDt
     */
    private $pastDueDt = null;

    /**
     * @var int $lastPaymentDueCode
     */
    private $lastPaymentDueCode = null;

    /**
     * @var string $amtPastDue
     */
    private $amtPastDue = null;

    /**
     * @var string $principalAmtPastDue
     */
    private $principalAmtPastDue = null;

    /**
     * @var string $intAmtPastDue
     */
    private $intAmtPastDue = null;

    /**
     * @var string $otherAmtPastDue
     */
    private $otherAmtPastDue = null;

    /**
     * @var \DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * @var \DateTime $principalMissedDate
     */
    private $principalMissedDate = null;

    /**
     * @var \DateTime $intMissedDate
     */
    private $intMissedDate = null;

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
     * Gets as pastDueDt
     *
     * @return \DateTime
     */
    public function getPastDueDt()
    {
        return $this->pastDueDt;
    }

    /**
     * Sets a new pastDueDt
     *
     * @param \DateTime $pastDueDt
     * @return self
     */
    public function setPastDueDt(\DateTime $pastDueDt)
    {
        $this->pastDueDt = $pastDueDt;
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
     * Gets as amtPastDue
     *
     * @return string
     */
    public function getAmtPastDue()
    {
        return $this->amtPastDue;
    }

    /**
     * Sets a new amtPastDue
     *
     * @param string $amtPastDue
     * @return self
     */
    public function setAmtPastDue($amtPastDue)
    {
        $this->amtPastDue = $amtPastDue;
        return $this;
    }

    /**
     * Gets as principalAmtPastDue
     *
     * @return string
     */
    public function getPrincipalAmtPastDue()
    {
        return $this->principalAmtPastDue;
    }

    /**
     * Sets a new principalAmtPastDue
     *
     * @param string $principalAmtPastDue
     * @return self
     */
    public function setPrincipalAmtPastDue($principalAmtPastDue)
    {
        $this->principalAmtPastDue = $principalAmtPastDue;
        return $this;
    }

    /**
     * Gets as intAmtPastDue
     *
     * @return string
     */
    public function getIntAmtPastDue()
    {
        return $this->intAmtPastDue;
    }

    /**
     * Sets a new intAmtPastDue
     *
     * @param string $intAmtPastDue
     * @return self
     */
    public function setIntAmtPastDue($intAmtPastDue)
    {
        $this->intAmtPastDue = $intAmtPastDue;
        return $this;
    }

    /**
     * Gets as otherAmtPastDue
     *
     * @return string
     */
    public function getOtherAmtPastDue()
    {
        return $this->otherAmtPastDue;
    }

    /**
     * Sets a new otherAmtPastDue
     *
     * @param string $otherAmtPastDue
     * @return self
     */
    public function setOtherAmtPastDue($otherAmtPastDue)
    {
        $this->otherAmtPastDue = $otherAmtPastDue;
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
     * Gets as principalMissedDate
     *
     * @return \DateTime
     */
    public function getPrincipalMissedDate()
    {
        return $this->principalMissedDate;
    }

    /**
     * Sets a new principalMissedDate
     *
     * @param \DateTime $principalMissedDate
     * @return self
     */
    public function setPrincipalMissedDate(\DateTime $principalMissedDate)
    {
        $this->principalMissedDate = $principalMissedDate;
        return $this;
    }

    /**
     * Gets as intMissedDate
     *
     * @return \DateTime
     */
    public function getIntMissedDate()
    {
        return $this->intMissedDate;
    }

    /**
     * Sets a new intMissedDate
     *
     * @param \DateTime $intMissedDate
     * @return self
     */
    public function setIntMissedDate(\DateTime $intMissedDate)
    {
        $this->intMissedDate = $intMissedDate;
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

