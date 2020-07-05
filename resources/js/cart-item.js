$(document).ready(function() {
    var quantityChange = document.getElementsByClassName("quantity");

    Array.from(quantityChange).forEach(input => {
        input.addEventListener("change", function() {
            var id = input.dataset.id;
            var quantity = input.value;
            const url = window.location.origin + "/api/cart/" + id;

            $.ajax({
                type: "PUT",
                url: url,
                data: { quantity: quantity },
                dataType: "json",
                success: function(data) {
                    var amount = new Intl.NumberFormat("vi-VN").format(
                        data.amount
                    );
                    var total = new Intl.NumberFormat("vi-VN").format(
                        data.total_cart_items
                    );
                    $("#alert").html(data.error);
                    $("#amount-" + id).html(amount);
                    $("#total").html(total);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(JSON.stringify(jqXHR));
                    console.log(
                        "AJAX error: " + textStatus + " : " + errorThrown
                    );
                }
            });
        });
    });
});
