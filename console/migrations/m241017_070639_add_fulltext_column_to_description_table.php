<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%description}}`.
 */
class m241017_070639_add_fulltext_column_to_description_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%description}}', 'fulltext', $this->text());
        $this->addColumn('{{%description}}', 'lead', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%description}}', 'fulltext');
        $this->dropColumn('{{%description}}', 'lead');
    }
}
