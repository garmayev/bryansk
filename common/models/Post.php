<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * @property string $title
 * @property string $image
 * @property string $text
 * @property string $summary
 * @property integer $created_at
 * @property boolean $is_file
 */
class Post extends ActiveRecord
{
    public $file;
    public $is_file;

    public function behaviors(): array
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => false,
            ]
        ];
    }

    public static function tableName(): string
    {
        return '{{%post}}';
    }

    public function rules(): array
    {
        return [
            [['title'], 'required'],
            [['image', 'title', 'text', 'summary'], 'string'],
            [['created_at'], 'integer'],
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, svg'],
            [['is_file'], 'boolean']
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'image' => \Yii::t('backend', 'Image'),
            'title' => \Yii::t('backend', 'Title'),
            'text' => \Yii::t('backend', 'Text'),
            'created_at' => \Yii::t('backend', 'Created At'),
            'file' => \Yii::t('backend', 'File'),
            'is_file' => \Yii::t('backend', 'Is File'),
        ];
    }

    public function beforeDelete()
    {
        if ( isset($model->image) ) {
            unlink(\Yii::getAlias('@frontend/web').$this->image);
        }
        return parent::beforeDelete();
    }

    public function upload()
    {
        if ( $this->validate() && isset($this->file) ) {
            $fileName = "/images/upload/{$this->file->baseName}.{$this->file->extension}";
            if ($this->file->saveAs(\Yii::getAlias('@frontend/web') . $fileName, false)) {
                $this->image = $fileName;
                return true;
            } else {
                return false;
            }
        }
        return true;
    }
}
