<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL14PaymentTermsType
 *
 * Блок 14. Сведения об условиях платежей
 * XSD Type: UL_14_PaymentTerms_Type
 */
class UL14PaymentTermsType
{
    /**
     * 14.1. Сумма ближайшего следующего платежа по основному долгу
     *
     * @var string $mainPaySum
     */
    private $mainPaySum = null;

    /**
     * 14.2. Дата ближайшего следующего платежа по основному долгу
     *
     * @var \DateTime $mainPayDate
     */
    private $mainPayDate = null;

    /**
     * 14.3. Сумма ближайшего следующего платежа по процентам
     *
     * @var string $percentPaySum
     */
    private $percentPaySum = null;

    /**
     * 14.4. Дата ближайшего следующего платежа по процентам
     *
     * @var \DateTime $percentPayDate
     */
    private $percentPayDate = null;

    /**
     * 14.5. Код частоты платежей
     *
     * @var int $freqCode
     */
    private $freqCode = null;

    /**
     * 14.6. Сумма минимального платежа по кредитной карте
     *
     * @var float $minCardPay
     */
    private $minCardPay = null;

    /**
     * 14.7. Дата начала беспроцентного периода
     *
     * @var \DateTime $graceDate
     */
    private $graceDate = null;

    /**
     * 14.8. Дата окончания беспроцентного периода
     *
     * @var \DateTime $graceEndDate
     */
    private $graceEndDate = null;

    /**
     * 14.9. Дата окончания срока уплаты процентов
     *
     * @var \DateTime $percentEndDate
     */
    private $percentEndDate = null;

    /**
     * Gets as mainPaySum
     *
     * 14.1. Сумма ближайшего следующего платежа по основному долгу
     *
     * @return string
     */
    public function getMainPaySum()
    {
        return $this->mainPaySum;
    }

    /**
     * Sets a new mainPaySum
     *
     * 14.1. Сумма ближайшего следующего платежа по основному долгу
     *
     * @param string $mainPaySum
     * @return self
     */
    public function setMainPaySum($mainPaySum)
    {
        $this->mainPaySum = $mainPaySum;
        return $this;
    }

    /**
     * Gets as mainPayDate
     *
     * 14.2. Дата ближайшего следующего платежа по основному долгу
     *
     * @return \DateTime
     */
    public function getMainPayDate()
    {
        return $this->mainPayDate;
    }

    /**
     * Sets a new mainPayDate
     *
     * 14.2. Дата ближайшего следующего платежа по основному долгу
     *
     * @param \DateTime $mainPayDate
     * @return self
     */
    public function setMainPayDate(?\DateTime $mainPayDate = null)
    {
        $this->mainPayDate = $mainPayDate;
        return $this;
    }

    /**
     * Gets as percentPaySum
     *
     * 14.3. Сумма ближайшего следующего платежа по процентам
     *
     * @return string
     */
    public function getPercentPaySum()
    {
        return $this->percentPaySum;
    }

    /**
     * Sets a new percentPaySum
     *
     * 14.3. Сумма ближайшего следующего платежа по процентам
     *
     * @param string $percentPaySum
     * @return self
     */
    public function setPercentPaySum($percentPaySum)
    {
        $this->percentPaySum = $percentPaySum;
        return $this;
    }

    /**
     * Gets as percentPayDate
     *
     * 14.4. Дата ближайшего следующего платежа по процентам
     *
     * @return \DateTime
     */
    public function getPercentPayDate()
    {
        return $this->percentPayDate;
    }

    /**
     * Sets a new percentPayDate
     *
     * 14.4. Дата ближайшего следующего платежа по процентам
     *
     * @param \DateTime $percentPayDate
     * @return self
     */
    public function setPercentPayDate(?\DateTime $percentPayDate = null)
    {
        $this->percentPayDate = $percentPayDate;
        return $this;
    }

    /**
     * Gets as freqCode
     *
     * 14.5. Код частоты платежей
     *
     * @return int
     */
    public function getFreqCode()
    {
        return $this->freqCode;
    }

    /**
     * Sets a new freqCode
     *
     * 14.5. Код частоты платежей
     *
     * @param int $freqCode
     * @return self
     */
    public function setFreqCode($freqCode)
    {
        $this->freqCode = $freqCode;
        return $this;
    }

    /**
     * Gets as minCardPay
     *
     * 14.6. Сумма минимального платежа по кредитной карте
     *
     * @return float
     */
    public function getMinCardPay()
    {
        return $this->minCardPay;
    }

    /**
     * Sets a new minCardPay
     *
     * 14.6. Сумма минимального платежа по кредитной карте
     *
     * @param float $minCardPay
     * @return self
     */
    public function setMinCardPay($minCardPay)
    {
        $this->minCardPay = $minCardPay;
        return $this;
    }

    /**
     * Gets as graceDate
     *
     * 14.7. Дата начала беспроцентного периода
     *
     * @return \DateTime
     */
    public function getGraceDate()
    {
        return $this->graceDate;
    }

    /**
     * Sets a new graceDate
     *
     * 14.7. Дата начала беспроцентного периода
     *
     * @param \DateTime $graceDate
     * @return self
     */
    public function setGraceDate(?\DateTime $graceDate = null)
    {
        $this->graceDate = $graceDate;
        return $this;
    }

    /**
     * Gets as graceEndDate
     *
     * 14.8. Дата окончания беспроцентного периода
     *
     * @return \DateTime
     */
    public function getGraceEndDate()
    {
        return $this->graceEndDate;
    }

    /**
     * Sets a new graceEndDate
     *
     * 14.8. Дата окончания беспроцентного периода
     *
     * @param \DateTime $graceEndDate
     * @return self
     */
    public function setGraceEndDate(?\DateTime $graceEndDate = null)
    {
        $this->graceEndDate = $graceEndDate;
        return $this;
    }

    /**
     * Gets as percentEndDate
     *
     * 14.9. Дата окончания срока уплаты процентов
     *
     * @return \DateTime
     */
    public function getPercentEndDate()
    {
        return $this->percentEndDate;
    }

    /**
     * Sets a new percentEndDate
     *
     * 14.9. Дата окончания срока уплаты процентов
     *
     * @param \DateTime $percentEndDate
     * @return self
     */
    public function setPercentEndDate(?\DateTime $percentEndDate = null)
    {
        $this->percentEndDate = $percentEndDate;
        return $this;
    }
}

