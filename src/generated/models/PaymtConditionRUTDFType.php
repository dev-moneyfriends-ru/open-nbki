<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing PaymtConditionRUTDFType
 *
 * 
 * XSD Type: PaymtConditionRUTDF
 */
class PaymtConditionRUTDFType
{

    /**
     * @var string $principalTermsAmt
     */
    private $principalTermsAmt = null;

    /**
     * @var \DateTime $principalTermsAmtDt
     */
    private $principalTermsAmtDt = null;

    /**
     * @var string $interestTermsAmt
     */
    private $interestTermsAmt = null;

    /**
     * @var \DateTime $interestTermsAmtDt
     */
    private $interestTermsAmtDt = null;

    /**
     * @var string $termsFrequency
     */
    private $termsFrequency = null;

    /**
     * @var string $minPaymt
     */
    private $minPaymt = null;

    /**
     * @var \DateTime $graceStartDt
     */
    private $graceStartDt = null;

    /**
     * @var \DateTime $graceEndDt
     */
    private $graceEndDt = null;

    /**
     * @var \DateTime $interestPaymentDueDate
     */
    private $interestPaymentDueDate = null;

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
     * Gets as principalTermsAmt
     *
     * @return string
     */
    public function getPrincipalTermsAmt()
    {
        return $this->principalTermsAmt;
    }

    /**
     * Sets a new principalTermsAmt
     *
     * @param string $principalTermsAmt
     * @return self
     */
    public function setPrincipalTermsAmt($principalTermsAmt)
    {
        $this->principalTermsAmt = $principalTermsAmt;
        return $this;
    }

    /**
     * Gets as principalTermsAmtDt
     *
     * @return \DateTime
     */
    public function getPrincipalTermsAmtDt()
    {
        return $this->principalTermsAmtDt;
    }

    /**
     * Sets a new principalTermsAmtDt
     *
     * @param \DateTime $principalTermsAmtDt
     * @return self
     */
    public function setPrincipalTermsAmtDt(\DateTime $principalTermsAmtDt)
    {
        $this->principalTermsAmtDt = $principalTermsAmtDt;
        return $this;
    }

    /**
     * Gets as interestTermsAmt
     *
     * @return string
     */
    public function getInterestTermsAmt()
    {
        return $this->interestTermsAmt;
    }

    /**
     * Sets a new interestTermsAmt
     *
     * @param string $interestTermsAmt
     * @return self
     */
    public function setInterestTermsAmt($interestTermsAmt)
    {
        $this->interestTermsAmt = $interestTermsAmt;
        return $this;
    }

    /**
     * Gets as interestTermsAmtDt
     *
     * @return \DateTime
     */
    public function getInterestTermsAmtDt()
    {
        return $this->interestTermsAmtDt;
    }

    /**
     * Sets a new interestTermsAmtDt
     *
     * @param \DateTime $interestTermsAmtDt
     * @return self
     */
    public function setInterestTermsAmtDt(\DateTime $interestTermsAmtDt)
    {
        $this->interestTermsAmtDt = $interestTermsAmtDt;
        return $this;
    }

    /**
     * Gets as termsFrequency
     *
     * @return string
     */
    public function getTermsFrequency()
    {
        return $this->termsFrequency;
    }

    /**
     * Sets a new termsFrequency
     *
     * @param string $termsFrequency
     * @return self
     */
    public function setTermsFrequency($termsFrequency)
    {
        $this->termsFrequency = $termsFrequency;
        return $this;
    }

    /**
     * Gets as minPaymt
     *
     * @return string
     */
    public function getMinPaymt()
    {
        return $this->minPaymt;
    }

    /**
     * Sets a new minPaymt
     *
     * @param string $minPaymt
     * @return self
     */
    public function setMinPaymt($minPaymt)
    {
        $this->minPaymt = $minPaymt;
        return $this;
    }

    /**
     * Gets as graceStartDt
     *
     * @return \DateTime
     */
    public function getGraceStartDt()
    {
        return $this->graceStartDt;
    }

    /**
     * Sets a new graceStartDt
     *
     * @param \DateTime $graceStartDt
     * @return self
     */
    public function setGraceStartDt(\DateTime $graceStartDt)
    {
        $this->graceStartDt = $graceStartDt;
        return $this;
    }

    /**
     * Gets as graceEndDt
     *
     * @return \DateTime
     */
    public function getGraceEndDt()
    {
        return $this->graceEndDt;
    }

    /**
     * Sets a new graceEndDt
     *
     * @param \DateTime $graceEndDt
     * @return self
     */
    public function setGraceEndDt(\DateTime $graceEndDt)
    {
        $this->graceEndDt = $graceEndDt;
        return $this;
    }

    /**
     * Gets as interestPaymentDueDate
     *
     * @return \DateTime
     */
    public function getInterestPaymentDueDate()
    {
        return $this->interestPaymentDueDate;
    }

    /**
     * Sets a new interestPaymentDueDate
     *
     * @param \DateTime $interestPaymentDueDate
     * @return self
     */
    public function setInterestPaymentDueDate(\DateTime $interestPaymentDueDate)
    {
        $this->interestPaymentDueDate = $interestPaymentDueDate;
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

