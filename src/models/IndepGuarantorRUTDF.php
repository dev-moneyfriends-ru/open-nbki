<?php

namespace mfteam\nbch\models;

/**
 * Сведения о независимой гарантии
 */
class IndepGuarantorRUTDF extends BaseItem
{
    /**
     * @var string $indepGuaranteeUuid
     */
    public $indepGuaranteeUuid = null;
    
    /**
     * @var string $indepGuaranteeVolume
     */
    public $indepGuaranteeVolume = null;
    
    /**
     * @var string $currencyCode
     */
    public $currencyCode = null;
    
    /**
     * @var \DateTime $indepGuaranteeDt
     */
    public $indepGuaranteeDt = null;
    
    /**
     * @var \DateTime $indepGuaranteeExpirationDate
     */
    public $indepGuaranteeExpirationDate = null;
    
    /**
     * @var \DateTime $indepGuaranteeFactExpirationDate
     */
    public $indepGuaranteeFactExpirationDate = null;
    
    /**
     * @var string $indepGuaranteeEndReason
     */
    public $indepGuaranteeEndReason = null;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum = null;
    
}