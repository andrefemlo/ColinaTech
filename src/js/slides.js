
jQuery(document).ready(function ($) {
    $('.slider-parceiros').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        infinity: true,
        autoplaySpeed: 1000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            }
        ]
    });
});


jQuery(document).ready(function ($) {
    $('.slider-resultados').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
});
jQuery(document).ready(function ($) {
    $('.slider-testimonies').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        infinity: true,
        autoplaySpeed: 4000,
        dots: true,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>',
    });
});