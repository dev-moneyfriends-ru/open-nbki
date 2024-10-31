<?php

namespace mfteam\nbch\models\references;

use mfteam\nbch\models\references\BaseType;

/**
 * Справочник. Виды участия в сделке
 */
class RoleType extends BaseType
{
    public const BORROWER = '1';
    public const GUARANTOR   = '2';
    public const PRINCIPAL    = '3';
    public const LEASING    = '4';
    public const USER   = '5';
    public const OTHER   = '99';
    public const EMPTY   = '-';
    /**
     * @inheritDoc
     */
    public static function list(): array
    {
        return [
            self::BORROWER => 'Заемщик',
            self::GUARANTOR => 'Поручитель',
            self::PRINCIPAL => 'Принципал по гарантии',
            self::LEASING => 'Лизингополучатель',
            self::USER => 'Лицо, получающее финансирование или предоставляющее обеспечение по договору с элементами займа, поручительства, гарантии или лизинга (смешанный договор)',
            self::OTHER => 'Иной вид участия',
            self::EMPTY => 'Данные отсутствуют',
        ];
    }
}
