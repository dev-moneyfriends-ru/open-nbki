<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 19. Сведения о просроченной задолженности – B19_PASTDUEARREAR
 */
class B19PastDsueArrear extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B19_PASTDUEARREAR";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $trade = $this->template->offer->getTrade();
        if($trade->amtPastDue){
            return [
                $this->segmentName,
                $this->emptyValue,
                $this->formatCurrency($trade->amtPastDue),
                $this->formatCurrency($trade->principalPastDue),
                $this->formatCurrency($trade->intPastDue),
                $this->formatCurrency($trade->otherAmtPastDue),
                $this->formatDate($trade->reportingDt),
                $this->emptyValue,
                $this->emptyValue,
            ];
        }
        return [
            $this->segmentName,
            $this->formatDate($trade->pastDueDt),
            $this->formatCurrency($trade->amtPastDue),
            $this->formatCurrency($trade->principalPastDue),
            $this->formatCurrency($trade->intPastDue),
            $this->formatCurrency($trade->otherAmtPastDue),
            $this->formatDate($trade->reportingDt),
            $this->formatDate($trade->principalMissedDate),
            $this->formatDate($trade->intMissedDate),
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
        return 'Блок 19. Сведения о просроченной задолженности – B19_PASTDUEARREAR';
    }
}