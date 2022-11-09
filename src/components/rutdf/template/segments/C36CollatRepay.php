<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения – C36_COLLATREPAY
 */
class C36CollatRepay extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C36_COLLATREPAY';
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
            'Признак погашения требований за счет обеспечения' => '',
            'Код использованного обеспечения' => '',
            'Дата погашения требований за счет обеспечения' => '',
            'Сумма требований, погашенных за счет обеспечения' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения – C36_COLLATREPAY';
    }
}