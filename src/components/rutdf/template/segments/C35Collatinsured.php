<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 35. Сведения о страховании предмета залога – C35_COLLATINSURED
 */
class C35Collatinsured extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C35_COLLATINSURED';
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
            'Признак наличия страхования' => '',
            'Лимит страховых выплат' => '',
            'Валюта страховых выплат' => '',
            'Признак наличия франшизы' => '',
            'Дата начала действия страхования' => '',
            'Дата окончания действия страхования согласно договору' => '',
            'Дата фактического прекращения страхования' => '',
            'Код причины прекращения страхования' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 35. Сведения о страховании предмета залога – C35_COLLATINSURED';
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'В случае наличия нескольких страхований предметов залога с одинаковой датой начала страхования (показатель 26.5) укажите сводную информацию, - сложите суммы, приведя к одной валюте, укажите минимальную из дат прекращения/окончания страхования, первую причину прекращения страхования.';
    }
}