<section class="category__section pt-60">
    <div class="container">
        <div class="category__section_inner">
            <h2 class="section_headline">
                Подборки
            </h2>
            <div class="show_tabs active">
                <div class="section_category_sub__tabs">
                    <div class="section_category_sub__tabs-item active" data-brand="1">
                        Вино
                    </div>
                    <div class="section_category_sub__tabs-item" data-brand="2">
                        Шампанское
                    </div>
                    <div class="section_category_sub__tabs-item" data-brand="3">
                        Виски
                    </div>
                    <div class="section_category_sub__tabs-item" data-brand="4">
                        Коньяк
                    </div>
                    <div class="section_category_sub__tabs-item" data-brand="5">
                        Крепкие напитки
                    </div>
                    <div class="section_category_sub__tabs-item" data-brand="6">
                        Пиво
                    </div>
                </div>
                <?php for($n = 1; $n <= 6; $n++) { ?>
                    <div class="section_category_brands show_brands show_brands_<?php echo $n; if($n==1) {echo ' active'; }?> ">
                        <div class="cards_section four_item">
                            <?php include('components/cards/cartTypeTwo.php'); ?>
                            <?php include('components/cards/cartTypeTwo.php'); ?>
                            <?php include('components/cards/cartTypeTwo.php'); ?>
                            <?php include('components/cards/cartTypeTwo.php'); ?>
                        </div>    
                    </div> 
                <?php } ?>  
                
            </div> 
        </div>
    </div>
</section>    
