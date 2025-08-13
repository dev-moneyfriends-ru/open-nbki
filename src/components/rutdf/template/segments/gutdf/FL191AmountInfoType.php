<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\helpers\UuidHelper;

/**
 * Class representing FL191AmountInfoType
 *
 * Блок 19(1). Сведения об обеспечиваемом обязательстве
 * XSD Type: FL_19_1_AmountInfo_Type
 */
class FL191AmountInfoType extends GutdfSegment
{
    /**
     * 19(1).1. Признак обеспечивающего обязательства = 0
     *
     * @var string $securityFact0
     */
    private $securityFact0 = null;

    /**
     * 19(1).1. Признак обеспечивающего обязательства = 1
     *
     * @var string $securityFact1
     */
    private $securityFact1 = null;

    /**
     * 19(1).2. Сумма обеспечиваемого обязательства
     *
     * @var float $securitySum
     */
    private $securitySum = null;

    /**
     * 19(1).3. Валюта обеспечиваемого обязательства
     *
     * @var string $securityCurrency
     */
    private $securityCurrency = null;

    /**
     * 19(1).4. Код типа обеспечиваемого обязательства
     *
     * @var int $securityTypeCode
     */
    private $securityTypeCode = null;

    /**
     * 19(1).5. Дата расчета
     *
     * @var string $calcDate
     */
    private $calcDate = null;

    /**
     * 19(1).6. УИд сделки, в результате которой возникло обеспечиваемое обязательство
     *
     * @var string $securityUid
     */
    private $securityUid = null;

    /**
     * 19(1).7. Лимит ответственности по обеспечиваемому обязательству
     *
     * @var int $liabilityLimit
     */
    private $liabilityLimit = null;

    /**
     * Gets as securityFact0
     *
     * 19(1).1. Признак обеспечивающего обязательства = 0
     *
     * @return string
     */
    public function getSecurityFact0()
    {
        return $this->securityFact0;
    }

    /**
     * Sets a new securityFact0
     *
     * 19(1).1. Признак обеспечивающего обязательства = 0
     *
     * @param string $securityFact0
     * @return self
     */
    public function setSecurityFact0($securityFact0)
    {
        $this->securityFact0 = $securityFact0;
        return $this;
    }

    /**
     * Gets as securityFact1
     *
     * 19(1).1. Признак обеспечивающего обязательства = 1
     *
     * @return string
     */
    public function getSecurityFact1()
    {
        return $this->securityFact1;
    }

    /**
     * Sets a new securityFact1
     *
     * 19(1).1. Признак обеспечивающего обязательства = 1
     *
     * @param string $securityFact1
     * @return self
     */
    public function setSecurityFact1($securityFact1)
    {
        $this->securityFact1 = $securityFact1;
        return $this;
    }

    /**
     * Gets as securitySum
     *
     * 19(1).2. Сумма обеспечиваемого обязательства
     *
     * @return float
     */
    public function getSecuritySum()
    {
        return $this->securitySum;
    }

    /**
     * Sets a new securitySum
     *
     * 19(1).2. Сумма обеспечиваемого обязательства
     *
     * @param float $securitySum
     * @return self
     */
    public function setSecuritySum($securitySum)
    {
        $this->securitySum = $securitySum;
        return $this;
    }

    /**
     * Gets as securityCurrency
     *
     * 19(1).3. Валюта обеспечиваемого обязательства
     *
     * @return string
     */
    public function getSecurityCurrency()
    {
        return $this->securityCurrency;
    }

    /**
     * Sets a new securityCurrency
     *
     * 19(1).3. Валюта обеспечиваемого обязательства
     *
     * @param string $securityCurrency
     * @return self
     */
    public function setSecurityCurrency($securityCurrency)
    {
        $this->securityCurrency = $securityCurrency;
        return $this;
    }

    /**
     * Gets as securityTypeCode
     *
     * 19(1).4. Код типа обеспечиваемого обязательства
     *
     * @return int
     */
    public function getSecurityTypeCode()
    {
        return $this->securityTypeCode;
    }

    /**
     * Sets a new securityTypeCode
     *
     * 19(1).4. Код типа обеспечиваемого обязательства
     *
     * @param int $securityTypeCode
     * @return self
     */
    public function setSecurityTypeCode($securityTypeCode)
    {
        $this->securityTypeCode = $securityTypeCode;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * 19(1).5. Дата расчета
     *
     * @return string
     */
    public function getCalcDate()
    {
        return $this->calcDate;
    }

    /**
     * Sets a new calcDate
     *
     * 19(1).5. Дата расчета
     *
     * @param string $calcDate
     * @return self
     */
    public function setCalcDate($calcDate)
    {
        $this->calcDate = $calcDate;
        return $this;
    }

    /**
     * Gets as securityUid
     *
     * 19(1).6. УИд сделки, в результате которой возникло обеспечиваемое обязательство
     *
     * @return string
     */
    public function getSecurityUid()
    {
        return $this->securityUid;
    }

    /**
     * Sets a new securityUid
     *
     * 19(1).6. УИд сделки, в результате которой возникло обеспечиваемое обязательство
     *
     * @param string $securityUid
     * @return self
     */
    public function setSecurityUid($securityUid)
    {
        $this->securityUid = $securityUid;
        return $this;
    }

    /**
     * Gets as liabilityLimit
     *
     * 19(1).7. Лимит ответственности по обеспечиваемому обязательству
     *
     * @return int
     */
    public function getLiabilityLimit()
    {
        return $this->liabilityLimit;
    }

    /**
     * Sets a new liabilityLimit
     *
     * 19(1).7. Лимит ответственности по обеспечиваемому обязательству
     *
     * @param int $liabilityLimit
     * @return self
     */
    public function setLiabilityLimit($liabilityLimit)
    {
        $this->liabilityLimit = $liabilityLimit;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_19_1_AmountInfo';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак обеспечиваемого обязательства 0' => 'Код «1» - в случае если обязательство обеспечивает одно или несколько обязательств; код «0» - в случае если обстоятельство кода «1» отсутствует. В случае если по показателю 12.1.1 «Признак обеспечиваемого обязательства» указан код  «0», иные показатели блока 12.1 Показателей КИ ФЛ не передаются в соответствии со схемой Blocks.xsd.',
            'Признак обеспечиваемого обязательства 1' => 'Код «1» - в случае если обязательство обеспечивает одно или несколько обязательств; код «0» - в случае если обстоятельство кода «1» отсутствует. В случае если по показателю 12.1.1 «Признак обеспечиваемого обязательства» указан код  «0», иные показатели блока 12.1 Показателей КИ ФЛ не передаются в соответствии со схемой Blocks.xsd.',
            'Сумма обеспечиваемого обязательства' => 'Заполняется, если обязательством субъекта обеспечивается исполнение другого обязательства. Отражается сумма задолженности всех видов по обязательству, исполнение которого обеспечено обязательством субъекта, на дату формирования задолженности, изменения суммы задолженности.',
            'Валюта обеспечиваемого обязательства' => 'Заполняется согласно условиям сделки.',
            'Код типа обеспечиваемого обязательства' => 'Заполняется по справочнику 2.2',
            'Дата расчета' => 'Определяется датой, по состоянию на которую сформирован блок 19 Показателей КИ ФЛ.',
            'УИд сделки, в результате которой возникло обеспечиваемое обязательство' => 'Указывается УИд сделки, обязательства из которой обеспечены обязательством субъекта.',
            'Лимит ответственности по обеспечиваемому обязательству' => 'Указывается лимит ответственности субъекта по обеспечению исполнения другого обязательства согласно условиям сделки'
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 19(1). Сведения об обеспечиваемом обязательстве';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $amountInfo = $this->sendData->getAccountReplyRUTDF()->getAmountInfoArray()[$this->idx];
        if (empty($amountInfo->ensuredAmt)) {
            $this->securityFact0 = '';
            $this->securityFact1 = null;
            return;
        }
        $this->securityFact0 = null;
        $this->securityFact1 = '';
        $this->securitySum = $this->formatCurrency($amountInfo->ensuredAmt);
        $this->securityCurrency = $amountInfo->commitcurrCode;
        $this->securityTypeCode = $amountInfo->commitCode;
        $this->calcDate = $this->formatDate($amountInfo->amtDate);
        $this->securityUid = UuidHelper::getUuidWithControl($amountInfo->commitUuid);
        $this->liabilityLimit = $amountInfo->liabilityLimit;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'securityFact_0' => 'securityFact0',
            'securityFact_1' => 'securityFact1',
            'securitySum',
            'securityCurrency',
            'securityTypeCode',
            'calcDate',
            'securityUid',
            'liabilityLimit',
        ];
    }
}

