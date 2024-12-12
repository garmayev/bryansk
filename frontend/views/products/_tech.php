<?php
/**
 *
 * @var \common\models\Tech $tech
 */
?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll(".tech-list__accordion").forEach(item => {
            item.addEventListener("click", e => {
                item.classList.toggle("shown");
                item.querySelector(".tech-list__toggle").classList.toggle("is-active")
                item.querySelector(".tech-list__roll").style.display = item.classList.contains("shown") ? "block" : "none";
            })
        })
    })
</script>
<div id="specifications" class="wrapper wrap-pl-1 wrap-pr-1 my-md-4r">
    <div class="tech-list">
        <div class="tech-list__heading mb-lg-64 mb-md-40 mb-32">
            <h2><?= $tech->heading ?></h2>
        </div>
        <div class="tech-list__body">
            <div class="tech-list__wrap animate" data-animate="">
                <?php
                foreach ($tech->accordions as $accordion) {
                    echo '
                <div class="tech-list__accordion animate" data-accordion-row="" data-animate="">
                    <button type="button" class="tech-list__toggle h5" data-accordion-toggle="">'.$accordion->title.'
                        <span class="tech-list__arrow">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <rect x="20.48" y="8.41431" width="12" height="2" transform="rotate(135 20.48 8.41431)"></rect>
                                 <rect x="4.92371" y="7" width="12" height="2" transform="rotate(45 4.92371 7)"></rect>
                            </svg>
						</span>
                    </button>
                    <div class="tech-list__roll" data-accordion-roll="" style="display: none;">
                        <div class="tech-list__content">
                            <div class="user-text">
                                <div class="user-table-wrapper">'.$accordion->content.'
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                }
                ?>
            </div>
            <div class="tech-list__side">
                <div class="tech-list__wr">
                    <ul class="tech-list__legend">
                        <li class="tech-list__option text-default">Серийно</li>
                        <li class="tech-list__option text-default">Опционально</li>
                        <li class="tech-list__option text-default">Недоступно</li>
                    </ul>
                    <div class="tech-list__action">
                        <button type="button" class="btn btn--primary btn--hover-primary			"
                                data-accordion-opener="" data-toggle-text="Свернуть все">
                            <span class="btn__text ">Развернуть все</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
