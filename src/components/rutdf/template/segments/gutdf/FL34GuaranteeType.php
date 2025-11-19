<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;


use mfteam\nbch\helpers\UuidHelper;

/**
 * Class representing FL34GuaranteeType
 *
 * Блок 34. Сведения о независимой гарантии
 * XSD Type: FL_34_Guarantee_Type
 */
class FL34GuaranteeType extends GutdfSegment
{
    /**
     * 34.1. Признак наличия независимой гарантии = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 34.1. Признак наличия независимой гарантии = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 34.2. УИд независимой гарантии
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * 34.3. Сумма независимой гарантии
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 34.4. Валюта независимой гарантии
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 34.5. Дата выдачи независимой гарантии
     *
     * @var string $openDate
     */
    private $openDate = null;

    /**
     * 34.6. Дата окончания независимой гарантии согласно ее условиям
     *
     * @var string $endDate
     */
    private $endDate = null;

    /**
     * 34.7. Дата фактического прекращения независимой гарантии
     *
     * @var \DateTime $factEndDate
     */
    private $factEndDate = null;

    /**
     * 34.8. Код причины прекращения независимой гарантии
     *
     * @var int $endCode
     */
    private $endCode = null;

    /**
     * Gets as exist0
     *
     * 34.1. Признак наличия независимой гарантии = 0
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
     * 34.1. Признак наличия независимой гарантии = 0
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
     * 34.1. Признак наличия независимой гарантии = 1
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
     * 34.1. Признак наличия независимой гарантии = 1
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
     * Gets as uid
     *
     * 34.2. УИд независимой гарантии
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * 34.2. УИд независимой гарантии
     *
     * @param string $uid
     * @return self
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Gets as sum
     *
     * 34.3. Сумма независимой гарантии
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
     * 34.3. Сумма независимой гарантии
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
     * 34.4. Валюта независимой гарантии
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
     * 34.4. Валюта независимой гарантии
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
     * Gets as openDate
     *
     * 34.5. Дата выдачи независимой гарантии
     *
     * @return string
     */
    public function getOpenDate()
    {
        return $this->openDate;
    }

    /**
     * Sets a new openDate
     *
     * 34.5. Дата выдачи независимой гарантии
     *
     * @param string $openDate
     * @return self
     */
    public function setOpenDate($openDate)
    {
        $this->openDate = $openDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * 34.6. Дата окончания независимой гарантии согласно ее условиям
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * 34.6. Дата окончания независимой гарантии согласно ее условиям
     *
     * @param string $endDate
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as factEndDate
     *
     * 34.7. Дата фактического прекращения независимой гарантии
     *
     * @return \DateTime
     */
    public function getFactEndDate()
    {
        return $this->factEndDate;
    }

    /**
     * Sets a new factEndDate
     *
     * 34.7. Дата фактического прекращения независимой гарантии
     *
     * @param \DateTime $factEndDate
     * @return self
     */
    public function setFactEndDate(?\DateTime $factEndDate = null)
    {
        $this->factEndDate = $factEndDate;
        return $this;
    }

    /**
     * Gets as endCode
     *
     * 34.8. Код причины прекращения независимой гарантии
     *
     * @return int
     */
    public function getEndCode()
    {
        return $this->endCode;
    }

    /**
     * Sets a new endCode
     *
     * 34.8. Код причины прекращения независимой гарантии
     *
     * @param int $endCode
     * @return self
     */
    public function setEndCode($endCode)
    {
        $this->endCode = $endCode;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_34_Guarantee';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак наличия независимой гарантии 0' => 'Код «1» – исполнение обязательства обеспечено независимой гарантией; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока не передаются в соответствии со схемой Blocks.xsd.',
            'Признак наличия независимой гарантии 1' => 'Код «1» – исполнение обязательства обеспечено независимой гарантией; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока не передаются в соответствии со схемой Blocks.xsd.',
            'УИд независимой гарантии' => 'Заполняется, если по обязательству принципала формируется КИ. Значение указанного показателя должно соответствовать значению показателя 17.1 «УИд сделки» блока 17 в КИ принципала – физического лица или показателя 10.1 «УИд сделки» блока 10 в КИ принципала – юридического лица.',
            'Сумма независимой гарантии' => '',
            'Валюта независимой гарантии' => '',
            'Дата выдачи независимой гарантии' => '',
            'Дата окончания независимой гарантии согласно ее условиям' => '',
            'Дата фактического прекращения независимой гарантии' => '',
            'Код причины прекращения независимой гарантии' => 'Заполняется по справочнику 4.2.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 34. Сведения о независимой гарантии';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        if(empty($this->idx)){
            $this->exist0 = '';
            $this->exist1 = null;
            return;
        }
        $guaranty = $this->sendData->getAccountReplyRUTDF()->getIndepGuarantor()[$this->idx];
        $this->exist1 = '';
        $this->exist0 = null;

        $this->uid = UuidHelper::getUuidWithControl($guaranty->indepGuaranteeUuid);
        $this->sum = $this->formatCurrency($guaranty->indepGuaranteeVolume);
        $this->currency = $guaranty->currencyCode;
        $this->openDate = $this->formatDate($guaranty->indepGuaranteeDt);
        $this->endDate = $this->formatDate($guaranty->indepGuaranteeExpirationDate);
        $this->factEndDate = $this->formatDate($guaranty->indepGuaranteeFactExpirationDate);
        $this->endCode = $guaranty->indepGuaranteeEndReason ?: null;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'exist_0' => 'exist0',
            'exist_1' => 'exist1',
            'uid',
            'sum',
            'currency',
            'openDate',
            'endDate',
            'factEndDate',
            'endCode',
        ];
    }

    public function getFields(): array
    {
        return [
            'exist_0' => $this->exist0,
            'exist_1' => $this->exist1,
            'uid',
            'sum',
            'currency',
            'openDate',
            'endDate',
            'factEndDate',
            'endCode',
        ];
    }
}

