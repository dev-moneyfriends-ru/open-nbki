<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 22. Сведения о неденежном обязательстве субъекта – B22_SUBJECTNONMONETOBLIG
 */
class B22SubjectNonMonetOblig extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'B22_SUBJECTNONMONETOBLIG';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
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
            'Наименование сегмента' => '',
            'Предмет обязательства' => 'Предмет обязательства субъекта согласно условиям договора.',
            'Объект предоставления' => 'Имущество, которое субъект должен передать источнику.',
            'Порядок исполнения обязательства' => 'Заполняется согласно условиям договора.',
            'Признак ненадлежащего исполнения обязательства' => 'Код «1» – субъект не исполнил свое обязательство или его часть;
                код «0» – субъект надлежаще исполняет свое обязательство.
                ',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 22. Сведения о неденежном обязательстве субъекта – B22_SUBJECTNONMONETOBLIG';
    }
    
    public function getDescription(): string
    {
        return 'Блок формируется, если по показателю 11.9 «Признак денежного обязательства субъекта» блока 11 указан код «0». Сведения указываются согласно условиям сделки.';
    }
}