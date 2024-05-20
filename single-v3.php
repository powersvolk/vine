<?php include('components/Header.php'); ?>



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
</div>



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
                        <div class="card__item-not-exist">
                            Нет в наличии
                        </div> 
                        <div class="buy_now product_back_cta">
                            <a href="#">Сообщить о поступлении</a>
                        </div>
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
                    <h3 class="region_title">
                        Региона производства
                    </h3>   
                    <a href="#" class="region_link">
                        Перейти на карту 
                    </a>      
                    <img class="region_thumb" src="img/map_vine.png" alt="">
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
                            <div class="card__item-options_cards">
                                <div class="card__item-options_cards-item">
                                    <a href="#">
                                        <img src="img/grenash_3.png" alt="">
                                        <span>Малина</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_4.png" alt="">
                                        <span>Кожа</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_5.png" alt="">
                                        <span>Малина</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_6.png" alt="">
                                        <span>Кожа</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_7.png" alt="">
                                        <span>Ваниль</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_8.png" alt="">
                                        <span>Малина</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_9.png" alt="">
                                        <span>Кожа</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_10.png" alt="">
                                        <span>Малина</span>
                                    </a>
                                    <a href="#">
                                        <img src="img/grenash_11.png" alt="">
                                        <span>Малина</span>
                                    </a>
                                </div>
                            </div>
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

                <div class="review_section_block_grade">
                    <h2>
                        Оценка
                    </h2>
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
                    <div class="reviews_headline_item_description">
                        <span>79%</span>На основе  <a href="#"> 62 отзывов</a>
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
                    <div class="reviews_cta reviews_cta_v2">
                        <a href="#">
                            Оставить отзыв
                        </a>
                    </div>  
                </div>
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