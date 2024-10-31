<?php

namespace mfteam\nbch\models\references;

use mfteam\nbch\models\references\BaseType;

/**
 * Справочник. Типы сделки
 */
class DealType extends BaseType
{

    public const CREDIT = '1';
    public const LEASING = '2';
    public const OTHER = '5';
    public const INDEPENDENT_WARRANTY = '6';
    public const INDEPENDENT_WARRANTY_LEASING = '7';
    public const INDEPENDENT_WARRANTY_OTHER = '8';
    public const GUARANTY = '9';
    public const GUARANTY_LEASING = '10';
    public const GUARANTY_INDEPENDENT_WARRANTY = '11';
    public const GUARANTY_GUARANTY = '12';
    public const GUARANTY_OTHER = '13';
    public const OTHER_ACCOUNT = '99';
    public const EMPTY = '-';

    /**
     * @return string[]
     */
    public static function list(): array
    {
        return [
            self::CREDIT => 'Договор займа (кредита)',
            self::LEASING => 'Договор лизинга',
            self::OTHER => 'Договор с элементами займа, поручительства, гарантии или лизинга (смешанный договор)',
            self::INDEPENDENT_WARRANTY => 'Независимая гарантия по займу (кредиту)',
            self::INDEPENDENT_WARRANTY_LEASING => 'Независимая гарантия по лизингу',
            self::INDEPENDENT_WARRANTY_OTHER => 'Иная независимая гарантия',
            self::GUARANTY => 'Поручительство по займу (кредиту)',
            self::GUARANTY_LEASING => 'Поручительство по лизингу',
            self::GUARANTY_INDEPENDENT_WARRANTY => 'Поручительство по независимой гарантии',
            self::GUARANTY_GUARANTY => 'Поручительство по поручительству',
            self::GUARANTY_OTHER => 'Иное поручительство',
            self::OTHER_ACCOUNT => 'Иная сделка',
            self::EMPTY => 'Данные отсутствуют',
        ];
    }
}
