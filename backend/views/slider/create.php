<?php

use common\models\Slider;
use yii\web\View;


/**
 * @var View $this
 * @var Slider $model
 */

$this->title = \Yii::t('backend', 'Create Slider');

$this->params['breadcrumbs'][] = ['label' => \Yii::t('backend', 'Sliders'), 'url' => ['/slider/index']];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_form', [
    'model' => $model
]);