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
						Политика конфиденциальности
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="pick_up_description pt-60">
	<div class="container">
        <h1>
            Мы поможем вам подобрать напиток
        </h1>
        <p>
            С помощью нашего электронного сомелье вы сможете подобрать напиток из ассортимента, узнать о его свойствах<br/> 
            и характеристиках и получить рекомендации перед покупкой.
        </p>
    </div>
</section>



<section class="pick_up pt-60">
	<div class="container">
        <div class="pick_up_data">
            <h2>
                <span>Выберите напиток</span> 
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.6695 8.99997C20.6695 9.18997 20.5995 9.37997 20.4495 9.52997L13.9295 16.05C12.8695 17.11 11.1295 17.11 10.0695 16.05L3.54953 9.52997C3.25953 9.23997 3.25953 8.75997 3.54953 8.46997C3.83953 8.17997 4.31953 8.17997 4.60953 8.46997L11.1295 14.99C11.6095 15.47 12.3895 15.47 12.8695 14.99L19.3895 8.46997C19.6795 8.17997 20.1595 8.17997 20.4495 8.46997C20.5895 8.61997 20.6695 8.80997 20.6695 8.99997Z" fill="#292D32"/>
                </svg>
            </h2>
            <div class="pick_up_data_content">
                <div class="pickup_drink">
                    <?php for($i = 0; $i< 6; $i++) { ?>
                    <div class="pickup_drink_item">
                        <div class="radio_pick">
                            <input id="drink-<?php echo $i;?>" name="drink" type="radio">
                            <label data-color=".pickup_color_<?php echo $i; ?>" for="drink-<?php echo $i;?>" class="drink-label radio-label">
                                <img src="img/pick_<?php echo $i;?>.png" alt="">
                                <span></span>Самовывоз
                            </label>
                        </div>  
                    </div>   
                    <?php } ?>
                </div>
                
                <?php for($k = 0; $k< 6; $k++) { ?>
                    <h3 class="pickup_color pickup_1_color pickup_color_<?php echo $k; ?>">
                        Выберите цвет
                    </h3>
                    <div class="pickup_drink pickup_color pickup_color_<?php echo $k; ?>">
                        <?php for($j = 0; $j< 6; $j++) { ?>
                        <div class="pickup_drink_item">
                            <div class="radio_pick">
                                <input id="drinkColor-<?php echo $k; echo $j;?>" name="drinkColor-<?php echo $k; ?>" type="radio">
                                <label for="drinkColor-<?php echo $k; echo $j; ?>" class="drinkColor-label radio-label">
                                    <img src="img/pick_<?php echo $j;?>.png" alt="">
                                    <span></span>Красное <?php echo $k; ?>
                                </label>
                            </div>  
                        </div>   
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        
        <div class="pick_up_data pick_up_data_1">
            <h2>
                <span>Страна произростания</span> 
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.6695 8.99997C20.6695 9.18997 20.5995 9.37997 20.4495 9.52997L13.9295 16.05C12.8695 17.11 11.1295 17.11 10.0695 16.05L3.54953 9.52997C3.25953 9.23997 3.25953 8.75997 3.54953 8.46997C3.83953 8.17997 4.31953 8.17997 4.60953 8.46997L11.1295 14.99C11.6095 15.47 12.3895 15.47 12.8695 14.99L19.3895 8.46997C19.6795 8.17997 20.1595 8.17997 20.4495 8.46997C20.5895 8.61997 20.6695 8.80997 20.6695 8.99997Z" fill="#292D32"/>
                </svg>
            </h2>
            <div class="pick_up_data_content">
                <div class="pickup_city">
                    <?php for($i = 0; $i< 6; $i++) { ?>
                        <div class="pickup_city_item">
                            <div class="check_pick">
                                <input type="checkbox" class="cheackbox" id="checkboxCity_<?php echo $i; ?>">
                                <label for="checkboxCity_<?php echo $i; ?>" class="region-label checkbox-label" data-region=".region_<?php echo $i; ?>">
                                    <img src="img/country_<?php echo $i; ?>.png" alt="">
                                    <span></span>Италия <?php echo $i; ?>         

                                </label>
                            </div>  
                        </div>
                    <?php } ?>
                </div>     
                
                <h3 class="region_headline">
                    Регион произростания
                </h3>
                <div class="pickup_drink pickup_color pickup_region">
                   
                    <div class="pickup_drink_item region_0">
                        <div class="radio_pick">
                            <input id="drinkregion-1" name="drinkregion-1" type="radio">
                            <label for="drinkregion-1" class="drinkregion-label radio-label">
                                <img src="img/pick_1.png" alt="">
                                <span></span>Бордо
                            </label>
                        </div>
                    </div>    
                    <div class="pickup_drink_item region_0">   
                        <div class="radio_pick">
                            <input id="drinkregion-2" name="drinkregion-1" type="radio">
                            <label for="drinkregion-2" class="drinkregion-label radio-label">
                                <img src="img/pick_2.png" alt="">
                                <span></span>Бургундия
                            </label>
                        </div>
                    </div>     
                    <div class="pickup_drink_item region_1">    
                        <div class="radio_pick">
                            <input id="drinkregion-3" name="drinkregion-1" type="radio">
                            <label for="drinkregion-3" class="drinkregion-label radio-label">
                                <img src="img/pick_3.png" alt="">
                                <span></span>Долина Роны
                            </label>
                        </div> 
                    </div>    
                    <div class="pickup_drink_item region_2">   
                        <div class="radio_pick">
                            <input id="drinkregion-4" name="drinkregion-1" type="radio">
                            <label for="drinkregion-4" class="drinkregion-label radio-label">
                                <img src="img/pick_4.png" alt="">
                                <span></span>Бордо
                            </label>
                        </div> 
                    </div>    
                    <div class="pickup_drink_item region_3">   
                        <div class="radio_pick">
                            <input id="drinkregion-5" name="drinkregion-1" type="radio">
                            <label for="drinkregion-5" class="drinkregion-label radio-label">
                                <img src="img/pick_5.png" alt="">
                                <span></span>Бордо1
                            </label>
                        </div>  
                    </div>   
                    <div class="pickup_drink_item region_4">   
                        <div class="radio_pick">
                            <input id="drinkregion-6" name="drinkregion-1" type="radio">
                            <label for="drinkregion-6" class="drinkregion-label radio-label">
                                <img src="img/pick_5.png" alt="">
                                <span></span>Бордо2
                            </label>
                        </div>  
                    </div> 
                    <div class="pickup_drink_item region_5">   
                        <div class="radio_pick">
                            <input id="drinkregion-7" name="drinkregion-1" type="radio">
                            <label for="drinkregion-7" class="drinkregion-label radio-label">
                                <img src="img/pick_5.png" alt="">
                                <span></span>Бордо3
                            </label>
                        </div>  
                    </div>
                </div>
                         
            </div>
        </div>

        <div class="pick_up_data pick_up_data_2">
            <h2>
                <span>Выбери гастрономическое сопровождение</span> 
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.6695 8.99997C20.6695 9.18997 20.5995 9.37997 20.4495 9.52997L13.9295 16.05C12.8695 17.11 11.1295 17.11 10.0695 16.05L3.54953 9.52997C3.25953 9.23997 3.25953 8.75997 3.54953 8.46997C3.83953 8.17997 4.31953 8.17997 4.60953 8.46997L11.1295 14.99C11.6095 15.47 12.3895 15.47 12.8695 14.99L19.3895 8.46997C19.6795 8.17997 20.1595 8.17997 20.4495 8.46997C20.5895 8.61997 20.6695 8.80997 20.6695 8.99997Z" fill="#292D32"/>
                </svg>
            </h2>
            <div class="pick_up_data_content">
                <div class="pickup_city">
                    <?php for($i = 0; $i< 6; $i++) { ?>
                        <div class="pickup_city_item">
                            <div class="check_pick">
                                <input type="checkbox" class="cheackbox" id="checkboxEat_<?php echo $i; ?>">
                                <label for="checkboxEat_<?php echo $i; ?>" class="eat-label checkbox-label">
                                    <img src="img/pick_<?php echo $i; ?>.png" alt="">
                                    <span></span>К ужину <?php echo $i; ?>         

                                </label>
                            </div>  
                        </div>
                    <?php } ?>
                </div>
            </div>  
        </div>

        <div class="pick_up_data pick_up_data_3">
            <h2>
                <span>Выбери вкус напитка (вкусовые группы и вкусы):</span> 
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.6695 8.99997C20.6695 9.18997 20.5995 9.37997 20.4495 9.52997L13.9295 16.05C12.8695 17.11 11.1295 17.11 10.0695 16.05L3.54953 9.52997C3.25953 9.23997 3.25953 8.75997 3.54953 8.46997C3.83953 8.17997 4.31953 8.17997 4.60953 8.46997L11.1295 14.99C11.6095 15.47 12.3895 15.47 12.8695 14.99L19.3895 8.46997C19.6795 8.17997 20.1595 8.17997 20.4495 8.46997C20.5895 8.61997 20.6695 8.80997 20.6695 8.99997Z" fill="#292D32"/>
                </svg>
            </h2>
            <div class="pick_up_data_content">
                <div class="owl-taste owl-taste-big owl-carousel owl-theme">
                    <?php $p = 1; for($m = 0; $m < 12; $m++) { $p++;?>
                    <div class="item <?php if($m == 3) { echo 'show_active'; } ?>">
                        <a href="#" data-tab="taste_item-<?php echo $m; ?>">
                            <img src="img/grenash_<?php echo $p; ?>.png" alt="">
                            <span>Малина</span>
                        </a>
                    </div>
                    <?php
                        if($k == 10) { $k = 1;}
                    } ?>
                    
                </div>   
                <?php for($c = 0; $c < 12; $c++) { ?>
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
        </div>

        <div class="pick_up_data open">
            <h2>
                <span>Выбери параметры напитка (шкалы):</span> 
            </h2>
            <div class="pick_up_data_content">
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

        </div>
    </div>
</section>

<?php include('components/Footer.php'); ?>