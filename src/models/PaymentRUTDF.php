<?php

namespace mfteam\nbch\models;

/**
 * Сведения о внесении платежей
 */
class PaymentRUTDF extends BaseItem
{
    /**
     * Дата последнего внесенного платежа
     * @var string $paymtDate
     */
    public $paymtDate = '';
    
    /**
     * Сумма последнего внесенного платежа.
     * Если указано значение «0,00», то заполняются только показатели 28.10-28.12, иные показатели блока 28 не заполняются .
     * Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».
     * @var float $paymtAmt
     */
    public $paymtAmt;
    
    /**
     * Сумма последнего внесенного платежа по основному долгу.
     * @var float $principalPaymtAmt
     */
    public $principalPaymtAmt;
    
    /**
     * Сумма последнего внесенного платежа по процентам
     * @var float $intPaymtAmt
     */
    public $intPaymtAmt;
    
    /**
     * Сумма последнего внесенного платежа по иным требованиям
     * @var float $otherPaymtAmt
     */
    public $otherPaymtAmt;
    
    /**
     * Сумма всех внесенных платежей по обязательству
     * @var float $totalAmt
     */
    public $totalAmt;
    
    /**
     * Сумма внесенных платежей по основному долгу
     * @var float $principalTotalAmt
     */
    public $principalTotalAmt;
    
    /**
     * Сумма внесенных платежей по процентам
     * @var float $intTotalAmt
     */
    public $intTotalAmt;
    
    /**
     * Сумма внесенных платежей по иным требованиям
     * @var float $otherTotalAmt
     */
    public $otherTotalAmt;
    
    /**
     * Код соблюдения размера платежей.
     * 1    Платежи по обязательству вносятся в полном размере
     * 2    Платежи по обязательству вносятся не в полном размере
     * 3    Платежи по обязательству не вносятся
     * @var string $amtKeepCode
     */
    public $amtKeepCode = '';
    
    /**
     * Код соблюдения срока внесения платежей.
     * 1    Срок внесения платежа не наступил (новый договор)
     * 2    Платежи вносятся своевременно
     * 3    Платежи вносятся несвоевременно
     * @var string $termsDueCode
     */
    public $termsDueCode = '';
    
    /**
     * Продолжительность просрочки
     * Количество календарных дней, в течение которых субъект нарушает обязанность вносить платежи. Значение указанного показателя определяется методом ФИФО.
     * @var int $daysPastDue
     */
    public $daysPastDue = null;
}