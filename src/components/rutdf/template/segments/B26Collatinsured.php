<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 26. Сведения о страховании предмета залога – B26_COLLATINSURED
 * TODO Реализовать
 */
class B26Collatinsured extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'B26_COLLATINSURED';
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
            'Идентификационный код предмета залога' => 'Должен совпадать хотя бы с одним значением показателя «Идентификационный код предмета залога» ',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 26. Сведения о страховании предмета залога – B26_COLLATINSURED';
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'В случае наличия нескольких страхований предметов залога с одинаковой датой начала страхования (показатель 26.5) укажите сводную информацию, - сложите суммы, приведя к одной валюте, укажите минимальную из дат прекращения/окончания страхования, первую причину прекращения страхования.';
    }
}