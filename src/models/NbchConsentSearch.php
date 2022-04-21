<?php

namespace mfteam\nbch\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use mfteam\nbch\models\NbchConsent;

/**
 * NbchConsentSearch represents the model behind the search form of `mfteam\nbch\models\NbchConsent`.
 */
class NbchConsentSearch extends NbchConsent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'createdAt', 'updatedAt', 'consentDate', 'consentExpireDate', 'consentPurpose', 'type'], 'integer'],
            [['offerUuid', 'otherConsentPurpose'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = NbchConsent::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'consentDate' => $this->consentDate,
            'consentExpireDate' => $this->consentExpireDate,
            'consentPurpose' => $this->consentPurpose,
            'type' => $this->type,
        ]);

        $query
            ->andFilterWhere(['like', 'otherConsentPurpose', $this->otherConsentPurpose]);

        return $dataProvider;
    }
}
