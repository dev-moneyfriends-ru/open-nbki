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
            $this->segmentName,
            $this->formatCurrency($this->template->getOffer()->getTrade()->creditLimit),
            $this->template->getOffer()->getTrade()->currencyCode,
            $this->emptyValue,
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