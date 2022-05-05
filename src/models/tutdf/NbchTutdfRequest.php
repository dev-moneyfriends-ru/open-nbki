<?php

namespace mfteam\nbch\models\tutdf;

use Exception;
use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\components\file\NbchFileInterface;
use mfteam\nbch\Env;
use yii\base\InvalidConfigException;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\di\NotInstantiableException;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "nbch_tutdf_request".
 *
 * @property int $id
 * @property int $createdBy
 * @property int $updatedBy
 * @property int $createdAt
 * @property int $updatedAt
 * @property int $sendAt
 * @property int $acceptAt
 * @property string|null $errorMessage
 * @property int $state
 * @property-read mixed $stateName
 * @property string|null $offerUuid
 * @property int $checkAt [int(11)]
 * @property-read string $nbchConfirmZipP7mDownloadUrl
 * @property-read null|NbchFile $ticketFile
 * @property-read null|NbchFile $nbchConfirmZipP7mFile
 * @property-read string $tutdfDownloadUrl
 * @property-read null|NbchFile $tutdfFile
 * @property-read null|NbchFile $rejectFile
 * @property-read null|NbchFile $tutdfZipFile
 * @property int $checkBy [int(11)]
 */
class NbchTutdfRequest extends ActiveRecord
{
    public const ENTITY = 'NbchTutdfRequest';
    
    public const STATE_NEW = 0;
    public const STATE_EXECUTE_CREATE_TUTDF = 1;
    public const STATE_CREATED_TUTDF = 2;
    public const STATE_EXECUTE_SIGN_TUTDF = 3;
    public const STATE_SIGNED_TUTDF = 4;
    public const STATE_EXECUTE_CREATE_ZIP = 5;
    public const STATE_CREATED_ZIP = 6;
    public const STATE_EXECUTE_SIGN_ZIP = 7;
    public const STATE_SIGNED_ZIP = 8;
    public const STATE_SENDING = 9;
    public const STATE_SENT = 10;
    public const STATE_COMPLETE = 11;
    public const STATE_ERROR = 40;
    public const STATE_NBCH_ERROR = 41;
    
    public const FILE_TUTDF_TYPE = 'TUTDFTemplateEntity';
    public const FILE_TUTDF_SIG = 'TUTDFTemplateEntity';
    public const FILE_TUTDF_ZIP = 'TUTDF_ZIP_ARCHIVE';
    public const FILE_CONFIRM_ZIP_P7M_TYPE = 'FILE_CONFIRM_ZIP_P7M';
    public const FILE_REJECT = 'FILE_REJECT';
    public const FILE_TICKET = 'FILE_TICKET';
    public const FILE_TICKET_SIG = 'FILE_TICKET_SIG';
    
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return Env::ensure()->nbchTutdfRequestTableName;
    }
    
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'createdAt',
                'updatedAtAttribute' => 'updatedAt'
            ],
            [
                'class' => BlameableBehavior::class,
                'createdByAttribute' => 'createdBy',
                'updatedByAttribute' => 'updatedBy'
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['createdBy', 'updatedBy', 'createdAt', 'updatedAt', 'sendAt', 'acceptAt', 'state', 'checkAt', 'checkBy'], 'integer'],
            [['errorMessage'], 'string'],
            [['offerUuid'], 'required'],
            [['offerUuid'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID запроса',
            'createdBy' => 'Создал',
            'updatedBy' => 'Обновил',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата обновления',
            'sendAt' => 'Дата отправки',
            'acceptAt' => 'Дата подтверждения',
            'errorMessage' => 'Ошибка',
            'state' => 'Статус',
            'stateName' => 'Статус',
            'offerUuid' => 'UUID договора',
            'checkAt' => 'Дата проверки',
            'checkBy' => 'Проверил',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NbchTutdfRequestQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NbchTutdfRequestQuery(get_called_class());
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
     * @return string[]
     */
    public static function stateList(): array
    {
        return [
            self::STATE_NEW => 'Новый',
            self::STATE_EXECUTE_CREATE_TUTDF => 'Создается TUTDF файл',
            self::STATE_CREATED_TUTDF => 'Создан TUTDF',
            self::STATE_EXECUTE_SIGN_TUTDF => 'Идет подписание TUTDF',
            self::STATE_SIGNED_TUTDF => 'Подписан TUTDF',
            self::STATE_EXECUTE_CREATE_ZIP => 'Создаентся архив',
            self::STATE_CREATED_ZIP => 'Архив создан',
            self::STATE_EXECUTE_SIGN_ZIP => 'Идет шифрование архива',
            self::STATE_SIGNED_ZIP => 'Архив готов к отправке',
            self::STATE_SENDING => 'Идет отправка',
            self::STATE_SENT => 'Отправлено в НБКИ',
            self::STATE_COMPLETE => 'Принят в НБКИ',
            self::STATE_ERROR => 'Ошибка',
            self::STATE_NBCH_ERROR => 'Ошибка в данных',
        ];
    }
    
    /**
     * Можно удалить
     * @return bool
     */
    public function canDelete(): bool
    {
        return !in_array($this->state, [
            self::STATE_SENDING,
            self::STATE_SENT,
            self::STATE_COMPLETE,
            self::STATE_NBCH_ERROR
        ]);
    }
    /**
     * Можно отправить в НБКИ
     * @return bool
     */
    public function canSend(): bool
    {
        return $this->state === self::STATE_CREATED_TUTDF;
    }
    
    /**
     * Можно сгенерировать файл
     * @return bool
     */
    public function canCreateTutdf(): bool
    {
        return in_array($this->state, [
            self::STATE_ERROR,
            self::STATE_NEW,
            self::STATE_CREATED_TUTDF
        ]);
    }
    
    /**
     * Запакованный файл квитанции
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getNbchConfirmZipP7mFile(): ?NbchFileInterface
    {
        return Env::ensure()->module->file->getFile(self::FILE_CONFIRM_ZIP_P7M_TYPE, self::ENTITY, $this->id);
    }
    
    /**
     * Файл с данными
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getTutdfFile(): ?NbchFileInterface
    {
        return Env::ensure()->module->file->getFile(self::FILE_TUTDF_TYPE, self::ENTITY, $this->id);
    }
    
    /**
     * Файл с данными
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getTutdfSigFile(): ?NbchFileInterface
    {
        return Env::ensure()->module->file->getFile(self::FILE_TUTDF_SIG, self::ENTITY, $this->id);
    }
    
    /**
     * Файл для отправки
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getTutdfZipFile(): ?NbchFileInterface
    {
        return Env::ensure()->module->file->getFile(self::FILE_TUTDF_ZIP, self::ENTITY, $this->id);
    }
    
    /**
     * Файл отказа принятия данных
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getRejectFile(): ?NbchFileInterface
    {
        return Env::ensure()->module->file->getFile(self::FILE_REJECT, self::ENTITY, $this->id);
    }
    
    /**
     * Файл квитанции
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getTicketFile()
    {
        return Env::ensure()->module->file->getFile(self::FILE_TICKET, self::ENTITY, $this->id);
    }
    
    /**
     * @return string
     */
    public function getTutdfDownloadUrl(): string
    {
        $file = $this->tutdfFile;
        if($file === null){
            return  '';
        }
        return $file->storagePath;
    }
    
    /**
     * @return string
     */
    public function getNbchConfirmZipP7mDownloadUrl(): string
    {
        $file = $this->nbchConfirmZipP7mFile;
        if($file === null){
            return  '';
        }
        return $file->storagePath;
    }
}
