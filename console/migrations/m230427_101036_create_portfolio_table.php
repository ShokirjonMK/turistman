<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%portfolio}}`.
 */
class m230427_101036_create_portfolio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->dropTableMigrate('portfolio');

		$this->createTable('{{%portfolio}}', [
            'id' => $this->primaryKey(),

			'title' => $this->string(255)->null(),
			'image' => $this->string(255)->null(),
			'date' => $this->date()->null(),
            'description' => $this->text()->null(),

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
        $this->dropTable('{{%portfolio}}');
    }
}
