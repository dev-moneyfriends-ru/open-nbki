<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Тип счёта
 * @deprecated
 */
class AccountType
{
    public const AUTO_LOAN = 1;
    public const LEASING = 4;
    public const MORTGAGE = 6;
    public const CREDIT_CARD = 7;
    public const CONSUMER_CREDIT = 9;
    public const FOR_DEVELOPMENT = 10;
    public const FOR_ENLARGING = 11;
    public const FOR_EQUIPMENT = 12;
    public const FOR_BUILDING = 13;
    public const FOR_SECURITIES = 14;
    public const MICROCREDIT = 16;
    public const OVERDRAFT_DEBIT_CARD = 17;
    public const OVERDRAFT = 18;
    
    /**
     * @return string[]
     */
    public static function list()
    {
        return [
            self::AUTO_LOAN => 'Кредит на автомобиль',
            self::LEASING => 'Лизинг',
            self::MORTGAGE => 'Ипотека',
            self::CREDIT_CARD => 'Кредитная карта',
            self::CONSUMER_CREDIT => 'Потребительский кредит',
            self::FOR_DEVELOPMENT => 'На развитие бизнеса',
            self::FOR_ENLARGING => 'На пополнение оборотных средств',
            self::FOR_EQUIPMENT => 'На покупку оборудования',
            self::FOR_BUILDING => 'На строительство',
            self::FOR_SECURITIES => 'На покупку ценных бумаг',
            self::MICROCREDIT => 'Микрокредит',
            self::OVERDRAFT_DEBIT_CARD => 'Дебетовая карта с овердрафтом',
            self::OVERDRAFT => 'Овердрафт',
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