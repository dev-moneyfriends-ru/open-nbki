<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством – B7_SETTLED
 */
class B7Setled extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B7_SETTLED";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            0,
            self::EMPTY_VALUE,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Название' => '',
            'Признак завершения расчетов с кредиторами' => '',
            'Дата завершения расчетов с кредиторами' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством – B7_SETTLED";
    }
    
    public function validate(): bool
    {
        return true;
    }
    
    public function getDescription(): string
    {
        return 'Блок передается только арбитражным управляющим';
    }
}