<?php

namespace mfteam\nbch\models;

/**
 * Payment information is delivered via B2B, Bulk, and Web (Screen/PDF) channels.
 * This information maps to the TUTDF Payments (PA) segment.
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
     * @var int
     */
    public $paymtAmt;
    
    /**
     * Сумма произведенного платежа, за исключением просроченных платежей сроком свыше 30 дней
     * @var int
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
    
    public function rules()
    {
        return array_merge(parent::rules(), [
            [
                [
                    'acctSerialNum',
                    'm24Total',
                    'paymtAmt',
                    'paymtAmtDue',
                ],
                'integer',
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
                    'paymtAmtDue',
                    'paymtDate',
                    'paymtVolume',
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
}