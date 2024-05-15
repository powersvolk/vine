<?php include('components/Header.php'); ?>

<div class="categories">
    <section class="category_hero" style="background-image:url(img/catalog/banner.jpg);">
        <div class="container">
            <div class="category_hero_inner">
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
                <div class="category_hero_description">
                    <h1>
                        Вино <span>5 887 товаров</span>   
                    </h1>
                    <p>
                        Вино – древнейший алкогольный напиток, первые упоминания о котором были известны еще за 6 тыс. лет до н.э. Делают его преимущественно из винограда: ягоды отжимаются, а затем ферментируются без добавления сахара, кислот и прочих ингредиентов. В некоторых странах, к примеру, в Китае и Японии, вино делают и из другого сырья: риса, слив, вишни, граната, бузины. У нас представлены отборные вина Франции, Италии, Аргентины, Чили и других стран. Чтобы подобрать ваш напиток, воспользуйтесь ссылками снизу.
                    </p>
                    <a href="#">
                        Подробнее
                    </a>
                </div>
            </div>
        </div>
    </section>    

    <section class="category__section pt-60">
        <div class="container">
            <div class="category__section_inner">
                <h2 class="section_headline">
                    Популярные вина
                </h2>
                <div class="show_tabs active">
                    <div class="section_category_sub__tabs">
                        <div class="section_category_sub__tabs-item active" data-brand="1">
                            Мы рекомендуем
                        </div>
                        <div class="section_category_sub__tabs-item" data-brand="2">
                            По акции
                        </div>
                        <div class="section_category_sub__tabs-item" data-brand="3">
                            Подборки
                        </div>
                    </div>
                    <?php for($n = 1; $n <= 3; $n++) { ?>
                        <div class="section_category_brands show_brands show_brands_<?php echo $n; if($n==1) {echo ' active'; }?> ">
                            <div class="cards_section five_item">
                                <?php for($j = 1; $j <= 5; $j++) { ?>   
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
                    Выберите вино
                </h2>
                <div class="show_tabs active">
                    <div class="section_category_brands show_brands active">
                        <div class="owl-categories owl-carousel owl-theme">

                            <div class="item">
                                <div class="category_brands_thumbnuil">
                                    <img src="img/vine_type/vine_type_1.png">
                                </div>
                                <h3>
                                    К ужину
                                </h3>
                            </div>
                            <div class="item">
                                <div class="category_brands_thumbnuil">
                                    <img src="img/vine_type/vine_type_2.png">
                                </div>
                                <h3>
                                    К мясу
                                </h3>
                            </div>
                            <div class="item">
                                <div class="category_brands_thumbnuil">
                                    <img src="img/vine_type/vine_type_3.png">
                                </div>
                                <h3>
                                    На праздник
                                </h3>
                            </div>
                            <div class="item">
                                <div class="category_brands_thumbnuil">
                                    <img src="img/vine_type/vine_type_4.png">
                                </div>
                                <h3>
                                    В подарок
                                </h3>
                            </div>
                            <div class="item">
                                <div class="category_brands_thumbnuil">
                                    <img src="img/vine_type/vine_type_5.png">
                                </div>
                                <h3>
                                    Для выдержки
                                </h3>
                            </div>
                            <div class="item">
                                <div class="category_brands_thumbnuil">
                                    <img src="img/vine_type/vine_type_6.png">
                                </div>
                                <h3>
                                    К рыбе
                                </h3>
                            </div>
                            <div class="item">
                                <div class="category_brands_thumbnuil">
                                    <img src="img/vine_type/vine_type_7.png">
                                </div>
                                <h3>
                                    Вермуты
                                </h3>
                            </div>
                            <div class="item">
                                <div class="category_brands_thumbnuil">
                                    <img src="img/vine_type/vine_type_8.png">
                                </div>
                                <h3>
                                    К сладкому
                                </h3>
                            </div>
                            <div class="item">
                                <div class="category_brands_thumbnuil">
                                    <img src="img/vine_type/vine_type_9.png">
                                </div>
                                <h3>
                                    Вино и сыр
                                </h3>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
    </section>                                     
    
    <?php include('components/map.php'); ?>

    <section class="popular__brand pt-60">
        <div class="container">
            <div class="popular__brand_inner">
                <h2 class="section_headline">
                    Популярные брены
                </h2>
            </div>
            <?php for($j = 1; $j<= 7; $j++) { ?>
                <div class="popular__brand__content show_brand show_brand_<?php echo $j; if($j == 1) { echo ' active'; }?>">
                    <?php for($i = 1; $i<= 18; $i++) { ?>
                        <a href="#">
                            <img src="img/brands/brand_<?php echo $i; ?>.jpg" alt="">
                        </a> 
                    <?php } ?>   
                </div>
            <?php } ?>
        </div>
    </section>   

    <section class="tags">
        <div class="container"> 
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
    </section>  

    <section class="horizontal_filter">
        <div class="container"> 
            <div class="horizontal_filter_inner">
                <div class="horizontal_filter_inner-item">
                    Цена, ₽
                    <span>
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </span> 
                    <div class="sidebar_tab sidebar_tab_fly">
                        <h3 class="active">
                            Цена, ₽
                        </h3>
                        <div class="sidebar_tab-content price-slider_data">
                            <div id="price-slider"></div>
                            <div class="price-slider_data-row">
                                <input type="text" id="min-price" readonly>
                                <input type="text" id="max-price" readonly>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="horizontal_filter_inner-item">
                    Содержание сахара
                    <span>
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </span>
                    <div class="sidebar_tab sidebar_tab_fly">
                        <h3 class="active">
                            Содержание сахара
                        </h3>
                        <div class="sidebar_tab-content sidebar-filter-data">
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="name_1">
                                <label for="name_1" class="checkbox-label">Сухое <span>34</span></label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="name_2">
                                <label for="name_2" class="checkbox-label">Полусухое <span>71</span></label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="name_3">
                                <label for="name_3" class="checkbox-label">Полусладкое <span>105</span></label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="name_4">
                                <label for="name_4" class="checkbox-label">Сладкое <span>2356</span></label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="name_5">
                                <label for="name_5" class="checkbox-label">Сладкое <span>2356</span></label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="name_6">
                                <label for="name_6" class="checkbox-label">Сладкое <span>2356</span></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="horizontal_filter_inner-item">
                    Производитель
                    <span>
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </span>
                    <div class="sidebar_tab sidebar_tab_fly">
                        <h3 class="active">
                            Производитель
                        </h3>
                        <div class="sidebar_tab-content sidebar-filter-country">
                            <select class="select">
                                <option value="Турция">Турция</option>
                                <option value="Италия">Италия</option>
                                <option value="Грузия">Грузия</option>
                                <option value="Испания">Испания</option>
                                <option value="Португалия">Португалия</option>
                            </select>    
                        </div>
                    </div>
                </div>
                <div class="horizontal_filter_inner-item">
                    Страна 
                    <span>
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </span>
                    <div class="sidebar_tab sidebar_tab_fly">
                        <h3 class="active">
                            Страна
                        </h3>
                        <div class="sidebar_tab-content sidebar-filter-data">
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="cname_1">
                                <label for="cname_1" class="checkbox-label">
                                    <img src="img/country/brazil.png" alt="">
                                    Франция <span>34</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="cname_2">
                                <label for="cname_2" class="checkbox-label">
                                    <img src="img/country/georgia.png" alt="">
                                    Италия <span>71</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="cname_3">
                                <label for="cname_3" class="checkbox-label">
                                    <img src="img/country/spain.png" alt="">
                                    Испания <span>105</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="cname_4">
                                <label for="cname_4" class="checkbox-label">
                                    <img src="img/country/brazil.png" alt="">
                                    Грузия <span>2356</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="cname_5">
                                <label for="cname_5" class="checkbox-label">
                                    <img src="img/country/spain.png" alt="">
                                    Бразилия <span>2356</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="horizontal_filter_inner-item">
                    Сорт винограда
                    <span>
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </span>
                    <div class="sidebar_tab sidebar_tab_fly">
                        <h3 class="active">
                            Сорт винограда
                        </h3>
                        <div class="form_rule_field">
                            <input type="text" placeholder="Введите сорт винограда">
                        </div>
                        <div class="sidebar_tab-content sidebar-filter-data">
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="sname_1">
                                <label for="sname_1" class="checkbox-label">
                                    Пино Нуар<span>34</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="sname_2">
                                <label for="sname_2" class="checkbox-label">
                                    Мерло <span>71</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="sname_3">
                                <label for="sname_3" class="checkbox-label">
                                    Совиньон Блан <span>105</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="sname_4">
                                <label for="sname_4" class="checkbox-label">
                                    Санджовезе <span>2356</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="sname_5">
                                <label for="sname_5" class="checkbox-label">
                                    Каберене Совиньон <span>2356</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="horizontal_filter_inner-item">
                    Год
                    <span>
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </span>
                    <div class="sidebar_tab sidebar_tab_fly">
                        <h3 class="active">
                            Год
                            <span>
                                <svg class="icon">
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </span>
                        </h3>
                        <div class="sidebar_tab-content sidebar-filter-data">
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="dsname_1">
                                <label for="dsname_1" class="checkbox-label">
                                    1930<span>34</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="dsname_2">
                                <label for="dsname_2" class="checkbox-label">
                                    1950 <span>71</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="dsname_3">
                                <label for="dsname_3" class="checkbox-label">
                                    1960 <span>105</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="dsname_4">
                                <label for="dsname_4" class="checkbox-label">
                                    1990 <span>2356</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="dsname_5">
                                <label for="dsname_5" class="checkbox-label">
                                    2000 <span>2356</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="horizontal_filter_inner-item">
                    Крепость, °С
                    <span>
                        <svg class="icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </span>
                    <div class="sidebar_tab sidebar_tab_fly">
                        <h3 class="active">
                            Крепость, °С
                            <span>
                                <svg class="icon">
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </span>
                        </h3>
                        <div class="sidebar_tab-content sidebar-filter-data">
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="ssname_1">
                                <label for="ssname_1" class="checkbox-label">
                                    10%<span>34</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="ssname_2">
                                <label for="ssname_2" class="checkbox-label">
                                    15% <span>71</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="ssname_3">
                                <label for="ssname_3" class="checkbox-label">
                                    20% <span>105</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="ssname_4">
                                <label for="ssname_4" class="checkbox-label">
                                    25% <span>2356</span>
                                </label>
                            </div>
                            <div class="form_rule">
                                <input type="checkbox" class="cheackbox" id="ssname_5">
                                <label for="ssname_5" class="checkbox-label">
                                    30% <span>2356</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </div>              
    </section>

    <section class="switch_filter">
        <div class="container"> 
            <div class="switch_filter_inner">
                <div class="switch_filter_inner-item">
                    <ul class="switch-menu">
                        <li class="menu-item active">
                            <a href="#">
                                Все
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                Моносортовые
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                Купажированные
                            </a>
                        </li>
                        <div class="indicator"></div>   
                    </ul>    
                </div>
                <div class="switch_filter_inner-item">
                    <ul class="switch-menu">
                        <li class="menu-item active">
                            <a href="#">
                                Все
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                Моносортовые
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                Купажированные
                            </a>
                        </li>
                        <div class="indicator"></div>   
                    </ul> 
                </div>
            </div>
        </div>
    </section> 

    <section class="switch_filter switch_filter_gray">
        <div class="container"> 
            <div class="switch_filter_inner">
                <div class="switch_filter_inner-item">
                    <ul class="switch-menu">
                        <li class="menu-item active">
                            <a href="#">
                                Нейтральные
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                Ароматные
                            </a>
                        </li>
                        <div class="indicator"></div>   
                    </ul>    
                </div>
                <div class="switch_filter_inner-item">
                    <ul class="switch-menu">
                        <li class="menu-item active">
                            <a href="#">
                                Сухие
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                Сладкие
                            </a>
                        </li>
                        <div class="indicator"></div>   
                    </ul> 
                </div>
                <div class="switch_filter_inner-item">
                    <ul class="switch-menu">
                        <li class="menu-item active">
                            <a href="#">
                                Легкие
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                Полнотелые
                            </a>
                        </li>
                        <div class="indicator"></div>   
                    </ul> 
                </div>
                <div class="switch_filter_inner-item">
                    <ul class="switch-menu">
                        <li class="menu-item active">
                            <a href="#">
                                Более кислотные
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                Менее кислотные
                            </a>
                        </li>
                        <div class="indicator"></div>   
                    </ul> 
                </div>
                <div class="switch_filter_inner-item">
                    <ul class="switch-menu">
                        <li class="menu-item active">
                            <a href="#">
                                Более игристое
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                Менее игристое 
                            </a>
                        </li>
                        <div class="indicator"></div>   
                    </ul> 
                </div>
            </div>
        </div>
    </section> 
    
    <section class="sort_product">
        <div class="container"> 
            <div class="sort_product_inner">
                <a href="#" class="active">по популярности</a>
                <a href="#">по цене</a>
                <a href="#">по убыванию</a>
                <a href="#">по рейтингу</a>
                <a href="#">по выгодности</a>
            </div>
        </div>        
    </section>    

    <section class="product_items">
        <div class="container"> 
            <div class="product_items_inner three_item">
                <?php include('components/cards/cartTypeThree.php'); ?>
                <?php include('components/cards/cartTypeThree.php'); ?>
            </div>
        </div>        
    </section>

    <section class="product_vine_short_information">
        <div class="container"> 
            <div class="product_vine_short_information_inner">
                Вопреки устоявшемуся мнению, родиной вина считается не Древняя Греция, а Грузия – там напиток начали делать гораздо раньше, чем в других странах. Первая же действующая винодельня была построена на территории современной Армении более 5000 лет назад. Археологам удалось обнаружить в ее стенах винный пресс, а также глиняные кувшины для ферментации вина. Цена на вино составляет 120 руб. за бутылку 0.5 л, в ассортименте представлены объемы от 0.1 до 15 л стоимостью от 81 до 6 336 092 рублей. Продажа осуществляется в розничных магазинах Декантер в Москве по адресам Пресненский Вал 44, Новая Басманная 31с1, Ленинский пр-т 66, Мастеркова 1 и Сущевский Вал 46с2 (склад), оплата наличными или банковской картой. Стоимость и наличие актуальны на 9:00 22.12.2023.
            </div>
        </div>        
    </section>

    <section class="product_items">
        <div class="container"> 
            <div class="product_items_inner three_item">
                <?php include('components/cards/cartTypeThree.php'); ?>
                <?php include('components/cards/cartTypeThree.php'); ?>
            </div>
        </div>        
    </section>
    <div class="container">
        <a href="#" class="coctails-content__more">Показать еще</a>
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
    <?php include('components/blog.php'); ?>
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
</div>    



<?php include('components/Footer.php'); ?>