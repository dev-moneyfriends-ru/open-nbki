<?php

namespace mfteam\nbch\models;

use mfteam\nbch\models\BaseItem;

/**
 * Сведения об изменении условий обязательства, обусловленном наступлением указанных в сделке событий
 */
class ContractTermsChangesRUTDF extends BaseItem
{

    /**
     * Код вида изменения условий обязательства.
     * Заполняется по справочнику 3.4
     * @var string $termsChangeCode
     */
    public $termsChangeCode = null;

    /**
     * Описание иного изменения условий обязательства.
     * Вносится комментарий с описанием изменения условий обязательства
     * @var string $termsChangeDesc
     */
    public $termsChangeDesc = null;

    /**
     * Дата начала действия изменения условий обязательства.
     * Дата, с которой начинает действовать изменение условий обязательства.
     * @var string $changingDate
     */
    public $changingDate = null;

}
