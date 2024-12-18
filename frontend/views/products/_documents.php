<?php
/**
 * @var \common\models\Element $model
 */
?>
<div id="document-link-list">
    <div class="wrapper wrap-pl-1 wrap-pr-1 pt-16 pt-md-40 pt-lg-64 mb-lg-128 mb-md-96 mb-80">
        <div class="main-features__heading mb-32 mb-md-48 mb-lg-56 animate" data-animate="">
            <div class="main-features__title mb-md-24 mb-lg-0">
                <h2 class="h2 animate" data-animate="">Материалы для скачивания</h2>
            </div>
        </div>
        <div class="document-link-list animate" data-animate="">
            <?php
            foreach ($model->materials as $material) {
                ?>
                <div class="document-link-wrapper">
                    <a href="<?= $material->href ?>" class="document-link text-default" target="_blank"
                       data-viewport-trigger="">
                        <div class="document-link__format">
                            <?= $material->format ?>
                        </div>
                        <div class="document-link__desc">
                            <span class="document-link__name "><?= $material->name ?></span>
                            <span class="document-link__size text-mute"><?= $material->size ?></span>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
