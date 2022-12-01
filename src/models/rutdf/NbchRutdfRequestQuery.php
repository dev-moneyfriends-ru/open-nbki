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
    
    /**
     * @param string $val
     * @return NbchRutdfRequestQuery
     */
    public function byOfferUuid(string $val)
    {
        return $this->andWhere(['[[offerUuid]]' => $val]);
    }
    
    /**
     * @return NbchRutdfRequestQuery
     */
    public function stateNew()
    {
        return $this->andWhere(['[[state]]' => NbchRutdfRequest::STATE_NEW]);
    }
    
    /**
     * @return NbchRutdfRequestQuery
     */
    public function stateSent()
    {
        return $this->andWhere(['[[state]]' => NbchRutdfRequest::STATE_SENT]);
    }
    
    /**
     * @param int $val
     * @return NbchRutdfRequestQuery
     */
    public function byState(int $val)
    {
        return $this->andWhere(['[[state]]' => $val]);
    }
    
    /**
     * @return NbchRutdfRequestQuery
     */
    public function notCkeck()
    {
        return $this->andWhere(['[[check_at]]' => null]);
    }
    /**
     * Автоматически созданные
     * @return NbchRutdfRequestQuery
     */
    public function isAuto()
    {
        return $this->andWhere(['[[createdBy]]' => null]);
    }
}