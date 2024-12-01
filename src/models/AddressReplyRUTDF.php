<?php

namespace mfteam\nbch\models;

/**
 * Адрес
 */
class AddressReplyRUTDF extends BaseAddressReply
{
    /**
     * Дом
     * @var string $houseNumber
     */
    public $houseNumber = null;
    
    /**
     * Улица
     * @var string $street
     */
    public $street = null;
    
    /**
     * Корпус
     * @var string $block
     */
    public $block = null;
    
    /**
     * Строение
     * @var string $building
     */
    public $building = null;
    
    /**
     * Квартира
     * Номер квартиры, помещения или комнаты, в которой зарегистрировано лицо.
     * @var string $apartment
     */
    public $apartment = null;
    
    /**
     * Почтовый индекс
     * @var string $postal
     */
    public $postal = null;

    
    /**
     * Вид адреса ФЛ/ИП @see AddressReplyRUTDF::addressTypeList()
     * Для ЮЛ не заполняется
     * @var string $addressType
     */
    public $addressType = null;
    
    /**
     * Дата регистрации
     * Дата регистрации субъекта по соответствующему адресу.
     * @var string $addrSinceDt
     */
    public $addrSinceDt;
    
    /**
     * Код адреса регистрации. @see AddressReplyRUTDF::regTypeList()
     * @var string $regType
     */
    public $regType = '-';
    
    /**
     * Наименование иной страны
     * Заполняется, если по показателю «Код страны по ОКСМ» указано «999»
     * @var string|null $otherCountry
     */
    public $otherCountry = null;
    
    /**
     * Номер адреса в ГАР.
     * Уникальный номер адреса объекта адресации в государственном адресном реестре, являющемся государственным информационным ресурсом,
     * содержащим сведения об адресах, в соответствии с частью 1 статьи 4 Федерального закона от 28 декабря 2013 года №443-ФЗ
     * «О федеральной информационной адресной системе и о внесении изменений в Федеральный закон «Об общих принципах организации местного самоуправления в Российской Федерации»
     * (Собрание законодательства Российской Федерации, 2013, №52, ст. 7008; 2019, №30, ст. 4129) (далее – ГАР).
     * Указываются код населенного пункта, код улицы, код дома (владения), код корпуса и код номера квартиры.
     * @var string $fias
     */
    public $fias = null;
    
    /**
     * Код населенного пункта по ОКАТО.
     * Указывается согласно Общероссийскому классификатору объектов административно-территориального деления (далее – ОКАТО).
     * При отсутствии в ОКАТО кода населенного пункта указывается «99 999 999 999».
     * @var string $okato
     */
    public $okato = null;
    
    /**
     * Иной населенный пункт
     * Заполняется, если по показателю «Код населенного пункта по ОКАТО» указано «99 999 999 999».
     * При отсутствии сведений о населенном пункте в документе, удостоверяющем личность, населенный пункт указывается на русском или английском языке (по выбору источника).
     * @var string $otherLocation
     */
    public $otherLocation = null;
    
    /**
     * Владение
     * @var string $estate
     */
    public $estate = null;
    
    /**
     * Наименование регистрирующего органа
     * @var string $regAuthority
     */
    public $regAuthority = null;
    
    /**
     * Код подразделения, осуществившего регистрацию.
     * Заполняется только для паспорта гражданина Российской Федерации.
     * Сведения указываются согласно отметке о регистрации субъекта.
     * @var string $divCode
     */
    public $divCode = null;
    
    /**
     * Номер телефона
     * Контактный номер телефона.
     * Заполняется, если субъект предоставил данные источнику.
     * @var string $phone
     */
    public $phone = null;
    
    /**
     * Комментарий к номеру телефона
     * Пояснительные сведения о номере телефона
     * Заполняется, если субъект предоставил данные источнику.
     * @var string $phoneComment
     */
    public $phoneComment = null;
    
    /**
     * Адрес электронной почты
     * Заполняется, если субъект предоставил данные источнику.
     * @var string $email
     */
    public $email = null;
    
    /**
     * Код страны по ОКСМ
     * Цифровой код страны согласно Общероссийскому классификатору стран мира
     * При отсутствии страны в ОКСМ указывается «999».
     * @var string $oksm
     */
    public $oksm = null;

    /**
     * Признак иностранного юридического лица
     * код «1» – в случае если субъект является юридическим лицом, зарегистрированным в
     * соответствии с законодательством иностранного государства;
     * код «0» – в случае если обстоятельство кода «1» отсутствует.
     * @see IndicatorType
     * @var int|null
     */
    public $foreignerFact = null;
    
    /**
     * Виды адреса регистрации
     * @return string[]
     */
    public static function regTypeList(): array
    {
        return [
            '1' => 'В документе указан адрес регистрации по месту жительства',
            '2' => 'В документе указан адрес регистрации по месту пребывания или адрес регистрации по месту жительства и адрес регистрации по месту пребывания',
            '3' => 'В документе не указан адрес регистрации',
            '-' => 'Иное',
        ];
    }
    
    public static function addressTypeList(): array
    {
        return [
            '1' => 'Регистрация физического лица по месту жительства или пребывания',
            '2' => 'Фактическое место жительства',
        ];
    }
    
    /**
     * @return string
     */
    public function getOksm(): string
    {
        return $this->oksm;
    }
    
    /**
     * @param string $oksm
     */
    public function setOksm(string $oksm): void
    {
        $this->oksm = $oksm;
    }
    
    /**
     * @return string
     */
    public function getFias(): string
    {
        return $this->fias;
    }
    
    /**
     * @param string $fias
     */
    public function setFias(string $fias): void
    {
        $this->fias = $fias;
    }
    
    /**
     * @return string
     */
    public function getOkato(): string
    {
        return $this->okato;
    }
    
    /**
     * @param string $okato
     */
    public function setOkato(string $okato): void
    {
        $this->okato = $okato;
    }
}
