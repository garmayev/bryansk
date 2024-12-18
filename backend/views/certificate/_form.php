<?php

use common\models\Material;
use yii\web\View;
use yii\widgets\ActiveForm;

/**
 * @var View $this
 * @var Material $model
 */

$form = ActiveForm::begin();

echo $form->field($model, 'name')->textInput();

echo $form->field($model, 'file')->fileInput();

echo \yii\helpers\Html::submitButton(\Yii::t('backend', 'Save'), ['class' => 'btn btn-success']);

ActiveForm::end();
