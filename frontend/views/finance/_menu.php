<?php

/**
 * @var View $this
 */

use yii\web\View;
$itemOptions = [
    'class' => 'tabs-list__el'
];

$this->registerCss(".tabs-list__el {list-style-type: none; font-size: 20px;}");
?>
<div class="hero ">
    <div class="hero__inner wrapper wrap-pl-1 wrap-pr-1">
        <nav class="breadcrumbs animate" aria-label="breadcrumb" data-animate="">
            <ul class="breadcrumbs__list text-default" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li class="breadcrumbs__crumb" itemprop="itemListElement" itemscope=""
                    itemtype="https://schema.org/ListItem">
                    <a href="/" class="breadcrumbs__text breadcrumbs__link text-lead" itemprop="item">
                        <span itemprop="name">Главная</span>
                    </a>
                    <meta itemprop="position" content="1">
                </li>
            </ul>
        </nav>

        <h1 class="hero__title h2">Ростсельмаш Финанс</h1>
        <div class="finance">
            <div class="finance__desc">
                <p>
                    Ростсельмаш Финанс предоставляет большой выбор финансовых программ, которые позволят Вам приобрести
                    технику Ростсельмаш на наиболее выгодных условиях финансирования. В нашем дилерском центре Вы можете
                    получить индивидуальную программу финансирования, а также необходимую консультационную поддержку.
                </p>
            </div>
            <img class="finance__img" src="" alt="">
        </div>
    </div>
</div>
<div class="tabs-link wrapper wrap-pl-1 wrap-pr-1" data-link-tabs="">
    <div class="tabs-link__wrap">
        <div class="tabs-list">


            <?= \yii\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Программа лизинга Ростсельмаш Финанс',
                        'url' => ['/finance/rsm'],
                        'options' => $itemOptions,
                        'linkTemplate' => '<a href="{url}" data-link="{url}" data-tab="true">{label}</a>',
                    ], [
                        'label' => 'Лизинг',
                        'url' => ['/finance/leasing'],
                        'options' => $itemOptions,
                        'linkTemplate' => '<a href="{url}" data-link="{url}" data-tab="true">{label}</a>',
                    ], [
                        'label' => 'Кредитование',
                        'url' => ['/finance/index'],
                        'options' => $itemOptions,
                        'linkTemplate' => '<a href="{url}" data-link="{url}" data-tab="true">{label}</a>',
                    ], [
                        'label' => 'Страхование',
                        'url' => ['/finance/insurance'],
                        'options' => $itemOptions,
                        'linkTemplate' => '<a href="{url}" data-link="{url}" data-tab="true">{label}</a>',
                    ], [
                        'label' => 'Акции',
                        'url' => ['/finance/specials'],
                        'options' => $itemOptions,
                        'linkTemplate' => '<a href="{url}" data-link="{url}" data-tab="true">{label}</a>',
                    ],
                ],
                'options' => [
                    'tag' => 'div',
                    'class' => 'tabs-list__wrap',
                ]
            ]) ?>
        </div>
    </div>
</div>
