<?php

namespace mfteam\nbch\models\rutdf;

use Exception;
use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\components\file\NbchFileInterface;
use mfteam\nbch\Env;
use mfteam\nbch\models\BaseSendNbchRequestInterface;
use Yii;
use yii\base\InvalidConfigException;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\di\NotInstantiableException;
use yii\helpers\ArrayHelper;

/**
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
 * @property string $event
 * @property int $checkAt [int(11)]
 * @property-read string $nbchConfirmZipP7mDownloadUrl
 * @property-read null|NbchFile $ticketFile
 * @property-read null|NbchFile $nbchConfirmZipP7mFile
 * @property-read string $tutdfDownloadUrl
 * @property-read null|NbchFile $rejectFile
 * @property-read null|NbchFile $rutdfZipFile
 * @property-read string $rutdfDownloadUrl
 * @property-read null|NbchFile $rutdfFile
 * @property-read null|NbchFile $rutdfSigFile
 * @property int $checkBy [int(11)]
 */
class NbchRutdfRequest extends ActiveRecord implements BaseSendNbchRequestInterface
{
    public const ENTITY = 'NbchRutdfRequest';
    
    public const STATE_NEW = 0;
    public const STATE_EXECUTE_CREATE_RUTDF = 1;
    public const STATE_CREATED_RUTDF = 2;
    public const STATE_EXECUTE_SIGN_RUTDF = 3;
    public const STATE_SIGNED_RUTDF = 4;
    public const STATE_EXECUTE_CREATE_ZIP = 5;
    public const STATE_CREATED_ZIP = 6;
    public const STATE_EXECUTE_SIGN_ZIP = 7;
    public const STATE_SIGNED_ZIP = 8;
    public const STATE_SENDING = 9;
    public const STATE_SENT = 10;
    public const STATE_COMPLETE = 11;
    public const STATE_ERROR = 40;
    public const STATE_NBCH_ERROR = 41;
    
    public const FILE_RUTDF_TYPE = 'RUTDFTemplateEntity';
    public const FILE_RUTDF_SIG = 'RUTDF_SIG';
    public const FILE_RUTDF_ZIP = 'RUTDF_ZIP_ARCHIVE';
    public const FILE_CONFIRM_ZIP_P7M_TYPE = 'FILE_CONFIRM_ZIP_P7M';
    public const FILE_REJECT = 'FILE_REJECT';
    public const FILE_TICKET = 'FILE_TICKET';
    public const FILE_TICKET_SIG = 'FILE_TICKET_SIG';
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return Env::ensure()->nbchRutdfRequestTableName;
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
                'updatedAtAttribute' => 'updatedAt',
            ],
            [
                'class' => BlameableBehavior::class,
                'createdByAttribute' => 'createdBy',
                'updatedByAttribute' => 'updatedBy',
            ],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['createdBy',
                'updatedBy',
                'createdAt',
                'updatedAt',
                'sendAt',
                'acceptAt',
                'state',
                'checkAt',
                'checkBy'], 'integer'],
            [['errorMessage'], 'string'],
            [['offerUuid', 'event'], 'required'],
            [['offerUuid'], 'string', 'max' => 50],
            [['event'], 'string', 'max' => 10],
            [['event'], 'in', 'range' => array_keys(NbchEvents::list())],
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
            'event' => 'Событие',
        ];
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
            self::STATE_EXECUTE_CREATE_RUTDF => 'Создается RUTDF файл',
            self::STATE_CREATED_RUTDF => 'Создан RUTDF',
            self::STATE_EXECUTE_SIGN_RUTDF => 'Идет подписание RUTDF',
            self::STATE_SIGNED_RUTDF => 'Подписан RUTDF',
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
            self::STATE_NBCH_ERROR,
        ], true);
    }
    
    /**
     * Можно отправить в НБКИ
     * @return bool
     */
    public function canSend(): bool
    {
        return $this->state === self::STATE_CREATED_RUTDF;
    }
    
    /**
     * Можно сгенерировать файл
     * @return bool
     */
    public function canCreateFile(): bool
    {
        return in_array($this->state, [
            self::STATE_ERROR,
            self::STATE_NEW,
            self::STATE_CREATED_RUTDF,
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
    public function getFile(): ?NbchFileInterface
    {
        return Env::ensure()->module->file->getFile(self::FILE_RUTDF_TYPE, self::ENTITY, $this->id);
    }
    
    /**
     * Файл с данными
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getSigFile(): ?NbchFileInterface
    {
        return Env::ensure()->module->file->getFile(self::FILE_RUTDF_SIG, self::ENTITY, $this->id);
    }
    
    /**
     * Файл для отправки
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getZipFile(): ?NbchFileInterface
    {
        return Env::ensure()->module->file->getFile(self::FILE_RUTDF_ZIP, self::ENTITY, $this->id);
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
    public function getTicketFile(): ?NbchFileInterface
    {
        return Env::ensure()->module->file->getFile(self::FILE_TICKET, self::ENTITY, $this->id);
    }
    
    /**
     * @return string
     */
    public function getFileDownloadUrl(): string
    {
        $file = $this->getFile();
        if ($file === null) {
            return '';
        }
        return $file->storagePath;
    }
    
    /**
     * @return string
     */
    public function getConfirmZipP7mDownloadUrl(): string
    {
        $file = $this->nbchConfirmZipP7mFile;
        if ($file === null) {
            return '';
        }
        return $file->storagePath;
    }
    
    /**
     * @return string
     */
    public function getTmpPath(): string
    {
        return Yii::getAlias('@runtime/nbch/rutdf/' . $this->id);
    }
    
    /**
     * @return string
     */
    public function getEntity(): string
    {
        return self::ENTITY;
    }
    
    /**
     * @return string
     */
    public function getSigFileType(): string
    {
        return self::FILE_RUTDF_SIG;
    }
    
    /**
     * @return void
     */
    public function setStateSigned(): void
    {
        $this->state = self::STATE_SIGNED_RUTDF;
    }
    
    /**
     * @return void
     */
    public function setStateExecuteCreateZip(): void
    {
        $this->state = self::STATE_EXECUTE_CREATE_ZIP;
    }
    
    /**
     * @return void
     */
    public function setStateCreatedZip(): void
    {
        $this->state = self::STATE_CREATED_ZIP;
    }
    
    /**
     * @return void
     */
    public function setStateExecuteSignZip(): void
    {
        $this->state = self::STATE_EXECUTE_SIGN_ZIP;
    }
    
    /**
     * @return string
     */
    public function getFileZipType(): string
    {
        return self::FILE_RUTDF_ZIP;
    }
    
    /**
     * @inheritDoc
     */
    public function setStateSignedZip(): void
    {
        $this->state = self::STATE_SIGNED_ZIP;
    }
    
    /**
     * @return void
     */
    public function setStateSending(): void
    {
        $this->state = self::STATE_SENDING;
    }
    
    /**
     * @return void
     */
    public function setStateSent(): void
    {
        $this->state = self::STATE_SENT;
        $this->sendAt = time();
    }
    
    /**
     * @return NbchRutdfRequestQuery
     */
    public static function find()
    {
        return new NbchRutdfRequestQuery(get_called_class());
    }
}
