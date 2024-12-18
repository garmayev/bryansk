<?php

use common\models\Post;
use yii\helpers\Html;
use yii\web\View;

/**
 * @var View $this
 * @var Post $model
 */

$this->title = \Yii::t('backend', 'View Post');

$this->params['breadcrumbs'][] = ['label' => \Yii::t('backend', 'Posts'), 'url' => ['/post/index']];
$this->params['breadcrumbs'][] = $this->title;

echo Html::a(\Yii::t('backend', 'Update Post'), ['post/update', 'id' => $model->id], ['class' => 'btn btn-primary mb-3 ml-3']);
echo Html::a(\Yii::t('backend', 'Delete Post'), ['post/delete', 'id' => $model->id], ['class' => 'btn btn-danger mb-3 ml-3']);

echo Html::tag('h3', $model->title);

echo Html::img($model->image);

echo $model->text;

echo Html::tag('p', \Yii::$app->formatter->asDate($model->created_at));