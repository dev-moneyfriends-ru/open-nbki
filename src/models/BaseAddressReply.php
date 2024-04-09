<?php

namespace mfteam\nbch\models;


/**
 *
 */
abstract class BaseAddressReply extends BaseItem
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
     * @var string $resStat
     */
    public $resStat = '';
    
    /**
     * @var string $resStatText
     */
    public $resStatText = '';
    
    /**
     * @var string $line1
     */
    public $line1 = '';
    
    /**
     * @var string $line2
     */
    public $line2 = '';
    
    /**
     * @var string $line3
     */
    public $line3 = '';
    
    /**
     * @var string $line4
     */
    public $line4 = '';
    
    /**
     * @var string $subDistrict
     */
    public $subDistrict = '';
    
    /**
     * @var string $district
     */
    public $district = '';
    
    /**
     * @var string $streetType
     */
    public $streetType = '';
    
    /**
     * @var string $streetTypeText
     */
    public $streetTypeText = '';
    
    /**
     * @var string $city
     */
    public $city = '';
    
    /**
     * @var string $prov
     */
    public $prov = '';
    
    /**
     * @var string $provText
     */
    public $provText = '';
    
    /**
     * @var string $countryCode
     */
    public $countryCode = '';
    
    /**
     * @var string $countryCodeText
     */
    public $countryCodeText = '';
    
    /**
     * @var string $addressTypeText
     */
    public $addressTypeText;
    
    /**
     * @var string $reportedDate
     */
    public $reportedDate;
}