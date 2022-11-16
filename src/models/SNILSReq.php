<?php

namespace mfteam\nbch\models;

/**
 * СНИЛС
 */
class SNILSReq extends BaseItem
{
    /**
     * @var string
     */
    public $number;
    
    public function rules()
    {
        return [
            ['number', 'required'],
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