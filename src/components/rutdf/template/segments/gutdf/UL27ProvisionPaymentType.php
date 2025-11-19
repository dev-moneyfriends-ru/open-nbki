<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType\CodeGroupUL27ProvisionPaymentAType;

/**
 * Class representing UL27ProvisionPaymentType
 *
 * Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения
 * XSD Type: UL_27_ProvisionPayment_Type
 */
class UL27ProvisionPaymentType extends GutdfSegment
{
    /**
     * 27.1. Признак погашения требований за счет обеспечения = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 27.1. Признак погашения требований за счет обеспечения = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 27.2. Код использованного обеспечения
     *
     * @var int $code
     */
    private $code = null;

    /**
     * 27.3. Дата погашения требований за счет обеспечения
     *
     * @var string $date
     */
    private $date = null;

    /**
     * 27.4. Сумма требований, погашенных за счет обеспечения
     *
     * @var float $sum
     */
    private $sum = null;

    /**
     * 27.5. Валюта суммы требований, погашенных за счет обеспечения
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * Gets as exist0
     *
     * 27.1. Признак погашения требований за счет обеспечения = 0
     *
     * @return string
     */
    public function getExist0()
    {
        return $this->exist0;
    }

    /**
     * Sets a new exist0
     *
     * 27.1. Признак погашения требований за счет обеспечения = 0
     *
     * @param string $exist0
     * @return self
     */
    public function setExist0($exist0)
    {
        $this->exist0 = $exist0;
        return $this;
    }

    /**
     * Gets as exist1
     *
     * 27.1. Признак погашения требований за счет обеспечения = 1
     *
     * @return string
     */
    public function getExist1()
    {
        return $this->exist1;
    }

    /**
     * Sets a new exist1
     *
     * 27.1. Признак погашения требований за счет обеспечения = 1
     *
     * @param string $exist1
     * @return self
     */
    public function setExist1($exist1)
    {
        $this->exist1 = $exist1;
        return $this;
    }

    /**
     * Gets as code
     *
     * 27.2. Код использованного обеспечения
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 27.2. Код использованного обеспечения
     *
     * @param int $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as date
     *
     * 27.3. Дата погашения требований за счет обеспечения
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * 27.3. Дата погашения требований за счет обеспечения
     *
     * @param string $date
     * @return self
     */
    public function setDate(?string $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as sum
     *
     * 27.4. Сумма требований, погашенных за счет обеспечения
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
     * 27.4. Сумма требований, погашенных за счет обеспечения
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
     * 27.5. Валюта суммы требований, погашенных за счет обеспечения
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
     * 27.5. Валюта суммы требований, погашенных за счет обеспечения
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
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_27_ProvisionPayment';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
          'Признак погашения требований за счет обеспечения 0' => 'Код «1» – в случае если требования источника к субъекту были полностью или частично погашены за счет обеспечения; код «0» – в случае если обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока не передаются в соответствии со схемой Blocks.xsd.',
          'Признак погашения требований за счет обеспечения 1' => 'Код «1» – в случае если требования источника к субъекту были полностью или частично погашены за счет обеспечения; код «0» – в случае если обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока не передаются в соответствии со схемой Blocks.xsd.',
        ];
    }

    public function getFields():array
    {
        return [
            'exist_0' => $this->exist0,
            'exist_1' => $this->exist1,
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        if (empty($this->idx)) {
            $this->exist0 = '';
            $this->exist1 = null;
            return;
        }
        $provision = $this->sendData->getAccountReplyRUTDF()->getCollatRepay()[$this->idx];
        $this->exist0 = '';
        $this->exist1 = null;

        $this->setCode($provision->collatRepayCode);
        $this->setDate($provision->collatRepayDt);
        $this->setSum($provision->collatRepayAmt);
        $this->setCurrency($provision->collatCurrency);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'exist_0' => 'exist0',
            'exist_1' => 'exist1',
            'code',
            'date',
            'sum',
            'currency',
        ];
    }
}

