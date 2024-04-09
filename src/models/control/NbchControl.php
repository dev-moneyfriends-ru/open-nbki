<?php

namespace mfteam\nbch\models\control;

use Exception;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "nbch_control".
 *
 * @property int $id
 * @property string|null $offerUuid
 * @property int|null $createdAt
 * @property int|null $updatedAt
 * @property int|null $nextSend
 * @property int|null $nextCheck
 * @property int|null $state
 * @property string|null $errorCode
 * @property string|null $message
 * @property-read bool $isSuccess
 * @property-read \yii\db\ActiveQuery $uncheckedRequests
 * @property-read \yii\db\ActiveRecord|null|array|\mfteam\nbch\models\NbchControl $firstUncheckedRequest
 * @property-read bool $isRun
 * @property-read bool $isNew
 * @property-read mixed $stateName
 * @property-read bool $isError
 * @property-read bool $isExecute
 */
class NbchControl extends ActiveRecord
{
    public const STATE_NEW = 0;
    public const STATE_EXECUTE = 1;
    public const STATE_SUCCESS = 2;
    public const STATE_ERROR = 3;
    public const STATE_RUN = 4;
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nbch_control';
    }
    
    /**
     * @param string $uuid
     * @return NbchControl
     */
    public static function findByOffer(string $uuid): NbchControl
    {
        $model = self::findOne(['offerUuid' => $uuid]);
        if ($model === null) {
            $model = new NbchControl(['offerUuid' => $uuid]);
        }
        return $model;
    }
    
    /**
     * @return string[]
     */
    public static function stateList(): array
    {
        return [
            self::STATE_NEW => 'Создана',
            self::STATE_EXECUTE => 'Запущена проверка',
            self::STATE_SUCCESS => 'Проверена',
            self::STATE_ERROR => 'Ошибка',
            self::STATE_RUN => 'Ожидает проверки',
        ];
    }
    
    /**
     * Коды ошибок
     * @return array
     */
    public static function errorCodes($params = [])
    {
        return [
            '01' => Yii::t(
                'app',
                'У одного из отправленных отчетов отсутствует квитанция НБКИ. Необходимо загрузить квитанцию.',
                $params
            ),
            '02' => Yii::t(
                'app',
                'У одного из отправленных отчетов ошибка в переданных данных. Исправьте данные и отправьте отчет повторно',
                $params
            ),
            '03' => Yii::t(
                'app',
                'Ошибка генерации данных в одном из отчетов. Исправьте ошибки и перегенерируйте отчет',
                $params
            ),
            '04' => Yii::t('app', 'Нет действующего согласия НБКИ', $params),
            '05' => Yii::t('app', 'Не отправлялись данные о выдаче займа', $params),
            '06' => Yii::t('app', 'Не отправлялись данные о закрытие займа', $params),
        ];
    }
    
    public function canRefresh()
    {
        return !(($this->isExecute && (time() - $this->updatedAt) < 6) || $this->isRun);
    }
    
    /**
     * @return bool
     */
    public function getIsSuccess()
    {
        return $this->state === self::STATE_SUCCESS;
    }
    
    /**
     * @return bool
     */
    public function getIsExecute()
    {
        return $this->state === self::STATE_EXECUTE;
    }
    
    /**
     * @return bool
     */
    public function getIsRun()
    {
        return $this->state === self::STATE_RUN;
    }
    
    /**
     * @return bool
     */
    public function getIsError()
    {
        return $this->state === self::STATE_ERROR;
    }
    
    /**
     * @return bool
     */
    public function getIsNew()
    {
        return $this->state === self::STATE_NEW;
    }
    
    /**
     * @return void
     */
    public function clear()
    {
        $this->errorCode = '';
        $this->message = '';
        $this->state = self::STATE_NEW;
        $this->nextSend = null;
        $this->nextCheck = null;
    }
    
    /**
     * @param $delay
     * @param $checkDelay
     * @return void
     * @throws \yii\base\InvalidConfigException
     */
    public function setPlannedMessage($delay, $checkDelay)
    {
        $this->nextSend = time() + $delay;
        $this->nextCheck = time() + $checkDelay;
        $this->message = \Yii::t(
            'app',
            'Запланирована отправка данных на {0} <br> Следующая автоматическая проверка {1}<br>',
            [
                \Yii::$app->formatter->asDatetime($this->nextSend),
                \Yii::$app->formatter->asDatetime($this->nextCheck),
            ]
        );
    }
    
    /**
     * @return mixed
     * @throws Exception
     */
    public function getStateName()
    {
        return ArrayHelper::getValue(self::stateList(), $this->state);
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
                'updatedAtAttribute' => 'updatedAt',
            ],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['createdAt', 'updatedAt', 'state', 'nextCheck', 'nextSend'], 'integer'],
            [['message'], 'string'],
            [['offerUuid'], 'string', 'max' => 50],
            [['offerUuid'], 'unique'],
            [['errorCode'], 'string', 'max' => 255],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'offerUuid' => 'Offer Uuid',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
            'state' => 'State',
            'errorCode' => 'Error Code',
            'message' => 'Message',
        ];
    }
    
    /**
     * {@inheritdoc}
     * @return NbchControlQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NbchControlQuery(static::class);
    }
}
