<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserAddress;

/**
* UserAddressSearch represents the model behind the search form about `common\models\UserAddress`.
*/
class UserAddressSearch extends UserAddress
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'user_id', 'status', 'is_deleted', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name', 'family', 'patronymic_name', 'series', 'series_num', 'pin_fl', 'birth_date', 'address'], 'safe'],
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
$query = UserAddress::find();

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
            'user_id' => $this->user_id,
            'status' => $this->status,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'family', $this->family])
            ->andFilterWhere(['like', 'patronymic_name', $this->patronymic_name])
            ->andFilterWhere(['like', 'series', $this->series])
            ->andFilterWhere(['like', 'series_num', $this->series_num])
            ->andFilterWhere(['like', 'pin_fl', $this->pin_fl])
            ->andFilterWhere(['like', 'birth_date', $this->birth_date])
            ->andFilterWhere(['like', 'address', $this->address]);

return $dataProvider;
}
}