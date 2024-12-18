<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slider}}`.
 */
class m241112_045745_create_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%slider}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()
        ]);

        $this->addColumn('{{%slide}}', 'order', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%slider}}');

        $this->dropColumn('{{%slide}}', 'order');
    }
}
