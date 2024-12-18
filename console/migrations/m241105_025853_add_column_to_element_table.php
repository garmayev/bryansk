<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%element}}`.
 */
class m241105_025853_add_column_to_element_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%element}}', 'description', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%element}}', 'description');
    }
}
