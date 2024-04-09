<?php

namespace mfteam\nbch\models;

/**
 * Субъект по которому составляется отчет
 * @deprecated
 */
interface NbchSubjectInterface
{
    /**
     * ЮЛ
     */
    public const SUBJECT_TYPE_LEGAL = 'legal';
    
    /**
     * ИП
     */
    public const SUBJECT_TYPE_IP = 'ip';
    
    /**
     * ФЛ
     */
    public const SUBJECT_TYPE_PERSON = 'person';
    
    /**
     * Субъект заёмщик
     */
    public const OFFER_RELATION_TYPE_BORROWER = 'borrower';
    
    /**
     * Субъект поручитель
     */
    public const OFFER_RELATION_TYPE_GUARANTOR = 'guarantor';
    
    /**
     * Адрес фактического местожительства/Фактический адрес (только для юрлиц)
     * @return Address
     */
    public function getActualAddress():Address;
    
    /**
     * Адрес регистрации/Юридический адрес
     * @return Address
     */
    public function getLegalAddress():Address;
    
    /**
     * Рабочий телефон
     * @return Phone|null
     */
    public function getWorkPhone():?Phone;
    
    /**
     * Остальные телефоны
     * @return Phone[]
     */
    public function getPhones():array;
    
    /**
     * Тип субъекта
     * @return string
     */
    public function getSubjectType():string;
    
    /**
     * Отношение субъекта к договору займа
     * @return string
     */
    public function getOfferRelationType():string;
    
    /**
     * ИНН субъекта
     * @return string|null
     */
    public function getInn():?string;
    
    /**
     * Является ИП
     * @return bool
     */
    public function isIp():bool;
    
    /**
     * Является ЮЛ
     * @return bool
     */
    public function isLegal():bool;
    
    /**
     * Является ФЛ
     * @return bool
     */
    public function isPerson():bool;
    
    /**
     * ОГРН
     * @return string|null
     */
    public function getOgrn():?string;
    
    /**
     * СНИЛС
     * @return string|null
     */
    public function getSnils():?string;
    
    /**
     * @return NbchSubjectPassportInterface|null
     */
    public function getPassport():?NbchSubjectPassportInterface;
    
    /**
     * Данные по ФЛ или ИП
     * @return Person|null
     */
    public function getPerson():?Person;
    
    /**
     * Данные о юридическом лице
     * @return Business|null
     */
    public function getBusiness():?Business;
    
    /**
     * Дата регистрации бизнеса
     * @return string
     */
    public function getRegDate(): string;
    
    /**
     * Признак специального налогового режима 0 или 1
     * @return int
     */
    public function getSpecialTax(): int;
}