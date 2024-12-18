<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%video}}`.
 */
class m241004_015209_create_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%video}}', [
            'id' => $this->primaryKey(),
            'src' => $this->string(),
            'poster' => $this->string(),
            'description' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%video}}');
    }
}
