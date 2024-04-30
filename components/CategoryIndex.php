<section class="category__section pt-60">
    <div class="container">
        <div class="category__section_inner">
            <div class="section_category_tabs">
                <div class="section_category_tabs-item active" data-categoty="1">
                    <span>Категории в Вине</span>
                </div>
                <div class="section_category_tabs-item" data-categoty="2">
                    <span>Категории в Шампанском</span>
                </div>
                <div class="section_category_tabs-item" data-categoty="3">
                    <span>Категории в Виски</span>
                </div>
                <div class="section_category_tabs-item" data-categoty="4">
                    <span>Категории в Коньяке</span>
                </div>
            </div>

            <?php for($k = 1; $k <= 4; $k++) { ?>
                <div class="show_tabs show_tab_<?php echo $k; if($k==1) {echo ' active'; }?>">
                    <div class="section_category_sub__tabs">
                        <div class="section_category_sub__tabs-item active">
                            Происхождение <?php echo $k;?>
                        </div>
                        <div class="section_category_sub__tabs-item">
                            Винные регионы <?php echo $k;?>
                        </div>
                        <div class="section_category_sub__tabs-item">
                            Красное вино <?php echo $k;?>
                        </div>
                        <div class="section_category_sub__tabs-item">
                            Белое вино <?php echo $k;?>
                        </div>
                        <div class="section_category_sub__tabs-item">
                            Розовое вино <?php echo $k;?>
                        </div>
                        <div class="section_category_sub__tabs-item">
                            Бренды <?php echo $k;?>
                        </div>
                    </div>

                    <div class="section_category_brands">
                        <div class="owl-categories owl-carousel owl-theme">
                            <?php $j = 0;
                                for($i = 1; $i <= 18; $i++) { 
                                    $j++;
                            ?>
                                <div class="item">
                                    <div class="category_brands_thumbnuil">
                                        <img src="img/categories/cat_<?php echo $j; ?>.png">
                                    </div>
                                    <h3>
                                        Бордо
                                    </h3>
                                    <p>
                                        Французские вина
                                    </p>
                                </div>
                            <?php 
                                if ($j == 9) { $j = 1; }
                            } ?>   
                            
                        </div>
                    </div>    
                </div> 
            <?php } ?>

        </div>

    </div>
</section>    