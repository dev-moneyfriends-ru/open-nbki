<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Тип счёта
 */
class AccountType
{
    public const CREDIT = 1;
    public const LEASING = 2;
    public const INDEPENDENT_WARRANTY = 3;
    public const GUARANTY = 4;
    public const OTHER = 5;
    
    /**
     * @return string[]
     */
    public static function list()
    {
        return [
            self::CREDIT => 'Договор займа (кредита)',
            self::LEASING => 'Договор лизинга',
            self::INDEPENDENT_WARRANTY => 'Независимая гарантия',
            self::GUARANTY => 'Поручительство',
            self::OTHER => 'Договор с элементами займа, поручительства, гарантии или лизинга (смешанный договор)',
        ];
    }
    
    /**
     * @param $val
     * @return mixed
     * @throws \Exception
     */
    public static function getText($val)
    {
        return ArrayHelper::getValue(self::list(), $val);
    }
}