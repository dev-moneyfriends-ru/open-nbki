<?php

namespace mfteam\nbch\models;

/**
 * Сведения о судебном споре или требовании по обязательству
 */
class LegalItemsRUTDF extends BaseItem
{
    /**
     * @var int $hasCourtAct
     */
    public $hasCourtAct = null;
    
    /**
     * @var \DateTime $courtActDt
     */
    public $courtActDt = null;
    
    /**
     * @var string $courtActNum
     */
    public $courtActNum = null;
    
    /**
     * @var string $resolution
     */
    public $resolution = null;
    
    /**
     * @var int $courtActEffectCode
     */
    public $courtActEffectCode = null;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum = null;
}