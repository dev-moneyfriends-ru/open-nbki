<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 11. Общие сведения о сделке – B11_TRADE
 */
class B11Trade extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B11_TRADE";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $trade = $this->template->offer->getTrade();
        return [
            $this->segmentName,
            $trade->ownerIndic,
            $this->formatNewDate($trade->openedDt),
            $trade->tradeTypeCode,
            $trade->loanKindCode,
            $trade->acctType,
            0,
            0,
            1,
            1,
            $this->formatNewDate($trade->closedDt)
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Код вида участия в сделке' => 'Заполняется по справочнику 2.1.',
            'Дата совершения сделки' => 'Дата совершения сделки, по обязательствам из которой формируется КИ.',
            'Код типа сделки' => 'Заполняется по справочнику 2.2.',
            'Код вида займа (кредита)' => 'Заполняется по справочнику 2.3.',
            'Код цели займа (кредита)' => 'Заполняется по справочнику 2.4. При наличии нескольких целей займа (кредита) значения указываются через запятую.',
            'Признак использования платежной карты',
            'Признак возникновения обязательства в результате новации',
            'Признак денежного обязательства источника',
            'Признак денежного обязательства субъекта',
            'Дата прекращения обязательства субъекта по условиям сделки'
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 11. Общие сведения о сделке – B11_TRADE";
    }
}