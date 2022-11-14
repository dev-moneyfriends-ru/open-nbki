<?php

namespace mfteam\nbch\models;

use yii\base\Model;

/**
 * Информация о типе запроса в НБКИ
 */
class RefReq extends Model
{
    public const PRODUCT_CHST = 'CHST';
    public const PRODUCT_CHIP = 'CHIP';
    public const PRODUCT_CIPO = 'CIPO';
    public const PRODUCT_BHST = 'BHST';
    public const PRODUCT_BHIP = 'BHIP';
    
    /**
     * Код продукта CHST, CHIP, CIPO, BHST.
     * @var string
     */
    public $product;
    
    /**
     * Уникальный номер отслеживания запроса
     * @var string
     */
    public $userReference;
    
    /**
     * @var string
     */
    public $productAddOn;
    
    public function rules()
    {
        return [
            ['product', 'required'],
            ['product', 'in', 'range' => array_keys(self::productList())],
            ['userReference', 'string', 'max' => 25],
            ['productAddOn', 'string'],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'product' => 'Код продукта'
        ];
    }
    
    public static function productList()
    {
        return [
            self::PRODUCT_BHST => 'Кридитная история для бизнеса',
            self::PRODUCT_CHIP => 'История потребительских кредитов с информационной частью',
            self::PRODUCT_CHST => 'История потребительских кредитов без информационной части',
            self::PRODUCT_CIPO => 'Только информационная часть о потребителе',
        ];
    }
}