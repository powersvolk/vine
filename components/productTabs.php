<section class="category__section pt-60">
    <div class="container">
        <div class="category__section_inner">
            <div class="section_category_tabs">
                <div class="section_category_tabs-item active" data-categoty="1">
                    <span>Мы рекомендуем</span>
                </div>
                <div class="section_category_tabs-item" data-categoty="2">
                    <span>Новинки</span>
                </div>
                <div class="section_category_tabs-item" data-categoty="3">
                    <span>Акции</span>
                </div>
            </div>

            <?php for($k = 1; $k <= 4; $k++) { ?>
                <div class="show_tabs show_tab_<?php echo $k; if($k==1) {echo ' active'; }?>">
                    <div class="section_category_sub__tabs">
                        <div class="section_category_sub__tabs-item active" data-brand="1">
                            Красные итальянские вина
                        </div>
                        <div class="section_category_sub__tabs-item" data-brand="2">
                            Красные французские вина
                        </div>
                        <div class="section_category_sub__tabs-item" data-brand="3">
                            Белые итальянские вина
                        </div>
                        <div class="section_category_sub__tabs-item" data-brand="4">
                            Шампанское
                        </div>
                        <div class="section_category_sub__tabs-item" data-brand="5">
                            Виски
                        </div>
                        <div class="section_category_sub__tabs-item" data-brand="6">
                            Коньяк
                        </div>
                    </div>
                    <?php for($n = 1; $n <= 6; $n++) { ?>
                        <div class="section_category_brands show_brands show_brands_<?php echo $n; if($n==1) {echo ' active'; }?> ">
                            <div class="cards_section four_item">
                                <?php include('components/cards/cartTypeOne.php'); ?>
                                <?php include('components/cards/cartTypeOne.php'); ?>
                                <?php include('components/cards/cartTypeOne.php'); ?>
                                <?php include('components/cards/cartTypeOne.php'); ?>
                            </div>    
                        </div> 
                    <?php } ?>  
                    
                </div> 
            <?php } ?>

        </div>

    </div>
</section>    
