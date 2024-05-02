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
                        <div class="section_category_sub__tabs-item active" data-brand="1">
                            Происхождение <?php echo $k;?>
                        </div>
                        <div class="section_category_sub__tabs-item" data-brand="2">
                            Винные регионы <?php echo $k;?>
                        </div>
                        <div class="section_category_sub__tabs-item" data-brand="3">
                            Красное вино <?php echo $k;?>
                        </div>
                        <div class="section_category_sub__tabs-item" data-brand="4">
                            Белое вино <?php echo $k;?>
                        </div>
                        <div class="section_category_sub__tabs-item" data-brand="5">
                            Розовое вино <?php echo $k;?>
                        </div>
                        <div class="section_category_sub__tabs-item" data-brand="6">
                            Бренды <?php echo $k;?>
                        </div>
                    </div>
                    <?php for($n = 1; $n <= 6; $n++) { ?>
                        <div class="section_category_brands show_brands show_brands_<?php echo $n; if($n==1) {echo ' active'; }?> ">
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
                                            Бордо <?php echo $i;?>
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
                    <?php } ?>  
                </div> 
            <?php } ?>

        </div>

    </div>
</section>    