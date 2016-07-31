<?php

use yii\db\Migration;

/**
 * Handles the dropping for table `user_table`.
 */
class m160709_085550_drop_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropTable('user');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        echo "m160709_085550_drop_user_table cannot be reverted.\n";

        return false;
    }
}
