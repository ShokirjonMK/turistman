<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%settings_home}}`.
 */
class m230426_062421_create_settings_home_table extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {

		$this->dropTableMigrate('settings_home');

        $this->createTable('settings_home', [
            'id' => $this->primaryKey(),

			'name' => $this->string(255)->notNull(),
			'imageBanner' => $this->string(255)->null(),

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
        $this->dropTable('settings_home');
    }
}
