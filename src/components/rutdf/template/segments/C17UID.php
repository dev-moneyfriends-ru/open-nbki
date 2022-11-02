<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 17. Уникальный идентификатор договора (сделки) – C17_UID
 */
class C17UID extends \mfteam\nbch\components\BaseSegment
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
        return "C17_UID";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            $this->template->offer->getTrade()->uuid . "-" . $this->getUuidControlSum($this->template->offer->getTrade()->uuid)
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'УИд сделки'
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 17. Уникальный идентификатор договора (сделки) – C17_UID";
    }
}