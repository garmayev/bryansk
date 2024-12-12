<?php

namespace common\models;

/**
 * @property string $name
 * @property string $image
 * @property string $content
 * @property integer $element_id
 */
class Review extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%review}}';
    }

    public function rules(): array
    {
        return [
            [['name', 'image', 'content'], 'string'],
            [['element_id'], 'integer']
        ];
    }
}
