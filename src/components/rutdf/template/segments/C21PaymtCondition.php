<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 21. Сведения об условиях платежей – C21_PAYMTCONDITION
 */
class C21PaymtCondition extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        // TODO: Implement validate() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C21_PAYMTCONDITION';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
          $this->segmentName,
          $this->formatCurrency($this->template->offer->getTrade()->principalPastDue)
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        // TODO: Implement getFieldsDescriptions() method.
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
        return 'Блок 21. Сведения об условиях платежей – C21_PAYMTCONDITION';
    }
}