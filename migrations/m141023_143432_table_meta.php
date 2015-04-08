<?php

use yii\db\Schema;
use yii\db\Migration;

class m141023_143432_table_meta extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        /* MYSQL */
        $this->createTable('{{%meta}}', [
            'id_meta' => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT',
            'hash' => 'VARCHAR(255) NOT NULL',
            'route' => 'VARCHAR(255) NOT NULL',
            'robots_index' => 'ENUM(\'INDEX\',\'NOINDEX\') NULL',
            'robots_follow' => 'ENUM(\'FOLLOW\',\'NOFOLLOW\') NULL',
            'author' => 'VARCHAR(255) NULL',
            'title' => 'VARCHAR(255) NULL',
            'keywords' => 'TEXT NULL',
            'description' => 'TEXT NULL',
            'info' => 'TEXT NULL',
            'sitemap' => 'TINYINT(1) UNSIGNED NOT NULL DEFAULT \'1\'',
            'sitemap_change_freq' => 'VARCHAR(20) NULL',
            'sitemap_priority' => 'VARCHAR(4) NULL',
            'created_at' => Schema::TYPE_DATETIME . ' NOT NULL',
            'updated_at' => Schema::TYPE_DATETIME . ' NOT NULL',
            0 => 'PRIMARY KEY (`id_meta`)'
        ], $tableOptions);

        $this->createIndex('hash', '{{%meta}}', 'hash', true);
    }

    public function down()
    {
        $this->dropTable('{{%meta}}');
    }
}
