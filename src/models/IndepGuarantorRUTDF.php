<?php

namespace mfteam\nbch\models;

/**
 * Сведения о независимой гарантии
 */
class IndepGuarantorRUTDF extends BaseItem
{
    /**
     * УИд независимой гарантии.
     * Заполняется, если по обязательству принципала формируется КИ. Значение указанного показателя должно соответствовать значению показателя
     * 17.1 «УИд сделки» блока 17 в КИ принципала – физического лица или показателя 10.1 «УИд сделки» блока 10 в КИ принципала – юридического лица.
     * Для прочих договоров УИд допустимо не присваивать.
     * Для корректной идентификации такого договора без УИд передайте его произвольный уникальный идентификатор в показателе 0.4 блока 0_GROUPHEADER как значение ключа indepguar_num.
     * Идентификатор будет использован как ключевое поле.
     * @var string $indepGuaranteeUuid
     */
    public $indepGuaranteeUuid = '';
    
    /**
     * Сумма независимой гарантии
     * @var float $indepGuaranteeVolume
     */
    public $indepGuaranteeVolume;
    
    /**
     * Валюта независимой гарантии
     * @var string $currencyCode
     */
    public $currencyCode = 'RUB';
    
    /**
     * Дата выдачи независимой гарантии
     * @var string $indepGuaranteeDt
     */
    public $indepGuaranteeDt = '';
    
    /**
     * Дата окончания независимой гарантии согласно ее условиям
     * @var string $indepGuaranteeExpirationDate
     */
    public $indepGuaranteeExpirationDate = '';
    
    /**
     * Дата фактического прекращения независимой гарантии
     * @var string $indepGuaranteeFactExpirationDate
     */
    public $indepGuaranteeFactExpirationDate = '';
    
    /**
     * Код причины прекращения независимой гарантии
     * 1    Обеспечивающее обязательство прекращено в связи с надлежащим исполнением основного обязательства
     * 2    Обеспечивающее обязательство прекращено в счет погашения требований кредитора по основному обязательству
     * 3    Залог прекращен в связи с гибелью или утратой заложенного имущества
     * 99    Обеспечивающее обязательство прекращено на ином основании
     * @var string $indepGuaranteeEndReason
     */
    public $indepGuaranteeEndReason = '';
}