<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $title
 * @property int $genre_id
 * @property int $ISBN
 * @property string $publishDate
 * @property string $reviewDate
 * @property string $review
 *
 * @property Genre $genre
 * @property BookAuthor[] $bookAuthors
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'genre_id', 'review'], 'required'],
            [['genre_id', 'ISBN'], 'integer'],
            [['publishDate', 'reviewDate'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['review'], 'string', 'max' => 99],
            [['genre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'genre_id' => 'Genre ID',
            'ISBN' => 'ISBN',
            'publishDate' => 'Publish Date',
            'reviewDate' => 'Review Date',
            'review' => 'Review',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'genre_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookAuthors()
    {
        return $this->hasMany(BookAuthor::className(), ['book_id' => 'id']);
    }
}
