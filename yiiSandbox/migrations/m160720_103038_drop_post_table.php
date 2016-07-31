<?php

use yii\db\Migration;

/**
 * Handles the dropping for table `post_table`.
 */
class m160720_103038_drop_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropTable('post');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        
        echo "m160720_103038_drop_post_table cannot be reverted.\n";

        return false;
    }
}
