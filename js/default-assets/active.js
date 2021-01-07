(function ($) {
    'use strict';

    var fci_window = $(window);

    // ****************************
    // :: Preloader Active Code
    // ****************************

    fci_window.on('load', function () {
        $('#preloader').fadeOut('1000', function () {
            $(this).remove();
        });
    });

    // ****************************
    // :: ClassyNav Active Code
    // ****************************

    if ($.fn.classyNav) {
        $('#fciNav').classyNav();
    }

    // ***************************
    // ::  make Project Slide
    // ***************************

    $(".make-project-slide").on("mouseenter", function () {
        $(".make-project-slide").removeClass("active");
        $(this).addClass("active");
    });

    // *********************************
    // :: Welcome Slides Active Code
    // *********************************

    if ($.fn.owlCarousel) {
        var welcomeSlider = $('.welcome-slides');
        welcomeSlider.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 1000,
            nav: true
        })

        welcomeSlider.on('translate.owl.carousel', function () {
            var layer = $("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        welcomeSlider.on('translated.owl.carousel', function () {
            var layer = welcomeSlider.find('.owl-item.active').find("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        function welcomeSlide() {
            $('.owl-item').removeClass('prev next');
            var currentSlide = $('.welcome-slides .owl-item.active');
            currentSlide.next('.owl-item').addClass('next');
            currentSlide.prev('.owl-item').addClass('prev');
            var nextSlideImg = $('.owl-item.next').find('.make-welcome-slide').attr('data-img-url');
            var prevSlideImg = $('.owl-item.prev').find('.make-welcome-slide').attr('data-img-url');
            $('.owl-nav .owl-prev').css({
                background: 'url(' + prevSlideImg + ')'
            });
            $('.owl-nav .owl-next').css({
                background: 'url(' + nextSlideImg + ')'
            });
        }

        welcomeSlide();

        welcomeSlider.on('translated.owl.carousel', function () {
            welcomeSlide();
        });
    }

    // *********************************
    // :: Project Slides Active Code
    // *********************************
    if ($.fn.owlCarousel) {
        var projectSlide = $('.projects-slides');
        projectSlide.owlCarousel({
            items: 5,
            margin: 0,
            loop: true,
            autoplay: true,
            smartSpeed: 1500,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1500: {
                    items: 4
                }
            }
        });
    }

   
    // ********************************
    // :: Search Button Active Code
    // ********************************
    $('.search-btn').on('click', function () {
        $('.search-form').toggleClass('search-form-active');
    })

    // *********************************
    // :: Magnific Popup Active Code
    // *********************************
    if ($.fn.magnificPopup) {
        $('.video-play-btn').magnificPopup({
            type: 'iframe'
        });
    }

    // ***************************
    // :: Tooltip Active Code
    // ***************************
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // ***********************
    // :: WOW Active Code
    // ***********************
    if (fci_window.width() > 767) {
        new WOW().init();
    }

    // ****************************
    // :: Jarallax Active Code
    // ****************************
    if ($.fn.jarallax) {
        $('.jarallax').jarallax({
            speed: 0.5
        });
    }

    // ****************************
    // :: Scrollup Active Code
    // ****************************
    if ($.fn.scrollUp) {
        fci_window.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="arrow_carrot-up"</i>'
        });
    }


    // *********************************
    // :: Prevent Default 'a' Click
    // *********************************
    $('a[href="#"]').on('click', function ($) {
        $.preventDefault();
    });


    // *******************************
    // :: Nice Select Active Code
    // *******************************
    if ($.fn.countdown) {
        $('select').niceSelect();
    }

    

})(jQuery);