<?php

namespace mfteam\nbch\models;

abstract class BasePersonReply extends BaseItem
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
     * @var string $customerType
     */
    public $customerType = '';
    
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
     * @var string $name2
     */
    public $name2 = '';
    
    /**
     * @var string $name3
     */
    public $name3 = '';
    
    /**
     * @var string $middle
     */
    public $middle = '';
    
    /**
     * @var string $suffix
     */
    public $suffix = '';
    
    /**
     * @var string $suffixText
     */
    public $suffixText = '';
    
    /**
     * @var string $gender
     */
    public $gender = '';
    
    /**
     * @var string $genderText
     */
    public $genderText = '';
    
    /**
     * @var string $title
     */
    public $title = '';
    
    /**
     * @var string $nationality
     */
    public $nationality = '';
    
    /**
     * @var string $nationalityText
     */
    public $nationalityText = '';
    
    /**
     * @var string $spouseName
     */
    public $spouseName = '';
    
    /**
     * @var string $occupation
     */
    public $occupation = '';
    
    /**
     * @var string $occupationText
     */
    public $occupationText = '';
    
    /**
     * @var string $consentToEnquire
     */
    public $consentToEnquire = '';
    
    /**
     * @var string $consentToEnquireText
     */
    public $consentToEnquireText = '';
    
    /**
     * @var string $oldSurname
     */
    public $oldSurname = '';
    
    /**
     * @var string $oldFirstName
     */
    public $oldFirstName = '';
    /**
     * @var string $deceasedDt
     */
    public $deceasedDt = '';
    
    /**
     * @var string $maritalStatus
     */
    public $maritalStatus = '';
    
    /**
     * @var string $maritalStatusText
     */
    public $maritalStatusText = '';
    
    /**
     * @var int $numDependants
     */
    public $numDependants = null;
    
    /**
     * @var string $deathFlag
     */
    public $deathFlag = '';
    
    /**
     * @var string $countryBirth
     */
    public $countryBirth = '';
    
    /**
     * @var string $countryBirthText
     */
    public $countryBirthText = '';
    
    /**
     * @var string $dataValidity
     */
    public $dataValidity = '';
}