<?php

namespace backend\controllers;

use common\models\Element;
use common\models\Image;
use common\models\Section;
use common\models\Slide;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;

class FeedController extends Controller
{
    private function importSection($raw = null, $type = 1) {
        if (is_null($raw)) {
            $raw = json_decode(file_get_contents("https://rostselmash.com/feed/for-dealers/file.json"), true);
            $data = $raw["catalog"]['sections'];
        } else {
            $data = $raw['sections'];
        }
        foreach ($data as $key => $item) {
            $section = Section::findOne($item['id']);
            if (empty($section)) {
                $section = new Section(array_merge($item, ['type' => $type]));
            } else {
                $section->load(["Section" => array_merge($item, ['type' => $type])]);
            }
            if ($section->save()) {
                echo "Section #{$section->id} is saved\n";
            }
        }
    }

    private function importElement($raw = null, $type = 1) {
        if (is_null($raw)) {
            $raw = json_decode(file_get_contents("https://rostselmash.com/feed/for-dealers/file.json"), true);
            $data = $raw["catalog"]["elements"];
        } else {
            $data = $raw["elements"];
        }
        foreach ($data as $key => $item) {
            $element = Element::findOne($item["id"]);
            if (empty($element)) {
                $element = new Element(array_merge($item, ['type' => $type]));
            } else {
                $element->load(["Element" => array_merge($item, ['type' => $type])]);
            }
            if ($element->save()) {
                echo "Element ID: {$element->id} is loaded\n";
            } else {
                foreach ($element->getErrorSummary(true) as $error) {
                    echo $error;
                }
            }
        }
    }

    public function actionImport()
    {
        $targets = ["catalog", "electronic-systems"];
        $data = json_decode(file_get_contents("https://rostselmash.com/feed/for-dealers/file.json"), true);
        foreach ($targets as $target) {
            if (isset($data[$target])) {
                $this->importSection($data[$target], $target === "catalog" ? Section::TYPE_CATALOG : Section::TYPE_ELECTRONIC_SYSTEM);
                $this->importElement($data[$target], $target === "catalog" ? Section::TYPE_CATALOG : Section::TYPE_ELECTRONIC_SYSTEM);
            }
        }
        return $this->redirect(['site/index']);
    }

    function upload($url):string
    {
        preg_match('/([a-z0-9]*\.jpg|png|webp)/', $url, $files);
        if ($files) {
            $file = fopen(\Yii::getAlias('@frontend') . "/web/images/{$files[0]}", "w");

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_FILE, $file);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $image = curl_exec($ch);
            curl_close($ch);
            if ($image) {
                fwrite($file, $image);
                fclose($file);

                return "/images/{$files[0]}";
            } else {
                \Yii::error(curl_error($ch));
            }
        }
        return '';
    }

    public function actionUpload()
    {
        set_time_limit(3000000);
        foreach (Slide::find()->all() as $slide) {
            if ($a = $this->upload($slide->image)) {
                $slide->image = \Yii::$app->params['baseUrl'].$a;
                $slide->save();
            }
        }
        foreach (Image::find()->all() as $image) {
            if ($a = $this->upload($image->src)) {
                $image->src = \Yii::$app->params['baseUrl'].$a;
                $image->save();
            }
        }
        $this->redirect(['site/index']);
    }

    public function actionUp($id, $filename)
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $image = Image::findOne($id);
        $this->upload($image->src);
        $image->src = "/images/$filename";
        $image->save();

        return array_merge(
            [
                'model' => $image
            ], [
                'icon' => '<div class="mb-1 mt-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg></div>'
        ]);
    }
}