<?php

namespace mfteam\nbch\models;

/**
 * Сведения о снятии запрета на заключение договоров потребительского займа (кредита)
 */
class ProhibitionLifting extends BaseItem
{
    /**
     * Дата подачи заявления о снятии запрета
     * @var string $applicationDateTime
     */
    public $applicationDateTime = null;

    /**
     * Дата начала действия снятия запрета
     * @var string $liftingDate
     */
    public $liftingDate = null;

    /**
     * ИНН субъекта
     * @var string $taxpayerNum
     */
    public $taxpayerNum = null;

    /**
     * Дата рождения субъекта
     * @var string|null $birthDt
     */
    public $birthDt = null;

}

