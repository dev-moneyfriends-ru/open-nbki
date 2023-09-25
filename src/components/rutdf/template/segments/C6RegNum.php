<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 6. Номер налогоплательщика, регистрационный номер и признак специального налогового режима  – C6_REGNUM
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
            0,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Код номера налогоплательщика' => '',
            'Номер налогоплательщика' => '',
            'Регистрационный номер' => '',
            'Признак специального налогового режима' => 'код «1» – в случае если субъект применяет специальный налоговый режим «Налог на профессиональный доход» в соответствии с Федеральным законом от 27 ноября 2018 года № 422-ФЗ «О проведении эксперимента по установлению специального налогового режима «Налог на профессиональный доход» (Собрание законодательства Российской Федерации, 2018, № 49, ст. 7494; 2022, № 27, ст. 4607); код «0» – в случае если обстоятельство кода «1» отсутствует.',
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
        return "Блок 6. Номер налогоплательщика, регистрационный номер и признак специального налогового режима – C6_REGNUM";
    }
}