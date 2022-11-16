<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing PaymentPatternType
 *
 * 
 * XSD Type: PaymentPattern
 */
class PaymentPatternType
{

    /**
     * @var \DateTime $paymentDate
     */
    private $paymentDate = null;

    /**
     * @var string $paymentText
     */
    private $paymentText = null;

    /**
     * @var string $paymentValue
     */
    private $paymentValue = null;

    /**
     * @var string $mopText
     */
    private $mopText = null;

    /**
     * Gets as paymentDate
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Sets a new paymentDate
     *
     * @param \DateTime $paymentDate
     * @return self
     */
    public function setPaymentDate(\DateTime $paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * Gets as paymentText
     *
     * @return string
     */
    public function getPaymentText()
    {
        return $this->paymentText;
    }

    /**
     * Sets a new paymentText
     *
     * @param string $paymentText
     * @return self
     */
    public function setPaymentText($paymentText)
    {
        $this->paymentText = $paymentText;
        return $this;
    }

    /**
     * Gets as paymentValue
     *
     * @return string
     */
    public function getPaymentValue()
    {
        return $this->paymentValue;
    }

    /**
     * Sets a new paymentValue
     *
     * @param string $paymentValue
     * @return self
     */
    public function setPaymentValue($paymentValue)
    {
        $this->paymentValue = $paymentValue;
        return $this;
    }

    /**
     * Gets as mopText
     *
     * @return string
     */
    public function getMopText()
    {
        return $this->mopText;
    }

    /**
     * Sets a new mopText
     *
     * @param string $mopText
     * @return self
     */
    public function setMopText($mopText)
    {
        $this->mopText = $mopText;
        return $this;
    }


}

