<?php

namespace mfteam\nbch\models\rutdf;

use yii\db\ActiveQuery;

/**
 *
 */
class NbchRutdfRequestQuery extends ActiveQuery
{
    /**
     * {@inheritdoc}
     * @return NbchRutdfRequest[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }
    
    /**
     * {@inheritdoc}
     * @return NbchRutdfRequest|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}