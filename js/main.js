jQuery(function ($) {
    "use strict";
    
    /*  Scroll Up */

    $(window).on('scroll', function() {
        let scrollTop = $(window).scrollTop();
        if (scrollTop > 100) {
            $('.up_body').css({'display':'flex'});
        } else {
            $('.up_body').css({'display':'none'});
        }
    });
    $('.up_body').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 'slow'); 
    });

    /* 18+ */

    if (!localStorage.getItem('enter_window')) {
        $('.overlay, .popup.enter_window').fadeIn(500);
    }

    $('.exit_window').click(function (e) {
		e.preventDefault();
        $('.overlay').fadeOut(500);
        $('.popup').fadeOut(500);
        if($(this).parent().hasClass('enter_window')){
            localStorage.setItem('enter_window', 'true');
        }
	});
    $('.overlay').click(function (e) {
		e.preventDefault();
        $('.overlay').fadeOut(500);
        $('.popup, .category_window').fadeOut(500);
        if($('.cta-catalog').hasClass('active')){
            $('.cta-catalog').removeClass('active');
        }
	});
   
    /* Search */

    $('.header__inner-form .search').keyup(function (e) {
        e.preventDefault();
		let val = $(this).val();
        if(val.length > 0) {
            $('.header__find').fadeIn(500);
        } else {
            $('.header__find').fadeOut(500);
        }
	});

    /* Burger menu */


    $('.cta_menu').click(function (e) {
		e.preventDefault();
        $(this).toggleClass('active');
        var $menu = $(this).next('.pages_menu');
        $('.pages_menu').not($menu).fadeOut();
        $menu.fadeToggle();
	});

    $(document).on('click', function(e){
        if (!$(e.target).closest('.pages_menu, .cta_menu').length) {
            $('.pages_menu').fadeOut();
        }
    });

    /* Login & Register */
    
    $('.popup_open').click(function (e) {
		e.preventDefault();
        $('.pages_menu').fadeOut();
        $('.left_filter').fadeOut();
        let itemId = $(this).data('item');
        $(`.overlay, .popup.${itemId}_window`).fadeIn(500);
	});


    /* Show Password */

    $('.form_password_show').click(function (e) {
		e.preventDefault();
        $(this).toggleClass('show');
        var passwordField = $('.password');
        if ($(this).hasClass('show')) {
            passwordField.attr('type', 'text');
        } else {
            passwordField.attr('type', 'password');
        }
	});

    /* Catalog Menu */    
    $('.cta-catalog').click(function (e) {
		e.preventDefault();
        $(this).toggleClass('active');
        $('.overlay').fadeToggle(500);
        $('.category_window').fadeToggle(500);
        
    });


    $('.category_window_inner-navigation ul li a').hover(function (e) {
        $('.category_window_inner-navigation ul li a').removeClass('active');
        $(this).addClass('active');
        let catID = $(this).data('cat');
        $('.category_window_inner-menu_section').removeClass('active');
        $(`.show_menu_section_${catID}`).addClass('active');
	});

    $('.category_show_more').click(function (e) {
		e.preventDefault();
        $(this).toggleClass('active');
        $(this).parent().parent().find('.hide_menu_item').fadeToggle(500);
       
	});

    $('.menu-product_progress_item').click(function() {
        $(this).addClass('active').removeClass('preactive');
        $(this).prevAll().addClass('preactive').removeClass('active');
        $(this).nextAll().removeClass('active preactive');
    });


    // Banner Home page
    let $owlFullWidth = $('.owl-fullWidth');

    $owlFullWidth.owlCarousel({
        autoplay:true,
        autoplayTimeout:10000,
        autoplaySpeed: 500,
        smartSpeed:500,
        loop:true,
        margin:10,
        nav:true,
        dots:true,
        items:1,
        navText: ['<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/></svg>','<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/></svg>'],
    });

    // Category Home page

    $('.section_category_tabs-item').click(function (e) {
		e.preventDefault();
		$(this).parent().find('.section_category_tabs-item').removeClass('active');
        $(this).addClass('active');
        let catId = $(this).data('categoty');
        $(this).parent().parent().find('.show_tabs').removeClass('active');
        $(this).parent().parent().find(`.show_tab_${catId}`).addClass('active');

	});

    $('.section_category_sub__tabs-item').click(function (e) {
		e.preventDefault();
		$(this).parent().find('.section_category_sub__tabs-item').removeClass('active');
        $(this).addClass('active');
        let brandId = $(this).data('brand');
        $(this).parent().parent().find('.show_brands').removeClass('active');
        $(this).parent().parent().find(`.show_brands_${brandId}`).addClass('active');
	});



    let $owlCategories = $('.owl-categories');

    $owlCategories.owlCarousel({
        autoplay:true,
        autoplayTimeout:10000,
        autoplaySpeed: 500,
        smartSpeed:500,
        loop:true,
        margin:25,
        nav:true,
        dots:false,
        slideBy:3,
        navText: ['<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/></svg>','<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/></svg>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            960:{
                items:7,
                margin:10,
            },
            1200:{
                items:9,
                margin:15,
            },
            1320:{
                items:9,
                margin:25,
            }
        }
    });

   

    /* Brand */
    $('.popular__brand__tabs-item').click(function (e) {
		e.preventDefault();
		$(this).parent().find('.popular__brand__tabs-item').removeClass('active');
        $(this).addClass('active');
        let brandId = $(this).data('brand');
        $('.show_brand').removeClass('active');
        $(`.show_brand_${brandId}`).addClass('active');
	});

    /* Slide Menu */

    
    $('.switch-menu li a').click(function (e) {
		e.preventDefault();
		$(this).parent().parent().find('.active').removeClass('active');
        $(this).parent().addClass('active');
        
	});

    // document.querySelectorAll('.switch-menu').forEach(menu => {
    //     let navItems = menu.querySelectorAll('.menu-item');
    //     let indicator = menu.querySelector('.indicator');
    //     let left_position = 0;
    //     let activeIndex = 0;
    
    //     navItems.forEach((item, index) => {
    //         item.addEventListener('mouseenter', () => {
    //             updateIndicator(index);
    //             navItems.forEach(navItem => {
    //                 navItem.classList.remove('active');
    //             });
    //          });
    //         item.addEventListener('mouseleave', () => {
    //             updateIndicator(activeIndex);
    //             navItems[activeIndex].classList.add('active');
    //         });
    //         item.addEventListener('click', (e) => {
    //             e.preventDefault();
    //             updateIndicator(index);
    //             setActiveNavItem(index);
    //             activeIndex = index;
    //         });

    //     });
    //     window.addEventListener('load', () => {
    //         updateIndicator(activeIndex);
    //     });
    //     window.addEventListener('resize', () => {
    //         updateIndicator(activeIndex);
    //     });

    //     function updateIndicator(index) {
    //         setIndicatorWidth(navItems[index]);
    //         setIndicatorPosition(index);
    //     }
    
    //     function setIndicatorWidth(item) {
    //         indicator.style.width = item.clientWidth + "px";
    //     }
    
    //     function setIndicatorPosition(index) {
    //         left_position = 0;
    //         for (let i = 0; i < index; i++) {
    //             left_position += navItems[i].clientWidth;
    //         }
    //         indicator.style.left = left_position + "px";
    //     }
    
    //     function setActiveNavItem(index) {
    //         navItems.forEach((item, i) => {
    //             item.classList.remove('active');
    //             if (i === index) {
    //                 item.classList.add('active');
    //             }
    //         });
    //     }
    // });
    
    /* Sort */


    $('.sort_product_inner a').click(function (e) {
		e.preventDefault();
        $(this).parent().find('a').removeClass('active');
        $(this).addClass('active');
	});

    /* Slide Product */

    let $owlProduct = $('.owl-product');

    $owlProduct.owlCarousel({
        autoplay:true,
        autoplayTimeout:10000,
        autoplaySpeed: 500,
        smartSpeed:500,
        loop:true,
        margin:25,
        nav:true,
        dots:false,
        slideBy:3,
        navText: ['<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/></svg>','<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/></svg>'],
        responsive:{
            0:{
                items:1
            },
            960:{
                items:4,
                margin:15,
            },
            1200:{
                items:5,
                margin:30,
            },
        }
    });

    /* Filter Price */

    $('.horizontal_filter_inner-item').click(function (e) {
       
        $('.horizontal_filter_inner-item, .sidebar_tab').removeClass('active');
        $(this).toggleClass('active');
        $(this).find('.sidebar_tab').addClass('active');
        
    });

    $(document).on('click', function(e){
        if (!$(e.target).closest('.horizontal_filter_inner-item, .horizontal_filter_inner-item .sidebar_tab').length) {
            $('.horizontal_filter_inner-item .sidebar_tab').removeClass('active');
        }
    });


    /* Sidebar  Price slider */
   
        $( "#price-slider" ).slider({
        range: true,
        min: 0,
        max: 1000,
        values: [ 0, 1000 ],
        slide: function( event, ui ) {
            console.log(event)
            $( "#min-price" ).val( ui.values[0] );
            $( "#max-price" ).val( ui.values[1] );
        }
        });
        $( "#min-price" ).val( $( "#price-slider" ).slider( "values", 0 ) );
        $( "#max-price" ).val( $( "#price-slider" ).slider( "values", 1 ) );

        $('.product_sidebar .sidebar_tab h3').click(function (e) {
            e.preventDefault();
            $(this).toggleClass('active');
            $(this).parent().toggleClass('close');
            
        });

        $(".price-ragnger-0").slider({
            range: "min",
            value: 5, 
            min: 0,
            max: 10,
            step: 0.1,
            slide: function( event, ui ) {
                $("#min-price-0").html(ui.value.toFixed(1));
            }
        });
        if($(".price-ragnger-0").length) {
            $("#min-price-0").html($(".price-ragnger-0").slider("value").toFixed(1));
        }
        
        $(".price-ragnger-1").slider({
            range: "min",
            value: 5.5, 
            min: 0,
            max: 10,
            step: 0.1,
            slide: function( event, ui ) {
                $("#min-price-1").html(ui.value.toFixed(1));
            }
        });
        if($(".price-ragnger-1").length) {
            $("#min-price-1").html($(".price-ragnger-1").slider("value").toFixed(1));
        }
        $(".price-ragnger-2").slider({
            range: "min",
            value: 9, 
            min: 0,
            max: 10,
            step: 0.1,
            slide: function( event, ui ) {
                $("#min-price-2").html(ui.value.toFixed(1));
            }
        });
        if($(".price-ragnger-0").length) {
            $("#min-price-2").html($(".price-ragnger-2").slider("value").toFixed(1));
        }
        $(".price-ragnger-3").slider({
            range: "min",
            value: 6.7, 
            min: 0,
            max: 10,
            step: 0.1,
            slide: function( event, ui ) {
                $("#min-price-3").html(ui.value.toFixed(1));
            }
        });
        if($(".price-ragnger-3").length) {
            $("#min-price-3").html($(".price-ragnger-3").slider("value").toFixed(1));
        }
        $(".price-ragnger-4").slider({
            range: "min",
            value: 2, 
            min: 0,
            max: 10,
            step: 0.1,
            slide: function( event, ui ) {
                $("#min-price-4").html(ui.value.toFixed(1));
            }
        });
        if($(".price-ragnger-4").length) {
            $("#min-price-4").html($(".price-ragnger-4").slider("value").toFixed(1));
        }
        $('.product_sidebar .sidebar_tab h3').click(function (e) {
            e.preventDefault();
            $(this).toggleClass('active');
            $(this).parent().toggleClass('close');
            
        });

        $('.left_filter .sidebar_tab h3').click(function (e) {
            e.preventDefault();
            $(this).toggleClass('active');
            $(this).parent().toggleClass('close');
            
        });

    /* Product Option */    

        $('.product_options_item').click(function (e) {
            e.preventDefault();
            if(!$(this).hasClass('active')){
                $(this).parent().find('.product_options_item').removeClass('active');
                $(this).addClass('active');
            }
            
        });

    /* ToolTip */    
    $('.tooltip').hover(function (e) {
        e.preventDefault();
        $(this).parent().parent().css({'z-index':'3'});
        
    });

    
    /* Card Count */


    $('.card_count_minus').click(function(){
        let count = parseInt($(this).next('.card_count_count').find('span').text().trim());
        if (count > 1) {
            count--;
        }
        $(this).next('.card_count_count').find('span').text(count);
    });
    

    $('.card_count_plus').click(function(){
        let count = parseInt($(this).prev('.card_count_count').find('span').text().trim());
        count++;
        
        $(this).prev('.card_count_count').find('span').text(count);
    });
    

    $('.product_full_description_content_text_show').click(function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $('.show_opacity').toggleClass('active');
        $('.product_text_show').fadeToggle();
    });
   
  

    /* Review */

    $('.show_all_review a').click(function(e){
        e.preventDefault();
        $(this).fadeOut();
        $('.hide_review').fadeToggle();
       
    });

    $('.reviews_headline_item_stars .icon').click(function(e){
        e.preventDefault();
        $(this).toggleClass('full');
 
    });
    
    /* Show product Scroll */

    $(window).scroll(function() {
        if ($(window).scrollTop() > 700) {
            $('.scroll__show_product').fadeIn();
        } else {
            $('.scroll__show_product').fadeOut();
        }
    });


    /* Mini Cart */

    $('.cart_mini_minus').click(function(){
        let count = parseInt($('.mini_count').val());
        if (count > 1) {
            count--;
            $('.mini_count').val(count);
        }
    });

    $('.cart_mini_plus').click(function(){
        let count = parseInt($('.mini_count').val());
        count++;
        $('.mini_count').val(count);
    });

    /*  Pick up */
    let $owlTaste = $('.owl-taste-big');

    $owlTaste.owlCarousel({
        autoplay:false,
        autoplayTimeout:10000,
        autoplaySpeed: 500,
        smartSpeed:500,
        loop:false,
        margin:15,
        nav:true,
        dots:false,
        slideBy:3,
        navText: ['<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/></svg>','<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/></svg>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            960:{
                items:7,
            },
            1200:{
                items:9,
            },
            1320:{
                items:11,
            }
        }
    });

    $('.pickup_window .owl-taste .item a').click(function(e){
        e.preventDefault();
        $('.pickup_window .owl-taste .item').removeClass('show_active');
        $(this).parent().addClass('show_active');
        let tab = $(this).data('tab');
        $('.pickup_window .taste_item').removeClass('active');
        $(`.pickup_window .${tab}`).addClass('active');
    });

    
    let $owlTasteSmaller = $('.owl-taste-smaller');

    $owlTasteSmaller.owlCarousel({
        autoplay:false,
        autoplayTimeout:10000,
        autoplaySpeed: 500,
        smartSpeed:500,
        loop:false,
        margin:15,
        nav:true,
        dots:false,
        slideBy:3,
        navText: ['<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/></svg>','<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/></svg>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            960:{
                items:7,
            },
            1200:{
                items:9,
            },
        }
    });

    $('.product_full_description_content .owl-taste .item a').click(function(e){
        e.preventDefault();
        $('.product_full_description_content .owl-taste .item').removeClass('show_active');
        $(this).parent().addClass('show_active');
        let tab = $(this).data('tab');
        $('.product_full_description_content .taste_item').removeClass('active');
        $(`.product_full_description_content .${tab}`).addClass('active');
    });


    $(".rewiews-ragnger-0").slider({
        range: "min",
        value: 5, 
        min: 0,
        max: 10,
        step: 0.1,
        slide: function( event, ui ) {
            $("#min-rewiews-0").html(ui.value.toFixed(1));
        }
    });
    if ($(".rewiews-ragnger-0").length) {
        $("#min-rewiews-0").html($(".rewiews-ragnger-0").slider("value").toFixed(1));
    }    
    
    $(".rewiews-ragnger-1").slider({
        range: "min",
        value: 5.5, 
        min: 0,
        max: 10,
        step: 0.1,
        slide: function( event, ui ) {
            $("#min-rewiews-1").html(ui.value.toFixed(1));
        }
    });
    if ($(".rewiews-ragnger-1").length) {
        $("#min-rewiews-1").html($(".rewiews-ragnger-1").slider("value").toFixed(1));
    }
    $(".rewiews-ragnger-2").slider({
        range: "min",
        value: 9, 
        min: 0,
        max: 10,
        step: 0.1,
        slide: function( event, ui ) {
            $("#min-rewiews-2").html(ui.value.toFixed(1));
        }
    });
    if ($(".rewiews-ragnger-2").length) {
        $("#min-rewiews-2").html($(".rewiews-ragnger-2").slider("value").toFixed(1));
    }
    $(".rewiews-ragnger-3").slider({
        range: "min",
        value: 6.7, 
        min: 0,
        max: 10,
        step: 0.1,
        slide: function( event, ui ) {
            $("#min-rewiews-3").html(ui.value.toFixed(1));
        }
    });
    if ($(".rewiews-ragnger-4").length) {
        $("#min-rewiews-3").html($(".rewiews-ragnger-3").slider("value").toFixed(1));
    }

    $(".rewiews-ragnger-4").slider({
        range: "min",
        value: 2, 
        min: 0,
        max: 10,
        step: 0.1,
        slide: function( event, ui ) {
            $("#min-rewiews-4").html(ui.value.toFixed(1));
        }
    });
    
    if ($(".rewiews-ragnger-4").length) {
        $("#min-rewiews-4").html($(".rewiews-ragnger-4").slider("value").toFixed(1));
    }


    $(".point-ragnger-1").slider({
        range: "min",
        value: 600, 
        min: 0,
        max: 1470,
        slide: function( event, ui ) {
            $("#min-point-1").html(ui.value);
        }
    });
    if($(".point-ragnger-1").length) {
        $("#min-point-1").html($(".point-ragnger-1").slider("value"));
    }


    $('.product_sidebar .sidebar_tab h3').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).parent().toggleClass('close');
        
    });

    $('.rewiews_window_content .owl-taste .item a').click(function(e){
        e.preventDefault();
        $('.rewiews_window_content .owl-taste .item').removeClass('show_active');
        $(this).parent().addClass('show_active');
        let tab = $(this).data('tab');
        $('.rewiews_window_content .taste_item').removeClass('active');
        $(`.rewiews_window_content .${tab}`).addClass('active');
    });

    $('.order_paymets_delivery .radio input').click(function(e){
        
        if ($('#radio-4').is(':checked')) {
            $('.order_paymets_street').fadeIn();
        } else {
            $('.order_paymets_street').fadeOut();
        }
        if ($('#radio-5').is(':checked')) {
            $('.order_paymets_courier').css({'display':'flex'});
        } else {
            $('.order_paymets_courier').css({'display':'none'});
        }
        
    });


    /* Pick Up */

    $('.pick_up_data h2').click(function(e){
        e.preventDefault();
        $(this).parent().toggleClass('open');
        
    });

    $('.drink-label').click(function(){
        let color = $(this).data('color');
        $('.pickup_1_color').css({'display': 'none'});
        $(color).css({'display': 'flex'});
    });

    $('.drinkColor-label').click(function(){
        $('.pick_up_data_1').addClass('open');
    });

    $('.region-label').click(function(){
        let region = $(this).data('region');
        if ($(this).parent().find('.cheackbox').is(':checked')) {
            $(region).removeClass('active');
        } else {
            $(region).addClass('active');
        }
        
        if($('.pickup_region .pickup_drink_item.active').length > 0) {
            $('.region_headline').addClass('pickup_region_headline')
        } else {
            $('.region_headline').removeClass('pickup_region_headline')
        }
       
    });

    $('.drinkregion-label').click(function(){
        $('.pick_up_data_2').addClass('open');
    });

    $('.eat-label').click(function(){
        $('.pick_up_data_3').addClass('open');
    });

     $('.pick_up_data_content .owl-taste .item a').click(function(e){
        e.preventDefault();
        $('.pick_up_data_content .owl-taste .item').removeClass('show_active');
        $(this).parent().addClass('show_active');
        let tab = $(this).data('tab');
        $('.pick_up_data_content .taste_item').removeClass('active');
        $(`.pick_up_data_content .${tab}`).addClass('active');
    });


    $('.up_filter').click(function (e) {
		e.preventDefault();
        $('.left_filter').fadeIn();
	});

    $('.close_filter').click(function (e) {
		e.preventDefault();
        $('.left_filter').fadeOut();
	});


    /* Gift */

    $('.gift_box').click(function(e){
        e.preventDefault();
        $(this).fadeOut();
        $('.gist_section').fadeIn();
    });

    /* Select */
    $('.select').niceSelect();

    $('.zooming').extm({
        squareOverlay:true,
        position:'right',
        rightPad: 15,
    });
});

