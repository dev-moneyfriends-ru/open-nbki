<?php

namespace mfteam\nbch\models;

/**
 * Business classification information is delivered via B2B, Bulk, and Web (Screen/PDF) channels.
 * This information maps to the TUTDF Business (BU) segment.
 * @deprecated
 */
class BusinessClassification extends BaseItem
{
    /**
     * Российская классификация предприятий и учреждений, например, 04008292 (последняя цифра является контрольной).
     */
    public const TYPE_OKPO = 'OKPO';
    /**
     * Старая российская классификация видов экономической деятельности (заменена на коды ОКВЭД, приведённые ниже).
     */
    public const TYPE_OKONH = 'OKONH';
    /**
     * Государственная классификация видов экономической деятельности, например, 91.33, 67.13.51
     */
    public const TYPE_OKVED = 'OKVED';
    /**
     * Российская классификация административных округов, например, 45296561000
     */
    public const TYPE_OKATO = 'OKATO';
    /**
     * Российская классификация государственных правительственных и административных подразделений, например, 15001 или 1700034
     */
    public const TYPE_OKOGU = 'OKOGU';
    /**
     * Российская классификация форм собственности (типов собственности), например,  49
     */
    public const TYPE_OKFS = 'OKFS';
    /**
     * Российская классификация организационных и правовых форм (юридических субъектов), например, 47 или 16237
     */
    public const TYPE_OKOPF = 'OKOPF';
    /**
     * Код основания присваивается Налоговым органом, например, 781101001
     */
    public const TYPE_KPP = 'KPP';
    /**
     * ОКПО до изменения
     */
    public const TYPE_OLD_OKPO = 'OLD_OKPO';
    /**
     * ОКАТО до изменения
     */
    public const TYPE_OLD_OKATO = 'OLD_OKATO';
    /**
     * Код КПП до изменения
     */
    public const TYPE_OLD_KPP = 'OLD_KPP';
    /**
     * The value of the classification typeCode. Example values are:
     * •    OKPO – Russian Classification of Enterprises and Establishments (e.g., 04008292; last digit is a check digit).
     * •    OKONH – Old Russian Classification of Economic Activities (e.g., 13146, 84200).
     * •    OKVED – National Classification of Types of Economic Activity (e.g., 91.33, 67.13.51).
     * •    OKATO - Russian Classification of objects of administrative division (e.g., 45296561000). Valid values range: 1-11 digits.
     * •    OKOGU – Russian Classification of State Government and Management Units (e.g., 15001).
     * •    OKFS – Russian Classification of configuration property (Owner Types) (e.g., 49).
     * •    OKOPF – Russian Classification of Organizational and Legal Forms (Legal Entities) (e.g., 47).
     * •    KPP – Tax Registration Reason  (e.g., 781101001).
     * •    OLD OKPO –  (e.g., 04008292)
     * •    OLD OKATO – (e.g., 45296561000).
     * Valid values range: 1-11 digits.
     * •    OLD KPP – (e.g., 781101001)
     * @var int
     */
    public $number;
    
    /**
     * @var string
     */
    public $typeCode;
    
    /**
     * @return array
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            [
                [
                    'number',
                ],
                'required',
            ],
            [
                [
                    'number'
                ],
                'integer'
            ]
        ]);
    }
}