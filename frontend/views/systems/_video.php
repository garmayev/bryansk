<?php

use common\models\Video;
use yii\web\View;

/**
 * @var View $this
 * @var Video[] $models
 */
?>

<div class="pb-2-fixed wrapper wrap-pl-1 wrap-pr-1 bg-white bg-wings">
    <div class="video-block js-video-block animate" data-animate="">
        <div class="video-block__wrap">
            <div class="video-block-video <?= (count($models) > 1) ? '' : 'video-block-video__full' ?>" style="opacity: 1;">
                <div class="video-block-video__content js-swiper swiper-container swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper">
                        <div class="video-block-video__player loader--skeleton swiper-slide js-swiper-slide loaded swiper-slide-active"
                             style="width: 1298px;">
                            <div tabindex="0"
                                 class="plyr plyr--full-ui plyr--video plyr--youtube plyr--fullscreen-enabled plyr__poster-enabled plyr--loading plyr--paused plyr--stopped">
                                <div class="plyr__controls">
                                    <button class="plyr__controls__item plyr__control" type="button" data-plyr="play"
                                            aria-label="Play">
                                        <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-pause"></use>
                                        </svg>
                                        <svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-play"></use>
                                        </svg>
                                        <span class="label--pressed plyr__sr-only">Pause</span>
                                        <span class="label--not-pressed plyr__sr-only">Play</span>
                                    </button>
                                    <div class="plyr__controls__item plyr__progress__container">
                                        <div class="plyr__progress">
                                            <input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0"
                                                   autocomplete="off" role="slider" aria-label="Seek" aria-valuemin="0"
                                                   aria-valuemax="100" aria-valuenow="0" id="plyr-seek-1767"
                                                   aria-valuetext="00:00 of 01:20" style="--value: 0%;">
                                            <progress class="plyr__progress__buffer" min="0" max="100" value="0"
                                                      role="progressbar" aria-hidden="true">% buffered
                                            </progress>
                                            <span class="plyr__tooltip">00:00</span>
                                        </div>
                                    </div>
                                    <div class="plyr__controls__item plyr__time--current plyr__time"
                                         aria-label="Current time">-01:20
                                    </div>
                                    <div class="plyr__controls__item plyr__volume">
                                        <button type="button" class="plyr__control" data-plyr="mute">
                                            <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                                <use xlink:href="#plyr-muted"></use>
                                            </svg>
                                            <svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                                <use xlink:href="#plyr-volume"></use>
                                            </svg>
                                            <span class="label--pressed plyr__sr-only">Unmute</span>
                                            <span class="label--not-pressed plyr__sr-only">Mute</span>
                                        </button>
                                        <input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1"
                                               autocomplete="off" role="slider" aria-label="Volume" aria-valuemin="0"
                                               aria-valuemax="100" aria-valuenow="100" id="plyr-volume-1767"
                                               aria-valuetext="100.0%" style="--value: 100%;">
                                    </div>
                                    <button class="plyr__controls__item plyr__control" type="button"
                                            data-plyr="captions">
                                        <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-captions-on"></use>
                                        </svg>
                                        <svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-captions-off"></use>
                                        </svg>
                                        <span class="label--pressed plyr__sr-only">Disable captions</span>
                                        <span class="label--not-pressed plyr__sr-only">Enable captions</span>
                                    </button>
                                    <div class="plyr__controls__item plyr__menu">
                                        <button aria-haspopup="true" aria-controls="plyr-settings-1767"
                                                aria-expanded="false" type="button" class="plyr__control"
                                                data-plyr="settings">
                                            <svg aria-hidden="true" focusable="false">
                                                <use xlink:href="#plyr-settings"></use>
                                            </svg>
                                            <span class="plyr__sr-only">Settings</span>
                                        </button>
                                        <div class="plyr__menu__container" id="plyr-settings-1767" hidden="">
                                            <div>
                                                <div id="plyr-settings-1767-home">
                                                    <div role="menu">
                                                        <button data-plyr="settings" type="button"
                                                                class="plyr__control plyr__control--forward"
                                                                role="menuitem" aria-haspopup="true" hidden="">
                                                            <span>Captions<span
                                                                        class="plyr__menu__value">Disabled</span></span>
                                                        </button>
                                                        <button data-plyr="settings" type="button"
                                                                class="plyr__control plyr__control--forward"
                                                                role="menuitem" aria-haspopup="true" hidden="">
                                                            <span>Quality<span
                                                                        class="plyr__menu__value">undefined</span></span>
                                                        </button>
                                                        <button data-plyr="settings" type="button"
                                                                class="plyr__control plyr__control--forward"
                                                                role="menuitem" aria-haspopup="true">
                                                            <span>Speed<span
                                                                        class="plyr__menu__value">Normal</span></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="plyr-settings-1767-captions" hidden="">
                                                    <button type="button" class="plyr__control plyr__control--back">
                                                        <span aria-hidden="true">Captions</span>
                                                        <span class="plyr__sr-only">Go back to previous menu</span>
                                                    </button>
                                                    <div role="menu"></div>
                                                </div>
                                                <div id="plyr-settings-1767-quality" hidden="">
                                                    <button type="button" class="plyr__control plyr__control--back">
                                                        <span aria-hidden="true">Quality</span>
                                                        <span class="plyr__sr-only">Go back to previous menu</span>
                                                    </button>
                                                    <div role="menu"></div>
                                                </div>
                                                <div id="plyr-settings-1767-speed" hidden="">
                                                    <button type="button" class="plyr__control plyr__control--back">
                                                        <span aria-hidden="true">Speed</span>
                                                        <span class="plyr__sr-only">Go back to previous menu</span>
                                                    </button>
                                                    <div role="menu">
                                                        <button data-plyr="speed" type="button" role="menuitemradio"
                                                                class="plyr__control" aria-checked="false" value="0.5">
                                                            <span>0.5×</span>
                                                        </button>
                                                        <button data-plyr="speed" type="button" role="menuitemradio"
                                                                class="plyr__control" aria-checked="false" value="0.75">
                                                            <span>0.75×</span>
                                                        </button>
                                                        <button data-plyr="speed" type="button" role="menuitemradio"
                                                                class="plyr__control" aria-checked="true" value="1">
                                                            <span>Normal</span>
                                                        </button>
                                                        <button data-plyr="speed" type="button" role="menuitemradio"
                                                                class="plyr__control" aria-checked="false" value="1.25">
                                                            <span>1.25×</span>
                                                        </button>
                                                        <button data-plyr="speed" type="button" role="menuitemradio"
                                                                class="plyr__control" aria-checked="false" value="1.5">
                                                            <span>1.5×</span>
                                                        </button>
                                                        <button data-plyr="speed" type="button" role="menuitemradio"
                                                                class="plyr__control" aria-checked="false" value="1.75">
                                                            <span>1.75×</span>
                                                        </button>
                                                        <button data-plyr="speed" type="button" role="menuitemradio"
                                                                class="plyr__control" aria-checked="false" value="2">
                                                            <span>2×</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="plyr__controls__item plyr__control" type="button" data-plyr="pip">
                                        <svg aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-pip"></use>
                                        </svg>
                                        <span class="plyr__sr-only">PIP</span>
                                    </button>
                                    <button class="plyr__controls__item plyr__control" type="button"
                                            data-plyr="fullscreen">
                                        <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-exit-fullscreen"></use>
                                        </svg>
                                        <svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-enter-fullscreen"></use>
                                        </svg>
                                        <span class="label--pressed plyr__sr-only">Exit fullscreen</span>
                                        <span class="label--not-pressed plyr__sr-only">Enter fullscreen</span>
                                    </button>
                                </div>
                                <div class="plyr__video-wrapper plyr__video-embed" style="padding-bottom: 56.25%;">
                                    <iframe id="youtube-3117"
                                            data-poster="<?= $models[0]->poster ?>"
                                            frameborder="0" allowfullscreen=""
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            title="Player for <?= $models[0]->description ?>" width="640" height="360"
                                            src="<?= $models[0]->src ?>?autoplay=0&amp;controls=0&amp;disablekb=1&amp;playsinline=1&amp;cc_load_policy=0&amp;cc_lang_pref=auto&amp;widget_referrer=https%3A%2F%2Frostselmash.com%2Felectronic-systems%2Fagrotronik-i-agronomicheskie-servisy%2F&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;customControls=true&amp;noCookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Frostselmash.com&amp;widgetid=1"
                                            data-gtm-yt-inspected-10="true"></iframe>
                                    <div class="plyr__poster"
                                         style="background-image: url(&quot;<?= $models[0]->poster ?>&quot;);"></div>
                                </div>
                                <button type="button" class="plyr__control plyr__control--overlaid" data-plyr="play"
                                        aria-label="Play">
                                    <svg aria-hidden="true" focusable="false">
                                        <use xlink:href="#plyr-play"></use>
                                    </svg>
                                    <span class="plyr__sr-only">Play</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div class="video-block-video__desc">
                    <span class="js-desc"><?= $models[0]->description ?></span>
                </div>
            </div>
            <?php
            if (count($models) > 1) {
                ?>
                <div class="video-block-list">
                    <div class="video-block-list__wrap">
                        <div class="video-block-list__head h5">Смотрите также</div>
                        <div class="video-block-list__content js-perfect-scrollbar ps ps--active-y">
                            <div class="video-block-list__content-wrap js-pagination">
                                <?php foreach ($models as $model) {
                                    ?>
                                    <div data-id="{$model->src}" data-poster="<?= $model->poster ?>"
                                         class="video-block-list__el js-pagination-item active">
                                        <div class="video-block-list__img">
                                            <div class="image is-lazy is-cover is-loaded" role="img"
                                                 aria-label="<?= $model->description ?>" data-bg="<?= $model->poster ?>"
                                                 data-ll-status="loaded"
                                                 style="background-image: url(&quot;<?= $model->poster ?>&quot;);"></div>
                                        </div>
                                        <div class="video-block-list__desc js-pagination-item-desc"><?= $model->description ?></div>
                                    </div>
                                    <?php
                                } ?>
                            </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; height: 710px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 485px;"></div>
                            </div>
                        </div>
                        <a href="!#" class="text-link text-default video-block-list__link text-link--underline">Показать
                            еще</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
