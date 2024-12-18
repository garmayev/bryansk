<?php

use common\models\Material;
use yii\web\View;

/**
 * @var View $this
 * @var Material $model
 */

$this->title = \Yii::t('backend', 'Create Certificate');
$this->params['breadcrumbs'][] = ['url' => ['/certificate/index'], 'label' => \Yii::t('backend', 'Certificates')];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_form', [
    'model' => $model
]);
