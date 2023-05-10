<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PricingPlans;

/**
* PricingPlansSearch represents the model behind the search form about `common\models\PricingPlans`.
*/
class PricingPlansSearch extends PricingPlans
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'price', 'famous', 'status', 'is_deleted', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name', 'image', 'message'], 'safe'],
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
$query = PricingPlans::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
            'price' => $this->price,
            'famous' => $this->famous,
            'status' => $this->status,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'message', $this->message])
            ->andFilterWhere(['like', 'image', $this->image]);

return $dataProvider;
}
}