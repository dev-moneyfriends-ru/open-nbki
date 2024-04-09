<?php

namespace mfteam\nbch\models;

/**
 * Дополнительные параметры запроса в НБКИ
 * @deprecated
 * @see InquiryReq
 */
class Inquiry extends BaseItem
{
    /**
     * Согласие на получение данных
     * @var Consent|null
     */
    public $consent = null;
    
    /**
     * Код цели для запроса, возможные значения inqPurposeList
     * @var string
     */
    public $inqPurpose = 11;
    
    /**
     * Сумма займа
     * @var int
     */
    public $inqAmount;
    
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
        return $this->consent;
    }
    
    /**
     * @param Consent $consent
     * @return Inquiry
     */
    public function setConsent(Consent $consent): Inquiry
    {
        $this->consent = $consent;
        return $this;
    }
    
    /**
     * @return array
     */
    public static function inqPurposeList(): array
    {
        return [
            1 => 'Потребительский заем (кредит) на приобретение автомобиля',
            2 => 'Потребительский микрозаем',
            3 => 'Потребительский заем (кредит) нецелевой',
            4 => 'Потребительский заем (кредит) с расходным лимитом (кредитная линия, овердрафт)',
            5 => 'Иной потребительский заем (кредит), в том числе потребительский заем (кредит) на приобретение жилья, обязательства заемщика по которому обеспечены ипотекой',
            6 => 'Поручительство гражданина-потребителя',
            7 => 'Ипотека (в смысле залога), предоставленная гражданином-потребителем',
            8 => 'Иной залог, предоставленный гражданином-потребителем',
            9 => 'Иной потребительский договор',
            10 => 'Заем (кредит) на развитие бизнеса',
            11 => 'Заем (кредит) на пополнение оборотных средств',
            12 => 'Заем (кредит) на покупку оборудования',
            13 => 'Заем (кредит) на строительство',
            14 => 'Заем (кредит) на приобретение ценных бумаг',
            15 => 'Иной заем (кредит)',
            16 => 'Лизинг',
            17 => 'Независимая гарантия',
            18 => 'Поручительство',
            19 => 'Страхование',
            20 => 'Ипотека (в смысле залога)',
            21 => 'Иной залог',
            22 => 'Иной договор',
            23 => 'Кредитный мониторинг в рамках действующего договора',
            24 => 'Прием на работу',
            25 => 'Маркетинговые исследования',
            26 => 'Научные исследования',
            27 => 'Контроль данных',
            99 => 'Иное',
        ];
    }
}