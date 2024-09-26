<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL23CollateralAType;

/**
 * Class representing SumGroupUL2326GroupAType
 */
class SumGroupUL2326GroupAType
{
    /**
     * 23.5. Стоимость предмета залога
     *
     * @var float $sum
     */
    private $sum = null;

    /**
     * 23.6. Валюта стоимости предмета залога
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 23.7. Дата проведения оценки предмета залога
     *
     * @var string $assessDate
     */
    private $assessDate = null;

    /**
     * 23.12. Вид стоимости предмета залога
     *
     * @var string $priceCode
     */
    private $priceCode = null;

    /**
     * Gets as sum
     *
     * 23.5. Стоимость предмета залога
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
     * 23.5. Стоимость предмета залога
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
     * 23.6. Валюта стоимости предмета залога
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
     * 23.6. Валюта стоимости предмета залога
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
     * 23.7. Дата проведения оценки предмета залога
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
     * 23.7. Дата проведения оценки предмета залога
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
     * 23.12. Вид стоимости предмета залога
     *
     * @return string
     */
    public function getPriceCode()
    {
        return $this->priceCode;
    }

    /**
     * Sets a new priceCode
     *
     * 23.12. Вид стоимости предмета залога
     *
     * @param string $priceCode
     * @return self
     */
    public function setPriceCode($priceCode)
    {
        $this->priceCode = $priceCode;
        return $this;
    }
}

