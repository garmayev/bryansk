<?php

use \yii\web\View;
use common\models\Post;

/**
 * @var View $this
 * @var Post $model
 */

?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        setTheme("black")

        let selectedYear, selectedMonth;
        const monthSelector = $("#PROPERTY_DATE_START_MONTH");
        const yearSelector = $("#PROPERTY_DATE_START_YEAR");
        const filter = () => {
            const cards = $('.card-news');
            cards.hide()
            cards.each(function (index) {
                console.log( $(this).data('year') )
                if (selectedYear && Number.parseInt($(this).data('year')) === selectedYear) {
                    $(this).show();
                }
                if (selectedMonth && Number.parseInt($(this).data('month')) === selectedMonth) {
                    $(this).show();
                }
            })
        }

        $("#data-form-clear").on("click", () => {
            $('.card-news').show();
            selectedMonth = undefined;
            selectedYear = undefined;
        })
        monthSelector.on("select2:select", (event) => {
            selectedMonth = Number.parseInt(event.params.data.id);
            filter();
        });
        yearSelector.on("select2:select", (event) => {
            selectedYear = Number.parseInt(event.params.data.id);
            filter();
        })
    })
</script>
<div class="hero ">
   <div class="hero__inner wrapper wrap-pl-1 wrap-pr-1">
      <nav class="breadcrumbs animate" aria-label="breadcrumb" data-animate="">
         <ul class="breadcrumbs__list text-default" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li class="breadcrumbs__crumb" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
               <a href="/" class="breadcrumbs__text breadcrumbs__link text-lead" itemprop="item">
               <span itemprop="name">Главная</span>
               </a>
               <meta itemprop="position" content="1">
            </li>
         </ul>
      </nav>
      <h1 class="hero__title h2">Новости</h1>
      <div class="finance">
         <div class="finance__desc">
         </div>
      </div>
   </div>
</div>

<div class="tabs-link wrapper wrap-pl-1 wrap-pr-1" data-link-tabs="">
   <div class="tabs-link__wrap">
      <div class="tabs-list">
         <div class="tabs-list__wrap">
            <a href="/post/index" class="tabs-list__el active" data-href="/post/index" data-tab="">Новости</a>
            <a href="https://blog.rostselmash.com" class="tabs-list__el " data-href="https://blog.rostselmash.com" data-tab="" target="_blank">Блог Ростсельмаш</a>
         </div>
      </div>
   </div>
</div>

<div class="">
   <div class="filter wrapper">
      <div class="d-lg-none">
         <a href="#filters" class="btn btn--primary btn--hover-primary has-icon		   " data-modal="" data-effect="mfp-move-from-left">
            <span class="btn__icon">
               <i class="icon is-small" aria-hidden="true">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8816 10.969C13.7533 11.0974 13.6645 11.3095 13.6645 11.4909V18.5175L11.3545 16.1987C11.3521 16.1963 11.3346 16.154 11.3346 16.1505V11.4901C11.3346 11.309 11.247 11.0985 11.1174 10.969L5.80947 5.66569H19.1886L13.8816 10.969ZM5.67348 5C5.0123 5 4.77668 5.56966 5.24534 6.03831L10.6467 11.4397C10.6517 11.4447 10.6689 11.486 10.6689 11.4901V16.1505C10.6689 16.3305 10.7565 16.5422 10.8838 16.6694L13.762 19.5476C13.9716 19.7573 14.3302 19.6088 14.3302 19.3122V11.4909C14.3302 11.4869 14.3482 11.4438 14.3524 11.4397L19.7537 6.03831C20.2232 5.56882 19.9891 5 19.3256 5H5.67348Z" fill="currentColor" stroke="currentColor"></path>
                  </svg>
               </i>
            </span>
            <span class="btn__text ">Фильтр</span>
         </a>
      </div>
      <div class="modal mfp-hide mfp-with-anim modal--filter" id="filters">
         <button title="Close (Esc)" type="button" class="mfp-close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
               <path d="M6 18L18.7279 5.27211" stroke-width="2"></path>
               <path d="M6 5L18.7279 17.7279" stroke-width="2"></path>
            </svg>
         </button>
         <div class="modal__content bg-white">
            <h3 class="modal__head h3">Фильтр</h3>
            <div class="modal__body">
               <div class="modal__left">
                  <form name="form-case-filter" action="/" method="POST" class="form-layout js-validate" id="form-case-filter" data-parsley-validate="" novalidate="" data-parsley-initialized="">
                     <div class="form-layout__items">
                        <div class="form-layout__item ">
                           <div class="form-layout__field">
                              <div class="field theme-light">
                                 <div class="control">
                                    <select id="PROPERTY_DATE_START_YEAR" class="select select2-hidden-accessible" name="PROPERTY_DATE_START_YEAR" data-select="" data-select-size="default" data-select-theme="light" data-select-placeholder="Выберите год" data-select2-id="PROPERTY_DATE_START_YEAR" tabindex="-1" aria-hidden="true">
                                       <option label="Выберите год"></option>
                                       <option value="2024" selected="" data-select2-id="3">
                                          2024
                                       </option>
                                       <option value="2023">
                                          2023
                                       </option>
                                       <option value="2022">
                                          2022
                                       </option>
                                       <option value="2021">
                                          2021
                                       </option>
                                       <option value="2020">
                                          2020
                                       </option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-layout__item ">
                           <div class="form-layout__field">
                              <div class="field theme-light">
                                 <div class="control">
                                    <select id="PROPERTY_DATE_START_MONTH" class="select select2-hidden-accessible" name="PROPERTY_DATE_START_MONTH" data-select="" data-select-size="default" data-select-theme="light" data-select-placeholder="Выберите месяц" data-select2-id="PROPERTY_DATE_START_MONTH" tabindex="-1" aria-hidden="true">
                                       <option label="Выберите месяц"></option>
                                       <option value="01">
                                          Январь
                                       </option>
                                       <option value="02">
                                          Февраль
                                       </option>
                                       <option value="03" selected="" data-select2-id="5">
                                          Март
                                       </option>
                                       <option value="04">
                                          Апрель
                                       </option>
                                       <option value="05">
                                          Май
                                       </option>
                                       <option value="06">
                                          Июнь
                                       </option>
                                       <option value="07">
                                          Июль
                                       </option>
                                       <option value="08">
                                          Август
                                       </option>
                                       <option value="09">
                                          Сентябрь
                                       </option>
                                       <option value="10">
                                          Октябрь
                                       </option>
                                       <option value="11">
                                          Ноябрь
                                       </option>
                                       <option value="12">
                                          Декабрь
                                       </option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="filter-tag-list">
                     </div>
                     <div class="form-layout__actions">
                        <div class="form-layout__action">
                           <button type="submit" class="btn btn--primary btn--hover-primary d-lg-none			" onclick="jsFilterCase.closeModal();return false;">
                           <span class="btn__text ">Применить</span>
                           </button>
                        </div>
                        <div class="form-layout__action">
                           <button type="button" class="link-action" id="data-form-clear" onclick="jsFilterCase.clearFilter();return false;">
                              <i class="icon is-small link-action__icon" aria-hidden="true">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 18L18.7279 5.27211" stroke-width="2"></path>
                                    <path d="M6 5L18.7279 17.7279" stroke-width="2"></path>
                                 </svg>
                              </i>
                              <span class="link-action__text">Сбросить фильтр</span>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="filter__tag-list d-lg-none">
         <div class="filter-tag-list">
         </div>
      </div>
   </div>
</div>

<div class="case_reload_area">
   <script data-test-script="">
      window.pagenav = {
          navRecordCount: "7",
          navPageNomer:  "8",
          navPageSize: "8",
          nEndPage: "1"
      };
   </script>
   <div class="news-list">
      <div class="news-list__list">
        <?php
            $posts = Post::find()->orderBy(['id' => SORT_DESC])->all();
            foreach ($posts as $post) {
                echo $this->render('_post', [ 'model' => $post ]);
            }
        ?>
      </div>
   </div>
</div>