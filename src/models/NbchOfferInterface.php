<?php

namespace mfteam\nbch\models;

/**
 * Договор займа\лизинга
 * @deprecated
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
    public function getGuarantorArray():array;
    
    /**
     * Залоги
     * @return Collateral[]
     */
    public function getCollateralArray(): array;
    
    /**
     * Платежи
     * @return Payment[]
     */
    public function getPaymentArray(): array;
    
    /**
     * Банковские гарантии
     * @return BankGuarantee[]
     */
    public function getBankGuaranteeArray(): array;
    
    /**
     * Информация по договору
     * @return Trade
     */
    public function getTrade(): Trade;
}