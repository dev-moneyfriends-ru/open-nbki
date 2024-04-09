<?php


namespace mfteam\nbch\models;

/**
 * Name information is delivered via B2B, Bulk, and Web (Screen/PDF) channels.
 * This information maps to the TUTDF Name (NA) segment.
 * @property mixed $fullName
 * @deprecated
 */
class Person extends BaseItem
{
    /**
     * Дата рождения
     * @var string
     */
    public $birthDt;
    
    /**
     * имя
     * @var string
     */
    public $first;
    
    /**
     * Код пола
     * @var int
     */
    public $gender;
    
    /**
     * Пол пользователя
     * @var string
     */
    public $genderText;
    
    /**
     * Фамилия
     * @var string
     */
    public $name1;
    
    /**
     * Отчество
     * @var string
     */
    public $paternal;
    
    /**
     * Место рождения
     * @var string
     */
    public $placeOfBirth;
    
    /**
     * @var int Семейное положение id
     */
    public $maritalStatus;
    
    /**
     * @var string Семейное положение
     */
    public $maritalStatusText;
    
    /**
     * @var string
     */
    public $nationality;
    
    /**
     * @var string
     */
    public $nationalityText;
    
    /**
     * Кол-во иждевенцев
     * @var string
     */
    public $numDependants;
    
    public $deathFlag;
    
    /**
     * Код страны по ОКСМ
     * @var string
     */
    public $oksm;
    
    /**
     * @var string $srcCountryCode
     */
    public $srcCountryCode;
    
    /**
     * @var string $srcCountryCodeText
     */
    public $srcCountryCodeText;
    
    /**
     * @var string $customerType
     */
    public $customerType;
    
    /**
     * @var string $memberCode
     */
    public $memberCode;
    
    /**
     * @var string $memberTypeText
     */
    public $memberTypeText;
    
    /**
     * @var string $memberNameText
     */
    public $memberNameText;
    
    /**
     * @var string $memberContactText
     */
    public $memberContactText;
    
    /**
     * @var \DateTime $fileSinceDt
     */
    public $fileSinceDt;
    
    /**
     * @var string $name2
     */
    public $name2;
    
    /**
     * @var string $name3
     */
    public $name3;
    
    /**
     * @var string $middle
     */
    public $middle;
    
    /**
     * @var string $oldSurname
     */
    public $oldSurname;
    
    /**
     * @var string $oldFirstName
     */
    public $oldFirstName;
    
    /**
     * @var string $suffix
     */
    public $suffix;
    
    /**
     * @var string $suffixText
     */
    public $suffixText;
    
    /**
     * @var string $title
     */
    public $title;
    
    /**
     * @var string $spouseName
     */
    public $spouseName;
    
    /**
     * @var string $occupation
     */
    public $occupation;
    
    /**
     * @var string $occupationText
     */
    public $occupationText;
    
    /**
     * @var string $consentToEnquire
     */
    public $consentToEnquire;
    
    /**
     * @var string $consentToEnquireText
     */
    public $consentToEnquireText;
    
    /**
     * @var \DateTime $deceasedDt
     */
    public $deceasedDt;
    
    /**
     * @var string $countryBirth
     */
    public $countryBirth;
    
    /**
     * @var string $countryBirthText
     */
    public $countryBirthText;
    
    /**
     * @var \DateTime $lastUpdatedDt
     */
    public $lastUpdatedDt;
    
    /**
     * @var string $dataValidity
     */
    public $dataValidity;
    
    /**
     * @var int $isPrevName
     */
    public $isPrevName;
    
    /**
     * @var \DateTime $issueDate
     */
    public $issueDate;
    
    
    public static function maritalStatusList()
    {
        return [
            1 => 'Не женат/не замужем',
            2 => 'Женат/замужем',
            3 => 'Вдовец/вдова',
            4 => 'В разводе/Проживает раздельно',
            5 => 'Повторный брак',
            6 => 'Другое',
            99 => 'Вопрос не отвечен',
            98 => 'Вопрос не задавался',
        ];
    }
    
    public function rules()
    {
        return array_merge(
            parent::rules(),
            [
                [['birthDt'], 'date', 'format' => 'yyyy-MM-dd'],
                [[
                    'first',
                    'genderText',
                    'name1',
                    'paternal',
                    'placeOfBirth',
                    'maritalStatusText',
                    'nationalityText',
                    'nationality',
                    'numDependants',
                    'oksm'
                ], 'string'],
                ['gender', 'in', 'range' => array_keys(self::genderList())],
                ['maritalStatus', 'in', 'range' => array_keys(self::maritalStatusList())],
            ]
        );
    }
    
    public function attributeLabels()
    {
        return array_merge(
            parent::attributeLabels(),
            [
                'birthDt' => 'Дата рождения',
                'first' => 'Имя',
                'paternal' => 'Отчество',
                'name1' => 'Фамилия',
                'placeOfBirth' => 'Место рождения',
                'maritalStatus' => 'Семейное положение',
            ]
        );
    }
    
    public static function genderList()
    {
        return [
            1 => 'м.',
            2 => 'ж.',
        ];
    }
    
    public function getFullName()
    {
        $array = [
           $this->name1,
           $this->first,
           $this->paternal
        ];
        return implode(' ', $array);
    }
    
    /**
     * @param string $oksm
     */
    public function setOKSM(string $oksm): void
    {
        $this->oksm = $oksm;
    }
}