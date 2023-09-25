<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 9. Фактическое место жительства – C9_ACTUALADDR
 * TODO Реализовать заполнение
 */
class C9ActualAddr extends \mfteam\nbch\components\BaseSegment
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
        return "C9_ACTUALADDR";
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
            $this->emptyValue,
            $this->emptyValue,
            $this->emptyValue,
            $this->emptyValue,
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
            'Признак отличия фактического места жительства' => '',
            'Почтовый индекс' => '',
            'Код страны по ОКСМ' => '',
            'Наименование иной страны' => '',
            'Номер адреса в ГАР' => '',
            'Код населенного пункта по ОКАТО' => '',
            'Иной населенный пункт' => '',
            'Улица' => '',
            'Дом' => '',
            'Владение' => '',
            'Корпус' => '',
            'Строение' => '',
            'Квартира' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "(допустим 1 на группу блоков)";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 9. Фактическое место жительства – C9_ACTUALADDR";
    }
}