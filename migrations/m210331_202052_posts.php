<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210331_202052_posts
 */
class m210331_202052_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('posts', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'short' => Schema::TYPE_STRING,
            'content' => Schema::TYPE_TEXT,
            'data_status' => Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_TIMESTAMP,
            'updated_at' => Schema::TYPE_TIMESTAMP,
            'created_by' => Schema::TYPE_INTEGER,
            'updated_by' => Schema::TYPE_INTEGER,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('posts');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210331_202052_posts cannot be reverted.\n";

        return false;
    }
    */
}
