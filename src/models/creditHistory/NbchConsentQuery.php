<?php

namespace mfteam\nbch\models\creditHistory;

/**
 * This is the ActiveQuery class for [[NbchConsent]].
 *
 * @see NbchConsent
 */
class NbchConsentQuery extends \yii\db\ActiveQuery
{
    /**
     * @return NbchConsentQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function active()
    {
        $alias = key($this->getTablesUsedInFrom());
        return $this->andWhere(['>', "$alias.[[consentExpireDate]]", time()]);
    }
    
    /**
     * @param $val
     * @return NbchConsentQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function byType($val)
    {
        $alias = key($this->getTablesUsedInFrom());
        return $this->andWhere(["$alias.[[type]]" => $val]);
    }
    
    /**
     * @param $val
     * @return NbchConsentQuery
     */
    public function byOfferUuid($val)
    {
        return $this->joinWith('mainOfferRelation')
            ->andWhere(['nbch_consent_relations.entityId' => $val]);
    }
    
    /**
     * @param $val
     * @return NbchConsentQuery
     */
    public function byUserId($val)
    {
        return $this->joinWith('userRelations')
            ->andWhere(['nbch_consent_relations.entityId' => $val]);
    }
    /**
     * {@inheritdoc}
     * @return NbchConsent[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NbchConsent|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
