<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок закрытия документа TRAILER
 */
class Trailer extends \mfteam\nbch\components\BaseSegment
{
    /**
     * Количество субъектов в файле.
     * @var int
     */
    public $cntGroups = 1;
    
    /**
     * Количество групп блоков в файле.
     * @var int
     */
    public $cntSubjects = 1;
    
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
        return "TRAILER";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->cntSubjects,
            $this->cntGroups,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента',
            "Количество субъектов в файле.",
            "Количество групп блоков в файле.",
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "Блок закрытия документа TRAILER";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок закрытия документа TRAILER";
    }
}