<?php

namespace mfteam\nbch\models;

/**
 * This is the ActiveQuery class for [[NbchControl]].
 *
 * @see NbchControl
 */
class NbchControlQuery extends \yii\db\ActiveQuery
{
    /**
     * {@inheritdoc}
     * @return NbchControl[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NbchControl|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
