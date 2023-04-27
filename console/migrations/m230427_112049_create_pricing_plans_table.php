<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pricing_plans}}`.
 */
class m230427_112049_create_pricing_plans_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->dropTableMigrate('user_address');

		$this->createTable('{{%pricing_plans}}', [
            'id' => $this->primaryKey(),
			 'name' => $this->string(255)->null(),
            'price' => $this->double()->null(),

//			'status' => $this->tinyInteger(1)->notNull()->defaultValue(1),
//			'is_deleted' => $this->tinyInteger(1)->notNull()->defaultValue(0),
//			'created_at' => $this->integer()->notNull(),
//			'updated_at' => $this->integer()->notNull(),
//			'created_by' => $this->integer()->notNull(),
//			'updated_by' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pricing_plans}}');
    }
}
