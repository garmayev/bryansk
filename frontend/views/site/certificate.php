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
<div id="document-link-list">
    <div class="wrapper wrap-pl-1 wrap-pr-1 pt-16 pt-md-40 pt-lg-64 mb-lg-128 mb-md-96 mb-80">
        <div class="main-features__heading mb-32 mb-md-48 mb-lg-56 animate" data-animate="">
            <div class="main-features__title mb-md-24 mb-lg-0">
                <h2 class="h2 animate" data-animate="">Наши сертификаты</h2>
            </div>
        </div>
        <div class="document-link-list animate" data-animate="">
                <?php
                $materials = \common\models\Material::find()->where(['element_id' => null])->all();
                foreach ($materials as $material) {
                    echo "
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
            </div>";
                }
                ?>
        </div>
    </div>
</div>