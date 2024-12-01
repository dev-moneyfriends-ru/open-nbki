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
    public $paymtDate = null;
    
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
     * @see AmtKeepCode
     * @var string $amtKeepCode
     */
    public $amtKeepCode = '';
    
    /**
     * Код соблюдения срока внесения платежей.
     * @see TermsDueCode
     * @var string $termsDueCode
     */
    public $termsDueCode = '';
    
    /**
     * Продолжительность просрочки
     * Количество календарных дней, в течение которых субъект нарушает обязанность вносить платежи. Значение указанного показателя определяется методом ФИФО.
     * @var int|null $daysPastDue
     * @deprecated
     */
    public $daysPastDue = null;

    /**
     * Дата, по состоянию на которую рассчитаны значения показателей
     * @var string $calcDate
     */
    public $calcDate = '';

    /**
     * Сумма последнего внесенного платежа (части платежа) с просрочкой более 30 календарных дней.
     * Сумма платежа, указанного по показателю 28.2, или части такого платежа, если они внесены субъектом с просрочкой более 30 календарных дней.
     * Рассчитывается на дату последнего внесенного платежа, указанную по показателю 28.1.
     * @var float|null $otherTotalAmt
     */
    public $lastMissPaySum = null;

    /**
     * Сумма внесенных платежей за 24 календарных месяца, за
     * исключением платежей с просрочкой более 30 календарных дней
     * Сумма внесенных платежей за 24 календарных месяца, предшествующих месяцу,
     * указанному в показателе 28.13 «Дата расчета», за исключением платежей по займам (кредитам),
     * внесенных с нарушением сроков согласно графику платежей по договорам займа (кредита) более чем на 30 календарных дней.
     * @var float|null $otherTotalAmt
     */
    public $paySum24 = null;
}
