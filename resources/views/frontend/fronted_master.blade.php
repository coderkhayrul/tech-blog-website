<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/img/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins.css">
    <!-- rypp -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/rypp.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/style.css">
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend') }}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<!-- Main Wrapper -->
<div id="main-wrapper">

    <!-- Header Top Start -->
    @include('frontend.common.topbar')
    <!-- Header Top End -->

    <!-- Menu Section Start -->
    @include('frontend.common.navbar')
    <!-- Menu Section End -->

    <!-- Hero Section Start -->
    @yield('content')

    <!-- Brand Section Start -->
    @include('frontend.common.brand')
    <!-- Brand Section End -->

    <!-- Footer Section Start -->
    @include('frontend.common.footer')
    <!-- Footer Section End -->

</div>


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('frontend') }}/js/vendor/jquery-1.12.0.min.js"></script>
<!-- Popper JS -->
<script src="{{ asset('frontend') }}/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="{{ asset('frontend') }}/js/plugins.js"></script>
<!-- rypp JS -->
<script src="{{ asset('frontend') }}/js/rypp.js"></script>
<script src="{{ asset('frontend') }}/js/ytp-playlist.js"></script>
<!-- Ajax Mail JS -->
<script src="{{ asset('frontend') }}/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="{{ asset('frontend') }}/js/main.js"></script>

</body>

</html>
