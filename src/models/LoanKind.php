<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Виды займа (кредита)
 */
class LoanKind
{
    public static function list()
    {
        return [
            1 => "Заем (кредит)",
            2 => "Заем (кредит) с ипотекой",
            3 => "Микрозаем",
            4 => "Кредитная линия с лимитом выдачи",
            5 => "Кредитная линия с лимитом задолженности",
            6 => "Комбинированная кредитная линия с лимитом выдачи и лимитом задолженности",
            7 => "Кредит «овердрафт» (кредитование счета)",
            8 => "Синдицированный заем (кредит)",
            99 => "Иной заем (кредит)",
        
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