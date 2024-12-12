<?php

namespace common\models;

/**
 * @property string $class
 * @property string $src
 * @property string $alt
 */
class Image extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return "{{%image}}";
    }

    public function rules(): array
    {
        return [
            [['class', 'src', 'alt'], 'string']
        ];
    }
}
