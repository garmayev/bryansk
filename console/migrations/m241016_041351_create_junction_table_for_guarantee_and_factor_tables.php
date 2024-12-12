<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%guarantee_factor}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%guarantee}}`
 * - `{{%factor}}`
 */
class m241016_041351_create_junction_table_for_guarantee_and_factor_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%guarantee_factor}}', [
            'guarantee_id' => $this->integer(),
            'factor_id' => $this->integer(),
            'PRIMARY KEY(guarantee_id, factor_id)',
        ]);

        // creates index for column `guarantee_id`
        $this->createIndex(
            '{{%idx-guarantee_factor-guarantee_id}}',
            '{{%guarantee_factor}}',
            'guarantee_id'
        );

        // add foreign key for table `{{%guarantee}}`
        $this->addForeignKey(
            '{{%fk-guarantee_factor-guarantee_id}}',
            '{{%guarantee_factor}}',
            'guarantee_id',
            '{{%guarantee}}',
            'id',
            'CASCADE'
        );

        // creates index for column `factor_id`
        $this->createIndex(
            '{{%idx-guarantee_factor-factor_id}}',
            '{{%guarantee_factor}}',
            'factor_id'
        );

        // add foreign key for table `{{%factor}}`
        $this->addForeignKey(
            '{{%fk-guarantee_factor-factor_id}}',
            '{{%guarantee_factor}}',
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
        // drops foreign key for table `{{%guarantee}}`
        $this->dropForeignKey(
            '{{%fk-guarantee_factor-guarantee_id}}',
            '{{%guarantee_factor}}'
        );

        // drops index for column `guarantee_id`
        $this->dropIndex(
            '{{%idx-guarantee_factor-guarantee_id}}',
            '{{%guarantee_factor}}'
        );

        // drops foreign key for table `{{%factor}}`
        $this->dropForeignKey(
            '{{%fk-guarantee_factor-factor_id}}',
            '{{%guarantee_factor}}'
        );

        // drops index for column `factor_id`
        $this->dropIndex(
            '{{%idx-guarantee_factor-factor_id}}',
            '{{%guarantee_factor}}'
        );

        $this->dropTable('{{%guarantee_factor}}');
    }
}
