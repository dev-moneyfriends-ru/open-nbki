<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 12. Сумма и валюта обязательства – B12_ACCOUNTAMT
 */
class B12AccountAmt extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B12_ACCOUNTAMT";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            0 =>$this->segmentName,
            1 =>$this->formatCurrency($this->template->getOffer()->getTrade()->creditLimit),
            2 =>$this->template->getOffer()->getTrade()->currencyCode,
            3 =>$this->emptyValue,
            4 =>$this->emptyValue,
            5 =>$this->emptyValue,
            6 =>$this->formatNewDate($this->template->offer->getTrade()->reportingDt),
            7 =>$this->emptyValue,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Сумма обязательства' => 'Заполняется согласно условиям сделки.
                                    Для договора займа (кредита) указывается сумма займа (кредита) либо расходный лимит.
                                    Для договора поручительства указывается размер ответственности поручителя.
                                    Для независимой гарантии указывается сумма, которую принципал обязуется возместить гаранту по выплаченной гарантии (при наличии такой суммы).
                                    Для договора лизинга указывается сумма лизинговых платежей.
                                    ',
            'Валюта обязательства' => '',
            'Сумма обеспечиваемого обязательства' => 'Заполняется, если обязательством субъекта обеспечивается исполнение другого обязательства. По данному показателю отражается размер обязательства, исполнение которого обеспечено обязательством субъекта.',
            'Валюта обеспечиваемого обязательства' => '',
            'Код типа обеспечиваемого обязательства' => '',
            'Дата расчета' => '',
            'УИд сделки, в результате которой возникло обеспечиваемое обязательство' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 12. Сумма и валюта обязательства – B12_ACCOUNTAMT";
    }
}