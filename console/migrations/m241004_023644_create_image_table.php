<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%image}}`.
 */
class m241004_023644_create_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%image}}', [
            'id' => $this->primaryKey(),
            'class' => $this->string(),
            'src' => $this->string(),
            'alt' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%image}}');
    }
}
