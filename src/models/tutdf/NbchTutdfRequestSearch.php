<?php

namespace mfteam\nbch\models\tutdf;

use mfteam\nbch\models\tutdf;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use mfteam\nbch\models\tutdf\NbchTutdfRequest;

/**
 * NbchTutdfRequestSearch represents the model behind the search form of `mfteam\nbch\models\tutdf\NbchTutdfRequest`.
 */
class NbchTutdfRequestSearch extends tutdf\NbchTutdfRequest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'createdBy', 'updatedBy', 'createdAt', 'updatedAt', 'sendAt', 'acceptAt', 'state', 'checkAt', 'checkBy'], 'integer'],
            [['errorMessage', 'offerUuid'], 'safe'],
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
        $query = tutdf\NbchTutdfRequest::find();

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
            'createdBy' => $this->createdBy,
            'updatedBy' => $this->updatedBy,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'sendAt' => $this->sendAt,
            'acceptAt' => $this->acceptAt,
            'state' => $this->state,
            'checkAt' => $this->checkAt,
            'checkBy' => $this->checkBy,
        ]);

        $query->andFilterWhere(['like', 'errorMessage', $this->errorMessage])
            ->andFilterWhere(['like', 'offerUuid', $this->offerUuid]);

        return $dataProvider;
    }
    
    /**
     * @return array|string[]
     */
    public static function stateList(): array
    {
        return array_merge(['' => 'Все'], parent::stateList());
    }
}
