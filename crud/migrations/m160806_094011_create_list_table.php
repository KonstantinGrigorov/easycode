<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `list`.
 */
class m160806_094011_create_list_table extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'list',
            [
                'id' => Schema::TYPE_PK,
                'title' => Schema::TYPE_TEXT.' NOT NULL',
                'description' => Schema::TYPE_TEXT,
                               
            ]
        );
        
    }
    public function safeDown()
    {
        $this->dropTable('list');
    }
}