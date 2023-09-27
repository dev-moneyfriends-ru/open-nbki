<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\BaseSegment;

/**
 * Блок 28. Сведения о внесении платежей – C28_PAYMT
 */
class C28Paymt extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C28_PAYMT';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        if (empty($this->template->offer->getPaymentArray())) {
            return [
                $this->segmentName,
                $this->emptyValue,
                $this->formatCurrency(0),
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                3,
                1,
                0,
            ];
        }
        $payments = $this->template->offer->getPaymentArray();
        $lastPayment = end($payments);
        $paymtAmt = 0;
        $principalPaymtAmt = 0;
        $intPaymtAmt = 0;
        $otherPaymtAmt = 0;
        $termsDueCode = 2;
        if ($this->template->offer->getTrade()->amtPastDue > 0.001) {
            $termsDueCode = 3;
        }
        foreach ($payments as $payment) {
            $paymtAmt += $payment->paymtAmt;
            $principalPaymtAmt += $payment->principalPaymtAmt;
            $intPaymtAmt += $payment->intPaymtAmt;
            $otherPaymtAmt += $payment->otherPaymtAmt;
        }
        return [
            $this->segmentName,
            $this->formatNewDate($lastPayment->paymtDate),
            $this->formatCurrency($lastPayment->paymtAmt),
            $this->formatCurrency($lastPayment->principalPaymtAmt),
            $this->formatCurrency($lastPayment->intPaymtAmt),
            $this->formatCurrency($lastPayment->otherPaymtAmt),
            $this->formatCurrency($paymtAmt),
            $this->formatCurrency($principalPaymtAmt),
            $this->formatCurrency($intPaymtAmt),
            $this->formatCurrency($otherPaymtAmt),
            $lastPayment->amtKeepCode,
            $termsDueCode,
            $this->daysPastDue(),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Дата последнего внесенного платежа' => '',
            'Сумма последнего внесенного платежа' => '',
            'Сумма последнего внесенного платежа по основному долгу' => '',
            'Сумма последнего внесенного платежа по процентам' => '',
            'Сумма последнего внесенного платежа по иным требованиям' => '',
            'Сумма всех внесенных платежей по обязательству' => '',
            'Сумма внесенных платежей по основному долгу' => '',
            'Сумма внесенных платежей по процентам' => '',
            'Сумма внесенных платежей по иным требованиям' => '',
            'Код соблюдения размера платежей' => '',
            'Код соблюдения срока внесения платежей' => '',
            'Продолжительность просрочки' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 28. Сведения о внесении платежей – C28_PAYMT';
    }
}