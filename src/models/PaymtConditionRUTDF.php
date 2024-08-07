<?php

namespace mfteam\nbch\models;

/**
 * Сведения об условиях платежей
 */
class PaymtConditionRUTDF extends BaseItem
{
    /**
     * Сумма ближайшего следующего платежа по основному долгу.
     * По обязательству поручителя до наступления его ответственности указывается значение «0,00»
     * Если по этому показателю, а также по показателю interestTermsAmt указано значение «0,00», иные показатели не заполняются.
     * @var float $principalTermsAmt
     */
    public $principalTermsAmt = 0;
    
    /**
     * Дата ближайшего следующего платежа по основному долгу
     * @var string $principalTermsAmtDt
     */
    public $principalTermsAmtDt = '';
    
    /**
     * Сумма ближайшего следующего платежа по процентам.
     * По обязательству поручителя до наступления его ответственности указывается значение «0,00».
     * @var float $interestTermsAmt
     */
    public $interestTermsAmt = 0;
    
    /**
     * Дата ближайшего следующего платежа по процентам
     * @var string $interestTermsAmtDt
     */
    public $interestTermsAmtDt = '';
    
    /**
     * Код частоты платежей.
     * Частота платежей определяется в целом по сделке количеством дней, в которые истекает срок для внесения платежа по основному долгу или процентам.
     * 1    Более четырех раз в месяц
     * 2    От двух до четырех раз в месяц
     * 3    Один раз в месяц
     * 4    Один раз в квартал
     * 5    Один раз в полгода
     * 6    Один раз в год
     * 7    Единовременно, в том числе в день окончания срока действия договора
     * 8    До востребования
     * 9    Бессрочно
     * 99    Иное
     * @var string $termsFrequency
     */
    public $termsFrequency = '';
    
    /**
     * Сумма минимального платежа по кредитной карте.
     * Заполняется, если КИ формируется по кредитной карте с условием о минимальном платеже.
     * @var float $minPaymt
     */
    public $minPaymt;
    
    /**
     * Дата начала беспроцентного периода.
     * Заполняются при наличии в договоре займа (кредита) с расходным лимитом беспроцентного периода.
     * @var string $graceStartDt
     */
    public $graceStartDt = '';
    
    /**
     * Дата окончания беспроцентного периода.
     * Заполняются при наличии в договоре займа (кредита) с расходным лимитом беспроцентного периода.
     * Если на дату расчета действует беспроцентный период, то указывается плановая дата окончания беспроцентного периода.
     * @var string $graceEndDt
     */
    public $graceEndDt = '';
    
    /**
     * Дата окончания срока уплаты процентов
     * Определяется последней датой, в которую субъект должен полностью погасить требования по процентам на срочный долг, согласно условиям сделки.
     * @var string $interestPaymentDueDate
     */
    public $interestPaymentDueDate = '';
    
}