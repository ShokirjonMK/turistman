<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog_comment}}`.
 */
class m230503_141750_create_blog_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->dropTableMigrate('blog_comment');

        $this->createTable('{{%blog_comment}}', [
            'id' => $this->primaryKey(),

			'user_id' => $this->integer(11)->null(),
			'blog_id' => $this->integer(11)->null(),
			'message' => $this->string(255)->null(),
			'date' => $this->string(255)->null(),

			'status' => $this->tinyInteger(1)->notNull()->defaultValue(1),
			'is_deleted' => $this->tinyInteger(1)->notNull()->defaultValue(0),
			'created_at' => $this->integer()->notNull(),
			'updated_at' => $this->integer()->notNull(),

        ]);

		$this->addForeignKey('user_comment', 'blog_comment', 'user_id', 'user', 'id');

		$this->addForeignKey('blog_blog', 'blog_comment', 'blog_id', 'blog', 'id');

	}

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blog_comment}}');
    }
}
