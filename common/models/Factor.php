<?php

namespace common\models;

/**
 *
 * @property string $heading_color
 * @property string $suffix
 * @property string $heading
 * @property string $text
 * @property string $separator
 */
class Factor extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return "{{%factor}}";
    }

    public function rules(): array
    {
        return [
            [['heading_color', 'separator', 'heading', 'suffix', 'text'], 'string'],
        ];
    }
}
