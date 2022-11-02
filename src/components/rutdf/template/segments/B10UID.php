<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 10. Уникальный идентификатор договора (сделки) – B10_UID
 */
class B10UID extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B10_UID";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
          $this->segmentName,
            $this->template->offer->getTrade()->uuid . "-" . $this->getUuidControlSum($this->template->offer->getTrade()->uuid)
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'УИд сделки' => 'УИд сделки, по обязательствам из которой формируются блоки 11–30 ниже.
                            Если сделка совершена по обращению, УИд сделки должен соответствовать значению показателя 45.4 «УИд обращения» блока 45.
                            Если по одному обращению совершено несколько сделок, только УИд сделки, совершенной первой по времени, должен соответствовать УИд обращения.
                            '
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 10. Уникальный идентификатор договора (сделки) – B10_UID";
    }
}