<?php
/**
 *
 * @var \common\models\Element $model
 * @var \yii\web\View $this
 */

$this->title = $model->name;
?>
<script src="/js/script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        setTheme('white')
    })
</script>

<style>
    .r-logo {
        display: none;
    }

    .is-menu-open .r-logo {
        display: block;
    }

    .is-menu-open .w-logo {
        display: none;
    }
</style>

<div class="hero-main">
    <div class="hero-main__wrap">
        <div class="main-slider" data-autoplay="7000">
            <canvas class="main-slider__canvas"></canvas>
            <?= $model->guinness_mark ? '<div class="main-plashka">
						<img src="https://rostselmash.com/redizine/plashka/plashka.png" alt="">
					</div>' : '' ?>
            <?= $this->render("_slider", [
                'slides' => $model->slides,
                'parent' => $model->section
            ]) ?>
        </div>
    </div>
</div>
<?= $this->render("_general_description", [
    "model" => $model
]) ?>
<?= $this->render("_appointment") ?>
<?= $this->render("_documents", [
    "model" => $model
]) ?>
<?= $this->render("_features", [
    'feature' => $model->key_features
]) ?>
<?= $this->render("_tech", [
    'tech' => $model->tech_characteristics
]) ?>
<?= $this->render("_dealers") ?>
<div id="client-review" class="my-md-4r">
    <div class="block-slider wrapper wrap-pr-1 wrap-pl-1">
        <div class="block-slider__head" data-animate>
            <h2 class="block-slider__title h2">Клиенты о нас</h2>
            <div class="block-slider__link">
                <a href="/company/clients-about-us/"
                   class="text-link text-default text-link--underline">Все отзывы</a>
            </div>
        </div>
        <div class="block-slider__wrap" data-slider-wrap>
            <canvas  class="block-slider__canvas"
            >
            </canvas>
            <div data-id="0" data-src="/images/6hn9hwc1tm9awwcskafqxy3xpeh1qc67.jpg"
                 class="block-slider__image"></div>
            <div data-id="1" data-src="/images/jurm7fc1p3pum3z64xwqzzui16otdhpc.jpg"
                 class="block-slider__image"></div>
            <div data-id="2" data-src="/images/gm1wdi9z2pctjhvksmb9782s66oso219.jpg"
                 class="block-slider__image"></div>
            <div data-id="3" data-src="/images/sa4k9xdnrpeaghp4urdspsguvy2wyhmj.jpg"
                 class="block-slider__image"></div>
            <div class="swiper-container" data-slider>
                <div class="swiper-wrapper">
                    <div class="block-slider__slide swiper-slide">
                        <div class="block-slider__slide-content">
                            <div
                                    class="block-slider__slide-content-wrap">
                                <div class="block-slider__slide-content-head">
                                    <h4 class="block-slider__slide-content-title"
                                    >ООО «Ушаково-Агро», системы точного земледелия</h4>
                                </div>
                                <div class="block-slider__slide-content-text" data-animate>
                                    <h4 >Основной вид деятельности — растениеводство</h4>
                                    <div class="block-slider__slide-content-link">
                                        <a href="/company/clients-about-us/ooo-ushakovo-agro-elektronnye-sistemy/"
                                           class="text-link text-default text-link--underline">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-slider__slide swiper-slide">
                        <div class="block-slider__slide-content">
                            <div
                                    class="block-slider__slide-content-wrap">
                                <div class="block-slider__slide-content-head">
                                    <h4 class="block-slider__slide-content-title"
                                    >КФХ Паламарчук, точное земледелие в деле</h4>
                                </div>
                                <div class="block-slider__slide-content-text" data-animate>
                                    <h4 >Основной вид деятельности — растениеводство<br />
                                        <br />
                                    </h4>
                                    <div class="block-slider__slide-content-link">
                                        <a href="/company/clients-about-us/kfkh-palamarchuk-tochnoe-zemledelie-v-dele/"
                                           class="text-link text-default text-link--underline">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-slider__slide swiper-slide">
                        <div class="block-slider__slide-content">
                            <div
                                    class="block-slider__slide-content-wrap">
                                <div class="block-slider__slide-content-head">
                                    <h4 class="block-slider__slide-content-title"
                                    >Мы знаем, что он делал прошлым летом</h4>
                                </div>
                                <div class="block-slider__slide-content-text" data-animate>
                                    <h4 >
                                        <p>
                                            Комбайн TORUM 785, поступивший в продажу весной 2018&nbsp;года, уже успел зарекомендовать себя на полях страны как мощный и высокопроизводительный помощник. Используя собственные инновационные разработки, Ростсельмаш выпустил на рынок, пожалуй, свой лучший комбайн последних лет. По оценкам экспертов, TORUM 785&nbsp;— один из самых функциональных и продвинутых комбайнов на рынке.
                                        </p>
                                        <p>
                                            «Комбайн отработал весь прошлый сезон, он вполне соответствует всем ключевым тенденциям современн...
                                    </h4>
                                    <div class="block-slider__slide-content-link">
                                        <a href="#modal--case-3340"
                                           class="text-link text-default text-link--underline" data-modal data-effect='mfp-move-from-left'>Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-slider__slide swiper-slide">
                        <div class="block-slider__slide-content">
                            <div
                                    class="block-slider__slide-content-wrap">
                                <div class="block-slider__slide-content-head">
                                    <h4 class="block-slider__slide-content-title"
                                    >ООО «Дубовицкое», зерноуборочный комбайн TORUM 785</h4>
                                </div>
                                <div class="block-slider__slide-content-text" data-animate>
                                    <h4 >Основное направление деятельности — опытная площадка и семеноводческий центр, где организовано высокорентабельное сельскохозяйственное производство.</h4>
                                    <div class="block-slider__slide-content-link">
                                        <a href="/company/clients-about-us/ooo-dubovitskoe-zernouborochnyy-kombayn-torum-785/"
                                           class="text-link text-default text-link--underline">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-slider__pagination"></div>
                <div
                        class="nav-arrows nav-arrows--default">
                    <button type="button" class="nav-arrows__button" data-nav-arrow-prev
                            title="Назад" aria-label="Назад"></button>
                    <button type="button" class="nav-arrows__button" data-nav-arrow-next
                            title="Вперёд" aria-label="Вперёд"></button>
                    <button class="nav-arrows__pause">
                        <i class="icon is-small"
                           aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 12L9 20L9 4L17 12Z" fill="currentColor"/>
                            </svg>
                        </i>
                    </button>
                    <span class="nav-arrows__arrow">
				   <i class="icon is-small"
                      aria-hidden="true">
					  <svg width="24" height="24" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						 <path d="M16 19L9 12L16 5" stroke-width="2" stroke-linecap="square"/>
					  </svg>
				   </i>
				</span>
                    <span class="nav-arrows__arrow">
				   <i class="icon is-small"
                      aria-hidden="true">
					  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
						 <path d="M9.00012 5L16.0001 12L9.00012 19" stroke-width="2" stroke-linecap="square"/>
					  </svg>
				   </i>
				</span>
                </div>
            </div>
        </div>
        <div class="block-slider-m" data-slider-m-wrap>
            <div class="swiper-container" data-slider>
                <div class="swiper-wrapper">
                    <div class="block-slider__slide swiper-slide">
                        <div class="block-slider__slide-img ">
                            <div class="image is-cover swiper-lazy"
                                 role="img"
                                 aria-label="image"
                                 data-background="/images/6hn9hwc1tm9awwcskafqxy3xpeh1qc67.jpg"
                            ></div>
                        </div>
                        <div class="block-slider__slide-content">
                            <div
                                    class="block-slider__slide-content-wrap">
                                <div class="block-slider__slide-content-head">
                                    <h4 class="block-slider__slide-content-title"
                                    >ООО «Ушаково-Агро», системы точного земледелия</h4>
                                </div>
                                <div class="block-slider__slide-content-text" data-animate>
                                    <h4 >Основной вид деятельности — растениеводство</h4>
                                    <div class="block-slider__slide-content-link">
                                        <a href="/company/clients-about-us/ooo-ushakovo-agro-elektronnye-sistemy/"
                                           class="text-link text-default text-link--underline">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-slider__slide swiper-slide">
                        <div class="block-slider__slide-img ">
                            <div class="image is-cover swiper-lazy"
                                 role="img"
                                 aria-label="image"
                                 data-background="/images/jurm7fc1p3pum3z64xwqzzui16otdhpc.jpg"
                            ></div>
                        </div>
                        <div class="block-slider__slide-content">
                            <div
                                    class="block-slider__slide-content-wrap">
                                <div class="block-slider__slide-content-head">
                                    <h4 class="block-slider__slide-content-title"
                                    >КФХ Паламарчук, точное земледелие в деле</h4>
                                </div>
                                <div class="block-slider__slide-content-text" data-animate>
                                    <h4 >Основной вид деятельности — растениеводство<br />
                                        <br />
                                    </h4>
                                    <div class="block-slider__slide-content-link">
                                        <a href="/company/clients-about-us/kfkh-palamarchuk-tochnoe-zemledelie-v-dele/"
                                           class="text-link text-default text-link--underline">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-slider__slide swiper-slide">
                        <div class="block-slider__slide-img ">
                            <div class="image is-cover swiper-lazy"
                                 role="img"
                                 aria-label="image"
                                 data-background="/images/gm1wdi9z2pctjhvksmb9782s66oso219.jpg"
                            ></div>
                        </div>
                        <div class="block-slider__slide-content">
                            <div
                                    class="block-slider__slide-content-wrap">
                                <div class="block-slider__slide-content-head">
                                    <h4 class="block-slider__slide-content-title"
                                    >Мы знаем, что он делал прошлым летом</h4>
                                </div>
                                <div class="block-slider__slide-content-text" data-animate>
                                    <h4 >
                                        <p>
                                            Комбайн TORUM 785, поступивший в продажу весной 2018&nbsp;года, уже успел зарекомендовать себя на полях страны как мощный и высокопроизводительный помощник. Используя собственные инновационные разработки, Ростсельмаш выпустил на рынок, пожалуй, свой лучший комбайн последних лет. По оценкам экспертов, TORUM 785&nbsp;— один из самых функциональных и продвинутых комбайнов на рынке.
                                        </p>
                                        <p>
                                            «Комбайн отработал весь прошлый сезон, он вполне соответствует всем ключевым тенденциям современн...
                                    </h4>
                                    <div class="block-slider__slide-content-link">
                                        <a href="#modal--case-3340"
                                           class="text-link text-default text-link--underline" data-modal data-effect='mfp-move-from-left'>Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-slider__slide swiper-slide">
                        <div class="block-slider__slide-img ">
                            <div class="image is-cover swiper-lazy"
                                 role="img"
                                 aria-label="image"
                                 data-background="/images/sa4k9xdnrpeaghp4urdspsguvy2wyhmj.jpg"
                            ></div>
                        </div>
                        <div class="block-slider__slide-content">
                            <div
                                    class="block-slider__slide-content-wrap">
                                <div class="block-slider__slide-content-head">
                                    <h4 class="block-slider__slide-content-title"
                                    >ООО «Дубовицкое», зерноуборочный комбайн TORUM 785</h4>
                                </div>
                                <div class="block-slider__slide-content-text" data-animate>
                                    <h4 >Основное направление деятельности — опытная площадка и семеноводческий центр, где организовано высокорентабельное сельскохозяйственное производство.</h4>
                                    <div class="block-slider__slide-content-link">
                                        <a href="/company/clients-about-us/ooo-dubovitskoe-zernouborochnyy-kombayn-torum-785/"
                                           class="text-link text-default text-link--underline">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal mfp-hide mfp-with-anim modal--card" id="modal--case-3340">
        <button title="Close (Esc)" type="button" class="mfp-close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18.7279 5.27211" stroke-width="2"/>
                <path d="M6 5L18.7279 17.7279" stroke-width="2"/>
            </svg>
        </button>
        <div class="modal__content bg-white">
            <div class="modal-card js-perfect-scrollbar">
                <div class="modal-card__head">
                    <div class="modal-card__title h2">Мы знаем, что он делал прошлым летом</div>
                </div>
                <div class="modal-card__img">
                    <img class="image"
                         src="/images/gm1wdi9z2pctjhvksmb9782s66oso219.jpg"
                         alt="image"
                    >
                </div>
                <div class="modal-card__content">
                    <div class="modal-card__content-text user-text">
                        <p>
                            Комбайн TORUM 785, поступивший в продажу весной 2018&nbsp;года, уже успел зарекомендовать себя на полях страны как мощный и высокопроизводительный помощник. Используя собственные инновационные разработки, Ростсельмаш выпустил на рынок, пожалуй, свой лучший комбайн последних лет. По оценкам экспертов, TORUM 785&nbsp;— один из самых функциональных и продвинутых комбайнов на рынке.
                        </p>
                        <p>
                            «Комбайн отработал весь прошлый сезон, он вполне соответствует всем ключевым тенденциям современного сельского хозяйства&nbsp;— постоянно растущей мощности техники, удобству эксплуатации, сокращению потерь зерна»,&nbsp;— отмечает Игорь Муратов, директор ООО&nbsp;«Тригорское», крупнейшего хозяйства Северо-Западного региона.
                        </p>
                        <p>
                            При средних показателях эксплуатации TORUM 785 способен за страду убрать около 2&nbsp;000&nbsp;га различных агротехнических культур. За восьмичасовую рабочую смену техника обмолачивает свыше 360&nbsp;т зерновых, не теряя при этом качества обмолота. Отметим, что комбайн идеально подходит для работы на участках со сложным рельефом и скоса растительной массы с высокой влажностью.
                        </p>
                        <p>
                            В качестве силовой установки на комбайн устанавливается рядный шестицилиндровый дизельный двигатель Mercedes с отдельными топливными насосами на каждый из цилиндров. Мощность его составляет около 506&nbsp;л.&nbsp;с., а объем равен 12,85&nbsp;л. Емкость топливного бака&nbsp;— 850&nbsp;л. В&nbsp;системе воздухоочистки применяется сетка воздухозаборника с принудительным вращением (от гидромотора), которая существенно снижает трудоемкость обслуживания.
                        </p>
                        <p>
                            Специальная электронная система непрерывно следит за работоспособностью всех узлов и агрегатов. Если показатели или характеристики отдельного процесса ухудшаются, система аварийно остановит комбайн и подаст звуковой сигнал. Тем самым почти гарантированно можно избежать серьезной поломки отдельного узла, из-за которого нарушились параметры.
                        </p>
                        <p>
                            Наклонная камера нового поколения делает TORUM&nbsp;785 многофункциональным, способным работать с различными культурами. Камера имеет цепочно-планчатый транспортер с ускорительным битером на выходе.
                        </p>
                        <p>
                            Грузоподъемность наклонной камеры увеличена до 4,5&nbsp;т, что позволяет эксплуатировать машину с более широкозахватными жатками. Увеличенный привод до 120&nbsp;кВт позволит оснащать машину 12-рядной кукурузной жаткой.
                        </p>
                        <p>
                            TORUM 785 работает с использованием электрогидравлической системы копирования рельефа почвы. Неровности компенсируются при помощи «копиров» и гидроцилиндров подъема наклонной камеры.
                        </p>
                        <p>
                            Настоящее ноу-хау этой модели&nbsp;— вращающаяся дека ротора, которая позволила увеличить площадь обмолота и сепарации до 5,4&nbsp;кв.&nbsp;м&nbsp;— это почти вдвое больше, чем у других роторных комбайнов. Дополнительная система самоочистки не позволит массе зависнуть или засориться ротору. Чистое зерно попадает в бункер объемом 12&nbsp;300&nbsp;л&nbsp;— крупнейший объем в своем классе! Он позволяет увеличить эффективность работы путем снижения количества циклов разгрузки. Скорость выгрузки составляет 120&nbsp;л/с, полный бункер опустошается в течение не более двух минут. Длина выгрузного шнека составляет 7,5&nbsp;м, высота выгрузки&nbsp;— 5,4&nbsp;м, угол выноса&nbsp;— 105&nbsp;градусов. Это позволяет легко выгружать зерно в любые грузовые машины и прицепы даже с 14-метровой жаткой.
                        </p>
                        <p>
                            Комбайны TORUM оснащаются новой кабиной Luxury Cab, которая превращает уборку урожая в комфортный и несложный процесс без штатных ситуаций, а не в пресловутую «битву за урожай». Водитель комбайна работает в ней более эффективно, с меньшим напряжением и усталостью. Информационно-голосовая система Adviser&nbsp;III непрерывно следит за процессом обмолота и работой механизмов комбайна, позволяя контролировать стабильность техпроцесса и предотвращать поломки агрегатов.
                        </p>
                        <p>
                            «В целом TORUM 785&nbsp;— комбайн с оптимальным соотношением цена/качество, он показывает высокую скорость обмолота»,&nbsp;— говорит Алексей Ковтун, главный инженер «Агрозоопродукт Зимин и&nbsp;К». По его словам, обслуживание комбайнов Ростсельмаш обходится дешевле других комбайнов, при этом качество техники Ростсельмаш значительно выросло за последние несколько лет.
                        </p>
                        <p>
                            Помимо высокой производительности и экономичности, комбайны TORUM отличает способность эффективно работать на засоренных и влажных фонах. Кроме того, в исполнении с полугусеничным ходом благодаря увеличенной площади опорной поверхности данный комбайн является, пожалуй, единственным приемлемым решением для топких полей, используемых под сою и рисоводство.
                        </p>
                        <p>
                            Сегодня все больше хозяйств идут по пути интенсификации производства и оптимизации затрат. TORUM 785 в полной мере соответствует требованиям, предъявляемым к современному агробизнесу. И&nbsp;ведущие фермерские хозяйства от Краснодара до Пскова, от Курска до Калининграда уже успели в этом убедиться.
                        </p>
                        <p>
                            Этим летом TORUM 785 станет настоящим хитом на полях страны!
                        </p>
                    </div>
                    <div class="modal-card__content-fact">
                        <div class="factor" data-viewport-trigger data-animate>
                            <div class="factor__head">
						 <span class="factor__number">
						 </span>
                            </div>
                        </div>
                        <div class="factor" data-viewport-trigger data-animate>
                            <div class="factor__head">
						 <span class="factor__number">
						 </span>
                            </div>
                        </div>
                        <div class="factor" data-viewport-trigger data-animate>
                            <div class="factor__head">
						 <span class="factor__number">
						 </span>
                            </div>
                        </div>
                        <div class="factor" data-viewport-trigger data-animate>
                            <div class="factor__head">
						 <span class="factor__number">
						 </span>
                            </div>
                        </div>
                        <div class="factor" data-viewport-trigger data-animate>
                            <div class="factor__head">
						 <span class="factor__number">
						 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->render("/layouts/_interest") ?>
