<?php

use yii\db\Migration;

/**
 * Handles the creation of table `author`.
 */
class m180523_060751_create_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'name' => $this->string(199)->notNull(),
            'gender' => $this->string(1)->notNull(),
            'nationality' => $this->string(30)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('author');
    }
}
