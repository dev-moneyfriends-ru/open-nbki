<?php

namespace mfteam\nbch\models;

/**
 * Сведения о запрете на заключение договоров потребительского займа (кредита)
 */
class Prohibition extends BaseItem
{
    /**
     * Дата подачи заявления о запрете
     * @var string|null $applicationDateTime
     */
    public $applicationDateTime = null;

    /**
     * Дата начала действия запрета
     * @var string|null $prohibitionDate
     */
    public $prohibitionDate = null;

    /**
     * Условия запрета
     * @var int[] $condition
     */
    public $condition = [
        
    ];

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

    /**
     * Сведения о запрете (снятии запрета) на заключение договоров потребительского займа (кредита) не предоставляются
     * @var string $noTaxpayerChecked
     */
    public $noTaxpayerChecked = null;

}

