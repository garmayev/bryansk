<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m241112_021744_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'title' => $this->string(),
            'text' => 'LONGTEXT',
            'summary' => 'LONGTEXT',
            'created_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
