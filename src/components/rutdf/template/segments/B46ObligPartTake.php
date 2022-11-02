<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 46. Сведения об участии в обязательстве, по которому формируется КИ – B46_OBLIGPARTTAKE
 */
class B46ObligPartTake extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B46_OBLIGPARTTAKE";
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
            $this->formatDate($trade->openedDt),
            0,
            0
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
        return "Блок 46. Сведения об участии в обязательстве, по которому формируется КИ – B46_OBLIGPARTTAKE";
    }
}