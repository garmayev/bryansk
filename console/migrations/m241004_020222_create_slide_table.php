<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slide}}`.
 */
class m241004_020222_create_slide_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%slide}}', [
            'id' => $this->primaryKey(),
            'active' => $this->boolean(),
            'title' => $this->string(),
            'alt' => $this->string(),
            'image' => $this->string(),
            'text' => $this->string(),
            'overlay' => $this->boolean(),
            'subtitle_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%slide}}');
    }
}
