<?php

use yii\db\Migration;

/**
 * Class m241129_055718_add_column_branch_to_slider_table
 */
class m241129_055718_add_column_branch_to_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%slider}}', 'branch_id', $this->integer());
        $this->addColumn('{{%slider}}', 'is_main', $this->integer());

        $this->createIndex(
            'idx-slider-branch_id',
            '{{%slider}}',
            'branch_id',
        );

        $this->addForeignKey(
            'fk-slider-branch_id',
            '{{%slider}}',
            'branch_id',
            '{{%branch}}',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-slider-branch_id', '{{%slider}}');
        $this->dropIndex('idx-slider-branch_id', '{{%slider}}');
        $this->dropColumn('{{%slider}}', 'branch_id');
        $this->dropColumn('{{%slider}}', 'is_main');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241129_055718_add_column_branch_to_slider_table cannot be reverted.\n";

        return false;
    }
    */
}
