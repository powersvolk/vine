<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vincent Vine</title>
    <link href="https://fonts.googleapis.com/css?family=Exo+2:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic&display=swap" rel="stylesheet" />
	 <link href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="overlay"></div>

<div class="popup enter_window">
    <a href="#" class="exit_window close_popup">
        <svg class="icon">
            <use xlink:href="#close"></use>
        </svg>
    </a>
    <div class="enter_window-title">
        18+
    </div>
    <div class="enter_window-description">
        <p>
            Сайт содержит информацию для лиц<br/> 
            совершеннолетнего возраста. Сведения,<br/> 
            размещённые на сайте, не являются рекламой, носят<br/> 
            исключительно информационный характер, и<br/> 
            предназначены только для личного пользования.
        </p>
        <p>
            Мне уже есть 18 лет
        </p>    
    </div>
    <a href="#" class="exit_window cta_popup">
        Мне уже есть 18 лет
    </a>
</div>    


<div class="popup login_window" >
    <a href="#" class="exit_window close_popup">
        <svg class="icon">
            <use xlink:href="#close"></use>
        </svg>
    </a>
    <div class="login_form">
        <h2>
            Вход
        </h2>
        <form action="#">
            <label>Номер телефона</label>
            <input type="text" placeholder="+7 909 22-55-456">

            <label>Пароль</label>
            <div class="form_password">
                <input type="password" class="password" placeholder="********">
                <div class="form_password_show">
                    <svg class="icon">
                        <use xlink:href="#eye"></use>
                    </svg>
                </div>
            </div>

            <div class="form_submit">
                <div class="form_submit-item">
                    <a href="#">
                        Забыли пароль?
                    </a>
                </div>
                <div class="form_submit-item">
                <input type="submit" value="Войти">
                </div>
            </div>

            <div class="line_form"></div>

            <h3>
                При регистрации для вас
            </h3>
            <ul>
                <li>Еще больше скидок</li>
                <li>История и статус заказов</li>
                <li>Еще больше скидок</li>
                <li>История и статус заказов</li>
            </ul>

            <div class="open_registration"> 
                <a href="#" class="popup_open" data-item="registration">
                    Зарегистрироваться
                </a>   
            </div>
        </form>
    </div>
</div>


<div class="popup registration_window">
    <a href="#" class="exit_window close_popup">
        <svg class="icon">
            <use xlink:href="#close"></use>
        </svg>
    </a>
    <div class="registration_form">
        <h2>
            Регистрация
        </h2>
        <form action="#">
            <label>ФИО<span>*</span></label>
            <input type="text" placeholder="Иванов Иван Иванович">

            <label>Номер телефона<span>*</span></label>
            <input type="text" placeholder="+7 909 22-55-456">

            <label>E-mail</label>
            <input type="email" placeholder="infj@mail.ru">

            <div class="line_form"></div>

           
            <label>Пароль<span>*</span></label>
            <div class="form_password">
                <input type="password" class="password" placeholder="********">
                <div class="form_password_show">
                    <svg class="icon">
                        <use xlink:href="#eye"></use>
                    </svg>
                </div>
            </div>

            
            <label>Подтвердить пароль<span>*</span></label>
            <div class="form_password">
                <input type="password" class="password" placeholder="********">
                <div class="form_password_show">
                    <svg class="icon">
                        <use xlink:href="#eye"></use>
                    </svg>
                </div>
            </div>

            <div class="line_form"></div>

            <div class="form_rule">
            <input type="checkbox" class="cheackbox" id="checkboxPolice">
                <label for="checkboxPolice" class="checkbox-label"></label>
                <a href="#">
                    Согласен с правилами сайта
                </a>
            </div>
            <div class="form_rule">
                <input type="checkbox" class="cheackbox" id="checkboxSubscription">
                <label for="checkboxSubscription" class="checkbox-label"></label>
                Согласен на получение информации по скидкам<br/> 
                и акциям
            </div> 
            <div class="form_submit"> 
                <input type="submit" value="Зарегистрироваться">
            </div>
        </form>
    </div>
</div>


<div class="category_window">
    <div class="container">
        <div class="category_window_inner">
            <div class="category_window_inner-navigation">
                 <ul>
                    <li>
                        <a href="#" class="active" data-cat="1">
                            <svg class="icon">
                                <use xlink:href="#cat-1"></use>
                            </svg>
                            Акции
                        </a>
                    </li>
                    <li>
                        <a href="#" data-cat="2">
                            <svg class="icon">
                                <use xlink:href="#cat-2"></use>
                            </svg>
                            Вино
                        </a>
                    </li>
                    <li>
                        <a href="#" data-cat="3">
                            <svg class="icon">
                                <use xlink:href="#cat-3"></use>
                            </svg>
                            Шампанское 
                        </a>
                    </li>
                    <li>
                        <a href="#" data-cat="4">
                            <svg class="icon">
                                <use xlink:href="#cat-4"></use>
                            </svg>
                            Виски
                        </a>
                    </li>
                    <li>
                        <a href="#" data-cat="5">
                            <svg class="icon">
                                <use xlink:href="#cat-5"></use>
                            </svg>
                            Коньяк
                        </a>
                    </li>
                    <li>
                        <a href="#" data-cat="6">
                            <svg class="icon">
                                <use xlink:href="#cat-6"></use>
                            </svg>
                            Водка
                        </a>
                    </li>
                    <li>
                        <a href="#" data-cat="7">
                            <svg class="icon">
                                <use xlink:href="#cat-7"></use>
                            </svg>
                            Ликер
                        </a>
                    </li>
                    <li>
                        <a href="#" data-cat="8">
                            <svg class="icon">
                                <use xlink:href="#cat-8"></use>
                            </svg>
                            Крепкие напитки
                        </a>
                    </li>
                    <li>
                        <a href="#" data-cat="9">
                            <svg class="icon">
                                <use xlink:href="#cat-9"></use>
                            </svg>
                            Пиво и сидр
                        </a>
                    </li>
                    <li>
                        <a href="#" data-cat="10">
                            <svg class="icon">
                                <use xlink:href="#cat-10"></use>
                            </svg>
                            Подарки
                        </a>
                    </li>
                    <li>
                        <a href="#" data-cat="11">
                            <svg class="icon">
                                <use xlink:href="#cat-11"></use>
                            </svg>
                            Бокалы
                        </a>
                    </li>
                 </ul>   
            </div>
            <div class="category_window_inner-menu">
                <?php for($m = 1; $m <= 5; $m++) { ?>
                    <div class="category_window_inner-menu_section show_menu_section_<?php echo $m;  if($m == 1) { echo ' active'; }?>">
                        <div class="category_window_inner-menu_section_in">
                            <div class="category_window_inner-menu-container">
                                <div class="category_window_inner-menu-container-item">
                                    <h3>
                                        Происхождение
                                    </h3>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="img/country/georgia.png" alt="">
                                                <span>Франция</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="img/country/spain.png" alt="">
                                                <span>Греция</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="img/country/brazil.png" alt="">
                                                <span>Италия</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="img/country/spain.png" alt="">
                                                <span>Испания</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="img/country/georgia.png" alt="">
                                                <span>Бразилия</span>
                                            </a>
                                        </li>
                                        <li class="hide_menu_item">
                                            <a href="#">
                                                <img src="img/country/brazil.png" alt="">
                                                <span>Италия</span>
                                            </a>
                                        </li>
                                        <li class="hide_menu_item">
                                            <a href="#">
                                                <img src="img/country/spain.png" alt="">
                                                <span>Испания</span>
                                            </a>
                                        </li>
                                        <li class="hide_menu_item">
                                            <a href="#">
                                                <img src="img/country/georgia.png" alt="">
                                                <span>Бразилия</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="category_show_more">
                                                <span>Еще</span>
                                                <svg class="icon">
                                                    <use xlink:href="#arrow-down"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="category_window_inner-menu-container-item">
                                    <h3>
                                        Типы 
                                    </h3>
                                    <ul>
                                        <li><a href="#"><span>Кьянти</span></a></li>
                                        <li><a href="#"><span>Бордо</span></a></li>
                                        <li><a href="#"><span>Силия</span></a></li>
                                        <li><a href="#"><span>Амароне</span></a></li>
                                        <li><a href="#"><span>Тоскана</span></a></li>
                                        <li><a href="#"><span>Риоха</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Амароне</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Тоскана</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Риоха</span></a></li>
                                        <li>
                                            <a href="#" class="category_show_more">
                                                <span>Еще</span>
                                                <svg class="icon">
                                                    <use xlink:href="#arrow-down"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="category_window_inner-menu-container-item">
                                    <h3>
                                        Цвет
                                    </h3>
                                    <ul>
                                        <li><a href="#"><span>Красное</span></a></li>
                                        <li><a href="#"><span>Белое</span></a></li>
                                        <li><a href="#"><span>Розовое</span></a></li>
                                    </ul>
                                </div>
                                <div class="category_window_inner-menu-container-item">
                                    <h3>
                                        Бренд
                                    </h3>
                                    <ul>
                                        <li><a href="#"><span>Красное</span></a></li>
                                        <li><a href="#"><span>Белое</span></a></li>
                                        <li><a href="#"><span>Розовое</span></a></li>
                                    </ul>
                                </div>
                                <div class="category_window_inner-menu-container-item">
                                    <h3>
                                        Сорт винограда
                                    </h3>
                                    <ul>
                                        <li><a href="#"><span>Гевюрцтраминер</span></a></li>
                                        <li><a href="#"><span>Каберне Совиньон</span></a></li>
                                        <li><a href="#"><span>Мерло</span></a></li>
                                        <li><a href="#"><span>Мускат</span></a></li>
                                        <li><a href="#"><span>Неббиоло</span></a></li>
                                        <li><a href="#"><span>Рислинг</span></a></li>
                                        <li><a href="#"><span>Совиньон Блан</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Неббиоло</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Рислинг</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Совиньон Блан</span></a></li>
                                        <li>
                                            <a href="#" class="category_show_more">
                                                <span>Еще</span>
                                                <svg class="icon">
                                                    <use xlink:href="#arrow-down"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="category_window_inner-menu-container-item">
                                    <h3>
                                        Размер бутылки
                                    </h3>
                                    <ul>
                                        <li><a href="#"><span>0,25 литра</span></a></li>
                                        <li><a href="#"><span>0,5 литра</span></a></li>
                                        <li><a href="#"><span>0,75 литра</span></a></li>
                                        <li><a href="#"><span>1 литр</span></a></li>
                                        <li><a href="#"><span>1,5 литр</span></a></li>
                                    </ul>
                                </div>
                                <div class="category_window_inner-menu-container-item">
                                    <h3>
                                        Специальные вина
                                    </h3>
                                    <ul>
                                        <li><a href="#"><span>В подарочной упаковке</span></a></li>
                                        <li><a href="#"><span>Биодинамическое вино</span></a></li>
                                        <li><a href="#"><span>Выдержанные в амфоре</span></a></li>
                                        <li><a href="#"><span>Органические</span></a></li>
                                        <li><a href="#"><span>Биологические вина</span></a></li>
                                        <li><a href="#"><span>Безалкогольные вина</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Органические</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Биологические вина</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Безалкогольные вина</span></a></li>
                                        <li>
                                            <a href="#" class="category_show_more">
                                                <span>Еще</span>
                                                <svg class="icon">
                                                    <use xlink:href="#arrow-down"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="category_window_inner-menu-product">
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
                                </div>     
                            </div> 
                        </div> 
                        <div class="menu-product_progress">
                            <div class="menu-product_progress_item active">
                                до 500 руб
                            </div>
                            <div class="menu-product_progress_item">
                                500 - 1500 руб 
                            </div>
                            <div class="menu-product_progress_item">
                                1500 - 3000 руб 
                            </div>
                            <div class="menu-product_progress_item">
                                от 3000 руб
                            </div>
                        </div>   
                    </div>
                    
                <?php } ?>

                <!-- Type 2 -->

                <?php for($m = 6; $m <= 11; $m++) { ?>
                    <div class="category_window_inner-menu_section show_menu_section_<?php echo $m;  if($m == 1) { echo ' active'; }?>">
                        <div class="category_window_inner-menu_section_in">
                            <div class="category_window_inner-menu-container">
                                <div class="category_window_inner-menu-container-item category_window_inner-menu-container-item-full">
                                    <h3>
                                        Выбрать напитки по типу
                                    </h3>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span>Абсент</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Аперитив</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Арманьяк</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Бренди </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Коньяк</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Виски</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span>Водка</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Граппа</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Чача</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Джин</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Кальвадос</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Кашаса</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span>Ликер</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Мескаль</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Писко</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Ракия</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Ром</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Самогон</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span>Текила</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Узо</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Шнапс</span>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                                
                                <div class="category_window_inner-menu-container-item">
                                    <h3>
                                        Сорт винограда
                                    </h3>
                                    <ul>
                                        <li><a href="#"><span>Гевюрцтраминер</span></a></li>
                                        <li><a href="#"><span>Каберне Совиньон</span></a></li>
                                        <li><a href="#"><span>Мерло</span></a></li>
                                        <li><a href="#"><span>Мускат</span></a></li>
                                        <li><a href="#"><span>Неббиоло</span></a></li>
                                        <li><a href="#"><span>Рислинг</span></a></li>
                                        <li><a href="#"><span>Совиньон Блан</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Неббиоло</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Рислинг</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Совиньон Блан</span></a></li>
                                        <li>
                                            <a href="#" class="category_show_more">
                                                <span>Еще</span>
                                                <svg class="icon">
                                                    <use xlink:href="#arrow-down"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="category_window_inner-menu-container-item">
                                    <h3>
                                        Размер бутылки
                                    </h3>
                                    <ul>
                                        <li><a href="#"><span>0,25 литра</span></a></li>
                                        <li><a href="#"><span>0,5 литра</span></a></li>
                                        <li><a href="#"><span>0,75 литра</span></a></li>
                                        <li><a href="#"><span>1 литр</span></a></li>
                                        <li><a href="#"><span>1,5 литр</span></a></li>
                                    </ul>
                                </div>
                                <div class="category_window_inner-menu-container-item">
                                    <h3>
                                        Специальные вина
                                    </h3>
                                    <ul>
                                        <li><a href="#"><span>В подарочной упаковке</span></a></li>
                                        <li><a href="#"><span>Биодинамическое вино</span></a></li>
                                        <li><a href="#"><span>Выдержанные в амфоре</span></a></li>
                                        <li><a href="#"><span>Органические</span></a></li>
                                        <li><a href="#"><span>Биологические вина</span></a></li>
                                        <li><a href="#"><span>Безалкогольные вина</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Органические</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Биологические вина</span></a></li>
                                        <li class="hide_menu_item"><a href="#"><span>Безалкогольные вина</span></a></li>
                                        <li>
                                            <a href="#" class="category_show_more">
                                                <span>Еще</span>
                                                <svg class="icon">
                                                    <use xlink:href="#arrow-down"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="category_window_inner-menu-product">
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
                                </div>     
                            </div> 
                        </div> 
                        <div class="menu-product_progress">
                            <div class="menu-product_progress_item active">
                                до 500 руб
                            </div>
                            <div class="menu-product_progress_item">
                                500 - 1500 руб 
                            </div>
                            <div class="menu-product_progress_item">
                                1500 - 3000 руб 
                            </div>
                            <div class="menu-product_progress_item">
                                от 3000 руб
                            </div>
                        </div>   
                    </div>
                    
                <?php } ?>


            </div>
        </div>
    </div>
</div>


<div class="spacer"></div>

<section class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__inner-logo">
                <a href="#">
                    <img src="img/logo.svg" alt="Vince Vine">
                </a>
            </div>
            <div class="header__inner-catalog">
                <a href="#" class="cta cta-catalog">
                    <svg class="icon">
                        <use xlink:href="#catalogIcon"></use>
                    </svg>
                   <span>Каталог</span> 
                </a>
            </div>
            <div class="header__inner-search">
                <form class="header__inner-form">
                    <input class="search" type="text" placeholder="Название товара, бренда, артикул ...">
                    <input class="search_cta" type="submit" value="">
                </form>
                <div class="header__find">
                    <h2>
                        Напитки
                    </h2>
                    <?php for($i = 0; $i < 3; $i++) { ?>
                    <a href="#" class="header__find-product">
                        <div class="header__find-product-thumbnuil">
                            <img src="img/search_product.png" alt="">
                        </div>
                        <div class="header__find-product-description">
                            <div class="card__item-title">
                                Виски Johnnie Walker Blue Label Ghost and Rare Pittyvaich 0,7 л
                            </div>
                            <div class="card__item-exist">
                                В наличии 111 622 шт.
                            </div> 
                            <div class="card__item-data-price">
                                513 859 ₽
                            </div> 
                        </div>
                    </a> 
                    <?php } ?>
                    <h2 class="find_brands_headline">
                        Производители
                    </h2>
                    <div class="find_brands">
                        <a href="#">
                            Винодельческий дом ЛЕНЦ МОЗЕР АГ 
                            <span>25</span>
                        </a>
                        <a href="#">
                            Дестиллери Ханевальд-Швердт
                            <span>15</span> 
                        </a>
                        <a href="#">
                            Винос де Альбореа С.Л.
                            <span>415</span>
                        </a>
                        <a href="#">
                            Грандес Винос и Винедос С.А.
                            <span>2015</span>
                        </a>
                        <a href="#">
                            Hot Irishman/Walsh Whiskey
                            <span>12</span>
                        </a>
                        <a href="#">
                            Starward Whiskey
                            <span>10</span>
                        </a>
                    </div>
                    <h2 class="find_brands_headline">
                        Подборки
                    </h2>
                    <div class="find_collection">
                        <a href="#">
                            Дорогой Виски
                            <span>25</span>
                        </a>
                        <a href="#">
                            Виски из-под хереса
                            <span>133</span>
                        </a>
                        <a href="#">
                            Виски 45 лет выдержки
                            <span>3</span>
                        </a>
                        <a href="#">
                            Выдержка 15 лет
                            <span>2</span>
                        </a>
                        <a href="#">
                            Виски Buchanan's дубовые бочки от 1000 до 2000
                            <span>43</span>
                        </a>
                        <a href="#">
                            Виски Buchanan's
                            <span>123</span>
                        </a>
                        <a href="#">
                            Виски Buchanan's дубовые бочки от 1000 до 2000
                            <span>1</span>
                        </a>
                        <a href="#">
                            Виски Buchanan's дубовые бочки от 1000 до 2000
                            <span>1</span>
                        </a>
                    </div>    

                </div>
            </div>
            <div class="header__inner-work">
                <div class="header__inner-phone">
                    +7 (499) 113-22-24
                </div>
                <div class="header__inner-time">
                    Пн-Вс 10:00 до 21:00
                    <a href="#">
                        <svg class="icon">
                            <use xlink:href="#viber"></use>
                        </svg>
                    </a>
                    <a href="#">
                        <svg class="icon">
                            <use xlink:href="#telegram"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="header__inner-other">
                <div class="header__inner-other-burger">
                    <a href="#" class="cta_menu">
                        <svg class="icon">
                            <use xlink:href="#burger"></use>
                        </svg>
                    </a>
                    <div class="pages_menu">
                        <ul>
                            <li>
                                <a href="#">
                                    Корпоративным клиентам
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Покупка и оплата
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Срочная покупка
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Гарантии
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Контакты
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    О Компании
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Вакансии
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Статьи
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Коктейли
                                </a>
                            </li>
                        </ul>
                    </div>    
                </div>
                <div class="header__inner-other-profile">
                    <a href="#" class="cta_menu">
                        <svg class="icon">
                            <use xlink:href="#user"></use>
                        </svg>
                    </a>
                    <div class="pages_menu">
                        <ul>
                            <li>
                                <a href="#" class="popup_open" data-item="login">
                                    Вход
                                </a>
                            </li>
                            <li>
                                <a href="#" class="popup_open" data-item="registration">
                                    Регистрация
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header__inner-other-compare">
                    <a href="#">
                        <svg class="icon">
                            <use xlink:href="#heart"></use>
                        </svg>
                        <div class="header__inner-number">
                            12
                        </div>    
                    </a>
                </div>
                <div class="header__inner-other-cart">
                    <a href="#" class="cta_menu">
                        <svg class="icon">
                            <use xlink:href="#cart"></use>
                        </svg>
                        <div class="header__inner-number">
                            12
                        </div> 
                    </a>
                    <div class="pages_menu cart_mini">
                       <div class="cart_mini_inner">
                            <div class="cart_mini_headline">
                                <h2>
                                    Корзина <span>(32 товара)</span>
                                </h2>
                                <a href="#">
                                    Очистить
                                </a>
                            </div>
                            <div class="cart_mini_products">
                               
                                <div class="cart_mini_products_item">
                                    <a href="#" class="remove_product">
                                        <svg class="icon">
                                            <use xlink:href="#close"></use>
                                        </svg>
                                    </a>
                                    <div class="cart_mini_products_item_thumbnuil">
                                        <a href="#">
                                            <img src="img/search_product.png" alt="">
                                        </a>
                                    </div>
                                    <div class="cart_mini_products_item_data">
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
                                        <div class="cart_mini_count_price">
                                            <div class="cart_mini_count">
                                                <div class="cart_mini_minus">
                                                    <svg class="icon">
                                                        <use xlink:href="#minus"></use>
                                                    </svg>
                                                </div>
                                                <input class="mini_count" type="text" value="1">
                                                <div class="cart_mini_plus">
                                                    <svg class="icon">
                                                        <use xlink:href="#plus"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="cart_mini_price">
                                                <div class="card__item-old_price">
                                                    48 239  ₽
                                                </div>
                                                <div class="card__item-data-price">
                                                    513 859 ₽
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                </div> 
                                <div class="cart_mini_products_item">
                                    <a href="#" class="remove_product">
                                        <svg class="icon">
                                            <use xlink:href="#close"></use>
                                        </svg>
                                    </a>
                                    <div class="cart_mini_products_item_thumbnuil">
                                        <a href="#">
                                            <img src="img/search_product.png" alt="">
                                        </a>
                                    </div>
                                    <div class="cart_mini_products_item_data">
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
                                        <div class="cart_mini_count_price">
                                            <div class="cart_mini_count">
                                                <div class="cart_mini_minus">
                                                    <svg class="icon">
                                                        <use xlink:href="#minus"></use>
                                                    </svg>
                                                </div>
                                                <input class="mini_count" type="text" value="1">
                                                <div class="cart_mini_plus">
                                                    <svg class="icon">
                                                        <use xlink:href="#plus"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="cart_mini_price">
                                                <div class="card__item-old_price">
                                                    48 239  ₽
                                                </div>
                                                <div class="card__item-data-price">
                                                    513 859 ₽
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                </div> 
                                <div class="cart_mini_products_item">
                                    <a href="#" class="remove_product">
                                        <svg class="icon">
                                            <use xlink:href="#close"></use>
                                        </svg>
                                    </a>
                                    <div class="cart_mini_products_item_thumbnuil">
                                        <a href="#">
                                            <img src="img/search_product.png" alt="">
                                        </a>
                                    </div>
                                    <div class="cart_mini_products_item_data">
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
                                        <div class="cart_mini_count_price">
                                            <div class="cart_mini_count">
                                                <div class="cart_mini_minus">
                                                    <svg class="icon">
                                                        <use xlink:href="#minus"></use>
                                                    </svg>
                                                </div>
                                                <input class="mini_count" type="text" value="1">
                                                <div class="cart_mini_plus">
                                                    <svg class="icon">
                                                        <use xlink:href="#plus"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="cart_mini_price">
                                                <div class="card__item-old_price">
                                                    48 239  ₽
                                                </div>
                                                <div class="card__item-data-price">
                                                    513 859 ₽
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                </div> 
                                <div class="cart_mini_products_item">
                                    <a href="#" class="remove_product">
                                        <svg class="icon">
                                            <use xlink:href="#close"></use>
                                        </svg>
                                    </a>
                                    <div class="cart_mini_products_item_thumbnuil">
                                        <a href="#">
                                            <img src="img/search_product.png" alt="">
                                        </a>
                                    </div>
                                    <div class="cart_mini_products_item_data">
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
                                        <div class="cart_mini_count_price">
                                            <div class="cart_mini_count">
                                                <div class="cart_mini_minus">
                                                    <svg class="icon">
                                                        <use xlink:href="#minus"></use>
                                                    </svg>
                                                </div>
                                                <input class="mini_count" type="text" value="1">
                                                <div class="cart_mini_plus">
                                                    <svg class="icon">
                                                        <use xlink:href="#plus"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="cart_mini_price">
                                                <div class="card__item-old_price">
                                                    48 239  ₽
                                                </div>
                                                <div class="card__item-data-price">
                                                    513 859 ₽
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                </div>                         
                            </div>    
                            <div class="cart_mini_discount">
                                <div class="cart_mini_discount_item">
                                    Скидка
                                </div>
                                <div class="cart_mini_discount_item">
                                    5 138 590 ₽
                                </div>
                            </div>
                            <div class="cart_mini_total">
                                <div class="cart_mini_discount_item">
                                    Итого:
                                </div>
                                <div class="cart_mini_discount_item">
                                    5 138 590 ₽
                                </div>
                            </div>
                            <div class="cart_mini_add">
                                <a href="#">
                                    Перейти в корзину
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>

        <div class="navigation__menu">
            <ul>
                <li class="interest no_depth">
                    <a href="#">
                        <svg class="icon">
                            <use xlink:href="#interest"></use>
                        </svg>
                        Акции
                    </a>
                </li>
                <li>
                    <a href="#">
                        Вино
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                    <?php include('components/menu-item.php'); ?>        

                </li>
                <li>
                    <a href="#">
                        Шампанское
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a> 
                    <?php include('components/menu-item.php'); ?>   
                </li>
                <li>
                    <a href="#">
                        Виски
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                    <?php include('components/menu-item.php'); ?>
                </li>
                <li>
                    <a href="#">
                        Коньяк
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                    <?php include('components/menu-item.php'); ?>
                </li>
                <li>
                    <a href="#">
                        Водка
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                    <?php include('components/menu-item.php'); ?>
                </li>
                <li>
                    <a href="#">
                        Ликер
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                    <?php include('components/menu-item.php'); ?>
                </li>
                <li>
                    <a href="#">
                        Пиво и сидр
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                    <?php include('components/menu-item.php'); ?>
                </li>
                <li>
                    <a href="#">
                        Подарки
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                    <?php include('components/menu-item.php'); ?>
                </li>
                <li>
                    <a href="#">
                        Бокалы
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                    <?php include('components/menu-item.php'); ?>
                </li>
            </ul>
        </div>
    </div>
</section>    