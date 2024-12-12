<?php

/** @var yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<main role="main">
    <div class="container-fluid">
        <?= $content ?>
    </div>
</main>
<footer class="footer mt-auto py-3" style="background-color: rgba(255, 255, 255, .7)">
    <div class="container" style="color: black">
        <div class="row d-flex align-items-center">
            <div class="col-4">
                <span class="text-black">
                    <?= \Yii::t('backend', 'Technical support') ?>:
                    <a class="link-secondary link-underline-none" href="tel:88005506110">+7 (800) 550-61-10</a>
                </span>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end">
                    <a href="https://amgcompany.ru">
                        <img class="d-inline-block float-right" src="<?= \yii\helpers\Url::to(['/images/logo.svg']) ?>" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
