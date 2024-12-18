<?php

use yii\db\Migration;

/**
 * Class m241016_005123_add_image_id_to_slide_table
 */
class m241016_005123_add_image_id_to_slide_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("{{%slide}}", "image_id", $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241016_005123_add_image_id_to_slide_table cannot be reverted.\n";

        return false;
    }
    */
}
