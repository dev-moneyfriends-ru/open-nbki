<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 18. Общие сведения о сделке - C18_TRADE
 */
class C18Trade extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        return true;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "C18_TRADE";
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
            $trade->openedDt,
            $trade->tradeTypeCode,
            $trade->loanKindCode,
            $trade->acctType,
            0,
            0,
            0,
            1,
            0,
            $trade->closedDt
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента',
          'Код вида участия в сделке',
          'Дата совершения сделки',
            'Код типа сделки',
            'Код вида займа (кредита)',
            'Код цели займа (кредита)',
            'Признак потребительского кредита (займа)',
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
    public function getDescription(): string
    {
        return '';
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 18. Общие сведения о сделке - C18_TRADE";
    }
}