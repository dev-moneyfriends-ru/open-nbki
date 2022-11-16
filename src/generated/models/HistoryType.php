<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing HistoryType
 *
 * 
 * XSD Type: History
 */
class HistoryType
{

    /**
     * @var int $fid
     */
    private $fid = null;

    /**
     * @var \DateTime $updateDt
     */
    private $updateDt = null;

    /**
     * @var string $paymentPatternText
     */
    private $paymentPatternText = null;

    /**
     * @var string $paymentPatternValue
     */
    private $paymentPatternValue = null;

    /**
     * @var int $creditLimit
     */
    private $creditLimit = null;

    /**
     * @var int $amountOwed
     */
    private $amountOwed = null;

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
     * Gets as updateDt
     *
     * @return \DateTime
     */
    public function getUpdateDt()
    {
        return $this->updateDt;
    }

    /**
     * Sets a new updateDt
     *
     * @param \DateTime $updateDt
     * @return self
     */
    public function setUpdateDt(\DateTime $updateDt)
    {
        $this->updateDt = $updateDt;
        return $this;
    }

    /**
     * Gets as paymentPatternText
     *
     * @return string
     */
    public function getPaymentPatternText()
    {
        return $this->paymentPatternText;
    }

    /**
     * Sets a new paymentPatternText
     *
     * @param string $paymentPatternText
     * @return self
     */
    public function setPaymentPatternText($paymentPatternText)
    {
        $this->paymentPatternText = $paymentPatternText;
        return $this;
    }

    /**
     * Gets as paymentPatternValue
     *
     * @return string
     */
    public function getPaymentPatternValue()
    {
        return $this->paymentPatternValue;
    }

    /**
     * Sets a new paymentPatternValue
     *
     * @param string $paymentPatternValue
     * @return self
     */
    public function setPaymentPatternValue($paymentPatternValue)
    {
        $this->paymentPatternValue = $paymentPatternValue;
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
     * Gets as amountOwed
     *
     * @return int
     */
    public function getAmountOwed()
    {
        return $this->amountOwed;
    }

    /**
     * Sets a new amountOwed
     *
     * @param int $amountOwed
     * @return self
     */
    public function setAmountOwed($amountOwed)
    {
        $this->amountOwed = $amountOwed;
        return $this;
    }


}

