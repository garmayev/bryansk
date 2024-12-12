<?php

namespace common\models;

/**
 *
 * @property integer $id
 * @property string $title
 * @property string $alt
 * @property string $image
 * @property string $text
 * @property boolean $active
 * @property boolean $overlay
 * @property integer $subtitle_id
 * @property integer $image_id
 *
 * @property \yii\db\ActiveQuery $actions
 * @property \yii\db\ActiveQuery $subtitle
 * @property-read Factor[] $factor_list
 */
class Slide extends \yii\db\ActiveRecord
{
    /**
     * @var mixed|null
     */

    public static function tableName(): string
    {
        return "{{%slide}}";
    }

    public function rules(): array
    {
        return [
            [['active', 'overlay'], 'boolean'],
            [['title', 'alt', 'image', 'text'], 'string'],
            [['subtitle_id', 'id', 'image_id'], 'integer']
        ];
    }

    public function fields(): array
    {
        return [
            'active',
            'title',
            'alt',
            'image',
            'text',
            'overlay',
            'subtitle',
            'actions' => function ($model) {
                return ["items" => $model->actions];
            },
            'factor_list' => function ($model) {
                return ["items" => $model->factor_list];
            }
        ];
    }

    public function getImage()
    {
        return $this->image_id ? $this->hasOne(Image::class, ['id' => 'image_id']) : $this->image;
    }

    public function setImage($data) {
        if (is_string($data)) {
            $this->image = $data;
        }
        if (is_array($data)) {
            $this->save(false);
            if ($this->image) {
                $image = new Image($data);
                $image->save();
            }
            $this->link('image', $image);
        }
    }

    public function getSubtitle(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Link::class, ['id' => 'subtitle_id']);
    }

    public function setSubtitle($data)
    {
        $sub = $this->subtitle;
        if ($sub) {
            $this->unlink('subtitle', $sub);
            $sub->delete();
        }
        $link = new Link($data);
        $link->save();
        $this->link('subtitle', $link);
    }

    public function getElement()
    {
        return $this->hasOne(Element::class, ['id' => 'element_id'])->viaTable('element_slide', ['slide_id' => 'id']);
    }

    public function getActions(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Link::class, ['id' => 'link_id'])->viaTable('slide_link', ['slide_id' => 'id']);
    }

    public function setActions($data)
    {
        $this->save(false);
        if ($this->actions) {
            foreach ($this->actions as $action) {
                $this->unlink('actions', $action, true);
                $action->delete();
            }
        }
        if (isset($data['items'])) {
            foreach ($data["items"] as $item) {
                $link = new Link($item);
                $link->save();
                $this->link('actions', $link);
            }
        }
    }

    public function getFactor_list(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Factor::class, ['id' => 'factor_id'])->viaTable('slide_factor', ['slide_id' => 'id']);
    }

    public function setFactor_list($data)
    {
        $this->save(false);
        foreach ($data['items'] as $item) {
            $factor = new Factor($item);
            $factor->save();
            $this->link('factor_list', $factor);
        }
    }
}
