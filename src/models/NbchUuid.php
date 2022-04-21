<?php

namespace mfteam\nbch\models;

use Yii;

/**
 * This is the model class for table "nbch_uuid".
 *
 * @property int $id
 * @property string $offerUuid
 * @property string $uuid
 */
class NbchUuid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nbch_uuid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['offerUuid', 'uuid'], 'required'],
            [['offerUuid', 'uuid'], 'string', 'max' => 255],
            [['uuid'], 'unique'],
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
            'uuid' => 'Uuid',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NbchUuidQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NbchUuidQuery(get_called_class());
    }
}
