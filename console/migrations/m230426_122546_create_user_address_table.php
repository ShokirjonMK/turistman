<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_address}}`.
 */
class m230426_122546_create_user_address_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->dropTableMigrate('user_address');

        $this->createTable('{{%user_address}}', [
            'id' => $this->primaryKey(),

			'user_id' => $this->integer(11)->null(),
			'name' => $this->string(255)->null(),
			'family' => $this->string(255)->null(),
			'patronymic_name' => $this->string(255)->null(),
			'series' => $this->string(255)->null(),
			'series_num' => $this->string(255)->null(),
			'pin_fl' => $this->string(255)->null(),
            'birth_date' => $this->string(255)->null(),
            'address' => $this->string(255)->null(),

			'status' => $this->tinyInteger(1)->notNull()->defaultValue(1),
			'is_deleted' => $this->tinyInteger(1)->notNull()->defaultValue(0),
			'created_at' => $this->integer()->notNull(),
			'updated_at' => $this->integer()->notNull(),
			'created_by' => $this->integer()->notNull(),
			'updated_by' => $this->integer()->notNull(),
        ]);

		// User
		$this->createIndex(
			'idx_user_address_user_id',
			'user_address',
			'user_id'
		);

		$this->addForeignKey(
			'fk_user_address_user_id',
			'user_address',
			'user_id',
			'user',
			'id',
		);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_address}}');
    }
}
