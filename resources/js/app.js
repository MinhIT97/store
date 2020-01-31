require('./bootstrap');
import "jquery";
import "bootstrap";
import "slick-carousel";
console.log("Hello World :)");

$(document).ready(function () {
    $(".product_slider").slick({
        infinite: true,
        autoplay: true,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev"> <i class="fa fa-angle-double-left"></i></button>',
        nextArrow: '<button class="slick-next"> <i class="fa fa-angle-double-right"></i></button>',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 578,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            }
        ]
    });
    $(".main-slider").slick({
        infinite: true,
        arrows: false,
        autoplay: true,
        fade: true,
        dots: false,
        autoplaySpeed: 7000,
        speed: 1000,
        easing: "ease-in-out",
        slidesToShow: 2,
        slidesToScroll: 1
    });
});
