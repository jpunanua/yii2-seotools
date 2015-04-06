<?php

use yii\db\Migration;

class m141024_123227_homepage_example extends Migration
{
    public function up()
    {
        $this->insert('{{%meta}}',[
            'hash' => '656c870b90f9469384e15e56292873e0',
            'route' => 'site/index',
            'params' => '[]',
            'robots_index' => 'INDEX',
            'robots_follow' => 'FOLLOW',
            'author' => 'My Company',
            'title' => 'My Company | Official Website',
            'keywords' => 'My Company, official website',
            'description' => 'The official website for My Company',
            'info' => 'My company is the best of the world yes yes it is, because i love it and i give it my heart',
            'sitemap' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function down()
    {
        \ptheofan\meta\models\Meta::deleteAll(['hash' => '656c870b90f9469384e15e56292873e0']);
    }
}
