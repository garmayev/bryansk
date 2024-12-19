<?php

namespace console\controllers;

use common\models\Element;
use common\models\Section;
use common\models\Slide;
use common\models\Video;

class FeedController extends \yii\console\Controller
{
    public function actionImportSection($raw = null, $type = 1) {
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

    public function actionImportElement($raw = null, $type = 1) {
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

    public function actionImport($target = null)
    {
        $data = json_decode(file_get_contents("https://rostselmash.com/feed/for-dealers/file.json"), true);
        if ($target === null) {
            $targets = ['catalog', 'electronic-systems'];
            foreach ($targets as $target) {
                $this->actionImportSection($data[$target], $target === "catalog" ? Section::TYPE_CATALOG : Section::TYPE_ELECTRONIC_SYSTEM);
                $this->actionImportElement($data[$target], $target === "catalog" ? Section::TYPE_CATALOG : Section::TYPE_ELECTRONIC_SYSTEM);
            }
        } else {
            if (isset($data[$target])) {
                $this->actionImportSection($data[$target], $target === "catalog" ? Section::TYPE_CATALOG : Section::TYPE_ELECTRONIC_SYSTEM);
                $this->actionImportElement($data[$target], $target === "catalog" ? Section::TYPE_CATALOG : Section::TYPE_ELECTRONIC_SYSTEM);
            }
        }
    }

    private function upload($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1);
        curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'SSLv3');

        $data = curl_exec ($ch);
        $error = curl_error($ch);
        curl_close ($ch);

        if ($error) {
            \Yii::error($error);
        }

        return $data;
    }

    public function actionUploadImages()
    {
        foreach (\common\models\Image::find()->all() as $image) {
            preg_match("/rostselmash/", $image->src, $matches);
            if (count($matches)) {
                $explodeUrl = explode("/", $image->src);
                $fileName = str_replace([" ", "%20"], "_", end($explodeUrl));

                $destination = \Yii::getAlias("@frontend")."/web/images/$fileName";
                touch($destination);
//                chmod($destination, 0777);
                $file = fopen($destination, "w");
                $data = $this->upload($image->src);
                fputs($file, $data);
                fclose($file);

                // $this->checkPerms($destination);

                if (filesize($destination)) {
                    $image->src = "/images/$fileName";
                    $image->save();

                    echo "\tImage $fileName is uploaded\n";
                } else {
                    unlink($destination);
                    echo "\t\033[0;31mImage $fileName is not loaded\033[0m\n";
                    echo "\t\t\033[0;31m\tPath $destination\033[0m\n";
                }
            }
        }
        foreach (\common\models\Slide::find()->all() as $slide) {
            preg_match("/rostselmash/", $slide->image, $matches);
            if ( count($matches) ) {
                $explodeUrl = explode("/", $slide->image);
                $fileName = urlencode(end($explodeUrl));

                $destination = \Yii::getAlias("@frontend")."/web/images/$fileName";
                touch($destination);
                chmod($destination, 0777);
                $file = fopen($destination, "w+");
                fputs($file, $this->upload($slide->image));
                fclose($file);

                if (filesize($destination)) {
                    $slide->image = "/images/$fileName";
                    $slide->save();

                    echo "Image $fileName is uploaded\n";
                } else {
                    unlink($destination);
                    echo "\033[0;31mImage $fileName is not loaded\033[0m\n";
                }
            }
        }
    }
}
