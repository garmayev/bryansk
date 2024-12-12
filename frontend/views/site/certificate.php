<?php


/**
 * @var \yii\web\View $this
 */

 $this->title = "Сертификаты";
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
            </ul>
        </nav>
        <h1 class="hero__title h2">Сертификаты</h1>
    </div>
</div>
<div class="wrapper wrap-pl-1 wrap-pr-1">
    <div class="product-cards-list__row">
        <div class="product-cards-list__col">
            <div class="card" itemscope="" itemtype="http://schema.org/ImageObject">
                <a href="/images/upload/certificate_tambov.pdf" class="card__inner" target="_blank">
                    <div class="card__img">
                        <img class="image is-lazy isItemProp is-loaded" src="/images/upload/certificate_tambov.jpg" alt="image" data-src="/images/upload/certificate_tambov.jpg" itemprop="contentUrl" data-ll-status="loaded">
                    </div>
                    <div class="card__info">
                        <div class="card__info-wrap">
                            <div class="card__title h5 animate" data-animate-lines="" itemprop="name" style="opacity: 1;">
                                <div style="display: block; text-align: left; position: relative;">
                                    <div style="display: block; text-align: left; position: relative; transform: translate3d(0px, 0px, 0px); opacity: 1;">Дилерский сертификат Тамбов 2024г
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="product-cards-list__col">
            <div class="card" itemscope="" itemtype="http://schema.org/ImageObject">
                <a href="/images/upload/certificate_lipetsk.pdf" class="card__inner" target="_blank">
                    <div class="card__img">
                        <img class="image is-lazy isItemProp is-loaded" src="/images/upload/certificate_lipetsk.jpg" alt="image" data-src="/images/upload/certificate_lipetsk.jpg" itemprop="contentUrl" data-ll-status="loaded">
                    </div>
                    <div class="card__info">
                        <div class="card__info-wrap">
                            <div class="card__title h5 animate" data-animate-lines="" itemprop="name" style="opacity: 1;">
                                <div style="display: block; text-align: left; position: relative;">
                                    <div style="display: block; text-align: left; position: relative; transform: translate3d(0px, 0px, 0px); opacity: 1;">Дилерский сертификат Липецк 2024г</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
