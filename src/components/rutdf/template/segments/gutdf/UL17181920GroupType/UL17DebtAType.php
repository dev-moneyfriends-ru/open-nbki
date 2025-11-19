<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL17181920GroupType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing UL17DebtAType
 */
class UL17DebtAType extends GutdfSegment
{
    /**
     * 17.4. Сумма задолженности
     *
     * @var float $debtSum
     */
    private $debtSum = null;

    /**
     * 17.5. Сумма задолженности по основному долгу
     *
     * @var float $debtMainSum
     */
    private $debtMainSum = null;

    /**
     * 17.6. Сумма задолженности по процентам
     *
     * @var float $debtPercentSum
     */
    private $debtPercentSum = null;

    /**
     * 17.7. Сумма задолженности по иным требованиям
     *
     * @var float $debtOtherSum
     */
    private $debtOtherSum = null;

    /**
     * 17.9. Валюта задолженности
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * Gets as debtSum
     *
     * 17.4. Сумма задолженности
     *
     * @return float
     */
    public function getDebtSum()
    {
        return $this->debtSum;
    }

    /**
     * Sets a new debtSum
     *
     * 17.4. Сумма задолженности
     *
     * @param float $debtSum
     * @return self
     */
    public function setDebtSum($debtSum)
    {
        $this->debtSum = $debtSum;
        return $this;
    }

    /**
     * Gets as debtMainSum
     *
     * 17.5. Сумма задолженности по основному долгу
     *
     * @return float
     */
    public function getDebtMainSum()
    {
        return $this->debtMainSum;
    }

    /**
     * Sets a new debtMainSum
     *
     * 17.5. Сумма задолженности по основному долгу
     *
     * @param float $debtMainSum
     * @return self
     */
    public function setDebtMainSum($debtMainSum)
    {
        $this->debtMainSum = $debtMainSum;
        return $this;
    }

    /**
     * Gets as debtPercentSum
     *
     * 17.6. Сумма задолженности по процентам
     *
     * @return float
     */
    public function getDebtPercentSum()
    {
        return $this->debtPercentSum;
    }

    /**
     * Sets a new debtPercentSum
     *
     * 17.6. Сумма задолженности по процентам
     *
     * @param float $debtPercentSum
     * @return self
     */
    public function setDebtPercentSum($debtPercentSum)
    {
        $this->debtPercentSum = $debtPercentSum;
        return $this;
    }

    /**
     * Gets as debtOtherSum
     *
     * 17.7. Сумма задолженности по иным требованиям
     *
     * @return float
     */
    public function getDebtOtherSum()
    {
        return $this->debtOtherSum;
    }

    /**
     * Sets a new debtOtherSum
     *
     * 17.7. Сумма задолженности по иным требованиям
     *
     * @param float $debtOtherSum
     * @return self
     */
    public function setDebtOtherSum($debtOtherSum)
    {
        $this->debtOtherSum = $debtOtherSum;
        return $this;
    }

    /**
     * Gets as currency
     *
     * 17.9. Валюта задолженности
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
     * 17.9. Валюта задолженности
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
        return 'UL_17_Debt';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак наличия задолженности' => 'Код «1» – у субъекта имеется задолженность перед источником; код «0» – обстоятельство кода «1» отсутствует (в частности, если субъекту не передана сумма займа (кредита), ответственность субъекта-поручителя не наступила, обязательство принципала возместить выплаченную по независимой гарантии сумму не возникло). Если по показателю 25.1 «Признак наличия задолженности» указан код «0», иные показатели блока 25 Показателей КИ ФЛ не заполняются.',
            'Сумма задолженности' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 17.3 «Признак расчета по последнему платежу». Если показатель 17.3 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Сумма задолженности по основному долгу' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 17.3 «Признак расчета по последнему платежу». Если показатель 17.3 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Сумма задолженности по процентам' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 17.3 «Признак расчета по последнему платежу». Если показатель 17.3 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Сумма задолженности по иным требованиям' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 17.3 «Признак расчета по последнему платежу». Если показатель 17.3 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 17. Сведения о задолженности';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $debt = $this->sendData->getAccountReplyRUTDF()->getArrear();
        if($debt === null || empty($debt->amtOutstanding)){
            return;
        }
        $this->debtSum = $this->formatCurrency($debt->amtOutstanding);
        $this->debtMainSum = $this->formatCurrency($debt->principalOutstanding);
        $this->debtPercentSum = $this->formatCurrency($debt->intOutstanding);
        $this->debtOtherSum = $this->formatCurrency($debt->otherAmtOutstanding);
        $this->currency = $debt->getArrearCurrency();
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'debtSum',
            'debtMainSum',
            'debtPercentSum',
            'debtOtherSum',
            'currency',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'В блоке указываются сведения обо всех имеющихся (непогашенных) денежных требованиях к субъекту согласно условиям сделки. Размер требований определяется методом ФИФО. Для договора лизинга указываются требования по внесению в том числе лизинговых платежей, пеней и штрафов';
    }
}

