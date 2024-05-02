jQuery(function ($) {
    "use strict";

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
		$('.section_category_tabs-item').removeClass('active');
        $(this).addClass('active');
        let catId = $(this).data('categoty');
        $('.show_tabs').removeClass('active');
        $(`.show_tab_${catId}`).addClass('active');

	});

    $('.section_category_sub__tabs-item').click(function (e) {
		e.preventDefault();
		$(this).parent().find('.section_category_sub__tabs-item').removeClass('active');
        $(this).addClass('active');
        let brandId = $(this).data('brand');
        $('.show_brands').removeClass('active');
        $(`.show_brands_${brandId}`).addClass('active');

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


});