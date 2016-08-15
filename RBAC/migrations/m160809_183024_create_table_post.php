<?php

use yii\db\Migration;
use yii\db\Schema;

class m160809_183024_create_table_post extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'post',
            [
                'id' => Schema::TYPE_PK,
                'title' => Schema::TYPE_STRING.' NOT NULL',
                'text' => Schema::TYPE_TEXT.' NOT NULL',
                'discription' => Schema::TYPE_TEXT.'(150)',
                'user_id' => Schema::TYPE_INTEGER
                
            ]
        );
        
    }
    public function safeDown()
    {
        $this->dropTable('post');
    }
}
