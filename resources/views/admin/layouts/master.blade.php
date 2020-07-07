<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Store Admin</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/admin/css/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
    <script type="text/javascript">
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('f7cf56caa474f5335067', {
            cluster: 'ap1',
            encrypted: true,
        });

        var channel = pusher.subscribe('send-message');
        channel.bind('OrderNotification', function(data) {
            alert(JSON.stringify(data));
            console.log(data);
        });
        // $('.menu-notification').prepend(newNotificationHtml);
    </script>

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '{your-app-id}',
                cookie: true,
                xfbml: true,
                version: '{api-version}'
            });

            FB.AppEvents.logPageView();

        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles

    <!-- <link rel="shortcut icon" href="/images/image-admin/favicon.png" /> -->
</head>

<body>
    @section('header')
    @include('admin.layouts.head')
    @show

    @section('footer')
    @include('admin.layouts.footer')
    @show

    <!-- <script src="/vendors/js/vendor.bundle.base.js"></script> -->
    <script src="/js/store.js"></script>
    <script src="/vendors/chart.js/Chart.min.js"></script>

    <script src="js/admin/off-canvas.js"></script>
    <script src="js/admin/hoverable-collapse.js"></script>
    <script src="js/admin/misc.js"></script>

    <script src="js/admin/dashboard.js"></script>
    <script src="js/admin/todolist.js"></script>

    <!-- <script src="js/admin/file-upload.js"></script> -->


    <script src="/js/admin/product.js"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <!-- <script src="/js/app.js"></script> -->
    <!-- <script src="/js/store.js"></script> -->

    <script>
        CKEDITOR.replace('editor1');
    </script>
    @livewireScripts
</body>


</html>
