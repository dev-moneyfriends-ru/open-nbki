<?php

namespace mfteam\nbch\models;

use Yii;

/**
 * This is the model class for table "nbch_consent_relations".
 *
 * @property int|null $consentId
 * @property string|null $entityId
 * @property string|null $entity
 * @property string|null $type
 *
 * @property NbchConsent $consent
 */
class NbchConsentRelations extends \yii\db\ActiveRecord
{
    public const OFFER_ENTITY = 'Offer';
    public const USER_ENTITY = 'User';
    public const INN_ENTITY = 'INN';
    public const MAIN_REL_TYPE = 'MAIN';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nbch_consent_relations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['consentId'], 'integer'],
            [['entityId', 'entity', 'type'], 'string', 'max' => 255],
            [['consentId'], 'exist', 'skipOnError' => true, 'targetClass' => NbchConsent::className(), 'targetAttribute' => ['consentId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'consentId' => 'Consent ID',
            'entityId' => 'Entity ID',
            'entity' => 'Entity',
            'type' => 'Type',
        ];
    }

    /**
     * Gets query for [[Consent]].
     *
     * @return \yii\db\ActiveQuery|NbchConsentQuery
     */
    public function getConsent()
    {
        return $this->hasOne(NbchConsent::className(), ['id' => 'consentId']);
    }

    /**
     * {@inheritdoc}
     * @return NbchConsentRelationsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NbchConsentRelationsQuery(get_called_class());
    }
}
