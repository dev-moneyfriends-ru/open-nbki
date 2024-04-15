<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 28. Сведения о возмещении принципалом гаранту выплаченной суммы – B28_GUARANTEEREPAY
 */
class B28GuaranteeRepay extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'B28_GUARANTEEREPAY';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->template->sendData->getAccountReplyRUTDF();
        if ($model->hasGuaranteeRepay === 0) {
            return [
                $this->getSegmentName(),
                0,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
            ];
        }
        return [
            $this->getSegmentName(),
            $model->hasGuaranteeRepay,
            $this->formatCurrency($model->guaranteeToRepay),
            $this->formatCurrency($model->guaranteeRepayAmt),
            $model->guaranteeRepayKeepCode,
            $this->formatDate($model->guaranteeDate),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак обязанности возместить выплаченную сумму' => 'Код «1» – принципал обязан возместить гаранту выплаченную им сумму; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 37 не заполняются.',
            'Сумма, подлежащая возмещению' => '',
            'Сумма, выплаченная принципалом' => '',
            'Признак соблюдения порядка возмещения' => 'Код «1» – принципал надлежаще возмещает гаранту выплаченную им сумму; код «0» – обстоятельство кода «1» отсутствует.',
            'Дата расчета' => 'Дата, по состоянию на которую рассчитаны значения показателей блока 37',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 28. Сведения о возмещении принципалом гаранту выплаченной суммы – B28_GUARANTEEREPAY';
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        return true;
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Блок формируется гарантом';
    }
}