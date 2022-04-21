<?php

namespace mfteam\nbch\models;

/**
 * Collateral information is delivered via B2B, Bulk, and Web (Screen/PDF) channels.
 * This information maps to the TUTDF Collateral (CL) segment.
 */
class Collateral extends BaseItem
{
    /**
     * Description of the value of the collateralCode tag.
     * @var string
     */
    public $collateral2Text;
    
    /**
     * Код залога
     * @var int
     */
    public $collateralCode;
    
    /**
     * Оценочная стоимость залога
     * @var int
     */
    public $collateralValue;
    
    /**
     * Дата оценки стоимости залога
     * @var string
     */
    public $collateralDate;
    
    /**
     * Дата окончания срока действия договора залога.
     * @var string
     */
    public $collateralExpirationDate;
    
    /**
     * Код валюты
     * @var string
     */
    public $currencyCode = 'RUB';
    
    public function rules()
    {
        return array_merge(parent::rules(), [
            [
                [
                    'collateral2Text',
                    'currencyCode'
                ],
                'string'
            ],
            [
                'collateralCode',
                'in',
                'range' => array_keys(self::collateralCodeList())
            ],
            [
                [
                    'collateralCode',
                    'collateralValue',
                    'collateralDate',
                    'collateralExpirationDate',
                    'currencyCode'
                ],
                'required'
            ],
            [
                [
                    'collateralValue'
                ],
                'integer'
            ],
            [
                [
                    'collateralDate',
                    'collateralExpirationDate'
                ],
                'date',
                'format' => 'yyyy-MM-dd'
            ]
        ]);
    }
    
    /**
     * @return string[]
     */
    public static function collateralCodeList()
    {
        return [
            1 => 'Автомобиль',
            2 => 'Товары в обороте',
            3 => 'Банковская гарантия',
            11 => 'Недвижимость',
            12 => 'Коммерческая недвижимость',
            13 => 'Здания и сооружения',
            14 => 'Сельскохозяйственное оборудование и машины',
            15 => 'Производственное оборудование',
            16 => 'Предметы домашнего обихода (бытовая техника и проч.)',
            17 => 'Акции',
            18 => 'Векселя',
            19 => 'Долговые расписки, облигации',
            20 => 'Прочее',
        ];
    }
}