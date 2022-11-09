<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\BaseSegment;

/**
 * Блок 23. Сведения об изменении договора – C23_AMENDMENT
 */
class C23Amendment extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C23_AMENDMENT';
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
            'Признак изменения договора' => '',
            'Дата изменения договора' => '',
            'Код вида изменения договора' => '',
            'Код специального изменения договора' => '',
            'Описание иного изменения договора' => '',
            'Дата вступления изменения договора в силу' => '',
            'Дата планового прекращения действия изменения договора' => '',
            'Дата фактического прекращения действия изменения договора' => '',
            'Код причины прекращения действия изменения договора' => '',
            'Курс конверсии валюты долга' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 23. Сведения об изменении договора – C23_AMENDMENT';
    }
}