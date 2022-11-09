<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 38. Сведения о прекращении обязательства – C38_OBLIGTERMINATION
 */
class C38ObligTermination extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C38_OBLIGTERMINATION';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            $this->template->offer->getTrade()->accountRating,
            $this->formatNewDate($this->template->offer->getTrade()->completePerformDt),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Код основания прекращения обязательства' => 'Заполняется по справочнику 3.8.',
            'Дата фактического прекращения обязательства' => 'Дата, в которую прекратились взаимные обязательства субъекта и источника.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 38. Сведения о прекращении обязательства – C38_OBLIGTERMINATION';
    }
}