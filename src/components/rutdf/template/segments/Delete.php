<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Команда на удаление\изменение данных
 */
class Delete extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'DELETE';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName()
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
          'Команда на удаление\изменение данных' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'DELETE Команда';
    }
}