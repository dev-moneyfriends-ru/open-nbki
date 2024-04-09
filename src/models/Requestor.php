<?php

namespace mfteam\nbch\models;

/**
 * Учетные данные НБКИ
 * Class RequestorReq
 * @package common\modules\nbki\models
 * @deprecated
 */
class Requestor extends \yii\base\Model
{
    /**
     * @var string
     */
    public $MemberCode;
    /**
     * @var string
     */
    public $UserID;
    /**
     * @var string
     */
    public $Password;
    
    
    /**
     * @return array
     */
    public function rules()
    {
        return [
            [$this->attributes(), 'required'],
            [$this->attributes(), 'string'],
        ];
    }
    
    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'MemberCode' => 'Код участника банка',
            'UserId' => 'ID пользователя',
            'Password' => 'Пароль'
        ];
    }
}