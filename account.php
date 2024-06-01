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
						О компании
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="account  mt-60">
	<div class="container">
		<div class="settings">
			<div class="settings__left">
				<h2 class="category__section_title">Мои настройки</h2>
				<form class="settings__form">
					<label class="settings__label" for="last-name">Фамилия</label>
					<input class="settings__input" type="text" id="last-name" name="last-name" placeholder="Змей Горыныч">

					<label class="settings__label" for="first-name">Имя</label>
					<input class="settings__input" type="text" id="first-name" name="first-name"
						placeholder="Иван Иванович ">

					<label class="settings__label" for="address">Адрес</label>
					<input class="settings__input" type="text" id="address" name="address" placeholder="Москва">

					<label class="settings__label" for="phone">Номер телефона</label>
					<input class="settings__input" type="tel" id="phone" name="phone" placeholder="+7 (945) 388-89-12">

					<label class="settings__label" for="email">e-mail</label>
					<input class="settings__input" type="email" id="email" name="email" placeholder="info@gorynych">

					<div class="settings__checkbox-container">
						<input class="settings__checkbox" type="checkbox" id="subscribe" name="subscribe">
						<label class="settings__checkbox-label" for="subscribe">Получать рассылку о <br>поступлениях и
							новинках</label>
					</div>
				</form>
			</div>
			<div class="settings__right">
				<div class="settings__photo">
					<div class="circle" id="circle"></div>
					<form>
						<label class="custom-file-upload">
							<input type="file" id="upload" accept="image/*">
							Загрузить фото
						</label>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bank-card  mt-60">
	<div class="container">
		<h2 class="category__section_title">Мои карты</h2>
		<div class="bankcard">
			<div class="bankcard__items">
				<div class="bankcard__item">
					4960 **** **** ****
				</div>
			</div>
			<div class="bankcard__items">
				<div class="bankcard__item">
					<img src="img/account/bank-card-mir.png" alt="">
					4960 **** **** ****
				</div>
			</div>
			<div class="bankcard__items">
				<div class="bankcard__item">
					<img src="img/account/bank-card-master.png" alt="">
					4960 **** **** ****
				</div>
			</div>
			<div class="bankcard__items">
				<div class="bankcard__item">
					<div class="bankcard-plus">
						<div class="bankcard__circle"></div>
						<div class="bankcard__text">Привязать <br>другую карту</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="account  mt-60">
	<div class="container">
		<div class="settings">
			<div class="settings__left">
				<h2 class="category__section_title">Изменить пароль</h2>
				<form class="settings__form">
					<label class="settings__label" for="old-password">Старый пароль</label>
					<input class="settings__input" type="password" id="old-password" name="old-password"
						placeholder="*****************">

					<label class="settings__label" for="first-name">Новый пароль</label>
					<input class="settings__input" type="password" id="new-password" name="new-password"
						placeholder="*****************">

					<label class="settings__label" for="repeat-password">Повторить пароль</label>
					<input class="settings__input" type="password" id="repeat-password" name="repeat-password"
						placeholder="*****************">



					<div class="container-button">
						<button class="settings__button">Сохранить изменения</button>
					</div>
				</form>
			</div>

		</div>
	</div>
	</div>
</section>

<?php include('components/Footer.php'); ?>