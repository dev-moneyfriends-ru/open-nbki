<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Phone information is delivered via B2B, Bulk, and Web (Screen/PDF) channels.
 * This information maps to the TUTDF Phone (PN) segment.
 *
 * @property-read null|string $phoneTypeText
 */
class Phone extends BaseItem
{
    public const TYPE_WORK_PHONE = 1;
    public const TYPE_HOME_PHONE = 2;
    public const TYPE_FAX_PHONE = 3;
    public const TYPE_CELL_PHONE = 4;
    public const TYPE_OTHER_PHONE = 5;
    /**
     * Номер. Данное поле должно состоять минимум из 5 цифр.
     * Дополнительный код/код STD может быть указан в качестве префикса.
     * @var string
     */
    public $number;
    
    /**
     * Тип телефона.
     * @var int
     */
    public $phoneType = 5;
    
    /**
     * @return array
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            [
                [
                    'number',
                    'phoneType',
                ],
                'required',
            ],
            [
                'number',
                'string',
                'min' => 5,
            ],
            [
                'phoneType',
                'in',
                'range' => array_keys(self::typeList()),
            ],
        ]);
    }
    
    /**
     * @return string[]
     */
    public static function typeList()
    {
        return [
            self::TYPE_WORK_PHONE => 'Рабочий',
            self::TYPE_HOME_PHONE => 'Домашний',
            self::TYPE_FAX_PHONE => 'Факс ',
            self::TYPE_CELL_PHONE => 'Сотовый',
            self::TYPE_OTHER_PHONE => 'Другое',
        ];
    }
    
    /**
     * @return string|null
     * @throws \Exception
     */
    public function getPhoneTypeText(): ?string
    {
        return ArrayHelper::getValue(self::typeList(), $this->phoneType);
    }
    
}