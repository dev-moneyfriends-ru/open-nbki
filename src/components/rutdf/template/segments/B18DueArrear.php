<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\BaseSegment;

/**
 * Блок 18. Сведения о срочной задолженности – B18_DUEARREAR
 */
class B18DueArrear extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B18_DUEARREAR";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $trade = $this->template->offer->getTrade();
        if ($trade->amtOutstanding < 0.01 || !empty($trade->completePerformDt)) {
            return [
                $this->segmentName,
                $this->emptyValue,
                $this->emptyValue,
                $this->formatCurrency(0),
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
            ];
        }
        return [
            $this->segmentName,
            $this->formatNewDate($trade->startDt),
            1,
            $this->formatCurrency($trade->amtOutstanding),
            $this->formatCurrency($trade->principalOutstanding),
            $this->formatCurrency($trade->intOutstanding),
            $this->formatCurrency($trade->otherAmtOutstanding),
            $this->formatNewDate($trade->reportingDt),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Дата возникновения срочной задолженности' => '',
            'Признак расчета по последнему платежу' => '',
            'Сумма срочной задолженности' => '',
            'Сумма срочной задолженности по основному долгу' => '',
            'Сумма срочной задолженности по процентам' => '',
            'Сумма срочной задолженности по иным требованиям' => '',
            'Дата расчета' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 18. Сведения о срочной задолженности – B18_DUEARREAR";
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "В блоке указываются сведения обо всех денежных требованиях к субъекту, срок погашения которых не наступил. Сведения указываются согласно условиям сделки.
                Для договора лизинга указываются требования по внесению в том числе лизинговых платежей.
                ";
    }
}