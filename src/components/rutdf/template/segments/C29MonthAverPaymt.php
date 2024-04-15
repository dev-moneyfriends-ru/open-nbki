<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 29. Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета – C29_MONTHAVERPAYMT
 */
class C29MonthAverPaymt extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C29_MONTHAVERPAYMT';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->template->sendData->getAccountReplyRUTDF()->getMonthAverPaymt();
        if($model === null){
            throw new \LogicException();
        }
        return [
            $this->getSegmentName(),
            $this->formatCurrency($model->averPaymtAmt),
            $this->formatDate($model->calcDate),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Величина среднемесячного платежа' => '',
            'Дата расчета величины среднемесячного платежа' => 'Дата, по состоянию на которую источник выполнил расчет.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 29. Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета – C29_MONTHAVERPAYMT';
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Сведения о величине среднемесячного платежа, рассчитанной в порядке, установленном приложением 1 к Положению Банка России «О порядке формирования кредитной истории». Если величина среднемесячного платежа не рассчитывается, блок не формируется и не передается';
    }
    
    public function validate(): bool
    {
        return true;
    }
}