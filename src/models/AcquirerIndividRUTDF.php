<?php

namespace mfteam\nbch\models;

/**
 * Сведения о приобретателе прав – физическом лице
 */
class AcquirerIndividRUTDF extends BaseItem
{
    /**
     * @var string $rightOfClaimLastName
     */
    public $rightOfClaimLastName;
    
    /**
     * @var string $rightOfClaimFirstName
     */
    public $rightOfClaimFirstName;
    
    /**
     * @var string $rightOfClaimMiddleName
     */
    public $rightOfClaimMiddleName;
    
    /**
     * @var \DateTime $rightOfClaimBirthDt
     */
    public $rightOfClaimBirthDt;
    
    /**
     * @var string $rightOfClaimPlaceOfBirth
     */
    public $rightOfClaimPlaceOfBirth;
    
    /**
     * @var int $rightOfClaimTaxpayerIDCode
     */
    public $rightOfClaimTaxpayerIDCode;
    
    /**
     * @var string $rightOfClaimTaxpayerID
     */
    public $rightOfClaimTaxpayerID;
    
    /**
     * @var string $rightOfClaimSNILS
     */
    public $rightOfClaimSNILS;
    
    /**
     * @var string $rightOfClaimIdType
     */
    public $rightOfClaimIdType;
    
    /**
     * @var string $rightOfClaimOtherId
     */
    public $rightOfClaimOtherId;
    
    /**
     * @var string $rightOfClaimIdSeries
     */
    public $rightOfClaimIdSeries;
    
    /**
     * @var string $rightOfClaimIdNum
     */
    public $rightOfClaimIdNum;
    
    /**
     * @var \DateTime $rightOfClaimIdIssueDt
     */
    public $rightOfClaimIdIssueDt;
    
    /**
     * @var string $rightOfClaimIdIssueAuthority
     */
    public $rightOfClaimIdIssueAuthority;
    
    /**
     * @var string $rightOfClaimIdDivCode
     */
    public $rightOfClaimIdDivCode;
    
    /**
     * @var \DateTime $rightOfClaimDt
     */
    public $rightOfClaimDt;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum;
}