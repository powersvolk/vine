<?php include('components/Header.php'); ?>

<?php include('components/account-header.php'); ?>

<section class="prof-nav mt-60">
	<div class="container">
		<div class="profile-nav">
			<a href="account-3.php" class="profile-nav__item profile-nav__item--active">
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
			<a href="account-5.php" class="profile-nav__item">
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

<section class="history mt-60">
	<div class="container">
		<h3 class="history__title">
			<span>05.12.2023, заказ № 2513</span>
			Сумма покупки: 1253 руб
		</h3>

		<section class="category__section category__section_cotail mt-40">
			<div class="container">
				<div class="category__section_inner">


					<?php for($p = 1; $p <= 3; $p++) { ?>
					<div
						class="section_category_brands show_brands show_brands_<?php echo $p; if($p==1) {echo ' active'; }?> ">
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
											48 239 ₽
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

<section class="history mt-60">
	<div class="container">
		<h3 class="history__title">
			<span>05.12.2023, заказ № 2513</span>
			Сумма покупки: 1253 руб
		</h3>

		<section id="account-best" class="category__section mt-40">
			<div class="container">
				<div class="cards_section four_item">
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
							<div class="card__item-new">
								НОВИНКА
							</div>
							<div class="card__item-best">
								ЛУЧШЕЕ
							</div>
						</div>
						<div class="card__item-old_price">
							48 239 ₽
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
						<div class="card__item-exist">
							В наличии 111 622 шт.
						</div>
						<div class="card__item-skill">
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									WW
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									VW
								</div>
								<div class="card__item-skill-item_number">
									31
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JD
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JS
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
						</div>
					</div>


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
							<div class="card__item-new">
								НОВИНКА
							</div>
							<div class="card__item-best">
								ЛУЧШЕЕ
							</div>
						</div>
						<div class="card__item-old_price">
							48 239 ₽
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
						<div class="card__item-exist">
							В наличии 111 622 шт.
						</div>
						<div class="card__item-skill">
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									WW
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									VW
								</div>
								<div class="card__item-skill-item_number">
									31
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JD
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JS
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
						</div>
					</div>

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
							<div class="card__item-new">
								НОВИНКА
							</div>
							<div class="card__item-best">
								ЛУЧШЕЕ
							</div>
						</div>
						<div class="card__item-old_price">
							48 239 ₽
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
						<div class="card__item-exist">
							В наличии 111 622 шт.
						</div>
						<div class="card__item-skill">
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									WW
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									VW
								</div>
								<div class="card__item-skill-item_number">
									31
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JD
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JS
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</section>

	</div>
</section>

<section class="history mt-60">
	<div class="container">
		<h3 class="history__title">
			<span>05.12.2023, заказ № 2513</span>
			Сумма покупки: 1253 руб
		</h3>

		<section id="history-best" class="category__section mt-40">
			<div class="container">
				<div class="cards_section four_item">
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
							<div class="card__item-new">
								НОВИНКА
							</div>
							<div class="card__item-best">
								ЛУЧШЕЕ
							</div>
						</div>
						<div class="card__item-old_price">
							48 239 ₽
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
						<div class="card__item-exist">
							В наличии 111 622 шт.
						</div>
						<div class="card__item-skill">
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									WW
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									VW
								</div>
								<div class="card__item-skill-item_number">
									31
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JD
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JS
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
						</div>
					</div>


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
							<div class="card__item-new">
								НОВИНКА
							</div>
							<div class="card__item-best">
								ЛУЧШЕЕ
							</div>
						</div>
						<div class="card__item-old_price">
							48 239 ₽
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
						<div class="card__item-exist">
							В наличии 111 622 шт.
						</div>
						<div class="card__item-skill">
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									WW
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									VW
								</div>
								<div class="card__item-skill-item_number">
									31
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JD
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JS
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
						</div>
					</div>

					<div class="card__item card__item--empty"></div>
					<div class="card__item card__item--empty"></div>



				</div>
			</div>
		</section>

	</div>
</section>

<section class="history mt-60">
	<div class="container">
		<h3 class="history__title">
			<span>05.12.2023, заказ № 2513</span>
			Сумма покупки: 1253 руб
		</h3>

		<section id="account-best" class="category__section mt-40">
			<div class="container">
				<div class="cards_section four_item">
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
							<div class="card__item-new">
								НОВИНКА
							</div>
							<div class="card__item-best">
								ЛУЧШЕЕ
							</div>
						</div>
						<div class="card__item-old_price">
							48 239 ₽
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
						<div class="card__item-exist">
							В наличии 111 622 шт.
						</div>
						<div class="card__item-skill">
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									WW
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									VW
								</div>
								<div class="card__item-skill-item_number">
									31
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JD
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JS
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
						</div>
					</div>


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
							<div class="card__item-new">
								НОВИНКА
							</div>
							<div class="card__item-best">
								ЛУЧШЕЕ
							</div>
						</div>
						<div class="card__item-old_price">
							48 239 ₽
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
						<div class="card__item-exist">
							В наличии 111 622 шт.
						</div>
						<div class="card__item-skill">
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									WW
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									VW
								</div>
								<div class="card__item-skill-item_number">
									31
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JD
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JS
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
						</div>
					</div>

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
							<div class="card__item-new">
								НОВИНКА
							</div>
							<div class="card__item-best">
								ЛУЧШЕЕ
							</div>
						</div>
						<div class="card__item-old_price">
							48 239 ₽
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
						<div class="card__item-exist">
							В наличии 111 622 шт.
						</div>
						<div class="card__item-skill">
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									WW
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									VW
								</div>
								<div class="card__item-skill-item_number">
									31
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JD
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
							<div class="card__item-skill-item">
								<div class="card__item-skill-item_option">
									JS
								</div>
								<div class="card__item-skill-item_number">
									90
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</section>

	</div>
</section>

<?php include('components/Footer.php'); ?>