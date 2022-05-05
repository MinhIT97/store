$(document).ready(function() {
    var lion_btn_cart = $("#lion-btn-cart");

    var lion_cart = $(".lion-cart");

    lion_btn_cart.click(function() {
        lion_cart.slideToggle(200);
    });

    var lion_close_cart = $(".lion-close-cart");

    lion_close_cart.click(function() {
        lion_cart.slideToggle();
    });
});
