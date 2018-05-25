<?php

use yii\db\Migration;

/**
 * Handles the creation of table `genre`.
 */
class m180523_060540_create_genre_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('genre', [
            'id' => $this->primaryKey(),
            'genre' => $this->string(99)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('genre');
    }
}
