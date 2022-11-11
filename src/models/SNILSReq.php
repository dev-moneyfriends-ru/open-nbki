<?php

namespace mfteam\nbch\models;

/**
 * СНИЛС
 */
class SNILSReq extends \yii\base\Model
{
    /**
     * @var string
     */
    public $numder;
    
    public function rules()
    {
        return [
            ['numder', 'required'],
        ];
    }
    
    /**
     * @return string[]
     */
    public function fields()
    {
        return [
            'SNILS' => 'number'
        ];
    }
}