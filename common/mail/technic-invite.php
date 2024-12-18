<?php

/** @var yii\web\View $this */
/** @var array $data */
/** @var \common\models\Element $model */
?>
<p>На сайте оставили заявку на технику <?= $model->name ?>,</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Имя Клиента:  <?= $data['PROP_NAME'] ?></p>
<p>Номер телефона: <?= $data['PROP_PHONE'] ?></p>
<p>Регион Клиента: <?= $data['PROP_DIRECTION'] ?></p>