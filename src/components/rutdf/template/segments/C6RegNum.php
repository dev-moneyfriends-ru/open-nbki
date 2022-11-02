<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 6. Номер налогоплательщика и регистрационный номер – C6_REGNUM
 */
class C6RegNum extends \mfteam\nbch\components\BaseSegment
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
       return "C6_REGNUM";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            1,
            $this->template->subject->getInn(),
            $this->template->subject->getOgrn(),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Код номера налогоплательщика',
            'Номер налогоплательщика',
            'Регистрационный номер',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "При наличии нескольких номеров налогоплательщика показатели «Код номера налогоплательщика» и «Номер налогоплательщика» формируются для каждого номера налогоплательщика.";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 6. Номер налогоплательщика и регистрационный номер – C6_REGNUM";
    }
}