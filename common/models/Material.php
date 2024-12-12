<?php

namespace common\models;

/**
 *
 * @property string $href
 * @property string $name
 * @property string $size
 * @property string $format
 * @property integer $material_id
 */
class Material extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return "{{%material}}";
    }

    public function rules(): array
    {
        return [
            [['href', 'name', 'size', 'format'], 'string'],
            [['element_id'], 'integer'],
        ];
    }
}
