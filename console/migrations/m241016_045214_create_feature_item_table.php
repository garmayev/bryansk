<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%feature_item}}`.
 */
class m241016_045214_create_feature_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%feature_item}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'feature_key_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%feature_item}}');
    }
}
