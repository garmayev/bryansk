<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%feature_key}}`.
 */
class m241016_045105_create_feature_key_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%feature_key}}', [
            'id' => $this->primaryKey(),
            'heading' => $this->string(),
            'element_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%feature_key}}');
    }
}
