<?php

use common\models\Element;
use yii\web\View;

/**
 * @var View $tis
 * @var Element $model
 */

$this->title = $model->name;
?>
<div class="hero-main">
    <div class="hero-main__wrap">
        <div class="main-slider" data-autoplay="7000">
            <canvas class="main-slider__canvas"></canvas>

            <?php
            echo $this->render('_slider', [
                'slides' => $model->slides,
                'parent' => $model->section,
            ]);
            ?>
        </div>
    </div>
</div>
<div id="general-description" class="wrapper wrap-pl-1 wrap-pr-1  mt-80  ">
    <div class="general-description">
        <div class="general-description__wrap">
            <div class="general-description__content  general-description__content--second">
                <div class="general-description__title h2 animate" data-animate-lines="" style="opacity: 1;">
                    <div style="display: block; text-align: left; position: relative; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                        <?= $model->general_description->title ?>
                    </div>
                </div>
                <div class="general-description__left">
                    <p class="general-description__lead h5 animate" data-animate-lines="" style="opacity: 1;">
                        <?= $model->general_description->lead ?>
                    </p>
                </div>
                <div class="general-description__right ">
                    <div class="general-description__description user-text">
                        <?= $model->general_description->description ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (count($model->videos)) {
    echo $this->render('_video', [
        'models' => $model->videos,
    ]);
}
if ($model->description_list->bottom_list) {
    ?>
    <div class="wrapper wrap-pl-1 wrap-pr-1 mt-80 mb-24 my-2-fixed">
        <div class="general-description">
            <div class="general-description__wrap">
                <div class="general-description__content  general-description__content--second">
                    <div class="general-description__description user-text" data-animate-user-text=""
                         style="grid-column: 1 / 3; opacity: 1;">
                        <?= $model->description_list->bottom_list ?>
                    </div>
                    <div class="general-description__title h2 animate" data-animate-lines="" style="opacity: 1;">
                        <div style="display: block; text-align: left; position: relative; transform: translate3d(0px, 0px, 0px); opacity: 1;"><?= $model->description_list->title ?></div>
                    </div>
                    <div class="general-description__subtitle user-text" data-animate-user-text="">&nbsp;</div>
                    <div class="general-description__left">
                        <ul class="general-description__list">
                            <?php foreach ($model->description_list->left_list as $item) {
                                echo '<li class="general-description__list-item user-text animate" data-animate="">';
                                echo $item->text;
                                echo '</li>';
                            } ?>
                        </ul>
                    </div>
                    <div class="general-description__right ">
                        <ul class="general-description__list">
                            <?php foreach ($model->description_list->right_list as $item) {
                                echo '<li class="general-description__list-item user-text animate" data-animate="">';
                                echo $item->text;
                                echo '</li>';
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
if (isset($model->task_list->title)) {
?>
<div class="pt-32 pt-lg-96">
    <div class="task-list">
        <div class="task-list__head wrapper wrap-pl-1 wrap-pr-1 animate" data-animate="">
            <div class="task-list__title h2"><?= $model->task_list->title ?></div>
        </div>
        <div class="bg-light">
            <div class="task-list__content wrapper">
                <div class="task-list__left">
                    <div class="task-list__picture">
                        <?php
                        if ($model->task_list->picture) {
                            ?>
                            <img class="image is-lazy is-loaded" src="<?= $model->task_list->picture->src ?>"
                                 data-src="<?= $model->task_list->picture->src ?>" alt="image" data-ll-status="loaded">
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="task-list__right">
                    <ul class="task-list__list wrap-pl-1 wrap-pr-1">
                        <?php
                        foreach ($model->task_list->list as $item) {
                            echo '<li class="task-list__item animate" data-animate="" data-animate-delay="1">';
                            echo '<div class="list-item">';
                            $number = ($item->number < 10) ? '0' . $item->number : $item->number;

                            echo '<div class="list-item__number h3">' . $number . '</div>';
                            echo '<div class="list-item__title text-lead">' . $item->text . '</div>';
                            echo '</div>';
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>

<div class="wrapper">
    <div class="new-work-interactive">
        <div class="new-work-interactive__left">
            <div class="new-work-interactive__content">
                <div class="new-work-interactive__title">
                    Ознакомьтесь с работой <br>
                    системы в специальном <br>
                    интерактивном режиме
                </div>
                <div class="new-work-interactive__text">
                    После загрузки:
                    <ol>
                        <li>Разверните экран, нажав на синюю кнопку в правом нижнем углу;</li>
                        <li>Запустите интерактив, выбрав «Начать»;</li>
                        <li>Разверните меню кликнув на кнопку внизу экрана.</li>
                    </ol>
                    <p style="padding-bottom: 10px;">Доступные опции позволят создать рабочий процесс, максимально
                        приближенный к вашему предприятию.</p> Для выхода нажмите на клавиатуре клавишу Esc.
                </div>
                <div class="new-work-interactive__btn">
                    <a href="https://rostselmash.com/interactive/" class="btn btn--primary btn--hover-primary">
                        <span class="btn__text">Запустить цифровую ферму</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="new-work-interactive__right">
            <div class="new-work-interactive__img">
                <img src="https://rostselmash.com/redizine/new-block-interactive-18344/new-assets/bg-interactive.png"
                     alt="">
            </div>
        </div>
    </div>
</div>