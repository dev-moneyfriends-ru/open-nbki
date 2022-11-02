<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства – B16_FUNDDATE
 */
class B16FundDate extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B16_FUNDDATE";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
          $this->segmentName,
          $this->formatNewDate($this->template->offer->getTrade()->openedDt),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства' => 'В КИ заемщика или лизингополучателя указывается дата передачи ему суммы займа (кредита) или предмета лизинга, в КИ принципала по независимой гарантии или поручителя – соответственно дата выдачи гарантии или дата возникновения поручительства.
                По обязательству источника выдавать сумму займа (кредита) траншами или в пределах расходного лимита указывается дата передачи первого транша.
                ',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства – B16_FUNDDATE';
    }
}