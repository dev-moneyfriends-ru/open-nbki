<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use DateTime;

/**
 * Блок 20. Сведения о внесении платежей – B20_PAYMT
 */
class B20Paymt extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B20_PAYMT";
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
                $this->formatCurrency(0),
                $this->formatCurrency(0),
                $this->formatCurrency(0),
                $this->formatCurrency(0),
                $this->formatCurrency(0),
                $this->formatCurrency(0),
                $this->formatCurrency(0),
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
        return "Блок 20. Сведения о внесении платежей – B20_PAYMT";
    }
    
    private function daysPastDue()
    {
        $daysPastDue = 0;
        if ($this->template->offer->getTrade()->amtPastDue > 0.001) {
            $currentDate = new DateTime();
            $overdueDate = (new DateTime())
                ->setTimestamp(
                    \Yii::$app->formatter->asTimestamp($this->template->getOffer()->getTrade()->pastDueDt)
                );
            
            $interval = $currentDate->diff($overdueDate);
            $daysPastDue = $interval->days;
        }
        return $daysPastDue;
    }
}