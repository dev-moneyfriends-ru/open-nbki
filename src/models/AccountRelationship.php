<?php

namespace mfteam\nbch\models;

use Exception;
use yii\helpers\ArrayHelper;

/**
 * Отношение к счёту
 */
class AccountRelationship
{
    public const BORROWER = 1;
    public const GUARANTOR   = 2;
    public const PRINCIPAL    = 3;
    public const LEASING    = 4;
    public const USER   = 5;
    public const OTHER   = 99;
    
    /**
     * @return string[]
     */
    public static function list()
    {
        return [
            self::BORROWER => 'Заемщик',
            self::GUARANTOR => 'Поручитель',
            self::PRINCIPAL => 'Принципал по гарантии',
            self::LEASING => 'Лизингополучатель',
            self::USER => 'Лицо, получающее финансирование или предоставляющее обеспечение по договору с элементами займа, поручительства, гарантии или лизинга (смешанный договор)',
            self::OTHER => 'Иной вид участия',
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