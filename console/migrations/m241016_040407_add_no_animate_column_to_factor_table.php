<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%factor}}`.
 */
class m241016_040407_add_no_animate_column_to_factor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%factor}}', 'no_animate', $this->boolean());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%factor}}', 'no_animate');
    }
}
