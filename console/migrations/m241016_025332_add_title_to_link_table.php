<?php

use yii\db\Migration;

/**
 * Class m241016_025332_add_title_to_link_table
 */
class m241016_025332_add_title_to_link_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%link}}', 'title', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%link}}', 'title');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241016_025332_add_title_to_link_table cannot be reverted.\n";

        return false;
    }
    */
}
