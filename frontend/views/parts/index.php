<?php

use yii\web\View;


/**
 * @var View $this
 */

$this->title = "Запчасти и сервис";
?>
<script src="/js/script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        setTheme("black");
    })
</script>
<div class="pt-md-160 pt-96 mb-lg-56 mb-md-48 mb-40 wrapper wrap-pl-1 wrap-pr-1">
    <div class="page-heading">
        <a href="/products/" class="text-lead page-heading__link mb-16" data-link-animate="">Главная</a>
        <h1 class="h2 page-heading__title"><?= $this->title ?></h1>
    </div>
</div>
<div class="py-80 wrap-pl-1 wrap-pr-1">
    <div class="tech-cards-list">
	<div class="tech-cards-list__wrap">
	    <div class="tech-cards-list__content">
		<div class="tech-cards-list__row">
		    <div class="tech-cards-list__col">
			<div class="card" itemscope="" itemtype="http://schema.org/ImageObject">
			    <a href="/parts/spares/" class="card__inner">
				<div class="card__img">
				    <img class="image is-lazy isItemProp is-loaded" src="https://rostselmash.com/upload/medialibrary/d89/d890e65ed9d54e777b59e3c4c396e53e.jpg" data-src="https://rostselmash.com/upload/medialibrary/d89/d890e65ed9d54e777b59e3c4c396e53e.jpg" itemprop="contentUrl" data-srcset="https://rostselmash.com/upload/medialibrary/d89/d890e65ed9d54e777b59e3c4c396e53e.jpg" alt="image" srcset="https://rostselmash.com/upload/medialibrary/d89/d890e65ed9d54e777b59e3c4c396e53e.jpg" data-ll-status="loaded">
				</div>
				<div class="card__info">
				    <div class="card__info-wrap">
					<div class="card__title text-lead animate" data-animate-lines="" itemprop="name" style="opacity: 1;">
					    <div style="display: block; text-align: left; position: relative; transform: translate3d(0px, 0px, 0px); opacity: 1;">Оригинальные запчасти и сервис</div>
					</div>
				    </div>
				</div>
			    </a>
			</div>
		    </div>
		    <div class="tech-cards-list__col">
			<div class="card" itemscope="" itemtype="http://schema.org/ImageObject">
			    <a href="/parts/qr" class="card__inner">
				<div class="card__img">
				    <img class="image is-lazy isItemProp is-loaded" src="https://rostselmash.com/upload/medialibrary/3aa/3aab8c75f5336a605c00c3fa19c85554.jpg" data-src="https://rostselmash.com/upload/medialibrary/3aa/3aab8c75f5336a605c00c3fa19c85554.jpg" itemprop="contentUrl" data-srcset="https://rostselmash.com/upload/medialibrary/3aa/3aab8c75f5336a605c00c3fa19c85554.jpg" alt="image" srcset="https://rostselmash.com/upload/medialibrary/3aa/3aab8c75f5336a605c00c3fa19c85554.jpg" data-ll-status="loaded">
				</div>
				<div class="card__info">
				    <div class="card__info-wrap">
					<div class="card__title text-lead animate" data-animate-lines="" itemprop="name" style="opacity: 1;">
					    <div style="display: block; text-align: left; position: relative; transform: translate3d(0px, 0px, 0px); opacity: 1;">Заявка на ремонт</div>
					</div>
				    </div>
				</div>
			    </a>
			</div>
		    </div>
		    <div class="tech-cards-list__col">
			<div class="card" itemscope="" itemtype="http://schema.org/ImageObject">
			    <a href="https://rostselmash.com/spare-parts/checking-originality-parts/" class="card__inner">
				<div class="card__img">
				    <img class="image is-lazy isItemProp is-loaded" src="https://rostselmash.com/upload/medialibrary/a5a/890ffa6ee5194f88ba30ff3a883e3d86-opt.jpg" data-src="https://rostselmash.com/upload/medialibrary/a5a/890ffa6ee5194f88ba30ff3a883e3d86-opt.jpg" itemprop="contentUrl" data-srcset="https://rostselmash.com/upload/medialibrary/a5a/890ffa6ee5194f88ba30ff3a883e3d86-opt.jpg" alt="image" srcset="https://rostselmash.com/upload/medialibrary/a5a/890ffa6ee5194f88ba30ff3a883e3d86-opt.jpg" data-ll-status="loaded">
				</div>
				<div class="card__info">
				    <div class="card__info-wrap">
					<div class="card__title text-lead animate" data-animate-lines="" itemprop="name" style="opacity: 1;">
					    <div style="display: block; text-align: left; position: relative; transform: translate3d(0px, 0px, 0px); opacity: 1;">Проверка оригинальности деталей</div>
					</div>
				    </div>
				</div>
			    </a>
			</div>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</div>
