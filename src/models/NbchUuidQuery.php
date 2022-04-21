<?php

namespace mfteam\nbch\models;

/**
 * This is the ActiveQuery class for [[NbchUuid]].
 *
 * @see NbchUuid
 */
class NbchUuidQuery extends \yii\db\ActiveQuery
{
    /**
     * @param $val
     * @return NbchUuidQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function byOfferUuid($val)
    {
        $alias = key($this->getTablesUsedInFrom());
        return $this->andWhere(["$alias.[[offerUuid]]" => $val]);
    }

    /**
     * {@inheritdoc}
     * @return NbchUuid[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NbchUuid|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
