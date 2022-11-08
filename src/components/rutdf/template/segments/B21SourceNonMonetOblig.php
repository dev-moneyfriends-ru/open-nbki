<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 21. Сведения о неденежном обязательстве источника - B21_SOURCENONMONETOBLIG
 */
class B21SourceNonMonetOblig extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B21_SOURCENONMONETOBLIG";
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
            $this->emptyValue
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Предмет обязательства' => 'Предмет обязательства источника согласно условиям договора.
                Во избежание задвоения записей, при обновлении данных необходимо указывать значение,
                в точности совпадающее с ранее направленным.
                ',
            'Код предоставляемого имущества' => 'Заполняется по справочнику 4.1.',
            'Объект предоставления' => 'Имущество, которое источник должен передать субъекту.',
            'Дата передачи имущества субъекту' => 'Дата передачи имущества субъекту или возникновения неденежного поручительства.'
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 21. Сведения о неденежном обязательстве источника - B21_SOURCENONMONETOBLIG';
    }
    
    public function getDescription(): string
    {
        return 'Блок формируется, если по показателю 11.8 «Признак денежного обязательства источника» блока 11 указан код «0».
                Сведения указываются согласно условиям сделки.
                Блок не формируется, если по показателю 17.1 «Признак наличия задолженности» указан код «0».
                ';
    }
}