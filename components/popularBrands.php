<section class="popular__brand pt-60">
    <div class="container">
        <div class="popular__brand_inner">
            <h2 class="section_headline">
                Популярные брены
            </h2>
            <div class="popular__brand__tabs">
                <div class="popular__brand__tabs-item active" data-brand="1">
                    Виски
                </div>
                <div class="popular__brand__tabs-item" data-brand="2">
                    Коньяк
                </div>
                <div class="popular__brand__tabs-item" data-brand="3">
                    Шампанское
                </div>
                <div class="popular__brand__tabs-item" data-brand="4">
                    Вино
                </div>
                <div class="popular__brand__tabs-item" data-brand="5">
                    Водка
                </div>
                <div class="popular__brand__tabs-item" data-brand="6">
                    Ром
                </div>
                <div class="popular__brand__tabs-item" data-brand="7">
                    Другие
                </div>
            </div>
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