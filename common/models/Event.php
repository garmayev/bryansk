<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * @property string $title
 * @property string $image
 * @property string $text
 * @property integer $start_date
 * @property integer $status
 */
class Event extends ActiveRecord
{
    public $file;
    const STATUS_DISABLED = 0;
    const STATUS_ENABLED = 1;
    public static function tableName(): string
    {
        return "{{%event}}";
    }

    public function rules(): array
    {
        return [
            [['title', 'image', 'text'], 'string'],
            [['start_date', 'status'], 'integer'],
            [['status'], 'default', 'value' => self::STATUS_ENABLED],
            [['start_date'], 'default', 'value' => time()],
            [['file'], 'file']
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => \Yii::t('backend', 'Title'),
            'image' => \Yii::t('backend', 'Image'),
            'text' => \Yii::t('backend', 'Text'),
            'status' => \Yii::t('backend', 'Status'),
            'file' => \Yii::t('backend', 'File'),
            'start_date' => \Yii::t('backend', 'Start Date'),
        ];
    }

    public function upload()
    {
        if ($this->validate() && isset($this->file)) {
            \Yii::error($this->file);
            $fileName = "/images/upload/{$this->file->baseName}.{$this->file->extension}";
            if ($this->file->saveAs(\Yii::getAlias('@frontend/web') . $fileName, false)) {
                $this->image = $fileName;
                \Yii::error($fileName);
                return true;
            } else {
                return false;
            }
        }
        return $this->validate();
    }

    public function getDate($format = 'long')
    {
        return \Yii::$app->formatter->asDate($this->start_date, $format);
    }

    public function setDate($data)
    {
        $this->start_date = \Yii::$app->formatter->asTimestamp($data);
    }
}