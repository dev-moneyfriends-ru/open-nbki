<?php

namespace mfteam\nbch\models\creditHistory;

/**
 * This is the ActiveQuery class for [[NbchConsentRelations]].
 *
 * @see NbchConsentRelations
 */
class NbchConsentRelationsQuery extends \yii\db\ActiveQuery
{
    /**
     * @param $val
     * @return NbchConsentRelationsQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function byConsentId($val)
    {
        $alias = key($this->getTablesUsedInFrom());
        return $this->andWhere(["$alias.consentId" => $val]);
    }
    
    /**
     * @param $val
     * @return NbchConsentRelationsQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function byEntityId($val)
    {
        $alias = key($this->getTablesUsedInFrom());
        return $this->andWhere(["$alias.entityId" => $val]);
    }
    
    /**
     * @param $val
     * @return NbchConsentRelationsQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function byEntity($val)
    {
        $alias = key($this->getTablesUsedInFrom());
        return $this->andWhere(["$alias.entity" => $val]);
    }
    
    /**
     * @param $val
     * @return NbchConsentRelationsQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function byType($val)
    {
        $alias = key($this->getTablesUsedInFrom());
        return $this->andWhere(["$alias.type" => $val]);
    }
    
    /**
     * {@inheritdoc}
     * @return NbchConsentRelations[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NbchConsentRelations|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
