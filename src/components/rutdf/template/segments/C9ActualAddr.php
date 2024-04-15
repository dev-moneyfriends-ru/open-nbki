<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 9. Фактическое место жительства – C9_ACTUALADDR
 */
class C9ActualAddr extends BaseSegment
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
        $address = $this->template->sendData->getActualAddress();
        if($address === null ){
            return [
                $this->getSegmentName(),
                0,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
            ];
        }
       return [
           $this->getSegmentName(),
           0,
           $address->postal,
           $address->oksm,
           $address->otherCountry?$this->formatString($address->otherCountry):self::EMPTY_VALUE,
           $address->fias??self::EMPTY_VALUE,
           $address->okato,
           $address->otherLocation?$this->formatString($address->otherLocation):self::EMPTY_VALUE,
           $this->formatString($address->street),
           $this->formatString($address->houseNumber),
           $this->formatString($address->estate),
           str_replace(" ", "", $this->formatString($address->block)),
           $this->formatString($address->building),
           $this->formatString($address->apartment),
       ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак отличия фактического места жительства' => 'Код «1» – субъект проживает не по адресу, указанному в блоке 8; код «0» – обстоятельство кода «1» отсутствует. Если по показателю 9.1 указан код «0», иные показатели блока 9 Показателей КИ ФЛ не заполняются.',
            'Почтовый индекс' => '',
            'Код страны по ОКСМ' => 'Цифровой код страны согласно Общероссийскому классификатору стран мира (далее – ОКСМ, см. справочник A1). При отсутствии страны в ОКСМ указывается «999».',
            'Наименование иной страны' => 'Заполняется, если по показателю «Код страны по ОКСМ» указано «999»',
            'Номер адреса в ГАР' => 'Уникальный номер адреса объекта адресации в государственном адресном реестре (далее – ГАР). Указываются код населенного пункта, код улицы, код дома (владения), код корпуса и код номера квартиры.',
            'Код населенного пункта по ОКАТО' => 'Указывается согласно Общероссийскому классификатору объектов административно-территориального деления (далее – ОКАТО). При отсутствии в ОКАТО кода населенного пункта указывается «99 999 999 999».',
            'Иной населенный пункт' => 'Заполняется, если по показателю «Код населенного пункта по ОКАТО» указано «99 999 999 999». При отсутствии сведений о населенном пункте в документе, удостоверяющем личность, населенный пункт указывается на русском или английском языке (по выбору источника).',
            'Улица' => '',
            'Дом' => '',
            'Владение' => '',
            'Корпус' => '',
            'Строение' => '',
            'Квартира' => 'Номер квартиры, помещения или комнаты, в которой зарегистрировано лицо.',
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