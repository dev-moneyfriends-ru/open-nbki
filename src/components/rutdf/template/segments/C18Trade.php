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
            $trade->acctType,
            $trade->loanKindCode
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
        // TODO: Implement getDescription() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 18. Общие сведения о сделке - C18_TRADE";
    }
}