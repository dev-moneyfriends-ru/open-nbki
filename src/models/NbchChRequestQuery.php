<?php

namespace mfteam\nbch\models;

/**
 * This is the ActiveQuery class for [[NbchRequest]].
 *
 * @see NbchChRequest
 */
class NbchChRequestQuery extends \yii\db\ActiveQuery
{
    /**
     * {@inheritdoc}
     * @return NbchChRequest[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NbchChRequest|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
