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
            0 => $this->segmentName,
            1 => $trade->ownerIndic,
            2 => $this->formatNewDate($trade->openedDt),
            3 => $trade->tradeTypeCode,
            4 => $trade->loanKindCode,
            5 => $trade->acctType,
            6 => 0,
            7 => 0,
            8 => 1,
            9 => 1,
            10 => $this->formatNewDate($trade->closedDt),
            11 => $trade->obtainpartCred,
            12 => $trade->creditLine,
            13 => $trade->creditLineCode,
            14 => $trade->interestrateFloat,
            15 => $trade->transpartCred,
            16 => $trade->transpartCredUuid,
            17 => $this->formatNewDate($trade->openedDt),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            '0 Наименование сегмента' => '',
            '1 Код вида участия в сделке' => 'Заполняется по справочнику 2.1.',
            '2 Дата совершения сделки' => 'Дата совершения сделки, по обязательствам из которой формируется КИ.',
            '3 Код типа сделки' => 'Заполняется по справочнику 2.2.',
            '4 Код вида займа (кредита)' => 'Заполняется по справочнику 2.3.',
            '5 Код цели займа (кредита)' => 'Заполняется по справочнику 2.4. При наличии нескольких целей займа (кредита) значения указываются через запятую.',
            '6 Признак использования платежной карты' => '',
            '7 Признак возникновения обязательства в результате новации' => '',
            '8 Признак денежного обязательства источника' => '',
            '9 Признак денежного обязательства субъекта' => '',
            '10 Дата прекращения обязательства субъекта по условиям сделки' => '',
            '11 Признак возникновения обязательства в результате получения части прав кредитора от другого лица' => '',
            '12 Признак кредитной линии' => '',
            '13 Код типа кредитной линии' => '',
            '14 Признак плавающей (переменной) процентной ставки' => '',
            '15 Признак частичной передачи прав кредитора другому лицу' => '',
            '16 УИд сделки, по которой права кредитора частично переданы другому лицу' => '',
            '17 Дата возникновения обязательства субъекта' => '',
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