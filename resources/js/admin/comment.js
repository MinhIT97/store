$(document).ready(function () {
    console.log("coem");
    console.log($("#exampleInputComment").val());
    console.log($("#user_id").val());
    $("#comment-create").submit(function (event) {
        event.preventDefault();
        console.log(event);

        const id = $("#exampleInputComment").data("id");
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });
        $.ajax({
            type: "post",
            url: "api/products/" + id + "/comments",
            data: {
                body: $("#exampleInputComment").val(),
                user_id: $("#user_id").val()
            },
            dataType: "json",
            success: function (data) {
                $("#comment-create").trigger("reset");
                $("#comment-create .close").click();
                window.location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-task-errors').html('');
                $.each(errors.messages, function (key, value) {
                    console.log(value);
                    $('#add-task-errors').append('<li>' + value + '</li>');
                });
                $("#add-error-bag").show();
            }
        });
    });
    $("#comment-create-blogs").submit(function (event) {
        event.preventDefault();
        console.log(event);

        const id = $("#exampleInputComment").data("id");
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });
        $.ajax({
            type: "post",
            url: "api/blogs/" + id + "/comments",
            data: {
                body: $("#exampleInputComment").val(),
                user_id: $("#user_id").val()
            },
            dataType: "json",
            success: function (data) {
                $("#comment-create").trigger("reset");
                $("#comment-create .close").click();
                window.location.reload();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-task-errors').html('');
                $.each(errors.messages, function (key, value) {
                    console.log(value);
                    $('#add-task-errors').append('<li>' + value + '</li>');
                });
                $("#add-error-bag").show();
            }
        });
    });
});
