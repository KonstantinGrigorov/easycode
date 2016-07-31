<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `user_table`.
 */
class m160720_104926_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(
            'user', 
            [
            'id'=>Schema::TYPE_PK,
            'password'=>Schema::TYPE_STRING.' NOT NULL',
            'email'=>Schema::TYPE_STRING.' NOT NULL'
            ]
            );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
