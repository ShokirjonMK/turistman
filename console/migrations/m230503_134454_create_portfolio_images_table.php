<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%portfolio_images}}`.
 */
class m230503_134454_create_portfolio_images_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->dropTableMigrate('portfolio_images');

        $this->createTable('{{%portfolio_images}}', [
            'id' => $this->primaryKey(),

			'portfolio_id' => $this->integer(11)->null(),
			'image' => $this->string(255)->null(),

			'status' => $this->tinyInteger(1)->notNull()->defaultValue(1),
			'is_deleted' => $this->tinyInteger(1)->notNull()->defaultValue(0),
			'created_at' => $this->integer()->notNull(),
			'updated_at' => $this->integer()->notNull(),
			'created_by' => $this->integer()->notNull(),
			'updated_by' => $this->integer()->notNull(),

        ]);

		$this->addForeignKey('pr_portfolio_images', 'portfolio_images', 'portfolio_id', 'portfolio', 'id');

	}

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%portfolio_images}}');
    }
}
