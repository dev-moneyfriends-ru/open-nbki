<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\BaseRequestTemplate;
use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\models\rutdf\NbchEvents;

/**
 * Блок 0. Заголовок группы блоков – 0_GROUPHEADER
 * @property-read RutdfTemplate $template
 */
class GroupHeader extends \mfteam\nbch\components\BaseSegment
{
    /**
     * Порядковый номер группы в документе (файле)
     * @var int
     */
    public $number = 1;
    
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
        return "0_GROUPHEADER";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->number,
            $this->template->getEventId(),
            $this->getOperationCode(),
            $this->emptyValue,
            $this->template->getOffer()->getTrade()->reportingDt
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента',
            "Порядковый номер группы в документе (файле)",
            "Номер события, вследствие которого сформирована данная группа блоков",
            "Код операции, в рамках которой сформирована группа блоков показателей",
            "Комментарий с пояснением причины представления группы блоков показателей.",
            "Дата события, вследствие которого сформирована данная группа блоков",
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
        return "Блок 0. Заголовок группы блоков – 0_GROUPHEADER";
    }
    
    private function getOperationCode()
    {
        if (in_array(
            $this->template->getEventId(),
            [NbchEvents::EVENT_1_1, NbchEvents::EVENT_1_4, NbchEvents::EVENT_1_4_1]
        )) {
            return "A";
        }
        return "B";
    }
}