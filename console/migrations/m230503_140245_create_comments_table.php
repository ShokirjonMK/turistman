<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comments}}`.
 */
class m230503_140245_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

		$this->dropTableMigrate('comments');


		$this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),

			'user_id' => $this->integer(11)->null(),

			'description' => $this->string(255)->notNull(),
			'message' => $this->string(255)->null(),

			'image' => $this->string(255)->null(),
            'date' => $this->string(255)->null(),

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
        $this->dropTable('{{%comments}}');
    }
}
