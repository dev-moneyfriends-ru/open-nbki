<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Частота выплат
 * @deprecated
 */
class PaymentFrequency
{
    public const WEEKLY = 1;
    public const FORTNIGHTLY = 2;
    public const MONTHLY = 3;
    public const QUARTERLY = 4;
    public const HALF_YEARLY = 5;
    public const YEARLY = 6;
    public const OTHER = 7;
    
    /**
     * @return string[]
     */
    public static function list()
    {
        return [
            self::WEEKLY => 'Еженедельно',
            self::FORTNIGHTLY => 'Раз в две недели',
            self::MONTHLY => 'Ежемесячно',
            self::QUARTERLY => 'Поквартально',
            self::HALF_YEARLY => 'Раз в полгода',
            self::YEARLY => 'Ежегодно',
            self::OTHER => 'Другое',
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