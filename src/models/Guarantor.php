<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Guarantor information is delivered via B2B, Bulk, and Web (Screen/PDF) channels.
 * This information maps to the TUTDF Guarantor (GR) segment.
 *
 * @property-read mixed $guaranteeVolumeCodeText
 * @deprecated
 * @see GuarantorRUTDF
 */
class Guarantor extends BaseItem
{
    /**
     * Полностью
     */
    public const GUARANTEE_VOLUME_FULL = 'F';
    
    /**
     * Частично
     */
    public const GUARANTEE_VOLUME_PART = 'P';
    
    public const CODE_YES = 'G';
    
    public const CODE_NO = 'N';
    
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
     * Код валюты
     * @var string
     */
    public $currencyCode = 'RUB';
    
    /**
     * @var string $guaranteeUuid
     */
    public $guaranteeUuid = null;
    
    /**
     * @var string $guaranteeVolume
     */
    public $guaranteeVolume = null;
    
    /**
     * @var string $guaranteeAgreementDt
     */
    public $guaranteeAgreementDt = null;
    
    /**
     * @var string $guaranteeExpirationDate
     */
    public $guaranteeExpirationDate = null;
    
    /**
     * @var string $guaranteeFactExpirationDate
     */
    public $guaranteeFactExpirationDate = null;
    
    /**
     * @var string $guaranteeEndReason
     */
    public $guaranteeEndReason = null;
    
    /**
     * @var string $agreementNumber
     */
    public $agreementNumber = null;
    
    /**
     * @var string $guarantorIndicatorCode
     */
    public $guarantorIndicatorCode = null;
    
    /**
     * @var string $guarantorIndicatorCodeText
     */
    public $guarantorIndicatorCodeText = null;
    
    /**
     * @var string $guaranteeVolumeCodeText
     */
    public $guaranteeVolumeCodeText = null;
    
    public function rules()
    {
        return array_merge(parent::rules(), [
            [
                [
                    'guaranteeAmt',
                    'guaranteeTerm',
                    'guaranteeVolumeCode',
                    'currencyCode'
                ],
                'required',
            ],
            [
                [
                    'guaranteeAmt',
                ],
                'integer',
            ],
            [
                [
                    'guaranteeTerm',
                ],
                'date',
                'format' => 'yyyy-MM-dd',
            ],
            [
                'guaranteeVolumeCode',
                'in',
                'range' => array_keys(self::guaranteeVolumeCodeList())
            ],
            [
                [
                    'currencyCode',
                ],
                'string',
            ],
        ]);
    }
    
    /**
     * @return string[]
     */
    public static function guaranteeVolumeCodeList(): array
    {
        return [
            self::GUARANTEE_VOLUME_FULL => 'Полностью',
            self::GUARANTEE_VOLUME_PART => 'Частично',
        ];
    }
    
    /**
     * @return string[]
     */
    public static function codeList(): array
    {
        return [
            self::CODE_YES => 'есть банковская гарантия',
            self::CODE_NO => 'нет гарантии',
        ];
    }
    
    /**
     * @return mixed
     * @throws \Exception
     */
    public function getGuaranteeVolumeCodeText()
    {
        return ArrayHelper::getValue(self::guaranteeVolumeCodeList(), $this->guaranteeVolumeCode);
    }
}