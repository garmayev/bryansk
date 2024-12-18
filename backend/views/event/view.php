<?php

use common\models\Event;
use yii\helpers\Html;
use yii\web\View;


/**
 * @var View $this
 * @var Event $model
 */

$this->title = \Yii::t('backend', 'View Event');

$this->params['breadcrumbs'][] = ['label' => \Yii::t('backend', 'Events'), 'url' => ['/event/index']];
$this->params['breadcrumbs'][] = $this->title;

echo Html::tag('h3', $model->title);

echo Html::img($model->image);

echo Html::tag('div', $model->text);