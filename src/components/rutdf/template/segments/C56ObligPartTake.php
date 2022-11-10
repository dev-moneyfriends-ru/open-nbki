<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\models\NbchSubjectInterface;

/**
 * Блок 56. Сведения об участии в обязательстве, по которому формируется КИ - C56_OBLIGPARTTAKE
 */
class C56ObligPartTake extends \mfteam\nbch\components\BaseSegment
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
            $this->flagIndicatorCode(),
            $this->template->offer->getTrade()->loanKindCode,
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
    
    private function flagIndicatorCode()
    {
        if($this->template->subject->getOfferRelationType() === NbchSubjectInterface::OFFER_RELATION_TYPE_GUARANTOR){
            return 2;
        }
        if($this->template->subject->getOfferRelationType() === NbchSubjectInterface::OFFER_RELATION_TYPE_BORROWER){
            if($this->template->offer->getTrade()->tradeTypeCode === 2){
                return 4;
            }
            return 1;
        }
        return 99;
    }
}