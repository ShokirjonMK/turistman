<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%features}}`.
 */
class m230503_135337_create_features_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

		$this->dropTableMigrate('features');


		$this->createTable('{{%features}}', [
            'id' => $this->primaryKey(),

			'name' => $this->string(255)->null(),
			'message' => $this->string(255)->null(),

			'description' => $this->string(255)->null(),
			'image' => $this->string(255)->null(),
			'images' => $this->string(255)->null(),



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
        $this->dropTable('{{%features}}');
    }
}
