<?php include('components/Header.php'); ?>
<section class="breadcrumbs banner__promotion">
	<div class="container">
		<div class="breadcrumbs">
			<ul>
				<li>
					<a href="#">
						Главная
					</a>
				</li>
				<li>
					>
				</li>
				<li>
					<a href="#">
						Вино
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="news-single-block mt-60">
	<div class="container">
		<div class="news-single-block__item">
			<div class="news-single-block__text">
				<h1 class="news-single-block__text_title">Что подать к новогодним салатам</h1>
				<div class="news-single-block__text_view">
					<div class="text_view_time">19 февраля</div>
					<div class="text_view_number">64526</div>
				</div>
				<p class="news-single-block__text_desc">
					Классический хайбол — это легкий освежающий микс из 19 века с виски и большим количеством содовой. С
					чувством легкой эйфории его можно долго потягивать один за одним в течение вечера и не пьянеть. Со
					временем появилось множество твистов на классику, где крепкий алкоголь стали разбавлять любой другой
					газированной жидкостью — например, тоником. Для приготовления хайболов вам не понадобятся никакие барные
					приспособления — только высокий стакан, который по совпадению тоже называется хайболом: коктейль
					смешивается прямо в нем.
				</p>
			</div>
			<div class="news-single-block__image">
				<img src="img/news/news-single-1.jpeg" class="news-single-block__image-img" alt="">

			</div>
			<div>
				<span>1 рисунок “Шампанское для Нвого года” </span>
				<p>Докторская или курица, крабовый без риса или селедка без лука — эти споры на кухне под Новый год не утихают так же, как «ты не туда вешаешь» у елки. Но каким бы ни был ваш семейный рецепт, вино к нему найдется! Подобрали варианты к самым популярным новогодним салатам.</p>
			</div>
		</div>
	</div>
</section>

<section class="news-single-block mt-60">
	<div class="container">
		<div class="news-single-block__item">
			<div class="news-single-block__text">
				<h2 class="news-single-block__text_title">Оливье</h1>
				
			</div>
			<div class="news-single-block__image">
				<img src="img/news/news-single-2.jpeg" class="news-single-block__image-img" alt="">

			</div>
			<div>
				<span>1 рисунок “Шампанское для Нвого года” </span>
				<p>Главный герой новогоднего застолья — самый русский французский салат. Во второй половине XIX века в его состав входили пернатая дичь, раковые шейки, язык и даже икра. Сейчас в салат добавляют один «белок» на выбор. К оливье с вареной колбасой или курицей подавайте брюты от кремана до кавы, с языком — блауфранкиш или цвайгельт, а к люксовой версии с раковыми шейками — шампанское. Легкое сладкое игристое (асти — идеально) можно взять на 1 января — к прошлогоднему блюду самое то.</p>
			</div>
		</div>
	</div>
</section>

<section class="category__section pt-60">
	<div class="container">
		<div class="category__section_inner">
			<div class="category__section_head">
				<h3 class="category__section_title">
				Колекция для рецепта
				</h3>
				
			</div>

			<?php for($p = 1; $p <= 3; $p++) { ?>
                        <div class="section_category_brands show_brands show_brands_<?php echo $p; if($p==1) {echo ' active'; }?> ">
                            <div class="owl-product owl-carousel owl-theme">
                                <?php for($q = 1; $q <= 10; $q++) { ?>   
                                    <div class="item">
                                        <div class="full_item">
                                            <div class="card__item">
                                                <div class="card__item-thumbnuil">
                                                    <a href="#">
                                                        <img src="img/product/product_<?php echo rand(1, 3);?>.png" alt="">
                                                    </a>
                                                    <div class="card__item-raiting">
                                                        <svg class="icon">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        5.0
                                                    </div>
                                                    <div class="card__item-message">
                                                        <svg class="icon">
                                                            <use xlink:href="#message"></use>
                                                        </svg>
                                                        12
                                                    </div>
                                                    <div class="card__item-compare">
                                                        <a href="#">
                                                            <svg class="icon">
                                                                <use xlink:href="#heart"></use>
                                                            </svg>
                                                        </a>    
                                                    </div>
                                                    <div class="card__item-discount">
                                                        -20%
                                                    </div>
                                                </div> 
                                                <div class="card__item-old_price">
                                                    48 239  ₽
                                                </div> 
                                                <div class="card__item-data">
                                                    <div class="card__item-data-price">
                                                        513 859 ₽
                                                    </div> 
                                                    <div class="card__item-data-cta">
                                                        <a href="#" class="card_cta">
                                                            В корзину
                                                        </a>
                                                    </div> 
                                                </div> 
                                                <div class="card__item-sku">
                                                    02-33985-2021
                                                </div>
                                                <div class="card__item-title">
                                                    <a href="#">
                                                        Виски Johnnie Walker Blue Label Ghost and Rare Pittyvaich 0,7 л
                                                    </a>
                                                </div>
                                                <div class="card__item-category">
                                                    <a href="#">Виски</a>,
                                                    <a href="#">Ирландия</a>, 
                                                    <a href="#">0,7 л</a>
                                                </div> 
                                            </div>
                                        </div>  
                                    </div>
                                <?php } ?> 
                                
                            </div>
                        </div> 
                    <?php } ?>  

		</div>
	</div>
	</div>
</section>

<section class="news-single-block mt-60">
	<div class="container">
		<div class="news-single-block__item">
			<div class="news-single-block__text">
				<h2  class="news-single-block__text_title">Селедка под шубой</h2>
				
			</div>
			<div class="news-single-block__image">
				<img src="img/news/news-single-3.jpeg" class="news-single-block__image-img" alt="">

			</div>
			<div>
				<span>1 рисунок “Шампанское для Нвого года” </span>
				<p>Рыба, яйца, лук и другие овощи, вместе заправленные майонезом — это мы едим! Говорят, селедка под шубой пришла к нам от скандинавов или немцев, поэтому не возбраняется совместить салат с рислингом. Также расправиться с комбо жирной рыбы и соуса поможет шабли, а свекольные тона поддержит гаме из Бургундии или долины Луары. На второй день празднования селедку лучше запивать игристым розе — его ягодно-цитрусовые ароматы освежат рецепторы.</p>
			</div>
		</div>
	</div>
</section>

<section class="product_items pt-60">
        <div class="container"> 
		  <div class="category__section_head">
				<h3 class="category__section_title">
				Колекция для рецепта
				</h3>
				
			</div>
            <div class="product_items_inner three_item">
                <?php include('components/cards/cartTypeThree.php'); ?>
            </div>
        </div>        
    </section>

	 <section class="blog-coctail  pt-60">
	<div class="container">
		<div class="">

			<div class="blog__head">
				<h2 class="blog__head-title section_headline">Похожие статьи</h2>

			</div>

			<div class="blog__items">

				<article class="blog__item">
					<a href="#" class="blog-img-link"><img src="img/blog/blog_1.png" class="blog-img" alt=""></a>
					<time class="blog-date">22 марта 2023</time>
					<h3 class="blog-title ">
						<a href="#" class="blog-title-link section_headline">Коньяк Старый Кенигсберг – российский коньяк с
							французской душой.</a>
					</h3>
					<p class="blog-desc">
						Предлагаем вам решить для себя, попробовав как традиционные, десятилетиями проверенные рецепты, так и
						новейшие решения, гармонично сочетающие игривость и крепость.
					</p>
					<a href="#" class="blog-link">
						Узнать больше
					</a>
				</article>

				<article class="blog__item">
					<a href="#" class="blog-img-link"><img src="img/blog/blog_2.png" class="blog-img" alt=""></a>
					<time datetime="2023-03-22" class="blog-date">22 марта 2023</time>
					<h3 class="blog-title ">
						<a href="#" class="blog-title-link section_headline">Винодельня «Мысхако»: история и вина, которые
							стоит попробовать</a>
					</h3>
					<p class="blog-desc">
						Предлагаем вам решить для себя, попробовав как традиционные, десятилетиями проверенные рецепты, так и
						новейшие решения, гармонично сочетающие игривость и крепость.
					</p>
					<a href="#" class="blog-link">
						Узнать больше
					</a>
				</article>

				<article class="blog__item">
					<a href="#" class="blog-img-link"><img src="img/blog/blog_3.png" class="blog-img" alt=""></a>
					<time datetime="2023-03-22" class="blog-date">22 марта 2023</time>
					<h3 class="blog-title ">
						<a href="#" class="blog-title-link section_headline">Вина Абхазии</a>
					</h3>
					<p class="blog-desc">
						Предлагаем вам решить для себя, попробовав как традиционные, десятилетиями проверенные рецепты, так и
						новейшие решения, гармонично сочетающие игривость и крепость.
					</p>
					<a href="#" class="blog-link">
						Узнать больше
					</a>
				</article>

			</div>


		</div>
	</div>
</section>

<?php include('components/Footer.php'); ?>