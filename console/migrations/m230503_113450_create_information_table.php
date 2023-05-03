<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%information}}`.
 */
class m230503_113450_create_information_table extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
		$this->dropTableMigrate('user_address');

        $this->createTable('{{%information}}', [
            'id' => $this->primaryKey(),
			'name_uz' => $this->string(255)->null(),
			'name_ru' => $this->string(255)->null(),
			'description_uz' => $this->text()->null(),
			'description_ru' => $this->text()->null(),

			'photos' => $this->integer(11)->null(),
			'the_world' => $this->integer(11)->null(),

			'image' => $this->string(255)->null(),


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
        $this->dropTable('{{%information}}');
    }
}
