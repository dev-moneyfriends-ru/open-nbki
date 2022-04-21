<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

class InquiryReq extends Inquiry
{
    public function __construct(Consent $consent, $config = [])
    {
        $this->consent = $consent;
        parent::__construct($config);
    }
    
    public function rules()
    {
        return array_merge(
            parent::rules(),
            [
                [['consent', 'inqPurpose', 'inqAmount'], 'required'],
            ]
        );
    }
    
    public function fields()
    {
        $fields = parent::fields();
        return ArrayHelper::merge(
            $fields,
            [
                'ConsentReq' => static function (Inquiry $model) {
                    return $model->consent->toArray();
                },
            ]
        );
    }
}