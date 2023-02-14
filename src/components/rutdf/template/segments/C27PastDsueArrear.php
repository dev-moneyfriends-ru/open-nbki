<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\BaseSegment;

/**
 * Блок 27. Сведения о просроченной задолженности – C27_PASTDUEARREAR
 */
class C27PastDsueArrear extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C27_PASTDUEARREAR';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $trade = $this->template->offer->getTrade();
        if ($trade->amtPastDue < 0.01) {
            return [
                $this->segmentName,
                $this->formatNewDate($trade->pastDueDt),
                $this->emptyValue,
                $this->formatCurrency(0),
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->formatNewDate($this->template->getOffer()->getTrade()->reportingDt),
                $this->emptyValue,
                $this->emptyValue,
            ];
        }
        return [
            $this->segmentName,
            $this->formatNewDate($trade->pastDueDt),
            1,
            $this->formatCurrency($trade->amtPastDue),
            $this->formatCurrency($trade->principalPastDue),
            $this->formatCurrency($trade->intPastDue),
            $this->formatCurrency($trade->otherAmtPastDue),
            $this->formatNewDate($trade->reportingDt),
            $this->formatNewDate($trade->principalMissedDate),
            $this->formatNewDate($trade->intMissedDate),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Дата возникновения просроченной задолженности' => '',
            'Признак расчета по последнему платежу' => '',
            'Сумма просроченной задолженности' => '',
            'Сумма просроченной задолженности по основному долгу' => '',
            'Сумма просроченной задолженности по процентам' => '',
            'Сумма просроченной задолженности по иным требованиям' => '',
            'Дата расчета' => '',
            'Дата последнего пропущенного платежа по основному долгу' => '',
            'Дата последнего пропущенного платежа по процентам' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 27. Сведения о просроченной задолженности – C27_PASTDUEARREAR';
    }
}