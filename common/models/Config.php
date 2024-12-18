<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * @property string $title
 * @property string $value
 * @property string $description
 * @property string $type
 */
class Config extends ActiveRecord
{
    public static function tableName()
    {
        return "{{%config}}";
    }

    public function rules()
    {
        return [
            [['description', 'value', 'title', 'type'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'description' => \Yii::t('backend', 'Description'),
            'value' => \Yii::t('backend', 'Value'),
        ];
    }
}
