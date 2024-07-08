<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 22. Полная стоимость потребительского кредита (займа) – C22_OVERALLVAL
 */
class C22OverallVal extends BaseSegment
{
    
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
    public function getSegmentName(): string
    {
        return 'C22_OVERALLVAL';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->template->sendData->getAccountReplyRUTDF()->getOverallVal();
        if($model === null && $this->template->sendData->getAccountReplyRUTDF()->getTrade()->isConsumerLoan){
            throw new \LogicException();
        }
        if($model === null){
            return [];
        }
        return [
          $this->getSegmentName(),
          $this->formatCurrency($model->creditTotalAmt),
          $this->formatCurrency($model->creditTotalMonetaryAmt),
          $this->formatDate($model->creditTotalAmtDate),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Полная стоимость кредита (займа) в процентах годовых' => 'Заполняется согласно договору.',
            'Полная стоимость кредита (займа) в денежном выражении' => 'Заполняется согласно договору.',
            'Дата расчета полной стоимости кредита (займа)' => 'Если даты расчета полной стоимости потребительского кредита (займа) в процентах годовых и в денежном выражении не совпадают, то указывается наиболее поздняя из них.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Блок формируется и передается только для потребительского кредита (займа).';
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 22. Полная стоимость потребительского кредита (займа) – C22_OVERALLVAL';
    }
}