<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Multi Boutique</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/cryptocurrency-icons.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.css') }}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @yield('css')

</head>

    @yield('content')



<!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <!--Plugins JS-->
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/tippy4.min.js') }}"></script>
    <!--Main JS-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('script')

</body>

</html>