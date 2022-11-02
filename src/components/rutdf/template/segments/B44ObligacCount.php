<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 44. Сведения об учете обязательства – B44_OBLIGACCOUNT
 */
class B44ObligacCount extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B44_OBLIGACCOUNT";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            0
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
        return "Блок 44. Сведения об учете обязательства – B44_OBLIGACCOUNT";
    }
}