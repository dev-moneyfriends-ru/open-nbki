<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL19AmountType
 *
 * Блок 19. Сумма и валюта обязательства
 * XSD Type: FL_19_Amount_Type
 */
class FL19AmountType
{
    /**
     * 19.1. Сумма обязательства
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 19.2. Валюта обязательства
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 19.6. Дата расчета
     *
     * @var \DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * Gets as sum
     *
     * 19.1. Сумма обязательства
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
     * 19.1. Сумма обязательства
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
     * 19.2. Валюта обязательства
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
     * 19.2. Валюта обязательства
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
     * 19.6. Дата расчета
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
     * 19.6. Дата расчета
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

