<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL29MonthlyPaymentType
 *
 * Блок 29. Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета
 * XSD Type: FL_29_MonthlyPayment_Type
 */
class FL29MonthlyPaymentType extends GutdfSegment
{
    /**
     * 29.1. Величина среднемесячного платежа
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 29.2. Дата расчета величины среднемесячного платежа
     *
     * @var string $calcDate
     */
    private $calcDate = null;

    /**
     * 29.3. Сумма всех оставшихся платежей по обязательству
     *
     * @var float $sumTotal
     */
    private $sumTotal = null;

    /**
     * Gets as sum
     *
     * 29.1. Величина среднемесячного платежа
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
     * 29.1. Величина среднемесячного платежа
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
     * Gets as calcDate
     *
     * 29.2. Дата расчета величины среднемесячного платежа
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
     * 29.2. Дата расчета величины среднемесячного платежа
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
     * Gets as sumTotal
     *
     * 29.3. Сумма всех оставшихся платежей по обязательству
     *
     * @return float
     */
    public function getSumTotal()
    {
        return $this->sumTotal;
    }

    /**
     * Sets a new sumTotal
     *
     * 29.3. Сумма всех оставшихся платежей по обязательству
     *
     * @param float $sumTotal
     * @return self
     */
    public function setSumTotal($sumTotal)
    {
        $this->sumTotal = $sumTotal;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_29_MonthlyPayment';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Величина среднемесячного платежа' => 'При прекращении обязательства (независимо от основания), указывается значение 0',
            'Дата расчета величины среднемесячного платежа' => 'Дата, по состоянию на которую источник выполнил расчет.',
            'Сумма всех оставшихся платежей по обязательству' => 'Сумма всех оставшихся платежей, которые по условиям обязательства субъект – физическое лицо обязан внести в счет погашения задолженности с даты расчета величины среднемесячного платежа, указанной по показателю 29.2 до дня прекращения обязательства по договору.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 29. Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $payment = $this->sendData->getAccountReplyRUTDF()->getMonthAverPaymt();
        if ($payment === null) {
            return;
        }
        $this->sum = $this->formatCurrency($payment->averPaymtAmt);
        $this->calcDate = $this->formatDate($payment->calcDate);
        $this->sumTotal = $this->formatCurrency($payment->sumTotal);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'sum',
            'calcDate',
            'sumTotal',
        ];
    }
}

