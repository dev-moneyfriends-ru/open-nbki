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
            0 => $this->segmentName,
            1 => $trade->ownerIndic,
            2 => $this->formatNewDate($trade->openedDt),
            3 => $trade->tradeTypeCode,
            4 => $trade->loanKindCode,
            5 => $trade->acctType,
            6 => 0,
            7 => 0,
            8 => 0,
            9 => 1,
            10 => 1,
            11 => $this->formatNewDate($trade->closedDt),
            12 => 6,
            13 => $trade->obtainpartCred,
            14 => $trade->creditLine,
            15 => $trade->creditLineCode,
            16 => $trade->interestrateFloat,
            17 => $trade->transpartCred,
            18 => $trade->transpartCredUuid,
            19 => $trade->commitDate?$this->formatNewDate($trade->commitDate):$this->formatNewDate($trade->openedDt),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            '0 Наименование сегмента' => '',
            '1 Код вида участия в сделке' => '',
            '2 Дата совершения сделки' => '',
            '3 Код типа сделки' => '',
            '4 Код вида займа (кредита)' => '',
            '5 Код цели займа (кредита)' => '',
            '6 Признак потребительского кредита (займа)' => '',
            '7 Признак использования платежной карты' => '',
            '8 Признак возникновения обязательства в результате новации' => '',
            '9 Признак денежного обязательства источника' => '',
            '10 Признак денежного обязательства субъекта' => '',
            '11 Дата прекращения обязательства субъекта по условиям сделки' => '',
            '12 Код вида кредитора – заимодавца' => 'Заполняется по строкам кодов 1–6 справочника 6.1',
            '13 Признак возникновения обязательства в результате получения части прав кредитора от другого лица' => '',
            '14 Признак кредитной линии' => '',
            '15 Код типа кредитной линии' => '',
            '16 Признак плавающей (переменной) процентной ставки' => '',
            '17 Признак частичной передачи прав кредитора другому лицу' => '',
            '18 УИд сделки, по которой права кредитора частично переданы другому лицу' => '',
            '19 Дата возникновения обязательства субъекта' => '',
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