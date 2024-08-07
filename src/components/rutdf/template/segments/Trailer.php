<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок закрытия документа TRAILER
 */
class Trailer extends BaseSegment
{
    /**
     * Количество групп блоков в файле.
     * @var int
     */
    public $cntGroups = 1;
    
    /**
     * Количество субъектов в файле.
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
    public function getTitle(): string
    {
        return "Блок закрытия документа TRAILER";
    }
    
    /**
     * @param int $cntGroups
     * @return Trailer
     */
    public function setCntGroups(int $cntGroups): Trailer
    {
        $this->cntGroups = $cntGroups;
        return $this;
    }
    
    public function getDescription(): string
    {
        return '';
    }
}