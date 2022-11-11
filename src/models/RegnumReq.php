<?php

namespace mfteam\nbch\models;

/**
 * Регистрационный номер, номер налогоплательщика субъекта, предоставившего согласие
 */
class RegnumReq extends \yii\base\Model
{
    /**
     * Код номера налогоплательщика
     * @var int
     */
    public $taxpayerCode = 1;
    
    /**
     * @var string
     */
    public $taxpayerNum;
    
    /**
     * Код регистрационного номера.
     * Обязательный, если заполнен элемент regNum
     * 1 – ОГРН (для российского юридического лица)
     * 2 – регистрационный номер в стране регистрации (инкорпорации) или его аналог (для иностранного юридического лица)
     * @var int
     */
    public $regNumCode;
    
    /**
     * Регистрационный номер
     * @var string
     */
    public $regnum;
    
    public function rules()
    {
        return [
            [
                ['taxpayerCode', 'taxpayerNum'],
                'required'
            ],
            [
                ['taxpayerCode', 'regNumCode'],
                'integer'
            ],
            [
                ['taxpayerNum', 'regnum'],
                'string'
            ]
        ];
    }
}