<?php

/** @var yii\web\View $this */
/** @var array $data */
?>
<p>На сайте подали заявку на <?= $data['FORM_NAME'] ?></p>
<p>&nbsp;</p>
<?php
if (isset($data['PROP_NAME'])) {
    echo "<p>Имя Клиента: {$data['PROP_NAME']}</p>";
}
if (isset($data['PROP_EMAIL'])) {
    echo "<p>Email Клиента: {$data['PROP_EMAIL']}</p>";
}
if (isset($data['PROP_PHONE'])) {
    echo "<p>Номер телефона: {$data['PROP_PHONE']}</p>";
}
if (isset($data['PROP_REGION'])) {
    echo "<p>Регион Клиента: {$data['PROP_REGION']}</p>";
}
if (isset($data['PROP_BANK'])) {
    echo "<p>Выбранный банк: {$data['PROP_BANK']}</p>";
}
if (isset($data['PROP_DIRECTION'])) {
    echo "<p>Тема сообщения: {$data['PROP_DIRECTION']}</p>";
}
if (isset($data['PROP_MESSAGE'])) {
    echo "<p>Сообщение клиента: {$data['PROP_MESSAGE']}</p>";
}
?>