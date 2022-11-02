<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя – C11_ENTREP
 */
class C11Entrep extends \mfteam\nbch\components\BaseSegment
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
        return "C11_ENTREP";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        if (!$this->template->subject->isIp()) {
            return [
                $this->segmentName,
                0,
                $this->emptyValue,
                $this->emptyValue,
            ];
        }
        return [
            $this->segmentName,
            1,
            $this->template->subject->getOgrn(),
            $this->formatNewDate($this->template->subject->getRegDate()),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента',
            'Признак индивидуального предпринимателя',
            'Регистрационный номер',
            'Дата регистрации индивидуального предпринимателя',
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
        return "Блок 11. Государственная регистрация в качестве индивидуального предпринимателя – C11_ENTREP";
    }
}