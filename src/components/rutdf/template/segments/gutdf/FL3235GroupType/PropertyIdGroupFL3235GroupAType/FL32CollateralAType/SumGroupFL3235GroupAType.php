<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL32CollateralAType;

/**
 * Class representing SumGroupFL3235GroupAType
 */
class SumGroupFL3235GroupAType
{
    /**
     * 32.5. Стоимость предмета залога
     *
     * @var float $sum
     */
    private $sum = null;

    /**
     * 32.6. Валюта стоимости предмета залога
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 32.7. Дата проведения оценки предмета залога
     *
     * @var string $assessDate
     */
    private $assessDate = null;

    /**
     * 32.12. Вид стоимости предмета залога
     *
     * @var int $priceCode
     */
    private $priceCode = null;

    /**
     * Gets as sum
     *
     * 32.5. Стоимость предмета залога
     *
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Sets a new sum
     *
     * 32.5. Стоимость предмета залога
     *
     * @param float $sum
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
     * 32.6. Валюта стоимости предмета залога
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
     * 32.6. Валюта стоимости предмета залога
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
     * Gets as assessDate
     *
     * 32.7. Дата проведения оценки предмета залога
     *
     * @return string
     */
    public function getAssessDate()
    {
        return $this->assessDate;
    }

    /**
     * Sets a new assessDate
     *
     * 32.7. Дата проведения оценки предмета залога
     *
     * @param string $assessDate
     * @return self
     */
    public function setAssessDate($assessDate)
    {
        $this->assessDate = $assessDate;
        return $this;
    }

    /**
     * Gets as priceCode
     *
     * 32.12. Вид стоимости предмета залога
     *
     * @return int
     */
    public function getPriceCode()
    {
        return $this->priceCode;
    }

    /**
     * Sets a new priceCode
     *
     * 32.12. Вид стоимости предмета залога
     *
     * @param int $priceCode
     * @return self
     */
    public function setPriceCode($priceCode)
    {
        $this->priceCode = $priceCode;
        return $this;
    }
}

