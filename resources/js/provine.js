$(document).ready(function() {
    console.log("ok");
    var provinceID = $('select[name="province_id"]').val();
    if (provinceID) {
        $.ajax({
            url: "api/provinces/" + encodeURI(provinceID),
            type: "GET",
            dataType: "json",
            success: function(result) {
                const province = result.districts;
                $('select[name="district_id"]').empty();
                $.each(province, function(key, value) {
                    $('select[name="district_id"]').append(
                        '<option value="' +
                            value.id +
                            '">' +
                            value.name +
                            "</option>"
                    );
                });
            }
        });
    } else {
        $('select[name="province_id"]').empty();
    }
    $('select[name="province_id"]').on("change", function() {
        var provinceID = $(this).val();
        if (provinceID) {
            $.ajax({
                url: "api/provinces/" + encodeURI(provinceID),
                type: "GET",
                dataType: "json",
                success: function(result) {
                    const province = result.districts;
                    $('select[name="district_id"]').empty();
                    $.each(province, function(key, value) {
                        $('select[name="district_id"]').append(
                            '<option value="' +
                                value.id +
                                '">' +
                                value.name +
                                "</option>"
                        );
                    });
                }
            });
        } else {
            $('select[name="city"]').empty();
        }
    });
});
