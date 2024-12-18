<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%description_factor}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%description}}`
 * - `{{%factor}}`
 */
class m241004_020946_create_junction_table_for_description_and_factor_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%description_factor}}', [
            'description_id' => $this->integer(),
            'factor_id' => $this->integer(),
            'PRIMARY KEY(description_id, factor_id)',
        ]);

        // creates index for column `description_id`
        $this->createIndex(
            '{{%idx-description_factor-description_id}}',
            '{{%description_factor}}',
            'description_id'
        );

        // add foreign key for table `{{%description}}`
        $this->addForeignKey(
            '{{%fk-description_factor-description_id}}',
            '{{%description_factor}}',
            'description_id',
            '{{%description}}',
            'id',
            'CASCADE'
        );

        // creates index for column `factor_id`
        $this->createIndex(
            '{{%idx-description_factor-factor_id}}',
            '{{%description_factor}}',
            'factor_id'
        );

        // add foreign key for table `{{%factor}}`
        $this->addForeignKey(
            '{{%fk-description_factor-factor_id}}',
            '{{%description_factor}}',
            'factor_id',
            '{{%factor}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%description}}`
        $this->dropForeignKey(
            '{{%fk-description_factor-description_id}}',
            '{{%description_factor}}'
        );

        // drops index for column `description_id`
        $this->dropIndex(
            '{{%idx-description_factor-description_id}}',
            '{{%description_factor}}'
        );

        // drops foreign key for table `{{%factor}}`
        $this->dropForeignKey(
            '{{%fk-description_factor-factor_id}}',
            '{{%description_factor}}'
        );

        // drops index for column `factor_id`
        $this->dropIndex(
            '{{%idx-description_factor-factor_id}}',
            '{{%description_factor}}'
        );

        $this->dropTable('{{%description_factor}}');
    }
}
