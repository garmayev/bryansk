<?php


/**
 * @var \yii\web\View $this
 */

$this->title = "Сертификаты";

$this->registerCssFile("/css/certificate.css");
?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        setTheme("black");
    })
</script>
<style>
    .product-cards-list__row {
        width: 100%;
        display: flex;
        flex-direction: row;
    }
</style>
<div class="hero pb-56">
    <div class="hero__inner wrapper wrap-pl-1 wrap-pr-1">
        <nav class="breadcrumbs animate" aria-label="breadcrumb" data-animate="">
            <ul class="breadcrumbs__list text-default" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li class="breadcrumbs__crumb" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <a href="/" class="breadcrumbs__text breadcrumbs__link text-lead" itemprop="item">
                        <span itemprop="name">Главная</span>
                    </a>
                    <meta itemprop="position" content="1">
                </li>
                <li class="breadcrumbs__crumb" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <a href="/about" class="breadcrumbs__text breadcrumbs__link text-lead" itemprop="item">
                        <span itemprop="name">О компании</span>
                    </a>
                    <meta itemprop="position" content="2">
                </li>
            </ul>
        </nav>
        <h1 class="hero__title h2">Сертификаты</h1>
    </div>
</div>
<div class="news-list">
    <div id="cert-gallery" class="news-list__list news-list__list--grid" data-ajax-container="">
                <?php
                $materials = \common\models\Material::find()->where(['element_id' => null])->all();
                foreach ($materials as $material) {
echo "
        <div class='card-news' data-animate='' data-src='{$material->href}' data-thumb='{$material->href}'>
            <div class='card-news__link card-news__link--no-gap'>
                <div class='card-news__inner card-news__inner--no-gap'>
                    <div class='card-news__content card-news__content--full'>
                        <a href='{$material->href}' class='card-news__image card-news__image--full'>
                            <div class='card-news__image-wrapper card-news__image-wrapper--small'>
                                <img class='image is-lazy entered is-loaded' src='{$material->href}' data-src='{$material->href}' alt='{$material->name}' data-ll-status='loaded'>
                            </div>
                            <span class='c-view'></span>
                        </a>
                        <div class='card-news__content--right card-news__content--right-no-gap'>
                        </div>
                        <div class='card-news__text card-news__text--medium'>
                            <h2 class='card-news__title'>{$material->name}</h2>
                            <p class='card-news__des'></p>
                        </div>
                        <div class='card-news__footer'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
";
/*                    echo "
            <div class=\"document-link-wrapper\">
                <a href=\"{$material->href}\" class=\"document-link text-default\" target=\"_blank\" data-viewport-trigger=\"\">
                    <div class=\"document-link__format\">
                        {$material->format}
                    </div>
                    <div class=\"document-link__desc\">
                        <span class=\"document-link__name\">{$material->name}</span>
                        <span class=\"document-link__size text-mute\">{$material->size}</span>
                    </div>
                </a>
            </div>"; */
                }
                ?>
    </div>
</div>
