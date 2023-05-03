<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m230503_134820_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->dropTableMigrate('service');

        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),

			'name' => $this->string(255)->null(),
			'message' => $this->string(255)->null(),
			'image' => $this->string(255)->null(),
			'video' => $this->string(255)->null(),


			'status' => $this->tinyInteger(1)->notNull()->defaultValue(1),
			'is_deleted' => $this->tinyInteger(1)->notNull()->defaultValue(0),
			'created_at' => $this->integer()->notNull(),
			'updated_at' => $this->integer()->notNull(),
			'created_by' => $this->integer()->notNull(),
			'updated_by' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}
