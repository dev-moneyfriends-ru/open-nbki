<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Bank guarantee information is delivered via B2B, Bulk, and Web (Screen/PDF) channels.
 * This information maps to the TUTDF bank Guarantee (BG) segment.
 * @deprecated
 */
class BankGuarantee extends BaseItem
{
    /**
     * Полностью
     */
    public const GUARANTEE_VOLUME_FULL = 'F';
    
    /**
     * Частично
     */
    public const GUARANTEE_VOLUME_PART = 'P';
    
    public const CODE_YES = 'B';
    
    public const CODE_NO = 'N';
    /**
     * Сумма банковской гарантии
     * @var int
     */
    public $bankGuaranteeAmt;
    
    /**
     * Срок предоставленной гарантии.
     * @var string
     */
    public $bankGuaranteeTerm;
    
    /**
     * @var string
     */
    public $bankGuaranteeVolumeCode;
    
    /**
     * Информация о прекращении банковской гарантии в иных, отличных от окончания срока гарантии случаях
     * @var string
     */
    public $bankGuaranteeOtherTermination;
    
    /**
     * Код валюты
     * @var string
     */
    public $currencyCode = 'RUB';
    
    /**
     * Флаг о наличии банковской гарантии
     * Допустимые значения:
     * B = есть банковская гарантия
     * N = нет гарантии
     * @var string
     */
    public $bankGuaranteeIndicatorCode;
    
    /**
     * @var string
     */
    public $agreementNumber;
    
    /**
     * @var string
     */
    public $guaranteeVolumeCode;
    
    /**
     * @return array
     */
    public function rules()
    {
        return [
            [
                [
                    'bankGuaranteeAmt',
                    'bankGuaranteeTerm',
                    'bankGuaranteeVolumeCode',
                    'currencyCode'
                ],
                'required',
            ],
            [
                [
                    'bankGuaranteeAmt',
                ],
                'integer',
            ],
            [
                [
                    'bankGuaranteeTerm'
                ],
                'date',
                'format' => 'yyyy-MM-dd'
            ],
            [
                'bankGuaranteeVolumeCode',
                'in',
                'range' => array_keys(self::bankGuaranteeVolumeCodeList())
            ],
            [
                [
                    'currencyCode',
                    'bankGuaranteeOtherTermination',
                    'agreementNumber'
                ],
                'string',
            ],
        ];
    }
    
    /**
     * @return string[]
     */
    public static function bankGuaranteeVolumeCodeList(): array
    {
        return [
            self::GUARANTEE_VOLUME_FULL => 'Полностью',
            self::GUARANTEE_VOLUME_PART => 'Частично',
        ];
    }
    
    /**
     * @return mixed
     * @throws \Exception
     */
    public function getBankGuaranteeVolumeCodeText()
    {
        return ArrayHelper::getValue(self::bankGuaranteeVolumeCodeList(), $this->guaranteeVolumeCode);
    }
    
    /**
     * @return string[]
     */
    public static function bankGuaranteeIndicatorCodeList()
    {
        return [
            self::CODE_YES => 'есть банковская гарантия',
            self::CODE_NO => 'нет гарантии'
        ];
    }
}