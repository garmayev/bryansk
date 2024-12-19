<?php
/**
 *
 * @var \common\models\FeatureKey $feature
 */
?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelector(".main-features__accordion:first-child").classList.add("shown");
        document.querySelector(".main-features__accordion:first-child button").classList.add("is-active");
        document.querySelector(".main-features__accordion:first-child .main-features__roll").style.display = "block";
        const feat = document.querySelector("#features");

        const fixImage = () => {
            if (feat) {
                const rect = feat.getBoundingClientRect();
                const imageContainer = document.querySelector(".main-features__mainImage");

                if (rect.top > 0) {
                    imageContainer.classList.remove("leave")
                }
                if (rect.top < 0 && ((rect.top - window.innerHeight) + rect.height > 0)) {
                    imageContainer.classList.add("is-fixed")
                } else {
                    if ( imageContainer.classList.contains("is-fixed") ) {
                        document.querySelector(".main-features__mainImage").classList.remove("is-fixed")
                        document.querySelector(".main-features__mainImage").classList.add("leave")
                    }
                }
            }
        }

        window.addEventListener("scroll", fixImage)
        fixImage()
    });
</script>
<div id="features" class="wrapper wrap-pl-1 wrap-pr-1 my-lg-128 my-md-96 my-80">
    <div class="main-features" data-main-features="">
        <div class="main-features__heading mb-32 mb-md-48 mb-lg-56 animate" data-animate="">
            <div class="main-features__title mb-md-24 mb-lg-0">
                <h2 class="h2 animate" data-animate=""><?= $feature->heading ?></h2>
            </div>
        </div>
        <div class="main-features__body animate" data-body="" data-animate="">
            <div class="main-features__mainImage" data-image-wrap="">
                <div class="main-features__mainImage-wrap">
                    <img src="/images/skpsreoxdy5j1c62tw7z8k4ozc2qyi6e.jpg" alt="alt text" class="image is-lazy is-loading" data-image="" data-ll-status="loading">
                </div>
            </div>

            <div class="main-features__wrap">
                <?php
                foreach ($feature->groups as $group) {
                    ?>
                    <div class="main-features__group" data-features-accordion-group=""
                         data-image-src="/upload/iblock/715/qqm2d15bp4l7tzg9xvxm2ijkrq5mdy68.jpg">
                        <h4 class="main-features__subtitle animate" data-animate=""><?= $group->title ?></h4>
                        <div class="main-features__accordions">
                            <?php
                            foreach ($group->content as $content) {
                                ?>
                                <div class="main-features__accordion" data-image-src="<?= $content->image->src ?>"
                                     data-features-accordion-row="">
                                    <button type="button" class="main-features__toggle h5 animate"
                                            data-features-accordion-toggle="" data-animate=""><?= $content->toggle ?>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="20.48" y="8.41431" width="12" height="2"
                                                  transform="rotate(135 20.48 8.41431)"></rect>
                                            <rect x="4.92371" y="7" width="12" height="2"
                                                  transform="rotate(45 4.92371 7)"></rect>
                                        </svg>
                                    </button>
                                    <div class="main-features__roll" data-features-accordion-roll=""
                                         style="display: none;">
                                        <div class="main-features__content">
                                            <div class="user-text animate"
                                                 data-animate=""><?= $content->content ?></div>
                                        </div>
                                        <div class="main-features__image">
                                            <img class="image is-lazy is-cover"
                                                 src="<?= $content->image->src ?>"
                                                 data-src="<?= $content->image->src ?>"
                                                 alt="<?= $content->image->alt ?>">
                                            <div class="owl-carousel">
                                                <img src="<?= $content->image->src ?>" alt="s">
                                            </div>
                                        </div>
                                    </div>
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
</div>
