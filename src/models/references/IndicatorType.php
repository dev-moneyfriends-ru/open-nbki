<?php

namespace mfteam\nbch\models\references;

/**
 * Справочник. Специализированные флаги
 */
class IndicatorType extends BaseType
{
    public const YES = '1';

    public const NO = '0';

    public const UNKNOWN = '-';

    public static function list(): array
    {
        return [
            self::UNKNOWN => 'Данные отсутствуют',
            self::YES => 'Да',
            self::NO => 'Нет',
        ];
    }
}
