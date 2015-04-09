<?php

namespace jpunanua\seotools\models\base;

use Yii;

/**
 * This is the model class for table "meta".
 *
 * @property integer $id_meta
 * @property string $hash
 * @property string $route

 * @property string $robots_index
 * @property string $robots_follow
 * @property string $author
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $info
 * @property integer $sitemap
 * @property string $sitemap_change_freq
 * @property string $sitemap_priority
 * @property string $created_at
 * @property string $updated_at
 */
class MetaBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'meta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hash', 'route', 'created_at', 'updated_at'], 'required'],
            [['robots_index', 'robots_follow', 'keywords', 'description', 'info'], 'string'],
            [['sitemap'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['hash', 'route', 'author', 'title'], 'string', 'max' => 255],
            [['sitemap_change_freq'], 'string', 'max' => 20],
            [['sitemap_priority'], 'string', 'max' => 4],
            [['hash'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_meta' => 'Id Meta',
            'hash' => 'Hash',
            'route' => 'Route',
            'robots_index' => 'Robots Index',
            'robots_follow' => 'Robots Follow',
            'author' => 'Author',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'sitemap' => 'Sitemap',
            'sitemap_change_freq' => 'Sitemap Change Freq',
            'sitemap_priority' => 'Sitemap Priority',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
