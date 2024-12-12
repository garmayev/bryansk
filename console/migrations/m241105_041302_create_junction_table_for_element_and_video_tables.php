<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%element_video}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%element}}`
 * - `{{%video}}`
 */
class m241105_041302_create_junction_table_for_element_and_video_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%element_video}}', [
            'element_id' => $this->integer(),
            'video_id' => $this->integer(),
            'PRIMARY KEY(element_id, video_id)',
        ]);

        // creates index for column `element_id`
        $this->createIndex(
            '{{%idx-element_video-element_id}}',
            '{{%element_video}}',
            'element_id'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-element_video-element_id}}',
            '{{%element_video}}',
            'element_id',
            '{{%element}}',
            'id',
            'CASCADE'
        );

        // creates index for column `video_id`
        $this->createIndex(
            '{{%idx-element_video-video_id}}',
            '{{%element_video}}',
            'video_id'
        );

        // add foreign key for table `{{%video}}`
        $this->addForeignKey(
            '{{%fk-element_video-video_id}}',
            '{{%element_video}}',
            'video_id',
            '{{%video}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%element}}`
        $this->dropForeignKey(
            '{{%fk-element_video-element_id}}',
            '{{%element_video}}'
        );

        // drops index for column `element_id`
        $this->dropIndex(
            '{{%idx-element_video-element_id}}',
            '{{%element_video}}'
        );

        // drops foreign key for table `{{%video}}`
        $this->dropForeignKey(
            '{{%fk-element_video-video_id}}',
            '{{%element_video}}'
        );

        // drops index for column `video_id`
        $this->dropIndex(
            '{{%idx-element_video-video_id}}',
            '{{%element_video}}'
        );

        $this->dropTable('{{%element_video}}');
    }
}
