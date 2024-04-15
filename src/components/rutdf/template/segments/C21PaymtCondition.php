<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 21. Сведения об условиях платежей – C21_PAYMTCONDITION
 */
class C21PaymtCondition extends BaseSegment
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
        $model = $this->template->sendData->getAccountReplyRUTDF()->getPaymtCondition();
        if($model === null){
            throw new \LogicException();
        }
        return [
            $this->getSegmentName(),
            $this->formatCurrency($model->principalTermsAmt),
            $this->formatDate($model->principalTermsAmtDt),
            $this->formatCurrency($model->interestTermsAmt),
            $this->formatDate($model->interestTermsAmtDt),
            $model->termsFrequency,
            $this->formatCurrency($model->minPaymt),
            $this->formatDate($model->graceStartDt),
            $this->formatDate($model->graceEndDt),
            $this->formatDate($model->interestPaymentDueDate),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Сумма ближайшего следующего платежа по основному долгу' => 'По обязательству поручителя до наступления его ответственности указывается значение «0,00» Если по этому показателю, а также по показателю 21.3 указано значение «0,00», иные показатели блока 21 не заполняются.',
            'Дата ближайшего следующего платежа по основному долгу' => '',
            'Сумма ближайшего следующего платежа по процентам' => 'По обязательству поручителя до наступления его ответственности указывается значение «0,00».',
            'Дата ближайшего следующего платежа по процентам' => '',
            'Код частоты платежей' => 'Заполняется по справочнику 2.5. Частота платежей определяется в целом по сделке количеством дней, в которые истекает срок для внесения платежа по основному долгу или процентам.',
            'Сумма минимального платежа по кредитной карте' => 'Заполняется, если КИ формируется по кредитной карте с условием о минимальном платеже.',
            'Дата начала беспроцентного периода' => 'Заполняется при наличии в договоре займа (кредита) с расходным лимитом беспроцентного периода.',
            'Дата окончания беспроцентного периода' => 'Заполняются при наличии в договоре займа (кредита) с расходным лимитом беспроцентного периода. Если на дату расчета действует беспроцентный период, то указывается плановая дата окончания беспроцентного периода.',
            'Дата окончания срока уплаты процентов' => 'Определяется последней датой, в которую субъект должен полностью погасить требования по процентам на срочный долг, согласно условиям сделки.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 21. Сведения об условиях платежей – C21_PAYMTCONDITION';
    }
    /**
     * @inheritdoc
     */
    public function validate(): bool
    {
        return true;
    }
    
    /**
     * @inheritdoc
     */
    public function getDescription(): string
    {
        return '(допустим 1 на группу блоков)';
    }
}