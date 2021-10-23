jQuery(document).on('ready', function($) {
    "use strict";

    /**=========================
        LOADER
    =========================**/
    $(window).on('load', function() {
        $('#loader').fadeOut('slow',function(){$(this).remove();});
    });

    /**=========================
        HEADER FIXED SCROLL
    =========================**/
    $(window).on('scroll', function () {
        if($(window).scrollTop() > 400){
            $("#nav-menu").addClass('header-fixed');
        }else{
            $("#nav-menu").removeClass('header-fixed');
        }
    });

    /**=========================
        NAVBAR
    =========================**/
    $(function(){
        if($(window).width() > 768){
            $(".dropdown").hover(
            function(){
                $(this).find('.dropdown-menu').first().stop(true, true).slideDown(400);
                $(this).toggleClass('open');
                $(this).find('.dropdown-menu').parent('.nav-item.dropdown').addClass("dropdown-active");
            },
            function(){
                $(this).find('.dropdown-menu').first().stop(true, true).slideUp(100);
                $(this).toggleClass('open');
                $(this).find('.dropdown-menu').parent('.nav-item.dropdown').removeClass("dropdown-active");
            });
        };
    });
    // Closes responsive menu when a scroll trigger link is clicked
    $('.landing-page-menu .easing-click').click(function(t) {
        t.preventDefault();
        $('.navbar-collapse').collapse('hide');
    });

    /**=========================
        COUNTER
    =========================**/
    $('.counter-up').counterUp({
        delay: 10,
        time: 10000
    });

    /**=========================
        EASING
    =========================**/
    // Smooth scrolling using jQuery easing
    $(".easing-click").on('click', function(e) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
        $('html, body').animate({
            scrollTop: (target.offset().top - 72)
        }, 1000, "easeInOutExpo");
            return false;
        }
    });

    /**=========================
        PLAY VIDEO
    =========================**/
    $('#clickplay').on('click', function(event) {
        var vi = $("#videoinput").val();
        $("#vidframe").attr('src', vi);
        event.preventDefault();
    });

    /**=========================
        MAGANIFIC POPUP
    =========================**/
    $('a.mfpclick').click(function(m) {
        m.preventDefault();
        var gallery = $(this).attr('href');
        $(gallery).magnificPopup({
            delegate: 'a',
            type:'image',
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true
            }
        }).magnificPopup('open');
    });

    /**=========================
        SLICK CAROUSEL
    =========================**/
    // Slider
    $('#slider-carousel').bsTouchSlider();
    $('.carousel').carousel({
        pause: "false",
    });

    // People Says
    $('.people-says-carousel').slick({
        slidesToShow: 3,
        dots: false,
        centerMode: true,
        autoplay: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        infinite: true,
        responsive:[
            {
                breakpoint: 1200,
                settings:{
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 767,
                settings:{
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    });

    // Clients
    $('.clients-carousel').slick({
        slidesToShow: 6,
        dots: false,
        centerMode: true,
        autoplay: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        infinite: true,
        responsive:[
            {
                breakpoint: 767,
                settings:{
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                }
            }
        ]
    });

}(jQuery)); // End jQuery