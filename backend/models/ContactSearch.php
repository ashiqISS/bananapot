<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Contact;

/**
 * ContactSearch represents the model behind the search form about `backend\models\Contact`.
 */
class ContactSearch extends Contact
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['company_name', 'telephone', 'mobile1', 'mobile2', 'fax', 'email1', 'email2', 'map_link', 'doc', 'dou'], 'safe'],
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
        $query = Contact::find();

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
            'doc' => $this->doc,
            'dou' => $this->dou,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'mobile1', $this->mobile1])
            ->andFilterWhere(['like', 'mobile2', $this->mobile2])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email1', $this->email1])
            ->andFilterWhere(['like', 'email2', $this->email2])
            ->andFilterWhere(['like', 'map_link', $this->map_link]);

        return $dataProvider;
    }
}
