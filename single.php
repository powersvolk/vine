<?php include('components/Header.php'); ?>

<div class="popup rewiews_window">
    <a href="#" class="exit_window close_popup">
        <svg class="icon">
            <use xlink:href="#close"></use>
        </svg>
    </a>
    <div class="rewiews_window_content">
      
        <div class="rewiews_window_header">
            <div class="rewiews_window_header_data">
                <h2>
                    Написать отзывы
                </h2>
                <h3>
                    Поставьте оценку товару*
                </h3>
                <div class="reviews_headline">
                    <div class="reviews_headline_count">
                        4.7
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
                </div>
                <h3>
                    Оцените вкусовые  свойства
                </h3>
                <div class="pickup_window_rating">
                <?php for($s = 0; $s < 5; $s++) { ?>
                    <div class="pickup_window_rating-item">
                        <div class="pickup_window_rating-item-title">
                            Ароматичность
                        </div>
                        <div class="pickup_window_rating-item-input">
                            <div class=" rewiews-ragnger-<?php echo $s; ?>"></div>
                            <div class="price_output" id="min-rewiews-<?php echo $s; ?>">
                            
                            </div>
                        </div>        
                    </div>
                <?php } ?>
                </div>
            </div>
            <div class="rewiews_window_header_product">
                <div class="card__item card__item-type_3">
                    <div class="card__item-thumbnuil">
                        <a href="#">
                            <img src="img/vine_product.png" alt="">
                        </a>
                        
                        <div class="card__item-compare">
                            <a href="#">
                                <svg class="icon">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>    
                        </div>
                        <div class="card__item-raiting_bage">
                            <img src="img/raiting.png" alt="">
                        </div>
                        <div class="card__item-marker_bage">
                            <svg class="icon">
                                <use xlink:href="#grape"></use>
                            </svg>
                            <span>
                                Vivion<br/>
                                <span>3.2</span>
                            </span>    
                        </div>
                    </div> 
                    <div class="card__item-title">
                        <a href="#">
                            Вино Сикоры Пино Нуар Семейный Резерв Семигорье 2019 750 мл
                        </a>
                    </div>
                    <div class="card__item-data">
                        <div class="card__item-data-price">
                            51 859 ₽
                        </div> 
                        <div class="card__item-old_price">
                            48 239  ₽
                        </div> 
                    </div>
                </div>    
            </div>
        </div>
        <div class="rewies_taste">
            <div class="owl-taste owl-taste-smaller owl-carousel owl-theme">
                <?php $q = 1; for($w = 0; $w < 23; $w++) { $q++;?>
                <div class="item <?php if($w == 3) { echo 'show_active'; } ?>">
                    <a href="#" data-tab="taste_item-<?php echo $w; ?>">
                        <img src="img/grenash_<?php echo $q; ?>.png" alt="">
                        <span>Малина</span>
                    </a>
                </div>
                <?php
                    if($q == 10) { $q = 1;}
                } ?>
            </div> 
        </div>
          

        
        <?php for($c = 0; $c < 23; $c++) { ?>
        <div class="taste_item taste_item-<?php echo $c; if($c==3) {echo ' active'; }?>">
            <a href="#">
                <img src="img/grenash_1.png" alt="">
                <span>Абрикос <?php echo $c;?></span>
            </a>
            <a href="#">
                <img src="img/grenash_2.png" alt="">
                <span>Слива <?php echo $c;?></span>
            </a>
        </div>    
        <?php } ?>
             
        <div class="feeling">
            <div class="feeling_inner">
                <div class="feeling_item">
                    <span>
                        Ощущения:
                    </span>
                    <a href="#">Сложное</a>
                    <a href="#">Простое</a>
                    <a href="#">Изящное</a>
                    <a href="#">Сочное</a>
                    <a href="#">Элегантное </a>
                    <a href="#">Утонченное</a>
                </div>
                <div class="feeling_item">
                    <span>
                        Интенсивность:
                    </span>
                    <a href="#">Сложное</a>
                    <a href="#">Простое</a>
                    <a href="#">Изящное</a>
                    <a href="#">Сочное</a>
                    <a href="#">Элегантное </a>
                    <a href="#">Утонченное</a>
                </div>
                <div class="feeling_item">
                    <span>
                        Кислотность:
                    </span>
                    <a href="#">Сложное</a>
                    <a href="#">Простое</a>
                    <a href="#">Изящное</a>
                    <a href="#">Сочное</a>
                    <a href="#">Элегантное </a>
                    <a href="#">Утонченное</a>
                    <a href="#">Элегантное </a>
                    <a href="#">Утонченное</a>
                </div>
                <div class="feeling_item">
                    <span>
                        Ощущения:
                    </span>
                    <a href="#">Сложное</a>
                    <a href="#">Простое</a>
                    <a href="#">Изящное</a>
                    <a href="#">Сочное</a>
                    <a href="#">Элегантное </a>
                    <a href="#">Утонченное</a>
                </div>
                <div class="feeling_item">
                    <span>
                        Интенсивность:
                    </span>
                    <a href="#">Сложное</a>
                    <a href="#">Простое</a>
                    <a href="#">Изящное</a>
                    <a href="#">Сочное</a>
                    <a href="#">Элегантное </a>
                    <a href="#">Утонченное</a>
                </div>
                <div class="feeling_item">
                    <span>
                        Кислотность:
                    </span>
                    <a href="#">Сложное</a>
                    <a href="#">Простое</a>
                    <a href="#">Изящное</a>
                    <a href="#">Сочное</a>
                    <a href="#">Элегантное </a>
                    <a href="#">Утонченное</a>
                    <a href="#">Элегантное </a>
                    <a href="#">Утонченное</a>
                </div>
            </div>
        </div>

        <form class="rewiews_form" method="POSST">
            <span>
                Достоинства товара*
            </span>
            <textarea></textarea>
          
            <div class="rewiews_form-cell">
                <div class="rewiews_form-cell_item">
                    <span>
                        Ваше имя
                    </span> 
                    <input type="text" placeholder="Ваше имя">
                    <div class="form_rule">
                        <input type="checkbox" class="cheackbox" id="checkboxRewiew">
                        <label for="checkboxRewiew" class="checkbox-label"></label>
                        <div class="form_rule_text">
                            Я соглашаюсь на обработку персональных данных<br/> 
                            в соответствии с Политикой конфиденциальности
                        </div>
                    </div>
                    <div class="form_rule_required">
                        <span>*</span>- Поля, обязательные для заполнения
                    </div>
                </div>
                <div class="rewiews_form-cell_item">
                    <span>
                        Номер телефона*
                    </span> 
                    <input type="text" placeholder="+7 909 22-55-456">
                    <div class="rewiews_form-cell_item_cell_symbol">
                        <div class="rewiews_form-cell_item_cell">
                            <span>
                                Символы на картинке*
                            </span> 
                            <input type="text">
                        </div>
                        <div class="rewiews_form-cell_item_cell rewiews_form-cell_item_cell_pic">
                            <img src="img/captcha.png" alt="">
                        </div>
                    </div>
                    

                </div>
            </div>
            <input type="submit" value="Оставить отзыв">

        </form>       


    </div>    
</div>


<div class="popup pickup_window">
    <a href="#" class="exit_window close_popup">
        <svg class="icon">
            <use xlink:href="#close"></use>
        </svg>
    </a>
    <div class="pickup_window_content">
        <div class="container">
            <h2>
                Мы поможем Вам подобрать лучший вариант напитка
            </h2>
            <h3>
                Оцените вкусовые  свойства 
            </h3>
            <div class="pickup_window_rating">
            <?php for($n = 0; $n < 5; $n++) { ?>
                <div class="pickup_window_rating-item">
                    <div class="pickup_window_rating-item-title">
                        Ароматичность
                    </div>
                    <div class="pickup_window_rating-item-input">
                        <div class="price-ragnger-<?php echo $n; ?>"></div>
                        <div class="price_output" id="min-price-<?php echo $n; ?>">
                           
                        </div>
                    </div>        
                </div>
            <?php } ?>
            </div> 
            <div class="owl-taste owl-taste-big owl-carousel owl-theme">
                <?php $k = 1; for($m = 0; $m < 23; $m++) { $k++;?>
                <div class="item <?php if($m == 3) { echo 'show_active'; } ?>">
                    <a href="#" data-tab="taste_item-<?php echo $m; ?>">
                        <img src="img/grenash_<?php echo $k; ?>.png" alt="">
                        <span>Малина</span>
                    </a>
                </div>
                <?php
                    if($k == 10) { $k = 1;}
                } ?>
            </div>   
             
            <?php for($c = 0; $c < 23; $c++) { ?>
            <div class="taste_item taste_item-<?php echo $c; if($c==3) {echo ' active'; }?>">
                <a href="#">
                    <img src="img/grenash_1.png" alt="">
                    <span>Абрикос <?php echo $c;?></span>
                </a>
                <a href="#">
                    <img src="img/grenash_2.png" alt="">
                    <span>Слива <?php echo $c;?></span>
                </a>
            </div>    
            <?php } ?>
             
        </div>
        <div class="sort_product">
            <div class="sort_product_inner">
                <a href="#" class="active">по популярности</a>
                <a href="#">по цене</a>
                <a href="#">по убыванию</a>
                <a href="#">по рейтингу</a>
                <a href="#">по выгодности</a>
            </div>
        </div>         
        <div class="product_items">
            <div class="product_items_inner four_item">
                <?php include('components/cards/cartTypeOne.php'); ?>
                <?php include('components/cards/cartTypeOne.php'); ?>
                <?php include('components/cards/cartTypeOne.php'); ?>
                <?php include('components/cards/cartTypeOne.php'); ?>
                <?php include('components/cards/cartTypeOne.php'); ?>
                <?php include('components/cards/cartTypeOne.php'); ?>
                <?php include('components/cards/cartTypeOne.php'); ?>
                <?php include('components/cards/cartTypeOne.php'); ?>
             </div>
        </div>        


    </div>
</div>

<div class="popup news_window">
    <a href="#" class="exit_window close_popup">
        <svg class="icon">
            <use xlink:href="#close"></use>
        </svg>
    </a>
    <div class="news_window_content">
        <h2>
            Подписка на новости о товаре
        </h2>
        <div class="news_window_product">
           <div class="news_window_product_thumbnuil">
                <img  src="img/big-bottle.png" alt="">
           </div> 
           <div class="news_window_product_description">
                <h3>
                    Вино Сикоры Пино Нуар Семейный Резерв Семигорье 2019 750 мл
                </h3>
                <div class="card__item-data">
                    <div class="card__item-data-price">
                        51 859 ₽
                    </div> 
                    <div class="card__item-old_price">
                        48 239  ₽
                    </div> 
                </div>
           </div>
        </div>
        <p>
            Мы уведомим вас, как только изменится стоимость<br/> 
            товара, или любая его характеристика. 
        </p>
    </div>
    <div class="registration_form">
        <h2>
            Как с вами связаться?
        </h2>
        <form action="#">
            <label>Ваше имя<span>*</span></label>
            <input type="text" placeholder="Иванов Иван Иванович">

            <label>Номер телефона<span>*</span></label>
            <input type="text" placeholder="+7 909 22-55-456">

            <div class="form_rule">
                <input type="checkbox" class="cheackbox" id="newsheckboxPolice">
                <label for="newsheckboxPolice" class="checkbox-label"></label>
                Я соглашаюсь на обработку персональных данных в соответствии с Политикой конфиденциальности
            </div>
            <div class="form_submit"> 
                <input type="submit" value="Подписаться">
            </div>
        </form>
    </div>
</div>



<div class="popup rate_window">
    <a href="#" class="exit_window close_popup">
        <svg class="icon">
            <use xlink:href="#close"></use>
        </svg>
    </a>
    <div class="rate_content">
        <h2>
            Оценить товар
        </h2>
        <p>
            Поставьте оценку товару* 
        </p> 
        <div class="reviews_headline">
            <div class="reviews_headline_count">
                4.7
            </div>
            <div class="reviews_headline_item_stars">
                <svg class="icon full">
                    <use xlink:href="#star"></use>
                </svg>
                <svg class="icon full">
                    <use xlink:href="#star"></use>
                </svg>
                <svg class="icon full">
                    <use xlink:href="#star"></use>
                </svg>
                <svg class="icon full">
                    <use xlink:href="#star"></use>
                </svg>
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
            </div>
        </div>
        <div class="review_approve">
            <a href="#">
                Смотреть все отзывы
            </a>
        </div>
    </div>
</div>


<div class="popup fast-buy_window">
    <a href="#" class="exit_window close_popup">
        <svg class="icon">
            <use xlink:href="#close"></use>
        </svg>
    </a>
    <div class="fast-buy_content">
        <?php include('components/product-single-window.php'); ?>
    </div>
</div>


<!-- 
<div class="scroll__show_product">
    <div class="container">
        <div class="scroll__show_product_inner">
            <div class="scroll__show_product_inner-thumbnuil">
                <img  src="img/big-bottle.png" alt="">
            </div>
            <div class="scroll__show_product_inner-description">
                <h2>
                    Вино Сикоры Пино Нуар Семейный<br/>
                    Резерв Семигорье 2019 750 мл
                </h2>
                <div class="scroll__show_product_inner-reviews">
                    <div class="scroll__show_product_inner-reviews_star">
                        4.7
                        <svg class="icon full">
                            <use xlink:href="#star"></use>
                        </svg>
                    </div>
                    <div class="scroll__show_product_inner-reviews_comments">
                        <svg class="icon full">
                            <use xlink:href="#message"></use>
                        </svg>
                        <a href="#">
                            7 отзывов
                        </a>
                        ,
                        <a href="#">
                            4 оценок
                        </a>
                    </div>
                    <div class="scroll__show_product_inner-reviews_sku">
                        Артикул: 06-8427221023946-2018
                    </div>
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
                    <div class="card__item-skill-item">
                        <div class="card__item-skill-item_option">
                            WE
                        </div>
                        <div class="card__item-skill-item_number">
                            66
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll__show_product_inner-buying">
                <div class="card__item-data">
                    <div class="card__item-data-price">
                        51 859 ₽
                    </div> 
                    <div class="card__item-old_price">
                        48 239  ₽
                    </div> 
                </div>
                <div class="card__item-exist">
                    В наличии 111 622 шт.
                </div>
                <div class="add_card">
                    <a href="#">Добавить в корзину</a>
                </div>
            </div>
        </div>
    </div>
</div> -->



<section class="product__single">
    <div class="container">
        <div class="product__single__inner">
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
                    <li>
                        >
                    </li>
                    <li>
                        <a href="#">
                            Вино Сикоры Пино Нуар Семейный Резерв Семигорье 2019 750 мл
                        </a>
                    </li>
                </ul>
            </div>
            <div class="product__single__inner-title">
                <a href="#">
                    <svg class="icon">
                        <use xlink:href="#left-arrow"></use>
                    </svg>
                </a>  
                <h1>
                    Вино Сикоры Пино Нуар Семейный Резерв Семигорье 2019 750 мл
                </h1>  
            </div>

            <div class="product__single__inner-reviews-data">
                <div class="product__single__inner-reviews-data-item">
                    7.2
                    <svg class="icon">
                        <use xlink:href="#star"></use>
                    </svg>
                </div>
                <div class="product__single__inner-reviews-data-item">
                    <svg class="icon">
                        <use xlink:href="#message"></use>
                    </svg>
                    <a href="#">7 отзывов,</a> 
                    <a href="#">4 оценок</a>
                </div>
                <div class="product__single__inner-reviews-data-item">
                    Артикул: 06-8427221023946-2018
                </div>
            </div>

            <div class="product__single__inner-cards">
                <div class="product__single__inner-cards-thumbnuil">
                    <img class="zooming" src="img/big-bottle.png" alt="">
                    <div class="card__item-discount">
                        -20%
                    </div>
                    <div class="card__item-raiting_bage">
                        <img src="img/raiting.png" alt="">
                    </div>
                    <div class="card__item-marker_bage">
                        <svg class="icon">
                            <use xlink:href="#grape"></use>
                        </svg>
                        <span>
                            Vivion<br/>
                            <span>3.2</span>
                        </span>    
                    </div>
                    <div class="card__item-zoom">
                        <svg class="icon">
                            <use xlink:href="#zoom"></use>
                        </svg>
                    </div>
                </div>
                <div class="product__single__inner-cards-description">
                    <h2 class="cards-description_title">
                        Рейтинги и награды:
                    </h2>
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
                        <div class="card__item-skill-item">
                            <div class="card__item-skill-item_option">
                                WE
                            </div>
                            <div class="card__item-skill-item_number">
                                66
                            </div>
                        </div>
                    </div>
                    <ul class="product__single__inner-settings">
                        <li>
                            <span>Цвет вина:</span>
                            <span>
                                <a href="#">Красное</a>, 
                                <a href="#">сухое</a>
                            </span>
                        </li>
                        <li>
                            <span>Регион:</span>
                            <span>
                                <a href="#">Испания</a>, 
                                <a href="#">Ла Манча</a>
                            </span>
                        </li>
                        <li>
                            <span>Производитель:</span>
                            <span>
                                <a href="#">Bodegas Bastida</a>
                            </span>
                        </li>
                        <li>
                            <span>Крепость:</span>
                            <span>
                                <a href="#">14%</a>
                            </span>
                        </li>
                        <li>
                            <span>Объем:</span>
                            <span>
                                <a href="#">0.75 л</a>
                            </span>
                        </li>
                        <li>
                            <span>Виноград:</span>
                            <span>
                                <a href="#">Темпранильо</a> 
                                <div class="tooltip">
                                    <svg class="icon">
                                        <use xlink:href="#question"></use>
                                    </svg>
                                    <div class="tooltip_container">
                                        <h3>
                                            Рейтинг WE
                                        </h3>
                                        <p>
                                            Рейтинг американского журнала Wine Enthusiast создает группа редакторов и профессиональных сомелье.
                                        </p>
                                    </div>
                                </div>
                                75%, 
                                <a href="#">Гренаш/Гарнача</a> 
                                <div class="tooltip">
                                    <svg class="icon">
                                        <use xlink:href="#question"></use>
                                    </svg>
                                    <div class="tooltip_container">
                                        <p>
                                            Рейтинг американского журнала Wine Enthusiast создает группа редакторов и профессиональных сомелье.
                                        </p>
                                    </div>
                                </div>
                                25% 
                            </span>
                        </li>
                        <li>
                            <span>Год:</span>
                            <span>
                                <a href="#">1956</a>
                            </span>
                        </li>
                        <li>
                            <span>Содержание сахара:</span>
                            <span>
                                <a href="#">Сухое</a>
                            </span>
                        </li>
                    </ul>                 
                    <div class="product__single__inner-settings-all">
                        <a href="#">
                            Все характеристики
                            <svg class="icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>
                        </a>
                    </div>    
                    <div class="product_options-all">
                        <h2 class="cards-description_title">
                            Обьем:
                        </h2>
                        <div class="product_options">
                            <a href="#" class="product_options_item active">
                                <span>0.5 л</span>
                            </a>
                            <a href="#" class="product_options_item">
                                <span>0.75 л</span>
                            </a>
                            <a href="#" class="product_options_item disabled">
                                <span>1.5 л</span>
                            </a>
                        </div>
                    </div>

                    <div class="product_years">
                        <h2 class="cards-description_title">
                            Год:
                        </h2>
                        <div class="product_options">
                            <a href="#" class="product_options_item active">
                                <span>2002</span>
                                <div class="product_options_price">
                                    23 711 ₽
                                </div>
                                <div class="product_options_badges">
                                    <div class="card__item-marker_bage" style="background:#BB0B2B">
                                        <svg class="icon">
                                            <use xlink:href="#grape-white"></use>
                                        </svg>
                                        <span>
                                            3.2
                                        </span>    
                                    </div>
                                    <div class="card__item-marker_bage card__item-marker_bage-blue">
                                        <svg class="icon">
                                            <use xlink:href="#ws"></use>
                                        </svg>
                                        <span>
                                            3.2
                                        </span>    
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="product_options_item">
                                <span>2022</span>
                                <div class="product_options_price">
                                    23 711 ₽
                                </div>
                                <div class="product_options_badges">
                                    <div class="card__item-marker_bage" style="background:#BB0B2B">
                                        <svg class="icon">
                                            <use xlink:href="#grape-white"></use>
                                        </svg>
                                        <span>
                                            3.2
                                        </span>    
                                    </div>
                                    <div class="card__item-marker_bage card__item-marker_bage-blue">
                                        <svg class="icon">
                                            <use xlink:href="#ws"></use>
                                        </svg>
                                        <span>
                                            3.2
                                        </span>    
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="product_options_item">
                                <span>2023</span>
                                <div class="product_options_price">
                                    23 711 ₽
                                </div>
                                <div class="product_options_badges">
                                    <div class="card__item-marker_bage" style="background:#BB0B2B">
                                        <svg class="icon">
                                            <use xlink:href="#grape-white"></use>
                                        </svg>
                                        <span>
                                            3.2
                                        </span>    
                                    </div>
                                    <div class="card__item-marker_bage card__item-marker_bage-blue">
                                        <svg class="icon">
                                            <use xlink:href="#ws"></use>
                                        </svg>
                                        <span>
                                            3.2
                                        </span>    
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="product_options_item">
                                <span>2024</span>
                                <div class="product_options_price">
                                    23 711 ₽
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="product__single__inner-cards-order">
                    <div class="product__single__inner-cards-order_container">
                        <div class="card__item-compare">
                            <a href="#">
                                <svg class="icon">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>    
                        </div>
                        <div class="card__item-data">
                            <div class="card__item-data-price">
                                51 859 ₽
                            </div> 
                            <div class="card__item-old_price">
                                48 239  ₽
                            </div> 
                        </div> 
                        <div class="card__item-exist">
                            В наличии 111 622 шт.
                        </div> 
                        <div class="card_count">
                            <div class="card_count_minus">
                            </div>
                            <div class="card_count_count">
                                <span>1</span> шт.
                            </div>
                            <div class="card_count_plus">
                            </div>
                        </div> 
                        <div class="add_card">
                            <a href="#">Добавить в корзину</a>
                        </div>
                        <div class="buy_now" >
                            <a href="#" class="popup_open" data-item="fast-buy">Купить сразу</a>
                        </div>
                        <div class="rait_now">
                            <a href="#" class="popup_open" data-item="rate">Оценить товар</a>
                        </div>
                    </div>

                    <div class="product__single__pick">
                        <a href="#" class="popup_open" data-item="pickup">
                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1625_45299)" filter="url(#filter0_d_1625_45299)">
                            <path d="M10.9008 20.2934L10.1093 21.6669C10.8604 22.1035 11.5852 22.5251 12.31 22.9485C12.4443 23.0273 12.6367 23.0884 12.6855 23.2076C12.7616 23.3832 12.8086 23.6432 12.7278 23.7916C12.664 23.9099 12.3926 23.9446 12.2096 23.9559C12.1025 23.9624 11.9871 23.8545 11.8791 23.7916L6.56138 20.7178C6.49379 20.6793 6.42242 20.6445 6.35858 20.6004C6.11823 20.4333 5.95674 20.2249 6.13982 19.9319C6.31069 19.6559 6.5567 19.6268 6.82897 19.7827C7.43923 20.1319 8.04885 20.4827 8.65786 20.8351L9.27939 21.1919L10.1929 19.6202C9.05755 18.4653 8.079 17.166 7.28244 15.7559C6.07164 13.6159 5.28009 11.2646 4.95029 8.82807C4.82167 7.91268 5.36996 7.10715 6.23558 6.93158C7.05239 6.76635 7.83166 7.27238 8.08515 8.1427C8.20908 8.56894 8.31421 8.99988 8.51231 9.42424C8.55268 9.19704 8.58554 8.9689 8.63343 8.74357C9.00897 7.0095 9.9112 5.60873 11.2782 4.49056C12.9972 3.08227 14.7172 1.67398 16.4222 0.251615C16.7752 -0.0441251 17.0606 -0.0788628 17.4672 0.157729C19.7035 1.47213 21.9496 2.77057 24.2053 4.05305C24.5687 4.26053 24.7264 4.49994 24.6541 4.91961C24.2476 7.27426 23.8598 9.63173 23.4505 11.9854C23.2026 13.4125 22.5172 14.6227 21.5371 15.6545C22.3398 16.1953 23.1435 16.7023 23.9096 17.2609C25.5526 18.4598 26.7186 20.1 27.9345 21.6913C28.1222 21.9326 28.1222 22.1946 27.8575 22.3917C27.5927 22.5889 27.3543 22.4988 27.1646 22.2584C26.7205 21.6951 26.2802 21.1233 25.838 20.5553C24.2466 18.5096 22.2609 16.9792 19.8434 16.0357C17.6623 15.1929 15.6945 13.8784 14.0807 12.1864C13.4958 11.5752 13.0094 11.4972 12.586 11.9047C12.1626 12.3122 12.2593 12.8436 12.8526 13.4379C13.7596 14.3467 14.675 15.247 15.5753 16.1605C16.0795 16.6769 16.1659 17.321 15.857 17.9293C15.725 18.2065 15.5084 18.4345 15.2384 18.5805C14.9684 18.7264 14.659 18.7828 14.3548 18.7415C14.0732 18.703 13.754 18.5941 13.554 18.4072C11.558 16.5455 9.61078 14.6283 8.47664 12.085C7.9706 10.9499 7.60444 9.75097 7.20167 8.57176C7.02892 8.06666 6.77917 7.80754 6.41771 7.88265C6.01776 7.96527 5.87036 8.29761 5.94829 8.84872C6.46466 12.4596 7.93085 15.6307 10.3468 18.3622C11.573 19.7413 13.0695 20.7431 14.7707 21.4538C15.9518 21.9467 17.1301 22.4481 18.3103 22.9447C18.4131 22.9817 18.5134 23.0253 18.6107 23.0752C18.8444 23.2161 19.0022 23.3982 18.8642 23.693C18.7262 23.9878 18.5008 24.0742 18.207 23.9427C15.7922 22.8574 13.2019 22.1232 11.1026 20.4042C11.0385 20.3619 10.9709 20.3248 10.9008 20.2934ZM9.61831 8.69757C9.86053 8.61213 10.0304 8.54736 10.2041 8.49196C12.1138 7.87889 13.9305 8.21781 15.7096 9.01678C16.5762 9.40641 17.438 9.8242 18.3384 10.1115C19.7551 10.5621 21.1775 10.5086 22.5276 9.81763C22.7003 9.72938 22.9031 9.53597 22.9369 9.36697C23.1895 7.98498 23.3913 6.59359 23.6383 5.21159C23.6908 4.91773 23.5969 4.7938 23.366 4.6633C22.1708 3.98451 20.9822 3.29257 19.7908 2.60626C19.082 2.19692 19.082 2.19692 18.4595 2.70015C18.3262 2.80812 18.1938 2.91796 18.0605 3.02781C17.4972 3.49724 16.9292 3.96667 16.3565 4.42765C16.1274 4.61542 15.8589 4.67551 15.6448 4.42765C15.4186 4.16289 15.5105 3.9047 15.7612 3.6944C15.9405 3.54418 16.1227 3.39585 16.3039 3.24657L18.1919 1.68431L17.008 1.00645C15.1961 2.49829 13.4 3.95916 11.6247 5.44537C10.6285 6.27907 9.97507 7.34749 9.61831 8.69569V8.69757Z" fill="white"/>
                            <path d="M14.6942 4.5206C14.9177 4.80226 15.1158 4.95154 15.1561 5.13368C15.2209 5.41533 15.0275 5.60311 14.7289 5.61625C14.4304 5.62939 14.2257 5.44349 14.2595 5.16371C14.2839 4.9797 14.483 4.81916 14.6942 4.5206Z" fill="white"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_1625_45299" x="0.933594" y="0" width="31.1328" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1625_45299"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1625_45299" result="shape"/>
                            </filter>
                            <clipPath id="clip0_1625_45299">
                            <rect width="23.1334" height="24" fill="white" transform="translate(4.93359)"/>
                            </clipPath>
                            </defs>
                        </svg>
                            Подберите похожее
                        </a>
                    </div>

                    <div class="product__single__inner-cards-subscribe">
                        <svg class="icon">
                            <use xlink:href="#sms"></use>
                        </svg>
                        <a href="#" class="popup_open" data-item="news">
                            Подписаться на товар
                        </a>
                    </div>

                    <div class="product__single__inner-cards-knows">
                        <svg class="icon">
                            <use xlink:href="#knows"></use>
                        </svg>
                        <a href="#">
                            Известное как
                        </a>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</section>    




<section class="category__section pt-60">
    <div class="container">
        <div class="category__section_inner">
            <h2 class="section_headline">
                Возможно, вас это заинтересует
            </h2>
            <div class="show_tabs active">
                <div class="section_category_sub__tabs">
                    <div class="section_category_sub__tabs-item active" data-brand="1">
                        Похожие по сорту
                    </div>
                    <div class="section_category_sub__tabs-item" data-brand="2">
                        Похожие по вкусовым свойствам
                    </div>
                    <div class="section_category_sub__tabs-item" data-brand="3">
                        Покожие  по вкусовому букету
                    </div>
                </div>
                <?php for($n = 1; $n <= 3; $n++) { ?>
                    <div class="section_category_brands show_brands show_brands_<?php echo $n; if($n==1) {echo ' active'; }?> ">
                        <div class="owl-categories owl-carousel owl-theme">
                            <?php $j = 0;
                                for($i = 1; $i <= 18; $i++) { 
                                    $j++;
                            ?>
                                <div class="item">
                                    <div class="category_brands_thumbnuil">
                                        <img src="img/vine_type/vine_type_<?php echo $j; ?>.png">
                                    </div>
                                    <h3>
                                        Бордо <?php echo $i;?>
                                    </h3>
                                    </div>
                            <?php 
                                if ($j == 9) { $j = 1; }
                            } ?>   
                            
                        </div>
                    </div> 
                <?php } ?>  
            </div> 
        </div>
    </div>
</section>    

<?php include('components/map.php'); ?>

<div class="product_full_description pt-60">
    <div class="container">
        <div class="product_full_description_inner">
            <div class="section_category_tabs">
                <div class="section_category_tabs-item active" data-categoty="1">
                    <span>Описание</span>
                </div>
                <div class="section_category_tabs-item" data-categoty="2">
                    <span>О производителе</span>
                </div>
            </div>

            <div class="product_full_description_content show_tabs show_tab_1 active">
                <div class="product_full_description_content_info">
                    <h3>
                        Вкусовые свойства
                    </h3>       
                    <div class="card__item-options">
                        <div class="card__item-options_item">
                            <div class="card__item-options_item-progress">
                                Ароматичность
                                <div class="progress-container">
                                    <div class="progress-bar" style="width:60%;"></div>
                                </div>
                            </div>
                            <div class="card__item-options_item-progress">
                                Кислотность
                                <div class="progress-container">
                                    <div class="progress-bar" style="width:20%;"></div>
                                </div>
                            </div>
                            <div class="card__item-options_item-progress">
                                Танинность
                                <div class="progress-container">
                                    <div class="progress-bar" style="width:50%;"></div>
                                </div>
                            </div>
                            <div class="card__item-options_item-progress">
                                Полнотелость
                                <div class="progress-container">
                                    <div class="progress-bar" style="width:80%;"></div>
                                </div>
                            </div>
                            <div class="card__item-options_item-progress">
                                Сладость
                                <div class="progress-container">
                                    <div class="progress-bar" style="width:30%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product_full_description_content_shorts">
                        <div class="product_full_description_content_shorts_thumbnuil">
                            <img src="img/settings/settings_1.png" alt="">
                        </div>
                        <div class="product_full_description_content_shorts_desc">
                            <h4>
                                Сицилия
                            </h4>
                            <p>
                                Итальянские вина
                            </p>
                        </div>
                    </div>
                    <div class="product_full_description_content_shorts">
                        <div class="product_full_description_content_shorts_thumbnuil">
                            <img src="img/settings/settings_2.png" alt="">
                        </div>
                        <div class="product_full_description_content_shorts_desc">
                            <h4>
                                Цвет вина:
                            </h4>
                            <p>
                                тёмное рубиновое
                            </p>
                        </div>
                    </div>
                    <div class="product_full_description_content_shorts">
                        <div class="product_full_description_content_shorts_thumbnuil">
                            <img src="img/settings/settings_3.png" alt="">
                        </div>
                        <div class="product_full_description_content_shorts_desc">
                            <h4>
                                Информация о почве:
                            </h4>
                            <p>
                                глина
                            </p>
                        </div>
                    </div>  
                    <div class="product_full_description_content_shorts">
                        <div class="product_full_description_content_shorts_thumbnuil">
                            <img src="img/settings/settings_4.png" alt="">
                        </div>
                        <div class="product_full_description_content_shorts_desc">
                            <h4>
                                Потенциал<br/> хранения:
                            </h4>
                            <p>
                                10-15 лет
                            </p>
                        </div>
                    </div>  
                    <div class="product_full_description_content_shorts">
                        <div class="product_full_description_content_shorts_thumbnuil">
                            <img src="img/settings/settings_5.png" alt="">
                        </div>
                        <div class="product_full_description_content_shorts_desc">
                            <h4>
                                Подача
                            </h4>
                            <p>
                                14–16 °C
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product_full_description_content_description">
                    <div class="card__item-options">
                        <div class="card__item-options_item">
                            <h3>
                                Сорт Винограда
                            </h3>   
                            <div class="card__item-options_cards">
                                <div class="card__item-options_cards-item">
                                    <a href="#">
                                        <img src="img/grenash.png" alt="">
                                        <span>Ваниль</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_1.png" alt="">
                                        <span>Малина</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_2.png" alt="">
                                        <span>Кожа</span>
                                    </a>
                                </div>
                            </div> 
                            <h3>
                                Вкусовые букеты
                            </h3>   
                            <div class="owl-taste owl-taste-smaller owl-carousel owl-theme">
                                <?php $k = 1; for($m = 0; $m < 23; $m++) { $k++;?>
                                <div class="item <?php if($m == 3) { echo 'show_active'; } ?>">
                                    <a href="#" data-tab="taste_item-<?php echo $m; ?>">
                                        <img src="img/grenash_<?php echo $k; ?>.png" alt="">
                                        <span>Малина</span>
                                    </a>
                                </div>
                                <?php
                                    if($k == 10) { $k = 1;}
                                } ?>
                            </div>   
                            
                            <?php for($c = 0; $c < 23; $c++) { ?>
                            <div class="taste_item taste_item-<?php echo $c; if($c==3) {echo ' active'; }?>">
                                <a href="#">
                                    <img src="img/grenash_1.png" alt="">
                                    <span>Абрикос <?php echo $c;?></span>
                                </a>
                                <a href="#">
                                    <img src="img/grenash_2.png" alt="">
                                    <span>Слива <?php echo $c;?></span>
                                </a>
                            </div>    
                            <?php } ?>
                            <h3>
                                Вкусовые сочитания
                            </h3>
                            <div class="card__item-options_cards">
                                <div class="card__item-options_cards-item">
                                    <a href="#">
                                        <img src="img/grenash_12.png" alt="">
                                        <span>Ваниль</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_13.png" alt="">
                                        <span>Малина</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_14.png" alt="">
                                        <span>Кожа</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_15.png" alt="">
                                        <span>Дуб</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_16.png" alt="">
                                        <span>Дуб</span>
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="product_full_description_content_text">
                        <h3>
                            Цвет
                        </h3>
                        <p>
                            Вермут светло-рубинового цвета.
                        </p>
                        <h3>
                            Аромат
                        </h3>
                        <p>
                            У вермута очень выразительный аромат с яркими акцентами сладких специй, особенно корицы и гвоздики. В букете также ощущаются тона цукатов и легкие травянистые нотки.
                        </p>    
                        <h3>
                            Вкус
                        </h3>    
                        <p class="show_opacity">
                            У вермута сливочная текстура, на фоне которой хорошо выделяется свежая фруктовая палитра с нотками спелого винограда. А долгое послевкусие украшено нотками средиземноморских трав.
                        </p>   
                        <h3 class="product_text_show"> 
                            Гастрономические сочетания
                        </h3>
                        <p class="product_text_show">
                            Вермут идеально сочетается со льдом, джином, тоником, соками. Можно подавать в чистом виде или сочетать с фруктами.
                        </p>   
                        <p class="product_text_show"> 
                            "Padro & Co" Rojo Clasico — приятный вермут, своим вкусом напоминающий то вино, которое было популярно в Таррагоне в древности. Менялись года и столетия, но "фирменный" вкус до сих пор ассоциируется с этой местностью. "Падро & Ко" Рохо Клаcсико создают из сортов Макабео и Чарелло, выращенных на собственных виноградниках компании. 
                        </p>
                        <p class="product_text_show">    
                            Во время ферментации в сусло добавляют сахар, а также экстракт средиземноморских трав, после чего выдерживают его в 50-летних баррелях из каштана, ранее предназначавшихся для транспортировки напитка, а сегодня адаптированных под его выдержку.
                        </p>    
                        <div class="product_full_description_content_text_show">
                            <a href="#">
                                Свернуть
                                <svg class="icon">
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </a>
                        </div> 
                    </div>   

                       
                    <div class="tags">
                        <h3>
                            Категории напитка
                        </h3> 
                        <div class="tags_inner">
                            <a href="#">Белое</a>
                            <a href="#">Красное</a>
                            <a href="#">Розовое</a>
                            <a href="#" class="active">Сладкое </a>
                            <a href="#">Мальбек</a>
                            <a href="#">Французские вина</a>
                            <a href="#">Белое/a>
                            <a href="#">Красное</a>
                            <a href="#">Грузинское вино</a>
                            <a href="#">Испанское вино</a>
                            <a href="#">11.2%</a>
                            <a href="#">Сухое</a>
                            <a href="#">Полусладкое</a>
                            <a href="#">Вина крыма</a>
                        </div>          
                    </div>

                </div>
            </div>
            
            
            <div class="product_full_description_content show_tabs show_tab_2">
                <div class="product_full_description_content_info">
                    <h3>
                        Вкусовые свойства 2
                    </h3>       
                    <div class="card__item-options">
                        <div class="card__item-options_item">
                            <div class="card__item-options_item-progress">
                                Ароматичность2
                                <div class="progress-container">
                                    <div class="progress-bar" style="width:60%;"></div>
                                </div>
                            </div>
                            <div class="card__item-options_item-progress">
                                Кислотность2
                                <div class="progress-container">
                                    <div class="progress-bar" style="width:20%;"></div>
                                </div>
                            </div>
                            <div class="card__item-options_item-progress">
                                Танинность2
                                <div class="progress-container">
                                    <div class="progress-bar" style="width:50%;"></div>
                                </div>
                            </div>
                            <div class="card__item-options_item-progress">
                                Полнотелость2
                                <div class="progress-container">
                                    <div class="progress-bar" style="width:80%;"></div>
                                </div>
                            </div>
                            <div class="card__item-options_item-progress">
                                Сладость2
                                <div class="progress-container">
                                    <div class="progress-bar" style="width:30%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product_full_description_content_shorts">
                        <div class="product_full_description_content_shorts_thumbnuil">
                            <img src="img/settings/settings_1.png" alt="">
                        </div>
                        <div class="product_full_description_content_shorts_desc">
                            <h4>
                                Сицилия
                            </h4>
                            <p>
                                Итальянские вина
                            </p>
                        </div>
                    </div>
                    <div class="product_full_description_content_shorts">
                        <div class="product_full_description_content_shorts_thumbnuil">
                            <img src="img/settings/settings_2.png" alt="">
                        </div>
                        <div class="product_full_description_content_shorts_desc">
                            <h4>
                                Цвет вина:
                            </h4>
                            <p>
                                тёмное рубиновое
                            </p>
                        </div>
                    </div>
                    <div class="product_full_description_content_shorts">
                        <div class="product_full_description_content_shorts_thumbnuil">
                            <img src="img/settings/settings_3.png" alt="">
                        </div>
                        <div class="product_full_description_content_shorts_desc">
                            <h4>
                                Информация о почве:
                            </h4>
                            <p>
                                глина
                            </p>
                        </div>
                    </div>  
                    <div class="product_full_description_content_shorts">
                        <div class="product_full_description_content_shorts_thumbnuil">
                            <img src="img/settings/settings_4.png" alt="">
                        </div>
                        <div class="product_full_description_content_shorts_desc">
                            <h4>
                                Потенциал<br/> хранения:
                            </h4>
                            <p>
                                10-15 лет
                            </p>
                        </div>
                    </div>  
                    <div class="product_full_description_content_shorts">
                        <div class="product_full_description_content_shorts_thumbnuil">
                            <img src="img/settings/settings_5.png" alt="">
                        </div>
                        <div class="product_full_description_content_shorts_desc">
                            <h4>
                                Подача
                            </h4>
                            <p>
                                14–16 °C
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product_full_description_content_description">
                    <div class="product_full_description_content_text" style="margin:0;">
                        <h3>
                            Цвет
                        </h3>
                        <p>
                            Вермут светло-рубинового цвета.
                        </p>
                        <h3>
                            Аромат
                        </h3>
                        <p>
                            У вермута очень выразительный аромат с яркими акцентами сладких специй, особенно корицы и гвоздики. В букете также ощущаются тона цукатов и легкие травянистые нотки.
                        </p>    
                        <h3>
                            Вкус
                        </h3>    
                        <p class="show_opacity">
                            У вермута сливочная текстура, на фоне которой хорошо выделяется свежая фруктовая палитра с нотками спелого винограда. А долгое послевкусие украшено нотками средиземноморских трав.
                        </p>   
                        <h3 class="product_text_show"> 
                            Гастрономические сочетания
                        </h3>
                        <p class="product_text_show">
                            Вермут идеально сочетается со льдом, джином, тоником, соками. Можно подавать в чистом виде или сочетать с фруктами.
                        </p>   
                        <p class="product_text_show"> 
                            "Padro & Co" Rojo Clasico — приятный вермут, своим вкусом напоминающий то вино, которое было популярно в Таррагоне в древности. Менялись года и столетия, но "фирменный" вкус до сих пор ассоциируется с этой местностью. "Падро & Ко" Рохо Клаcсико создают из сортов Макабео и Чарелло, выращенных на собственных виноградниках компании. 
                        </p>
                        <p class="product_text_show">    
                            Во время ферментации в сусло добавляют сахар, а также экстракт средиземноморских трав, после чего выдерживают его в 50-летних баррелях из каштана, ранее предназначавшихся для транспортировки напитка, а сегодня адаптированных под его выдержку.
                        </p>    
                        <div class="product_full_description_content_text_show">
                            <a href="#">
                                Свернуть
                                <svg class="icon">
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </a>
                        </div> 
                    </div>   

                       
                    <div class="tags">
                        <h3>
                            Категории напитка
                        </h3> 
                        <div class="tags_inner">
                            <a href="#">Белое</a>
                            <a href="#">Красное</a>
                            <a href="#">Розовое</a>
                            <a href="#" class="active">Сладкое </a>
                            <a href="#">Мальбек</a>
                            <a href="#">Французские вина</a>
                            <a href="#">Белое/a>
                            <a href="#">Красное</a>
                            <a href="#">Грузинское вино</a>
                            <a href="#">Испанское вино</a>
                            <a href="#">11.2%</a>
                            <a href="#">Сухое</a>
                            <a href="#">Полусладкое</a>
                            <a href="#">Вина крыма</a>
                        </div>          
                    </div>

                </div>
            </div>

        </div>
    </div>   
</div>


<section class="reviews pt-60">
    <div class="container">
        <div class="reviews_inner">
            <h2 class="section_headline">Отзывы </h2>
            <div class="reviews_headline_container">
                <div class="reviews_headline">
                    <div class="reviews_headline_count">
                        4.7
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
                    <div class="reviews_headline_item_description">
                        На основе  <a href="#"> 62 отзывов</a>
                        <div class="tooltip">
                            <svg class="icon">
                                <use xlink:href="#information"></use>
                            </svg>
                            <div class="tooltip_container">
                                <h3>
                                    Рейтинг WE
                                </h3>
                                <p>
                                    Рейтинг американского журнала Wine Enthusiast создает группа редакторов и профессиональных сомелье.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews_cta">
                    <a href="#" class="popup_open" data-item="rewiews">
                        Оставить отзыв
                    </a>
                </div>    
            </div>

            <div class="tags">
                <div class="tags_inner">
                    <a href="#">Ароматное  25</a>
                    <a href="#">Сухое  2</a>
                    <a href="#">Дубовые нотки  1</a>
                    <a href="#">Ягодное 25</a>
                    <a href="#">Пряное 25</a>
                    <a href="#">Кислотное  5</a>
                    <a href="#">Абрикосовое  9</a>
                    <a href="#">Малиновое  5</a>
                    <a href="#">Сладкое 5</a>
                </div>
            </div>
            
            <div class="review__list">
                <div class="review__list-item">
                    <div class="review__list-item_header">
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
                        </div>
                    </div>     
                    <h2>
                        Достоинства товара 
                    </h2>
                    <p>
                        Будьте внимательны при выборе адаптера, у них разная высота. К сожалению, я об этом узнал уже после того, как он не подошел к моему ноутбуку Будьте внимательны при выборе адаптера, у них разная высота.
                    </p>
                    <h2>
                        Недостатки товара
                    </h2>
                    <p>
                        Будьте внимательны при выборе адаптера, у них разная высота. К сожалению, я об этом узнал уже после того, как он не подошел к моему ноутбуку Будьте внимательны при выборе адаптера, у них разная высота.
                    </p>
                </div>
                <div class="review__list-item">
                    <div class="review__list-item_header">
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
                        </div>
                    </div>     
                    <h2>
                        Достоинства товара 
                    </h2>
                    <p>
                        Будьте внимательны при выборе адаптера, у них разная высота.
                    </p>
                    <h2>
                        Недостатки товара
                    </h2>
                    <p>
                        Будьте внимательны при выборе адаптера, у них разная высота. К сожалению, я об этом узнал уже после того, как он не подошел к моему ноутбуку Будьте внимательны при выборе адаптера, у них разная высота.
                    </p>
                </div>
                <div class="review__list-item">
                    <div class="review__list-item_header">
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
                        </div>
                    </div>     
                    <h2>
                        Достоинства товара 
                    </h2>
                    <p>
                        Будьте внимательны при выборе адаптера, у них разная высота.
                    </p>
                    <h2>
                        Недостатки товара
                    </h2>
                    <p>
                        Будьте внимательны при выборе адаптера, у них разная высота.
                    </p>
                </div>
                
                <! -- >
               
                <div class="review__list-item hide_review">
                    <div class="review__list-item_header">
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
                        </div>
                    </div>     
                    <h2>
                        Достоинства товара 
                    </h2>
                    <p>
                        Будьте внимательны при выборе адаптера, у них разная высота.
                    </p>
                    <h2>
                        Недостатки товара
                    </h2>
                    <p>
                        Будьте внимательны при выборе адаптера, у них разная высота. К сожалению, я об этом узнал уже после того, как он не подошел к моему ноутбуку Будьте внимательны при выборе адаптера, у них разная высота.
                    </p>
                </div>          
                        
                <div class="review__list-item hide_review">
                    <div class="review__list-item_header">
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
                        </div>
                    </div>     
                    <h2>
                        Достоинства товара 
                    </h2>
                    <p>
                        Будьте внимательны при выборе адаптера, у них разная высота.
                    </p>
                    <h2>
                        Недостатки товара
                    </h2>
                    <p>
                        Будьте внимательны при выборе адаптера, у них разная высота.
                    </p>
                </div>

                <div class="review__list-item hide_review">
                    <div class="review__list-item_header">
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
                        </div>
                    </div>     
                    <h2>
                        Достоинства товара 
                    </h2>
                    <p>
                        Будьте внимательны при выборе адаптера, у них разная высота. К сожалению, я об этом узнал уже после того, как он не подошел к моему ноутбуку Будьте внимательны при выборе адаптера, у них разная высота.
                    </p>
                    <h2>
                        Недостатки товара
                    </h2>
                    <p>
                        Будьте внимательны при выборе адаптера, у них разная высота. К сожалению, я об этом узнал уже после того, как он не подошел к моему ноутбуку Будьте внимательны при выборе адаптера, у них разная высота.
                    </p>
                </div>                

            </div>   

           
            <div class="show_all_review">
                <a href="#">
                    Смотреть все отзывы
                    <svg class="icon">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>   
</div>



<section class="category__section pt-60">
    <div class="container">
        <div class="category__section_inner">
            <h2 class="section_headline">
                Возможно, вас это заинтересует
            </h2>
            <div class="show_tabs active">
                <div class="section_category_sub__tabs">
                    <div class="section_category_sub__tabs-item active" data-brand="1">
                        Недавно просмотренные
                    </div>
                    <div class="section_category_sub__tabs-item" data-brand="2">
                        Похожие товары
                    </div>
                    <div class="section_category_sub__tabs-item" data-brand="3">
                        Мы рекомендуем
                    </div>
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

<section class="category__section pt-60">
    <div class="container">
        <div class="category__section_inner">
            <h2 class="section_headline">
                С этим товаром покупают
            </h2>
            <div class="show_tabs active">
                <div class="section_category_brands">
                    <div class="owl-product owl-carousel owl-theme">
                        <?php for($d = 1; $d <= 10; $d++) { ?>   
                            <div class="item">
                                <div class="full_item">
                                    <div class="card__item">
                                        <div class="card__item-thumbnuil">
                                            <a href="#">
                                                <img src="img/glass/glass_<?php echo rand(1, 3);?>.png" alt="">
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
            </div> 
        </div>
    </div>
</section>
<section class="serving-wine mt-60">
    <div class="container">
        <div class="serving-wine__pd">
            <h2>
                Подача и сочетание вина
            </h2>
            <p>
                Мир алкогольных напитков чрезвычайно многообразен. Посудите сами, чего стоит ассортимент представленных на полках магазинов вин и бренди. Одно только посещение магазина подобно путешествию по всему свету: Франция, Испания, Италия, Португалия, Россия; из Европы – прямиком в Америку: Чили, Калифорния, Аргентина, а оттуда через океан в Новую Зеландию и Австралию. Чтобы кругосветная экскурсия не вскружила голову, нужен проводник, знающий все об особенностях национального алкоголя каждой страны. Консультанты Ароматного Мира – настоящие профессионалы своего дела. Они расскажут, какое игристое вино называется шампанским, чем чилийское Шардоне отличается от французского, как правильно пить абсент, чтобы избежать встречи с «зеленой феей». А также помогут подобрать лучший алкоголь к ужину или сигаре.
            </p>
            <h3>
                Выбор и хранение
            </h3>
            <p>
                Вино выбирают, опираясь на ключевые характеристики напитка: сладость, кислотность, танинность, полнотелость, зрелость и крепость. По процентному содержанию сахара все сорта вин делятся на сладкие, полусладкие, полусухие и сухие. Крепость обычных, некрепленых вин обычно составляет 11-15%. Кислотность и другие характеристики вина напрямую связаны сортом винограда, из которого изготовлен напиток. Повышенной кислотностью отличаются сортовые вина из ягод Пино-нуар, Совиньон-блан, Рислинг, а также ассамбляжные Кьянти, Бароло и Барбера, токайское вино и ледяное Айсвайн. Наиболее полнотелыми и богатыми танинами – фенольными соединениями, которые имеют дубильные свойства и придают вину горьковатый вяжущий, «сухой» вкус – считаются красные сорта вин. А с учетом того, что танины являются природным консервантом, красное вино имеет больший потенциал выдержки, чем белое. Независимо от возраста вина и того, из каких ягод оно изготовлено, хранят его в темном прохладном месте, предпочтительно – в погребе, куда не проникают прямые солнечные лучи.
            </p>
            <h3>
                Цены на популярное вино
            </h3>
            <p> 
                Наш топ вин – это напитки с хорошими вкусовыми характеристиками, которые прекрасно сочетаются с различными блюдами, и будут уместны на любом застолье – будь то день рождения, Новый год, корпоратив или свадьба. Выбирая лучшие вина, наши кависты ориентируются на собственный опыт, а также оценки винных экспертов и отзывы покупателей.
            </p> 
            <ul class="wine-list">
                <li>
                    <span>Вино Muddy Boots Sauvignon Blanc 0,75 л</span>
                    <span>1020 руб.</span>
                </li>
                <li>
                    <span>Вино Alamos Malbec 2022 0,75 л</span>
                    <span>1140 руб.</span>
                </li>
                <li>
                    <span>Вино Chateau L'Heyrisson Bordeaux Red Dry 0,75 л</span>
                    <span>1320 руб.</span>
                </li>
                <li>
                    <span>Вино Усадьба Дивноморское Терруар Вторая Линия Солнечный Ветер 2021 0,75 л</span>
                    <span>948 руб.</span>
                </li>
                <li>
                    <span>Вино Peter Paul Gruner Veltliner 2021 0,75 л.</span>
                    <span>1836 руб.</span>
                </li>
                <li>
                    <span>Вино Domaine Vincent Wengier Bourgogne Chardonnay 2021 0,75 л</span>
                    <span>2517 руб.</span>
                </li>
                <li>
                    <span>Вино Усадьба Дивноморское Вторая Линия Вечерница 2021 0,75 л</span>
                    <span>1148 руб.</span>
                </li>
                <li>
                    <span>Вино Олег Репин Рислинг 0,75 л</span>
                    <span>3158 руб.</span>
                </li>
                <li>
                    <span>Вино Sturmwolken Riesling 0,75 л</span>
                    <span>940 руб.</span>
                </li>
                <li>
                    <span>Вино Caravan Durif 2019 0,75 л</span>
                    <span>1110 руб.</span>
                </li>
            </ul>                 
        </div>
    </div>
</section>
<?php include('components/buy_index.php'); ?>
<?php include('components/Footer.php'); ?>