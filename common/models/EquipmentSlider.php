<?php

namespace common\models;

use yii\db\Exception;
use yii\db\StaleObjectException;

class EquipmentSlider extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%equipment_slider}}';
    }

    public function rules(): array
    {
        return [
            [['title', 'href'], 'string'],
            [['image_id', 'link_id', 'equipment_id'], 'integer'],
        ];
    }

    public function getImage(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Image::class, ['id' => 'image_id']);
    }

    public function setImage($data)
    {
        $this->save(false);
        if ($this->image) {
            $image = $this->image;
            $this->unlink('image', $image);
            $image->delete();
        }
        $image = new Image($data);
        $image->save();
        $this->link('image', $image);
    }

    public function getAction(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Link::class, ['id' => 'link_id']);
    }

    /**
     * @throws Exception
     * @throws StaleObjectException
     */
    public function setAction($data)
    {
        $this->save(false);
        if ($this->action) {
            $action = $this->action;
            $this->unlink('action', $action);
            $action->delete();
        }
        $link = new Link($data);
        $link->save();
        $this->link('action', $link);
    }
}
