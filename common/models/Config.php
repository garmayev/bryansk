<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * @property string $title
 * @property string $value
 */
class Config extends ActiveRecord
{
    public static function tableName()
    {
        return "{{%config}}";
    }
}
