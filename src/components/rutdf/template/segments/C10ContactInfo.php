<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 10. Контактные данные – C10_CONTACTINFO
 */
class C10ContactInfo extends \mfteam\nbch\components\BaseSegment
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
        return "C10_CONTACTINFO";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            $this->emptyValue,
            $this->emptyValue,
            $this->emptyValue,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента',
            'Номер телефона',
            'Комментарий к номеру телефона',
            'Адрес электронной почты',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "Указываются сведения, если субъект предоставил соответствующие контактные данные источнику.";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 10. Контактные данные – C10_CONTACTINFO";
    }
}