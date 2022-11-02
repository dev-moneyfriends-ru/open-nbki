<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 12. Сведения о дееспособности – C12_CAPABILITY
 */
class C12Capability extends \mfteam\nbch\components\BaseSegment
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
        return "C12_CAPABILITY";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            1,
            $this->emptyValue,
            $this->emptyValue,
            $this->emptyValue,
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
            'Код дееспособности',
            'Дата вступления в силу решения суда о признании недееспособным или об ограничении дееспособности',
            'Номер решения суда',
            'Наименование суда',
            'Дата вступления в силу решения суда о признании дееспособным или об отмене ограничения дееспособности',
            'Номер решения суда',
            'Наименование суда',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "Блок заполняется для всех субъектов независимо от их обязательства. Это касается заемщика (в том числе при наличии созаемщиков), поручителя, принципала и лизингополучателя.";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 12. Сведения о дееспособности – C12_CAPABILITY";
    }
}