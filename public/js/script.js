/*global $,owl,Placeholdem,WOW,smoothScroll,wrap_pop,niceScroll,alert*/
$(document).ready(function () {
    "use strict";

    // For active wow.js
    new WOW().init();


    // Scroll Top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $(".toTop").css("right", "20px");
        } else {
            $(".toTop").css("right", "-60px");
        }
    });

    $(".toTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });


    // Accordion
    var allPanels = $(".accordion > dd").hide();
    allPanels.first().slideDown("easeOutExpo");
    $(".accordion > dt > a").first().addClass("active");

    $(".accordion > dt > a").click(function () {

        var current = $(this).parent().next("dd");
        $(".accordion > dt > a").removeClass("active");
        $(this).addClass("active");
        allPanels.not(current).slideUp("easeInExpo");
        $(this).parent().next().slideDown("easeOutExpo");

        return false;

    });

    $('.inner ul li').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
    });


    // for loading screen
    $(window).load(function () {
        $("body").css('overflow-y', 'auto');
        $('.wrap').fadeOut(1000);
    });


    // Main-slider Slider
    $(".slider-box").owlCarousel({
        navigation: true,
        slideSpeed: 500,
        items: 3,
        responsive: true,
        autoPlay: 3000,
        stopOnHover: true,
        pagination: false,
        navigationText: ["<span class='slider-left'><i class='fa fa-angle-left'></i></span>", "<span class='slider-right'><i class='fa fa-angle-right'></i></span>"],
        itemsCustom: [
			[0, 1],
			[450, 1],
			[600, 2],
			[700, 2],
			[1000, 3]
        ]
    });
    $(".service-slider").owlCarousel({
        navigation: true,
        slideSpeed: 500,
        singleItem: true,
        responsive: true,
        autoPlay: true,
        pagination: false,
        navigationText: ["<span class='slider-left'><i class='fa fa-angle-left'></i></span>", "<span class='slider-right'><i class='fa fa-angle-right'></i></span>"]
    });

    $('.open-search').on('click', function () {
        $('.search-box').stop();
        $('.search-box').slideToggle();
    });


    $('.parallax').parallax();
    $(".button-collapse").sideNav();


    $('.open-down').click(function () {
        $('.out-logged').stop();
        $('.out-logged').slideToggle();
    });
    $('.open-down1').click(function () {
        $('.out-logged1').stop();
        $('.out-logged1').slideToggle();
    });


    //customize the user setting
    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) {
            $('.adding-set').addClass('win');
        } else {
            $('.adding-set').removeClass('win');
        }
    });

    $(".forget").click(function () {
        $(".panel-pop").animate({
            "top": "-100%"
        }, 10).hide();
        $("#forget").show().animate({
            "top": "5%"
        }, 500);
        $("body").prepend("<div class='big-overlay'></div>");
        wrap_pop();
        $('.wrapper-pop').css("transform", "scale(0) rotate(0)");
        return false;
    });


    $(".confirm").click(function () {
        $(".panel-pop").animate({
            "top": "-100%"
        }, 10).hide();
        $("#confirm-pay").show().animate({
            "top": "5%"
        }, 500);
        $("body").prepend("<div class='big-overlay'></div>");
        wrap_pop();
        $('.wrapper-pop').css("transform", "scale(0) rotate(0)");
        return false;
    });


    $(".send-msg").click(function () {
        $(".panel-pop").animate({
            "top": "-100%"
        }, 10).hide();
        $("#ads-msg").show().animate({
            "top": "5%"
        }, 500);
        $("body").prepend("<div class='big-overlay'></div>");
        wrap_pop();
        $('.wrapper-pop').css("transform", "scale(0) rotate(0)");
        return false;
    });


    function wrap_pop() {
        $(".big-overlay").click(function () {
            $(".panel-pop").animate({
                "top": "-100%"
            }, 500).hide(function () {
                $(this).animate({
                    "top": "-100%"
                }, 500);
            });
            $(this).remove();
        });
    }

    //    $('#paied').click(function () {
    //        if ($(this).prop("checked") === true) {
    //            $('.paied-det').stop();
    //            $('.paied-det').slideDown();
    //        }
    //    });
    //
    //    $('#freee').click(function () {
    //        if ($(this).prop("checked") === true) {
    //            $('.paied-det').stop();
    //            $('.paied-det').slideUp();
    //        }
    //    });

    // Shop price slider function
    var current_min_price
    var current_max_price
    window.shop_price_slider_params = {
            'currency_symbol': '$',
            'currency_pos': 'left',
        }
        // shop_price_slider_params is required to continue, ensure the object exists
    if (typeof shop_price_slider_params === 'undefined') {
        return false;
    }
    // Get markup ready for slider
    $('input#min_price, input#max_price').hide();
    $('.price_slider, .price_label').show();

    // Price slider uses $ ui
    var min_price = $('.price_slider_amount #min_price').data('min'),
        max_price = $('.price_slider_amount #max_price').data('max');

    current_min_price = parseInt(min_price, 10);
    current_max_price = parseInt(max_price, 10);


    if (shop_price_slider_params.min_price) current_min_price = parseInt(shop_price_slider_params.min_price, 10);
    if (shop_price_slider_params.max_price) current_max_price = parseInt(shop_price_slider_params.max_price, 10);
    $('body').bind('price_slider_create price_slider_slide', function (event, min, max) {
        if (shop_price_slider_params.currency_pos === 'left') {

            $('.price_slider_amount span.from').html(shop_price_slider_params.currency_symbol + min);
            $('.price_slider_amount span.to').html(shop_price_slider_params.currency_symbol + max);

        } else if (shop_price_slider_params.currency_pos === 'left_space') {

            $('.price_slider_amount span.from').html(shop_price_slider_params.currency_symbol + " " + min);
            $('.price_slider_amount span.to').html(shop_price_slider_params.currency_symbol + " " + max);

        } else if (shop_price_slider_params.currency_pos === 'right') {

            $('.price_slider_amount span.from').html(min + shop_price_slider_params.currency_symbol);
            $('.price_slider_amount span.to').html(max + shop_price_slider_params.currency_symbol);

        } else if (shop_price_slider_params.currency_pos === 'right_space') {

            $('.price_slider_amount span.from').html(min + " " + shop_price_slider_params.currency_symbol);
            $('.price_slider_amount span.to').html(max + " " + shop_price_slider_params.currency_symbol);

        }

        $('body').trigger('price_slider_updated', min, max);
    });

    $('.price_slider').slider({
        range: true,
        animate: true,
        min: min_price,
        max: max_price,
        values: [current_min_price, current_max_price],
        create: function (event, ui) {

            $('.price_slider_amount #min_price').val(current_min_price);
            $('.price_slider_amount #max_price').val(current_max_price);

            $('body').trigger('price_slider_create', [current_min_price, current_max_price]);
        },
        slide: function (event, ui) {

            $('input#min_price').val(ui.values[0]);
            $('input#max_price').val(ui.values[1]);

            $('body').trigger('price_slider_slide', [ui.values[0], ui.values[1]]);
        },
        change: function (event, ui) {

            $('body').trigger('price_slider_change', [ui.values[0], ui.values[1]]);

        },
    });


    // List or Grid function
    $(".shop.products:not(.list-view)").addClass("grid-view");
    $("#shop-view a").on("click", function () {
        $(this).addClass("active").siblings().removeClass("active");
        if ($(this).hasClass("grid-view")) {
            if ($(".shop.products").hasClass("grid-view")) {
                return false
            } else {
                $(".shop.products").fadeOut(300, function () {
                    $(".shop.products").addClass("grid-view").removeClass("list-view").fadeIn(300)
                })
            }
        }
        if ($(this).hasClass("list-view")) {
            if ($(".shop.products").hasClass("list-view")) {
                return false
            } else {
                $(".shop.products").fadeOut(300, function () {
                    $(".shop.products").addClass("list-view").removeClass("grid-view").fadeIn(300)
                })
            }
        }
    });

    //for tooltip
    $('[data-toggle="tooltip"]').tooltip();


    //    //customize the header
    //    $(window).scroll(function () {
    //        if ($(this).scrollTop() > 590) {
    //            $('.header').addClass('sticky');
    //        } else {
    //            $('.header').removeClass('sticky');
    //        }
    //    });
});