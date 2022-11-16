<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing HistoryInternalType
 *
 * 
 * XSD Type: HistoryInternal
 */
class HistoryInternalType
{

    /**
     * @var int $reportingYearMonth
     */
    private $reportingYearMonth = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var int $worstAccountRatingCode
     */
    private $worstAccountRatingCode = null;

    /**
     * @var int $maxTermsAmt
     */
    private $maxTermsAmt = null;

    /**
     * @var int $maxAmtOutstanding
     */
    private $maxAmtOutstanding = null;

    /**
     * @var int $maxAmtPastDue
     */
    private $maxAmtPastDue = null;

    /**
     * @var string $worstPaymentPattern
     */
    private $worstPaymentPattern = null;

    /**
     * @var int $endAccountRatingCode
     */
    private $endAccountRatingCode = null;

    /**
     * @var int $endAmtOutstanding
     */
    private $endAmtOutstanding = null;

    /**
     * @var int $endTermsAmt
     */
    private $endTermsAmt = null;

    /**
     * @var int $endAmtPastDue
     */
    private $endAmtPastDue = null;

    /**
     * @var int $endCreditLimit
     */
    private $endCreditLimit = null;

    /**
     * @var string $endPaymentPattern
     */
    private $endPaymentPattern = null;

    /**
     * @var int $endCurrentBalanceAmt
     */
    private $endCurrentBalanceAmt = null;

    /**
     * @var string $worstPaymentPattern2
     */
    private $worstPaymentPattern2 = null;

    /**
     * @var string $endPaymentPattern2
     */
    private $endPaymentPattern2 = null;

    /**
     * Gets as reportingYearMonth
     *
     * @return int
     */
    public function getReportingYearMonth()
    {
        return $this->reportingYearMonth;
    }

    /**
     * Sets a new reportingYearMonth
     *
     * @param int $reportingYearMonth
     * @return self
     */
    public function setReportingYearMonth($reportingYearMonth)
    {
        $this->reportingYearMonth = $reportingYearMonth;
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
     * Gets as worstAccountRatingCode
     *
     * @return int
     */
    public function getWorstAccountRatingCode()
    {
        return $this->worstAccountRatingCode;
    }

    /**
     * Sets a new worstAccountRatingCode
     *
     * @param int $worstAccountRatingCode
     * @return self
     */
    public function setWorstAccountRatingCode($worstAccountRatingCode)
    {
        $this->worstAccountRatingCode = $worstAccountRatingCode;
        return $this;
    }

    /**
     * Gets as maxTermsAmt
     *
     * @return int
     */
    public function getMaxTermsAmt()
    {
        return $this->maxTermsAmt;
    }

    /**
     * Sets a new maxTermsAmt
     *
     * @param int $maxTermsAmt
     * @return self
     */
    public function setMaxTermsAmt($maxTermsAmt)
    {
        $this->maxTermsAmt = $maxTermsAmt;
        return $this;
    }

    /**
     * Gets as maxAmtOutstanding
     *
     * @return int
     */
    public function getMaxAmtOutstanding()
    {
        return $this->maxAmtOutstanding;
    }

    /**
     * Sets a new maxAmtOutstanding
     *
     * @param int $maxAmtOutstanding
     * @return self
     */
    public function setMaxAmtOutstanding($maxAmtOutstanding)
    {
        $this->maxAmtOutstanding = $maxAmtOutstanding;
        return $this;
    }

    /**
     * Gets as maxAmtPastDue
     *
     * @return int
     */
    public function getMaxAmtPastDue()
    {
        return $this->maxAmtPastDue;
    }

    /**
     * Sets a new maxAmtPastDue
     *
     * @param int $maxAmtPastDue
     * @return self
     */
    public function setMaxAmtPastDue($maxAmtPastDue)
    {
        $this->maxAmtPastDue = $maxAmtPastDue;
        return $this;
    }

    /**
     * Gets as worstPaymentPattern
     *
     * @return string
     */
    public function getWorstPaymentPattern()
    {
        return $this->worstPaymentPattern;
    }

    /**
     * Sets a new worstPaymentPattern
     *
     * @param string $worstPaymentPattern
     * @return self
     */
    public function setWorstPaymentPattern($worstPaymentPattern)
    {
        $this->worstPaymentPattern = $worstPaymentPattern;
        return $this;
    }

    /**
     * Gets as endAccountRatingCode
     *
     * @return int
     */
    public function getEndAccountRatingCode()
    {
        return $this->endAccountRatingCode;
    }

    /**
     * Sets a new endAccountRatingCode
     *
     * @param int $endAccountRatingCode
     * @return self
     */
    public function setEndAccountRatingCode($endAccountRatingCode)
    {
        $this->endAccountRatingCode = $endAccountRatingCode;
        return $this;
    }

    /**
     * Gets as endAmtOutstanding
     *
     * @return int
     */
    public function getEndAmtOutstanding()
    {
        return $this->endAmtOutstanding;
    }

    /**
     * Sets a new endAmtOutstanding
     *
     * @param int $endAmtOutstanding
     * @return self
     */
    public function setEndAmtOutstanding($endAmtOutstanding)
    {
        $this->endAmtOutstanding = $endAmtOutstanding;
        return $this;
    }

    /**
     * Gets as endTermsAmt
     *
     * @return int
     */
    public function getEndTermsAmt()
    {
        return $this->endTermsAmt;
    }

    /**
     * Sets a new endTermsAmt
     *
     * @param int $endTermsAmt
     * @return self
     */
    public function setEndTermsAmt($endTermsAmt)
    {
        $this->endTermsAmt = $endTermsAmt;
        return $this;
    }

    /**
     * Gets as endAmtPastDue
     *
     * @return int
     */
    public function getEndAmtPastDue()
    {
        return $this->endAmtPastDue;
    }

    /**
     * Sets a new endAmtPastDue
     *
     * @param int $endAmtPastDue
     * @return self
     */
    public function setEndAmtPastDue($endAmtPastDue)
    {
        $this->endAmtPastDue = $endAmtPastDue;
        return $this;
    }

    /**
     * Gets as endCreditLimit
     *
     * @return int
     */
    public function getEndCreditLimit()
    {
        return $this->endCreditLimit;
    }

    /**
     * Sets a new endCreditLimit
     *
     * @param int $endCreditLimit
     * @return self
     */
    public function setEndCreditLimit($endCreditLimit)
    {
        $this->endCreditLimit = $endCreditLimit;
        return $this;
    }

    /**
     * Gets as endPaymentPattern
     *
     * @return string
     */
    public function getEndPaymentPattern()
    {
        return $this->endPaymentPattern;
    }

    /**
     * Sets a new endPaymentPattern
     *
     * @param string $endPaymentPattern
     * @return self
     */
    public function setEndPaymentPattern($endPaymentPattern)
    {
        $this->endPaymentPattern = $endPaymentPattern;
        return $this;
    }

    /**
     * Gets as endCurrentBalanceAmt
     *
     * @return int
     */
    public function getEndCurrentBalanceAmt()
    {
        return $this->endCurrentBalanceAmt;
    }

    /**
     * Sets a new endCurrentBalanceAmt
     *
     * @param int $endCurrentBalanceAmt
     * @return self
     */
    public function setEndCurrentBalanceAmt($endCurrentBalanceAmt)
    {
        $this->endCurrentBalanceAmt = $endCurrentBalanceAmt;
        return $this;
    }

    /**
     * Gets as worstPaymentPattern2
     *
     * @return string
     */
    public function getWorstPaymentPattern2()
    {
        return $this->worstPaymentPattern2;
    }

    /**
     * Sets a new worstPaymentPattern2
     *
     * @param string $worstPaymentPattern2
     * @return self
     */
    public function setWorstPaymentPattern2($worstPaymentPattern2)
    {
        $this->worstPaymentPattern2 = $worstPaymentPattern2;
        return $this;
    }

    /**
     * Gets as endPaymentPattern2
     *
     * @return string
     */
    public function getEndPaymentPattern2()
    {
        return $this->endPaymentPattern2;
    }

    /**
     * Sets a new endPaymentPattern2
     *
     * @param string $endPaymentPattern2
     * @return self
     */
    public function setEndPaymentPattern2($endPaymentPattern2)
    {
        $this->endPaymentPattern2 = $endPaymentPattern2;
        return $this;
    }


}

