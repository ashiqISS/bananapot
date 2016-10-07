<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TaxRates;

/**
 * TaxRatesSearch represents the model behind the search form about `backend\models\TaxRates`.
 */
class TaxRatesSearch extends TaxRates
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type', 'zone', 'cb', 'ub', 'status'], 'integer'],
            [['tax_name', 'doc', 'dou'], 'safe'],
            [['tax_rate'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = TaxRates::find();

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
            'tax_rate' => $this->tax_rate,
            'type' => $this->type,
            'zone' => $this->zone,
            'doc' => $this->doc,
            'dou' => $this->dou,
            'cb' => $this->cb,
            'ub' => $this->ub,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'tax_name', $this->tax_name]);

        return $dataProvider;
    }
}
