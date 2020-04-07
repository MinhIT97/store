require('./bootstrap');
import "jquery";
import "select2"
import "select2/dist/css/select2.min.css";
window.select2 = require('select2/dist/js/select2.min');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {
    $('.js-example-basic-multiple').select2();
})


$(document).ready(function () {
    $('.js-example-basic-single').select2();
});
// $(document).ready(function() {
//     $('.js-example-basis-multiple').select2();

// })
