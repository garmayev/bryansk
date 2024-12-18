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
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    private function import($className, $data, $type)
    {
        $element = $className::findOne($data["id"]);
        if (empty($element)) {
            $element = new $className(array_merge($data, ['type' => $type]));
        } else {
            $class = explode('\\', $className::classname());
            $element->load([end($class) => array_merge($data, ['type' => $type])]);
        }
        return $element->save();
//        if ($element->save()) {
//            return "<p class='text-success'>{$className::classname()} ID: {$element->id} is loaded</p>";
//        } else {
//            return "<p class='text-danger-emphasis'>{$className::classname()} ID: {$element->id} is not loaded</p>";
//        }
    }

    public function actionImportSection($raw = null, $type = 1)
    {
        $result = "";
        if (is_null($raw)) {
            $raw = json_decode(file_get_contents("https://rostselmash.com/feed/for-dealers/file.json"), true);
            $data = $raw["catalog"]['sections'];
        } else {
            $data = $raw['sections'];
        }
        foreach ($data as $key => $item) {
            $result .= $this->import(Section::class, $item, $type);
        }
        return $result;
    }

    public function actionImportElement($raw = null, $type = 1)
    {
        $result = "";
        if (is_null($raw)) {
            $raw = json_decode(file_get_contents("https://rostselmash.com/feed/for-dealers/file.json"), true);
            $data = $raw["catalog"]["elements"];
        } else {
            $data = $raw["elements"];
        }
        foreach ($data as $key => $item) {
            $result .= $this->import(Element::class, $item, $type);
        }
        return $result;
    }

    public function actionImportEntry()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $data = json_decode(file_get_contents("php://input"), true);
        return ["ok" => $this->import(
            $data['type'] === 'elements' ? Element::class : Section::class,
            $data['data'],
            $data['target'] === 'catalog' ? Section::TYPE_CATALOG : Section::TYPE_ELECTRONIC_SYSTEM
        ), "data" => $data['data']];
    }

    public function actionImport($target = null)
    {
        $data = file_get_contents("https://rostselmash.com/feed/for-dealers/file.json");
        // $data
        $result = "";
//        if ($target === null) {
//            $targets = ['catalog', 'electronic-systems'];
//            foreach ($targets as $target) {
//                $result .= "<p class='text-info'>import sections from $target</p>";
//                $result .= $this->actionImportSection($data[$target], $target === "catalog" ? Section::TYPE_CATALOG : Section::TYPE_ELECTRONIC_SYSTEM);
//                $result .= "<p class='text-info'>import elements from $target</p>";
//                $result .= $this->actionImportElement($data[$target], $target === "catalog" ? Section::TYPE_CATALOG : Section::TYPE_ELECTRONIC_SYSTEM);
//            }
//        } else {
//            $result .= "<p class='text-info'>import sections from $target</p>";
//            $result .= $this->actionImportSection($data[$target], $target === "catalog" ? Section::TYPE_CATALOG : Section::TYPE_ELECTRONIC_SYSTEM);
//            $result .= "<p class='text-info'>import elements from $target</p>";
//            $result .= $this->actionImportElement($data[$target], $target === "catalog" ? Section::TYPE_CATALOG : Section::TYPE_ELECTRONIC_SYSTEM);
//        }
        return $this->render('import', [
            'result' => $result,
            'feed' => $data
        ]);
    }

    public function actionIndex()
    {
        return $this->render('index');
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
        $result = "";
        foreach (\common\models\Image::find()->all() as $image) {
            preg_match("/rostselmash/", $image->src, $matches);
            if (count($matches)) {
                $explodeUrl = explode("/", $image->src);
                $fileName = str_replace([" ", "%20"], "_", end($explodeUrl));

                $destination = \Yii::getAlias("@frontend")."/web/images/$fileName";
                touch($destination);
                chmod($destination, 0777);
                $file = fopen($destination, "w");
                $data = $this->upload($image->src);
                fputs($file, $data);
                fclose($file);

                // $this->checkPerms($destination);

                if (filesize($destination)) {
                    $image->src = "/images/$fileName";
                    $image->save();

                    $result .= "<p class='text-success'>Image $fileName is uploaded</p>";
                } else {
                    unlink($destination);
                    $result .= "<p class='text-danger'>Image $fileName is not loaded</p>";
                    $result .= "<p class='pl-5 text-danger'>Path $destination</p>";
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

                    $result .= "<p class='text-success'>Image $fileName is uploaded</p>";
                } else {
                    unlink($destination);
                    $result .= "<p class='text-danger'>Image $fileName is not loaded</p>";
                    $result .= "<p class='pl-5 text-danger'>Path $destination</p>";
                }
            }
        }

        return $this->render('upload-images', [
            'result' => $result
        ]);
    }
}
