<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 21. Сведения об условиях платежей – C21_PAYMTCONDITION
 */
class C21PaymtCondition extends \mfteam\nbch\components\BaseSegment
{
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C21_PAYMTCONDITION';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $trade = $this->template->offer->getTrade();
        if ($trade->principalTermsAmt + $trade->interestTermsAmt < 0.001 || !empty($trade->completePerformDt)) {
            return [
                $this->segmentName,
                $this->formatCurrency(0),
                $this->emptyValue,
                $this->formatCurrency(0),
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
            $this->formatCurrency($trade->principalTermsAmt),
            $this->formatNewDate($trade->principalTermsAmtDt),
            $this->formatCurrency($trade->interestTermsAmt),
            $this->formatNewDate($trade->interestTermsAmtDt),
            $trade->termsFrequency,
            $this->emptyValue,
            $this->emptyValue,
            $this->emptyValue,
            $this->formatNewDate($trade->interestPaymentDueDate),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Сумма ближайшего следующего платежа по основному долгу' => 'По обязательству поручителя до наступления его ответственности указывается значение «0,00».
                    Если по этому показателю, а также по показателю 14.3 указано значение «0,00», иные показатели блока 14 не заполняются.
                    ',
            'Дата ближайшего следующего платежа по основному долгу' => '',
            'Сумма ближайшего следующего платежа по процентам' => 'По обязательству поручителя до наступления его ответственности указывается значение «0,00».',
            'Дата ближайшего следующего платежа по процентам' => '',
            'Код частоты платежей' => 'Заполняется по справочнику 2.5.
                    Частота платежей определяется количеством дней, в которые истекает срок для внесения платежа по основному долгу или процентам.
                    ',
            'Сумма минимального платежа по кредитной карте' => 'Заполняется, если КИ формируется по кредитной карте с условием о минимальном платеже.',
            'Дата начала беспроцентного периода' => 'Заполняется при наличии в договоре займа (кредита) с расходным лимитом беспроцентного периода.',
            'Дата окончания беспроцентного периода' => 'Заполняется при наличии в договоре займа (кредита) с расходным лимитом беспроцентного периода.',
            'Дата окончания срока уплаты процентов' => 'Определяется датой, в которую субъект должен полностью погасить требования по процентам на срочный долг.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 21. Сведения об условиях платежей – C21_PAYMTCONDITION';
    }
}