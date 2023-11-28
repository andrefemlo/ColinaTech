
jQuery(document).ready(function ($) {
    $('.slider-parceiros').slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: true,
        infinity: true,
        autoplaySpeed: 800,
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
    // $('.slick-prev').html('<span class="text-colina-400 text-xl">&lt;</span>');
    // $('.slick-next').html('<span class="text-colina-400 text-xl">&gt;</span>');
    // $('.slick-prev, .slick-next').css('top', '50%');
});
