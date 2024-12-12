<?php

use yii\db\Migration;

/**
 * Class m241112_072555_add_column_summary_to_post_table
 */
class m241112_072555_add_column_summary_to_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%post}}', 'summary', 'LONGTEXT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%post}}', 'summary');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241112_072555_add_column_summary_to_post_table cannot be reverted.\n";

        return false;
    }
    */
}
