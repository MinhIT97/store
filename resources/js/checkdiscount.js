$(document).ready(function () {
    console.log("fcheck discount");

    $("#check-discount").click(function () {
        var val = $('input[name="code"]').val();
        if (val) {
            $.ajax({
                type: "GET",
                url: "api/check-code/" + val,

                dataType: "json",
                success: function (data) {
                    var percent = data.percent;
                    if (percent) {
                        var total = $("#total-price-cart").data("total");

                        var checkout_price = (total * (100 - percent)) / 100;
                        checkout_price = new Intl.NumberFormat("vi-VN").format(
                            checkout_price
                        );
                        $("#total-price-cart").text("VND   " + checkout_price + " ₫");
                        $("#total-price-cart").append(`<div class="text-success mt-4">Coupon codes are enabled</div>`);
                    }
                    else {
                        $("#total-price-cart").append(`<div class="text-danger mt-4">Invalid code</div>`);
                    }
                },
                error: function (request, status, error) {
                    console.log(error);
                }
            });
        }
    });
});
