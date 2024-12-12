<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = \Yii::t('backend', 'Login');
$phone = "+7 (800) 550-61-10";
$this->registerCss(<<<CSS
body {
    background-image: url("/admin/images/back.jpg");
    background-size: cover;
    color: white;
}
#form {
    background: rgba(255, 255, 255, .2);
    border-radius: 8px;
    margin-left: 30px;
}
.footer {

}
CSS);

?>
<div class="site-login ml-16 mt-5">
    <div class="mt-5 col-lg-4 col-md-4 text-center p-4" id="form">
        <h1><?= Html::encode($this->title) ?></h1>

        <p><?= \Yii::t('backend', 'Please fill out the following fields to login') ?>:</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="form-group">
                <?= Html::submitButton(\Yii::t('backend', 'Login'), ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
