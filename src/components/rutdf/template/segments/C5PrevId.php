<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 5. Документ, ранее удостоверявший личность – C5_PREVID
 */
class C5PrevId extends \mfteam\nbch\components\BaseSegment
{
    
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
        return "C5_PREVID";
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
            $this->emptyValue,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента',
            'Признак наличия документа',
            "Код страны гражданства по ОКСМ",
            "Наименование иной страны",
            "Код документа",
            "Наименование иного документа",
            "Серия документа",
            "Номер документа",
            "Дата выдачи документа",
            "Кем выдан документ",
            "Код подразделения",
            "Дата окончания срока действия документа",
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "Сведения о документе, удостоверявшем личность субъекта до выдачи документа, сведения о котором указаны в блоке 4.";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
       return "Блок 5. Документ, ранее удостоверявший личность – C5_PREVID";
    }
}