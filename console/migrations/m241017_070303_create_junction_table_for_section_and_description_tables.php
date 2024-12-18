<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%section_description}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%section}}`
 * - `{{%description}}`
 */
class m241017_070303_create_junction_table_for_section_and_description_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%section_description}}', [
            'section_id' => $this->integer(),
            'description_id' => $this->integer(),
            'PRIMARY KEY(section_id, description_id)',
        ]);

        // creates index for column `section_id`
        $this->createIndex(
            '{{%idx-section_description-section_id}}',
            '{{%section_description}}',
            'section_id'
        );

        // add foreign key for table `{{%section}}`
        $this->addForeignKey(
            '{{%fk-section_description-section_id}}',
            '{{%section_description}}',
            'section_id',
            '{{%section}}',
            'id',
            'CASCADE'
        );

        // creates index for column `description_id`
        $this->createIndex(
            '{{%idx-section_description-description_id}}',
            '{{%section_description}}',
            'description_id'
        );

        // add foreign key for table `{{%description}}`
        $this->addForeignKey(
            '{{%fk-section_description-description_id}}',
            '{{%section_description}}',
            'description_id',
            '{{%description}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%section}}`
        $this->dropForeignKey(
            '{{%fk-section_description-section_id}}',
            '{{%section_description}}'
        );

        // drops index for column `section_id`
        $this->dropIndex(
            '{{%idx-section_description-section_id}}',
            '{{%section_description}}'
        );

        // drops foreign key for table `{{%description}}`
        $this->dropForeignKey(
            '{{%fk-section_description-description_id}}',
            '{{%section_description}}'
        );

        // drops index for column `description_id`
        $this->dropIndex(
            '{{%idx-section_description-description_id}}',
            '{{%section_description}}'
        );

        $this->dropTable('{{%section_description}}');
    }
}
