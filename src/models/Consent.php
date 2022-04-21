<?php


namespace mfteam\nbch\models;



use yii\base\Model;

/**
 * Согласие пользователя на получение данных
 * Class ConsentReq
 * @package common\modules\nbki\models
 */
class Consent extends Model
{
    /**
     * Цель согласия. заключение и исполнение договора
     */
    public const PURPOSE_AGREEMENT = 1;
    
    /**
     * Цель согласия. проверка благонадежности
     */
    public const PURPOSE_SECURITY_CHECK = 2;
    
    /**
     * Цель согласия. прием на работу
     */
    public const PURPOSE_JOB_HIRE = 3;
    
    /**
     * Цель согласия. иное
     */
    public const PURPOSE_OTHER = 4;
    
    /**
     * Флаг наличия согласия на получение данных
     */
    public const FLAG_Y = 'Y';
    
    /**
     * Флаг отсутсвия наличия согласия, только для информационных запросов CIPO
     */
    public const FLAG_I = 'I';
    
    /**
     * Флаг присутсвия согласия. Допустимые значения Y, I
     * - Y если  есть письменное или иное согласие на запрос отчета о кредитовании от запрашиваемого заемщика.
     * - I только если делается запрос CIPO, и нет согласия.
     * @var string
     */
    public $consentFlag;
    
    /**
     * Дата получения согласия в формате YYYY-MM-DD.
     * Обязательно если флаг Y
     * @var string
     */
    public $consentDate;
    
    /**
     * Дата окончания согласия в формате YYYY-MM-DD.
     * Обязательно если флаг Y
     * @var string
     */
    public $consentExpireDate;
    
    /**
     * Цель согласия.
     * @var int
     */
    public $consentPurpose;
    
    /**
     * Иные цели согласия, если в поле Цель согласия (consentPurpose) указано значение 4.
     * @var string
     */
    public $otherConsentPurpose;
    
    /**
     * Наименование пользователя кредитной истории, который получил согласие/заявление на операцию
     * с кодом субъекта. В большинстве случаев это наша организация, но может отличаться в случае
     * приобретения прав требования и т.п.
     * @var string
     */
    public $reportUser;
    
    /**
     * Устанавливая в это поле значение Y, вы подтверждаете, что проинформированы об ответственности
     * за совершение административных правонарушений, установленной ст.5.53 и 14.29
     * Кодекса РФ об административных правонарушениях
     * @var string
     */
    public $liability = 'Y';
    
    public static function consentPurposeList()
    {
        return [
            self::PURPOSE_AGREEMENT => 'Заключение и исполнение договора',
            self::PURPOSE_SECURITY_CHECK => 'Проверка благонадежности',
            self::PURPOSE_JOB_HIRE => 'Прием на работу',
            self::PURPOSE_OTHER => 'Иное',
        ];
    }
    
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            [['consentFlag'], 'required'],
            ['consentFlag', 'in', 'range' => array_keys(self::consentFlagList())],
            ['liability', 'in', 'range' => array_keys(self::consentFlagList())],
            ['consentPurpose', 'in', 'range' => array_keys(self::consentPurposeList())],
            [['consentDate', 'consentExpireDate'], 'date', 'format' => 'yyyy-MM-dd'],
            [[
                'consentDate',
                'consentExpireDate',
                'consentPurpose',
                'reportUser',
                'liability',
            ], 'required', 'when' => static function (Consent $model) {
                return $model->consentFlag === Consent::FLAG_Y;
            }],
            [['otherConsentPurpose'], 'string', 'max' => 200],
            [['reportUser'], 'string', 'max' => 1020],
            [['otherConsentPurpose'], 'required', 'when' => static function (Consent $model) {
                return (int)$model->consentPurpose === Consent::PURPOSE_OTHER;
            }],
        ];
    }
    
    /**
     * @return array
     */
    public function attributeLabels(): array
    {
        return [
            'consentFlag' => 'Флаг состояния',
            'consentDate' => 'Дата получения',
            'consentExpireDate' => 'Дата окончания',
            'consentPurpose' => 'Цель согласия',
            'reportUser' => 'Получил согласие',
            'liability' => 'Флаг подтверждения ознакомления  об ответственности за совершение административных правонарушений',
        ];
    }
    
    public static function consentFlagList()
    {
        return [
            self::FLAG_Y => 'Получено согласие',
            self::FLAG_I => 'Согласие отсутсвует',
        ];
    }
}