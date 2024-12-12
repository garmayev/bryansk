<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%element}}`.
 */
class m241004_015357_create_element_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%element}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(),
            'section_id' => $this->integer(),
            'name' => $this->string(),
            'image' => $this->string(),
            'guinness_mark' => $this->boolean(),
            'record_20_mark' => $this->boolean(),
            'description_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%element}}');
    }
}
