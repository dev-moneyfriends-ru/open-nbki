<?php

namespace mfteam\nbch\models;

use Exception;
use yii\helpers\ArrayHelper;

/**
 * Состояние счёта
 * @deprecated
 */
class AccountRating
{
    public const ACTIVE = 0;
    public const PAID_BY_COLLATERAL = 12;
    public const ACCOUNT_CLOSED = 13;
    public const ACCOUNT_CLOSED_TRANSFERED = 14;
    public const DISPUTE = 21;
    public const PAST_DUE = 52;
    public const FRAUD = 61;
    public const DATA_SUBMISSION_STOPPED = 70;
    public const COMPULSORY_PAYMENT = 85;
    public const WRITE_OFF = 90;
    public const BANKRUPTCY = 95;
    public const BANKRUPTCY_REVIVAL = 96;
    
    /**
     * @return string[]
     */
    public static function list()
    {
        return [
            self::ACTIVE => 'Активный',
            self::PAID_BY_COLLATERAL => 'Оплачен за счет обеспечения',
            self::ACCOUNT_CLOSED => 'Счет закрыт',
            self::ACCOUNT_CLOSED_TRANSFERED => 'Передан на обслуживание в другую организацию',
            self::DISPUTE => 'Спор',
            self::PAST_DUE => 'Просрочен',
            self::FRAUD => 'Проблемы с возвратом',
            self::DATA_SUBMISSION_STOPPED => 'Передача данных прекращена',
            self::COMPULSORY_PAYMENT => 'Принудительное исполнение обязательств',
            self::WRITE_OFF => 'Списан с баланса',
            self::BANKRUPTCY => 'Банкротство',
            self::BANKRUPTCY_REVIVAL => 'Возобновлена процедура банкротства',
        ];
    }
    
    /**
     * @param $val
     * @return mixed
     * @throws Exception
     */
    public static function getText($val)
    {
        return ArrayHelper::getValue(self::list(), $val);
    }
}