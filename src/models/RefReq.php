<?php

namespace mfteam\nbch\models;

use yii\base\Model;

/**
 * Запрашиваемый тип кредитного отчета
 */
class RefReq extends Model
{
    /**
     * Расширенный кредитный отчет
     */
    public const CODE_CHIP = 'CHIP';
    
    /**
     * Усеченный кредитный отчет (только информационная часть КИ)
     */
    public const CODE_CIPO = 'CIPO';
    
    /**
     * Расширенный кредитный отчет и сведения о среднемесячных платежах (только из БД НБКИ)
     */
    public const CODE_CHSP = 'CHSP';
    
    /**
     * Кредитный отчет с сокращенной информационной частью (информационная часть содержит только показатели: в RUTDF 55.2, 56.5, 57.2 и в TUTDF 7, 14, 17)
     */
    public const CODE_CSIP = 'CSIP';
    
    /**
     * Кредитный отчет с  сокращенной информационной частью (информационная часть содержит только показатели: в RUTDF 45.2, 46.5, 47.2) ЮЛ
     */
    public const CODE_BSIP = 'BSIP';
    
    /**
     * Усеченный кредитный отчет (только информационная часть КИ) ЮЛ
     */
    public const CODE_BIPO = 'BIPO';
    
    /**
     * Расширенный кредитный отчет ЮЛ
     */
    public const CODE_BHIP = 'BHIP';
    
    /**
     * Код запрошенных сведений
     * @var string
     */
    public $product;
    
    /**
     * @inheritDoc
     */
    public function fields()
    {
        return [
            'product'
        ];
    }
}