<?php

namespace mfteam\nbch\models;

abstract class BaseIdReply extends BaseItem
{
    /**
     * @var string $srcCountryCode
     */
    public $srcCountryCode = '';
    
    /**
     * @var string $srcCountryCodeText
     */
    public $srcCountryCodeText = '';
    
    /**
     * @var string $memberCode
     */
    public $memberCode = '';
    
    /**
     * @var string $memberTypeText
     */
    public $memberTypeText = '';
    
    /**
     * @var string $memberNameText
     */
    public $memberNameText = '';
    
    /**
     * @var string $memberContactText
     */
    public $memberContactText = '';
    
    
    /**
     * @var string $documentNumber
     */
    public $documentNumber = '';
    
    /**
     * @var string $issueCountry
     */
    public $issueCountry = '';
    
    /**
     * @var string $dataValidity
     */
    public $dataValidity = '';
    
    /**
     * @var int $spectaxCode
     */
    public $spectaxCode = null;
    
    /**
     * @var string $idType2
     */
    public $idType2 = '';
}