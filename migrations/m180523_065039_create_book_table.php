<?php

use yii\db\Migration;

/**
 * Handles the creation of table `book`.
 */
class m180523_065039_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200)->notNull(),
            'genre_id' => $this->integer()->notNull(),
            'ISBN' => $this->integer(1)->defaultValue(1),
            'publishDate' => $this->date('DATE'),
            'reviewDate' => $this->date("DATE"),
            'review' => $this->string(99)->notNull()
        ]);

        $this->createIndex(
            'idx-book-genre_id',
            'book','genre_id');

        $this->addForeignKey(
            'fk-book-genre',
            'book','genre_id',
            'genre','id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-book-genre','book');
        $this->dropIndex('idx-book-genre_id', 'book');
        $this->dropTable('book');
    }

}
