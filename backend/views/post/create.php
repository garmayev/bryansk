<?php

use common\models\Post;
use yii\web\View;

/**
 * @var View $this
 * @var Post $model
 */

$this->title = \Yii::t('backend', 'Create Post');

$this->params['breadcrumbs'][] = ['label' => \Yii::t('backend', 'Posts'), 'url' => ['/post/index']];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_form', [
    'model' => $model
]);