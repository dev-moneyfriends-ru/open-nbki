<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Address information is delivered via B2B, Bulk, and Web (Screen/PDF) channels.
 * This information maps to the TUTDF Address (AD) segment.
 * @package common\modules\nbki\models
 *
 * @property-read null|string $addressTypeText
 */
class Address extends BaseItem
{
    /**
     * Адрес регистрации (только для физлиц)
     */
    public const TYPE_PERSON_LEGAL = 1;
    /**
     * Адрес фактического местожительства (только для физлиц)
     */
    public const TYPE_PERSON_ACTUAL = 2;
    /**
     * Юридический адрес (только для юрлиц)
     */
    public const TYPE_BUSINESS_LEGAL = 3;
    /**
     * Фактический адрес (только для юрлиц)
     */
    public const TYPE_BUSINESS_ACTUAL = 4;
    /**
     *The type code of the address. Possible values include:
     * 1 = Registered address as appears in the Internal Russian Passport
     * 2 = Residence (Home) address
     * 3 = Legal address (Business Only)
     * 4 = Actual address (Business Only)
     * @var int
     */
    public $addressType;
    
    /**
     * Дата регистрации
     * @var string
     */
    public $addrSinceDt;
    
    /**
     * номер квартиры
     * @var string
     */
    public $apartment;
    
    /**
     * Номер блока
     * @var string
     */
    public $block;
    
    /**
     * Строение
     * @var string
     */
    public $building;
    
    /**
     * Содержит город или населённый пункт.
     * @var string
     */
    public $city;
    
    /**
     * Код страны
     * @var string
     */
    public $countryCode = 'RU';
    
    /**
     * Страна
     * @var string
     */
    public $countryCodeText;
    
    /**
     * район
     * @var string
     */
    public $district;
    
    /**
     * Номер дома
     * @var string
     */
    public $houseNumber;
    
    /**
     * Почтовый индекс
     * @var string
     */
    public $postal;
    
    /**
     * Код региона
     * @var string
     */
    public $prov;
    
    /**
     * Название региона
     * @var string
     */
    public $provText;
    
    /**
     * Статус адреса.
     * @var string
     */
    public $resStat;
    
    /**
     * Название статуса
     * @var string
     */
    public $resStatText;
    
    /**
     * Улица
     * @var string
     */
    public $street;
    
    /**
     * Код типа улицы
     * @var string
     */
    public $streetType;
    
    /**
     * Тип улицы
     * @var string
     */
    public $streetTypeText;
    
    /**
     * @var string
     */
    public $addressString;
    
    /**
     * Код страны по ОКСМ
     * @var string
     */
    public $oksm;
    
    /**
     * Код населенного пункта по ОКАТО
     * @var string
     */
    public $okato;
    
    public function rules()
    {
        return array_merge(
            parent::rules(),
            [
                [
                    [
                        'addressType',
                        'city',
                        'street',
                        'oksm'
                    ]
                    , 'required',
                ],
                [['addressType'], 'in', 'range' => array_keys(self::typeList())],
                [['resStat'], 'in', 'range' => array_keys(self::statusList())],
                [
                    [
                        'countryCode',
                        'countryCodeText',
                        'district',
                        'houseNumber',
                        'postal',
                        'prov',
                        'provText',
                        'resStatText',
                        'street',
                        'streetType',
                    ],
                    'string',
                ],
                [
                    [
                        'apartment',
                    ],
                    'string',
                    'max' => 40,
                ],
                [
                    [
                        'block',
                    ],
                    'string',
                    'max' => 10,
                ],
                [
                    [
                        'building',
                    ],
                    'string',
                    'max' => 20,
                ],
                [
                    [
                        'city',
                    ],
                    'string',
                    'max' => 80,
                ],
                [
                    [
                        'addrSinceDt',
                    ],
                    'date',
                    'format' => 'yyyy-MM-dd',
                ],
            ]
        );
    }
    
    public function attributeLabels()
    {
        return array_merge(
            parent::attributeLabels(),
            [
                'addrSinceDt' => 'Дата регистрации',
                'apartment' => 'Квартира',
                'block' => 'Блок',
                'building' => 'Строение',
                'city' => 'Город',
                'countryCode' => 'Код страны',
                'countryCodeText' => 'Страна',
                'district' => 'Район',
                'houseNumber' => 'Дом',
                'postal' => 'Почтовый индекс',
                'prov' => 'Код региона',
                'provText' => 'Регион',
                'street' => 'Улица',
                'streetType' => 'Код типа улицы',
                'streetTypeText' => 'Тип улицы',
            ]
        );
    }
    
    /**
     * @return string[]
     */
    public static function typeList()
    {
        return [
            self::TYPE_PERSON_LEGAL => 'Адрес регистрации (только для физлиц)',
            self::TYPE_PERSON_ACTUAL => 'Адрес фактического местожительства (только для физлиц)',
            self::TYPE_BUSINESS_LEGAL => 'Юридический адрес (только для юрлиц)',
            self::TYPE_BUSINESS_ACTUAL => 'Фактический адрес (только для юрлиц)',
        ];
    }
    
    public static function statusList()
    {
        return [
            1 => 'Собственность',
            2 => 'Аренда дома/квартиры',
            3 => 'Предоставлено/Оплачено государством/Муниципальная собственность',
            4 => 'Предоставлено/Оплачено третьей стороной',
            5 => 'Другое',
        ];
    }
    
    public static function streetTypeList()
    {
        return [
            '01' => 'аллея',
            '02' => 'б-р',
            '03' => 'въезд',
            '04' => 'дор',
            '05' => 'заезд',
            '06' => 'казарма',
            '07' => 'кв-л',
            '08' => 'км',
            '09' => 'кольцо',
            '10' => 'линия',
            '11' => 'м',
            '12' => 'мкр',
            '13' => 'наб',
            '14' => 'парк',
            '15' => 'пер',
            '16' => 'переезд',
            '17' => 'пл',
            '18' => 'пл-ка',
            '19' => 'пр-кт',
            '20' => 'проезд',
            '21' => 'просек',
            '22' => 'проселок',
            '23' => 'проулок',
            '24' => 'стр',
            '25' => 'тер',
            '26' => 'тракт',
            '27' => 'туп',
            '28' => 'ул',
            '29' => 'уч-к',
            '30' => 'ш',
        ];
    }
    
    /**
     * @return string|null
     * @throws \Exception
     */
    public function getAddressTypeText(): ?string
    {
        return ArrayHelper::getValue(self::typeList(), $this->addressType);
    }
}