<?php

namespace mfteam\nbch\components\rutdf\template\segments;

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
}