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
    })
</script>
<div class="overflow-hidden single-n">
		<div class="hero ">
		   <div class="hero__inner wrapper wrap-pl-1 wrap-pr-1">
		      <nav class="breadcrumbs animate" aria-label="breadcrumb" data-animate="">
			 <ul class="breadcrumbs__list text-default" itemscope="" itemtype="https://schema.org/BreadcrumbList">
			    <li class="breadcrumbs__crumb" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
			       <a href="/financing/specials/" class="breadcrumbs__text breadcrumbs__link text-lead" itemprop="item">
			       <span itemprop="name">Новости</span>
			       </a>
			       <meta itemprop="position" content="1">
			    </li>
			 </ul>
		      </nav>
		      <h1 class="hero__title h3"><?= $model->title ?></h1>
		   </div>
		</div>
		<div class="content-wrapper wrap-pl-1 wrap-pr-1 content-wrapper--no-photo pinned" data-share-area="">
		   <div class="content">
		      <div class="content__user-text-wrap">
			 <div class="content__user-text user-text text-default">
			    <?= $model->text ?>
			 </div>
		      </div>
		   </div>
		   <p class="share-wrapper__title text-default">Поделиться</p>
		   <div class="pin-spacer" style="float: none; flex-shrink: 1; display: flex; margin: 0px; inset: 0px 0px 739px 1781px; position: absolute; overflow: visible; box-sizing: border-box; width: 70px; height: 883px; padding: 0px 0px 811px;"><div class="share-wrapper" data-share="" style="transform: translate3d(0px, 0px, 0px); left: 1781px; top: 120.25px; margin: 0px; max-width: 70px; width: 70px; max-height: 72px; height: 72px; padding: 0px; box-sizing: border-box; position: fixed;">
		      <div class="share-wrapper__content">
			 <button type="button" class="share-wrapper__toggle" data-toggle="">
			    <i class="icon is-small" aria-hidden="true">
			       <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path d="M3.18262 12.2976C3.18262 13.9516 4.52862 15.2976 6.18262 15.2976C6.97662 15.2976 7.69462 14.9826 8.23162 14.4776L14.2226 17.9016C14.2046 18.0316 14.1826 18.1616 14.1826 18.2976C14.1826 19.9516 15.5286 21.2976 17.1826 21.2976C18.8366 21.2976 20.1826 19.9516 20.1826 18.2976C20.1826 16.6436 18.8366 15.2976 17.1826 15.2976C16.3886 15.2976 15.6706 15.6126 15.1336 16.1176L9.14262 12.6946C9.16062 12.5636 9.18262 12.4336 9.18262 12.2976C9.18262 12.1616 9.16062 12.0316 9.14262 11.9006L15.1336 8.47761C15.6706 8.98261 16.3886 9.29761 17.1826 9.29761C18.8366 9.29761 20.1826 7.95161 20.1826 6.29761C20.1826 4.64361 18.8366 3.29761 17.1826 3.29761C15.5286 3.29761 14.1826 4.64361 14.1826 6.29761C14.1826 6.43361 14.2046 6.56361 14.2226 6.69461L8.23162 10.1176C7.67862 9.59229 6.94535 9.29884 6.18262 9.29761C4.52862 9.29761 3.18262 10.6436 3.18262 12.2976Z"></path>
			       </svg>
			    </i>
			 </button>
			 <div class="ya-share2 ya-share2_inited" data-bare="" data-services="vkontakte,facebook,odnoklassniki,twitter,viber,whatsapp,telegram"><div class="ya-share2__container ya-share2__container_size_m ya-share2__container_color-scheme_normal ya-share2__container_shape_normal"><ul class="ya-share2__list ya-share2__list_direction_horizontal"><li class="ya-share2__item ya-share2__item_service_vkontakte"><a class="ya-share2__link" href="https://vk.com/share.php?url=file%3A%2F%2F%2FD%3A%2Fgarmayev%2FDownloads%2Fportal%2Fsingle-new.html&amp;title=%D0%97%D0%B0%D0%B2%D0%BE%D0%B4%20%D1%81%D0%B5%D0%BB%D1%8C%D1%81%D0%BA%D0%BE%D1%85%D0%BE%D0%B7%D1%8F%D0%B9%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B9%20%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B8%20%D0%A0%D0%BE%D1%81%D1%82%D1%81%D0%B5%D0%BB%D1%8C%D0%BC%D0%B0%D1%88.%20%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D1%81%D0%B0%D0%B9%D1%82%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%20%D1%81%2095-%D0%BB%D0%B5%D1%82%D0%BD%D0%B5%D0%B9%20%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D0%B5%D0%B9&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="ВКонтакте"><span class="ya-share2__badge"><span class="ya-share2__icon"></span></span><span class="ya-share2__title">ВКонтакте</span></a></li><li class="ya-share2__item ya-share2__item_service_odnoklassniki"><a class="ya-share2__link" href="https://connect.ok.ru/offer?url=file%3A%2F%2F%2FD%3A%2Fgarmayev%2FDownloads%2Fportal%2Fsingle-new.html&amp;title=%D0%97%D0%B0%D0%B2%D0%BE%D0%B4%20%D1%81%D0%B5%D0%BB%D1%8C%D1%81%D0%BA%D0%BE%D1%85%D0%BE%D0%B7%D1%8F%D0%B9%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B9%20%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B8%20%D0%A0%D0%BE%D1%81%D1%82%D1%81%D0%B5%D0%BB%D1%8C%D0%BC%D0%B0%D1%88.%20%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D1%81%D0%B0%D0%B9%D1%82%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%20%D1%81%2095-%D0%BB%D0%B5%D1%82%D0%BD%D0%B5%D0%B9%20%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D0%B5%D0%B9&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Одноклассники"><span class="ya-share2__badge"><span class="ya-share2__icon"></span></span><span class="ya-share2__title">Одноклассники</span></a></li><li class="ya-share2__item ya-share2__item_service_twitter"><a class="ya-share2__link" href="https://twitter.com/intent/tweet?text=%D0%97%D0%B0%D0%B2%D0%BE%D0%B4%20%D1%81%D0%B5%D0%BB%D1%8C%D1%81%D0%BA%D0%BE%D1%85%D0%BE%D0%B7%D1%8F%D0%B9%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B9%20%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B8%20%D0%A0%D0%BE%D1%81%D1%82%D1%81%D0%B5%D0%BB%D1%8C%D0%BC%D0%B0%D1%88.%20%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D1%81%D0%B0%D0%B9%D1%82%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%20%D1%81%2095-%D0%BB%D0%B5%D1%82%D0%BD%D0%B5%D0%B9%20%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D0%B5%D0%B9&amp;url=file%3A%2F%2F%2FD%3A%2Fgarmayev%2FDownloads%2Fportal%2Fsingle-new.html&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Twitter"><span class="ya-share2__badge"><span class="ya-share2__icon"></span></span><span class="ya-share2__title">Twitter</span></a></li><li class="ya-share2__item ya-share2__item_service_viber"><a class="ya-share2__link" href="viber://forward?text=%D0%97%D0%B0%D0%B2%D0%BE%D0%B4%20%D1%81%D0%B5%D0%BB%D1%8C%D1%81%D0%BA%D0%BE%D1%85%D0%BE%D0%B7%D1%8F%D0%B9%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B9%20%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B8%20%D0%A0%D0%BE%D1%81%D1%82%D1%81%D0%B5%D0%BB%D1%8C%D0%BC%D0%B0%D1%88.%20%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D1%81%D0%B0%D0%B9%D1%82%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%20%D1%81%2095-%D0%BB%D0%B5%D1%82%D0%BD%D0%B5%D0%B9%20%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D0%B5%D0%B9%20file%3A%2F%2F%2FD%3A%2Fgarmayev%2FDownloads%2Fportal%2Fsingle-new.html&amp;utm_source=share2" rel="nofollow" target="_blank" title="Viber"><span class="ya-share2__badge"><span class="ya-share2__icon"></span></span><span class="ya-share2__title">Viber</span></a></li><li class="ya-share2__item ya-share2__item_service_whatsapp"><a class="ya-share2__link" href="https://api.whatsapp.com/send?text=%D0%97%D0%B0%D0%B2%D0%BE%D0%B4%20%D1%81%D0%B5%D0%BB%D1%8C%D1%81%D0%BA%D0%BE%D1%85%D0%BE%D0%B7%D1%8F%D0%B9%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B9%20%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B8%20%D0%A0%D0%BE%D1%81%D1%82%D1%81%D0%B5%D0%BB%D1%8C%D0%BC%D0%B0%D1%88.%20%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D1%81%D0%B0%D0%B9%D1%82%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%20%D1%81%2095-%D0%BB%D0%B5%D1%82%D0%BD%D0%B5%D0%B9%20%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D0%B5%D0%B9%20file%3A%2F%2F%2FD%3A%2Fgarmayev%2FDownloads%2Fportal%2Fsingle-new.html&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="WhatsApp"><span class="ya-share2__badge"><span class="ya-share2__icon"></span></span><span class="ya-share2__title">WhatsApp</span></a></li><li class="ya-share2__item ya-share2__item_service_telegram"><a class="ya-share2__link" href="https://t.me/share/url?url=file%3A%2F%2F%2FD%3A%2Fgarmayev%2FDownloads%2Fportal%2Fsingle-new.html&amp;text=%D0%97%D0%B0%D0%B2%D0%BE%D0%B4%20%D1%81%D0%B5%D0%BB%D1%8C%D1%81%D0%BA%D0%BE%D1%85%D0%BE%D0%B7%D1%8F%D0%B9%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B9%20%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B8%20%D0%A0%D0%BE%D1%81%D1%82%D1%81%D0%B5%D0%BB%D1%8C%D0%BC%D0%B0%D1%88.%20%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D1%81%D0%B0%D0%B9%D1%82%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%20%D1%81%2095-%D0%BB%D0%B5%D1%82%D0%BD%D0%B5%D0%B9%20%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D0%B5%D0%B9&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Telegram"><span class="ya-share2__badge"><span class="ya-share2__icon"></span></span><span class="ya-share2__title">Telegram</span></a></li></ul></div></div>
		      </div>
		   </div></div>
		</div>
	     </div>