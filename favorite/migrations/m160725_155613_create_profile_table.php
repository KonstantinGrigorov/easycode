<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `profile_table`.
 */
class m160725_155613_create_profile_table extends Migration
{
   public function safeUp()
    {
        $this->createTable(
            'profile',
            [
                'user_id' => Schema::TYPE_PK,
                'avatar' => Schema::TYPE_STRING,
                'first_name' => Schema::TYPE_STRING.'(32)',
                'second_name' => Schema::TYPE_STRING.'(32)',
                'middle_name' => Schema::TYPE_STRING.'(32)',
                'birthday' => Schema::TYPE_INTEGER,
                'gender' => Schema::TYPE_SMALLINT
            ]
        );
        $this->addForeignKey( //создание связи
                'profile_user', //название связи
                'profile', //табл, к-рую связываем
                'user_id', //поле табл, к-рую связываем
                'user', //табл, С к-рой связь
                'id', //поле табл С к-рой связь
                'cascade', // при удалении автомат удаляется строка у связ табл
                'cascade' //при изм первичного ключа автомат изм первичный ключ у связ табл
        );
    }
    public function safeDown()
    {
        $this->dropForeignKey('profile_user', 'profile');
        $this->dropTable('profile');
    }
}
