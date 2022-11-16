<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing AmendmentType
 *
 * 
 * XSD Type: Amendment
 */
class AmendmentType
{

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var int $acctSerialNum
     */
    private $acctSerialNum = null;

    /**
     * @var int $creditLimit
     */
    private $creditLimit = null;

    /**
     * @var int $termsAmt
     */
    private $termsAmt = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var \DateTime $closedDt
     */
    private $closedDt = null;

    /**
     * @var \DateTime $paymentDueDate
     */
    private $paymentDueDate = null;

    /**
     * @var \DateTime $interestPaymentDueDate
     */
    private $interestPaymentDueDate = null;

    /**
     * @var string $creditTotalAmt
     */
    private $creditTotalAmt = null;

    /**
     * @var string $amendType
     */
    private $amendType = null;

    /**
     * @var \DateTime $graceEndDt
     */
    private $graceEndDt = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

    /**
     * @var int $gracePeriodReason
     */
    private $gracePeriodReason = null;

    /**
     * @var \DateTime $gracePeriodDeclinedDt
     */
    private $gracePeriodDeclinedDt = null;

    /**
     * @var \DateTime $graceStartDt
     */
    private $graceStartDt = null;

    /**
     * @var string $creditTotalMonetaryAmt
     */
    private $creditTotalMonetaryAmt = null;

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
     * @return int
     */
    public function getAcctSerialNum()
    {
        return $this->acctSerialNum;
    }

    /**
     * Sets a new acctSerialNum
     *
     * @param int $acctSerialNum
     * @return self
     */
    public function setAcctSerialNum($acctSerialNum)
    {
        $this->acctSerialNum = $acctSerialNum;
        return $this;
    }

    /**
     * Gets as creditLimit
     *
     * @return int
     */
    public function getCreditLimit()
    {
        return $this->creditLimit;
    }

    /**
     * Sets a new creditLimit
     *
     * @param int $creditLimit
     * @return self
     */
    public function setCreditLimit($creditLimit)
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * Gets as termsAmt
     *
     * @return int
     */
    public function getTermsAmt()
    {
        return $this->termsAmt;
    }

    /**
     * Sets a new termsAmt
     *
     * @param int $termsAmt
     * @return self
     */
    public function setTermsAmt($termsAmt)
    {
        $this->termsAmt = $termsAmt;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as closedDt
     *
     * @return \DateTime
     */
    public function getClosedDt()
    {
        return $this->closedDt;
    }

    /**
     * Sets a new closedDt
     *
     * @param \DateTime $closedDt
     * @return self
     */
    public function setClosedDt(\DateTime $closedDt)
    {
        $this->closedDt = $closedDt;
        return $this;
    }

    /**
     * Gets as paymentDueDate
     *
     * @return \DateTime
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * Sets a new paymentDueDate
     *
     * @param \DateTime $paymentDueDate
     * @return self
     */
    public function setPaymentDueDate(\DateTime $paymentDueDate)
    {
        $this->paymentDueDate = $paymentDueDate;
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
     * Gets as amendType
     *
     * @return string
     */
    public function getAmendType()
    {
        return $this->amendType;
    }

    /**
     * Sets a new amendType
     *
     * @param string $amendType
     * @return self
     */
    public function setAmendType($amendType)
    {
        $this->amendType = $amendType;
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

    /**
     * Gets as gracePeriodReason
     *
     * @return int
     */
    public function getGracePeriodReason()
    {
        return $this->gracePeriodReason;
    }

    /**
     * Sets a new gracePeriodReason
     *
     * @param int $gracePeriodReason
     * @return self
     */
    public function setGracePeriodReason($gracePeriodReason)
    {
        $this->gracePeriodReason = $gracePeriodReason;
        return $this;
    }

    /**
     * Gets as gracePeriodDeclinedDt
     *
     * @return \DateTime
     */
    public function getGracePeriodDeclinedDt()
    {
        return $this->gracePeriodDeclinedDt;
    }

    /**
     * Sets a new gracePeriodDeclinedDt
     *
     * @param \DateTime $gracePeriodDeclinedDt
     * @return self
     */
    public function setGracePeriodDeclinedDt(\DateTime $gracePeriodDeclinedDt)
    {
        $this->gracePeriodDeclinedDt = $gracePeriodDeclinedDt;
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


}

