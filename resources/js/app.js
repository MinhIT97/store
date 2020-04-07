require('./bootstrap');
import "jquery";
import "bootstrap";
import "slick-carousel";
import "select2"
import "select2/dist/css/select2.min.css";
window.select2 = require('select2/dist/js/select2.min');

console.log("Hello World :)");
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

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

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });
});
$(document).ready(function () {
    $('.js-example-basic-multiple').select2();
});
