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

    /* Slide Menu */

    document.querySelectorAll('.switch-menu').forEach(menu => {
        let navItems = menu.querySelectorAll('.menu-item');
        let indicator = menu.querySelector('.indicator');
        let left_position = 0;
        let activeIndex = 0;
    
        navItems.forEach((item, index) => {
            item.addEventListener('mouseenter', () => {
                updateIndicator(index);
                navItems.forEach(navItem => {
                    navItem.classList.remove('active');
                });
             });
            item.addEventListener('mouseleave', () => {
                updateIndicator(activeIndex);
                navItems[activeIndex].classList.add('active');
            });
            item.addEventListener('click', (e) => {
                e.preventDefault();
                updateIndicator(index);
                setActiveNavItem(index);
                activeIndex = index;
            });

        });
        window.addEventListener('load', () => {
            updateIndicator(activeIndex);
        });
        window.addEventListener('resize', () => {
            updateIndicator(activeIndex);
        });

        function updateIndicator(index) {
            setIndicatorWidth(navItems[index]);
            setIndicatorPosition(index);
        }
    
        function setIndicatorWidth(item) {
            indicator.style.width = item.clientWidth + "px";
        }
    
        function setIndicatorPosition(index) {
            left_position = 0;
            for (let i = 0; i < index; i++) {
                left_position += navItems[i].clientWidth;
            }
            indicator.style.left = left_position + "px";
        }
    
        function setActiveNavItem(index) {
            navItems.forEach((item, i) => {
                item.classList.remove('active');
                if (i === index) {
                    item.classList.add('active');
                }
            });
        }
    });
    
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

    

    /* Select */
    $('.select').niceSelect();

    $('.zooming').extm({
        squareOverlay:true,
        position:'right',
        rightPad: 15,
    });
});

