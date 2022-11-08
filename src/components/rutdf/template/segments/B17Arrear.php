<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 17. Сведения о задолженности – B17_ARREAR
 */
class B17Arrear extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B17_ARREAR";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $trade = $this->template->offer->getTrade();
        if ($trade->currentAmtOutstanding < 0.001) {
            return [
                $this->segmentName,
                0,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
            ];
        }
        return [
            $this->segmentName,
            1,
            $this->formatCurrency($trade->startAmtOutstanding),
            1,
            $this->formatCurrency($trade->currentAmtOutstanding),
            $this->formatCurrency($trade->currentPrincipalOutstanding),
            $this->formatCurrency($trade->currentIntOutstanding),
            $this->formatCurrency($trade->currentOtherAmtOutstanding),
            $this->formatNewDate($trade->reportingDt)
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак наличия задолженности' => '',
            'Сумма задолженности на дату передачи финансирования субъекту или возникновения обеспечения исполнения обязательства' => '',
            'Признак расчета по последнему платежу' => 'Код события, на момент наступления которого рассчитана сумма задолженности:
                    код «1» – субъект внес платеж либо наступил срок для внесения платежа по срочному долгу;
                    код «0» – прошло 30 календарных дней с даты последнего расчета суммы задолженности по показателю 17.8 «Дата расчета».
                    ',
            'Сумма задолженности' => '',
            'Сумма задолженности по основному долгу' => '',
            'Сумма задолженности по процентам' => '',
            'Сумма задолженности по иным требованиям' => '',
            'Дата расчета' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 17. Сведения о задолженности – B17_ARREAR';
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'В блоке указываются сведения обо всех имеющихся (непогашенных) денежных требованиях к субъекту согласно условиям сделки.
        Размер требований определяется исходя из того, что вследствие внесения платежа первым погашается требование, которое возникло раньше (метод ФИФО).
        Для договора лизинга указываются требования по внесению в том числе лизинговых платежей, пеней и штрафов';
    }
}