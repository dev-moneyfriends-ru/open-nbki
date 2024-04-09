<?php

namespace mfteam\nbch\components\consent;



use mfteam\nbch\models\creditHistory\NbchConsent;

/**
 *
 */
class ConsentComponent extends \yii\base\Component
{
    
    /**
     * @param $uuid
     * @return void
     */
    public function create($uuid)
    {
        $model = new NbchConsent(['offerUuid' => $uuid]);
        $model->consentDate = time();
    }
}