<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 19. Сумма и валюта обязательства – C19_ACCOUNTAMT
 */
class C19AccountAmt extends \mfteam\nbch\components\BaseSegment
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
        return "C19_ACCOUNTAMT";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            $this->template->getOffer()->getTrade()->creditLimit,
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
            'Сумма обязательства',
            'Валюта обязательства',
            'Сумма обеспечиваемого обязательства',
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
        return 'Блок 19. Сумма и валюта обязательства – C19_ACCOUNTAMT';
    }
}