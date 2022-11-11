<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 25. Сведения о задолженности – C25_ARREAR
 */
class C25Arrear extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C25_ARREAR';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $trade = $this->template->offer->getTrade();
        if ($trade->currentAmtOutstanding < 0.001 || !empty($trade->completePerformDt)) {
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
            $this->formatNewDate($trade->reportingDt),
            0,
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
            'Признак неподтвержденного льготного периода' => 'Код «1» – льготный период для заемщика признан неустановленным согласно
                части 29 статьи 6 Федерального закона от 3 апреля 2020 года № 106-ФЗ «О внесении изменений в Федеральный закон
                «О Центральном банке Российской Федерации (Банке России)» и отдельные законодательные акты Российской Федерации
                в части особенностей изменения условий кредитного договора, договора займа» (Собрание законодательства Российской Федерации,
                2020, № 14, ст. 2036) (далее – Федеральный закон от 3 апреля 2020 года № 106-ФЗ);
                код «0» – обстоятельство кода «1» отсутствует.
                ',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 25. Сведения о задолженности – C25_ARREAR';
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