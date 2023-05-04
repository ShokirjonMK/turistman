<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Service]].
 *
 * @see \common\models\Service
 */
class Service extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\Service[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\Service|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

	public function sort_desc()
	{
		return $this->orderBy(['id' => SORT_DESC]);
	}

	public function sort_asc()
	{
		return $this->orderBy(['id' => SORT_ASC]);
	}
}
