<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 14. Сведения об условиях платежей- B14_PAYMTCONDITION
 */
class B14PaymtCondition extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B14_PAYMTCONDITION";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $trade = $this->template->offer->getTrade();
        return [
            $this->segmentName,
            $this->formatCurrency($trade->principalTermsAmt),
            $this->formatDate($trade->principalTermsAmtDt),
            $this->formatCurrency($trade->interestTermsAmt),
            $this->formatDate($trade->interestTermsAmtDt),
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
    public function getTitle(): string
    {
        return "Блок 14. Сведения об условиях платежей- B14_PAYMTCONDITION";
    }
}