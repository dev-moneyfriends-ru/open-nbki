<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL12AmountType
 *
 * Блок 12. Сумма и валюта обязательства
 * XSD Type: UL_12_Amount_Type
 */
class UL12AmountType
{
    /**
     * 12.1. Сумма обязательства
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 12.2. Валюта обязательства
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 12.6. Дата расчета
     *
     * @var \DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * Gets as sum
     *
     * 12.1. Сумма обязательства
     *
     * @return string
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Sets a new sum
     *
     * 12.1. Сумма обязательства
     *
     * @param string $sum
     * @return self
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
        return $this;
    }

    /**
     * Gets as currency
     *
     * 12.2. Валюта обязательства
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * 12.2. Валюта обязательства
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * 12.6. Дата расчета
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
     * 12.6. Дата расчета
     *
     * @param \DateTime $calcDate
     * @return self
     */
    public function setCalcDate(\DateTime $calcDate)
    {
        $this->calcDate = $calcDate;
        return $this;
    }
}

