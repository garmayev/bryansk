<?php

use common\models\Config;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var View $this
 * @var Config $model
 */

$form = ActiveForm::begin();

echo $form->field($model, 'value')->textarea(['rows' => 6]);

ActiveForm::end();
