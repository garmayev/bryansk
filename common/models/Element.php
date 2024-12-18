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

    private function findSubclass($className, $data)
    {
        $query = $className::find();
        foreach ($data as $key => $item) {
            if (!is_array($item) && $key !== 'actions') {
                $query->andWhere([$key => $item]);
            }
        }
        return $query->one();
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
            $this->general_description->load(["Description" => $data]) && $this->general_description->save();
        } else {
            $description = new Description($data);
            $description->save();
            $this->link('general_description', $description);
        }
    }

    public function getDescription_list(): \yii\db\ActiveQuery
    {
        return $this->hasOne(DescriptionList::class, ['element_id' => 'id']);
    }

    public function setDescription_list($data)
    {
        $this->save(false);
        if ($this->description_list) {
            $this->description_list->load(['DescriptionList' => $data]);
        } else {
            $descriptionList = new DescriptionList($data);
            $descriptionList->save();
            $this->link('description_list', $descriptionList);
        }
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
        }
        foreach ($data as $item) {
            $material = $this->findSubclass(Material::class, $item);
            if (empty($material)) {
                $material = new Material($item);
                $material->save(false);
                $this->link('materials', $material);
            } else {
                $material->load(["Material" => $item]) && $material->save();
            }
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
            $this->tech_characteristics->load(['Tech' => $data]) && $this->tech_characteristics->save();
        } else {
            $tech = new Tech($data);
            $tech->save();
            $this->link('tech_characteristics', $tech);
        }
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
        }
        foreach ($data as $item) {
            $review = $this->findSubclass(Review::class, $item);
            if (empty($review)) {
                $review = new Review($item);
                $review->save();
            } else {
                $review->load(["Review" => $item]) && $review->save();
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
            $this->equipments->load(['Equipment' => $data]) && $this->equipments->save();
        } else {
            $eq = new Equipment($data);
            $eq->save();
            $this->link('equipments', $eq);
        }
    }

    public function getOptions(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Option::class, ['element_id' => 'id']);
    }

    public function setOptions($data)
    {
        $this->save(false);
        if ($this->options) {
            $this->options->load($data) && $this->options->save();
        } else {
            $option = new Option($data);
            $option->save();
            $this->link('options', $option);
        }
    }

    public function getGuarantee(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Guarantee::class, ['element_id' => 'id']);
    }

    public function setGuarantee($data)
    {
        $this->save(false);
        if ($this->guarantee) {
            $this->guarantee->load(['Guarantee' => $data]) && $this->guarantee->save();
        } else {
            $guarantee = new Guarantee($data);
            $guarantee->save();
            $this->link('guarantee', $guarantee);
        }
    }

    public function getKey_features(): \yii\db\ActiveQuery
    {
        return $this->hasOne(FeatureKey::class, ['element_id' => 'id']);
    }

    public function setKey_features($data)
    {
        $this->save(false);
        if ($this->key_features) {
            $key = $this->key_features;
            $this->unlink('key_features', $key, true);
            $key->delete();
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
            $this->task_list->load(["TaskList" => $data]);
            $this->task_list->save();
        } else {
            $task = new TaskList($data);
            $task->save();
            $this->link('task_list', $task);
        }
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
        }
        foreach ($data as $item) {
            $video = $this->findSubclass(Video::class, $item);
            if (empty($video)) {
                $video = new Video($item);
                $video->save();
            } else {
                $video->load(["Video" => $data]) && $video->save();
            }
            $this->link('videos', $video);
        }
    }

    public function getSection(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Section::class, ['id' => 'section_id']);
    }
}
