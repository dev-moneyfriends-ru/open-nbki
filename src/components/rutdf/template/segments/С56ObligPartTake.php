<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 56. Сведения об участии в обязательстве, по которому формируется КИ - C56_OBLIGPARTTAKE
 */
class С56ObligPartTake extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C56_OBLIGPARTTAKE';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $trade = $this->template->offer->getTrade();
        return [
            $this->segmentName,
            1,
            99,
            $trade->uuid . "-" . $this->getUuidControlSum($trade->uuid),
            $this->formatNewDate($trade->fundDt),
            $this->daysPastDue() > 90?1:0,
            empty($trade->completePerformDt)?0:1
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Код вида участия в сделке' => '',
            'Код вида займа (кредита)' => '',
            'УИд сделки' => '',
            'Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства' => '',
            'Признак просрочки должника более 90 дней' => '',
            'Признак прекращения обязательства' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 56. Сведения об участии в обязательстве, по которому формируется КИ - C56_OBLIGPARTTAKE';
    }
}