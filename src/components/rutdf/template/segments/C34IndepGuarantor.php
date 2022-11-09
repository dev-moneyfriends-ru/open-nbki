<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 34. Сведения о независимой гарантии – C34_INDEPGUARANTOR
 */
class C34IndepGuarantor extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C34_INDEPGUARANTOR';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            0,
            $this->emptyValue,
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
            'Наименование сегмента' => '',
            'Признак наличия независимой гарантии' => '',
            'УИд независимой гарантии' => '',
            'Сумма независимой гарантии' => '',
            'Валюта независимой гарантии' => '',
            'Дата выдачи независимой гарантии' => '',
            'Дата окончания независимой гарантии согласно ее условиям' => '',
            'Дата фактического прекращения независимой гарантии' => '',
            'Код причины прекращения независимой гарантии' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 34. Сведения о независимой гарантии – C34_INDEPGUARANTOR';
    }
}