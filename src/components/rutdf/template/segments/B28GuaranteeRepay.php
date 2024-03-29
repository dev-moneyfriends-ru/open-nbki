<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 28. Сведения о возмещении принципалом гаранту выплаченной суммы – B28_GUARANTEEREPAY
 * TODO реализовать
 */
class B28GuaranteeRepay extends \mfteam\nbch\components\BaseSegment
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
        return [
          $this->segmentName,
          0,
          $this->emptyValue,
          $this->emptyValue,
          $this->emptyValue,
          $this->emptyValue,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак обязанности возместить выплаченную сумму' => '',
            'Сумма, подлежащая возмещению' => '',
            'Сумма, выплаченная принципалом' => '',
            'Признак соблюдения порядка возмещения' => '',
            'Дата расчета' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 28. Сведения о возмещении принципалом гаранту выплаченной суммы – B28_GUARANTEEREPAY';
    }
}