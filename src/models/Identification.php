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
    public const TYPE_OGRN = '34';
    public const TYPE_OGRNIP = '33';
    public const TYPE_INN = '81';
    public const TYPE_SNILS = '32';
    public const TYPE_PASSPORT = '21';
    
    /**
     * Флаг проверки данных.
     * Допустимые значения:
     * empty - данные проверены
     * 'I' - данные не проверены
     * @var string
     */
    public $dataValidity = '';
    
    /**
     * Номер документа
     * @var string
     */
    public $idNum;
    
    /**
     * Код документа self::typeList()
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
     * Серия документа
     * @var string
     */
    public $seriesNumber;
    
    /**
     * @var int
     */
    public $suppressFlag;
    
    /**
     * Код страны по ОКСМ
     * @var string
     */
    public $oksm;
    
    /**
     * Код подразделения
     * @var string
     */
    public $divCode;
    
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
                    'oksm'
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
            '21' => 'Паспорт гражданина РФ',
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