<?php

namespace common\models;

class Link extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return "{{%link}}";
    }
}
