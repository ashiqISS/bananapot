$(document).ready(function () {





    $('.dsfds').click(function () {
        var buttonId = $(this).attr('id');
        $('#modal-container').removeAttr('class').addClass(buttonId);
        $('body').addClass('modal-active');
    });

    $('#modal-container').click(function () {
        $(this).addClass('out');
        $('body').removeClass('modal-active');
    });




//side_menu
//
//
//
//


    $('#sidebar').stickySidebar({
        sidebarTopMargin: 20,
        footerThreshold: 580
    });



    $(window).resize(function () {
        /*If browser resized, check width again */
        $('#sidebar').stickySidebar({
            sidebarTopMargin: 20,
            footerThreshold: 580
        });
    });

//
//
//
//
//side_menu

//cart
//
//
//



    //Top Drop Down
    //-----------------------------
    $('.has_dropdown').hover(function () {
        $(this).find('.ng_dropdown').fadeIn(500);
    }, function () {
        $(this).find('.ng_dropdown').fadeOut(10);
        $(this).find('.ng_dropdown').removeClass('active');
    }

    );

    $('a.mycart').click(function () {
        $(this).siblings(".ng_dropdown").toggleClass('active');
    });

    if ($('.ng_dropdown').hasClass('active')) {
        $('.ng_dropdown').click(function (e) { //button click class name is myDiv
            e.stopPropagation();
        });

        $(function () {
            $(document).click(function () {
                $('.ng_dropdown').hide(); //hide the button

            });
        });
    }

//
//
//
//
//
//
//
//cart
















    $('#myCarousel').carousel({
        interval: false
    });

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-' + id).html());
    });




    $("select.pro-dropdown").selecter();

    $('.new_product').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        pauseOnHover: true,
        nav: true,
        arrows: true,
        appendArrows: $("section.new_product_slick h2 span"),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 590,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.Featured_Products').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        pauseOnHover: true,
        nav: true,
        arrows: true,
        appendArrows: $("section.Featured_Products_slick h2 span"),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 590,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.Best_Seller').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        pauseOnHover: true,
        nav: true,
        arrows: true,
        appendArrows: $("section.Best_Seller_slick h2 span"),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 590,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    new WOW().init();


//    $('.sidebar').nail({
//    lOr: 'right' // right sidebar
//
//});

    /*----------------------- BG-Image Wrapper Starts ---------------------------*/

    $(".img-wrapper").each(function () {
        var imageUrl = $(this).find('img').attr("src");
        $(this).find('img').css("visibility", "hidden");
        $(this).css('background-image', 'url(' + imageUrl + ')').css("background-repeat", "no-repeat").css("background-size", "cover").css("background-position", "50% 50%");
    });

    /*----------------------- BG-Image Wrapper Ends ---------------------------*/

    $('.nivo').nivoLightbox({effect: 'slideUp'});

});

(function () {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
        (function () {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function () {
                return this.replace(rtrim, '');
            };
        })();
    }

    [].slice.call(document.querySelectorAll('.input__field')).forEach(function (inputEl) {
        // in case the input is already filled..
        if (inputEl.value.trim() !== '') {
            classie.add(inputEl.parentNode, 'input--filled');
        }

        // events:
        inputEl.addEventListener('focus', onInputFocus);
        inputEl.addEventListener('blur', onInputBlur);
    });

    function onInputFocus(ev) {
        classie.add(ev.target.parentNode, 'input--filled');
    }

    function onInputBlur(ev) {
        if (ev.target.value.trim() === '') {
            classie.remove(ev.target.parentNode, 'input--filled');
        }
    }
});



$(function () {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [100, 300],
        slide: function (event, ui) {
            $("#amount").html("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
            $("#amount1").val(ui.values[ 0 ]);
            $("#amount2").val(ui.values[ 1 ]);
        }
    });
    $("#amount").html("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
});
//
//
//






//   $('.service-det-slider').slick({ slidesToShow: 4, dots: false, autoplay: false, autoplaySpeed: 3000, slidesToScroll: 1, pauseOnHover: true, nav: true, arrows: true, appendArrows: $("section.service-slider-wrp h4 span"), responsive: [ { breakpoint: 1200, settings: { centerMode: false, slidesToShow: 3 } }, { breakpoint: 991, settings: { centerMode: false, slidesToShow: 3 } }, { breakpoint: 767, settings: { centerMode: false, slidesToShow: 2 } }, { breakpoint: 550, settings: { centerMode: false, slidesToShow: 1 } } ] });
//the bold one
//<h4>Advertising Works<span></span></h4>


			