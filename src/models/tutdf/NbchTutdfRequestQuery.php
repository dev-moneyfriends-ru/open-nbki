<?php

namespace mfteam\nbch\models\tutdf;

use mfteam\nbch\models\tutdf\NbchTutdfRequest;

/**
 * This is the ActiveQuery class for [[NbchTutdfRequest]].
 *
 * @see NbchTutdfRequest
 */
class NbchTutdfRequestQuery extends \yii\db\ActiveQuery
{
 

    /**
     * {@inheritdoc}
     * @return NbchTutdfRequest[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NbchTutdfRequest|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
