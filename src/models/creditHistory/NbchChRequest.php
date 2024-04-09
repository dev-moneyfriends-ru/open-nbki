<?php

namespace mfteam\nbch\models\creditHistory;

use Exception;
use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\Env;
use yii\base\InvalidConfigException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\di\NotInstantiableException;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "nbch_request".
 *
 * @property int $id
 * @property int|null $consentId
 * @property int|null $createdAt
 * @property int|null $updatedAt
 * @property int|null $status
 * @property string|null $requestData
 * @property string|null $responseData
 * @property string|null $errorText
 *
 * @property-read null|NbchFile $responsePdf
 * @property-read null|NbchFile $responseXml
 * @property-read mixed $statusName
 * @property-read null|NbchFile $responseHtml
 * @property NbchConsent $consent
 */
class NbchChRequest extends ActiveRecord
{
    public const STATE_NEW = 0;
    public const STATE_EXECUTE = 1;
    public const STATE_PREPARING = 2;
    public const STATE_ERROR = 3;
    public const STATE_FINISH = 4;
    
    public const FILE_TYPE_XML = 'XML';
    public const FILE_TYPE_PDF = 'PDF';
    public const FILE_TYPE_HTML = 'HTML';
    
    /**
     * @return array
     */
    public static function stateList()
    {
        return [
            self::STATE_NEW => 'Создан',
            self::STATE_EXECUTE => 'Выполняется',
            self::STATE_PREPARING => 'Обрабатывается ответ',
            self::STATE_ERROR => 'Ошибка',
            self::STATE_FINISH => 'Завершен',
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nbch_ch_request';
    }
    
    /**
     * @return string[][]
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'createdAt',
                'updatedAtAttribute' => 'updatedAt'
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['status', 'in', 'range' => array_keys(self::stateList())],
            [['consentId', 'createdAt', 'updatedAt', 'status'], 'integer'],
            [['requestData', 'responseData', 'errorText'], 'string'],
            [['consentId'], 'exist', 'skipOnError' => true, 'targetClass' => NbchConsent::className(), 'targetAttribute' => ['consentId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'consentId' => 'Consent ID',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
            'status' => 'Status',
            'requestData' => 'Request Data',
            'responseData' => 'Response Data',
            'errorText' => 'Error Text',
        ];
    }

    /**
     * Gets query for [[Consent]].
     *
     * @return ActiveQuery|NbchConsentQuery
     */
    public function getConsent()
    {
        return $this->hasOne(NbchConsent::className(), ['id' => 'consentId']);
    }

    /**
     * {@inheritdoc}
     * @return NbchChRequestQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NbchChRequestQuery(static::class);
    }
    
    /**
     * @return mixed
     * @throws Exception
     */
    public function getStatusName()
    {
        return ArrayHelper::getValue(self::stateList(), $this->status, '');
    }
    
    /**
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getResponseXml()
    {
        return Env::ensure()->module->file->getFile(self::FILE_TYPE_XML, $this->formName(), $this->id);
    }
    
    /**
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getResponsePdf()
    {
        return Env::ensure()->module->file->getFile(self::FILE_TYPE_PDF, $this->formName(), $this->id);
    }
    
    /**
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getResponseHtml()
    {
        return Env::ensure()->module->file->getFile(self::FILE_TYPE_HTML, $this->formName(), $this->id);
    }
}
