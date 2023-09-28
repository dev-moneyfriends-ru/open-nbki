<?php

namespace mfteam\nbch\models;

/**
 * Регистрационный номер, номер налогоплательщика субъекта, предоставившего согласие
 */
class RegnumReq extends BaseItem
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
    public $regNum;
    
    /**
     * Признак специального налогового режима
     * @var int
     */
    public $spectaxCode = 0;
    
    public function rules()
    {
        return [
            [
                ['taxpayerCode', 'taxpayerNum'],
                'required'
            ],
            [
                ['taxpayerCode', 'regNumCode', 'spectaxCode'],
                'integer'
            ],
            [
                ['taxpayerNum', 'regNum'],
                'string'
            ]
        ];
    }
}