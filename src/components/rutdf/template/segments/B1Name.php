<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 1. Наименование юридического лица – B1_NAME
 */
class B1Name extends \mfteam\nbch\components\BaseSegment
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
        return 'B1_NAME';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            mb_strtoupper($this->template->subject->getBusiness()->businessName),
            mb_strtoupper($this->template->subject->getBusiness()->abbreviatedBusinessName),
            $this->emptyValue,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Название' => '',
            'Полное наименование' => 'Полное наименование юридического лица на русском языке.',
            'Сокращенное наименование' => 'Сокращенное наименование юридического лица на русском языке.',
            'Иное наименование' => 'Фирменное наименование юридического лица или его наименование на иностранном языке.
                                    Заполняется при наличии иного наименования у источника.
                                    ',
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
        return 'Блок 1. Наименование юридического лица – B1_NAME';
    }
}