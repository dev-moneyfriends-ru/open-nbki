<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Отношение к счёту
 */
class AccountRelationship
{
    public const INDIVIDUAL = 1;
    public const SUPPLEMENTARY_CARD  = 2;
    public const AUTHORIZED_USER   = 3;
    public const JOINT   = 4;
    public const GUARANTOR   = 5;
    public const PRINCIPAL    = 6;
    public const BUSINESS    = 9;
    
    /**
     * @return string[]
     */
    public static function list()
    {
        return [
            self::INDIVIDUAL => 'Физическое лицо (заемщик)',
            self::SUPPLEMENTARY_CARD => 'Дополнительная карта (только для кредитных карт)',
            self::AUTHORIZED_USER => 'Авторизованный пользователь (доверенное лицо)',
            self::JOINT => 'Совместный (основной заемщик, созаемщик)',
            self::GUARANTOR => 'Поручитель',
            self::PRINCIPAL => 'Принципал (сторона в договоре банковской гарантии)',
            self::BUSINESS => 'Юридическое лицо (заемщик)',
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