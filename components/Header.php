<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vincent Vine</title>
    <link href="https://fonts.googleapis.com/css?family=Exo+2:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic&display=swap" rel="stylesheet" />
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
                    <a href="#">
                        <svg class="icon">
                            <use xlink:href="#cart"></use>
                        </svg>
                        <div class="header__inner-number">
                            12
                        </div> 
                    </a>
                </div>
            </div>   
        </div>

        <div class="navigation__menu">
            <ul>
                <li class="interest">
                    <a href="#">
                        <svg class="icon">
                            <use xlink:href="#interest"></use>
                        </svg>
                        Акции
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        Вино
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        Шампанское
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>    
                </li>
                <li>
                    <a href="#">
                        Виски
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        Коньяк
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        Водка
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        Ликер
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        Пиво и сидр
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        Подарки
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        Бокалы
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>    