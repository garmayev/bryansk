<?php

use common\models\Material;
use yii\web\View;
use yii\widgets\ActiveForm;

/**
 * @var View $this
 * @var Material $model
 */

$form = ActiveForm::begin();

echo '<div class="form-group mb-3">';
echo $form->field($model, 'name')->textInput();
echo '</div>';
echo '<div class="form-group mb-3">';
echo $form->field($model, 'file')->fileInput();
echo '</div>';

echo \yii\helpers\Html::submitButton(\Yii::t('backend', 'Save'), ['class' => 'btn btn-success']);

ActiveForm::end();
