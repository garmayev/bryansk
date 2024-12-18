<?php

use common\models\Event;
use yii\web\View;

/**
 * @var View $this
 * @var Event $model
 */
?>
<script>
    setTheme("black");
</script>
<main>
    <div class="hero " data-breadcrumb-block="">
        <div class="hero__inner wrapper wrap-pl-1 wrap-pr-1">
            <nav class="breadcrumbs" aria-label="breadcrumb" data-animate="">
                <ul class="breadcrumbs__list text-default" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                    <li class="breadcrumbs__crumb" id="bx_breadcrumb_0" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="breadcrumbs__text breadcrumbs__link text-lead" href="/" title="Главная" itemprop="item">
                            <span itemprop="name">Главная</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="breadcrumbs__crumb" id="bx_breadcrumb_1" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="breadcrumbs__text breadcrumbs__link text-lead" href="/finance/specials/" title="Спецпредложения" itemprop="item">
                            <span itemprop="name">Спецпредложения</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li class="breadcrumbs__crumb">
                        <div class="breadcrumbs__text text-lead">
                            <span itemprop="name"><?= $model->title ?></span>
                        </div>
                    </li>
                </ul>
            </nav>
            <h1 class="hero__title h2"><?= $model->title ?></h1>
            <div class="finance">
                <div class="finance__desc">
                </div>
            </div>
        </div>
    </div>
    <div id="news-detail" class="content-wrapper wrap-pl-1 wrap-pr-1 content-wrapper--no-photo">
        <div class="content">
            <div class="content__user-text-wrap">
                <div class="content__user-text mb-16">
                    <img class="detail_picture" src="<?= $model->image ?>" style="width: 100%" alt="<?= $model->title ?>" title="<?= $model->title ?>">
                </div>
                <div class="content__user-text user-text text-default mt-8">
                    <?= $model->text ?>
                </div>
            </div>
        </div>
    </div>
</main>