$(document).ready(function() {
    console.log("cát");

    Pusher.logToConsole = true;

    var pusher = new Pusher("f7cf56caa474f5335067", {
        cluster: "ap1",
        encrypted: true
    });

    var channel = pusher.subscribe("send-message");
    channel.bind("OrderNotification", function(data) {
        $("body").append(
            '<div class="popup-order">' +
                '<div class="row  p-3">' +
                '<div class="col-2 mr-3"> <i class="fas fa-shopping-cart fa-3x"></i></div>' +
                '<div class="col-8"> Nam <div>justuon</div></div>' +
                "</div>" +
                "</div>"
        );
        function removeopup() {
            $(".popup-order").remove();
        }
        setTimeout(removeopup, 4000);
        $("body").append("<div>" + data.title + "</div>");
    });
});
