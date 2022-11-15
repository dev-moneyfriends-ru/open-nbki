<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 *
 */
class InquiryReq extends Inquiry
{
    /**
     * @param Consent $consent
     * @param $config
     */
    public function __construct(Consent $consent, $config = [])
    {
        $this->consent = $consent;
        parent::__construct($config);
    }
    
    /**
     * @return array
     */
    public function rules()
    {
        return array_merge(
            parent::rules(),
            [
                [['consent', 'inqPurpose', 'inqAmount'], 'required'],
            ]
        );
    }
    
    /**
     * @return array
     */
    public function fields()
    {
        $fields = parent::fields();
        return ArrayHelper::merge(
            $fields,
            [
                'ConsentReq' => 'consent'
            ]
        );
    }
}