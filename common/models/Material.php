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
    public $file;

    public static function tableName(): string
    {
        return "{{%material}}";
    }

    public function rules(): array
    {
        return [
            [['href', 'name', 'size', 'format'], 'string'],
            [['element_id'], 'integer'],
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf, jpg, jpeg, png'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'href' => \Yii::t('backend', 'Href'),
            'name' => \Yii::t('backend', 'Name'),
            'size' => \Yii::t('backend', 'Size'),
            'format' => \Yii::t('backend', 'Format'),
        ];
    }

    public function upload()
    {
        if ($this->validate() && isset($this->file)) {
            $fileName = "/images/upload/{$this->file->baseName}.{$this->file->extension}";
            if ($this->file->saveAs(\Yii::getAlias('@frontend/web') . $fileName, false)) {
                $filesize = filesize(\Yii::getAlias('@frontend/web') . $fileName);
                $this->href = $fileName;
                $this->size = \Yii::$app->formatter->asShortSize($filesize);
                $this->format = $this->file->extension;
                return true;
            } else {
                return false;
            }
        }
        return true;
    }
}
