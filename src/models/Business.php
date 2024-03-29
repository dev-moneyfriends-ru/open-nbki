<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Business information is delivered via B2B, Bulk, and Web (Screen/PDF) channels.
 * This information maps to the TUTDF Business (BU) segment.
 * @property-read null|string $businessStatusText
 */
class Business extends BaseItem
{
    /**
     * Сокращенное название ЮЛ.
     * @var string
     */
    public $abbreviatedBusinessName;
    
    /**
     * Полное наименование ЮЛ, включая организационно-правовую форму
     * @var string
     */
    public $businessName;
    
    /**
     * Название ЮЛ на иностранном языке.
     * @var string
     */
    public $businessNameAlt;
    
    /**
     * Название ЮЛ на одном из языков Российской Федерации.
     * @var string
     */
    public $businessNameRF;
    
    /**
     * Статус ЮЛ
     * @var int
     */
    public $businessStatus = 0;
    
    /**
     * Date of the business event; must be supplied when the Business Status is not 0. Valid format: YYYY-MM-DD.
     * @var string
     */
    public $dateOfStatus;
    
    /**
     * Generated by iCRS. Date of the last update of this segment. Valid format: YYYY-MM-DD.
     * @var string
     */
    public $lastUpdatedDt;
    
    /**
     * The number of directors or owners of the business.
     * @var int
     */
    public $numberOfDirectors;
    
    /**
     * The number of permanent or contracted staff.
     * @var int
     */
    public $numberOfEmployees;
    
    /**
     * Фирменное наименование юридического лица
     * @var string
     */
    public $trademark;
    
    /**
     * Код страны по ОКСМ
     * @var string
     */
    public $oksm;
    
    /**
     * Сведения о наименовании субъекта до его смены (за исключением случаев смены наименования субъекта при переходе к нему прав и обязанностей в рамках универсального правопреемства).
     * код «1» – в случае если у субъекта имеется предыдущее наименование;
     * код «0» – в случае если обстоятельство кода «1» отсутствует.
     * Если указан код «0», показатель 1.5 «Полное наименование до его смены» не заполняется.
     * @var int
     */
    public $nameChange = 0;
    
    /**
     * @var string
     */
    public $businessNamebfrChange = '';
    
    /**
     * @return array
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
                [
                    [
                        'abbreviatedBusinessName',
                        'businessName',
                        'businessStatus',
                        'nameChange'
                    ], 'required',
                ],
                [
                    [
                        'abbreviatedBusinessName',
                        'trademark'
                    ],
                    'string',
                    'max' => 255,
                ],
                [
                    [
                        'businessName',
                        'businessNameAlt',
                        'businessNameRF',
                        'oksm'
                    ],
                    'string',
                    'max' => 1020,
                ],
                [
                    'dateOfStatus',
                    'required',
                    'when' => function(Business $model){
                        return $model->businessStatus !== 0;
                    }
                ],
                [
                    'businessNamebfrChange',
                    'required',
                    'when' => function(Business $model){
                        return $model->nameChange !== 0;
                    }
                ],
                [
                    [
                        'dateOfStatus',
                        'lastUpdatedDt'
                    ],
                    'date',
                    'format' => 'yyyy-MM-dd'
                ],
                [
                    [
                        'numberOfDirectors',
                        'businessStatus',
                        'numberOfEmployees',
                        'nameChange'
                    ],
                    'integer'
                ],
                [
                    'businessStatus',
                    'in',
                    'range' => array_keys(self::businessStatusList())
                ]
            ]
        );
    }
    
    /**
     * @return string[]
     */
    public static function businessStatusList(): array
    {
        return [
          0 => 'Функционирует',
          1 => 'Не функционирует',
          2 => 'Реструктуризация',
          3 => 'Находится на рассмотрении',
          4 => 'Перерегистрация',
          5 => 'Продажа',
        ];
    }
    
    /**
     * @return string|null
     * @throws \Exception
     */
    public function getBusinessStatusText(): ?string
    {
        return ArrayHelper::getValue(self::businessStatusList(), $this->businessStatus);
    }
}