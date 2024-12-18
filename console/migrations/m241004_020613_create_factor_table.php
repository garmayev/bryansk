<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%factor}}`.
 */
class m241004_020613_create_factor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%factor}}', [
            'id' => $this->primaryKey(),
            'heading_color' => $this->string(),
            'separator' => $this->string(),
            'heading' => $this->string(),
            'suffix' => $this->string(),
            'text' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%factor}}');
    }
}
