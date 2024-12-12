<?php

namespace common\models;

class TechItem extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%tech_item}}';
    }

    public function rules(): array
    {
        return [
            [['title', 'content'], 'string']
        ];
    }
}
