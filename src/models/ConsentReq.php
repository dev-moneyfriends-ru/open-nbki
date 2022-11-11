<?php

namespace mfteam\nbch\models;

/**
 * Данные о согласии субъекта
 */
class ConsentReq extends Consent
{
    /**
     * Регистрационный номер, номер налогоплательщика субъекта, предоставившего согласие
     * @var RegnumReq
     */
    public $regnumReq;
    
    /**
     * @var PersonReq
     */
    public $personReq;
    
    /**
     * @var IdReq
     */
    public $idReq;
    
    /**
     * @var SNILSReq
     */
    public $snilsReq;
    
    /**
     * @var BusinessReq
     */
    public $businessReq;
    
    /**
     * @var AddressReq
     */
    public $addressReq;
    
    public function rules(): array
    {
        $rules = parent::rules();
        $rules[] = [
            [
                'regnumReq',
                'personReq',
                'idReq',
                'snilsReq',
                'businessReq',
                'addressReq',
            ],
            'safe'
        ];
        return $rules;
    }
    
    /**
     * @return array|string[]
     */
    public function fields()
    {
        return array_merge(parent::fields(), [
            'RegnumReq' => 'regnumReq',
            'PersonReq' => 'personReq',
            'IdReq' => 'idReq',
            'SNILSReq' => 'snilsReq',
            'BusinessReq' => 'businessReq',
            'AddressReq' => 'addressReq',
        ]);
    }
}