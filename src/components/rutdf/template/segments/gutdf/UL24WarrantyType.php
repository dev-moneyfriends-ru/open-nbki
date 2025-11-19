<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\UL24WarrantyType\UidGroupUL24WarrantyAType;
use mfteam\nbch\helpers\UuidHelper;

/**
 * Class representing UL24WarrantyType
 *
 * Блок 24. Сведения о поручительстве
 * XSD Type: UL_24_Warranty_Type
 */
class UL24WarrantyType extends GutdfSegment
{
    /**
     * 24.1. Признак наличия поручительства = 0
     *
     * @var string $warrantyFact0
     */
    private $warrantyFact0 = null;

    /**
     * 24.1. Признак наличия поручительства = 1
     *
     * @var string $warrantyFact1
     */
    private $warrantyFact1 = null;

    /**
     * 24.2. УИд договора поручительства
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * 24.3. Размер поручительства
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 24.4. Валюта поручительства
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 24.5. Дата заключения договора поручительства
     *
     * @var string $openDate
     */
    private $openDate = null;

    /**
     * 24.6. Дата прекращения поручительства согласно договору
     *
     * @var string $endDate
     */
    private $endDate = null;

    /**
     * 24.7. Дата фактического прекращения поручительства
     *
     * @var \DateTime $factEndDate
     */
    private $factEndDate = null;

    /**
     * 24.8. Код причины прекращения поручительства
     *
     * @var int $endCode
     */
    private $endCode = null;

    /**
     * Gets as warrantyFact0
     *
     * 24.1. Признак наличия поручительства = 0
     *
     * @return string
     */
    public function getWarrantyFact0()
    {
        return $this->warrantyFact0;
    }

    /**
     * Sets a new warrantyFact0
     *
     * 24.1. Признак наличия поручительства = 0
     *
     * @param string $warrantyFact0
     * @return self
     */
    public function setWarrantyFact0($warrantyFact0)
    {
        $this->warrantyFact0 = $warrantyFact0;
        return $this;
    }

    /**
     * Gets as warrantyFact1
     *
     * 24.1. Признак наличия поручительства = 1
     *
     * @return string
     */
    public function getWarrantyFact1()
    {
        return $this->warrantyFact1;
    }

    /**
     * Sets a new warrantyFact1
     *
     * 24.1. Признак наличия поручительства = 1
     *
     * @param string $warrantyFact1
     * @return self
     */
    public function setWarrantyFact1($warrantyFact1)
    {
        $this->warrantyFact1 = $warrantyFact1;
        return $this;
    }

    /**
     * Gets as uid
     *
     * 24.2. УИд договора поручительства
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
     * 24.2. УИд договора поручительства
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
     * 24.3. Размер поручительства
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
     * 24.3. Размер поручительства
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
     * 24.4. Валюта поручительства
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
     * 24.4. Валюта поручительства
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
     * 24.5. Дата заключения договора поручительства
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
     * 24.5. Дата заключения договора поручительства
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
     * 24.6. Дата прекращения поручительства согласно договору
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
     * 24.6. Дата прекращения поручительства согласно договору
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
     * 24.7. Дата фактического прекращения поручительства
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
     * 24.7. Дата фактического прекращения поручительства
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
     * 24.8. Код причины прекращения поручительства
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
     * 24.8. Код причины прекращения поручительства
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
        return 'UL_24_Warranty';
    }

    public function getFields(): array
    {
        return [
            'warrantyFact_0' => $this->warrantyFact0,
            'warrantyFact_1' => $this->warrantyFact1,
        ];
    }
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак наличия поручительства 0' => 'Код «1» – обязательство субъекта обеспечено поручительством; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 24 не передаются в соответствии со схемой Blocks.xsd.',
            'Признак наличия поручительства 1' => 'Код «1» – обязательство субъекта обеспечено поручительством; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 24 не передаются в соответствии со схемой Blocks.xsd.',
            'УИд договора поручительства' => 'Заполняется, если по обязательству поручителя формируется КИ. Значение показателя должно соответствовать значению показателя 17.1 «УИд сделки» блока 17 в КИ поручителя – физического лица или показателя 10.1 «УИд сделки» блока 10 в КИ поручителя – юридического лица.',
            'Размер поручительства' => '',
            'Валюта поручительства' => '',
            'Дата заключения договора поручительства' => '',
            'Дата прекращения поручительства согласно договору' => '',
            'Дата фактического прекращения поручительства' => '',
            'Код причины прекращения поручительства' => 'Заполняется по справочнику 4.2.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 24. Сведения о поручительстве';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        if(empty($this->sendData->getAccountReplyRUTDF()->getGuarantor()[$this->idx])){
            $this->warrantyFact0 = '';
            $this->warrantyFact1 = null;
            return;
        }
        $warranty = $this->sendData->getAccountReplyRUTDF()->getGuarantor()[$this->idx];
        $this->warrantyFact1 = '';
        $this->warrantyFact0 = null;

        $this->uid = UuidHelper::getUuidWithControl($warranty->guaranteeUuid);
        $this->sum = $this->formatCurrency($warranty->guaranteeVolume);
        $this->currency = $warranty->currencyCode;
        $this->openDate = $this->formatDate($warranty->guaranteeAgreementDt);
        $this->endDate = $this->formatDate($warranty->guaranteeExpirationDate);
        $this->factEndDate = $this->formatDate($warranty->guaranteeFactExpirationDate);
        $this->endCode = $warranty->guaranteeEndReason ?: null;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'warrantyFact_0' => 'warrantyFact0',
            'warrantyFact_1' => 'warrantyFact1',
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

