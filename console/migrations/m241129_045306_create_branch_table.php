<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%branch}}`.
 */
class m241129_045306_create_branch_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%branch}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'region' => $this->string(),
            'address' => $this->string(),
            'latitude' => $this->double(),
            'longitude' => $this->double(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'type' => $this->integer(),
            'city' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%branch}}');
    }
}
