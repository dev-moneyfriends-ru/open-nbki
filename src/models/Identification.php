<?php


namespace mfteam\nbch\models;


/**
 * Identification information is delivered via B2B, Bulk, and Web (Screen/PDF) channels.
 * This information maps to the TUTDF Identification (ID) segment.
 * Class Identification
 * @package common\modules\nbki\models
 */
class Identification extends BaseItem
{
    public const TYPE_OGRN = 34;
    public const TYPE_OGRNIP = 33;
    public const TYPE_INN = 81;
    public const TYPE_SNILS = 32;
    public const TYPE_PASSPORT = 21;
    
    /**
     * Флаг проверки данных.
     * Допустимые значения:
     * empty - данные проверены
     * 'I' - данные не проверены
     * @var string
     */
    public $dataValidity = '';
    
    /**
     * For consumer credit histories: Contains the number as assigned by the Issuing Authority.
     * This may also be the document number as described in any Russian official legal document such as a passport.
     * Not required for ID 97.
     * For business credit histories: Contains the Taxpayer ID.
     * @var string
     */
    public $idNum;
    
    /**
     * Тип документа self::typeList()
     * @var string
     */
    public $idType;
    
    /**
     * Название документа
     * @var string
     */
    public $idTypeText;
    
    /**
     * Кем выдан
     * @var string
     */
    public $issueAuthority;
    
    /**
     * Страна или город выдачи
     * @var string
     */
    public $issueCountry;
    
    /**
     * Дата выдачи в формате yyyy-MM-dd
     * @var string
     */
    public $issueDate;
    
    /**
     * Contains the series number as described in the official legal document such as passport. Must be supplied for ID Type 1, 2, 21, and 22.
     * @var string
     */
    public $seriesNumber;
    
    /**
     * @var int
     */
    public $suppressFlag;
    
    public function attributeLabels()
    {
        return array_merge(
            parent::attributeLabels(),
            [
                
                'idNum' => 'Номер документа',
                'idType' => 'Тип документа',
                'idTypeText' => 'Название документа',
                'issueAuthority' => 'Выдан',
                'issueDate' => 'Дата выдачи',
                'serialNum' => 'ID записи',
                'seriesNumber' => 'Серийный номер',
                'dataValidity' => 'Статус проверки данных',
            
            ]
        );
    }
    
    /**
     * @return array
     */
    public function rules()
    {
        return array_merge(
            parent::rules(),
            [
                [['idType'], 'required'],
                [[
                    'idType',
                    'idTypeText',
                    'issueAuthority',
                    'issueDate',
                    'dataValidity',
                    'seriesNumber',
                    'idNum',
                ], 'string'],
            ]
        );
    }
    
    /**
     * @return Identification
     */
    public function setInvalidate(): Identification
    {
        $this->dataValidity = 'I';
        return $this;
    }
    
    public static function typeList()
    {
        return [
            1 => 'Паспорт гражданина СССР',
            2 => 'Загранпаспорт гражданина СССР',
            3 => 'Свидетельство о рождении',
            4 => 'Удостоверение офицера',
            6 => 'Паспорт министерства военно-морского флота',
            7 => 'Военный билет',
            9 => 'Дипломатический паспорт гражданина РФ',
            10 => 'Паспорт иностранного гражданина',
            12 => 'Вид на жительство',
            13 => 'Удостоверение беженца',
            14 => 'Временное удостоверение гражданина РФ',
            15 => 'Разрешение на временное проживание лица без гражданства',
            21 => 'Паспорт гражданина РФ',
            22 => 'Загранпаспорт гражданина РФ',
            26 => 'Паспорт моряка',
            27 => 'Удостоверение офицера в запасе',
            31 => 'Водительское удостоверение',
            32 => 'Номер карточки обязательного пенсионного страхования',
            33 => 'Регистрационный номер предпринимателя',
            34 => 'ОГРН',
            81 => 'Индивидуальный номер налогоплательщика (ИНН)',
            91 => 'Прочие документы, выдаваемые Министерством Внутренних Дел',
            97 => 'Без указания СНИЛС',
        ];
    }
    
    public function isPassport()
    {
        return in_array($this->idType, [
            '1', '2', '21', '22',
        ]);
    }
    
    public function isSnils()
    {
        return $this->idType === '32';
    }
}