<?php

/**
 * @var View $this
 * @var Slider $model
 */

use common\models\Slider;
use yii\helpers\Html;
use yii\web\View;

$this->title = \Yii::t('backend', 'View Slider');

$this->params['breadcrumbs'][] = ['label' => \Yii::t('backend', 'Sliders'), 'url' => ['/slider/index']];
$this->params['breadcrumbs'][] = $this->title;

echo Html::tag('p', $model->title);

echo Html::beginTag('div', ['class' => 'slider row mt-3 mb-3']);

foreach ($model->slides as $slide) {
    echo Html::img($slide->image, ['class' => 'col-4']);
}

echo Html::endTag('div');