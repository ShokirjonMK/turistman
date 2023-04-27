<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Portfolyo]].
 *
 * @see \common\models\Portfolyo
 */
class Portfolyo extends \yii\db\ActiveQuery
{
	const STATUS_ACTIVE = 1;
	const NO_DELETED = 0;
	const DELETED = 1;

	public function active()
	{
		return $this->andWhere(['status' => self::STATUS_ACTIVE]);

	}

    /**
     * @inheritdoc
     * @return \common\models\Portfolyo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\Portfolyo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

	public function sort_desc()
	{
		return $this->orderBy(['id' => SORT_DESC]);
	}

	public function no_deleted()
	{
		return $this->andWhere(['is_deleted' => self::NO_DELETED]);
	}

	public function deleted()
	{
		return $this->andWhere(['is_deleted' => self::DELETED]);
	}
}
