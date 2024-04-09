<?php

namespace mfteam\nbch\models;

/**
 * Payment information is delivered via B2B, Bulk, and Web (Screen/PDF) channels.
 * This information maps to the TUTDF Payments (PA) segment.
 * @deprecated
 */
class Payment extends BaseItem
{
    /**
     * Полностью
     */
    public const PAYMENT_VOL_FULL = 'F';
    
    /**
     * Частично
     */
    public const PAYMENT_VOL_PART = 'P';
    /**
     * Платеж внесен в полном размере
     */
    public const AMT_KEEP_CODE_FULL = 1;
    
    /**
     * Платеж внесен не в полном размере
     */
    public const AMT_KEEP_CODE_PART = 2;
    
    /**
     * Платеж не внесен
     */
    public const AMT_KEEP_CODE_NONE = 3;
    
    /**
     * The unique ID of the parental trade record.
     * @var int
     */
    public $acctSerialNum;
    
    /**
     * Валюта платежа
     * @var string
     */
    public $currencyCode = 'RUB';
    
    /**
     * Суммарный размер фактических платежей за 24 календарных месяца за исключением просроченных платежей сроком свыше 30 дней
     * @var int
     */
    public $m24Total;
    
    /**
     * Сумма произведенного платежа
     * @var float
     */
    public $paymtAmt;
    
    /**
     * Сумма последнего внесенного платежа по основному долгу
     * @var float
     */
    public $principalPaymtAmt;
    
    /**
     * Сумма последнего внесенного платежа по процентам
     * @var float
     */
    public $intPaymtAmt;
    
    /**
     * Сумма внесенных платежей по иным требованиям
     * @var float
     */
    public $otherPaymtAmt;
    
    /**
     * Сумма произведенного платежа, за исключением просроченных платежей сроком свыше 30 дней
     * @var int
     * @deprecated
     */
    public $paymtAmtDue;
    
    /**
     * Дата платежа
     * @var string
     */
    public $paymtDate;
    
    /**
     * Объем, в котором произведен платеж в соответствии с договором займа
     * @var string
     */
    public $paymtVolume = self::PAYMENT_VOL_FULL;
    
    /**
     * @var string
     */
    public $amtKeepCode = self::AMT_KEEP_CODE_FULL;
    
    public function rules()
    {
        return array_merge(parent::rules(), [
            [
                [
                    'acctSerialNum',
                    'm24Total',
                    'paymtAmt',
                    'paymtAmtDue',
                    'principalPaymtAmt',
                    'intPaymtAmt',
                    'otherPaymtAmt'
                ],
                'number',
            ],
            [
                [
                    'currencyCode',
                ],
                'string',
            ],
            [
                [
                    'currencyCode',
                    'm24Total',
                    'paymtAmt',
                    'paymtDate',
                    'paymtVolume',
                    'principalPaymtAmt',
                    'intPaymtAmt',
                    'otherPaymtAmt'
                ],
                'required',
            ],
            [
                [
                    'paymtDate',
                ],
                'date',
                'format' => 'yyyy-MM-dd',
            ],
            [
                'paymtVolume',
                'in',
                'range' => array_keys(self::paymentVolumeList())
            ]
        ]);
    }
    
    /**
     * @return string[]
     */
    public static function paymentVolumeList(): array
    {
        return [
            self::PAYMENT_VOL_FULL => 'Полностью',
            self::PAYMENT_VOL_PART => 'Частично',
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'paymtAmt' => 'Сумма произведенного платежа',
            'paymtDate' => 'Сумма внесенного платежа',
            'principalPaymtAmt' => 'Сумма внесенного платежа по основному долгу',
            'intPaymtAmt' => 'Сумма внесенного платежа по процентам',
            'otherPaymtAmt' => 'Сумма внесенного платежа по иным требованиям'
        ];
    }
}