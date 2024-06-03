<?php include('components/Header.php'); ?>

<?php include('components/account-header.php'); ?>

<section class="prof-nav mt-60">
	<div class="container">
		<div class="profile-nav">
			<a href="account-3.php" class="profile-nav__item ">
				<img src="img/account/nav_1.svg" alt="История заказов">
				<span>История заказов</span>
			</a>
			<a href="account-2.php" class="profile-nav__item ">
				<img src="img/account/nav_2.svg" alt="Избранное">
				<span>Избранное</span>
			</a>
			<a href="account-4.php" class="profile-nav__item">
				<img src="img/account/nav_3.svg" alt="Мои подписки">
				<span>Мои подписки</span>
			</a>
			<a href="account-5.php" class="profile-nav__item profile-nav__item--active">
				<img src="img/account/nav_4.svg" alt="Мои отзывы">
				<span>Мои отзывы</span>
			</a>
			<a href="account-6.php" class="profile-nav__item">
				<img src="img/account/nav_5.svg" alt="Предложения и жалобы">
				<span>Предложения и жалобы</span>
			</a>
		</div>

	</div>
</section>

<section class="history-date mt-40">
	<div class="container">

		<div class="date-picker">
			<label for="start-date">Выберите период</label>
			<div class="date-picker__fields">
				<span class="date-picker__label">с</span>
				<div class="date-picker__input-wrapper">
					<input type="text" id="start-date" placeholder="12 сентября 2002" class="date-picker__input">
					<img src="img/account/calendar.svg" alt="calendar" class="date-picker__icon">
				</div>
				<span class="date-picker__label date-picker__label--margin">до</span>
				<div class="date-picker__input-wrapper">
					<input type="text" id="end-date" placeholder="12 сентября 2002" class="date-picker__input">
					<img src="img/account/calendar.svg" alt="calendar" class="date-picker__icon">
				</div>
			</div>
		</div>

	</div>
</section>

<section class="account-reviews mt-60">
	<div class="container">
		<div class="review_section_block">
			<div class="review_section_block_list">
				<?php for($i=0; $i< 10; $i++) { ?>
				<div class="review_section_block_list_inner">
					<div class="review__list-item_avatar">
						<img src="img/avatar.png" alt="">
					</div>
					<div class="review__list-item_description">
						<div class="review__list-item_description_names">
							<div class="review__list-item_description_autor">
								Mikheili
							</div>
							<div class="review__list-item_description_date">
								22 сентябрь 2023, 10:45
							</div>
						</div>
						<div class="reviews_headline_item_stars">
							<svg class="icon full">
								<use xlink:href="#star"></use>
							</svg>
							<svg class="icon">
								<use xlink:href="#star"></use>
							</svg>
							<svg class="icon">
								<use xlink:href="#star"></use>
							</svg>
							<svg class="icon">
								<use xlink:href="#star"></use>
							</svg>
							<svg class="icon">
								<use xlink:href="#star"></use>
							</svg>
							<svg class="icon">
								<use xlink:href="#star"></use>
							</svg>
							<svg class="icon">
								<use xlink:href="#star"></use>
							</svg>
							<svg class="icon">
								<use xlink:href="#star"></use>
							</svg>
							<svg class="icon">
								<use xlink:href="#star"></use>
							</svg>
							<svg class="icon">
								<use xlink:href="#star"></use>
							</svg>
						</div>
						<div class="reviews_headline_item_message">
							Отличное дополнение к мясным блюдам!
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="pagination">
					<ul class="pagination__items">
						<li class="pagination__item"><a href="#" class="pagination__link active">1</a></li>
						<li class="pagination__item"><a href="#" class="pagination__link">2</a></li>
						<li class="pagination__item"><a href="#" class="pagination__link">3</a></li>
						<li class="pagination__item"><a href="#" class="pagination__link">4</a></li>
						<li class="pagination__item"><a href="#" class="pagination__link">></a></li>
					</ul>
				</div>
			</div>

		</div>
	</div>


</section>
<?php include('components/Footer.php'); ?>