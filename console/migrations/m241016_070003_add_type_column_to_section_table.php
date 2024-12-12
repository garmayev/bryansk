<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%section}}`.
 */
class m241016_070003_add_type_column_to_section_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%section}}', 'type', $this->integer());
        $this->addColumn('{{%element}}', 'type', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%section}}', 'type');
        $this->dropColumn('{{%element}}', 'type');
    }
}
