<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

$this->registerJsVar('images', \common\models\Image::find()->all());
$this->registerJsVar('slides', \common\models\Slide::find()->all());

\common\models\Config::find()->all();
?>
    <div class="site-index">
    </div>
