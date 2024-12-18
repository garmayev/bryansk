<?php
/**
 * @var \common\models\Element $model
 */
?>
<div id="general-description" class="wrapper wrap-pl-1 wrap-pr-1  mt-80 mb-56 mb-md-64 mb-lg-96 mt-lg-96">
    <div class="general-description">
        <div class="general-description__wrap">
            <div class="general-description__content general-description__content--factor ">
                <div class="general-description__title h2 animate" data-animate-lines="" style="opacity: 1;">
                    <div style="display: block; text-align: left; position: relative; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                        <div style="display: block; text-align: left; position: relative;">Общее описание</div>
                    </div>
                </div>
                <div class="general-description__left">
                    <ul class="general-description__factor-list">
                        <?php
                        foreach ($model->general_description->factor_list as $factor) {
                            echo "
<li class='general-description__factor'>
    <div class='factor animate' data-viewport-trigger='' data-animate=''>
        <div class='factor__text text-default animate' data-animate='fade-in-up' data-animate-delay='1'>$factor->text</div>
        <div class='factor__head'>";
                            if ($factor->heading) {
                                echo "
            <span class='factor__number'>
                <span class='factor__number-value animate' data-counter=''>$factor->heading</span>
            </span>
            <span class='factor__suffix'>
                <span style='display: none'> $factor->heading</span > $factor->suffix
            </span>
			";
                            } else {
                                echo "
                                <span class='factor__number'>";
                            }
                            echo "
		</div>
    </div>
</li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="general-description__right ">
                    <div class="general-description__description user-text">
                        <?= $model->general_description->description ?>
                    </div>
                    <div class="main-plashka-static">
                        <div>
                            <a href="https://rostselmash.com/local/components/uplab.production/form.univers/get-presentation.php?product_id=<?= $model->id ?>"
                               target="_blank" style="margin-right: 50px"
                               class="btn btn--primary btn--hover-gray has-icon">
                                <span class="btn__icon">
								    <i class="icon is-small" aria-hidden="true">
									    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
										    <rect x="4" y="5" width="16.4706" height="9.88235" stroke-width="2"></rect>
											<path d="M12.2354 15.706V19.0001" stroke-width="2"></path>
											<path d="M8.11768 19H16.353" stroke-width="2"></path>
                                        </svg>
                                    </i>
                                </span>
                                <span class="btn__text ">Скачать презентацию</span>
                            </a>
                        </div>
                        <img src="https://rostselmash.com/redizine/plashka/plashka.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
