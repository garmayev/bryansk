<?php

namespace common\models;

/**
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $image
 * @property integer $section_id
 * @property boolean $guinness_mark
 * @property boolean $record_20_mark
 *
 * @property Slide[] $slides
 * @property Description $general_description
 * @property FeatureKey $key_features
 * @property Guarantee $guarantee
 * @property Tech $tech_characteristics
 * @property Option $options
 * @property Review $reviews
 * @property Equipment $equipments
 * @property DescriptionList $description_list
 * @property TaskList $task_list
 * @property Video[] $videos
 * @property-read \yii\db\ActiveQuery $section
 * @property Material[] $materials
 */
class Element extends \yii\db\ActiveRecord
{
    const TYPE_CATALOG = 1;
    const TYPE_ELECTRONIC_SYSTEM = 2;

    public static function tableName(): string
    {
        return '{{%element}}';
    }

    public function rules(): array
    {
        return [
            [['code', 'name', 'image', 'description'], 'string'],
            [['id', 'section_id'], 'integer'],
            [['guinness_mark', 'record_20_mark'], 'boolean'],
            [[
                'slides',
                'general_description',
                'description_list',
                'materials',
                'tech_description',
                'reviews',
                'equipments',
                'options',
                'guarantee',
                'key_features',
                'task_list',
                'videos'
            ], 'safe']
        ];
    }

    public function getSlides(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Slide::class, ['id' => 'slide_id'])->viaTable('element_slide', ['element_id' => 'id']);
    }

    public function setSlides($data)
    {
        $this->save(false);
        foreach ($this->slides as $slide) {
            $this->unlink('slides', $slide, true);
            $slide->delete();
        }
        foreach ($data as $item) {
            $slide = new Slide($item);
            $slide->save();
            $this->link('slides', $slide);
        }
    }

    public function getGeneral_description(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Description::class, ['id' => 'description_id']);
    }

    public function setGeneral_description($data)
    {
        $this->save(false);
        if ($this->general_description) {
            $description = $this->general_description;
            $this->unlink('general_description', $description, true);
            $description->delete();
        }
        $description = new Description($data);
        $description->save();
        $this->link('general_description', $description);
    }

    public function getDescription_list(): \yii\db\ActiveQuery
    {
        return $this->hasOne(DescriptionList::class, ['element_id' => 'id']);
    }

    public function setDescription_list($data)
    {
        $this->save(false);
        if ($this->description_list) {
            $list = $this->description_list;
            $this->unlink('description_list', $this->description_list, true);
            $list->delete();
        }
        $descriptionList = new DescriptionList($data);
        $descriptionList->save();
        $this->link('description_list', $descriptionList);
    }

    public function getMaterials(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Material::class, ['element_id' => 'id']);
    }

    public function setMaterials($data)
    {
        $this->save(false);
        foreach ($this->materials as $material) {
            $this->unlink('materials', $material, true);
            $material->delete();
        }
        foreach ($data as $item) {
            $material = new Material($item);
            $material->save(false);
            $this->link('materials', $material);
        }
    }

    public function getTech_characteristics(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Tech::class, ['element_id' => 'id']);
    }

    public function setTech_characteristics($data)
    {
        $this->save(false);
        if ($this->tech_characteristics) {
            $characteristics = $this->tech_characteristics;
            $this->unlink('tech_characteristics', $characteristics, true);
            $characteristics->delete();
        }
        $tech = new Tech($data);
        $tech->save();
        $this->link('tech_characteristics', $tech);
    }

    public function getReviews(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Review::class, ['id' => 'review_id'])->viaTable('element_review', ['element_id' => 'id']);
    }

    public function setReviews($data)
    {
        $this->save(false);
        foreach ($this->reviews as $review) {
            $this->unlink('reviews', $review, true);
            $review->delete();
        }
        foreach ($data as $item) {
            if (empty($review = Review::findOne($item["id"]))) {
                $review = new Review($item);
                $review->save();
            }
            $this->link('reviews', $review);
        }
    }

    public function getEquipments(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Equipment::class, ['element_id' => 'id']);
    }

    public function setEquipments($data)
    {
        $this->save(false);
        if ($this->equipments) {
            $equipments = $this->equipments;
            $this->unlink('equipments', $equipments, true);
            $equipments->delete();
        }
        $eq = new Equipment($data);
        $eq->save();
        $this->link('equipments', $eq);
    }

    public function getOptions(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Option::class, ['element_id' => 'id']);
    }

    public function setOptions($data)
    {
        $this->save(false);
        if ($this->options) {
            $options = $this->options;
            $this->unlink('options', $this->options, true);
            $options->delete();
        }
        $option = new Option($data);
        $option->save();
        $this->link('options', $option);
    }

    public function getGuarantee(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Guarantee::class, ['element_id' => 'id']);
    }

    public function setGuarantee($data)
    {
        $this->save(false);
        if ($this->guarantee) {
            $guarantee = $this->guarantee;
            $this->unlink('guarantee', $guarantee, true);
            $guarantee->delete();
        }
        $guarantee = new Guarantee($data);
        $guarantee->save();
        $this->link('guarantee', $guarantee);
    }

    public function getKey_features(): \yii\db\ActiveQuery
    {
        return $this->hasOne(FeatureKey::class, ['element_id' => 'id']);
    }

    public function setKey_features($data)
    {
        $this->save(false);
        if ($this->key_features) {
            $key_features = $this->key_features;
            $this->unlink('key_features', $key_features, true);
            $key_features->delete();
        }
        $key = new FeatureKey($data);
        $key->save();
        $this->link('key_features', $key);
    }

    public function getTask_list(): \yii\db\ActiveQuery
    {
        return $this->hasOne(TaskList::class, ['element_id' => 'id']);
    }

    public function setTask_list($data)
    {
        $this->save(false);
        if ($this->task_list) {
            $task_list = $this->task_list;
            $this->unlink('task_list', $task_list, true);
            $task_list->delete();
        }
        $task = new TaskList($data);
        $task->save();
        $this->link('task_list', $task);
    }

    public function getVideos(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Video::class, ['id' => 'video_id'])->viaTable('element_video', ['element_id' => 'id']);
    }

    public function setVideos($data)
    {
        $this->save(false);
        foreach ($this->videos as $video) {
            $this->unlink('videos', $video, true);
            $video->delete();
        }
        foreach ($data as $item) {
            $video = new Video($item);
            $video->save();
            $this->link('videos', $video);
        }
    }

    public function getSection(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Section::class, ['id' => 'section_id']);
    }
}
