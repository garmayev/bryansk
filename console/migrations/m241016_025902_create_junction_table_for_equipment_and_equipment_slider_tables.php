<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%equipment_equipment_slider}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%equipment}}`
 * - `{{%equipment_slider}}`
 */
class m241016_025902_create_junction_table_for_equipment_and_equipment_slider_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%equipment_equipment_slider}}', [
            'equipment_id' => $this->integer(),
            'equipment_slider_id' => $this->integer(),
            'PRIMARY KEY(equipment_id, equipment_slider_id)',
        ]);

        // creates index for column `equipment_id`
        $this->createIndex(
            '{{%idx-equipment_equipment_slider-equipment_id}}',
            '{{%equipment_equipment_slider}}',
            'equipment_id'
        );

        // add foreign key for table `{{%equipment}}`
        $this->addForeignKey(
            '{{%fk-equipment_equipment_slider-equipment_id}}',
            '{{%equipment_equipment_slider}}',
            'equipment_id',
            '{{%equipment}}',
            'id',
            'CASCADE'
        );

        // creates index for column `equipment_slider_id`
        $this->createIndex(
            '{{%idx-equipment_equipment_slider-equipment_slider_id}}',
            '{{%equipment_equipment_slider}}',
            'equipment_slider_id'
        );

        // add foreign key for table `{{%equipment_slider}}`
        $this->addForeignKey(
            '{{%fk-equipment_equipment_slider-equipment_slider_id}}',
            '{{%equipment_equipment_slider}}',
            'equipment_slider_id',
            '{{%equipment_slider}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%equipment}}`
        $this->dropForeignKey(
            '{{%fk-equipment_equipment_slider-equipment_id}}',
            '{{%equipment_equipment_slider}}'
        );

        // drops index for column `equipment_id`
        $this->dropIndex(
            '{{%idx-equipment_equipment_slider-equipment_id}}',
            '{{%equipment_equipment_slider}}'
        );

        // drops foreign key for table `{{%equipment_slider}}`
        $this->dropForeignKey(
            '{{%fk-equipment_equipment_slider-equipment_slider_id}}',
            '{{%equipment_equipment_slider}}'
        );

        // drops index for column `equipment_slider_id`
        $this->dropIndex(
            '{{%idx-equipment_equipment_slider-equipment_slider_id}}',
            '{{%equipment_equipment_slider}}'
        );

        $this->dropTable('{{%equipment_equipment_slider}}');
    }
}
