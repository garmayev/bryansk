<?php
/**
 * @var View $this
 * @var Section[] $models
 */

use common\models\Section;
use yii\web\View;

$this->title = "Сельхозтехника";
?>
<script src="/js/script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        setTheme('black')
    })
</script>

<style>
    .r-logo {
        display: none;
    }

    .is-menu-open .r-logo {
        display: none;
    }

    .is-menu-open .w-logo {
        display: block;
    }
</style>

<div class="pt-md-200 pt-96 wrapper wrap-pl-1 wrap-pr-1 pb-lg-160 pb-96 bg-gray">
    <h1 class="h2">Сельхозтехника</h1>
</div>
<div class="mb-lg-128 mb-md-96 mb-80 wrapper wrap-pl-1 wrap-pr-1">
    <div class="mt-lg-96-negative mt-56-negative">
        <div class="tech-cards-list">
            <div class="tech-cards-list__wrap">
                <div class="tech-cards-list__content">
                    <div class="tech-cards-list__row">
                        <?php
                        foreach ($models as $model) {
                            $content = "
    <div class='tech-cards-list__col'>
        <div class='card' itemscope='' itemtype='http://schema.org/ImageObject'>
            <a href='".\yii\helpers\Url::to(['products/view', 'code' => $model->code])."' class='card__inner'>
                <div class='card__img'>
                    <img class='image is-lazy isItemProp is-loaded' src='$model->image' data-src='$model->image' itemprop='contentUrl' alt='$model->name' data-ll-status='loaded'>
                </div>
                <div class='card__info'>
                    <div class='card__info-wrap'>
                        <div class='card__title h5 animate' data-animate-lines='' itemprop='name' style='opacity: 1;'>
                            <div style='display: block; text-align: left; position: relative; transform: translate3d(0px, 0px, 0px); opacity: 1;'>
                                $model->name
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    ";
                            echo $content;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
