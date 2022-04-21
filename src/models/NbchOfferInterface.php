<?php

namespace mfteam\nbch\models;

/**
 * Договор займа\лизинга
 */
interface NbchOfferInterface
{
    /**
     * Поиск договора по уникальному идентификатору внутри системы
     * @param string $uuid
     * @return NbchOfferInterface
     */
    public static function findByUuid(string $uuid):NbchOfferInterface;
    
    /**
     * Уникальный идентификатор договора внутри системы
     * @return string
     */
    public function getUuid():string;
    
    /**
     * Поручители
     * @return Guarantor[]
     */
    public function getGuarantors():array;
    
    /**
     * Залоги
     * @return Collateral[]
     */
    public function getCollaterals(): array;
    
    /**
     * Платежи
     * @return Payment[]
     */
    public function getPayments(): array;
    
    /**
     * Банковские гарантии
     * @return BankGuarantee[]
     */
    public function getBankGuarantees(): array;
    
    /**
     * Информация по договору
     * @return Trade
     */
    public function getTrade(): Trade;
}