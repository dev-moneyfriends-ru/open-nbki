<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 7. СНИЛС – C7_SNILS
 */
class C7Snils extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if (empty($this->template->subject->getSnils())) {
            $this->errors[] = "Отсутствует СНИЛС";
        }
        return $this->isEmptyErrors;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "C7_SNILS";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            $this->template->subject->getSnils(),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            "СНИЛС" => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 7. СНИЛС – C7_SNILS";
    }
}