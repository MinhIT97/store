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

    <script src="/vendors/js/vendor.bundle.base.js"></script>

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
    <script src="/js/store.js"></script>

    <script>
        CKEDITOR.replace('editor1');

    </script>
    @livewireScripts
</body>


</html>
