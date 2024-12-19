<?php
/**
 *
 * @var \yii\web\View $this
 * @var \common\models\Slide[] $slides
 * @var \common\models\Section $parent
 */

use yii\helpers\Html;

?>
<div class="main-slider__slides-overlay" style="opacity: 1;"></div>
<?php
foreach ($slides as $index => $slide) {
    ?>
    <div data-id="<?= $index ?>" data-src="<?= $slide->image ?>"
         class="main-slider-slide has-overlay <?= $slide->active ? "active" : "" ?>"
         title="<?= $slide->title ?>">
        <div class="main-slider-slide__content">
            <div class="main-slider-slide__main">
                <div class="main-slider-slide__subtitle"
                     style="transform: translate3d(0px, 0px, 0px); opacity: 0.6834;">
                    <?= \yii\helpers\Html::a($parent->name, ["/products/view", "code" => $parent->code], [
                        "class" => "main-slider-slide__subtitle-text"
                    ]) ?>
                </div>
                <div class="main-slider-slide__title h2"
                     style="transform: translate3d(0px, -20.3775px, 0px); opacity: 0.7962;"><?= $slide->title ?></div>
                <div class="main-slider-slide__text"
                     style="transform: translate3d(0px, -12.2732px, 0px); opacity: 0.8773;"><?= $slide->text ?></div>
                <div class="main-slider-slide__actions"
                     style="transform: translate3d(0px, -6.5134px, 0px); opacity: 0.9349;">
                    <?php
                    foreach ($slide->actions as $action) {
                        echo Html::beginTag("div", ["class" => "main-slider-slide__action"]);
                        echo Html::a(Html::tag("span", $action->text, ["class" => "btn__text"]), $action->href, [
                            "class" => ($action->theme === "white") ? "btn btn--white btn--hover-primary" : "btn btn--primary btn--hover-primary",
                            "data-modal" => "",
                            "data-effect" => "mfp-move-from-left",
                        ]);
                        echo Html::endTag("div");
                    }
                    ?>
                </div>
            </div>
            <div class="main-slider-slide__fact">
                <?php
                foreach ($slide->factor_list as $factor) {
                    ?>
                    <div class="main-slider-slide__fact-wrap"
                         style="transform: translate3d(0px, 0px, 0px); opacity: 0.8118;">
                        <div class="factor animate" data-viewport-trigger="" data-animate="">
                            <div class="factor__text text-default animate" data-animate="fade-in-up"
                                 data-animate-delay="1"><?= $factor->text ?>
                            </div>
                            <?php
                            if ($factor->heading) {
                                ?>
                                <div class="factor__head">
                                <span class="factor__number">
                                    <span class="factor__number-value animate" data-counter=""
                                          data-counter-separator=" "><?= $factor->heading ?></span>
                                </span>
                                    <span class="factor__suffix">
                                    <span style="display: none"><?= $factor->heading ?></span>
								<?= $factor->suffix ?>
                                </span>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
}
?>
<div class="main-slider-controls">
    <div class="main-slider-info">
        <div class="main-slider-pagination">
            <div class="main-slider-pagination__wrap">
                <?php
                foreach ($slides as $index => $slide) {
                    $active = $index === 0 ? "active" : "";
                    echo "
                    <div data-id='{$index}' class='main-slider-pagination__el $active'>
                        <div class='main-slider-pagination__el-inner'></div>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>
        <div class="main-slider-info__title text-default">
            <span style="color:#d0043c"> <a target="_blank" href="https://rostselmash.com/financing/leasing/">Лизинг от Ростсельмаш Финанс</a></span>
            <p>
                Аванс 0%
            </p>
        </div>
    </div>
    <div class="main-slider-nav main-slider-nav--autoplay white">
        <div class="nav-arrows nav-arrows--default">
            <button type="button" class="nav-arrows__button" data-nav-arrow-prev="" title="Назад"
                    aria-label="Назад"></button>
            <button type="button" class="nav-arrows__button" data-nav-arrow-next="" title="Вперёд"
                    aria-label="Вперёд"></button>
            <button class="nav-arrows__pause">
                <i class="icon is-small" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12L9 20L9 4L17 12Z" fill="currentColor"></path>
                    </svg>
                </i>
            </button>
            <span class="nav-arrows__arrow">
                            <i class="icon is-small" aria-hidden="true">
                                <svg width="24" height="24" stroke="currentColor"
                                     viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 19L9 12L16 5" stroke-width="2" stroke-linecap="square"></path>
                                </svg>
                            </i>
                        </span>
            <span class="nav-arrows__arrow">
                            <i class="icon is-small" aria-hidden="true">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.00012 5L16.0001 12L9.00012 19" stroke-width="2"
                                          stroke-linecap="square"></path>
                                </svg>
                            </i>
                        </span>
        </div>
    </div>
</div>
