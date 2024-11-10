<?php

namespace mfteam\nbch\models\references;

use mfteam\nbch\models\references\BaseType;

/**
 * Справочник 6.4.1. Способы обращения
 */
class SubmissionMethodType extends BaseType
{
    public const T1 = '1';
    public const T2 = '2';
    public const T3 = '3';
    public const T4 = '4';
    public const T5 = '5';
    public const T6 = '6';
    public const T7 = '7';
    public const T8 = '8';
    public const T99 = '99';
    public const EMPTY = '-';
    /**
     * @inheritDoc
     */
    public static function list(): array
    {
        return [
            self::T1 => 'Посреднический – оформление через агента источника',
            self::T2 => 'Дистанционный – оформление с использованием средств телекоммуникаций',
            self::T3 => 'В кредитную организацию – оформление в филиале или внутреннем структурном подразделении кредитной организации',
            self::T4 => 'В некредитную финансовую организацию',
            self::T5 => 'В иную организацию – источник',
            self::T6 => 'Очно',
            self::T7 => 'Через посрединка',
            self::T8 => 'Дистанционно',
            self::T99 => 'Иной способ',
            self::EMPTY => 'Данные отсутствуют',
        ];
    }
}
