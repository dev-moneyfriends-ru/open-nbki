<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 *Trade (Account) information is delivered via B2B, Bulk, and Web (Screen/PDF) channels.
 * This information maps to the TUTDF Trade (TR) segment.
 *
 * @property-read mixed $acctTypeText
 * @property-read mixed $bankGuaranteeVolumeCodeText
 * @property-read mixed $bankGuaranteeIndicatorCodeText
 * @property-read mixed $collateral2Text
 * @property-read mixed $interestPaymentFrequencyText
 * @property-read mixed $guarantorIndicatorCodeText
 * @property-read mixed $guaranteeVolumeCodeText
 * @property-read mixed $accountRatingText
 */
class Trade extends BaseItem
{
    /**
     * Состояние счёта @see AccountRating
     * @var int
     */
    public $accountRating;
    
    /**
     * Дата наступления (изменения) состояния счёта.
     * @var string
     */
    public $accountRatingDate;
    
    /**
     * Номер счета
     * @var string
     */
    public $acctNum;
    
    /**
     * Тип счёта @see AccountType
     * @var int
     */
    public $acctType;
    
    /**
     * Размер суммарной текущей задолженности по данному кредиту, включая просрочку, проценты и пени.
     * Т.е. это задолженность, которая может быть предложена заемщику к полному погашению на последнюю дату обновления,
     * указанную в поле Даты отчёта.
     * @var int
     */
    public $amtOutstanding;
    
    /**
     * Общая сумма всех находящихся в просрочке средств, на последнюю дату обновления, указанную в поле Даты отчёта.
     * Сумма составляет целое число и должна быть неотрицательной.
     * @var int
     */
    public $amtPastDue;
    
    /**
     * Сумма банковской гарантии
     * @var int
     */
    public $bankGuaranteeAmt;
    
    /**
     * Флаг о наличии банковской гарантии @see BankGuarantee::bankGuaranteeVolumeCodeList()
     * @var string
     */
    public $bankGuaranteeIndicatorCode = BankGuarantee::CODE_NO;
    
    /**
     * Отношение к счёту @see AccountRelationship
     * @var int
     */
    public $ownerIndic;
    
    /**
     * Срок банковской гарантии
     * @var string
     */
    public $bankGuaranteeTerm;
    
    /**
     * Объем обязательства, обеспечиваемого банковской гарантией @see BankGuarantee
     * @var string
     */
    public $bankGuaranteeVolumeCode;
    
    /**
     * Дата окончания срока договора
     * @var string
     */
    public $closedDt;
    
    /**
     * Код залога
     * @var int
     */
    public $collateralCode;
    
    /**
     * Оценочная стоимость залога
     * @var int
     */
    public $collateralValue;
    
    /**
     * Дата оценки
     * @var string
     */
    public $collateralDate;
    
    /**
     * Дата окончания срока действия договора залога.
     * @var string
     */
    public $collateralExpirationDate;
    
    /**
     * Лимит кредита/ Исходная сумма кредита.
     * В данном поле указывается сумма обязательств (или предельного лимита по кредиту, предоставленному с использованием банковской карты)
     * заемщика на дату заключения договора займа (кредита) или измененный лимит по кредиту (текущий лимит),
     * в том числе по кредиту, предоставленному заемщику с использованием банковской карты.
     * @var int
     */
    public $creditLimit;
    
    /**
     * Полная стоимость кредита, в процентах годовых
     * @var string
     */
    public $creditTotalAmt = 'N';
    
    /**
     * This field contains information about overall monetary value of credit in accordance with credit contract. Contains N if not calculated by the source
     * @var string
     */
    public $creditTotalMonetaryAmt = 'N';
    
    /**
     * Общая сумма выплаченных средств (нарастающим итогом) в рамках договора займа (кредита).
     * @var int
     */
    public $curBalanceAmt;
    
    /**
     * @var string
     */
    public $currencyCode = 'RUB';
    
    /**
     * Дата окончания льготного периода
     * @var string
     */
    public $graceEndDt;
    
    /**
     * Сумма поручительства
     * @var int
     */
    public $guaranteeAmt;
    
    /**
     * Дата истечения предоставленного поручительства.
     * @var string
     */
    public $guaranteeTerm;
    
    /**
     * Объем обязательства, обеспечиваемого поручительством
     * @var string
     */
    public $guaranteeVolumeCode;
    
    /**
     * Флаг о наличии банковской гарантии
     * @var string
     */
    public $guarantorIndicatorCode = Guarantor::CODE_NO;
    
    /**
     * Дата окончательной выплаты процентов в соответствии с договором займа (кредита)
     * @var string
     */
    public $interestPaymentDueDate;
    
    /**
     * Частота выплат процентов @see PaymentFrequency
     * @var int
     */
    public $interestPaymentFrequencyCode;
    
    /**
     * Срочная задолженность по процентам на дату последнего платежа
     * @var int
     */
    public $intOutstanding = 0;
    
    /**
     * Сумма просроченной задолженности по процентам на дату последнего платежа
     * @var int
     */
    public $intPastDue = 0;
    
    /**
     * Дата последнего фактически произведенного платежа.
     * @var string
     */
    public $lastPaymtDt = '1900-01-02';
    
    /**
     * The date the record was last updated by iCRS.
     * @var string
     */
    public $lastUpdatedDt;
    
    /**
     * The total number of months reviewed in the Payment Pattern.
     * @var int
     */
    public $monthsReviewed;
    
    /**
     * Number of months where payment was between 30 and 59 days late within the payment pattern (past 180 months).
     * @var int
     */
    public $numDays30;
    
    /**
     * Number of months where payment was between 60 and 89 days late within the payment pattern (past 180 months).
     * @var int
     */
    public $numDays60;
    
    /**
     * Number of months where payment was more than 90 days late within the payment pattern (past 180 months).
     * @var int
     */
    public $numDays90;
    
    /**
     * Дата открытия счета/заключения договора займа (кредита).
     * @var string
     */
    public $openedDt;
    
    /**
     * Сумма подлежащих уплате комиссий и иных аналогичных требований к заемщику
     * в составе срочной задолженности на дату последнего платежа.
     * @var int
     */
    public $otherAmtOutstanding;
    
    /**
     * Сумма просроченных комиссий, а также сумма неустойки (штрафы, пени) и
     * иных аналогичных требований к заемщику на дату последнего платежа.
     * @var int
     */
    public $otherAmtPastDue;
    
    /**
     * Дата выполнения обязательств заемщика в полном размере в соответствии с договором займа (кредита).
     * @var string
     */
    public $paymentDueDate;
    
    /**
     * Description of the value in the termsFrequency tag.
     * @var string
     */
    public $paymtFreqText;
    
    /**
     * Своевременность платежей.
     * В поле «Своевременность платежей» необходимо передавать наихудшее значение показателя просрочки за тот календарный месяц,
     * в который входит «Дата составления отчета» по передаваемой записи.
     * Допустимые значения:
     * 0 – Новый, оценка невозможна
     * 1 – Оплата без просрочек
     * A (латиница) – Просрочка от 1 до 29 дней
     * B (латиница) – Просрочка от 1 до 7 дней
     * C (латиница) – Просрочка от 8 до 29 дней
     * 2 – Просрочка от 30 до 59 дней
     * 3 – Просрочка от 60 до 89 дней
     * 4 – Просрочка от 90 до 119 дней
     * 5 – Просрочка от 120 дней
     * 7 – Изменения/дополнения к договору займа (кредита)
     * 8 – Погашение за счет обеспечения
     * 9 – Безнадёжный долг/ передано на взыскание
     * Z – Льготный период
     * @var string
     */
    public $paymentPatternValue;
    
    /**
     * Значение всех $paymentPatternValue за 180 месяцев
     * @var string
     */
    public $paymtPat;
    
    /**
     * The most recent reported month for the account.
     * @var string
     */
    public $paymtPatStartDt;
    
    /**
     * Основная сумма долга по договору займа (кредита)
     * на дату последнего платежа без учета начисленных по договору просроченной задолженности, штрафов, пени, неустоек.
     * @var int
     */
    public $principalOutstanding;
    
    /**
     * Сумма просроченной задолженности по основному долгу на дату последнего платежа
     * @var int
     */
    public $principalPastDue;
    
    /**
     * День, на который данные действительны.
     * @var string
     */
    public $reportingDt;
    
    /**
     * Идентификационные данные приобретателя права требования
     * @var string
     */
    public $rightOfClaimID;
    
    /**
     * ИНН приобретателя права требования
     * @var int
     */
    public $rightOfClaimINN;
    
    /**
     * Наименования приобретателя права требования
     * @var string
     */
    public $rightOfClaimName;
    
    /**
     * СНИЛС приобретателя права требования
     * @var string
     */
    public $rightOfClaimSNILS;
    
    /**
     * The unique ID of the trade record.
     * @var string
     */
    public $serialNum;
    
    /**
     * Следующий платеж. Может содержать сумму очередного следующего платежа (не включая просрочку).
     * @var int
     */
    public $termsAmt;
    
    /**
     * Частота выплат
     * @var int
     */
    public $termsFrequency;
    
    /**
     * Уникальный идентификатор договора (сделки), сформированный в соответствии с требованиями
     * Указания ЦБ «О правилах присвоения уникального идентификатора договора (сделки)».
     * @var string
     */
    public $uuid;
    
    /**
     * Дата фактического исполнения обязательств в полном объеме
     * @var string
     */
    public $completePerformDt;
    
    /**
     * @return array[]
     */
    public function rangeRules()
    {
        return [
            [
                'accountRating',
                'in',
                'range' => array_keys(AccountRating::list()),
            ],
            [
                'acctType',
                'in',
                'range' => array_keys(AccountType::list()),
            ],
            [
                'ownerIndic',
                'in',
                'range' => array_keys(AccountRelationship::list()),
            ],
            [
                'bankGuaranteeIndicatorCode',
                'in',
                'range' => array_keys(BankGuarantee::bankGuaranteeIndicatorCodeList()),
            ],
            [
                'bankGuaranteeVolumeCode',
                'in',
                'range' => array_keys(BankGuarantee::bankGuaranteeVolumeCodeList()),
            ],
            [
                'collateralCode',
                'in',
                'range' => array_keys(Collateral::collateralCodeList()),
            ],
            [
                'guarantorIndicatorCode',
                'in',
                'range' => array_keys(Guarantor::codeList()),
            ],
            [
                'guaranteeVolumeCode',
                'in',
                'range' => array_keys(Guarantor::guaranteeVolumeCodeList()),
            ],
            [
                ['interestPaymentFrequencyCode', 'termsFrequency'],
                'in',
                'range' => array_keys(PaymentFrequency::list()),
            ],
        ];
    }
    
    /**
     * @return array
     */
    public function requiredRules()
    {
        return [
            [
                [
                    'acctNum',
                    'amtOutstanding',
                    'ownerIndic',
                    'currencyCode',
                    'intOutstanding',
                    'intPastDue',
                    'openedDt',
                    'reportingDt',
                    'uuid'
                ],
                'required',
            ],
            [
                [
                    'accountRating',
                    'accountRatingDate',
                    'acctType',
                    'amtPastDue',
                    'bankGuaranteeIndicatorCode',
                    'creditLimit',
                    'curBalanceAmt',
                    'guarantorIndicatorCode',
                    'interestPaymentDueDate',
                    'lastPaymtDt',
                    'otherAmtPastDue',
                    'otherAmtOutstanding',
                    'paymentDueDate',
                    'paymentPatternValue',
                    'principalOutstanding',
                    'principalPastDue',
                ],
                'required',
                'when' => function (Trade $model) {
                    return $model->isBorrower();
                },
            ],
            [
                [
                    'bankGuaranteeAmt',
                    'bankGuaranteeTerm',
                    'bankGuaranteeVolumeCode',
                ],
                'required',
                'when' => function (Trade $model) {
                    return $model->isBorrower() && $model->bankGuaranteeIndicatorCode === BankGuarantee::CODE_YES;
                },
            ],
            [
                [
                    'collateralCode',
                    'collateralValue',
                    'collateralDate',
                    'collateralExpirationDate',
                ],
                'required',
                'when' => function (Trade $model) {
                    return $model->isBorrower() && $model->issetCollateral();
                },
            ],
            [
                [
                    'guaranteeVolumeCode',
                    'guaranteeAmt',
                    'guaranteeTerm',
                ],
                'required',
                'when' => function (Trade $model) {
                    return $model->guarantorIndicatorCode === Guarantor::CODE_YES;
                },
            ],
            [
                [
                    'rightOfClaimID',
                    'rightOfClaimINN',
                    'rightOfClaimName',
                    'rightOfClaimSNILS',
                ],
                'required',
                'when' => function (Trade $model) {
                    return $model->accountRating === AccountRating::ACCOUNT_CLOSED_TRANSFERED;
                },
            ],
        ];
    }
    
    /**
     * @return array
     */
    public function rules()
    {
        return array_merge(parent::rules(), $this->rangeRules(), $this->requiredRules(), [
            [
                [
                    'amtOutstanding',
                    'amtPastDue',
                    'bankGuaranteeAmt',
                    'collateralValue',
                    'creditLimit',
                    'curBalanceAmt',
                    'guaranteeAmt',
                    'intOutstanding',
                    'intPastDue',
                    'monthsReviewed',
                    'numDays30',
                    'numDays60',
                    'numDays90',
                    'otherAmtOutstanding',
                    'principalOutstanding',
                    'principalPastDue',
                    'serialNum',
                    'termsAmt',
                ],
                'integer',
            ],
            [
                [
                    'acctNum',
                ],
                'string',
                'max' => 35,
            ],
            [
                [
                    'creditTotalAmt',
                ],
                'string',
                'max' => 10,
            ],
            [
                [
                    'creditTotalMonetaryAmt',
                ],
                'string',
                'max' => 15,
            ],
            [
                [
                    'rightOfClaimID',
                    'uuid',
                    'paymentPatternValue',
                    'paymtPat'
                ],
                'string',
            ],
            [
                [
                    'accountRatingDate',
                    'bankGuaranteeTerm',
                    'closedDt',
                    'collateralDate',
                    'collateralExpirationDate',
                    'graceEndDt',
                    'guaranteeTerm',
                    'interestPaymentDueDate',
                    'lastPaymtDt',
                    'lastUpdatedDt',
                    'openedDt',
                    'paymentDueDate',
                    'paymtPatStartDt',
                    'reportingDt',
                    'completePerformDt'
                ],
                'date',
                'format' => 'yyyy-MM-dd',
            ],
        ]);
    }
    
    /**
     * @return mixed
     * @throws \Exception
     */
    public function getAccountRatingText()
    {
        return AccountRating::getText($this->accountRating);
    }
    
    /**
     * @return mixed
     * @throws \Exception
     */
    public function getAcctTypeText()
    {
        return AccountType::getText($this->acctType);
    }
    
    /**
     * @return bool
     */
    public function isBorrower()
    {
        return $this->ownerIndic === AccountRelationship::INDIVIDUAL || $this->ownerIndic === AccountRelationship::BUSINESS;
    }
    
    /**
     * @return mixed
     * @throws \Exception
     */
    public function getBankGuaranteeIndicatorCodeText()
    {
        return ArrayHelper::getValue(
            BankGuarantee::bankGuaranteeIndicatorCodeList(),
            $this->bankGuaranteeIndicatorCode
        );
    }
    
    /**
     * @return mixed
     * @throws \Exception
     */
    public function getBankGuaranteeVolumeCodeText()
    {
        return ArrayHelper::getValue(BankGuarantee::bankGuaranteeVolumeCodeList(), $this->bankGuaranteeVolumeCode);
    }
    
    /**
     * @return mixed
     * @throws \Exception
     */
    public function getCollateral2Text()
    {
        return ArrayHelper::getValue(Collateral::collateralCodeList(), $this->collateralCode);
    }
    
    /**
     * @return bool
     */
    private function issetCollateral()
    {
        return !empty($this->collateralValue)
            || !empty($this->collateralCode)
            || !empty($this->collateralDate)
            || !empty($this->collateralExpirationDate);
    }
    
    /**
     * @return mixed
     * @throws \Exception
     */
    public function getGuaranteeVolumeCodeText()
    {
        return ArrayHelper::getValue(Guarantor::guaranteeVolumeCodeList(), $this->guaranteeVolumeCode);
    }
    
    /**
     * @return mixed
     * @throws \Exception
     */
    public function getGuarantorIndicatorCodeText()
    {
        return ArrayHelper::getValue(Guarantor::codeList(), $this->guarantorIndicatorCode);
    }
    
    /**
     * @return mixed
     * @throws \Exception
     */
    public function getInterestPaymentFrequencyText()
    {
        return PaymentFrequency::getText($this->interestPaymentFrequencyCode);
    }
    
    /**
     * @return mixed
     * @throws \Exception
     */
    public function getOwnerIndicText()
    {
        return AccountRelationship::getText($this->ownerIndic);
    }
}
