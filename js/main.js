jQuery(function ($) {
    "use strict";
    
    /* 18+ */

    if (!localStorage.getItem('enter_window')) {
        $('.overlay, .popup.enter_window').fadeIn(500);
    }

    $('.exit_window').click(function (e) {
		e.preventDefault();
        $('.overlay').fadeOut(500);
        $(this).parent().fadeOut(500);
        if($(this).parent().hasClass('enter_window')){
            localStorage.setItem('enter_window', 'true');
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

    
    // Banner Home page
    let $owlFullWidth = $('.owl-fullWidth');

    $owlFullWidth.owlCarousel({
        autoplay:true,
        autoplayTimeout:10000,
        autoplaySpeed: 1000,
        smartSpeed:1000,
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
        autoplaySpeed: 1000,
        smartSpeed:1000,
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

});