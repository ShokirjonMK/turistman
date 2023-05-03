<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service_category}}`.
 */
class m230503_135611_create_service_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->dropTableMigrate('service_category');

        $this->createTable('{{%service_category}}', [
            'id' => $this->primaryKey(),

			'service_id' => $this->string(11)->null(),
			'image' => $this->string(255)->null(),
			'title' => $this->string(255)->null(),
			'message' => $this->string(255)->null(),

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
        $this->dropTable('{{%service_category}}');
    }
}
