<?php

namespace mfteam\nbch\models;

use Exception;
use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\Env;
use Yii;
use yii\base\InvalidConfigException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\di\NotInstantiableException;
use yii\helpers\ArrayHelper;

/**
 * Согласия НБКИ
 * This is the model class for table "nbch_consent".
 *
 * @property int $id
 * @property int|null $createdAt
 * @property int|null $updatedAt
 * @property int|null $consentDate
 * @property int|null $consentExpireDate
 * @property int|null $consentPurpose
 * @property-read bool $isActive
 * @property string|null $otherConsentPurpose
 * @property-read null|NbchFile $sigFile
 * @property-read null|NbchFile $protocolFile
 * @property-read null|NbchFile $originalFile
 * @property int $type [int(2)]
 * @property-read NbchConsentRelations[] $relations
 * @property-read NbchConsentRelations[] $mainOfferRelation
 * @property-read NbchConsentRelations[] $userRelations
 * @property-read bool $isExpire
 * @property-read void $consentPurposeName
 * @property-read mixed $typeName
 * @property-read NbchConsentRelations|null $mainUserRelation
 * @property-read NbchChRequestQuery|ActiveQuery $chRequests
 * @property-read NbchChRequestQuery|ActiveQuery $activeChRequests
 * @property-read NbchOfferInterface $offer
 */
class NbchConsent extends ActiveRecord
{
    use GetNbchOfferTrait;
    
    /**
     * Согласие на получение отчетов по физ лицу
     */
    public const TYPE_CUSTOMER = 1;
    
    /**
     * Согласие на получение отчетов по бизнесу
     */
    public const TYPE_BUSINESS = 2;
    
    public const FILE_ORIGINAL = 'ORIGINAL';
    public const FILE_SIG = 'SIG';
    public const FILE_PROTOCOL = 'PROTOCOL';
    
    public static function typeList()
    {
        return [
            self::TYPE_CUSTOMER => 'Согласие на получение отчетов по физ лицу',
            self::TYPE_BUSINESS => 'Согласие на получение отчетов по бизнесу',
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return Env::ensure()->nbchConsentTableName;
    }
    
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
            [['type'], 'required'],
            [['createdAt', 'updatedAt', 'consentDate', 'consentExpireDate', 'consentPurpose', 'type'], 'integer'],
            ['consentPurpose', 'in', 'range' => array_keys(Consent::consentPurposeList())],
            [['otherConsentPurpose'], 'string', 'max' => 200],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'offerUuid' => 'Идентификатор договора',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
            'consentDate' => 'Дата подписания согласия',
            'consentExpireDate' => 'Дата окончания срока согласия',
            'consentPurpose' => 'Цель согласия',
            'otherConsentPurpose' => 'Other Consent Purpose',
            'type' => 'Тип согласия',
            'isActive' => 'Активность',
            'consentPurposeName' => 'Цель согласия',
            'typeName' => 'Тип согласия',
        ];
    }
    
    /**
     * {@inheritdoc}
     * @return NbchConsentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NbchConsentQuery(get_called_class());
    }
    
    /**
     * @return bool
     */
    public function getIsActive(): bool
    {
        if (empty($this->consentExpireDate)) {
            return false;
        }
        return $this->consentExpireDate > time();
    }
    
    /**
     * @return bool
     */
    public function getIsExpire()
    {
        return $this->consentExpireDate > time();
    }
    
    /**
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getOriginalFile()
    {
        return $this->getFile(self::FILE_ORIGINAL);
    }
    
    /**
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getProtocolFile()
    {
        return $this->getFile(self::FILE_PROTOCOL);
    }
    
    /**
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getSigFile()
    {
        return $this->getFile(self::FILE_SIG);
    }
    
    /**
     * @param string $type
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    private function getFile(string $type): ?NbchFile
    {
        return Env::ensure()->module->file->getFile($type, $this->formName(), $this->id);
    }
    
    /**
     * @return ActiveQuery|NbchConsentRelationsQuery
     */
    public function getRelations()
    {
        return $this->hasMany(NbchConsentRelations::class, ['consentId' => 'id']);
    }
    
    /**
     * @return NbchConsentRelationsQuery
     * @throws InvalidConfigException
     */
    public function getMainOfferRelation()
    {
        return $this->getRelations()->byEntity(NbchConsentRelations::OFFER_ENTITY)->byType(
            NbchConsentRelations::MAIN_REL_TYPE
        );
    }
    
    /**
     * @return NbchConsentRelationsQuery
     * @throws InvalidConfigException
     */
    public function getUserRelations()
    {
        return $this->getRelations()->byEntity(NbchConsentRelations::USER_ENTITY);
    }
    
    /**
     * @return NbchConsentRelationsQuery
     * @throws InvalidConfigException
     */
    public function getMainUserRelation()
    {
        return $this->hasOne(NbchConsentRelations::class, ['consentId' => 'id'])->byEntity(
            NbchConsentRelations::USER_ENTITY
        )->byType(NbchConsentRelations::MAIN_REL_TYPE);
    }
    
    /**
     * @return mixed
     * @throws Exception
     */
    public function getTypeName()
    {
        return ArrayHelper::getValue(self::typeList(), $this->type);
    }
    
    /**
     * @return void
     */
    public function getConsentPurposeName()
    {
        return ArrayHelper::getValue(Consent::consentPurposeList(), $this->consentPurpose);
    }
    
    /**
     * @return ActiveQuery|NbchChRequestQuery
     */
    public function getActiveChRequests()
    {
        return $this->hasMany(NbchChRequest::class, ['consentId' => 'id'])->andWhere(
            ['status' => [
                NbchChRequest::STATE_NEW,
                NbchChRequest::STATE_EXECUTE,
            ]]
        );
    }
    
    /**
     * @return ActiveQuery|NbchChRequestQuery
     */
    public function getChRequests()
    {
        return $this->hasMany(NbchChRequest::class, ['consentId' => 'id']);
    }
    
}
