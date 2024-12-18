<?php

/** @var yii\web\View $this */
/** @var array $data */
?>
<p>На сайте клиент задал вопрос</p>
<p>&nbsp;</p>
<p>Имя Клиента:  <?= $data['PROP_NAME'] ?></p>
<p>Email Клиента:  <?= $data['PROP_EMAIL'] ?></p>
<p>Номер телефона: <?= $data['PROP_PHONE'] ?></p>
<p>Тема сообщения: <?= $data['PROP_DIRECTION'] ?></p>
<p>Вопрос клиента: <?= $data['PROP_QUESTION'] ?></p>