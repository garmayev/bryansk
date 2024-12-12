<?php

use yii\data\ActiveDataProvider;
use yii\web\View;

/**
 * @var View $this
 * @var ActiveDataProvider $dataProvider
 */
$this->title = "Точное земледелие";
$this->registerJsFile("/js/script.js");

?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelector(".logo-white").style.display = "none !important";
        document.querySelector(".logo-red").style.display = "block !important";
        document.querySelector(".w-logo").style.display = "none";
        document.querySelector(".r-logo").style.display = "block";
        document.querySelector(".header.js-header").classList.remove("is-white");
    })
</script>

<div class="pt-md-200 pt-96 wrapper wrap-pl-1 wrap-pr-1 pb-lg-160 pb-96 bg-gray">
    <h1 class="h2">Точное земледелие</h1>
</div>
<div class="mb-lg-128 mb-md-96 mb-80 wrapper wrap-pl-1 wrap-pr-1">
    <div class="mt-lg-96-negative mt-56-negative">
        <div class="tech-cards-list">
            <div class="tech-cards-list__wrap">
                <div class="tech-cards-list__content">
                    <?php
                    echo \yii\widgets\ListView::widget([
                        'dataProvider' => $dataProvider,
                        'summary' => false,
                        'itemView' => '_item',
                        'itemOptions' => [
                            'tag' => 'div',
                            'class' => 'tech-cards-list__col',
                        ],
                        'options' => [
                            'tag' => 'div',
                            'class' => 'tech-cards-list__row'
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
