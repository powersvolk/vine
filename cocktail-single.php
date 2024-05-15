<?php include('components/Header.php'); ?>
<section class="breadcrumbs">
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

<section class="cocktail-block mt-40">
	<div class="container">
		<div class="cocktail-block__item">
			<div class="cocktail-blocki__text">
				<h1 class="cocktail-block__text_title">Коктейль «Виски хайбол»: виски в новом свете</h1>
				<div class="cocktail-block__text_view">
					<div class="text_view_time">19 февраля</div>
					<div class="text_view_number">64526</div>
				</div>
				<p class="cocktail-block__text_desc">
					Классический хайбол — это легкий освежающий микс из 19 века с виски и большим количеством содовой. С
					чувством легкой эйфории его можно долго потягивать один за одним в течение вечера и не пьянеть. Со
					временем появилось множество твистов на классику, где крепкий алкоголь стали разбавлять любой другой
					газированной жидкостью — например, тоником. Для приготовления хайболов вам не понадобятся никакие барные
					приспособления — только высокий стакан, который по совпадению тоже называется хайболом: коктейль
					смешивается прямо в нем.
				</p>
			</div>
			<div class="cocktail-block__image">
				<img src="img/cocktail/cocktail-single.jpeg" class="cocktail-block__image-img" alt="">

			</div>
		</div>
	</div>
</section>

<section class="recept">
	<div class="container">
		<h2 class="recept__title">Inspiring Highball</h2>
		<p class="recept__text">
			В барной среде давно известно о крепкой дружбе виски и имбирного эля. Но мы не призываем вас смешивать виски и
			пиво в классическом его понимании — такое сочетание не охладит, а скорее «приземлит» вас с первого глотка.
			Имбирным пивом сегодня называют лимонад, который сделает ваш хайбол по-летнему свежим.
		</p>
		<ol class="recept__items">
			<li class="recept__item">Наполнить доверху льдом бокал хайбол.</li>
			<li class="recept__item">Налить сверху 20 мл лимонного сока, 40 мл виски, и в последнюю очередь — долить 80-100
				мл имбирного пива Ginger Ale до краев бокала.</li>
			<li class="recept__item">Тщательно перемешать коктейль ложкой.</li>
			<li class="recept__item">Украсить цедрой лимона и подать коктейль с соломинкой.</li>
		</ol>


	</div>
</section>

<section class="category__section pt-60">
	<div class="container">
		<div class="category__section_inner">
			<div class="category__section_head">
				<h2 class="category__section_title">
					Ингридиенты для рецепта
				</h2>
				<a href="#" class="category__section_cart">Добавить все в корзину</a>
			</div>

			<?php for($n = 1; $n <= 6; $n++) { ?>
			<div class="section_category_brands show_brands show_brands_<?php echo $n; if($n==1) {echo ' active'; }?> ">
				<div class="cards_section four_item">
					<?php include('components/cards/cartTypeTwo.php'); ?>
					<?php include('components/cards/cartTypeTwo.php'); ?>
					<?php include('components/cards/cartTypeTwo.php'); ?>
					<?php include('components/cards/cartTypeTwo.php'); ?>
				</div>
			</div>
			<?php } ?>

		</div>
	</div>
	</div>
</section>
<img src="img/cocktail/baner_1.png" class="coctail-recept-baner" alt="">


<section class="recept">
	<div class="container">
		<h2 class="recept__title">Asian Peach Highball</h2>
		<p class="recept__text">
			В барной среде давно известно о крепкой дружбе виски и имбирного эля. Но мы не призываем вас смешивать виски и
			пиво в классическом его понимании — такое сочетание не охладит, а скорее «приземлит» вас с первого глотка.
			Имбирным пивом сегодня называют лимонад, который сделает ваш хайбол по-летнему свежим.
		</p>
	</div>
</section>

<section class="category__section pt-60">
	<div class="container">
		<div class="category__section_inner">
			<div class="category__section_head">
				<h2 class="category__section_title">
					Ингридиенты для рецепта
				</h2>
				<a href="#" class="category__section_cart">Добавить все в корзину</a>
			</div>

			<?php for($n = 1; $n <= 6; $n++) { ?>
			<div class="section_category_brands show_brands show_brands_<?php echo $n; if($n==1) {echo ' active'; }?> ">
				<div class="cards_section four_item">
					<?php include('components/cards/cartTypeTwo.php'); ?>
					<?php include('components/cards/cartTypeTwo.php'); ?>
					<?php include('components/cards/cartTypeTwo.php'); ?>
					<?php include('components/cards/cartTypeTwo.php'); ?>
				</div>
			</div>
			<?php } ?>

		</div>
	</div>
	</div>
</section>
<!--  -->
<section class="recept-list">
	<div class="container">
		<ol class="recept__items">
			<li class="recept__item">Наполнить доверху льдом бокал хайбол.</li>
			<li class="recept__item">Налить сверху 20 мл лимонного сока, 40 мл виски, и в последнюю очередь — долить 80-100
				мл имбирного пива Ginger Ale до краев бокала.</li>
			<li class="recept__item">Тщательно перемешать коктейль ложкой.</li>
			<li class="recept__item">Украсить цедрой лимона и подать коктейль с соломинкой.</li>
		</ol>
	</div>
</section>
<img src="img/cocktail/baner_2.png" class="coctail-recept-baner" alt="">


<section class="blog  pt-60">
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