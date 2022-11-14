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
     * Цель согласия. Прием на работу
     */
    public const PURPOSE_JOB_HIRE = 24;
    
    /**
     * Цель согласия. Иное
     */
    public const PURPOSE_OTHER = 99;
    
    /**
     * Цель согласия. Лизинг
     */
    public const PURPOSE_LEASING = 16;
    
    /**
     * Цель согласия. Контроль данных
     */
    public const PURPOSE_CONTROL = 27;
    
    /**
     * Заем (кредит) на пополнение оборотных средств
     */
    public const PURPOSE_LOAN = 11;
    
    /**
     * Флаг наличия согласия на получение данных
     */
    public const FLAG_Y = 1;
    
    /**
     * Флаг отсутсвия наличия согласия, только для информационных запросов CIPO
     */
    public const FLAG_I = 0;
    
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
    public $liability = 1;
    
    /**
     * Дата заключения договора. Обязательный, если consentPeriod=3, формат – ГГГГ-ММ-ДД
     * @var string
     */
    public $agreementDate;
    
    /**
     * Срок действия согласия.
     * 1 – в течение 6 месяцев со дня оформления;
     * 2 – в течение 1 года со дня оформления;
     * 3 – в течение срока действия согласия с субъектом КИ были заключены договор займа (кредита),
     * договор лизинга, договор залога, договор поручительства, выдана независимая гарантия.
     * @var int
     */
    public $consentPeriod;
    
    /**
     * ОГРН пользователя КИ
     * @var string
     */
    public $reportUserRegNum;
    
    /**
     * ИНН пользователя КИ
     * @var string
     */
    public $reportUserTaxID;
    
    /**
     * Хэш-код для согласия субъекта КИ в форме электронного документа,
     * полученный пользователем КИ в результате вычисления хэш-функции,
     * реализованной в соответствии с национальным стандартом РФ ГОСТ Р 34.11-2012
     * (используется хэш-код длиной 256 бит, который преобразуется в шестнадцатеричную систему счисления).
     * @var string
     */
    public $consentHash;
    
    public static function consentPurposeList()
    {
        return [
            self::PURPOSE_LOAN => 'Заем (кредит) на пополнение оборотных средств',
            self::PURPOSE_CONTROL => 'Контроль данных',
            self::PURPOSE_JOB_HIRE => 'Прием на работу',
            self::PURPOSE_OTHER => 'Иное',
            self::PURPOSE_LEASING => 'Лизинг',
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
            [['consentDate', 'consentExpireDate', 'agreementDate'], 'date', 'format' => 'yyyy-MM-dd'],
            [[
                'consentDate',
                'consentExpireDate',
                'consentPurpose',
                'reportUser',
                'liability',
                'consentPeriod',
                'reportUserRegNum',
                'reportUserTaxID',
            ], 'required', 'when' => static function (Consent $model) {
                return $model->consentFlag === Consent::FLAG_Y;
            }],
            [['otherConsentPurpose'], 'string', 'max' => 200],
            [['reportUser'], 'string', 'max' => 1020],
            [['otherConsentPurpose'], 'required', 'when' => static function (Consent $model) {
                return (int)$model->consentPurpose === Consent::PURPOSE_OTHER;
            }],
            [['agreementDate'], 'required', 'when' => static function (Consent $model) {
                return (int)$model->consentPeriod === 3;
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
    
    /**
     * @inheritDoc
     */
    public function fields()
    {
        return [
            'consentDate',
            'consentPurpose',
            'otherConsentPurpose',
            'reportUser',
            'liability',
            'agreementDate',
            'consentPeriod',
            'reportUserRegNum',
            'reportUserTaxID',
            'consentHash',
        ];
    }
}