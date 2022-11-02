<?php

namespace mfteam\nbch\components\rutdf\template\segments;

class C3Birth extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if (empty($this->template->subject->getPerson()->oksm)) {
            $this->errors[] = 'Отсутствует Код страны по ОКСМ';
        }
        if (empty($this->template->subject->getPerson()->birthDt)) {
            $this->errors[] = 'Отсутствует Дата рождения';
        }
        if (empty($this->template->subject->getPerson()->placeOfBirth)) {
            $this->errors[] = 'Отсутствует Место рождения';
        }
        return $this->isEmptyErrors;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "C3_BIRTH";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            $this->formatNewDate($this->template->subject->getPerson()->birthDt),
            $this->template->subject->getPerson()->oksm,
            $this->template->subject->getPerson()->placeOfBirth,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            "Дата рождения",
            "Код страны по ОКСМ",
            "Место рождения"
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "(допустим 1 на группу блоков)";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "";
    }
}