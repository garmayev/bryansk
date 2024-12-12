<?php

/** @var yii\web\View $this */
/** @var \frontend\models\ContactForm $model */
?>
<p>На сайте подали заявку на <?= $model->name ?></p>
<p>&nbsp;</p>
<?php
if (!empty($model->name)) {
    echo "<p>Имя Клиента: {$model->name}</p>";
}
if (!empty($model->email)) {
    echo "<p>Email Клиента: {$model->email}</p>";
}
if (!empty($model->phone)) {
    echo "<p>Номер телефона: {$model->phone}</p>";
}
if (!empty($model->message)) {
    echo "<p>Выбранный банк: {$model->message}</p>";
}
?>