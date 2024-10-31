<?php

namespace mfteam\nbch\models\references;

use mfteam\nbch\models\references\BaseType;

/**
 * Справочник 3.7. Виды соблюдения срока внесения платежей
 */
class TermsDueCode extends BaseType
{
    public const T1 = '1';
    public const T2 = '2';
    public const T3 = '3';
    /**
     * @inheritDoc
     */
    public static function list(): array
    {
        return [
            self::T1 => 'Срок внесения платежа не наступил (новый договор)',
            self::T2 => 'Платежи вносятся своевременно',
            self::T3 => 'Платежи вносятся несвоевременно',
        ];
    }
}
