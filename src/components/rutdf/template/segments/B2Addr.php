<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация – B2_ADDR
 */
class B2Addr extends \mfteam\nbch\components\BaseSegment
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
        return 'B2_ADDR';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $address = $this->template->subject->getLegalAddress();
        return [
          $this->segmentName,
            $address->oksm,
            $this->emptyValue,
            $this->emptyValue,
            $address->okato,
            $this->emptyValue,
            mb_strtoupper($address->street),
            mb_strtoupper($address->houseNumber),
            $this->emptyValue,
            str_replace(" ", "", $this->formatString($address->block)),
            mb_strtoupper($address->building),
            mb_strtoupper($address->apartment),
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
          'Название' => '',
          'Код страны по ОКСМ' => 'Цифровой код страны согласно Общероссийскому классификатору стран мира (далее – ОКСМ, см. справочник A1).
                                При отсутствии страны в ОКСМ указывается «999».
                                ',
            'Наименование иной страны' => '',
            'Номер адреса в ФИАС' => 'Уникальный номер адреса объекта адресации в государственном адресном реестре федеральной информационной
                                адресной системы (далее – ФИАС).
                                Указываются код населенного пункта, код улицы, код дома (владения), код корпуса и код номера квартиры
                                ',
            'Код населенного пункта по ОКАТО' => 'Указывается согласно Общероссийскому классификатору объектов административно-территориального деления (далее – ОКАТО).
                                При отсутствии в ОКАТО кода населенного пункта указывается «99 999 999 999».
                                ',
            'Иной населенный пункт' => 'Заполняется, если по показателю «Код населенного пункта по ОКАТО» указано «99 999 999 999».
                                При отсутствии сведений о населенном пункте в государственном реестре (ЕГРЮЛ или иной реестр) населенный пункт указывается на русском или английском языке (по выбору источника).
                                ',
            'Улица' => '',
            'Дом' => '',
            'Владение' => '',
            'Корпус' => '',
            'Строение' => '',
            'Помещение (офис)' => 'Номер офиса, помещения или комнаты, в которой зарегистрировано лицо.',
            'Номер телефона' => 'Контактный номер телефона.
                                Заполняется, если субъект предоставил данные источнику.
                                ',
            'Комментарий к номеру телефона' => 'Пояснительные сведения о номере телефона
                                Заполняется, если субъект предоставил данные источнику.
                                ',
            'Адрес электронной почты' => 'Заполняется, если субъект предоставил данные источнику.'
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
        return 'Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация – B2_ADDR';
    }
}