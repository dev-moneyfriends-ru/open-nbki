<?php

namespace mfteam\nbch\models;

/**
 * Дополнительные параметры запроса в НБКИ
 */
class Inquiry extends BaseItem
{
    /**
     * Согласие на получение данных
     * @var Consent|null
     */
    private $_consent = null;
    
    /**
     * Код цели для запроса, вщзможные значения inqPurposeList
     * @var string
     */
    public $inqPurpose = '51';
    
    /**
     * Сумма займа
     * @var int
     */
    public $inqAmount = 0;
    
    /**
     * Код валюты
     * @var string
     */
    public $currencyCode = 'RUB';
    
    public function attributeLabels()
    {
        return array_merge(
            parent::attributeLabels(),
            [
                'consent' => 'Согласие',
                'inqPurpose' => 'Код цели запроса',
                'inqAmount' => 'Сумма займа',
                'currencyCode' => 'Код валюты'
            ]
        );
    }
    
    
    public function rules()
    {
        return array_merge(
            parent::rules(),
            [
                ['inqPurpose', 'in', 'range' => array_keys(self::inqPurposeList())],
                [['inqAmount'], 'integer'],
                [['currencyCode'], 'string'],
            ]
        );
    }
    
    /**
     * @return Consent|null
     */
    public function getConsent(): ?Consent
    {
        return $this->_consent;
    }
    
    /**
     * @param Consent $_consent
     * @return Inquiry
     */
    public function setConsent(Consent $_consent): Inquiry
    {
        $this->_consent = $_consent;
        return $this;
    }
    
    /**
     * @return array
     */
    public static function inqPurposeList(): array
    {
        return [
            '01' => 'Auto Loan',
            '04' => 'Leasing',
            '06' => 'Mortgage',
            '07' => 'Credit Card',
            '09' => 'Consumer Credit',
            '10' => 'For development of business',
            '11' => 'For enlarging circulating assets',
            '12' => 'For equipment purchase',
            '13' => 'For building real estate',
            '14' => 'For securities purchase',
            '15' => 'Interbank credit',
            '16' => 'Microcredit',
            '50' => 'Account Review',
            '51' => 'Loan granting',
        ];
    }
}