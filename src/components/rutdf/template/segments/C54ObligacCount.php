<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 54. Сведения об учете обязательства – C54_OBLIGACCOUNT
 */
class C54ObligacCount extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C54_OBLIGACCOUNT';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            $this->template->offer->getTrade()->obligAccountCode
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак учета обязательства' => ''
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 54. Сведения об учете обязательства – C54_OBLIGACCOUNT';
    }
}