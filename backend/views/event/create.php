<?php

use common\models\Event;
use yii\web\View;


/**
 * @var View $this
 * @var Event $model
 */

$this->title = \Yii::t('backend', 'Create Event');

$this->params['breadcrumbs'][] = ['label' => \Yii::t('backend', 'Events'), 'url' => ['/event/index']];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_form', [
    'model' => $model
]);