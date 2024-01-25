<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Orders;

/**
 * OrdersSearch represents the model behind the search form of `app\models\Orders`.
 */
class OrdersSearch extends Orders
{
    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['id', 'client_id', 'staff_id'], 'integer'],
            [['services_id', 'description', 'received_date', 'delivery_date', 'status'], 'safe'],
            [['total_price'], 'number'],
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
        $query = Orders::find();

        // add conditions that should always apply here
        $query->joinWith(['client']); // Include the related tables

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

//        $dataProvider->sort->attributes['services_id'] = [
//            'asc' => [Services::tableName() . '.name' => SORT_ASC],
//            'desc' => [Services::tableName() . '.name' => SORT_DESC],
//        ];

        $dataProvider->sort->attributes['client_id'] = [
            'asc' => [Clients::tableName() . '.name' => SORT_ASC],
            'desc' => [Clients::tableName() . '.name' => SORT_DESC],
        ];

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'client_id' => $this->client_id,
            'total_price' => $this->total_price,
            'received_date' => $this->received_date,
            'delivery_date' => $this->delivery_date,
            'staff_id' => $this->staff_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'services_id', $this->services_id])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
