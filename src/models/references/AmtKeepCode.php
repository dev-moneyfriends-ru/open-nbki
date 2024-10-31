<?php

namespace mfteam\nbch\models\references;

use mfteam\nbch\models\references\BaseType;

/**
 * Справочник 3.6. Виды соблюдения размера платежей
 */
class AmtKeepCode extends BaseType
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
            self::T1 => 'Платежи по обязательству вносятся в полном размере',
            self::T2 => 'Платежи по обязательству вносятся не в полном размере',
            self::T3 => 'Платежи по обязательству не вносятся',
        ];
    }
}
