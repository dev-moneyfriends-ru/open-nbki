<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 37. Сведения о возмещении принципалом гаранту выплаченной суммы – C37_GUARANTEEREPAY
 */
class C37GuaranteeRepay extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C37_GUARANTEEREPAY';
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
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 37. Сведения о возмещении принципалом гаранту выплаченной суммы – C37_GUARANTEEREPAY';
    }
}