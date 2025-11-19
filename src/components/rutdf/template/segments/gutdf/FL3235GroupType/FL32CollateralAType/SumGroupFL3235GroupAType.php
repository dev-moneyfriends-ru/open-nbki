<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\FL32CollateralAType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing SumGroupFL3235GroupAType
 */
class SumGroupFL3235GroupAType extends GutdfSegment
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
     * @var string $priceCode
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
     * @return string
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
     * @param string $priceCode
     * @return self
     */
    public function setPriceCode($priceCode)
    {
        $this->priceCode = $priceCode;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'Sum_group_FL_32_35_Group';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Стоимость предмета залога' => 'Заполняется согласно заключению об оценке стоимости предмета залога. если оценка стоимости предмета залога не проводилась, указывается цена приобретения предмета залога либо его стоимость по договору залога (по выбору источника).',
            'Валюта стоимости предмета залога' => '',
            'Дата проведения оценки предмета залога' => 'Заполняется, если стоимость предмета залога оценивалась.',
            'Вид стоимости предмета залога' => 'Заполняется по справочнику 4.1.1 Указывается вид стоимости предмета залога, указанной по показателю 23.5 «Стоимость предмета залога».',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Стоимость предмета залога';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $collateral = $this->sendData->getAccountReplyRUTDF()->getCollateral()[$this->idx];

        $this->sum = $this->formatCurrency($collateral->collateralValue);
        $this->currency = $collateral->currencyCode;
        $this->assessDate = $this->formatDate($collateral->collateralDate);
        $this->priceCode = $collateral->collateralValueType;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'sum',
            'currency',
            'assessDate',
            'priceCode',
        ];
    }
}

