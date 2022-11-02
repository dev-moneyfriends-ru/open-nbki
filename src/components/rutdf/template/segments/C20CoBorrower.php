<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 20. Сведения о солидарных должниках – C20_COBORROWER
 */
class C20CoBorrower extends \mfteam\nbch\components\BaseSegment
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
        return "C20_COBORROWER";
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
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Название' => '',
            'Признак наличия солидарных должников' => 'Код «1» – в обязательстве участвуют солидарные должники;
            код «0» – обстоятельство кода «1» отсутствует.
            ',
            'Число солидарных должников' => 'Не заполняется, если по показателю 20.1 «Признак наличия солидарных должников» указан код «0».',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return '';
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 20. Сведения о солидарных должниках – C20_COBORROWER';
    }
}