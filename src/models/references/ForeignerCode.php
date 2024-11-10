<?php

namespace mfteam\nbch\models\references;

use mfteam\nbch\models\references\BaseType;

/**
 * Справочник 1.8. Сведения о гражданстве
 */
class ForeignerCode extends BaseType
{
    public const ONLY_FOREIGNER = '1';
    public const MIXED = '2';
    public const ONLY_RUS = '3';

    /**
     * @inheritDoc
     */
    public static function list(): array
    {
        return [
            self::ONLY_FOREIGNER => 'Только иностранное гражданство или без гражданства',
            self::MIXED => 'Гражданство Российской Федерации и иностранное гражданство',
            self::ONLY_RUS => 'Только гражданство Российской Федерации',
        ];
    }
}
