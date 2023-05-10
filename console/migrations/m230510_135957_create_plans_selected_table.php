<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%plans_selected}}`.
 */
class m230510_135957_create_plans_selected_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->dropTableMigrate('plans_selected');

        $this->createTable('{{%plans_selected}}', [
            'id' => $this->primaryKey(),

			'user_id' => $this->integer(11)->null(),
			'plans_id' => $this->integer(11)->null(),

			'status' => $this->tinyInteger(1)->notNull()->defaultValue(1),
			'is_deleted' => $this->tinyInteger(1)->notNull()->defaultValue(0),
			'created_at' => $this->integer()->notNull(),
			'updated_at' => $this->integer()->notNull(),
			'created_by' => $this->integer()->notNull(),
			'updated_by' => $this->integer()->notNull(),
        ]);

		$this->addForeignKey('user', 'plans_selected', 'user_id', 'user', 'id');

		$this->addForeignKey('pricing_plans', 'plans_selected', 'plans_id', 'pricing_plans', 'id');

	}

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%plans_selected}}');
    }
}
