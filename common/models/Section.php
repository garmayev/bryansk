<?php

namespace common\models;

/**
 *
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property string $code
 * @property integer $parent_id
 * @property integer $sort
 * @property integer $type
 * @property Video[] $videos
 *
 * @property-read Section[] $child
 * @property Description[] $descriptions
 * @property-read Element[] $elements
 */
class Section extends \yii\db\ActiveRecord
{
    const TYPE_CATALOG = 1;
    const TYPE_ELECTRONIC_SYSTEM = 2;

    public static function tableName(): string
    {
        return '{{%section}}';
    }

    public function rules(): array
    {
        return [
            [['name', 'image', 'code'], 'string'],
            [['parent_id', 'sort', 'type'], 'integer'],
            [['videos'], 'safe']
        ];
    }

    private function findVideo($data)
    {
        $query = Video::find();
        foreach ($data as $key => $item) {
            $query->andWhere([$key => $item]);
        }
        return $query->one();
    }

    public function getVideos(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Video::class, ['id' => 'video_id'])->viaTable('section_video', ['section_id' => 'id']);
    }

    public function setVideos($data)
    {
        $this->save(false);
        foreach ($this->videos as $video) {
            $this->unlink('videos', $video, true);
        }
        foreach ($data as $item) {
            $video = $this->findVideo($item);
            if (is_null($video)) {
                $video = new Video($item);
                $video->save();
            }
            $this->link('videos', $video);
        }
    }

    public function getChild(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Section::class, ['parent_id' => 'id']);
    }

    public function getDescriptions(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Description::class, ['id' => 'description_id'])->viaTable('section_description', ['section_id' => 'id']);
    }

    public function getElements(): \yii\db\ActiveQuery
    {
        return $this->hasMany(Element::class, ["section_id" => "id"]);
    }
}
